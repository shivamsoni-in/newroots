<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_FILES['resume']['name']))
{

    require 'db_connect.php';
    $filename = $_FILES["resume"]["name"];
    $filesize = $_FILES["resume"]["size"];
    $filetmp = $_FILES["resume"]["tmp_name"];
    $filetype = $_FILES["resume"]["type"];
    date_default_timezone_set('Asia/Kolkata');
    $added_on = date('Y-m-d h:i:s');
    
    $image = move_uploaded_file($filetmp, "uploaded-file/". $filename);
    $name = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['contact'];
    $pagename = 'india';
    
    $insertQuery = mysqli_query($conn, "INSERT INTO contactform_data(name, email, contact, pagename, added_on) VALUES ('$name','$email','$mobile', '$pagename', '$added_on')");
}




$mail = new PHPMailer(true);

if(isset($_FILES['resume']['name']))

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'newrootsxmb@gmail.com';                     //SMTP username
    $mail->Password   = 'mbfagbtxsitknndt';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom($email, 'New Roots Website Contact Form - India');
    $mail->addAddress('info@newrootshairclinic.com');    //Add a recipient
    $mail->addCC('newrootsxmb@gmail.com');    //Add a recipient
    $mail->addAttachment("uploaded-file/". $filename);

    $message="Name : ".$name."<br>" ."Email : ".$email."<br>"."Mobile Number : ".$mobile."<br>";

        //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Roots Website Contact Form - India';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send())
    // echo 'Message has been sent';
    {
        echo '<script type ="text/JavaScript">
        
        window.location.href = "index.php";
        </script>  
        ';  
    }
   
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>