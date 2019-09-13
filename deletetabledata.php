<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> Delete Specific Data From a Table  </title>
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
	 <h1 class="logout5"><b>Delete Specific Data From a Table   </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['DeleteTable']))
 {    
      
	 
	    $comment=mysql_real_escape_string($_POST['Table_Name']);
		$date=mysql_real_escape_string($_POST['date']);
	    $days=mysql_real_escape_string($_POST['days']);
		$email=mysql_real_escape_string($_POST['Email']);
		 
	if(strlen($days)<3 )
	 {
		 $error=" Fulfill Your Day ";
	 }
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		 
	 {
		  $error=" Please, enter validate email address ";
		 
	 }
	
	
	 else
	 {
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	
	 
	
	
	
	
		 $insertQuery="DELETE FROM $comment Where  Email='$email' and Day=' $days' and  Date='$date'";          
		 if(mysqli_query($con, $insertQuery)==True && $username==$email )
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
    <form method="POST" action="deletetabledata.php">
	
	<br/>

		<label id="f" class="logout4"> Select Table Name : </label><br/>
		<select class="logout4" name="Table_Name" >
					  <option name="Table_Name" class="logout4">
					  <option value="mealentry"> mealentry</option>
					  <option value="shoppingamountentry"> shoppingamountentry</option>
					  <option value="shoppingdetails"> shoppingdetails </option>
					  <option value="advancepayment">advancepayment </option>
					 
					   
					   
					 </select>
		
		
		
		
		<label id="f" class="logout4"> Select Date : </label><br/>
		<input type="date" name="date" class="logout4" required/><br/>
		
		
		<label id="f" class="logout4"> Select Day: </label><br/>
		<select class="logout4" name="days" >
					  <option name="days" class="logout4">
					  <option value="day"> day</option>
					  <option value="Saturday"> Saturday</option>
					  <option value="Sunday"> Sunday </option>
					  <option value="Monday"> Monday </option>
					  <option value="Tuesday"> Tuesday </option>
					  <option value="Wednesday"> Wednesday </option>
					  <option value="Thursday"> Thursday </option>
					  <option value="Friday"> Friday </option>
					   
					   
					 </select>
					 <br/><br/>
					
		<label id="f" class="logout4"> Email : </label><br/>
		
		<input type="email" name="Email" class="logout4" required/><br/><br/>
	
		<input type="submit" name=" DeleteTable" value="DeleteTableData" class="logout4"/><br/><br />
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

