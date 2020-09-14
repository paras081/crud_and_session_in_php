<?php

 session_start();
 if(session_destroy()) //destroy all session variable
 {
 	header("Location:login.php");
 }

?>