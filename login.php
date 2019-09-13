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
	 $email=mysql_real_escape_string( $_POST['Email']); /* injection protection for hack my database */
	 
	 $password=mysql_real_escape_string($_POST['Password']);/* injection protection for hack my database */
	 $checkBox=isset($_POST['keep']);
	 
	 
	 if(email_exists($email,$con))
	 {   
         $result=mysqli_query($con,"SELECT password FROM userInformation WHERE Email='$email'");
         $retrivepassword=mysqli_fetch_assoc($result);
		 if(md5($password) !==$retrivepassword['password'])
		 {
			$error=" password is incorrect"; 
		 }
		 else
	     {
			    $_SESSION['Email']=$email;
				
			
				
				if($checkBox== 'on')
				{
					setcookie("Email",$email ,time()+7200);
				}
				
		        header("location: profile.php");
		 }
		 
			 
		  
         
		
	 }
	
	 else
	 {    
      
		 
        $error=" Email is incorrect "; 
		 
		 
		
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
			    <a href="first.php"  > <b>Sign Up<b/> <a/>
			</div>
			
		    <div id="formDiv">
			   
				<form method="POST" action="login.php" > <!-- change here -->
				   
					<label class="f1 "> Email  : </label><br/>
					<input type="email" name="Email" id="Email" placeholder="Email" class="f6" required/><br/>
					
					<label class="f1">   Password : </label><br/>
					<input type="password" name="Password" id="Password" placeholder="Password" class="f6" required/><br/><br/>
					
					<input type="checkbox" name="keep" class="f1" />
					<label class="f2">Keep me logged in </label><br/><br/>
					
					
					<input type="submit" name="submit" value="login"  class="f3" />
					
					
					<br/><br/><br/> 
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
	