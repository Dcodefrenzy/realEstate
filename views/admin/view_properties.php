<?php
ob_start();
session_start();
authenticate();
include "includes/header.php";
if (isset($_GET["message"])) {
    $msg = $_GET['message'];
     echo '<div class="col-md-12">
  <div class="inner-box posting">
  <div class="alert alert-success alert-lg" role="alert">
  <h2 class="postin-title">✔  '.$msg.' Successful!</h2>
  <p>Thank you, Praisegate Homes is happy to have you around. </p>
  </div>
  </div>
  </div>';
}
?>
 <link rel="stylesheet" type="text/css" href="css/preloader.css">


<div class="col-sm-9 page-content" style="width:100%;overflow-x:scroll; ">

<h2 class="title-2"><i class="fa fa-star-o"></i> Manage Properties</h2>
<br>
<div  id="preloader" class="preloader" ></div>

<div class="table-responsive">
<table class="table table-striped table-bordered add-manage-table">
  <tr>
    <th>Property name</th>
    <th>Location</th>
    <th>description</th>
    <th>Image(Click to change)</th>
    <th>Date Added</th>
    <th>category</th>
    <th>status</th>
    <th>price</th>
    <th>Admin  Id</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<tbody id="tbody">


<!-- <tr>
<td class="" id="name">
<h4><a href="">Name</a></h4>
<p > <strong> Link </strong>:
BoardSpeck.com </p>
</td>
<td class="" id="email">
<p > </p>
</td>
<td class="">
<p id="phone"> </p>
</td>
<td class="add-img-td" id="image">
<a href="">
<img class="img-responsive" src="assets/img/item/img-1.jpg" alt="img">
</a>
</td>
<td class="">
  <p id="admin"></p>
</td>
<td class="add-img-td">
<p id="date"></p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-danger btn-sm" type="submit">Delete</button>
  </a>
</td>
</tr> -->


<!-- </tr>
<tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-2.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Sony Xperia dual sim 100% brand new iPad</a></h4>
<p> <strong> Posted On </strong>:
02-Oct-2017, 04:38 PM </p>
<p> <strong>Visitors </strong>: 221 <strong>Located In:</strong> New York </p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr> -->
<!-- <tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-3.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Digital Cameras brand new</a></h4>
<p> <strong> Posted On </strong>:
02-Oct-2017, 04:38 PM </p>
<p> <strong>Visitors </strong>: 221 <strong>Located In:</strong> New York </p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr>
<tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-4.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Samsung Galaxy dual sim 100% brand new</a></h4>
<p> <strong> Posted On </strong>:
02-Oct-2017, 04:38 PM </p>
<p> <strong>Visitors </strong>: 221 <strong>Located In:</strong> New York </p>
 </td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr>
<tr>
<td class="add-img-td">
<a href="ads-details.html">
<img class="img-responsive" src="assets/img/item/img-5.jpg" alt="img">
</a>
</td>
<td class="ads-details-td">
<h4><a href="ads-details.html">Brand New Macbook Pro</a></h4>
<p><strong> Posted On </strong>: <span>02-Oct-2017, 04:38 PM </span></p>
<p><strong>Visitors</strong>: <span>221</span> <strong>Located In:</strong> <span>New York</span></p>
</td>
<td class="price-td">
  <a href="#">
   <button class="btn btn-common" type="submit">View Project</button>
  </a>
</td>
</tr> -->

</tbody>
</table>
</div>

</div>
</div>
</div>
</div>



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
  

  window.addEventListener('load', viewblog, false );
  var tbody = document.getElementById('tbody');
  
/*
  var emailId = document.getElementById('email');
  var nameId = document.getElementById('name');
  var phoneId = document.getElementById('phone');
  var blogId = document.getElementById('blog');
  var dateId =document.getElementById('date');*/
  function viewblog(event){
    event.preventDefault();
     if (!sessionStorage.getItem("session_id")) {
                window.location = "/admin_login";
            }

    var url = 'viewproperties';
    var method = "GET";
    getblog(url, method);
    /*console.log(url, method);*/
  }
    
    function getblog(url, method){
      xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function(){
        if (xhr.readyState==4) {
            var res =  xhr.responseText;
            /*console.log(res);*/
              var data = JSON.parse(res);
            // console.log(data);
             if (data) {
            var preloader = document.getElementById("preloader");
            preloader.className = "loader";
            console.log(preloader);
            
           }

             
             for (var i = 0,  j = data.properties.length; i < j;  i++) {
                  
               var tr = document.createElement("tr");
                var button =document.createElement("button");
                var editButton = document.createElement("button");
                var editLink = document.createElement("a");
                 editLink.href = "/editProperty?hash_id="+data.properties[i].hash_id;
                 var deleteLink = document.createElement("a");
                 deleteLink.href = "/deleteProperty?hash_id="+data.properties[i].hash_id;
                 var img = document.createElement("img");
                 img.className = "img-responsive";
                 img.src = data.properties[i].file_path;
                


                editButton.className = "btn btn-common btn-sm";
                editButton.value = data.properties[i].hash_id;
                editButton.id = "edit";
                editButton.type ="submit";

                button.className = "btn btn-danger btn-sm";
                button.value = data.properties[i].hash_id;
                button.id = "button";
                button.type = "submit";

                var title = document.createElement("td");
                title.id = "name";
                var author = document.createElement("td");
                author.id = "name";
                 var body = document.createElement("td");
                body.id = "name";
                var imageTd = document.createElement("td");
                imageTd.className = "add-img-td";

                var dateTd = document.createElement("td");
                dateTd.id = "name";
                 var status = document.createElement("td");
                status.id = "name";
                var category = document.createElement("td");
                category.id = "name";
                 var price = document.createElement("td");
                price.id = "name";
                 var hashTd = document.createElement("td");
                hashTd.id = "name";


                var deleteTd = document.createElement("td");
                deleteLink.appendChild(button);
                deleteTd.appendChild(deleteLink);

                var editTd = document.createElement("td");
                editLink.appendChild(editButton);
                 editTd.appendChild(editLink);
                 var admin_id = document.createElement("td");
               

                tbody.appendChild(tr);
                var p = document.createElement("p");
                  
                
                tr.appendChild(title);
                tr.appendChild(author)
                tr.appendChild(body);
                tr.appendChild(imageTd);
                tr.appendChild(dateTd);
                tr.appendChild(category);
                tr.appendChild(status);
                 tr.appendChild(price);
                tr.appendChild(admin_id);
                tr.appendChild(editTd);
                tr.appendChild(deleteTd);

                  button.append("Delete");
                  editButton.append("Edit");
               
                title.append(data.properties[i].property);
                author.append(data.properties[i].location);
                body.append(data.properties[i].description);
                imageTd.appendChild(img);
               /* img.append(data.properties[i].file_path);*/
                dateTd.append(data.properties[i].date_created);
                status.append(data.properties[i].status);
                 category.append(data.properties[i].category);
                  price.append(data.properties[i].price);
                hashTd.append(data.properties[i].hash_id);
                admin_id.append(data.properties[i].admin_id);


             }
            
        }
      }
      xhr.open(method, url, true);
      xhr.send();
    }

    

 
</script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/account-saved-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:42:23 GMT -->
</html>
