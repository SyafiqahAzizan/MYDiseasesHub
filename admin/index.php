<?php 
include ("../login/session.php");
session_start();

if (!isset($_SESSION['username'])) {
       header('Location: ../login');
    } 
    
?>

<!DOCTYPE html>
<html>
<title>Admin-MYDiseases Hub</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="../css/admin/index.css" rel="stylesheet">
	<link href="../assets/img/lgq.png" rel="icon">
<body>


<div id="container">
  <i id="icon" class="fa fa-caret-down"></i>
</div>

  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
  <a href="../admin/index.php" class="w3-bar-item w3-button"><b>MYDiseases Hub<b></a>
   <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home|<i class="fa fa-home"></i></a>

      <div class="dropdown">
        <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">A d m i n  <i class="fa fa-caret-down"></i></a>
         
        </button>
        <div class="dropdown-content">
          <a href="view_admin.php">My Account</a>
          <a href="update_view_admin.php">Update account</a>
        </div>
  </div>
         <div class="dropdown">
          <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">M o r e D i s e a s e <i class="fa fa-caret-down"></i></a>
              
            </button>
            <div class="dropdown-content">
              <a href="add_more_disease.php">Add Disease</a>
              <a href="view_more_disease.php">View Disease</a>
              <a href="update_view_disease.php">Update Disease</a>
              <a href="search_disease.php">Search Disease</a>
            </div>
            </div>

           
            <div class="dropdown">
                <button class="dropbtn"><a href="#projects" class="w3-bar-item w3-button">C o n t a c t <i class="fa fa-caret-down"></i></a>
         
               </button>
                <div class="dropdown-content">
                  <a href="view_contact.php">View Contact</a>
                </div>
                </div>
                <a href="../login/logout.php" class="w3-bar-item w3-button">Logout|<i class="fa fa-sign-out"></i></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1800px;" id="home">

<center>
  <div class="slideshow-container">
        
  <center>
        <div class="mySlides fade">
          <img class="op" src="../assets/img/m.jpg" width="1800px" height="700vh">
          <b><strong><h1 class="text">WELCOME<b> <?php echo $_SESSION['username'];?></h1></b></b></strong>
         
         </div>
    
     
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>


</center>
</header>


<script>
  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }

  (function(document){
  var div = document.getElementById('container');
  var icon = document.getElementById('icon');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa-caret-down';  
    } else{
      icon.className = 'fa-caret-down open';
    }

    open = !open;
  });
})(document);
  </script>  
</body>
</html>