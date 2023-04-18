<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
<style>  

  </style>
</head>
<body>
<?php include 'navbar.php' ?>

<div class="container mt-3">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators ">
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="lib.png" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
                <h3>LMS</h3>
                <p>Education everywhere</p>
            </div>
    </div>
    <div class="carousel-item">
      <img src="lib1.png" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>LMS</h3>
            <p>Easy access</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="lib2.png" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>LMS</h3>
            <p>E-Learning</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="lib3.png" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
            <h3>LMS</h3>
            <p>Avalaible anytime</p>
        </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>