<?php
session_start();
    include('databaseconn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online learning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <label class="logo">SMART LEARNING</label>
            <ul style="margin-top: 30px">
                <li><a href="#home">HOME</a></li>
                <li><a href="#courses">COURSES</a>
                    <ul class="dropdown" style="width: 30%; padding-top: 10px;">
                        <li><a href="">Web designing</a></li>
                          <li><a href="">C Programming</a></li>
                          <li><a href="">C++ Programming</a></li>
                          <li><a href="">JAVA</a></li>
                          <li><a href="">Python</a></li>
                          <li><a href="">PHP</a></li>
                      </ul>
                  
                </li>
                <li><a href="profile.php"> PROFILE</a></li>
                <li><a href="#about"> ABOUT US</a></li>
                <li><a href="#ourservices"> OUR SERVICES</a></li>
                <li><a href="#book">BOOKS SHELF</a></li>
                <li><a href="#contactus"> CONTACT US</a></li>
                <li><a href="logout.php"> LOGOUT</a></li>
            </ul>
        </nav>
        <div class="learning" id="home">
            <img src="lappi.png" style="width: 500px; height: 400px; float:right; margin-top: 10%;">
        </div>
        <div class="main">
            <h1>SMART LEARNER</h1>
            <h2>INVESTING YOUR TIME IN LEARNING LANGUAGES??</h2>
            <h3>GET INFORMATION ON CURRENT LANGUAGES.</h3>
            <h4>Working with SMART LEARNING , very efficient platform for learning purpose.</h4>
            <h5>Our professional will be in touch with you to advise you about all the learning system.</h5>
        </div>
    </header>

    <!-------------courses---------------->

    <section id="courses">
        </div>
        <div class="grid-container">
            <h1 style="text-align: center;">OUR COURSES</h1>

            <?php
               $sql = "SELECT * FROM courses LIMIT 2";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $course_id = $row['course_id'];
                        echo' <div class="card" style="margin-top: 11%;  margin-right: 7%">
                        <div class="circle">
                            <h2><img src="' .$row['course_img']. '" class="card-img-top" width="200" height="120" alt="courseimg">
                            </h2>
                        </div>
                        <div class="img"></div>
                        <div class="content truncate">
                            <h4 class="card-title">'.$row['course_name']. '</h4>
                            <p class="card-text">'.$row['course_desc']. '</p>
                            <a href="coursedetail.php?course_id='.$course_id.'">Enroll. now</a>
                        </div>
                    </div> ';
                    }
                }
            ?>
        
           <!---  <?php
               $sql = "SELECT * FROM courses LIMIT 2";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $course_id = $row['course_id'];
                        echo' <div class="card" style="margin-top: 11%;  margin-right: 16%;">
                        <div class="circle">
                            <h2><img src="' .$row['course_img']. '" class="card-img-top" width="200" height="120" alt="courseimg">
                            </h2>
                        </div>
                        <div class="img"></div>
                        <div class="content truncate">
                            <h4 class="card-title">'.$row['course_name']. '</h4>
                            <p class="card-text">'.$row['course_desc']. '</p>
                            <a href="coursedetail.php?course_id='.$course_id.'">Enroll. now</a>
                        </div>
                    </div> ';
                    }
                }
            ?>--->
                        <?php
               $sql = "SELECT * FROM courses LIMIT 3, 3";
               $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $course_id = $row['course_id'];
                        echo' <div class="card" style="margin-top: 11%; margin-right: 13%">
                        <div class="circle">
                            <h2><img src="' .$row['course_img']. '" class="card-img-top" width="200" height="120" alt="courseimg">
                            </h2>
                        </div>
                        <div class="img"></div>
                        <div class="content truncate">
                            <h4 class="card-title">'.$row['course_name']. '</h4>
                            <p class="card-text">'.$row['course_desc']. '</p>
                            <a href="coursedetail.php?course_id='.$course_id. '">Enroll. now</a>
                        </div>
                    </div> ';
                    }
                }
            ?>
        </div>
        </div>
    </section>
    <section class="aboutus">
        <div class="about" id="about">
            <h1>ABOUT US</h1>
            <p style="font-weight: bold;">"KNOWLEDGE IS THE FOREMOST DEVELOPMENT IN EVERYONE’S LIFE DOESN’T MATTER FROM
                WHICH BACKGROUND YOU COMES FOR THE MOST IMPORTANT IS ACQURING KNOWLEDGE WITH ENTHUSIAM."</p>

            <p style="font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Our website is about
                learning different courses through online mode. We are here to help you to learn these courses in a very
                effective and easy way we with our brilliant team members are trying to reach up to your demands we will
                facilate you with the best way to learn the languages. In our website we have provided with the best
                options of online learning in this website you will find “fun in coding”.
            </p>
            <div class="campus">
                <h2>*WHY LEARNING CAMPUS ?*</h2>
                <h3>Learning campus is a young and passionatic organization consisting of youthful gems from the
                    computer application generation. We are a team of youth who aim to do whatever it takes to get the
                    finest for our client in very less time.</h3>
            </div>
            <div class="objective">
                <h1>**OUR OBJECTIVES**</h1>
                <img src="objective.png" alt="">
                <h3>Our main moto is to understand client's requirements</h3>
            </div>
            <div class="objective1">
                <h1>**ANALYSIS**</h1>
                <img src="analysis.png" alt="">
                <h3>The second most important thing is to analyze the contents and check which one suits to the client’s desire.</h3>
            </div>
            <div class="objective2">
                <h1>**SITE VISIT**</h1>
                <img src="visit.png" alt="">
                <h3>The most valuable part of the process is site visit. We tend to be very honest with our team and make sure that you have actually invested your time in something which is really appreciable.</h3>
            </div>
            <div class="objective3">
                <h1>**HERE FOR YOU**</h1>
                <img src="here.png" alt="">
                <h3>Our team is always here for you whenever you need, our team is available 24*7 for you. We assure you to be as available as possible as we can.</h3>
            </div>
            <div class="objective4">
                <h1>**TALENTED CONSULTANT**</h1>
                <img src="talented consultant.png" alt="">
                <h3>From the very start, we have elected our team, assuring only and only the most capable and talented consultants to join our team . We actually proud of our team and everyone here in Learning Campus is centralized on providing you the best ever service.</h3>
            </div>
    </section>


    <section id="ourservices">
        <div class="ourservices">
            <h1>OUR SERVICES</h1>
          
            <li>Analyze the most popular and desire after.</li>
            <li> New way of learning.</li>   
            <li>Flexible time investment solution.</li>    
            <li>Raising of institutional relationship.</li>
            <li>Concept development.</li> 
            <li>Organizing and designing.</li> 
            <li>Learning oversight.</li>
            <li> Adequate service.</li>
            <li>Time management.</li>
        </div>
    </section>

    <section class="book" id="book">
        <div class="container-book">
            <h1>FEATURED BOOKS</h1>
        </div>
        <div class="images">
            <div class="flip-card">
                <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="wb1.jpg" alt="" width="80%;">
                <h3>Web Designing and Development</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="price">$15.99</p>
                
            </div>
            <div class="flip-card-back">
                <p>Rs. 1,325.00</p> 
                <p>Inclusive of all taxes</p>
                <h3>In Stock</h3>
                <p>Sold by Shroff Publishers</p>
                <label class="for">Quantity:</label>
                <select name="Quantity" id="items">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>


                </select>
                <p><button class="btn btn-add">Add to Cart</button></p>
                <button class="btn btn-buy"><a href="wb.php" style="text-decoration: none;">Preview</a></button>
                <p><input type="Add to Whislist" placeholder="Add to Wishlist"></p>
              </div>
        </div>
        </div>
        </div>
        <div class="images">
            <div class="flip-card">
                <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="cp1.jpg" alt="" width="80%;">
                <h3>Learn C the Hard Way</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <p class="price">$19.99</p>
            </div>
            <div class="flip-card-back">
                <p>Rs. 1,300.00</p> 
                <p>Inclusive of all taxes</p>
                <h3>In Stock</h3>
                <p>Sold by Prentice Hall Publishers</p>
                <label>Quantity:</label>
                <select name="Quantity" id="items">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p><button class="btn btn-add">Add to Cart</button></p>
                <button class="btn btn-buy"><a href="cp.php" style="text-decoration: none;">Preview</a></button>
                <p><input type="Add to Whislist" placeholder="Add to Wishlist"></p>
              </div>
        </div>
        </div>
        </div>
        <div class="images">
            <div class="flip-card">
                <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="cpp1.png" alt="" width="70%;">
                <h3>C++- How To Program</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
                <p class="price">$19.99</p>
            </div>
            <div class="flip-card-back">
                <p>Rs. 1,250.00</p> 
                <p>Inclusive of all taxes</p>
                <h3>In Stock</h3>
                <p>Sold by Addison-Wesley Publishers</p>
                <label>Quantity:</label>
                <select name="Quantity" id="items">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p><button class="btn">Add to Cart</button></p>
                <button class="btn" style="padding-top: 5px;"><a href="cpp.php" style="text-decoration: none;">Preview</a></button>
                <p><input type="Add to Whislist" placeholder="Add to Wishlist"></p>
              </div>
        </div>
        </div>
        </div>
        <div class="images">
            <div class="flip-card">
                <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="1.png" alt="" width="80%;">
                <h3>Programming with JAVA</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="price">$29.99</p>
            </div>
            <div class="flip-card-back">
                <p>Rs. 1,325.00</p> 
                <p>Inclusive of all taxes</p>
                <h3>In Stock</h3>
                <p>Sold by Shroff/O'reilly Publishers</p>
                <label>Quantity:</label>
                <select name="Quantity" id="items">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p><button class="btn btn-add">Add to Cart</button></p>
                <button class="btn btn-buy"><a href="javabook.php" style="text-decoration: none;">Preview</a></button>
                <p><input type="Add to Whislist" placeholder="Add to Wishlist"></p>
              </div>
        </div>
        </div>
        </div>
        <div class="images">
            <div class="flip-card" style="margin-right: 23%;">
                <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="pr1.jpg" alt=""width="80%;">
                <h3>Learning Robotics using Python</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="price">$12.99</p>
            </div>
            <div class="flip-card-back">
                <p>Rs. 1,300.00</p> 
                <p>Inclusive of all taxes</p>
                <h3>In Stock</h3>
                <p>Sold by O'Reilly MediaPublishers</p>
                <label>Quantity:</label>
                <select name="Quantity" id="items">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p><button class="btn btn-add">Add to Cart</button></p>
                <button class="btn btn-buy"><a href="pr.php" style="text-decoration: none;">Preview</a></button>
                <p><input type="Add to Whislist" placeholder="Add to Wishlist"></p>
              </div>
        </div>
        </div>
        </div>
        <div class="images">
            <div class="flip-card" style="margin-left: 20%;">
                <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="php1.png" alt="" width="80%;">
                <h3>Learn PHP</h3>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="price">$10.99</p>
            </div>
            <div class="flip-card-back">
                <p>Rs. 1,225.00</p> 
                <p>Inclusive of all taxes</p>
                <h3>In Stock</h3>
                <p>Sold by O'reilly Publishers</p>
                <label>Quantity:</label>
                <select name="Quantity" id="items">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p><button class="btn btn-add">Add to Cart</button></p>
                <button class="btn btn-buy"><a href="php.php" style="text-decoration: none;">Preview</a></button>
                <p><input type="Add to Whislist" placeholder="Add to Wishlist"></p>
              </div>
        </div>
        </div>
        </div>
    </section>

    <section id="contactus">
        <div class="contactus">
            <h1>CONTACT US</h1>
            <div id="contact-box">
             <form action="contactdb.php" method="POST">
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" name="Name" id="name" placeholder="Enter Your Name">
                   </div>
     
                   <div class="form-group">
                     <label for="name">Email:</label>
                     <input type="text" name="Email" id="email" placeholder="Enter Your Email">
                  </div>
     
                  <div class="form-group">
                     <label for="name">Phone Number:</label>
                     <input type="text" name="Phone" id="phone" placeholder="Enter Your Phone Number">
                  </div>
     
                  <div class="form-group">
                     <label for="name">Message:</label>
                     <textarea name="Message" id="message" cols="30" rows="10"></textarea> 
              </form>
           <button class="btn2" name="Submit">SUBMIT</button>   
           </div>    
          </div> 
        </div>
     </section>

     <?php
        include 'feed.html';
    ?>
    
     <?php
    include('footer.php');
?>
</body>
</html>

