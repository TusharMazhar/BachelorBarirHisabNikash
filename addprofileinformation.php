<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> Add Profile Information   </title>
		    <link rel="stylesheet" href="style.css" />
	
	
	</head>
	<body class="passchange"> 
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
		     <?php

    
	 
	 if( logged_in())
	 {
		 $username=$_SESSION['Email'];
		 
	 
 
?>

     <a href="profile.php" class="logout3"> Home  </a>
     <a href="logout.php" class="logout"> Logout <a/><br/>

    
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
	<br/><br/>
	 <h1 class="logout5"><b> Add Profile Information    </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['SaveData']))
 {    
      
	 
	  
	   $info=mysql_real_escape_string($_POST['info']);
	    
		 $email=mysql_real_escape_string($_POST['Email']);
		  
		 $AI=mysql_real_escape_string($_POST['AI']);
	  
	 
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	 if(strlen($info)<2 )
	 {
		 $error=" Fulfill Your Selection  ";
	 }
	
     
	 else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		 
	 {
		  $error=" Please, enter validate email address ";
		 
	 }
	
	
	 else if(strlen( $AI)<0)
		 
	 {
		  $error=" Please, ADD Information Failed  ";
		 
	 }
	
	
	 else 
	 {
		 
		  
		 $insertQuery="INSERT INTO userinformation2 (Email,$info) values ('$email','$AI')";          
		 if(mysqli_query($con, $insertQuery)==True && $username==$email )
		    {  
		      
			   
			   $error= "Inserted Data Succesfully ";
			   
			    
	          
		    }	 
		 else
		   {
			   $error= "Inserted Data Failed";
		   }
		 
		 }

	 }
	 









//********************************************
		 
	 
  
	 
	 if(logged_in())
	 {
	 
	 
?>
    <form method="POST" action="addprofileinformation.php">
	<!--
        <label id="f"> Current Password : </label><br/>
	    <input type="password" name="CurrentPassword" /><br/>
	-->
	 <br/>
	
		<br/><br/>
		
		
		
					
		
		<label id="f" class="logout4"> Select Subject: </label><br/>
		<select class="logout4" name="info" >
					  <option name="info" class="logout4">
					  <option value=" SchoolName"> SchoolName </option>
					  <option value="CollegeName"> CollegeName</option>
					  <option value="UniversityName"> UniversityName  </option>
					  <option value="BloodGroup"> BloodGroup</option>
					  <option value="District"> District </option>
					  <option value="Division"> Division </option>
					  <option value="Village "> Village  </option>
					 
					   
					   
					 </select>
					 <br/><br/>
					
		

		
		
		<label id="f" class="logout4">Add Information : </label><br/>
		
		<input type="text" name="AI" class="logout4" required/><br/><br/>
		
		<label id="f" class="logout4"> Email : </label><br/>
		
		<input type="email" name="Email" class="logout4" required/><br/><br/>
		<!--<input type="days" name="day" class="logout4"/><br/><br/>-->
	
		<input type="submit" name=" SaveData" value="Save-Data" class="logout4"/><br/><br />
    </form>
	 <a href="profile.php" class="logout " style="background-color:black;color:red"> Go Home Page >><a/><br/><br/><br/>
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

