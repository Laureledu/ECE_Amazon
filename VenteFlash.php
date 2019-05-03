<?php

  session_start();

  //"SELECT * FROM item WHERE Categorie="Livre" ORDER BY Quantite_vendu"

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

<h2 id="description"> Ventes Flash</h2>
<hr class="separateur">

<h3 id="description">Livres</h3>
<?php 

            $database = "ece_amazon";
            $conn = mysqli_connect('localhost', 'root', '', $database );
          $sql ="SELECT * FROM item WHERE Categorie='Livre' ORDER BY Quantite_vendu";
          $result = mysqli_query($conn, $sql);
        
            while($colonne = mysqli_fetch_assoc($result)){


            echo '  
          <div class="col-sm">
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
                 <div class="row">
                    <div class="col-sm-3">
                      <img src="photo_item/'.$colonne['Photo_article'].'"class="img-responsive" alt="a" />
                    </div>
                    <div class="col-sm-9" id="test">
                      <h4>'.$colonne['Nom_item'].'</h4>
                      <p>'.$colonne['Description_article'].'</p>
                      <a href="#" class="btn btn-info" role="button">Voir l article</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="images/livre2.jpg">
                    </div>

                    <div class="col-sm-9" id="test">
                      <h4>Zola</h4>
                      <p>1885. Disparition de Hugo. Apparition de Germinal. Voici, dans la France moderne et industrielle, les " Misérables " de Zola. Ce roman des mineurs, c est aussi l Enfer, dans un monde dantesque, où l on " voyage au bout de la nuit "</p>
                      <a href="#" class="btn btn-info" role="button">Voir l article</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="images/livre3.jpg">
                    </div>

                    <div class="col-sm-9" id="test">
                      <h4>Zola</h4>
                      <p>Valentin, vingt-cinq ans, mène une vie de dandy vouée aux plaisirs et jure qu il ne se mariera jamais, de peur d être trompé. Quand son oncle, las de l entretenir, lui propose de s unir à Cécile de Mantes, une riche aristocrate, Valentin parie qu il séduira incognito sa promise...</p>
                      <a href="#" class="btn btn-info" role="button">Voir l article</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="images/livre4.jpg">
                    </div>

                    <div class="col-sm-9" id="test">
                      <h4>Prevert</h4>
                      <p>Le cancreil dit non avec la tête mais il dit oui avec le cœuril dit oui à ce qu il aimeil dit non au professeuril est debouton le questionneet tous les problèmes sont poséssoudain le fou rire le prendet il efface toutles chiffres et les motsles dates et les nomsles phrases et les piègeset malgré les menaces du maîtresous les huées des enfants prodigesavec des craies de toutes les couleurssur le tableau noir du malheuril dessine le visage du bonheur.</p>
                      <a href="#" class="btn btn-info" role="button">Voir l article</a>
                    </div>
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
          </div>';}
          ?>

<h3 id="description">Musique</h3>
<div class="col-sm">
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
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test2.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test3.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test4.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
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
</div>

<h3 id="description">Vetements</h3>
<div class="col-sm">
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
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test2.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test3.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test4.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
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
</div>

<h3 id="description">Sport</h3>
<div class="col-sm">
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
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test2.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test3.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/test4.jpg">
        <div class="carousel-caption">
          <a href="#" class="btn btn-info" role="button">Voir l'article</a>
        </div>
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
</div>

  <!-- Debut footer / contact -->
  <?php

    include_once 'footer.php'

  ?>
  <!-- fin footer -->

</body>
</html>
