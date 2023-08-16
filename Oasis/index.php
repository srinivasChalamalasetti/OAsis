<?php
include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>


<!DOCTYPE html>                          
<html>
  <head> 
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
    .mySlides {display:none;}
  </style>
</head>
<body class="bg"> 

  <ul style="background-color: #ADF1F0 ;">
    <img src="logo.jpeg" style="float: left; width: 7%; border-radius: 8px; margin-left: 10px; margin-top: 10px; margin-bottom: 10px;">
    <li><h1 style="color: #4F9B9A ; margin-left: 300px;">Anil Neerukonda Institute of Technology and Sciences</h1> 
      </li>
    <li>
      <h3 style="color: darkgreen; margin-left: 470px;">Autonomus status accorded by UGC and Andhra University</h3>
    </li>

    <img src="logo2.jpg" style="right: left; width: 14%; margin-top : 6px; border-radius: 6px; margin-left: 30px; margin-bottom: 10px;">
  </ul>

  <ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#About Us">About Us</a></li>
    <li><a href="#Admissions">Admissions</a></li>
    <li><a href="#Department">Department</a></li>
     <li><a class="R&D Cell" href="https://anits.edu.in/rd.php">R&D Cell</a></li>
    <li><a href="#IQAC">IQAC</a></li>
    <li><a href="#Training and department">Training and department</a></li>
    <li><a href="#Central library">Central library</a></li>
     <li><a class="active" href="#home">Facilities</a></li>
    <li><a href="#contact">NACC</a></li>
    <li><a href="#NBA">NBA</a></li>
    <li><a class="active" href="#home">ICC</a></li>
    <li><a href="https://www.anits.edu.in/elearn_main.php">e-Learning</a></li>
    <li><a href="contact.html">Contact Us</a></li>

  </ul>



  <div class="w3-content w3-section" style="max-width:1000px; margin-left : 300px; margin-top : 20px">
    <img class="mySlides" src="img1.jpeg" style="width:100%">
    <img class="mySlides" src="img2.jpeg" style="width:100%">
   <!-- /* <img class="mySlides" src="img3.jpeg" style="width:100%">  -->
  </div>

  <script>
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); 
  }
  </script> 

  <div class="width-100 footer2-bacbor">
    <p class="footer2-content">Copyright @ 2023, dezven.com. All Rights Reserved</p>
 </div>
  
  </body>
</html>

