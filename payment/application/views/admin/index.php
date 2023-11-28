<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo PROJECT_NAMEADMIN; ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/custom.css">
 <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
	    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114x114.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" id="auth-login" enctype="multipart/form-data" class="needs-validation" novalidate="">
                    <div id="msg"></div>
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                     
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
            
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
  
  <script>
   $(document).ready(function(){  
         $('#auth-login').on('submit', function(e){  
           e.preventDefault(); 
       
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/authlogin",   
                     method:"POST",  
                     data:new FormData(this),   
                     contentType: false,  
                     cache: false,  
                     processData:false, 
                     dataType: "json",
                     success:function(data)  
                     { 
                       if(data.status) { 
                       window.location.href ='<?php echo base_url(); ?>admin/dashboard';
                       }
                       else {
                            $("#msg").html('<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>&times;</span></button>Entered credentials are wrong</div></div>');
                                setTimeout(function() {
                                    $(".alert").fadeTo(100, 0).slideUp(100, function() {
                                        $(this).remove();
                                    });
                                }, 2000);
                            }
                     }  
                });  

      }); 
   });
  </script>
</body>

</html>