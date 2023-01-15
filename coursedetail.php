<?php
    include('databaseconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>coursedetail</title>
    <style>
       
*{
   margin: 0;
   padding: 0;
}
header
{
  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) ,url(bg1.jfif);
  height: 50vh;
  background-position: center;
  background-size: cover;
  clip-path: polygon(0 0, 100% 0, 100% 100%, 60% 87%, 0 100% );
}
nav{
  background-color: transparent;
  width: 100%;
  height: 80px;                  
}
nav ul{
  float: left;
  margin-left: 15%;
  padding: 20px;
}
nav ul li
{
  display: inline-block;
  margin-right: 10px;
}
nav ul li a{
  color: white;
  font-size: 18px;
  display: block;
  padding: 10px;
  font-family: sans-serif;
  font-weight: bold;
}
nav li a{
  color: white;
  text-decoration: none;
  font-size: 90%;
  font-weight: bold;
}
a:hover{
  background-color: orange;
  border-radius: 20px;
  transition: .5s;
}
nav input{
    border-radius: 20px;
    padding: 10px;
}
.main h1{
    margin-top: 8%;
  margin-left: 40%;
  font-size: 30px;
  color: white;
}
.container{
    display: flex;
    align-items: center;
    margin-top: 10%;
    padding: 10px;
}
.container h2{
    padding: 10px;
    font-size: 30px;
    font-family: 'robbin';
}
.container p{
    padding: 10px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
.image{
    margin-left: 10%;
}
.container button{
    padding: 5px;
    margin-top: 20px;
    margin-left: 55%;
    border-radius: 5px;
    border-color: dodgerblue;
    background-color: dodgerblue;
}
.container button a{
    text-decoration: none;
    font-size: 15px;
    color: white;
    font-weight: bold;
}
.container1{
    margin-left: 11%;
    margin-right: 10px;
    padding: 10px;
}
table, td, th{
    border: 1px solid black;
    font-size: 15px;
    font-family: 'robbin';
    padding: 10px;
}
table{
    width: 100%;
    text-align: center;
    border-collapse: collapse;
}
footer{
    text-align: center;
    background-color: black;
    color: white;
    font-size: 15px;
    padding: 10px;
}
</style>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                 <li><a href="#">Courses</a></li>
                <li><a href="payment.php">Payment Status</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Login</a></li>
                <input type="search" placeholder="Search....." required>
            </ul>
        </nav>
        <div class="main">
            <h1>Let's Get Started.....</h1>
        </div>
  </header>
<div class="container">
    <?php
        if(isset($_GET['course_id'])){
            $course_id = $_GET['course_id'];
            $sql = "SELECT * FROM courses WHERE course_id = '$course_id'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>
    <div class="image">
    <!-- <h2><img src="' .$row['course_img']. '" class="card-img-top" width="200" height="120" alt="course_img">
    </h2> -->
    </div>
    <div class="flex-1">
        <h2>Course Name:<?php echo $row['course_name'] ?></h2>
        <p>Description: <?php echo $row['course_desc'] ?></p>
        <p> <span style="text-decoration: line-through;"> <?php echo $row['course_original_price'] ?> </span><span style="font-weight: bold;"> Rs.200 </span></p>
        <button><a href="">Buy now</a></button>
    </div>
</div>

<div class="container1">
    <div class="row">
    <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Lesson no.</th>
                    <th scope="col">Lesson Name</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM lesson";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $num = 0;
                while($row = $result->fetch_assoc()){
                    if($course_id == $row['lesson_id']){
                        $num++;
                    echo '<tr>
                    <th scope="row">'.$num.'</th>
                    <td>'.$row['lesson_name'].'</td>
                </tr>';
                    }
                }
            }
        ?>
                
            </tbody>
        </table>
    </div>
</div>

<?php
    include('footer.php');
?>

</body>
</html>