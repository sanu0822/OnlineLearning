<?php
    include ('databaseconn.php');

// update
if(isset($_REQUEST['newStuSubmitBtn'])){
    //checking empty fields

    if( ($_REQUEST['id'] == "") || ($_REQUEST['Name'] == "")  || ($_REQUEST['Email'] == "") ||($_REQUEST['Password'] == "") ||($_REQUEST['Occupation'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated Failed</div>';
    }else{
        
        $id = $_REQUEST['id'];
        $Name = $_REQUEST['Name'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
        $Occupation = $_REQUEST['Occupation'];

        $sql = "UPDATE registeration SET id = '$id', Name = '$Name',Password = '$Password',Occupation = '$Occupation' WHERE id = '$id'";
            if($con->query($sql) == TRUE){
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
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
    footer{
        margin-top: 20px;
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
   

   <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM registeration WHERE id = {$_REQUEST['id']}";
         $result = $con->query($sql);
         $row = $result->fetch_assoc();        
    }
   ?>

<div class="col-sm-6 mt-5 mx-3">
       <h3 class="text-center">Update Student Detail</h3>
       <form action="" method="POST" enctype="multipart/form-data">
       <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php if(isset($row['id'])) {echo $row['id']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" value="<?php if(isset($row['Name'])) {echo $row['Name']; } ?>">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" value="<?php if(isset($row['Email'])) {echo $row['Email']; } ?>">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" value="<?php if(isset($row['Password'])) {echo $row['Password']; } ?>">
        </div>
        <div class="form-group">
            <label for="Occupation">Occupation</label>
            <input type="text" class="form-control" id="Occupation" name="Occupation" value="<?php if(isset($row['Occupation'])) {echo $row['Occupation']; } ?>">
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
<?php
    include('footer.php');
?>