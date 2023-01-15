<?php
    include ('databaseconn.php');
    session_start();
    $Email = $_SESSION['Email'];    
    $sql = "SELECT * FROM registeration  WHERE Email = '$Email'";
    $result = $con->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $id = $_REQUEST['id'];
            $Name = $_REQUEST['Name'];
            $Email = $_SESSION['Email'];
            $Password = $_SESSION['password'];
            $Occupation = $_REQUEST['Occupation'];
        }
            if(isset($_REQUEST['updateStuNameBtn'])){
                if(($_REQUEST['Name'] == "")){
                $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds</div>';
            } else{
                $Name = $_REQUEST['Name'];
                $Occupation = $_REQUEST['Occupation'];
                $img = $_FILES['img']['name'];
                $stu_img_temp = $_FILES['img']['tmp_name'];
                $stu_folder = '../e-learning/stu/'. $stu_img;
                move_uploaded_file($stu_img_temp, $img_folder);
             $sql = "UPDATE registeration SET Name = '$Name', Occupation = '$Occupation',img = '$img_folder' WHERE Email = '$Email'";
                
            if($con->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-succewss col-sm-6 ml-5 mt-2">Updated Successfully</div>';
            } else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
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
    <title>Profile</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <style>
    .box{
        position: fixed;
        bottom: 10px;
        right: 10px;
        margin-bottom: 5px 0px;
    }
    .text-white{
        color: white;
        font-size: 15px;
        margin-left: 1px;
    }
    .vabra-brand{
        color: white;
        text-decoration: none;
        padding-top: 5px;
        padding: 10px;
        font-size: 20px;
    }
    nav ul li{
       font-weight: bold;
       font-family: 'robbin';
       text-decoration: none;
       padding: 10px;
    }
    .nav-item img{
        width: 90%;
        height: 25%;
        margin-left: -10%;
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
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="font-weight: bold; font-size:17px; font-family: 'robbin'; width: 16%;">
            <div class="sidebar-sticky">
                <ul class="nav flex-column" style="background-color: wheat; height:85vh">
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

    <div class="col-sm-6 mt-5 jumbotron">
        <form action="" class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id">Student ID</label>
            <input type="id" class="form-control" id="id" name="id" value="<?php if(isset($row['id'])) {echo $row['id'];} ?>"readonly>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="<?php if(isset($row['Email'])) {echo $row['Email'];} ?>">
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="name" class="form-control" id="Name" name="Name" value="<?php if(isset($row['Name'])) {echo $row['Name'];} ?>">
        </div>
        <div class="form-group">
            <label for="Occupation">Occupation</label>
            <input type="Occupation" class="form-control" id="Occ" name="Occupation" value="<?php if(isset($row['Occ'])) {echo $row['Occupation'];} ?>">
        </div>
        <div class="form-group">
            <label for="img">Uploaded Images</label>
            <input type="file" class="form-control-file" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>

        <?php if(isset($passmsg)) {echo $passmsg;}?>
        </form>
    </div>
        </div>
    </div>
</body>
</html>
<?php
   include('footer.php');
?>
