<DOCTYPE HTML>
<html>
  
         <title>Admin Reg</title>
	  <head>
	<?php
include "top/top.php";
?>

       </head> 
 
			<div  class="wrapper" style="background-color: white">


<body style="background-color: white">
<br>
<center>
<fieldset>
	
	 <b style="color:#7aa609">REGISTRATION FORM FOR ADMINISTRATION</b>
            <form  enctype="multipart/form-data" action="regcon.php" method="POST" class="form-horizontal"  >

            	<div class="form-group">
            		<label class="col-sm-4 control-label">User Name:</label>
            	<div class="col-sm-5"><input class="form-control" type="text" name="username" id="username" placeholder="Enter User name"size="50"></div>
				<span class="text-danger usernameerror"></span>
            </div>
			
			  	<div class="form-group">
            	<label class="col-sm-4 control-label">First name:</label>
            	<div class="col-sm-5"><input  class="form-control"  type="text" Name="fname" placeholder="Enter first name" size="50"  /></div>
            </div>
          

            <div class="form-group">
            	<label class="col-sm-4 control-label">Last Name:</label>
            	<div class="col-sm-5"><input  class="form-control"  type="text" Name="lname" placeholder="Enter last name" size="50"/></div>
            </div>
			  	
            <div class="form-group">
            	<label class="col-sm-4 control-label">Password:</label>
            	<div class="col-sm-5"><input class="form-control"   type='password' name='password' placeholder="Enter Password" size="50" /></div>
            </div>

              <div class="form-group">
            	<label class="col-sm-4 control-label">Confirm Password:</label>
            	<div class="col-sm-5"><input class="form-control"   type='password' name='cpwd' placeholder="Enter Password" size="50"  /></div>
            </div>
            	<input  type="file" name="avatar" >
			   
			  

              <div class="form-group">
		<div class="col-sm-5 col-sm-push-4"><input type="submit"  class="btn btn-primary" name="submit" value="Register">
        </div>
    
	</div>
	<a href="login.php">login</a>
     </form>
	 </center>
	 </fieldset>
		</center>

</div>

 </body>
 <script src="js/formValidation.js"></script>
</html>