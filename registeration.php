<?php
   session_start();
   $connect = mysqli_connect('localhost','root','','elearning') or die('connection error');

   if(isset($_POST['Submit']));
   include 'connect.php';
   {

   $name = $_POST['Name'];
   $contact = $_POST['Contact'];
   $email = $_POST['Email'];
   $password = $_POST['Password'];

$query = "INSERT INTO registeration (Name,Contact,Email,Password) VALUES (\"$name\",\"$contact\",\"$email\",\"$password\")";
$insert = mysqli_query ($connect,$query);

print '<script> alert ("'. $insert .'")</script>';

   if ($insert)
 {
 echo '<script> alert ("Registeration sucessfully")</script>';
 
}
else
{
    echo '<script> alert("Registeration Unsuccessfully")</script>';
}
}
?>
