<?php
   session_start();
   $connect = mysqli_connect('localhost','root','','elearning') or die('connection error');

   if(isset($_POST['Submit'])){

   $name = $_POST['Name'];
   $email = $_POST['Email'];
   $phone = $_POST['Phone'];
   $message = $_POST['Message'];

$query = "INSERT INTO contact (Name,Email,Phone,Message) VALUES ('$name','$email','$phone','$message')";
$insert = mysqli_query ($connect,$query);

print '<script> alert ("'. $insert .'")</script>';

   if ($insert)
 {
 echo '<script> alert ("Contact saved sucessfully")</script>';
}
else
{
    echo '<script> alert("Contact Unsuccessfully")</script>';
}
}
?>

