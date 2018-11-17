<?php 
ob_start();
session_start();
authenticate();
include "includes/header.php";
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
<link rel="stylesheet" type="text/css" href="css/preloader.css">
</head>
<body>



<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Register on the BoardSpeck Web Office</h2>
</div>
</div>
</div>
</div>
</div>



<section id="content">
<div class="container">
<div class="row">


<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
<div class="page-login-form box">

<h3>
Register
</h3>
<form role="form" id="myForm" class="login-form" method="POST" action="" enctype="multipart/form-data">
<div class="form-group">
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Firstname" required>
</div>
</div>
<div class="form-group">
<div class="input-icon">

<i class="icon fa fa-user"></i>
<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Lastname" required>
</div>
</div>
<div class="form-group">

<div class="input-icon" id="mail">
<i class="icon fa fa-envelope"></i>
<input type="text" id="email" class="form-control" name="email" placeholder="Email Address" required>
</div>
</div>
<div class="form-group">

<div class="input-icon">
<i class="icon fa fa-envelope"></i>
<input type="text" id="phonenumber" class="form-control" name="phonenumber" placeholder="Phonenumber" required>
</div>
</div>
<div class="form-group">
<div class="input-icon">

<i class="icon fa fa-unlock-alt"></i>
<input type="password" class="form-control" name="pword" placeholder="Password" required>
</div>
</div>
<div class="form-group">

<div class="input-icon">
<i class="icon fa fa-unlock-alt"></i>
<input type="password" class="form-control" name="cpword" placeholder="Retype Password" required>
</div>
</div>

<!-- <h2 class="title-2">Add Image here</h2>
<div class="form-group">
<label class="control-label">Add images</label>
 <input class="file" id="featured-img" type="file" name="upload">
 </div>
 <br>
<br> -->


<div class="checkbox">
<input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
<label for="remember">By creating account you agree to our Terms & Conditions</label>
</div>
<input type="submit"  name="submit"
<button class="btn btn-common log-btn"></button>
<label for="remember">Already registered and Verified? <a href="adminLogin"> Sign In</a></label>


</form>
<div  id="preload" class="loader" ></div>
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
	        window.addEventListener('load', function(){
            
            if (!sessionStorage.getItem("session_id")) {
                window.location = "/admin_login";
            }
        }, false)
});


var form = document.forms.myForm

//Form validation using ajax to send post request to the backend.
form.addEventListener('submit', displayform, false);

function displayform(event){
	event.preventDefault();
	  var preload = document.getElementById('preload');
  preload.className = "preloader";
  console.log(preload);
		var user = {};
		var errors = {};
	var alphabet = /^[a-zA-Z]+$/;
	var numbers = /^[0-9]+$/;
	var mailValidation = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (!form.firstname.value.match(alphabet) || form.firstname.length == 0) {
	
		errors.firstname = "firstname must be alphabet";
	}else{
		user.firstname = form.firstname.value;
	}
	if (!form.lastname.value.match(alphabet) || form.firstname.value.length == 0) {

		errors.lastname = "lastname must be alphabet";
	}
	else{
		user.lastname = form.lastname.value;
	}
	if (!form.email.value.match(mailValidation) || form.email.value.length == 0) {

		errors.email = "email must be valid";
	}
	else{
		user.email = form.email.value;
	}
	if (!form.phonenumber.value.match(numbers) || form.phonenumber.value.length == 0) {

		errors.phonenumber = "must be numbers";
	}
	else{
		user.phone = form.phonenumber.value;
	}
	if (form.pword.value != form.cpword.value) {
		
		errors.password = "password must match";
	}
	else{
	user.pword = form.pword.value;

	}
/*	if (form.upload.value == "") {
		errors.upload = "must not be empty";
	}
	else{
		user.upload = form.upload.value;
	}*/


	if (Object.keys(errors).length == 0) {

		var url = 'register';
  		var method = 'POST';
  		var params = 

  					'firstname=' + user.firstname +
  					 '&lastname=' + user.lastname +
  					 '&email=' + user.email +
  					 '&pword=' + user.pword +
  					 /*'&upload=' + user.upload +*/
  					 '&phonenumber=' + user.phone;
  		register(url, method, params);
  		/*console.log(params);*/
  				function register(url, method, params){
  					var xhr = new XMLHttpRequest();
  					xhr.onreadystatechange = function(){
    				if(xhr.readyState == 4){
     					 var res = xhr.responseText;
      						/*console.log(res);*/
      						if (res) {
      							  var preload = document.getElementById('preload');
  									preload.className = "loader";
  									console.log(preload);
      						}
      						
      						alert(JSON.stringify(res));

      					/*document.getElementById('sub').innerHTML = res ;*/
   					 }
 				 }
  					xhr.open(method, url, true);
  					xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  					xhr.send(params);
				}
	}
	else{
		alert(JSON.stringify(errors));
	}
	
}
</script>

</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:55 GMT -->
</html>
