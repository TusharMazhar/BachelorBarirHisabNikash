<?php

 include("databaseCon.php");
 include("function.php");
 if(logged_in())
 {
	 header("location :profile.php");
	 exit();
	 
 }
 
 
 
 $error="";
 


 if(isset($_POST['submit']))
 {
	 $fName=mysql_real_escape_string( $_POST['FirstName']); /* injection protection for hack my database */
	 $mName=mysql_real_escape_string($_POST['MiddleName']);/* injection protection for hack my database */
	 $lName=mysql_real_escape_string($_POST['LastName']);/* injection protection for hack my database */
	 $email=mysql_real_escape_string($_POST['Email']);/* injection protection for hack my database */
	 $emailConfirm=mysql_real_escape_string($_POST['EmailConfirm']);/* injection protection for hack my database */
	 $password=mysql_real_escape_string($_POST['Password']);/* injection protection for hack my database */
	 $passwordConfirm=mysql_real_escape_string($_POST['PasswordConfirm']);/* injection protection for hack my database */
	 $gender = mysql_real_escape_string($_POST['gender']);/* injection protection for hack my database */
	 $conditions=isset($_POST['condition']);
	 $dateOfbirth=mysql_real_escape_string($_POST['date']);
	 
	
	 
		 
	// $file_name =mysql_real_escape_string( $_FILES['image']['name']);
    // $file_size =mysql_real_escape_string($_FILES['image']['size']);
    // $file_tmp =mysql_real_escape_string($_FILES['image']['tmp_name']);
	
	 
	 
    
	 
	
    
	 /*
	 $file_name =mysql_real_escape_string( $_FILES['image']['name']);
     $file_size =mysql_real_escape_string($_FILES['image']['size']);
     $file_tmp =mysql_real_escape_string($_FILES['image']['tmp_name']);
	  $file_type=$_FILES['image']['type'];
	 $file_error=$_FILES['image']['error'];
	   $file_type=$_FILES['image']['type'];
	 $file_error=$_FILES['image']['error'];
	 echo  $fName,$mName,$lName,$email, $password, $gender;
	 */
	 
	 if(strlen($fName)<3 )
	 {
		 $error="First Name is too short ";
	 }
	 else if(strlen($mName)<3 )
	 {
		 $error="Middle Name is too short ";
	 }
	 else if(strlen($lName)<3 )
	 {
		 $error="Last Name is too short ";
	 }
	 else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		 
	 {
		  $error=" Please, enter validate email address ";
		 
	 }
	 else if(email_exists( $email,$con))
	 {
		 $error=" Email has already used ";
	 }
	 
	 
	 else if ($email !==$emailConfirm)
	 {
		  $error=" Email address does not match, try again ";
	 }
	 else if ( strlen( $password)< 8)
	 {
		  $error=" Password is too short ";
	 }
	 else if ( $password!==  $passwordConfirm)
	 {
		  $error=" Password doest not match ";
	 }
	 else if ( strlen( $gender)<2 )
	 {
		  $error=" Type gender name correctly ";
	 }
	 else if (!$conditions )
	 {
		  $error="You must be agree with the terms & conditions ";
	 }
	 
	
	 
	 
	 else
	 {
		 $password=md5($password);
		 $insertQuery="INSERT INTO userInformation (FirstName,MiddleName,LastName,Email,Password,Gender,Date_Of_Birth)  values ('$fName','$mName',' $lName','$email ','$password',' $gender','$dateOfbirth') " ;          
		 if(mysqli_query($con, $insertQuery)==True )
		    {  
		      
			   
			   $error= "New record created successfully";
			   
			    
	          
		    }	 
		 else
		   {
			  $error= "New record does not created successfully";
		   }
		 
	 }
		 
	 
	 
 
	 
		 
		 
	
	 
	 
	 
	 
 }
 
 
 
 



?>




<!DOCTYPE HTML>
<html>
	<head>
		<title> Login Page </title>
		<link rel="stylesheet" href="style2.css" />
		<meta charset="UTF-8" />
	</head>
	<body>
	 <div id="wrapper">
	    <header >
		  <div id="fheader">
		    <h1><b>ব্যাচেলর বাড়ির হিসাব-নিকাশ</b></h1>
		  </div>
		</header>
		<section >
		    <div id="fsection"> 
			   
			</div>
			<div id="sup1">
			    <a href="login.php"  > <b> Login <b/> <a/>
			</div>
		    <div id="formDiv">
			   
				<form method="POST" action="first.php" enctype="multipart/form-data" >
				    <label class="f1"> First Name : </label><br/>
					<input type="text" name="FirstName" placeholder="First Name" class="f6" required/><br/>
					<label class="f1"> Middle Name : </label><br/>
					<input type="text" name="MiddleName" placeholder="Middle Name" class="f6" required/><br/>
					<label class="f1"> Last Name : </label><br/>
					<input type="text" name="LastName" placeholder="Last Name" class="f6" required/><br/>
					<label class="f1"> Email  : </label><br/>
					<input type="email" name="Email" placeholder="Email" class="f6" required/><br/>
					<label class="f1">Confirm Email : </label><br/>
					<input type="email" name="EmailConfirm" placeholder="Confirm Email" class="f6" required/><br/>
					<label class="f1">   Password : </label><br/>
					<input type="password" name="Password" placeholder="Password" class="f6"required/><br/>
					<label class="f1">  Confirm Pass: </label><br/> 
					<input type="password" name="PasswordConfirm" placeholder="Confirm Password" class="f6" required/><br/>
					<label class="f1"> Gender : </label><br/>
					<input type="radio" name="gender" value="male" class="f1" checked > Male<br>
                    <input type="radio" name="gender" value="female" class="f1"> Female<br>
                    <input type="radio" name="gender" value="other" class="f1" > Other<br/>
			<!--
					<select name="month">
					  <option value="month"> month </option>
					  <option value="January"> January </option>
					  <option value="February"> February </option>
					  <option value="April"> April </option>
					  <option value="April"> April </option>
					  <option value="May"> May </option>
					  <option value="June"> June </option>
					  <option value="July"> July </option>
					  <option value="Augest"> Augest </option>
					  <option value="September"> September </option>
					  <option value="October"> October </option>
					  <option value="November"> November </option>
					  <option value="December"> December </option>
					
					
					
					</select>
					<select name="days">
					   <option value="days"> days </option>
					  <option value="Saturday"> Saturday</option>
					  <option value="Sunday"> Sunday </option>
					  <option value="Monday"> Monday </option>
					  <option value="Tuesday"> Tuesday </option>
					  <option value="Wednesday"> Wednesday </option>
					  <option value="Thursday"> Thursday </option>
					  <option value="Friday"> Friday </option>
					   
					   
					</select>
			-->     
			        <label class="f1">  Date Of Birth: </label><br/>
			        <input type="date" name="date" class="f6" required/><br/>
					
				    <br/>
					<input type="checkbox" name="condition" class="f1" required/>
					<label class="f2"> I am agree with terms & condition</label><br/>
					
					
					<!--
					<label> Your Date of Birth  : </label><br/><br/>
					<select  name="month">
					<option value="">
					
					<label> Upload Image : </label><br/>
					
                    <input type="file" name="image" size="25" /><br />
                    -->
					
					
					
					
					<br/>
					<input type="submit" name="submit" class="f3" /><br/>
					<br/>
					 <div class="error">
		               <?php 
		                   echo  $error;
		               ?>
		            </div>
	
	
					
					
					
				
				
				</form>
				
				
			
			</div>		  
		</section>
		<footer >
		    <div id="footer1">
			 
			
			</div>
			
		</footer>
	
	 </div>
	
	
	</body>
	