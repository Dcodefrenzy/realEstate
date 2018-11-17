<?php 
ob_start();
session_start();
authenticate();
  $conn = new Database();
  $db = $conn->getConnection();
  $blog= new Properties($db);
  if (isset($_GET)) {
    
    $hash_id = $_GET['hash_id'];
    $blog->hash_id = $hash_id;
    $stmt = $blog->selectOne();
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
<form class="form-ad" action="" id="myForm" method="POST">
<div class="form-group mb30">
<label class="control-label">Add Property</label>
<input class="form-control input-md" id=<?php echo $hash_id ?> name="property" placeholder="Write a suitable property name"  type="text" value=<?php echo $property; ?> required>
</div>
<div class="form-group mb30">
<label class="control-label">location Name</label>
 <input class="form-control input-md" name="location" id="location" placeholder="Enter locations name here"  type="text" value=<?php echo $location; ?> required>
</div>

<div class="form-group mb30">
<label class="control-label">Price</label>
 <input class="form-control input-md" name="price" id="price" placeholder="Enter price  here" value=<?php echo $price; ?>  type="numbers" required>
</div>

<div class="form-group mb30">
<label class="control-label" for="textarea">description</label>

<textarea class="form-control" id="description" name="description" placeholder="Write brief information here" rows="4" required><?php echo $description; ?></textarea>
</div>
  <br/>
      <div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">
<div class="input-group-addon search-category-container">
<label class="control-labell"><?php echo $category ?></label>  
 <br><select class=""  name="Category" id="Category">
  <option value="">
 --Select Category--
  </option>
</select>
 </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>

 <div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">
<div class="input-group-addon search-category-container">
<label class="control-labell"><?php echo $status; ?></label>  
 <br><select class="dropdown-product selectpicker" required name="Status" id="Status">
<option value="">
--Select Status--
</option>
<option value="rent">
Rent  
</option>
<option value="sale">
 Sale
</option>
</select>
</div>
</div>
<br/>
<br/>
<br/>


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
<script src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
  
  window.addEventListener('load', function(){
     
            if (!sessionStorage.getItem("session_id")) {
                window.location = "/admin_login";
            }
                      /*console.log("here again");*/
      var url = 'viewCategories';
      var method = "GET";
      getCategories(url, method);
      function getCategories(url, method){
        xhr = new XMLHttpRequest();
         xhr.onreadystatechange = function(){
          if (xhr.readyState==4){
          
            var res =  xhr.responseText;
            /*console.log(res);*/
                var data = JSON.parse(res);
                var cat = document.getElementById('Category');
                for (var i = 0,  j = data.categories.length; i < j;  i++){

                  if (data.categories[i].name) {
                  console.log(data.categories[i].name);
                  var option = document.createElement("option");
                  option.value = data.categories[i].name;
                  option.append(data.categories[i].name);
                  cat.appendChild(option);
                  /*console.log(option);  
                  console.log(cat); */             }
                else{
                  console.log(data.categories[i].error);
                  var option = document.createElement("option");
                  option.append(data.categories[i].error);
                  cat.appendChild(option); 
                }

                }
          }
         }
             xhr.open(method, url, true);
            xhr.send();
      }
               }, false);
           


var form = document.forms.myForm

//Form validation using ajax to send post request to the backend.
form.addEventListener('submit', displayform, false);

function displayform(event){
  event.preventDefault();
    var property = {};
    var errors = {};
    var numbers = /^[0-9]+$/;
  if (form.property.value == 0) {
  
    errors.property = "property is required";
  }
  else{
    property.property = form.property.value;
    property.hash_id = form.property.id;
  }
  if (form.location.value.length == 0) {

    errors.location = "email must be valid";
  }
  else{
    property.location = form.location.value;
  }
  if (!form.price.value.match(numbers) ||form.price.value.length == 0) {

    errors.price = "price must be numbers";
  }
  else{
    property.price = form.price.value;
  }
  if (form.description.value.length == 0) {

    errors.description = "this is required";
  }
  else{
    property.description = form.description.value;
  }
  if (form.Status.value.length == 0) {

    errors.Status = "this is required";
  }
  else{
    property.Status = form.Status.value;
  }
  if (form.Category.value.length == 0) {

    errors.Category = "This is required";
  }
  else{
    property.Category = form.Category.value;
  }



  if (Object.keys(errors).length == 0) {
    var url = 'editproperty';
      var method = 'POST';
      var params = 'property=' + property.property +
             '&location=' + property.location +
             '&description=' + property.description +
             '&status=' + property.Status +
             '&price='+ property.price +
             '&category=' + property.Category +
             '&hash_id=' + property.hash_id;
 
      addproperty(url, method, params);
     
          function addproperty(url, method, params){
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
               var res = xhr.responseText;
                  console.log(res);
               
               var data = JSON.parse(res);
               if (data.response[0].success) {
                window.location = "/addImage?t=property&&hash_id="+data.response[0].hash_id;
              
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
