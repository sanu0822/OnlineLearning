<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <style>
 body{
     background: url('background.jpg');
     background-size: cover;
}
nav{
  background-color: transparent;
  width: 100%;
  height: 80px;
}
.logo{
  color: black;
  font-size: 30px;
  margin: 0 30px;
  line-height: 80px;
  font-weight: bold;
  text-shadow: 5px 5px 5px #03e9fa,
               20px 5px 25px #03e9fa,
               40px 5px 40px #03e9fa,
               80px 75px 75px #03e9fa;             
}
nav ul{
  float: right;
  margin-right: 10px;
}
nav ul li{
  display: inline-block;
  padding: 10px;
}
nav ul li a{
  color: black;
  font-weight: bold;
  font-size: 20px;
  text-decoration: none;
  text-shadow: 5px 5px 5px #03e9fa,
               20px 5px 25px #03e9fa,
               40px 5px 40px #03e9fa,
               80px 75px 75px #03e9fa;   
  /*text-transform: uppercase;
  margin: 10px 0;
  letter-spacing: 2px;
  border-top: 1px solid #03e9fa;
  border-radius: 20px;*/
}
a:hover{
  background-color: #03e9fa;
  color: white;
  border-radius: 30px;
  padding: 8px;
  transition: 0.5s;
  box-shadow: 0 0 5px #03e9fa,
              0 0 5px #03e9fa,
              0 0 5px #03e9fa,
              0 0 5px #03e9fa;
}
@media(max-width: 952px){
  .logo{
    font-size: 30px;
    padding-left: 40px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media(max-width: 858px){
  
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: white;
    top: 80px;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    line-height: 30px;
    margin: 50px 0;
  }
  nav ul li a{
    color: #03e9fa;
    font-size: 16px;
    font-weight: bold;
  }
  a:hover{
    background-color: #03e9fa;
    border-radius: 30px;
    transition: 0.5s;
  }
}
/*.box{
  height: 100%;
  background: rgb(72, 67, 173);
  background: linear-gradient(90deg, rgb(47, 43, 124)0%, rgb(43, 37, 146) 3%, rgba(7,46,145,1) 15%, rgba(4,119,193,1) 53%, rgba(39, 83, 179) 98%);
  background-attachment: fixed;
}*/

ul li ul{
  position: absolute;
  top: 60px;
  display: none;
  visibility: hidden;
}
ul li:hover> ul,
ul li:focus-within > ul,
ul li ul:hover{
  visibility: visible;
  opacity: 1;
  display:  block;
  padding: 0px;
  margin-right: 40px;
}
ul li ul li{
  clear: both;
  width: 45%;
}
.dropdown li a{
  padding: 2px;
  margin-right: 10px;
  display: block;
}
.container h1{
    margin-left: 45%;
    margin-top: 10%;
    font-size: 50px;
}
.container h2{
    margin-left: 39%;
    font-size: 30px;
}
.container h3{
    margin-left: 12%;
    font-size: 22px;
    padding: 8px;
    text-align: center;
}
.container button{
  background-color: lightblue;
    margin-left: 49%;
    font-size: 20px;
    border-color: black;
    padding: 8px;
    border-radius: 30px;
}
.container button a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.container button a:hover{
    background-color: skyblue;
    transition: 0.5s;
}
    </style>
</head>
<body>
<section class="box">
        <nav>
            <!------------<input type="checkbox" id="check">
            <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>---------------->
            <label class="logo">SMART LEARNING</label>
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="">ABOUT US</a></li>
                <li><a href=""> COURSES</a>
                    <ul class="dropdown">
                      <li><a href="">Web designing</a></li>
                        <li><a href="">C Programming</a></li>
                        <li><a href="">C++ Programming</a></li>
                        <li><a href="">JAVA</a></li>
                        <li><a href="">Python</a></li>
                        <li><a href="">PHP</a></li>
                    </ul>
                </li>
                <li><a href=""> OUR SERVICES</a></li>
                <li><a href="">BOOK SHELF</a></li>
                <li><a href=""> CONTACT US</a></li>
                <li><a href="login.html"> LOGIN</a></li>
                <li><a href="admin.php"> ADMIN LOGIN</a></li>
            </ul>
        </nav>

        <div class="container">
            <h1>WELCOME</h1>
            <h2>ONLINE LEARNING TUTORIAL</h2>
            <h3>Online Learning is rapidly becoming one of the most cost-effective ways to educate the world's rapidly expanding workforce</h3>
            <button><a href="index.php">Get Started</a></button>
        </div>
    </section>
</body>
</html>