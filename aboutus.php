<! DOCTYPE html>
<?php
     include("databaseCon.php");
      include("function.php");
	  $error="";
?>
<html>
	<head>
	     	<title> About-Us </title>
		    <link rel="stylesheet" href="style.css" />
	        <meta charset="UTF-8" />
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
	
	
	    <h1 class="logout5"><b> About-Us </b></h1>
		<section>
		   <div id="aboutus">
		   
		       <h1 style="color:blue;text-align:center;font-weight:bold;font-size:50px">Group Name : Dynamic Developers </h1>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:30px"><b style="color:red">PROJECT NAME</b> :  ব্যাচেলর বাড়ির হিসাব-নিকাশ</p>
			   
			 
			   <h3 style="color:blue;text-align:center;font-weight:bold;font-size:40px">Group Member-1 </h3>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Full Name   : Tushar Mazhar Talukdar </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Id          : 1521237042 </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Course      : CSE-311 L </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Email       : tusharmazhartalukdar@gmail.com </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Phone       : 01787373498 </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Institution : North South University </p>
			   
			   

			   <h3 style="color:blue;text-align:center;font-weight:bold;font-size:40px">Group Member-2</h3>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Full Name   : Porsia Tithi </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Id          : ---------- </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Course      : CSE-311 L </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Email       : porsiatithi@gmail.com </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Phone       : ---------- </p>
			   <p style="color:black;text-align:center;font-weight:bold;font-size:20px">Institution : North South University </p>
			 
			   
			 
			   
		   
		   
		   </div>
		
		
		
		
		</section>

<?php
    
	 

	 
 
	 
	 if(logged_in())
	 {
	 
	 
?>
  
<?php
	 }
	 
	 else
	 {
		 
		 header("location : profile.php");
	 }
	 
  



?>
     </body>
</html>