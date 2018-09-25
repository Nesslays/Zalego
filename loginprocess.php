<?php
session_start();
include "databasecon.php";


$username=$_POST['username'];    	
$encrpt=sha1($_POST['password']);
 
 
if($_POST['submit'])
$_SESSION['username']="$username";
	
{
	$sql="select * from registration where username='$username' and password='$encrpt'";
$result=mysqli_query($connection,$sql);
$num=mysqli_num_rows($result);
if(!$num)
{
echo "<script language='JavaScript'>
alert ('Incorrect Login,Please Re-enter User name or Password')
history.back();
</script>";
}
else
{
while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
{
if($row['username']==$username AND $row['password']==$encrpt)
{
	
	header('location:main.php');
}
}}}
?>