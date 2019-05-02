<?php

  session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin</title>

  <!-- Debut CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="styles_index.css">
  <link rel="stylesheet" type="text/css" href="nav.css">
  <link rel="stylesheet" type="text/css" href="styles_carousel.css">
  <!-- fin CSS -->

  <!-- Debut Jquery -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(
    function(){ 
      $('.banner').height($(window).height())
    
    });   
  </script> 

  <!-- fin Jquery -->
</head>

<body>

<?php

    include_once 'barre2.php'

  ?>

<h3>Livres</h3>
<div id="Carousel1" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#Carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#Carousel1" data-slide-to="1"></li>
    <li data-target="#Carousel1" data-slide-to="2"></li>
    <li data-target="#Carousel1" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/test1.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test2.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test3.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test4.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#Carousel1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#Carousel1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<h3>Musique</h3>
<div id="Carousel2" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#Carousel2" data-slide-to="0" class="active"></li>
    <li data-target="#Carousel2" data-slide-to="1"></li>
    <li data-target="#Carousel2" data-slide-to="2"></li>
    <li data-target="#Carousel2" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/test1.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test2.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test3.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test4.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#Carousel2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#Carousel2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<h3>Vetements</h3>
<div id="Carousel3" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#Carousel3" data-slide-to="0" class="active"></li>
    <li data-target="#Carousel3" data-slide-to="1"></li>
    <li data-target="#Carousel3" data-slide-to="2"></li>
    <li data-target="#Carousel3" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/test1.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test2.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test3.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test4.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#Carousel3" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#Carousel3" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<h3>Sport</h3>
<div id="Carousel4" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
    <li data-target="#Carousel4" data-slide-to="1"></li>
    <li data-target="#Carousel4" data-slide-to="2"></li>
    <li data-target="#Carousel4" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/test1.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test2.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test3.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/test4.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#Carousel4" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#Carousel4" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

  <!-- Debut footer / contact -->
  <?php

    include_once 'footer.php'

  ?>
  <!-- fin footer -->

</body>
</html>
