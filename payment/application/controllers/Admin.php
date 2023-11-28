<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
         header('HTTP/1.0 200 OK');
         header('HTTP/1.1 200 OK');
         header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
         header('Cache-Control: no-cache');
         header('Cache-Control: post-check=0, pre-check=1');
         header('Pragma: no-cache');
        $this->load->model('Admin_model','AM');
    }
    public function index() {
        if($this->session->userdata('adminusername')!='')
	    {
	         $data['title']='dashborad';
	         $data['tabs']='';
	         $data['totalpayment']=$this->AM->allpayment();
             $this->load->view('admin/dashboard',$data);
	    }
	    else
	    {
	        
	       $this->load->view('admin/index');
	    }
    }
    public function login() {
        $this->load->model('Superadmin');
        $this->load->view('admin/login');
    }
    public function authlogin() {
        $response = array();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $this->AM->authlogin($username, $password);
        if ($query->num_rows() > 0) {
            $this->session->set_userdata(array('adminusername' => $username,));
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    public function dashboard() {

        if($this->session->userdata('adminusername')!='')
	    {    $data['title']='dashborad';
	         $data['tabs']='';
	                 $data['totalpayment']=$this->AM->allpayment();
             $this->load->view('admin/dashboard',$data);
	    }
	    else
	    {
	       $this->load->view('admin/index');
	    }
    }
    public function view_blogs() {
        if($this->session->userdata('adminusername')!='')
	    {    $data['title']='blogs';
	         $data['tabs']='view-blogs';
             $this->load->view('admin/view_blogs',$data);
	    }
	    else
	    {
	       $this->load->view('admin/index');
	    }
    }
    public function add_blog() {
        if($this->session->userdata('adminusername')!='')
	    {    $data['title']='blogs';
	         $data['tabs']='add-blog';
             $this->load->view('admin/add_blog',$data);
	    }
	    else
	    {
	       $this->load->view('admin/index');
	    }
    }
    public function comments() {
        if($this->session->userdata('adminusername')!='')
	    {    $data['title']='comments';
	         $data['tabs']='comments';
             $this->load->view('admin/comments',$data);
	    }
	    else
	    {
	       $this->load->view('admin/index');
	    }
    }
    
    public function payments() {
        if($this->session->userdata('adminusername')!='')
	    {    $data['title']='payments';
	         $data['tabs']='payments';
             $this->load->view('admin/payments',$data);
	    }
	    else
	    {
	       $this->load->view('admin/index');
	    }
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . 'admin/index');
    }
    
    public function uploadparticularimg(){
    if ($_FILES['image']['name']) {
        if (!$_FILES['image']['error']) {
        $name = md5(rand(100, 200));
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = $name.
        '.'.$ext;
        $destination = 'assets/img/blog/'.$filename; //change this directory
        $location = $_FILES["image"]["tmp_name"];
        move_uploaded_file($location, $destination);
        echo base_url().'assets/img/blog/'.$filename; //change this URL
        }
    else {
        echo $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
    }}
    }
    
     public function deleteparticularimg(){
    if(isset($_POST['imgSrc'])) {
	$file = str_replace(base_url(),"",$_POST['imgSrc']);
	if(!unlink($file)) {
		echo("Error deleting");
	} else {
		echo("Deleted ");
	}
}
    }
    
  
    
     public function addblog() {
        $response = array();
        $topic = $_POST['topic'];
        $blogdate = $_POST['blogdate'];
        // $shortdescription = $_POST['shortdescription'];
        $blogcontent = $_POST['blogcontent'];
        $str1 = preg_replace('/[^a-zA-Z0-9_ -]/s','',$_POST['topic']);
        $bloglink = preg_replace('!\s+!', '-', $str1);
        $bloglink= strtolower($bloglink);
        date_default_timezone_set('Asia/Kolkata');
        $created = date("Y-m-d H:i:s");
        if (!empty($_FILES['coverimg']['name'])) {
            $config['upload_path'] = 'assets/img/blog';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $_FILES['coverimg']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('coverimg')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            } else {
                $picture = '';
            }
        } else {
            $picture = '';
        }
        $data = array(
            'topic' => $topic,
            // 'short_description' => $shortdescription,
            'blog_link' => $bloglink,
            'blog_content' => $blogcontent,
            'blog_date' => $blogdate,
            'coverimg' => $picture,
            'status' => 'enable',
            'upload_date' => $created);
            
        if ($this->AM->addblog($data)) {
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    
    public function getallblog() {
        $response = array();
        $response['data'] = array();
        $query = $this->AM->getallblog();
        $x = 1;
        foreach ($query->result_array() as $data) {
            $temp = array();
            $temp['id'] = $x;
            $temp['blogid'] = $data['id'];
            $temp['topic'] = $data['topic'];
            $temp['blogdate'] = $data['blog_date'];
            $temp['coverimg'] = $data['coverimg'];
            $temp['status'] = $data['status'];
            array_push($response['data'], $temp);
            $x++;
        }
        echo json_encode($response);
    }
    
    public function viewblogdetails() {
        $id = $this->uri->segment('3');
        $response = array();
        $query = $this->AM->viewblogdetails($id);
        $x = 1;
        foreach ($query->result_array() as $data) {
            $response['id'] = $x;
            $response['blogid'] = $data['id'];
            $response['topic'] = $data['topic'];
            $response['blogdate'] = $data['blog_date'];
            // $response['shortdescription'] = $data['short_description'];
            $response['coverimg'] = $data['coverimg'];
            $response['blogcontent'] = $data['blog_content'];
            $x++;
        }
        echo json_encode($response);
    }
    
     public function updateblog() {
        $response = array();
        $topic = $_POST['topic'];
        $id = $_POST['blogid'];
        $coverimg1 = $_POST['coverimg1'];
        $blogdate = $_POST['blogdate'];
        // $shortdescription = $_POST['shortdescription'];
        $blogcontent = $_POST['blogcontent'];
        $str1 = preg_replace('/[^a-zA-Z0-9_ -]/s','',$_POST['topic']);
        $bloglink = preg_replace('!\s+!', '-', $str1);
        $bloglink= strtolower($bloglink);
        date_default_timezone_set('Asia/Kolkata');
        $created = date("Y-m-d H:i:s");
        if (!empty($_FILES['coverimg']['name'])) {
            $config['upload_path'] = 'assets/img/blog';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $_FILES['coverimg']['name'];
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('coverimg')) {
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
                unlink('assets/img/blog/' . $coverimg1);
            } else {
                $picture = $coverimg1;
            }
        } else {
            $picture = $coverimg1;
        }
        $data = array(
            'topic' => $topic,
            // 'short_description' => $shortdescription,
            'blog_link' => $bloglink,
            'blog_content' => $blogcontent,
            'blog_date' => $blogdate,
            'coverimg' => $picture,
            'status' => 'enable',
            'upload_date' => $created);
            
        if ($this->AM->updateblog($data,$id)) {
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    
    public function blogstatus() {
        $response = array();
        $id = $_POST['id'];
        $status = $_POST['status'];
        $data = array('status' => $status);
        if ($this->AM->blogstatus($id, $data)) {
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    
    public function deleteblog() {
        $response = array();
        $id = $_POST['id'];
        $coverimg = $_POST['coverimg'];
        if ($this->AM->deleteblog($id) && $this->AM->deletecomments($id)) {
            if ($coverimg != '') {
                $response['status'] = true;
                $response['message'] = "success";
                unlink('assets/img/blog/' . $coverimg);
            } else {
                $response['status'] = true;
                $response['message'] = "success";
            }
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
  
    
 
    	public function fetchallblogs()
	{
        
        $output = '';
        $query = $this->AM->fetchallblogs();

        foreach($query->result_array() as $blogs) {
        $day=  date("d", strtotime($blogs['blog_date']));  
        $month=  date("M", strtotime($blogs['blog_date']));  
        $year=  date("Y", strtotime($blogs['blog_date']));  
        $output .= '<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="single-blog-colum-style1">
                            <!--Start single blog post-->
                            <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="img-holder">
                                    <img src="'.base_url('assets/img/blog/'.$blogs['coverimg']).'" alt="Awesome Image">
                                    <div class="overlay-style-two"></div>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="post-date">
                                                <h3>'.$month.' <br><span>'.$day.'</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3 class="blog-title"><a href="'.base_url('blogs/'.$blogs['blog_link']).'">'.$blogs['topic'].'</a></h3>
                                    <div class="meta-box">
                                        <ul class="meta-info">
                                            <li>Category <a href="#">'.$blogs['category'].'</a></li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <p>'.$blogs['short_description'].'</p>
                                        <a class="btn-two" href="'.base_url('blogs/'.$blogs['blog_link']).'">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End single blog post-->
                        </div>
                    </div>';

    }

    echo json_encode($output);
        
	}
	
	    	public function particularblog()
	{
        $response = array();
        $link = $_POST['link'];
        $output = '';
        $heading = '';
        $query = $this->AM->particularblog($link);

        foreach($query->result_array() as $blogs) {
        $day=  date("d", strtotime($blogs['blog_date']));  
        $month=  date("F", strtotime($blogs['blog_date']));  
        $year=  date("Y", strtotime($blogs['blog_date']));  
        $output .= '                            <div class="single-blog-post">
                                <div class="main-image-box">
                                    <img src="'.base_url('assets/img/blog/'.$blogs['coverimg']).'" alt="Awesome Image">
                                </div>
                                <div class="top-text-box">
                                    '.$blogs['blog_content'].'
                                </div>
                               

                               
                                <div class="tag-with-social-links-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inner-content clearfix">
                                                <div class="tag-box pull-left">
                                                    <p>Category:</p>
                                                    <ul>
                                                        <li><a href="#">'.$blogs['category'].'</a></li>
                                                    </ul>
                                                </div>
                                                <div class="social-links-box pull-right">
                                                    <p><i class="fa fa-share-alt-square" aria-hidden="true"></i>Share this post:</p>
                                                    <ul class="sociallinks fix">
                                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u='.base_url('blogs/'.$blogs['blog_link']).'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              
                            </div>';
                    
         $heading .= '<div class="single-post-info-content text-center">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>Category <a href="#">'.$blogs['category'].'</a></li>
                                    <li>On <a href="#">'.$month.' '.$day.','.$year.'</a></li>
                                </ul>
                            </div>
                            <h1 class="blog-title">'.$blogs['topic'].'</h1>
                        </div>';
                              

    }
 $response['main'] = $output;
 $response['heading'] = $heading;
    echo json_encode($response);
        
	}
	
	
		public function recentblogs()
	{
        
        $output = '';
        $query = $this->AM->recentblogs();

        foreach($query->result_array() as $blogs) {
        $day=  date("d", strtotime($blogs['blog_date']));  
        $month=  date("F", strtotime($blogs['blog_date']));  
        $year=  date("Y", strtotime($blogs['blog_date']));  
        $output .= '<li>
                                        <div class="img-holder">
                                            <img src="'.base_url('assets/img/blog/'.$blogs['coverimg']).'" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="'.base_url('blogs/'.$blogs['blog_link']).'"><span class="icon-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <span>'.$month.' '.$day.','.$year.'</span>
                                            <h5 class="post-title"><a href="'.base_url('blogs/'.$blogs['blog_link']).'">'.$blogs['topic'].'</a></h5>
                                        </div>
                    </li>';

    }

    echo json_encode($output);
        
	}


	public function filterblogbycategory()
	{
        $category = $_POST['category'];
        $output = '';
        if($category=='all'){
        $query = $this->AM->fetchallblogs();        
        }
        else{
        $query = $this->AM->filterblogbycategory($category);    
        }
        
        foreach($query->result_array() as $blogs) {
        $day=  date("d", strtotime($blogs['blog_date']));  
        $month=  date("F", strtotime($blogs['blog_date']));  
        $year=  date("Y", strtotime($blogs['blog_date']));  
        $output .= '<div class="col-md-12">
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">'.$blogs['category'].'</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">'.$day.' '.$month.','.$year.'<i class="lnr lnr-calendar-full"></i></a></li>
                                           
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="'.base_url('assets/img/blog/'.$blogs['coverimg']).'" alt="">
                                        <div class="blog_details">
                                            <a href="'.base_url('blogs/'.$blogs['blog_link']).'"><h2>'.$blogs['topic'].'</h2></a>
                                            <p>'.$blogs['short_description'].'</p>
                                            <a href="'.base_url('blogs/'.$blogs['blog_link']).'" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            </div>';

    }

    echo json_encode($output);
        
	}
    public function contactmail() {
        $response = array();
        $name = $_POST['username'];
        $email = $_POST['email'];
        $subject1 = $_POST['subject01'];
        $message1 = $_POST['message01'];
        $to = "newrootshairclinic@gmail.com";
$subject = "Newroots Hair Transplant Contact form";
$message = "<html>

<head>
    <title>Newroots Hair Transplant</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
    <meta name='format-detection' content='telephone=no'>
</head>
<body>
            <p>Name : $name.</p>
            <p>Email id: $email</p>
            <p>Subject: $subject1</p>
            <p>Message: $message1</p>
            
</body>
</html>"
;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: newrootshairclinic@gmail.com' . "\r\n";
if (mail($to,$subject,$message,$headers)) {
    $response['status'] = true;
    $response['message'] = "success";
} else {
    $response['status'] = false;
    $response['message'] = "error";
}
 echo json_encode($response);
    }
    
    
    
     public function addblogcomment() {
        $response = array();
        $blog_id = $_POST['blog_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        date_default_timezone_set('Asia/Kolkata');
        $created = date("Y-m-d H:i:s");
        
        $data = array(
            'blog_id' => $blog_id,
            'username' => $username,
            'email' => $email,
            'comment' => $comment,
            'status' => 'hide',
            'added_on' => $created);
            
        if ($this->AM->addblogcomment($data)) {
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    
     public function getallcomments()
    {
        $response=array();
        $response['data']=array();
        $query=$this->AM->comments();
        
        $x=1;
        $topic='';
        foreach($query->result_array() as $data)
        {
            $temp=array();
            $temp['id']=$x;
            $temp['commentid']=$data['id'];
            $temp['comment']=$data['comment'];
            $temp['username']=$data['username'];
            $temp['email']=$data['email'];
            $temp['status']=$data['status'];
            $query1=$this->AM->commentsname($data['blog_id']);
             foreach($query1->result_array() as $data1)
             {
                $temp['topic']=$data1['topic'];
             }
            array_push($response['data'],$temp);
            $x++;
        }
        
        
        echo json_encode($response);
    }

    public function commentstatus() {
        $response = array();
        $id = $_POST['id'];
        $status = $_POST['status'];
        $data = array('status' => $status);
        if ($this->AM->commentstatus($id, $data)) {
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    
    public function deletecomment() {
        $response = array();
        $id = $_POST['id'];
        if ($this->AM->deletecomment($id)) {
            $response['status'] = true;
            $response['message'] = "success";
        } else {
            $response['status'] = false;
            $response['message'] = "error";
        }
        echo json_encode($response);
    }
    
    
     public function bookappointment() {
        $response = array();
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $to = "newrootshairclinic@gmail.com";
$subject = "Newroots Hair Transplant Appointment Form";
$message = "<html>

<head>
    <title>Newroots Hair Transplant</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
    <meta name='format-detection' content='telephone=no'>
</head>
<body>
            <p>Name : $name.</p>
            <p>Email id: $email</p>
            <p>Phone: $phone</p>
            
</body>
</html>"
;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: newrootshairclinic@gmail.com' . "\r\n";
if (mail($to,$subject,$message,$headers)) {
    $response['status'] = true;
    $response['message'] = "success";
} else {
    $response['status'] = false;
    $response['message'] = "error";
}
 echo json_encode($response);
    }
    
    
     public function bookappointmentbangla() {
        $response = array();
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $to = "newrootshairclinicdhaka@gmail.com";
$subject = "Newroots Hair Transplant Appointment Form";
$message = "<html>

<head>
    <title>Newroots Hair Transplant</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
    <meta name='format-detection' content='telephone=no'>
</head>
<body>
            <p>Name : $name.</p>
            <p>Email id: $email</p>
            <p>Phone: $phone</p>
            
</body>
</html>"
;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: newrootshairclinicdhaka@gmail.com' . "\r\n";
if (mail($to,$subject,$message,$headers)) {
    $response['status'] = true;
    $response['message'] = "success";
} else {
    $response['status'] = false;
    $response['message'] = "error";
}
 echo json_encode($response);
    }
    
    public function consultform() {
        $response = array();
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $grade = $_POST['hair'];
        $to = "newrootshairclinic@gmail.com";
$subject = "Newroots Hair Transplant Consultation form";
$message = "<html>

<head>
    <title>Newroots Hair Transplant</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
    <meta name='format-detection' content='telephone=no'>
</head>
<body>
            <p>Name : $name.</p>
            <p>Email id: $email</p>
            <p>Phone: $phone</p>
            <p>Grade: $grade</p>
            
</body>
</html>"
;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: newrootshairclinic@gmail.com' . "\r\n";
if (mail($to,$subject,$message,$headers)) {
    $response['status'] = true;
    $response['message'] = "success";
} else {
    $response['status'] = false;
    $response['message'] = "error";
}
 echo json_encode($response);
    }
    
    
    public function consultformbangla() {
        $response = array();
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $grade = $_POST['hair'];
        $to = "newrootshairclinicdhaka@gmail.com";
$subject = "Newroots Hair Transplant Consultation form";
$message = "<html>

<head>
    <title>Newroots Hair Transplant</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
    <meta name='format-detection' content='telephone=no'>
</head>
<body>
            <p>Name : $name.</p>
            <p>Email id: $email</p>
            <p>Phone: $phone</p>
            <p>Grade: $grade</p>
            
</body>
</html>"
;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
$headers .= 'Cc: newrootshairclinicdhaka@gmail.com' . "\r\n";
if (mail($to,$subject,$message,$headers)) {
    $response['status'] = true;
    $response['message'] = "success";
} else {
    $response['status'] = false;
    $response['message'] = "error";
}
 echo json_encode($response);
    }
    
     public function getallpayments()
    {
        $response=array();
        $response['data']=array();
        $query=$this->AM->getallpayments();
        
        $x=1;
        $topic='';
        foreach($query->result_array() as $data)
        {
            $temp=array();
            $temp['id']=$x;
            $temp['paymentid']=$data['id'];
            $temp['phone']=$data['phone'];
            $temp['username']=$data['username'];
            $temp['address']=$data['address'];
            $temp['email']=$data['email'];
            $temp['amount']=$data['amount'];
            $temp['location']=$data['location'];
            $temp['order_id']=$data['order_id'];
            $temp['razorpayid']=$data['razorpayid'];
            $temp['paymentdate']=$data['paymentdate'];
            array_push($response['data'],$temp);
            $x++;
        }
        
        
        echo json_encode($response);
    }
    
}
?>