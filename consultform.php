<?php
	
	// Database connection 
	
 

	// Upload multiple image in Database using PHP MYSQL

	if (!empty($_FILES['multipleFile']['name'])) {

        $username=$_POST['username'];
         $email=$_POST['email'];
          $phone=$_POST['contact'];
            
        
		$multiplefile = $_FILES['multipleFile']['name'];

		foreach ($multiplefile as $name => $value) {
			
		$allowImg = array('png','jpeg','jpg','');	

		$fileExnt = explode('.', $multiplefile[$name]);

		if (in_array($fileExnt[1], $allowImg)) {

		    if ($_FILES['multipleFile']['size'][$name] > 0 && $_FILES['multipleFile']['error'][$name]== 0) {
					
			$fileTmp = $_FILES['multipleFile']['tmp_name'][$name];
					
			$newFile = 	rand(). '.'. $fileExnt[1];

			$target_dir = 'uploads/'.$newFile; 
			$img_file="https://www.newrootshairtransplant.com/India/uploads/$newFile";

			if (move_uploaded_file($fileTmp, $target_dir)) {
			    
			    
			    $to = "magicalballoons.it@gmail.com";
                $subject = "newroot contact form";
                $message = "<html>
                
                <head>
                     
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0 '>
                    <meta name='format-detection' content='telephone=no'>
                </head>
                <body>
                           
                             <p>Email: $email</p>
                             <p>Name: $username</p>
                             <p>Phone: $phone</p>
                             <p>img: https://www.newrootshairtransplant.com/India/uploads/$newFile</p>
                            
                </body>
                </html>"
                ;
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <'.$email.'>' . "\r\n";
                $headers .= 'Cc: magicalballoons.it@gmail.com' . "\r\n";
                mail($to,$subject,$message,$headers);
			}
		    }
		}
	    }
	}	

?>