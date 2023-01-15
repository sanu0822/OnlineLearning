<?php
    if(isset($_SESSION)){
    session_start();
    }

    include('databaseconn.php');
    
?>
<?php
if(isset($_REQUEST['lessonSubmitBtn'])){
    //checking empty fields

    if(($_REQUEST['lesson_name'] == "")  || ($_REQUEST['lesson_desc'] == "") ||($_REQUEST['course_id'] == "") ||($_REQUEST['course_name'] == "")){

        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated Failed</div>';
    }else{
            $lesson_id = $_REQUEST['lesson_id'];
            $lesson_name = $_REQUEST['lesson_name'];
            $lesson_desc = $_REQUEST['lesson_desc'];
            $course_id = $_REQUEST['course_id'];
            $course_name = $_REQUEST['course_name'];

        $sql = "INSERT INTO  lesson (lesson_id , lesson_name ,lesson_desc,course_id ,course_name)";
        
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
    <title>add course</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
 <style>
    .box{
        position: fixed;
        bottom: 60px;
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
        padding-top: 5px;
        font-size: 20px;
    }
    .dinl{
        display: inline;
    }
    .btn-secondary{
        margin-left: 10px;
    }
    .form-group{
        margin-top: 50px;
        margin-left: 20px;
    }
    .btn{
        margin-top: 50px;
       margin-left: 5px;
    }
    footer{
        padding: 10px;
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
                        <i class="material-icons" style="font-size: 16px;">feedback</i>
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
<div class="col-sm-9 mt-5 ms-3">
    <form action="" method="POST" class="mt-3 form-inline d-print none">
        <div class="form-group mr-3">
            <label for="id">Enter Course ID: </label>
            <input type="text" class="form-control ml-3" id="id" name="id">
        </div>
        <button type="lessonSubmitBtn" class="btn btn-danger">Search</button>
    </form>

    <?php 
        $sql = "SELECT course_id FROM courses";
        $result = $con->query($sql);
            while($row = $result->fetch_assoc()){
                if(isset($_REQUEST['id']) && $_REQUEST['id'] == $row['course_id']){
                    $sql = "SELECT * FROM courses WHERE course_id = {$_REQUEST['id']}";
                    $result = $con->query($sql);
                    $row = $result->fetch_assoc();
                        if(($row['course_id']) == $_REQUEST['id']){
                            $_SESSION['course_id'] = $row['course_id'];
                            $_SESSION['course_name'] = $row['course_name'];
                     ?>
                            <h3 style="background: black; padding: 10px; color: white">Course ID: <?php if(isset($row['course_id'])) { echo $row['course_id']; } ?> Course Name: <?php if(isset($row['course_name'])) { echo $row['course_name']; } ?></h3>

                            <?php
                            echo $_REQUEST['id'];
                            $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
                            $result = $con->query($sql);
                            echo ' <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Lesson ID</th>
                                <th scope="col">Lesson Name</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            </tbody>';
                             while($row = $result->fetch_assoc()){
                                echo  '<tr>';
                                    echo '<th scope="row">'.$row['lesson_id'].'</th>';
                                    echo '<td>'.$row['lesson_name'].'</td>';
                                    echo '<td><form action="editlesson.php" method="POST" class="dinl">
                                      <input type="hidden" name="id" value='.$row["lesson_id"].'>
                                      <button type="submit" class="btn btn-info mr-3" name="view" value="View" style="margin-top:-1%">
                                             <i class="fa fa-edit"></i>
                                         </button>
                                     </form>
                                         <form action="" method = "POST" class="dinl">
                                         <input type="hidden" name="id" value='.$row["lesson_id"].'>
                                          <button type="submit" class="btn btn-secondary" name="delete" value="Delete" style="margin-top:-1%">
                                             <i class="fa fa-trash"></i>
                                          </button>
                                         </form>
                                   </td>
                                </tr>';
                                  }
                            echo '</tbody>
                            </table>';
                        } else{
                            echo '<div class="alert alert-dark mt-4" role="alert">Course Not Found!</div>';
                        }
                        if(isset($_REQUEST['delete'])){
                            $sql = "DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
                            if($con->query($sql) === TRUE){
                                echo ' <meta http-equiv="refresh" content ="0;URL=?deleted" />';
                            } else{
                                echo "Unable to Delete Data";
                            }
                        }
                }
            }
    ?>
</div>

<div>
    <a class="btn btn-danger box" href="addlessons.php">
        <i class="fa fa-plus"></i>
    </a>
</div>
    </div>
</div>
</body>
</html>
<?php
    include('footer.php');
?>