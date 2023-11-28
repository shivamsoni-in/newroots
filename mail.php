<?php
if(isset($_POST['submit'])){
    
    require 'db_connect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $pagename = 'india';
    date_default_timezone_set('Asia/Kolkata');
    $added_on = date('Y-m-d h:i:s');
    $insertQuery = mysqli_query($conn, "INSERT INTO contactform_data(name, email, contact, pagename, added_on) VALUES ('$name','$email','$phone','$pagename', '$added_on')");
  
$to = "info@newrootshairclinic.com";
// $to = "newrootsxmb@gmail.com";
$subject = "NewRoots India Website Contact Form";

$message ='
<html>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row">
	
		<div class="col-md-12">
		<div>
		
		<div class="col-md-12">
		
    		<div class="row">
    		 <p style="text-align:left;color:black;">Name :&nbsp;&nbsp;'.$name.'<p>
    		<div>
    		
    		<div class="row">
    		 <p style="text-align:left;color:black;">Email-id :&nbsp;&nbsp;'.$email.'<p>
    		<div>
		
    		<div class="row">
    		<p style="text-align:left;color:black;">Phone no :&nbsp;&nbsp;<a href="tel:+91'.$phone.'">'.$phone.'</a> <p>
    		<div>
        </div>
        
	</div>
</div>
</table>
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <newrootsxmb@gmail.com>' . "\r\n";
$headers .= 'Cc: newrootsxmb@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
header( "Location: thankyou.php" );
}
?>