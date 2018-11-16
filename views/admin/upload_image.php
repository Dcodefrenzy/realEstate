<?php 
ob_start();
session_start();
authenticate();
include "includes/header.php";
  $conn = new Database();
  $db = $conn->getConnection();
if ($_GET['t'] == "blog") {
      $upload_img = new Blog($db);
}elseif ($_GET['t']=="property") {
  $upload_img = new Properties($db);
}elseif ($_GET['t'] =="admin") {
  $upload_img = new Admin($db);
}elseif($_GET['t']=="about") {
  $upload_img = new About($db);
}



$message = "";
$error=[];

if(array_key_exists('submit', $_POST)){
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(empty($error)){
    $ver = compressImage($_FILES,'upload',90, 'uploads/' );
 
    $upload_img->file_path = $ver;
    $upload_img->hash_id  = $_GET['hash_id'];
    if ($upload_img->updateImage()) {
      $message = 'Upload';
      if ($_GET['t'] == "blog") {
        header("Location:viewAdminBlog?message=$message");
      }
      if ($_GET['t'] == "property") {
        header("Location:view_properties?message=$message");
      }
      if ($_GET['t'] == "admin") {
        header("Location:viewAdmins?message=$message");
      }
      if ($_GET['t']== "about") {
        header("Location:viewAbout?message=$message");
      }
    }else{
      $message = "upload not Successful";
    }

  }
}

 ?>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <div class="page-ads box">
          <div class="row search-bar mb30">
            <div class="advanced-search">
              <form class="search-form" method="get">
                <div class="col-md-4 col-sm-12 search-col">
                  <h3>Please Upload your Image</h3>
                </div>
              </form>
            </div>
          </div>
          <form class="form-ad" action="" method="post" enctype="multipart/form-data">
            <h2 class="title-2">Upload New Image</h2>
            <h2><?php echo $message; ?></h2>
            <div class="form-group">
              <?php $display = displayErrors($error, 'upload');
              echo $display ?> <br>
              <input class="file" id="featured-img" type="file" name="upload"><br>
              <br>
              <input type="submit" class="btn btn-common" name="submit" value="Upload">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->
  <script src="assets/js/jquery-min.js" type="text/javascript">
  </script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript">
  </script>
  <script src="assets/js/material.min.js" type="text/javascript">
  </script>
  <script src="assets/js/material-kit.js" type="text/javascript">
  </script>
  <script src="assets/js/jquery.parallax.js" type="text/javascript">
  </script>
  <script src="assets/js/owl.carousel.min.js" type="text/javascript">
  </script>
  <script src="assets/js/wow.js" type="text/javascript">
  </script>
  <script src="assets/js/main.js" type="text/javascript">
  </script>
  <script src="assets/js/jquery.counterup.min.js" type="text/javascript">
  </script>
  <script src="assets/js/waypoints.min.js" type="text/javascript">
  </script>
  <script src="assets/js/jasny-bootstrap.min.js" type="text/javascript">
  </script>
  <script src="assets/js/form-validator.min.js" type="text/javascript">
  </script>
  <script src="assets/js/contact-form-script.js" type="text/javascript">
  </script>
  <script src="assets/js/jquery.themepunch.revolution.min.js" type="text/javascript">
  </script>
  <script src="assets/js/jquery.themepunch.tools.min.js" type="text/javascript">
  </script>
  <script src="assets/js/bootstrap-select.min.js">
  </script>
  <script src="assets/js/fileinput.js">
  </script>
</body>
<!-- Mirrored from demo.graygrids.com/themes/classix-template/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:57 GMT -->
</html>
