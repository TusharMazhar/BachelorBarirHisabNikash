<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";
	  $email='';


?>

<html>
	<head>
	     	<title> Show Individual Meal Report </title>
		    <link rel="stylesheet" href="style.css" />
	
	
	</head>
	<body class="passchange"> 
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
		     <?php

    
	 
	 if( logged_in())
	 {
		
	 $username=$_SESSION['Email'];
	 $username=stripcslashes($username);
	 
	 $username=mysql_real_escape_string($username);
 
?>



     <a href="profile.php" class="logout3"> Home  </a>
     <a href="logout.php" class="logout"> Logout <a/><br/>
	 <br/><br/><br/><br/><br/><br/><br/>
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

<table >
  <tr>
    <td colspan="7" style="background-color:#A52A2A;border:3px solid black;"><h1 style="font-family:Arial;color:black;font-size:35px;padding-top:5px "> Individual Meal Report </h1></td>
  </tr>
  <tr>
     <th>Date   </th>
    <th>Day  </th> 
    <th>BreakFast_Meal    </th>
	<th>Lunch_Meal        </th>
	<th>Dinner_Meal       </th>
	<th>Email</th>
	<th>Option       </th>
	
  </tr>


<?php
    
  
    $firstRetrive=mysqli_query($con,"SELECT m.Date,m.Day,m.Breakfast_Meal,m.Lunch_Meal,m.Dinner_Meal,u.Email FROM userinformation as u  join mealentry as m ON u.Email=m.Email where u.email='$username'");
     while($row=mysqli_fetch_assoc( $firstRetrive)) {?>
<tr>
    <td><?php echo $row["Date"] ;?></td>
    <td><?php echo $row["Day"] ;?></td> 
    <td><?php echo $row["Breakfast_Meal"] ;?></td>
	<td><?php echo $row["Lunch_Meal"] ;?></td>
	<td><?php echo $row["Dinner_Meal" ];?></td>
	<td><?php echo $row["Email" ];?></td>
	
	
	<td><a href="">Edit </a> | <a href="">Delete </a></td>
	<br/><br/>
</tr>
	
	<?php }

?>
</table>
<style>
   table
   {
	  border-collapse:collapse;
	
	  width:100%;
	 
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





<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
	 
	 
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
	
	
	
	
	
	
	
	
