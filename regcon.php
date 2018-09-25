<?php
error_reporting(0);
session_start();
 include "databasecon.php";
//include('functions.php');


 

     $username=$_POST['username'];
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $encrpt=sha1($password);	
	 
	 $random_hash = rand ( 10000 , 99999 );
		 
    $avatarname = $_FILES['avatar']['name'];
    $avatarsize = $_FILES['avatar']['size'];
    $avatartype = $_FILES['avatar']['type'];
    $avatartmp = $_FILES['avatar']['tmp_name'];
    $uploadPath = 'imaging/';
    $imagesize = 2024*2024;
   // $imageArray = ["jpeg","png","jpg"];
    $ext = explode('.', $avatarname);
    $filetype = strtolower(end($ext));
    $response='';
 (move_uploaded_file($avatartmp, $uploadPath.$avatarname));
 
		   
   // $registration code = sha1($random_hash);

	$cpwd=$_POST['cpwd']; 
	  
	global $connection;
        $sql = "SELECT * FROM registration WHERE username = '$username'";
        $r = mysqli_query($connection, $sql);
		
		    //$response;
       
    if(empty($username)){
        echo "<script language='JavaScript'>
alert('user name is empty, Please enter your Name!!')
window.location.href='register.php';
</script>";
	}

      	
	else if(empty($fname)) {
		 echo "<script language='JavaScript'>
alert('Email is empty, Please enter first name!!')
window.location.href='register.php';
</script>";
       
    }
		else if(empty($lname)) {
		 echo "<script language='JavaScript'>
alert('Email is empty, Please enter last name!!')
window.location.href='register.php';
</script>";
       
    }
	
  else  if(empty($password)){
		echo "<script language='JavaScript'>
alert('Password is empty,Please enter password!!')
window.location.href='register.php';
</script>";
        
    }
   else if( $password !== $cpwd){
		echo "<script language='JavaScript'>
alert('Password do Not Match,Please Re-Enter!!')
window.location.href='register.php';
</script>";
       
    }

        
		
       else if(mysqli_num_rows($r) >= 1) {
			
		     echo "<script language='JavaScript'>
                      alert ('use another username')
                       history.back();
                         </script>";
		}   
    
else


		
{ 
 $sql = "INSERT INTO registration (username,fname,lname,password,passcode,avatar) VALUES ('$username','$fname','$lname','$encrpt','$random_hash','$avatarname')";
 $result=mysqli_query($connection, $sql);


if($result)
{
echo "<script language='JavaScript'>
alert('Information successfully Uploaded!!')
window.location.href='index.php';
</script>";
}
else
{echo "<script language='JavaScript'>
alert('Can Not Process Your request Please!!!')
history.back();
</script>";
	}}
	
	
?>

