<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book preview</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<style>
  .mySlides{
    width: 40%;
    height: 20%;
    /* position: relative; */
  }
  .book-content{
    margin-left: 35%;
    margin-top: 50px;
  }
  .w3-display-left
  {
    top: 250px;
    left: 0%;
  }
  .w3-display-right{
    top: 250px;
    /* right: 0%; */
    float: right;
  }
</style>
<body>
    
    <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center;">BOOK PREVIEW</h1>
      <div class="book-content" style="position: absolute;">
      <img class="mySlides" src="pr1.jpg">
        <img class="mySlides" src="pr2.png">
        <img class="mySlides" src="pr3.png">
        <img class="mySlides" src="pr4.png">
        <img class="mySlides" src="pr5.png">
        <img class="mySlides" src="pr6.png">
     
      </div>
      <button class="w3-button w3-display-left" onclick="plusDivs(-1)" style="font-size: 40px; position: relative; z-index:1000;">&#10094;</button>
        <button class="w3-button w3-display-right" onclick="plusDivs(+1)" style="font-size: 40px;position: relative; z-index:1000;">&#10095;</button>
        
 <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</body>

</html>