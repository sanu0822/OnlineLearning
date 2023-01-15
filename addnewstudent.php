<?php
    include ('databaseconn.php');

    if(isset($_REQUEST['newStuSubmitBtn'])){
        //checking for empty fields
        if(($_REQUEST['Name'] == "")  || ($_REQUEST['Contact'] == "") || ($_REQUEST['Email'] == "") ||($_REQUEST['Password'] == "") ||($_REQUEST['Occupation'] == "")){
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }else{

            $Name = $_REQUEST['Name'];
            $Email = $_REQUEST['Email'];
            $Contact = $_REQUEST['Contact'];
            $Password = $_REQUEST['Password'];
            $Occupation = $_REQUEST['Occupation'];

            $sql = "INSERT INTO registeration(Name, Contact, Email, Password, Occupation) VALUES ('$Name', '$Contact', '$Email', '$Password', '$Occupation')";

            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully</div>';
            } else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Student</div>';
            }
        }
    }
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
</style>

</head>
<body>

<nav class="navbar navbra-dark fixed-top p-0 shadow" style="background-color: #225470;">
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">Smart Learning <small class="text-white">Admin Area</small></a>
</nav>

<div class="container-fluid mb-5" style="margin-top: 20px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="font-weight: bold;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="background-color: wheat; height:90vh">
                    <li class="nav-item">
                        <a href="adminDashboard.php" class="nav-link">
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
                            <i class="fa fa-user"></i>
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

   <div class="col-sm-6 mt-5 mx-3 jumbotron">
       <h3 class="text-center">Add New Students</h3>
       <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name">
        </div>
        <div class="form-group">
            <label for="Contact">Contact</label>
            <input type="text" class="form-control" id="Contact" name="Contact">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name="Email">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="Password">
        </div>
        <div class="form-group">
            <label for="Occupation">Occupation</label>
            <input type="text" class="form-control" id="Occupation" name="Occupation">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
        </div>
        
        <?php
            if(isset($msg)){echo $msg;}
        ?>
       </form>
   </div>
   </div>
    </div>
</div>
</div>
</div>
</body>
</html>