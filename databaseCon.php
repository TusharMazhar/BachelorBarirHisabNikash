<?php

$con=mysqli_connect("localhost","root","","registration");

if(mysqli_connect_errno())
   {
	  echo " Error Occured".mysqli_connect_errno();
	
   }


session_start();




?>