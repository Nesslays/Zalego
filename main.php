<?php
//include "lockpad.php";
error_reporting( ~E_NOTICE ); // avoid notice

?>

    <?php
include "top/top.php";

?>
<br><br><br>
  <div class="wrapper" style="background-color:">
  <body style="background-color:"> 
     
<div class="col-md-12" style="width:97%;background-color:;margin-left:10px;margin-right:10px;">
 <div class='slider'>
 
  <div class='slide1'></div>
  <div class='slide2'></div>
  <div class='slide3'></div>
  <div class='slide4'></div>
</div>
</div>

 <div class="col-md-12" >
<div class="col-md-4 " style="background-color:">
<link type="text/css" rel="stylesheet" href="tog2.css" />

        <div class="sidebar-nav" style="background-color:silver; width:100%;margin-left:10px;">
                   
            <li  data-toggle="collapse" data-target="#setting" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i>WEB SYSTEMS DEVELOPMENT<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="setting">
                    <li><a href="mathsone.php"><i class="fa fa-angle-double-right"></i>Schools Management sys </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Company Web Sites</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Web Systems Maintenance</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>General Information</a></li>
                  
                    </div>

            <li  data-toggle="collapse" data-target="#settings" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i>NETWORK INSTALLATION<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="settings">
				   
                    <li><a href="addd.php"><i class="fa fa-angle-double-right"></i> Wireless Networking </a></li>                 
                    <li><a href="add22.php"><i class="fa fa-angle-double-right"></i>Cabled Networking</a></li>                   
                   
                    </div>

            <li  data-toggle="collapse" data-target="#settingx" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i>ICT SERVICES<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="settingx">
                    <li><a href="adddc2.php"><i class="fa fa-angle-double-right"></i>ICT Consultations</a></li>                  
					<li><a href="polio.php"><i class="fa fa-angle-double-right"></i>ICT Training</a></li>
                    <li><a href="newborndata2.php"><i class="fa fa-angle-double-right"></i>General Information</a></li>
                     </div>
            <li  data-toggle="collapse" data-target="#settingd" class="collapsed">
                    <a href="#"><i class="fa fa-sliders fa-lg fa-fw sidebar-icon"></i> COMPUTER GRAPHICS & DESIGNS<span class="arrow"></span></a>
                    </li>
                <div class="sub-menu collapse" id="settingd">
                    <li><a href="addd.php"><i class="fa fa-angle-double-right"></i>Logo Designs</a></li>
					<li><a href="Newborndata.php"><i class="fa fa-angle-double-right"></i>Wedding cards design</a></li>
                    <li><a href="vaccine2.php"><i class="fa fa-angle-double-right"></i>Calenders and Posters </a></li>
                  
				    </div>
              </div></div>
			  
<div class="col-md-8" >
  
  
   <?php 
	 session_start();
include "databasecon.php";
		$username=$_SESSION['username'];
		$qry="SELECT avatar from registration where username='$username' ";
		
		if( $row['image'] != null){?>
        <img src="imaging/<?php echo($row['image']);?>"  width="50px" height="50px" class="img-circle">        
      <?php }else{ ?>
	  
         <img src="imaging/in.png" width="50px" height="50px" class="img-circle">
    <?php } ?>
       <?php

$username=$_SESSION["username"];

$sql = "SELECT * FROM registration WHERE username='$username'";
$result = mysqli_query($connection, $sql);
if ( $row = mysqli_fetch_array ( $result )) {
echo "<tr>" ;
echo "<td style='font-size:10px'>" . $row [ 'username' ]."</td>"; echo" &nbsp;welcome to your portal";echo"<br>";

echo "<td style='font-size:10px'>" . $row [ 'fname' ]."</td>";echo"<br>";


echo  $row [ 'lname' ]; echo "<br>";
echo "TANK YOU FOR USING OUR SYSTEM ....BY Nelson Mutua Laikipia University";
}
?>
</div>
   </div>

</div>   
</body>
</html>