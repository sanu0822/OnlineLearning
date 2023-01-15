<?php
    if(isset($_SESSION)){
    session_start();
    }

    include('databaseconn.php');

       if(isset($_POST['adminPassUpdatebtn'])){
           $adminemail = $_POST['adminemail'];
           $adminpass = $_POST['adminpass'];
        $query = mysqli_query($con,"SELECT admin_email,admin_pass FROM admin WHERE admin_email='$adminemail AND admin_pass='$adminpass'");
        $num = mysqli_fetch_array($query);

        if($num>0){
            $con = mysqli_query($con,"UPDATE admin SET admin_pass = '$adminpass WHERE admine_mail = '$admineamil'");
            $_SESSION['msg1'] = "Password Changed Successfully";
        } else{
            $_SESSION['msg2'] = "Password does not match";
       }
    }
    ?>

    <!-- if(isset($_SESSION['login'])){ 
        $adminemail = $_SESSION['adminLogemail'];
    }else{
       echo "<script> location.href='./index.php';</script>";
    }
    $adminemail = $_SESSION['adminLogemail'];
        if(isset($_REQUEST['adminPassUpdatebtn'])){
            if(($_REQUEST['adminPass'] == "")){
                    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields</div>';
            } else{
                $sql = "SELECT *FROM admin WHERE admin_email='$adminEmail'";
                $result = $conn->query($sql);
                    if($result->num_rows == 1){
                        $adminPass = $_REQUEST['adminPass'];
                        $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$adminEmail'";
                    if($con->query($sql) == TRUE){
                        $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
                    } else{
                        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Updated </div>';
                    }
                }
            }
        }  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    .box{
        position: fixed;
        bottom: 65px;
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
    .dinl{
        display: inline;
    }
    .btn-secondary{
        margin-left: 10px;
    }
</style>

</head>
<body>
<nav class="navbar navbra-dark fixed-top p-0 shadow" style="background-color: #225470;">
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">Smart Learning <small class="text-white">Admin Area</small></a>
</nav>

<div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="font-weight: bold;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="background-color: wheat; height:80vh">
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="fa fa-dashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link">
                            <i class="fa fa-address-book"></i>
                            Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-address-book-o"></i>
                            Lessons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="student.php" class="nav-link">
                            <i class="fa fa-users"></i>
                            Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-table"></i>
                            Sell Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-table"></i>
                            Payment Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="material-icons" style="font-size: 16px;">feedback</i>
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-key"></i>
                            Change Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
<form action="" method="POST">
    <div class="col-sm-9 mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form class="mt-5 mx-5">
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="adminemail">
                    </div>

                    <div class="form-group">
                        <label for="inputnewpassword">New Password</label>
                        <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="adminpass">
                    </div>

                    <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
                    <button type="reset" class="btn btn-secondary mr-4 mt-4">Reset</button>
                    <?php if(isset($passmsg)) {echo $passmsg;} ?>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>