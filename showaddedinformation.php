<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";


?>

<html>
	<head>
	     	<title>See All Added Information </title>
		    <link rel="stylesheet" href="style.css" />
	
	
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
	
	
	    <h1 class="logout5"><b> See All Added Information</b></h1>

<?php
    
	 
 
    
	 
	 if(logged_in())
	 {
	 
	 
?>
      <br/>
      <a href="showindividualmealreport.php" class="sImR demo "> Show Individual Meal Report <a/><br/><br/><br/>
	  <a href="showindividualshoppingreport.php" class="sIsR demo "> Show Individual Shopping Report </a><br/><br/><br/>
	  <a href="showindividualtotalreport.php" class="sItR demo "> Show Individual Total Report <a/><br/><br/><br/>
	  <br/>
      <a href="allreportshow.php" class="aRs demo "> All Report Show <a/><br/><br/><br/>
	  <a href="messagetoadmin.php" class="mTa demo"> Message To Admin </a><br/><br/><br/>
	  <br/>
      <a href="See_All_Users.php" class="sAU demo "> See All Users </a><br/><br/><br/>
   
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