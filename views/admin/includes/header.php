<?php
ob_start();
header("cache-control:no-cache");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="GrayGrids Team">
  <title>
</title>
  <!-- <script type="text/javascript" src="/assets/ckeditor5-build-classic/ckeditor.js"></script> -->
  
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/preloader.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
  <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  <link href="assets/css/fileinput.css" rel="stylesheet">
  <link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "89dfd893-f2f1-401c-a666-5189937829da",
      autoRegister: false,
      notifyButton: {
        enable: true,
      },
    });
  });
</script>
</head>
<body>
 
  <div class="header">
    <nav class="navbar navbar-default main-navigation" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="#"><img src="assets/img/logo3.jpg" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="postadd">
              <a class="btn btn-danger btn-post" href="index"><span class="fa fa-plus-circle"></span> Go to Public</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <div class="close" data-toggle="offcanvas" data-target=".navmenu">
        <i class="fa fa-close"></i>
      </div>
      <h3 class="title-menu">All Pages</h3>
      <ul class="nav navmenu-nav">
           <li><a href="adminHome">Home</a></li>
           <li><a href="admin_register">Add admin</a></li>
           <li><a href="view_admins">view admins</a></li>
           <li><a href="add_property">Add Property</a></li>
           <li><a href="view_properties">view Properties</a></li>
           <li><a href="add_blog">Add Blog</a></li>
           <li><a href="viewAdminBlog">view Blog</a></li>
           <li><a href="add_category">Add Categories</a></li>
           <li><a href="view_categories">view Categories</a></li>
         <!--    <li><a href="add_about">Add About Us</a></li>
            <li><a href="manage_about">About Us</a></li> -->
        

            <!-- <li><a href="log">Logs</a></li> -->
          <li> <a href="logout">Logout</a></li>
      </ul>
    </div>

    <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
      <p><i class="fa fa-file-text-o"></i> All Pages</p>
    </div>

