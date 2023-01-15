<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>courses</title>
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
section{
    padding: 6rem 0;
}
.container1{
    display: flex;
    align-items: center;
    margin-left: 100px;
    padding-bottom: 10%;
}
.container1 img{
    width: 600px;
}
.container{
    display: flex;
    align-items: center;
    padding-bottom: 10%;
}
section .course-img1{
    height: 450px;
    margin-left: -20%;
}
section .course-img{
    height: 450px;
}
.ourcourse h1{
    font-size: 50px;
    text-decoration-line: underline;
    text-underline-offset: 5px;
    text-decoration-thickness: 2px;
    text-decoration-color: orange;
}
.ourcourse h3{
    font-size: 30px;
    padding: 10px;
}
.ourcourse p{
    font-size: 15px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    padding: 10px;
}
.ourcourse span{
    color: orange;
    margin-left: 10px;
}
.ourcourse button{
    border-radius: 20px;
    padding: 5px;
    margin-top: 10px;
}
.ourcourse button:hover{
    background-color: orange;
    transition: .5s;
    font-size: 10px;
    font-weight: bold;
    border-color: orange;
}
.content{
    color: black;
}
.content p{
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 5px;
}
.des p{
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 5px;
}
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                 <li><a href="#web">Web designing</a></li>
                <li><a href="#c">C Programming</a></li>
                <li><a href="#c++">C++ Programming</a></li>
                <li><a href="#java">JAVA</a></li>
                <li><a href="#python">Python</a></li>
                <li><a href="#php">PHP</a></li>
                <input type="search" placeholder="Search....." required>
            </ul>
        </nav>
        <div class="main">
            <h1>Let's Get Started.....</h1>
        </div>
  </header>
    
   <section class="ourcourse" id="java">
       <div class="container">
           <div class="flex-1">
               <img class="course-img" src="java12.png" alt="">
           </div>
           <div class="flex-1">
               <h1>JAVA</h1>
               <h3>Complete JAVA Course</h3>
               <p>Learn JAVA like a Professional Start from he basics and go all the way to create your own applications and games.</p>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span><span style="color: black;">(390,991 rating) 1,420,171 students</span>
               <h2 style="padding: 10px;">What you'll Learn?
                   <div class="content">
                <p><i class="fa fa-check" aria-hidden="true">Java’s Popularity and High Salary.</p></i>
                <p><i class="fa fa-check" aria-hidden="true">Java is easy to learn.</p></i>
                <p><i class="fa fa-check" aria-hidden="true">Java has multiple Open Source Libraries.</p></i>
                <p><i class="fa fa-check" aria-hidden="true">Java has Powerful Development Tools.</p></i>
               </h2>
               <span id="dots" style="color: #000; font-size: 20px;">.....</span><span id="more" style="color: black;">
               
                <p class="des">Java is a popular programming language.Java is used to develop mobile apps, web apps, desktop apps, games and much more.Java is a class-based, object-oriented programming language and is designed to have as few implementation dependencies as possible. A general-purpose programming language made for developers to write once run anywhere that is compiled Java code can run on all platforms that support Java. Java applications are compiled to byte code that can run on any Java Virtual Machine. The syntax of Java is similar to c/c++.
                 </p></span>
           
               <button onclick="myFunction()" id="myBtn">Read more</button>
           </div>
       </div>

       <div class="container1" id="c++">
        <div class="flex-1">
            <img class="course-img1" src="c++22.jpg" alt="">
        </div>
        <div class="flex-1">
            <h1>C++ Programming</h1>
            <h3>Complete C++ Course</h3>
            <p>Learn c++ like a professional for Start from he basics and go all the way to create your own software. </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><span style="color: black;">(390,991 rating) 1,420,171 students</span>
            <h2 style="padding: 10px;">What you'll Learn?
                <div class="content">
             <p><i class="fa fa-check" aria-hidden="true">C++ has Abundant Library Support.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C++ In Databases.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C++ In Operating Systems.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C++ In Web Browsers.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C++ is Portable.</p></i>
            </h2>
            <span id="dots" style="color: #000; font-size: 20px;">.....</span><span id="more" style="color: black;">
            
             <p class="des">C++ is a general-purpose programming language that was developed as an enhancement of the C language to include object-oriented paradigm. It is an imperative and a compiled language. <br>C++ is a middle-level language rendering it the advantage of programming low-level (drivers, kernels) and even higher-level applications (games, GUI, desktop apps etc.). The basic syntax and code structure of both C and C++ are the same. C++ is one of the every green programming languages and loved by millions of software developers. If you are a great C++ programmer then you will never sit without work and more importantly you will get highly paid for your work. C++ is the most widely used programming languages in application and system programming. So you can choose your area of interest of software development.
              </p></span>
        
              <button onclick="myFunction()" id="myBtn">Read more</button>
        </div>
    </div>

    <div class="container1" id="c">
        <div class="flex-1">
            <img class="course-img1" src="c11.jpg" alt="">
        </div>
        <div class="flex-1">
            <h1>C Programming</h1>
            <h3>Complete C Course</h3>
            <p>Learn c like a professional for Start from he basics and go all the way to create your own software. </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><span style="color: black;">(390,991 rating) 1,420,171 students</span>
            <h2 style="padding: 10px;">What you'll Learn?
                <div class="content">
             <p><i class="fa fa-check" aria-hidden="true">Helps to understand the fundamentals of Computer Theories.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C is very fast in terms of execution time.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C is extensively used in Embedded Programming.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C programming language has fewer libraries in comparison with other high-level languages.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">C is a Middle-Level Language. </p></i>
            </h2>
            <span id="dots" style="color: #000; font-size: 20px;">.....</span><span id="more" style="color: black;">
            
             <p class="des">C  is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system.<br>It can be used to develop software like operating systems, databases, compilers, and so on. C programming is an excellent language to learn to program for beginners.C programming language is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Software Development Domain.
              </p></span>
        
              <button onclick="myFunction()" id="myBtn">Read more</button>
        </div>
    </div>


    <div class="container1" id="c">
        <div class="flex-1">
            <img class="course-img1" src="python.png" alt="">
        </div>
        <div class="flex-1">
            <h1>Python</h1>
            <h3>Complete Python Course</h3>
            <p>Learn python like a professional for Start from he basics and go all the way to create web application. </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><span style="color: black;">(390,991 rating) 1,420,171 students</span>
            <h2 style="padding: 10px;">What you'll Learn?
                <div class="content">
             <p><i class="fa fa-check" aria-hidden="true">Python is easy to learn.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Python is Versatile</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Python developers are in demand.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Scripting and Automation.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Portable and Extensible.</p></i>
            </h2>
            <span id="dots" style="color: #000; font-size: 20px;">.....</span><span id="more" style="color: black;">
            
             <p class="des">Python is a popular programming language.Python can be used on a server to create web applications.<br>Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL). This tutorial gives enough understanding on Python programming language.Python is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain.
              </p></span>
        
              <button onclick="myFunction()" id="myBtn">Read more</button>
        </div>
    </div>


    <div class="container1" id="c">
        <div class="flex-1">
            <img class="course-img1" src="php1.jpg" alt="">
        </div>
        <div class="flex-1">
            <h1>PHP Programming</h1>
            <h3>Complete PHP Course</h3>
            <p>Learn PHP like a professional for Start from he basics and go all the way to create web applications. </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span><span style="color: black;">(390,991 rating) 1,420,171 students</span>
            <h2 style="padding: 10px;">What you'll Learn?
                <div class="content">
             <p><i class="fa fa-check" aria-hidden="true">PHP is a comfortable.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Easy to Learn.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Free of cost.</p></i>
             <p><i class="fa fa-check" aria-hidden="true">User-friendly</p></i>
             <p><i class="fa fa-check" aria-hidden="true">Support all of the leading databases. </p></i>
            </h2>
            <span id="dots" style="color: #000; font-size: 20px;">.....</span><span id="more" style="color: black;">
            
             <p class="des">PHP is a popular programming language which is utilized to build dynamic web applications with MySQL database connections. For a programming language to be successful, it must be comfortable and widely accepted by a large number of web developers. PHP is outfitted with many open sources integrated development environments. Moreover, there are a lot of benefits of learning PHP language.<br>PHP offers a plenty of benefits that will surely deliver your limits of developing something outstanding. Not only is it open-source but also feature-rich and has all the functionality that a proprietary or paid scripting language would offer.
              </p></span>
        
              <button onclick="myFunction()" id="myBtn">Read more</button>
        </div>
    </div>
   </section>
</body>
<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
</html>