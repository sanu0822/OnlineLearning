<?php
    include('databaseconn.php');

    $sql = "SELECT * FROM registeration";
    $result = $con->query($sql);
    $totalcourse = $result->num_rows;

    $sql = "SELECT * FROM registeration";
    $result = $con->query($sql);
    $totalstu = $result->num_rows;

    $sql = "SELECT * FROM registeration";
    $result = $con->query($sql);
    $totalcourse = $result->num_rows;
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
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="font-weight: bold; font-size:17px; font-family: 'robbin';">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="background-color: wheat; height:90vh">
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
                        <a href="lesson.php" class="nav-link">
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
                        <a href="payment.php" class="nav-link">
                            <i class="fa fa-table"></i>
                            Payment Status
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="adminfeedback.php" class="nav-link">
                            <i class="fa fa-comments-o"></i>
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="adminChangePass.php" class="nav-link">
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

        <div class="col-sm-9 mt-5">
            <div class="row mx-5 text-center">
                <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-danger mb-3" style="max-width: 25rem;max-height: 16rem; background-color:red; border-radius:10px; height:40%; padding:30px;">
                        <div class="card-header">Courses</div>
                            <div class="card-body">
                                 <h4 class="card-title">
                                    <?php echo $totalcourse; ?>
                                 </h4>
                                 <a class="btn text-white" href="courses.php">View</a>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-danger mb-3" style="max-width: 25rem; max-height: 26rem; background-color:green; border-radius:10px; padding:30px">
                        <div class="card-header">Students</div>
                            <div class="card-body">
                                 <h4 class="card-title">
                                 <?php echo $totalstu; ?>
                                 </h4>
                                 <a class="btn text-white" href="student.php">View</a>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-4 mt-5">
                    <div class="card text-white bg-danger mb-3" style="max-width: 25rem;max-height: 16rem;  background-color:deepskyblue; border-radius:10px; height:40%; padding:30px;">
                        <div class="card-header">Sold</div>
                            <div class="card-body">
                                 <h4 class="card-title">
                                 <?php echo $totalcourse; ?>
                                 </h4>
                                 <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="mx-5 mt-5 text-center" style="margin-top: 20px;">
                    <!-- table -->
                    <p class="bg-dark text-white p-2" style="background-color: black; color:white; padding:10px; font-size:18px; font-family:'robbin';" >Courses Ordered</p>
                    <table class="table">
                        <thead>
                            <tr style="align-items: center;">
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">22</th>
                                <td>100</td>
                                <td>sonam@gmail.com</td>
                                <td>20/10/2020</td>
                                <td>2000</td>
                                <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
<?php
   include('footer.php');
?>
<script src="js/adminajjaxrequest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>