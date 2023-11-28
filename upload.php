<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">






<?php 

function multi_attach_mail($to, $subject, $message, $senderEmail, $senderName, $files = array()){ 
    // Sender info  
    $from = $senderName." <".$senderEmail.">";  
    $headers = "From: $from"; 
 
    // Boundary  
    $semi_rand = md5(time());  
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
    // Headers for attachment  
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  
 
    // Multipart boundary  
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";  
 
    // Preparing attachment 
    if(!empty($files)){ 
        for($i=0;$i<count($files);$i++){ 
            if(is_file($files[$i])){ 
                $file_name = basename($files[$i]); 
                $file_size = filesize($files[$i]); 
                 
                $message .= "--{$mime_boundary}\n"; 
                $fp =    @fopen($files[$i], "rb"); 
                $data =  @fread($fp, $file_size); 
                @fclose($fp); 
                $data = chunk_split(base64_encode($data)); 
                $message .= "Content-Type: application/octet-stream; name=\"".$file_name."\"\n" .  
                "Content-Description: ".$file_name."\n" . 
                "Content-Disposition: attachment;\n" . " filename=\"".$file_name."\"; size=".$file_size.";\n" .  
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
        } 
    } 
     
    $message .= "--{$mime_boundary}--"; 
    $returnpath = "-f" . $senderEmail; 
     
    // Send email 
    $mail = mail($to, $subject, $message, $headers, $returnpath);  
     
    // Return true if email sent, otherwise return false 
    if($mail){ 
        return true; 
    }else{ 
        return false; 
    } 
}

 
 if (isset($_POST["submit"]) && !empty($_FILES['multipleFile']['name'])) {
     
       $multiplefile = $_FILES['multipleFile']['name'];
        
		foreach ($multiplefile as $name => $value) {
			
		$allowImg = array('png','jpeg','jpg','');	

		$fileExnt = explode('.', $multiplefile[$name]);

		if (in_array($fileExnt[1], $allowImg)) {

		    if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {
					
			$fileTmp = $_FILES['multipleFile']['tmp_name'][$name];
					
           $file = 'uploads/'.$multiplefile[$name]; 
		 

			if (move_uploaded_file($fileTmp, $file)) {
			    
			    }}}}
		
      echo  $username=$_POST['username'];
      echo  $email=$_POST['email'];
      echo  $phone=$_POST['contact'];
                       
        $array_length = count($multiplefile);
       
 	  for ($i = 0; $i < $array_length; ++$i) {
          $multiplefile[$i];
            $files = array( 
                'uploads/' .$multiplefile[0],
                'uploads/' .$multiplefile[1],
                'uploads/' .$multiplefile[2],
                'uploads/' .$multiplefile[3],
                'uploads/' .$multiplefile[4],
                'uploads/' .$multiplefile[5],
                'uploads/' .$multiplefile[6],
                'uploads/' .$multiplefile[7],
                'uploads/' .$multiplefile[8],
                'uploads/' .$multiplefile[9],
                'uploads/' .$multiplefile[10],
                
                ); 
            }
                // print_r($files);
                  
// Email configuration 
$to = 'info@newrootshairclinic.com'; 
$from = $email; 
$fromName =$username ; 
$htmlContent = "From: $username<br> Phone: $phone<br> E-Mail: $email <br>";
$subject = 'NewRoots India Contact Form';  

// Call function and pass the required arguments 
$sendEmail = multi_attach_mail($to, $subject, $htmlContent, $from, $fromName, $files); 

// Email sending status 
      echo $sendEmail?'<script>
        setTimeout(function() {
            swal({
                title: "Submited successfully",
                text: "Success!",
                type: "success"
            }, function() {
                window.location = "contact.php";
            });
        }, 100);
        </script>':'<script>
        setTimeout(function() {
            swal({
                title: "No sent try again",
                text: "Somthing Went Wrong!",
                type: "error"
            }, function() {
                window.location = "contact.php";
            });
        }, 100);
        </script>';
 
}

?>