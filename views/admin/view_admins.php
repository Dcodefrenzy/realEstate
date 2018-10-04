<?php
ob_start();
session_start();
authenticate();
include "includes/header.php";
?>


<div class="col-sm-9 page-content" style="width:100%;overflow-x:scroll; ">

<h2 class="title-2"><i class="fa fa-star-o"></i> Manage Project</h2>
<br>
<div class="table-responsive">
<table class="table table-striped table-bordered add-manage-table">
  <tr>
    <th>Admin Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Image(Click to change)</th>
    <th>Date Added</th>
    <th>Admin  Id</th>
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
  

  window.addEventListener('load', viewAdmins, false );
  var tbody = document.getElementById('tbody');
  

  var emailId = document.getElementById('email');
  var nameId = document.getElementById('name');
  var phoneId = document.getElementById('phone');
  var adminId = document.getElementById('admin');
  var dateId =document.getElementById('date');
  function viewAdmins(event){
    event.preventDefault();
     if (!sessionStorage.getItem("session_id")) {
                window.location = "/admin_login";
            }

    var url = 'viewAdmins';
    var method = "GET";
    getAdmins(url, method);
    console.log(url, method);
  }
    
    function getAdmins(url, method){
      xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function(){
        if (xhr.readyState==4) {
            var res =  xhr.responseText;
           var data = JSON.parse(res);
            console.log(data);
             
             console.log(data.admins[0].name);
/*             data.admins.forEach(function(){
                    console.log(data.admins);
                  });*/
             console.log(data.admins.length);
             for (var i = 0,  j = data.admins.length; i < j;  i++) {
                  
                var tr = document.createElement("tr");
                var button =document.createElement("button");
                button.className = "btn btn-danger btn-sm";
                button.value = data.admins[i].hash_id;
                button.id = "button";
                button.type = "submit";
                var nameTd = document.createElement("td");
                nameTd.id = "name";
                 var emailTd = document.createElement("td");
                emailTd.id = "name";
                var phoneTd = document.createElement("td");
                phoneTd.id = "name";
                var imageTd = document.createElement("td");
                imageTd.className = "add-img-td";
                var dateTd = document.createElement("td");
                dateTd.id = "name";
                 var adminTd = document.createElement("td");
                adminTd.id = "name";
                var deleteTd = document.createElement("td");
                deleteTd.appendChild(button);
                /*  console.log(button);
                  console.log(imageTd);*/

                tbody.appendChild(tr);
                var p = document.createElement("p");
                  
                tr.appendChild(nameTd);
                tr.appendChild(emailTd);
                tr.appendChild(phoneTd);
                tr.appendChild(imageTd);
                tr.appendChild(dateTd);
                tr.appendChild(adminTd);
                tr.appendChild(deleteTd);

                /*td.appendChild(p)*/
                  button.append("Delete");
                p.append(data.admins[i].email);
                nameTd.append(data.admins[i].name);
                emailTd.append(data.admins[i].email);
                phoneTd.append(data.admins[i].phonenumber);
                imageTd.append(data.admins[i].file_path);
                dateTd.append(data.admins[i].date_created);
                adminTd.append(data.admins[i].hash_id);
                /*var name = data.admins[i].name;*/
              /* console.log(data.admins[i].name);
               console.log(tbody);*/
            /*  var  tr ="<tr>"+
                  "<td>"
                  "<p >"+ name +"</p>"
                  "</td></tr>";
                  ;*/


             }
            console.log("here");
        }
      }
      xhr.open(method, url, true);
      xhr.send();
    }

    deleteAdmin = document.querySelector("button");
    deleteAdmin.addEventListener("onClick", function(){
      console.log("here");
    }, false);
    

 
</script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/account-saved-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:42:23 GMT -->
</html>
