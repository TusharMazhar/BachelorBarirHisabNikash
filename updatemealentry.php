<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title> Update Meal Entry </title>
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
	 <br/> <br/> <br/> <br/>
	 <h1 class="logout5"><b> Update Meal Entry </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['SaveData']))
 {    
      
	  $date=mysql_real_escape_string($_POST['date']);
	   $days=mysql_real_escape_string($_POST['days']);
	    $Break_Fast_Meal=mysql_real_escape_string($_POST['Break_Fast_Meal']);
		 $Lunch_Meal=mysql_real_escape_string($_POST['Lunch_Meal']);
		  $Dinner_Meal=mysql_real_escape_string($_POST['Dinner_Meal']);
		   $email=mysql_real_escape_string($_POST['Email']);
	  
	 
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	 if(strlen($days)<3 )
	 {
		 $error=" Fulfill Your Day ";
	 }
	 else if(strlen($Break_Fast_Meal)<0 )
	 {
		 $error=" Meal Selection has wrong ";
	 }
	 else if(strlen($Lunch_Meal)<0 )
	 {
		 $error=" Meal Selection has wrong ";
	 }
	 else if(strlen( $Dinner_Meal)<0 )
	 {
		 $error=" Meal Selection has wrong ";
	 }
	 else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		 
	 {
		  $error=" Please, enter validate email address ";
		 
	 }
	
	
	 else
	 {
		
		 $insertQuery="UPDATE  mealentry SET Date='$date',Day=' $days',BreakFast_Meal='$Break_Fast_Meal',Lunch_Meal=' $Lunch_Meal',Dinner_Meal='$Dinner_Meal',Email='$email' Where  Email='$email' and Day=' $days' and  Date='$date' ";          
		
		 if(mysqli_query($con, $insertQuery)==True &&  $username==$email  )
		    {  
		      
			   
			   $error= "Inserted Data Succesfully";
			   
			    
	          
		    }	 
		 else
		   {
			   $error= "Inserted Data Failed";
		   }
		 



	 }
	 









//********************************************
		 
	 
 } 
	 
	 if(logged_in())
	 {
	 
	 
?>
    <form method="POST" action="updatemealentry.php">
	<!--
        <label id="f"> Current Password : </label><br/>
	    <input type="password" name="CurrentPassword" /><br/>
	-->
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
					
					
		<label id="f" class="logout4"> Break_Fast_Meal : </label><br/>
		<input type="number" name="Break_Fast_Meal" class="logout4" required/><br/>
		
		<label id="f" class="logout4"> Lunch_Meal : </label><br/>
		<input type="number" name="Lunch_Meal" class="logout4" required/><br/>
		
	
		
		<label id="f" class="logout4"> Dinner_Meal: </label><br/>
		<input type="number" name="Dinner_Meal" class="logout4" required/><br/>
		<label id="f" class="logout4"> Email : </label><br/>
		
		<input type="email" name="Email" class="logout4" required/><br/><br/>
		<!--<input type="days" name="day" class="logout4"/><br/><br/>-->
	
		<input type="submit" name=" SaveData" value="Save-Data" class="logout4"/><br/><br />
    </form>
	<a href="updateshoppingamountentry.php" class="logout " style="background-color:black;color:red"> Click next >><a/><br/><br/><br/>
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

