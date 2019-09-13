
<!DOCTYPE html>
<html>
	<head>
		<title> Profile Page </title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body class="passchange">

	 


<?php
	
	include("databaseCon.php");
    include("function.php");
	$error=""; 
	 
    $email='';
	
	
   
	 
	 if( logged_in())
	 {



 
		
	      
	 //get vales that pass from the login.php
	    
	   $username=$_SESSION['Email'];
	
	 
	  //to prevent mysql injection
	 
	 $username=stripcslashes($username);
	 
	 $username=mysql_real_escape_string($username);
	  
	  
	  // sql query to show result
	  
	   
	   




	   
	   
	     
?>  
	 
     <div id="lg">

     <a href="passwordchange.php" class="logout3"> Password Change </a>
     <a href="logout.php" class="logout"> Logout <a/>

	 
	 
	 
	 
	 
	 </div>
	 
	 
	  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	 
<!-- ############################ -->
<header>

<div id="header1">

<table >
  <tr>
    <td colspan="7" style="background-color:black;"><h1> <a href="aboutus.php" class="logout8"> About-Us</h1> <a/>
  </h1></td>
  </tr>
 
  <tr>
    <td colspan="7" style="background-color:#A52A2A;border:3px solid black;"><h1 style="font-family:Arial;color:black;font-size:35px;padding-top:5px ">  Your Profile </h1></td>
  </tr>
 

<?php
   
  
    $firstRetrive=mysqli_query($con,"SELECT FirstName,MiddleName,LastName,Email,Gender,Date_Of_Birth FROM userInformation WHERE Email='$username'  ");
    while($row=mysqli_fetch_assoc( $firstRetrive)) {?>
<tr>
    <td><?php echo $row["FirstName"] ;?></td>
</tr>
<tr>
    <td><?php echo $row["MiddleName"] ;?></td> 
</tr>
<tr>
    <td><?php echo $row["LastName"] ;?></td>
</tr>
<tr>
	<td><?php echo $row["Email"] ;?></td>
</tr>
<tr>
	<td><?php echo $row["Gender" ];?></td>
</tr>
<tr>
	<td><?php echo $row["Date_Of_Birth" ];?></td>
</tr>

<tr>
	<td><a href="addprofileinformation.php">ADD Information </a> ||| <a href="modifyinformation.php"> Update Profile Information </a></td>
	
</tr>












	<?php }

?>
</table>
<style>
   table
   {
	  border-collapse:collapse;
	
	  width:40%;
	  height:500px;
	
	  float:left;
	  margin-right:200px;
	 
   }
   table th{
	   
	   padding-top:5px;
	   padding-bottom:10px;
	   
	   border:3px solid black;
	   text-align:center;
	   font-family:Arial;
	   font-size:22px;
	   color:red;
	   background-color:black;
	   
   }
	   
   
   table td {
	   border:3px solid black;
	   text-align:center;
	   font-family:Arial;
	   font-size:18px;
	   color:red;
	   background-color:#A9A9A9;
	   
	   
   }

   h1
   {
	   font-family:Arial;
	   font-size:18px;
	   text-align:center;
	   text-decoration:underline:
	   
   }
  
   


</style>
</div>
</header>
<!-- ############################ -->
	  
	  <!-- print user name after login -->
	 <!-- <h1><?php echo "Welcome To Your Profile -".$_SESSION['Email'];?></h1> -->
	  <!-- end after login -->
	  
	  
<section>
<div id="section1">

	  <a href="mealentry.php" class="mE demo ">  Start Here  >> </a><br/><br/><br/>
      
	 
	 
	  <br/><br/><br/><br/>
	  <a href="Showaddedinformation.php" class="sAU demo "> Show All Added Information </a><br/>
	  <br/><br/>
	  <a href="deleteallusersinformation.php" class="sAU demo "> Truncate All tables </a>
	  <br/><br/><br/><br/>
	  <a href="addinformation.php" class="sAU demo "> Add Profile Information Column </a>
	 

</div>
</section>
<?php


	 }
	 else
	 {
		 header("location :login.php"); 
	     exit();
	 
	 }




?>


</body>

</html>









<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->



