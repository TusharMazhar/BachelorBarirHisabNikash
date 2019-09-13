<! DOCTYPE html>
<?php

      include("databaseCon.php");
      include("function.php");
	  $error="";
	  $email='';


?>

<html>
	<head>
	     	<title> Advance Payment </title>
		    <link rel="stylesheet" href="style.css" />
	
	
	</head>
	<body class="passchange"> 
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
		     <?php

    
	 
	 if( logged_in())
	 {
		
	 
 
?>



     <a href="profile.php" class="logout3"> Home  </a>
     <a href="logout.php" class="logout"> Logout <a/><br/>
	 <br/><br/><br/><br/><br/><br/><br/>
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

<table >
  <tr>
    <td colspan="6" style="background-color:#A52A2A;border:3px solid black;"><h1 style="font-family:Arial;color:black;font-size:35px;padding-top:5px "> Users Details </h1></td>
  </tr>
  <tr>
    <th>First Name   </th>
    <th>Middle Name  </th> 
    <th>Last Name    </th>
	<th>Email        </th>
	<th>Gender       </th>
    <th>Date_Of_Birth</th>
	
	
  </tr>


<?php
    
  
    $firstRetrive=mysqli_query($con,"SELECT FirstName,MiddleName,LastName,Email,Gender,Date_Of_Birth FROM userInformation   ");
    while($row=mysqli_fetch_assoc( $firstRetrive)) {?>
<tr>
    <td><?php echo $row["FirstName"] ;?></td>
    <td><?php echo $row["MiddleName"] ;?></td> 
    <td><?php echo $row["LastName"] ;?></td>
	<td><?php echo $row["Email"] ;?></td>
	<td><?php echo $row["Gender" ];?></td>
	<td><?php echo $row["Date_Of_Birth" ];?></td>
	
	
	
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
	
	
	
	
	
	
	
	
	
	
	<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
	
	
	    
