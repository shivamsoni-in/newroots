<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/razorpay/Razorpay.php");
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
class Hair_transplant_payment extends CI_Controller {
    
    public function __construct()

    {
    
        parent::__construct();
        $this->load->model('Hair_transplant_payment_model','HTPM');
        
    
    }

    public function index()
	{
        
            $this->load->view('hair_transplant_payment');
    }
    public function student_info()
	{
        $response=array();
        $email=$_POST['email'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mname=$_POST['mname'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $year=$_POST['year'];
        $hostel=$_POST['hostel'];
        $library=$_POST['library'];
        date_default_timezone_set('Asia/Kolkata');
          
                    $this->session->set_userdata(array(    
                        'fname'=>$fname,
                        'mname'=>$mname,
                        'lname'=>$lname,
                        'email'=>$email,
                        'phone'=>$phone,
                        'dob'=>$dob,
                        'year'=>$year,
                        'hostel'=>$hostel,
                        'library'=>$library,
                        'registered_date'=>date('Y-m-d H:i:s')
                        ));
                    $response['message']='success';
        
        echo json_encode($response); 
    }



    public function pay()
    {
      $amount =$_POST['amount'];
      $username=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];
      $location=$_POST['location'];
      date_default_timezone_set('Asia/Kolkata');
      $api = new Api('rzp_live_pCDgLZ2J8cCNPs', 'Txl5W51lvgz4BZP7mepCNqXe');
      
      $_SESSION['payable_amount'] = $amount;
      $razorpayOrder = $api->order->create(array(
        'receipt'         => rand(),
        'amount'          => $_SESSION['payable_amount'] * 100, // 2000 rupees in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
      ));
      $amount = $razorpayOrder['amount'];
      $razorpayOrderId = $razorpayOrder['id'];
      $_SESSION['razorpay_order_id'] = $razorpayOrderId;
      $data = $this->prepareData($amount,$razorpayOrderId,$username,$address,$location,$phone,$email);
      $this->session->set_userdata(array(    
                        'username'=>$username,
                        'address'=>$address,
                        'amount'=>$amount,
                        'location'=>$location,
                        'phone'=>$phone,
                        'email'=>$email,
                        ));
      $this->load->view('rezorpay',array('data' => $data));
          
      }
    /**
     * This function verifies the payment,after successful payment
     */
    public function verify()
    {
      $success = true;
      $error = "payment_failed";
      if (empty($_POST['razorpay_payment_id']) === false) {
        $api = new Api('rzp_live_pCDgLZ2J8cCNPs', 'Txl5W51lvgz4BZP7mepCNqXe');
      try {
          $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
          );
          $_SESSION['razorpay_payment_id']=$_POST['razorpay_payment_id'];
          $api->utility->verifyPaymentSignature($attributes);
        } catch(SignatureVerificationError $e) {
          $success = false;
          $error = 'Razorpay_Error : ' . $e->getMessage();
        }
      }
      if ($success === true) {
        /**
         * Call this function from where ever you want
         * to save save data before of after the payment
         */
        $this->setRegistrationData();
        $this->session->sess_destroy();
       redirect(base_url().'hair-transplant-payment/success');    
       
      }
      else {
       redirect(base_url().'hair-transplant-payment/paymentFailed');
      }
    }
    /**
     * This function preprares payment parameters
     * @param $amount
     * @param $razorpayOrderId
     * @return array
     */
    public function prepareData($amount,$razorpayOrderId,$username,$address,$location,$phone,$email)
    {
      $data = array(
        "key" => 'rzp_live_pCDgLZ2J8cCNPs',
        "amount" => $amount,
        "name" => "Newroots Hairtransplant",
        "description" => "Treatment Payment",
        "image" => base_url()."assets/img/logo.png",
        "prefill" => array(
          "name"  => $username,
          "email"  => $email,
          "contact" => $phone,
        ),
        "notes"  => array(
        
          "merchant_order_id" => rand(),
        ),
        "theme"  => array(
          "color"  => "#F37254"
        ),
        "order_id" => $razorpayOrderId,
      );
      return $data;
    }
    /**
     * This function saves your form data to session,
     * After successfull payment you can save it to database
     */
    public function setRegistrationData()
    {
     
      
      $amount = $_SESSION['payable_amount'];
      $username=$this->session->userdata('username');
      $address=$this->session->userdata('address');
      $location=$this->session->userdata('location');
      $email=$this->session->userdata('email');
      $phone=$this->session->userdata('phone');
      date_default_timezone_set('Asia/Kolkata');
      $created=date("Y-m-d H:i:s");
      $mailid='newrootshairtransplant@magicalballoonsprojects.com';
      $sav = array(
         'order_id' => $_SESSION['razorpay_order_id'],
         'razorpayid' => $_SESSION['razorpay_payment_id'],
         'username'      => $username,
         'address'       => $address,
         'location'      => $location,
         'phone'         => $phone,
         'email'         => $email,
         'amount'        => $amount,
         'paymentdate'     => $created,
      );
      if($this->HTPM->checkout($sav)){
      $to = $email;
$subject = "Newroots Hair Transplant Payment";
$message = "<html>

<head>
    <title>Newroots-hairtransplant</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
    <meta name='format-detection' content='telephone=no'>
</head>
<body>
            <p>Name : $username.</p>
            <p>Contact no: $phone</p>
            <p>Email id: $email</p>
            <p>Address: $address</p>
            <p>Location: $location</p>
            <p>Amount Paid: $amount</p>
            
</body>
</html>"
;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$mailid.'>' . "\r\n";
$headers .= 'Cc: '.$mailid.'' . "\r\n";
mail($to,$subject,$message,$headers);

    }
   
    }  
    public function success()
    {
        $this->load->view('success');
    }
    
    public function paymentFailed()
    {
      $this->load->view('paymentFailed');
    }
    
}
