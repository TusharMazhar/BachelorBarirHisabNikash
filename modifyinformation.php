<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> Update Profile Information   </title>
		    <link rel="stylesheet" href="style.css" />
	
	
	</head>
	<body class="passchange"> 
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
		     <?php

    
	 
	 if( logged_in())
	 {
		 $username=$_SESSION['Email'];
		  $secret2="nsutushar";
	 
 
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
	 <h1 class="logout5"><b> Update Profile Information   </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['SaveData']))
 {    
      
	 
	    $tablename=mysql_real_escape_string($_POST['tablename']);
	  
	    $info=mysql_real_escape_string($_POST['info']);
		 $nr=mysql_real_escape_string($_POST['nr']);
	    
		  $email=mysql_real_escape_string($_POST['Email']);
		  
		
	  
	 
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	 if(strlen($info)<2 )
	 {
		 $error=" Fulfill Your Selection  ";
	 }
	 else if(strlen( $tablename)<0)
	 {
		 $error="Modify Your Information Failed ";
		 
	 }
    
	  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		 
	 {
		  $error=" Please, enter validate email address ";
		 
	 }
	
	
	
	 else 
	 {
		 
		
		 $insertQuery="Update $tablename  SET $info='$nr' Where Email='$email' ";          
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
    <form method="POST" action="modifyinformation.php">
	<!--
        <label id="f"> Current Password : </label><br/>
	    <input type="password" name="CurrentPassword" /><br/>
	-->
	 <br/>
	     <label id="f" class="logout4"> Select Table Name: </label><br/>
		<select class="logout4" name="tablename" >
					  <option name="tablename" class="logout4">
					  <option value="userinformation2">userinformation2</option>
					  <option value="userinformation">userinformation</option>
					 
		
		 </select>
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
					    <option value="FirstName  "> FirstName  </option>
						  <option value="LastName "> LastName  </option>
						    <option value="MiddleName"> MiddleName  </option>
							  <option value="Gender "> Gender </option>
							    <option value="Birth_Of_Date "> Birth_Of_Date  </option>
								
								 
								    
					 
					   
					   
					 </select>
					 <br/><br/>
		<label id="f" class="logout4"> Add New Record : </label><br/>
        <input type="text" name="nr" class="logout4" required/> <b> <br/><br/>		
					
		
  
		
		
		<label id="f" class="logout4">Email  : </label><br/>
		
		<input type="Email" name="Email" class="logout4" required/><br/><br/>
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

