<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> Change password </title>
		    <link rel="stylesheet" href="style.css" />
	
	
	</head>
	<body class="passchange"> 
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
		     <?php

    
	 
	 if( logged_in())
	 {
		
	 
 
?>



     <a href="profile.php" class="logout3"> Home  </a>
     <a href="logout.php" class="logout"> Logout <a/><br/><br/><br/><br/>
<?php
	 }
	 else
	 {
		 header("location :login.php"); 
	     exit();
	 
	 }




?>
	
</body>

	
	
	
	
	
	
	
	
	
	
	
	
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
	
	
	    <h1 class="logout5"><b> Change Password </b></h1>

<?php
    
	 
	 
 if(isset($_POST['SavePass']))
 {    
      
	  $password=mysql_real_escape_string($_POST['NewPassword']);/* injection protection for hack my database */
	  $confirmPassword=mysql_real_escape_string($_POST['NewPasswordConfirm']);/* injection protection for hack my database */
	 /*
	 if(email_exists($email,$con))
	 {   
         $password2=md5($currentpassword);
         
         $result=mysqli_query($con,"SELECT password FROM registration WHERE Email='$email'");
         $retrivepassword=mysqli_fetch_assoc($result);
		 if(md5($password2) !==$retrivepassword['password'])
		 {
			$error=" Current password is incorrect"; 
		 }
	 }
	*/	 
	     if ( strlen( $password)< 8)
	         {
		         $error=" Your New Password is too short ";
	         }
	     else if ( $password!== $confirmPassword)
	         {
		          $error=" Your New Password doest not match ";
	         }
	     else
	         {    
                  $password=md5($password);
		          $email=$_SESSION['Email'];
		          if(mysqli_query($con,"UPDATE userInformation SET Password='$password' WHERE Email='$email'"));
		              {
			               $error=" password succesfully change  </a>" ;
            
			
		              }
		 
	         }
		 
	 
 } 
	 
	 if(logged_in())
	 {
	 
	 
?>
    <form method="POST" action="passwordchange.php">
	<!--
        <label id="f"> Current Password : </label><br/>
	    <input type="password" name="CurrentPassword" /><br/>
	-->
		<label id="f" class="logout4">  New Password: </label><br/>
		<input type="password" name="NewPassword" class="logout4"/><br/>
		<label id="f" class="logout4">  Confirm  Password: </label><br/>
		<input type="password" name="NewPasswordConfirm" class="logout4"/><br/><br/>
	
		<input type="submit" name=" SavePass" value="Save" class="logout4"/><br/><br />
    </form>
    <div class="logout6">
       <?php echo $error ?>
    </div>
<?php
	 }
	 
	 else
	 {
		 
		 header("location : profile.php");
	 }
	 
  



?>
     </body>
</html>