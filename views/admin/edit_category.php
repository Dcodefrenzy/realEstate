<?php 
ob_start();
session_start();
authenticate();
  $conn = new Database();
  $db = $conn->getConnection();
  $categories = new Categories($db);
  $res['categories'] = array();
  if (isset($_GET)) {
    
    $hash_id = $_GET['hash_id'];
    $categories->hash_id = $hash_id;
    $stmt = $categories->selectOne();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    extract($row);
  }
  include "includes/header.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="">
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
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please edit your category</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" id="myForm" method="POST">
<div class="form-group mb30">
<label class="control-label">Add category_name</label>
<input class="form-control input-md" id=<?php echo $hash_id; ?> name="category_name" placeholder="Write a suitable category_name for your article"  type="text" value=<?php echo $category_name; ?> required>
</div>

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
     
            if (!sessionStorage.getItem("session_id")) {
                window.location = "/admin_login";
            }

        }, false);


var form = document.forms.myForm

//Form validation using ajax to send post request to the backend.
form.addEventListener('submit', displayform, false);

function displayform(event){
	event.preventDefault();
		var category = {};
		var errors = {};

	if (form.category_name.value == 0) {
	
		errors.category_name = "category_name is required";
	}
	else{
		category.category_name = form.category_name.value;
    category.id = form.category_name.id;
	}
	

console.log(category.id);
console.log(category.category_name)

	if (Object.keys(errors).length == 0) {
		var url = 'edit_Category';
  		var method = 'POST';
  		var params =  'category_name=' + category.category_name+
                    '&hash_id=' + category.id;
  		edit_category(url, method, params);
  		/*console.log(params);*/
  				function edit_category(url, method, params){
  					var xhr = new XMLHttpRequest();
  					xhr.onreadystatechange = function(){
    				if(xhr.readyState == 4){
     					 var res = xhr.responseText;
      						console.log(res);

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
