<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title>Update Shopping Details </title>
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
	 <h1 class="logout5"><b>Update Shopping Details </b></h1>
	    

<?php
    
	 
	 
 if(isset($_POST['SaveData']))
 {    
      
	  $date=mysql_real_escape_string($_POST['date']);
	   $days=mysql_real_escape_string($_POST['days']);
	    $comment=mysql_real_escape_string($_POST['Shopping_Details']);
		   $email=mysql_real_escape_string($_POST['Email']);
	  
	 
//&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&

	 if(strlen($days)<3 )
	 {
		 $error=" Fulfill Your Day ";
	 }
	 else if(strlen($comment)<0)
	 {
		 $error="Negative amount does not allowed ";
		 
	 }
	
	 else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		 
	 {
		  $error=" Please, enter validate email address ";
		 
	 }
	
	
	 else
	 {
		
		 $insertQuery="Update  shoppingdetails SET Date='$date ',Day=' $days ',Comment=' $comment',Email='$email ' Where  Email='$email' and Day=' $days' and  Date='$date'";          
		 if(mysqli_query($con, $insertQuery)==True && $username==$email )
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
    <form method="POST" action="updateshoppingdetails.php">
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
					
		<label id="f" class="logout4"> Shopping Details : </label><br/>
        <textarea  type="text" name="Shopping_Details" class="logout4" required/> </textarea></b> <br/><br/>		
		
		
		<label id="f" class="logout4"> Email : </label><br/>
		
		<input type="email" name="Email" class="logout4" required/><br/><br/>
		<!--<input type="days" name="day" class="logout4"/><br/><br/>-->
	
		<input type="submit" name=" SaveData" value="Save-Data" class="logout4"/><br/><br />
    </form>
	<a href="updateadvancepayment.php" class="logout " style="background-color:black;color:red"> Click next >><a/><br/><br/><br/>
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

