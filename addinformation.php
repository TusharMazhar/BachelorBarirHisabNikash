<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> ADD Profile Information COLUMN  </title>
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
	 <h1 class="logout5"><b>ADD Profile Information COLUMN </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['SaveData']))
 {    
      
	 
	    $tablename=mysql_real_escape_string($_POST['tablename']);
	    $tablename2=mysql_real_escape_string($_POST['tablename2']);
	    $info=mysql_real_escape_string($_POST['info']);
	    
		   $email=mysql_real_escape_string($_POST['Email']);
		  
		   $format=mysql_real_escape_string($_POST['formatt']);
	  
	 
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	 if(strlen($info)<2 )
	 {
		 $error=" Fulfill Your Selection  ";
	 }
	 else if(strlen( $tablename)<0)
	 {
		 $error="Modify Your Information Failed ";
		 
	 }
      else if(strlen( $format)<0)
	 {
		 $error="Format Data Select  Failed ";
		 
	 }
	
	 else if(strlen( $email)<0)
		 
	 {
		  $error=" Please, Enter Secret Code  ";
		 
	 }
	
	
	 else 
	 {
		 
		 if($tablename2=="ADD")
		 {
			 
		 $insertQuery="ALTER TABLE $tablename $tablename2 $info  $format";          
		 if(mysqli_query($con, $insertQuery)==True && $secret2==$email )
		    {  
		      
			   
			   $error= "Inserted Column Succesfully ";
			   
			    
	          
		    }	 
		 else
		   {
			   $error= "Inserted Column Failed";
		   }
		 
		 }
		 if($tablename2=="DROP")
		  {
			  $insertQuery="ALTER TABLE $tablename $tablename2 COLUMN $info";          
		        if(mysqli_query($con, $insertQuery)==True && $secret2==$email )
		    {  
		      
			   
			   $error= "Delete Column Succesfully ";
			   
			    
	          
		    }	 
		 else
		    {
			   $error= " Column Delete Failed";
		    }
		 
		  }

	 }
	 









//********************************************
		 
	 
 } 
	 
	 if(logged_in())
	 {
	 
	 
?>
    <form method="POST" action="addinformation.php">
	<!--
        <label id="f"> Current Password : </label><br/>
	    <input type="password" name="CurrentPassword" /><br/>
	-->
	 <br/>
	     <label id="f" class="logout4"> Select Table Name: </label><br/>
		<select class="logout4" name="tablename" >
					  <option name="tablename" class="logout4">
					  <option value="userinformation2">userinformation2</option>
					 
		
		 </select>
		<br/><br/>
		
			     <label id="f" class="logout4"> Select ADD or DROP Column: </label><br/>
		<select class="logout4" name="tablename2" >
					  <option name="tablename2" class="logout4">
					  <option value="ADD">ADD</option>
					  <option value="DROP">DROP</option>
					 
		
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
					 
					   
					   
					 </select>
					 <br/><br/>
					
		
        <label id="f" class="logout4"> Select Data Format : </label><br/>
        <select class="logout4" name="formatt" >
					  <option name="formatt" class="logout4">
					  <option value="INT">INT</option>
					 
					  <option value="DATE"> DATE </option>
					  <option value="TEXT"> TEXT</option>
					 
					 
					   
					   
					 </select>
					 <br/><br/>
		
		
		<label id="f" class="logout4">Enter Code : </label><br/>
		
		<input type="text" name="Email" class="logout4" required/><br/><br/>
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

