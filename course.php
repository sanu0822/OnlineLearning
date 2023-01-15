<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course</title>
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
.grid-container h1{
  margin-top: 30px;
  font-size: 30px;
  font-family: 'robbin';
  text-align: center;
}
.grid-container h1{
  text-underline-position: auto;
  text-decoration-line: underline;
  text-decoration-color: orange;
  text-underline-offset: 15px;
  text-decoration-thickness: inherit;
}
.grid-container .card{
  position: relative;
  width: 300px;
  height: 420px;
  background: #fff;
  margin: 35px;
  margin-left: 40px;
  margin-top: 100px;
  float: right;
  border-radius: 40px;
  overflow: hidden;
  box-shadow: 0 15px 25px rgba(0,0,0,0.1);
  transition: 0.5s;
}
.grid-container:hover .card{
  filter: blur(0px);
  transform: scale(1.1);
  opacity: 1;
}
.grid-container .card .circle{
  position: relative;
  width: 100%;
  height: 100%;
  clip-path: circle(180px at center 0);
  text-align: center;
}
.grid-container .card .circle h2 img{
  width: 50%;
  padding: 40px 0;
}
.grid-container .card .content{
  position: absolute;
  bottom: 10px;
  padding: 10px;
  font-style: oblique;
  text-align: center;
}
.grid-container .card .content img{
  width: 10px;
  height: 10px;
}
.grid-container .card .content p{
  color: #000;
}
.grid-container .card .content a{
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  background: #000;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  margin-top: 20px;
}
.grid-container .card:nth-child(1) .content a{
  background: #ffaf00;
}
.grid-container .card:nth-child(2) .content a{
  background: #da2268;
}
.grid-container .card:nth-child(3) .content a{
  background: #ffaf00;
}
.grid-container .card:nth-child(4) .content a{
  background: #da2268;
}
.grid-container .card:nth-child(5) .content a{
  background: #ffaf00;
}
.grid-container .card:nth-child(6) .content a{
  background: #da2268;
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

  <section id="courses">
        </div>
        <div class="grid-container">
            <h1>OUR COURSES</h1>
            <div class="card">
                <div class="circle">
                    <h2><img src="java.png"></h2>
                </div>
                <div class="img"></div>
                <div class="content">
                    <h4>Java</h4>
                    <p>Java is a computer programming language.Java has a set of rules that determine how the
                        instructions are written.<br>Once a program has been written, the high-level instructions are
                        translated into numeric codes that computers can understand and execute.
                    </p>
                    <a href="#java">Enroll. now</a>
                </div>
            </div>
            <div class="card">
                <div class="circle">
                    <h2><img src="c++.png" style="padding: 20%;"></h2>
                </div>
                <div class="img"></div>
                <div class="content">
                    <h4>C++ Programming</h4>
                    <p>C++ is a cross-platform language that can be used to create high-performance applications.C++ was
                        developed by Bjarne Stroustrup, as an extension to the C language.C++ gives programmers a high
                        level of control over system resources and memory.</p>
                    <a href="#c++">Enroll. now</a>
                </div>
            </div>
            <div class="card">
                <div class="circle">
                    <h2><img src="c.png"></h2>
                </div>
                <div class="img"></div>
                <div class="content">
                    <h4>C Programming</h4>
                    <p>C is a procedural programming language.It was developed as system programming language.<br>The
                        main features this include low-level memory access make C language suitable for system
                        programming like an operating system or compiler development.
                    </p>
                    <a href="#c">Enroll. now</a>
                </div>
            </div>
            <div class="card">
                <div class="circle">
                    <h2><img src="web.png" style="padding: 25%;"></h2>
                </div>
                <div class="img"></div>
                <div class="content">
                    <h4>Web Designing</h4>
                    <p>Web design refers to the design of websites that are displayed on the internet.It usually refers
                        to the user experience aspects of website development rather than softwrae development.Web
                        design used to be focused on designing websites for desktop browsers.</p>
                    <a href="course.html">Enroll. now</a>
                </div>
            </div>
            <div class="card" style="margin-right: 27%;">
                <div class="circle">
                    <h2><img src="php.png" style="padding: 25%; width: 60%;"></h2>
                </div>
                <div class="img"></div>
                <div class="content">
                    <h4>PHP</h4>
                    <p>PHP is a HyperText PreProcessor.It is a server scripting language, and a powerful tool for making
                        dynamic and interactive Web pages.<br>PHP is a widely-used free and efficient alternative to
                        competitors such as Microsoft's ASP.
                    </p>
                    <a href="#web">Enroll. now</a>
                </div>
            </div>
            <div class="card" style="margin-left: 10%;">
                <div class="circle">
                    <h2><img src="python.png" style="padding: 30%;"></h2>
                </div>
                <div class="img"></div>
                <div class="content">
                    <h4>Python</h4>
                    <p>Python is a popular programming language. It was created by Guido van Rossum, and released in
                        1991.It is used for:<br>Web development (server-side),Software development,Mathematics,System
                        scripting.
                    </p>
                    <a href="#python">Enroll. now</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>