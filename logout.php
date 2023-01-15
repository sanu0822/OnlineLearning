<?php
   include 'databaseconn.php';

   session_start();

   session_unset();

   session_destroy();

   header("Location: learning.php");
?>