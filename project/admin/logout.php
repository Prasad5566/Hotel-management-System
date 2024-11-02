<?php
session_start();
session_destroy();
if($_SESSION['email']){
	
		 
		 echo"<script type='text/javascript'>alert('Logout failed');
			   window.location.href('homepage.php')</script>";
     }
	 else
	 {
		 
		 echo"<script type='text/javascript'>alert('Logout successful')
		 window.location.assign('adminlogin.php')</script>";
	 }

?>
 