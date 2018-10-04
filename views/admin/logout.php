<?php
session_start();
setLogout($conn,$_SESSION['id']);
unset($_SESSION['id']);
session_destroy();
header("Location: adminLogin");
 ?>

 <script type="text/javascript">
 	 sessionStorage.removeItem('session_id');
 	 sessionStorage.removeItem('');

 </script>