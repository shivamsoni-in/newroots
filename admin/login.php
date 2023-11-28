<?php
    session_start();    
    require('db_connect.php');
    if(isset($_POST['submit']))
    {
        $username= mysqli_real_escape_string($conn,$_POST['username']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
        $getQuery = mysqli_query($conn,"SELECT * FROM payment_admin WHERE username='$username' and password='$password'") or die("Query Failed");
        $count = mysqli_num_rows($getQuery);

        if($count>0){
            $_SESSION['ADMIN_LOGIN'] = 'yes';
            $_SESSION['ADMIN_USERNAME'] = $username;
            header('location:index.php');
        }
        else{
            $msg = 'Please enter valid credentials';
        }
    }   
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>New Roots - Admin</title>
    <link rel="icon" href="img/newrootlogo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<div class="main_content_iner">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                              <div class="col-lg-6 col-12">
                            <div class="modal-content cs_modal">
                                <div class="modal-header justify-content-center">
                                    <h5 class="modal-title text-center">Admin Login</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                        <div class="row social_login_btn">
                                            
                                        </div>
                                        <!-- <div class="border_style">
                                            <span>Or</span>
                                        </div> -->
                                        <div class="">
                                            <input type="text" name="username" class="form-control" placeholder="Username" required/>
                                        </div>
                                        <div class="">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required/>
                                        </div>
                                        <!-- <a href="" class="btn_1 full_width text-center">Log in</a> -->
                                        <button type="submit" name="submit" class="btn_1 full_width text-center">Submit</button>
                                    </form>
                                    <?php
                                        if(isset($msg))
                                        {
                                            echo '<div class="alert alert-danger text-center mt-2" role="alert">'.$msg.'</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
</section>



<script src="js/jquery1-3.4.1.min.js"></script>
<script src="js/bootstrap1.min.js"></script>
<script src="vendors/tagsinput/tagsinput.js"></script>
<script src="js/custom.js"></script>
</body>
</html>