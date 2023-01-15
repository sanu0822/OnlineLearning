<?php
   $con = mysqli_connect('localhost','root','','elearning') or die('connection error');
   if (isset($_POST['Submit']));
   include 'databaseconn.php';
{
   $_email = $_POST['email'];
   $_password = $_POST['password'];
   $sql = "select Password from registeration where (Password =\'$_password\',Email =\'$_email\')";
   
   $result = mysqli_query($con, "SELECT * FROM registeration") or die ("Query Failed");
    // print mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){

      while ($row = mysqli_fetch_assoc($result)) {
        session_start();
        $_SESSION["email"] = $row['email'];
         $_SESSION["password"] = $row['password'];
            echo $_SESSION['email'];
           header("Location:index.php");
      }
    }else{
      echo "Email and Password are not matched";
    }
}
?>
