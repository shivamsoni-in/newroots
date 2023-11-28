<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
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

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
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
.note-editing-area{
    margin-top:70px;
}
  </style> 
</head>

<body>
<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
    <<?php include_once('header.php')?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-block">
                    <h4>All Blogs</h4>
                  
                  </div>
                  <div class="card-body data-table-list">
                    <div class="table-responsive">
                      <table class="table table-striped" id="viewallblogs">
                        <thead>
                          <tr>
                            <th class="text-center">
                            Sr no.
                            </th>
                            <th>Topic</th>
                            
                            <th>Blog Date</th>
                            <th>Coverimg</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                        </tbody>
                        <tfoot>
                            <tr>
                            <th class="text-center">
                            Sr no.
                            </th>
                            <th>Topic</th>
                            
                            <th>Blog Date</th>
                            <th>Coverimg</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Delete</th>
                          </tr> 
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section>
        
      </div>
          <div class="modal fade bd-example-modal-lg" id="updateblogmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
            <form method="post" id="updateblog" enctype="multipart/form-data">
     
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Title</label>
                      <div class="col-sm-12 col-md-10">
                        <input type="text" name="topic" class="form-control" required>
                        
                        <input type="text" name="blogid" class="form-control" required hidden>
                      </div>
                    </div>
                    
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-left col-12 col-md-2 col-lg-2">Cover image</label>
                      <div class="col-sm-12 col-md-10">
                        <div class="form-group">
                    
                      <input type="file" name="coverimg" class="form-control">
                       <input type="text" name="coverimg1" class="form-control" hidden>
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
                       <input type="text" name="blogdate" class="form-control datepicker" required>
                      </div>
                    </div>
                    <div id="msg"></div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-2"></label>
                      <div class="col-sm-12 col-md-10">
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>
                    </div>
            
                  </form>
                  </div>
            </div>
              </div>
            </div>
          </div>
        </div>
     <?php include_once('footer.php')?>
    </div>
  </div>
     <script>
	$(document).ready(function () {
	    window.history.replaceState('','',window.location.href)
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
	
		  function viewblog(id) {
        var base_url = '<?php echo base_url();?>';
        $('#blogid').val('');
        $('#updateblog')[0].reset();
            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo base_url(); ?>admin/viewblogdetails/" + id
                , type: "GET"
                , dataType: "JSON"
                , success: function (data) {
                    $('[name="topic"]').val(data.topic);
                    $('[name="blogid"]').val(data.blogid);
                    // if(data.category=='Digital'){
                    //     $("p:first").addClass("intro");
                    //     $("select option[value='Digital']").attr("selected","selected");
                      
                    // }
                    // else if(data.category=='Graphic'){
                    //     $("select option[value='Graphic']").attr("selected","selected");
                       
                    // }
                    // else if(data.category=='Website'){
                    //     $("select option[value='Website']").attr("selected","selected");
                    // }
                    // else if(data.category=='Branding'){
                    //     $("select option[value='Branding']").attr("selected","selected");
                    // }
                    // else if(data.category=='Miscellaneous'){
                    //     $("select option[value='Miscellaneous']").attr("selected","selected");
                    // }
                    // else{
                    //     $("select option[value='0']").attr("selected","selected");
                    
                    // }
                    $('[name="blogdate"]').val(data.blogdate);
                    //  $('[name="shortdescription"]').val(data.shortdescription);
                    $('[name="blogcontent"]').summernote("code",""+data.blogcontent+"");
                    $('[name="coverimg1"]').val(data.coverimg);
                    $('#updateblogmodal').modal('show');
              
        }});
   
}

function blogstatus(id,status) {
  $.ajax({
                url: "<?php echo base_url(); ?>admin/blogstatus",
                type: "POST",
                data: {
                  'id': id,
                  'status': status,
                },
                dataType: "json",
                success: function (data) {
                    if (data.message == 'success') {
                      $('#viewallblogs').DataTable().ajax.reload();
                }        
                else {
                   swal('Try again', 'Something went wrong!', 'error');
                    }
                }
            });
}

function deleteblog(id,coverimg) {
  $.ajax({
                url: "<?php echo base_url(); ?>admin/deleteblog",
                type: "POST",
                data: {
                  'id': id,
                  'coverimg': coverimg,
                },
                dataType: "json",
                success: function (data) {
                    if (data.message == 'success') {
                    $('#viewallblogs').DataTable().ajax.reload();
                }        
                else {
                    swal('Try again', 'Something went wrong!', 'error');
                    }
                }
            });
}

		$('#updateblog').on('submit', function(e){  
           e.preventDefault(); 
     
        if($('#blogcategory:selected').val()=='0'){
          $("#msg").html('<div class="alert alert-danger alert-dismissible show fade"><div class="alert-body"><button class="close" data-dismiss="alert"><span>&times;</span></button>Please select blog category</div></div>');
                                setTimeout(function() {
                                    $(".alert").fadeTo(100, 0).slideUp(100, function() {
                                        $(this).remove();
                                    });
                                }, 2000);
        }
        else{
       
                $.ajax({  
                     url:"<?php echo base_url(); ?>admin/updateblog",   
                     method:"POST",  
                     data:new FormData(this),   
                     contentType: false,  
                     cache: false,  
                     processData:false, 
                     dataType: "json",
                     success:function(data)  
                     { 
                        if (data.status) { 
                            $('#viewallblogs').DataTable().ajax.reload();
                            $('#updateblog')[0].reset();
                            $('#updateblogmodal').modal('hide');
                            swal('Blog Updated', 'Your blog was updated successfully!', 'success');
                                  
                       }
                       else{
                        
                            swal('Try again', 'Something went wrong!', 'error');
                         
                       } 
                     }  
                });  
	}
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
    <script src="<?php echo base_url(); ?>assets/admin/bundles/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

        <script src="<?php echo base_url();?>assets/admin/data-table/data-table-act.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url();?>assets/admin/js/page/forms-advanced-forms.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/page/ckeditor.js"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>

 
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>