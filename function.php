
<?php
  

   function email_exists($email,$con)
   {   
      
       
	   $result=mysqli_query($con,"SELECT Email FROM userInformation WHERE Email='$email'");
	   
	   if(mysqli_num_rows($result)== 1)
	   {
		   
		   return true;
	   }
	   else
	   {
		   return false;
	   }
	   
   }
   
   
   
   
	 
  function logged_in()
  {
	  
	  if(isset($_SESSION['Email']) || isset($_COOKIE['Email']))
	  {
		  return true;
	  }
	  else
	  {
		  return false;
	  }
	  
	  
		  
  }
  
  
   

?>
