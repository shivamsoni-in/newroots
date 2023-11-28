<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo PROJECT_NAME; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
  <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
</head>
<body>


</body>
<script>
    
$( document ).ready(function() {
          sweetAlert({
                title:'Payment done!',
                text: 'Your fees has been paid successfully!',
                type:'success'
          },function(){
    window.location.href = 'https://www.newrootshairtransplant.com/india/';
});
    
});
</script>
</html>
