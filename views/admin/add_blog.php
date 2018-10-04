<?php 
ob_start();
session_start();
authenticate();
include "includes/header.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="BoardSpeck">
<title> </title>

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



<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the Article page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your article.</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" id="myForm" method="post">
<div class="form-group mb30">
<label class="control-label">Article Title</label>
<input class="form-control input-md" id="title" name="title" placeholder="Write a suitable title for your article"  type="text" required>
</div>
<div class="form-group mb30">
<label class="control-label">Author Name</label>
 <input class="form-control input-md" name="author" id="author" placeholder="Enter Authors fullname here"  type="text" required>

<div class="form-group mb30">
<label class="control-label" for="textarea">Body</label>

<textarea class="form-control" id="body" name="body" placeholder="Write your article here" rows="4" required></textarea>
</div>
  <br/>

<!-- <h2 class="title-2">Add Image here</h2>
<div class="form-group">
<label class="control-label">Add images</label>
 <input class="file" id="featured-img" type="file" name="upload" required>
 </div>
 <br>
<br> -->
<input type="submit" class="btn btn-common" name="submit" value="Add">
</form>
</div>
</div>
</div>
</div>

</section>

<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->


<!-- <script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );
</script> -->
<script type="text/javascript">
 CKEDITOR.replace( 'body',
 {
		toolbarGroups :
		[
      	{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        	{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
          { name: 'links' },
            { name: 'insert' },
              	{ name: 'others' },
            	{ name: 'forms' },
            { name: 'tools' },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'styles' },
            { name: 'colors' },
		]
	});
</script>




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
<script type="text/javascript" src="myscript/myscript.js"></script>
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
		var blog = {};
		var errors = {};

	if (form.title.value == 0) {
	
		errors.title = "Title is required";
	}else{
		blog.title = form.title.value;
	}
	if (form.author.value.length == 0) {

		errors.author = "email must be valid";
	}
	else{
		blog.author = form.author.value;
	}
	if (form.body.value.length == 0) {

		errors.body = "must be numbers";
	}
	else{
		blog.body = form.body.value;
	}

	if (Object.keys(errors).length == 0) {

		var url = 'addBlog';
  		var method = 'POST';
  		var params =  'title=' + blog.title +
  					 '&author=' + blog.author +
  					 '&body=' + blog.body;
  		addBlog(url, method, params);
  		
  				function addBlog(url, method, params){
  					var xhr = new XMLHttpRequest();
  					xhr.onreadystatechange = function(){
    				if(xhr.readyState == 4){
     					 var res = xhr.responseText;
     					 console.log(res);
     					 
     					 var data = JSON.parse(res);
     					 if (data.response[0].success) {
     					 	window.location = "/addImage?t=blog&&hash_id="+data.response[0].hash_id;
     					 }else{
     					 	console.log("nothing here");
     					 }
      						
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

</html>
