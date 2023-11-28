<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);



try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'newrootsxmb@gmail.com';                     //SMTP username
    $mail->Password   = 'ccnvhusugxnrcznm';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    // $mail->setFrom($email, 'New Roots Website Contact Form - India');
    $mail->addAddress('info@newrootshairclinic.com');    //Add a recipient
    $mail->addCC('newrootsxmb@gmail.com');    //Add a recipient
    // $mail->addAttachment("uploaded-file/". $filename);

    $message="Test";

        //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Roots Contact Form';
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