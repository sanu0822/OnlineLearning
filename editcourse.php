<?php
    include ('databaseconn.php');

// update
if(isset($_REQUEST['requpdate'])){
    //checking empty fields

    if( ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")  || ($_REQUEST['course_desc'] == "") ||($_REQUEST['course_author'] == "") ||($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated Failed</div>';
    }else{
            $cid = $_REQUEST['course_id'];
            $cname = $_REQUEST['course_name'];
            $cdesc = $_REQUEST['course_desc'];
            $cauthor = $_REQUEST['course_author'];
            $cduration = $_REQUEST['course_duration'];
            $cprice = $_REQUEST['course_price'];
            $coriginalprice = $_REQUEST['course_original_price'];
            $cimg = '../e-learning/courseimg/'.$_FILES['course_img']['name'];

        $sql = "UPDATE courses SET course_id = '$cid', course_name = '$cname',course_desc = '$cdesc',course_author = '$cauthor',course_duration = '$cduration',course_price = '$cprice',course_original_price = '$coriginalprice',course_img = '$cimg' WHERE course_id = '$cid'";
        
            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-succewss col-sm-6 ml-5 mt-2">Updated Successfully</div>';
            } else{
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
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
    <title>courses</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    .text-white{
        color: white;
        font-size: 15px;
        margin-left: 1px;
    }
    h3{
        text-align: center;
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

<div class="container-fluid mb-5" style="margin-top: 20px;">
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
        <div class="col-sm-6 mt-5 mx-3 jumbotron" style="padding: 20px; margin-left: 40px;">
    <h3 class="text-center" style="font-family: 'robbin;">Update Course Details</h3>

   <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM courses WHERE course_id = {$_REQUEST['id']}";
         $result = $con->query($sql);
         $row = $result->fetch_assoc();        
    }
   ?>

    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) {echo $row['course_id']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) {echo $row['course_name']; } ?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" row=2><?php if(isset($row['course_desc'])) { echo $row['course_desc']; }?></textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Course Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php if(isset($row['course_author'])) { echo $row['course_author']; }?>">
        </div>
        <div class="form-group">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php if(isset($row['course_duration'])) { echo $row['course_duration']; }?>">
        </div>
        <div class="form-group">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php if(isset($row['course_original_price'])) { echo $row['course_original_price']; }?>">
        </div>
        <div class="form-group">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php if(isset($row['course_price'])) { echo $row['course_price']; }?>">
        </div>
        <div class="form-group">
            <label for="course_img">Course Image</label>
            <img src="<?php if(isset($row['course_img'])) { echo $row['course_img']; }?>" alt="" class="img-thumbnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
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
<?php
    include('footer.php');
?>