
<html>
<head>
<meta http-equiv="refresh" content="900; url=logout.php" />
</head>

<?php
SESSION_START();
 $phone_no=$_SESSION['phone_no'];

 function isLoggedIn()
 {
	 if(isset($_SESSION['phone_no'])){
		 return true;
	 }else{
		 return false;
	 }
	 }
 if (!isLoggedIn()){
	 header("location:index.php");
 }

?>
</html>