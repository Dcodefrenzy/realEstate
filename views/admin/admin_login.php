<?php
ob_start();
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.graygrids.com/themes/classix-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:54 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="BoardSpeck">
<title>BoardSpeck Web Office </title>

<link rel="shortcut icon" href="assets/img/favicon.png">

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
</head>
<body>



<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Login to your the BoardSpeck Web Office</h2>
</div>
</div>
</div>
</div>
</div>


<section id="content">
<div class="container">
<div class="row">



<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
<div class="page-login-form box">
<h3>
Login
</h3>
<form role="form" class="login-form" method="POSt" action="" id="myForm">
<div class="form-group">
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="icon fa fa-unlock-alt"></i>
<input type="password" name="pword" class="form-control" placeholder="Password">
</div>
</div>
<div class="checkbox">
<input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
<label for="remember">Remember me</label>
</div>
<input class="btn btn-common log-btn" type="submit" name="submit" value="submit">
</form>
<ul class="form-links">
<li class="pull-left"><a href="adminRegistration">Don't have an account?</a></li>
<li class="pull-right"><a href="forgot-password.html">Lost your password?</a></li>
</ul>
<br/>
<a href="index">
<button class="btn btn-common red-btn">Go to home</button>
</a>
</div>
</div>
</div>
</div>
</section>




<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
  window.addEventListener('load', function(){
  console.log("here");
});


var form = document.forms.myForm

//Form validation using ajax to send post request to the backend.
form.addEventListener('submit', displayform, false);
var errors = {};
function displayform(event){
  event.preventDefault();
    var user = {};
  var alphabet = /^[a-zA-Z]+$/;
  var numbers = /^[0-9]+$/;
  var mailValidation = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!form.email.value.match(mailValidation) || form.email.value.length == 0) {

    errors = "Please enter a valid email and password";
  }
  else{
    user.email = form.email.value;
   
  }
  if (form.pword.value == "") {
    errors = "Please enter a valid email and password";
  }
  else{
     user.pword = form.pword.value;
  }

    if (Object.keys(errors).length == 0) {

          var url = "adminLogin";
          var method = "POST";
          var params = "email=" + user.email + "&pword=" + user.pword;
          adminLogin(url, method, params);
            console.log(params);


          function adminLogin(url, method, params){
             var xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function(){
                if (xhr.readyState == 4) {
                      var res = xhr.responseText;
                      var data = JSON.parse(res);
                      console.log(data.response[0].hash_id);
                     if (data.response[0].message == true) {
                      sessionStorage.setItem('session_id', data.response[0].hash_id);
                      sessionStorage.setItem('session_name', data.response[0].name);
                      window.location = "/adminHome";
                    }
                    else{
                      console.log("error");
                    }
                    

                }
              }
              xhr.open(method, url, true);
              xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
              xhr.send(params);
          } 
    }
    else{
      console.log(errors);
    }
  }
</script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:55 GMT -->
</html>
