<!DOCTYPE html>
<html lang="en">


<!-- forms-editor.html  21 Nov 2019 03:55:08 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo PROJECT_NAMEADMIN ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/jquery-selectric/selectric.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/bootstrap-daterangepicker/daterangepicker.css">
 <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
	    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/img/apple-touch-icon-114x114.png">
  <style>
.modal-backdrop.show {
    opacity: 1;
}
.modal-backdrop {
    top: 0;
    left: 0;
    z-index: 0;
    width: 100vw;
    height: 100vh;
    background-color: transparent;
}
.modal{
    margin-top:50px;
}
  </style> 
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php include_once('header.php')?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
           
 
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add blog</h4>
                  </div>
                  <form method="post" id="addblog" enctype="multipart/form-data">
                       <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Title</label>
                      <div class="col-sm-12 col-md-10">
                        <input type="text" name="topic" class="form-control" required>
                      </div>
                    </div>

                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Cover image</label>
                      <div class="col-sm-12 col-md-10">
                        <div class="form-group">
                    
                      <input type="file" name="coverimg" class="form-control" required>
                    </div>
                      </div>
                    </div>
                    <!--<div class="form-group row mb-4">-->
                    <!--  <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Short description</label>-->
                    <!--  <div class="col-sm-12 col-md-10">-->
                    <!--    <textarea name="shortdescription" class="form-control" required></textarea>-->
                    <!--  </div>-->
                    <!--</div>-->
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Content</label>
                      <div class="col-sm-12 col-md-10">
                        <textarea id="summernote" name="blogcontent" required></textarea >
                      </div>
                    </div>
                    
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Date Picker</label>
                      <div class="col-sm-12 col-md-10">
                       <input type="text" name="blogdate" class="form-control datepicker">
                      </div>
                    </div>
                    <div id="msg"></div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2"></label>
                      <div class="col-sm-12 col-md-10">
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                  </div>
                  </form>
                 
                </div>
              </div>
            </div>
     
          </div>
        </section>
     
      </div>
      <?php include_once('footer.php')?>
    </div>
  </div>
  <!-- General JS Scripts -->
   <script>
	$(document).ready(function () {
		$('#summernote').summernote({
			height: "500px",
			popatmouse: false,
			callbacks: {
				onImageUpload: function (image) {
					uploadImage(image[0]);
				},
				onMediaDelete: function (target) {
					deleteFile(target[0].src);
				}
			}
		});
		
		function deleteFile(imgSrc) {
			$.post('<?php echo base_url(); ?>admin/deleteparticularimg',{'imgSrc':imgSrc},function (re) {
				console.log(re);
			});
		}
		
		function uploadImage(image) {
			var data = new FormData();
			data.append("image", image);
			// console.log(data);
			$.ajax({
			    url:"<?php echo base_url(); ?>admin/uploadparticularimg", 
				cache: false,
				contentType: false,
				processData: false,
				data: data,
				type: "post",
				success: function (url) {
					var image = $('<img>').attr('src', url);
					$('#summernote').summernote("insertNode", image[0]);
				},
				error: function (data) {
					console.log(data);
				}
			});
		}
		
		
	});
	
	
	$('#addblog').on('submit', function(e){  
           e.preventDefault(); 
      
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/addblog",   
                     method:"POST",  
                     data:new FormData(this),   
                     contentType: false,  
                     cache: false,  
                     processData:false, 
                     dataType: "json",
                     success:function(data)  
                     { 
                        if (data.status) { 
                            $('[name="blogcontent"]').summernote("code","");
                            $('#addblog')[0].reset();
                            swal('Blog Add', 'Your blog was added successfully!', 'success');
                                  
                       }
                       else{
                        
                            swal('Try again', 'Something went wrong!', 'error');
                         
                       } 
                     }  
                });  
	
      });
</script>
  <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url(); ?>assets/admin/bundles/sweetalert/sweetalert.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/ckeditor/ckeditor.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/bundles/cleave-js/dist/cleave.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/select2/dist/js/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/page/ckeditor.js"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>

 
</body>


<!-- forms-editor.html  21 Nov 2019 03:55:16 GMT -->
</html>