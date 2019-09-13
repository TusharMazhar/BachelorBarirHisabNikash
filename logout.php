<?php

   SESSION_START();
   SESSION_DESTROY();
   setcookie("Email",'',time()-7200);
   header("location:login.php");
   



?>