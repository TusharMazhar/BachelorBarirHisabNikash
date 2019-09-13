<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> Truncate Tables  </title>
		    <link rel="stylesheet" href="style.css" />
	
	
	</head>
	<body class="passchange"> 
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
		     <?php

    
	 
	 if( logged_in())
	 {
		
	    $username=$_SESSION['Email'];
		$secret="nsutushar";
		
 
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
	<br/><br/><br/>
	 <h1 class="logout5"><b> Truncate Tables  </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['DeleteTable']))
 {    
      
	 
	    $comment=mysql_real_escape_string($_POST['Table_Name']);
		$email=mysql_real_escape_string($_POST['Email']);
		 
	 if($email<0)
		 
	   {
		  $error=" Please, enter valid Code ";
		 
	  }
	
	 else
	 {
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	
	 
	
	
	
	
		 $insertQuery="TRUNCATE TABLE $comment ";          
		 if(mysqli_query($con, $insertQuery)==True && $secret==$email )
		    {  
		      
			   
			   $error= "Table Succesfully  Deleted";
			   
			    
	          
		    }	 
		 else
		   {
			   $error= "Table Deleted  Failed";
		   }
		 




	 }









//********************************************
		 
	 
 } 
	 
	 if(logged_in())
	 {
	 
	 
?>
    <form method="POST" action="deleteallusersinformation.php">
	
	<br/>

		<label id="f" class="logout4"> Enter Table Name : </label><br/>
		<select class="logout4" name="Table_Name" >
					  <option name="Table_Name" class="logout4">
					  <option value="mealentry"> mealentry</option>
					  <option value="shoppingamountentry"> shoppingamountentry</option>
					  <option value="shoppingdetails"> shoppingdetails </option>
					  <option value="advancepayment">advancepayment </option>
					   <option value="userinformation2">userinformation2</option>
					 
					   
					   
					 </select>
		
		
		
		
		
		
       
		<label id="f" class="logout4"> Enter Secret Code : </label><br/>
		
		<input type="text" name="Email" class="logout4" required/><br/><br/>
		
	
		<input type="submit" name=" DeleteTable" value="DeleteTable" class="logout4"/><br/><br />
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

