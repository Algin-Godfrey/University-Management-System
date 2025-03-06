<?php

$conn = new mysqli('localhost','root','','university');

if (!$conn){
      die("Connection error: " . mysqli_connect_error());
   }
?>