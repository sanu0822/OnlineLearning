<?php
    if(!isset($_SESSION)){
        session_start();
        include 'databaseconn.php';
    }
    if(isset($_SESSION['login'])){
        $Email = $_SESSION['Email'];
    }else{
        // echo "<script> location.href='./index.php'; </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <body>
    <nav class="navbar navbra-dark fixed-top p-0 shadow" style="background-color: #225470;">
<a class="vabra-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">Smart Learning <small class="text-white">Admin Area</small></a>
</nav>

<div class="container-fluid mb-5" style="margin-top: 40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="font-weight: bold;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="background-color: wheat; height:80vh;">
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
                        <a href="#" class="nav-link">
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
        <p class="bg-dark text-white p-2" style="background-color: black; color:white; padding:15px; font-size: 20px; font-family: 'robbin'; text-align: center;">List of Feedbacks</p>
        <?php
            $sql = "SELECT *FROM feedback";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                echo '<table class="table">
                <thead>
                <tr>
                <th scope ="col">Feedback ID</th>
                <th scope ="col">Content</th>
                <th scope ="col">Student ID</th>
                <th scope ="col">Action</th>
                </tr>
                </thead>
                <tbody>';
                while($row = $result->fetch_assoc()){
                    echo '<tr>';
                    echo '<th scope="row">'.$row["f_id"].'</th>';
                    echo '<td>'. $row["f_content"].'</td>';
                    echo '<td>'. $row["id"].'</td>';
                    echo '<td><form action="" methods="POST" class="d-inlime"><input type="hidden" name="id" value='.$row["f_id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="fa fa-trash"></i></button></form></td></tr>';
                }

                echo '</tbody>
                </table>';
            }else{
                echo "0 Result";
            }if(isset($_REQUEST['delete'])){
                $sql = "DELETE FROM feedback WHERE f_id = {$_REQUEST['id']}";
                if($con->query($sql) === TRUE){
                    echo '<meta http-equiv="refresh" content= "0;URl=?deleted" />';
                }else{
                    echo 'Una ble to Delete Data';
                }
            }
        ?>
    </div>
</body>
</html>