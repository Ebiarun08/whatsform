<?php
session_start();
session_unset();
session_destroy();

 //going to login page
 header("location:index.php?error=none");


?>