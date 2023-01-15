<?php
    include ('databaseconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add course</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
 <style>
    .box{
        position: fixed;
        bottom: 10px;
        right: 10px;
        margin-bottom: 5 0px;
    }
    .text-white{
        color: white;
        font-size: 15px;
        margin-left: 1px;
    }
    .vabra-brand{
        color: white;
        padding-top: 5px;
        font-size: 20px;
    }
    nav ul li{
       font-weight: bold;
       font-family: 'robbin';
       padding: 10px;
    }
    .nav-item img{
        width: 90%;
        height: 25%;
        border-color: black;
        border-width: 10%;
        border-radius: 50px;
    }
</style>

</head>
<body>
<nav class="navbar navbra-dark fixed-top p-0 shadow" style="background-color: #225470;">
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="studentprofile.php">Smart Learning</a>
</nav>

<div class="container-fluid mb-5" style="margin-top: 20px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="font-weight: bold; font-size:17px; font-family: 'robbin';">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="background-color: wheat; height:90vh">
                <li class="nav-item mb-3">
                        <img src="pic.png" alt="studentimage" class="img">
                    </li>
                  <li class="nav-item">
                     <a class="nav-link" href="profile.php"><i class="fa fa-user"> Profile<span class="sr-only">(current)</span></i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="myCourse.php"><i class="fa fa-book">  My courses</i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="stufeedback.php"><i class="fa fa-user">  Feedback</i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="studentChangePass.php"><i class="fa fa-key">  Change password</i></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="logout.php"><i class="fa fa-power-off">  Logout</i></a>
               </li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
</body>
</html>
<?php
   include('footer.php');
?>
