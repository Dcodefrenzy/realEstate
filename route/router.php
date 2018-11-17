<?php 
$uri = explode("/", $_SERVER['REQUEST_URI']);

if(count($uri)> 2){
  header("Location:/index");

 }
    $hash_id = "";
   if(isset($_GET['hash_id'])){
    $hash_id = $_GET['hash_id'];
  }
  $table = "";
  if (isset($_GET['t'])) {
    $table = $_GET['t'];
  }
  $message = "";
  if (isset($_GET['message'])) {
    $message = $_GET['message'];
  }



 $users_status = "";
 if (isset($_GET['users_status'])) {
 	$users_status = $_GET['users_status'];
 }

switch ($uri[1]) {


  	case "logs":
  	include APP_PATH."/app/logs/select_logs.php";
 	  break;

    case 'admin':
    include APP_PATH. "/views/admin/admin_home.php";
    break;

    case "adminHome":
    include APP_PATH."/views/admin/admin_home.php";
    break;

  	case 'admin_register':
  	include APP_PATH."/views/admin/admin_register.php";
  	break;

    case 'register':
    include APP_PATH."/app/admin/register.php";
    break;

  	case 'view_admins':
  	include APP_PATH."/views/admin/view_admins.php";	
  	break;
    //ajax call
    case 'viewAdmins':
    include APP_PATH."/app/admin/view_admin.php";  
    break;

    case 'viewAdmins?message=$message':
    include APP_PATH."/app/admin/view_admin.php";  
    break;

  	case 'admin_login':
  	include APP_PATH."/views/admin/admin_login.php";	
  	break;

    case 'adminLogin':
    include APP_PATH."/app/admin/adminLogin.php";  
    break;

  	case 'register_users':
  	include APP_PATH."/app/users/register_users.php";
  	break;

  	case 'user_login':
  	include APP_PATH."/app/users/user_login.php";
  	break;

  	case 'view_users':
  	include APP_PATH."/app/users/view_users.php";
  	break;

  	case 'users_status?users_status=$users_status':
  	include APP_PATH."/app/users/users_status.php";
  	break;

    case 'add_blog':
    include APP_PATH."/views/admin/add_blog.php";
    break;


    case 'addBlog':
    include APP_PATH."/app/blog/addBlog.php";
    break;

    case 'addproperty':
    include APP_PATH."/app/property/addProperty.php"; 
    break;

    case 'add_property':
    include APP_PATH."/views/admin/add_property.php"; 
    break;


    case 'viewproperties':
    include APP_PATH."/app/property/viewProperties.php"; 
    break;


    case 'view_properties':
    include APP_PATH."/views/admin/view_properties.php"; 
    break;

    case "view_properties?message=$message":
    include APP_PATH."/views/admin/view_properties.php";
    break;

    case 'editproperty':
    include APP_PATH."/app/property/editProperty.php"; 
    break;

    case "editProperty?hash_id=$hash_id":
    include APP_PATH."/views/admin/edit_property.php"; 
    break;


    case 'viewCategories':
    include APP_PATH."/app/Categories/viewCategories.php"; 
    break;


    case 'addCategory':
    include APP_PATH."/app/Categories/addCategory.php"; 
    break;


    case 'add_category':
    include APP_PATH."/views/admin/property_categories.php"; 
    break;

    case 'view_categories':
    include APP_PATH."/views/admin/view_categories.php"; 
    break;

    case "editCategory?hash_id=$hash_id":
    include APP_PATH."/views/admin/edit_category.php"; 
    break;

    case 'edit_Category':
    include APP_PATH."/app/Categories/editCategory.php";
    break;

    case "addImage?t=$table&&hash_id=$hash_id":
    include APP_PATH."/views/admin/upload_image.php";
    break;

    case 'viewAdminBlog':
    include APP_PATH."/views/admin/view_blog.php";
    break;


    case "viewAdminBlog?message=$message":
    include APP_PATH."/views/admin/view_blog.php";
    break;


    case 'view_adminBlog':
    include APP_PATH."/app/blog/viewBlogs.php";
    break;


    case "editBlog?hash_id=$hash_id":
    include APP_PATH."/views/admin/edit_blog.php";
    break;


    case "edit_Blog":
    include APP_PATH."/app/blog/editBlog.php";
    break;

    case "deleteProperty?hash_id=$hash_id":
    include APP_PATH."/app/property/deleteProperty.php";
    break;

    case "deleteBlog?hash_id=$hash_id":
    include APP_PATH."/app/blog/deleteBlog.php";
    break;






    //Users route
    case '':
    include APP_PATH. "/views/users/index.php";
    break;

    case 'index':
    include APP_PATH. "/views/users/index.php";
    break;

    case 'about':
    include APP_PATH. "/views/users/about.php";
    break;

    

    case 'blog':
    include APP_PATH. "/views/users/blog.php";
    break;

    case 'properties':
    include APP_PATH. "/views/users/properties.php";
    break;

    case 'contact':
    include APP_PATH. "/views/users/contact.php";
    break;

    case "property_details?hash_id=$hash_id":
    include APP_PATH."/views/users/property_details.php";
    break;

    case "blog_details?hash_id=$hash_id":
    include APP_PATH."/views/users/blog_details.php";
    break;

 
}






 ?>