<?php

  session_start();

  //"SELECT * FROM item WHERE Categorie="Livre" ORDER BY Quantite_vendu"

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Vente Flash</title>

  <!-- Debut CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="styles_footer.css">
  <link rel="stylesheet" type="text/css" href="categories.css">
  <link rel="stylesheet" type="text/css" href="styles_index.css">
  <link rel="stylesheet" type="text/css" href="nav.css">

  <!-- fin CSS -->

  <!-- Debut Jquery -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(
    function(){ 
      $('.header').height($(window).height())
    
    });   
  </script> 

  <!-- fin Jquery -->
</head>

<body>

<?php

    include_once 'barre2.php'

  ?>

</br>
</br>
  <h2 id="description"> Ventes Flash</h2>
  <hr class="separateur">

 <div class ="container-fluid"> 


    <div class="container">

      <div class="row">

        <div class="col-2 col-sm-12">
          <h3 id="description">Livres</h3>
          <hr class="separator">

        </div>


         
                <?php 

                      $database = "ece_amazon";
                      $conn = mysqli_connect('localhost', 'root', '', $database );
                    $sql ="SELECT * FROM item WHERE Categorie='Livre' ORDER BY Quantite_vendu DESC LIMIT 4";
                    $result = mysqli_query($conn, $sql);
                  
                      while($colonne = mysqli_fetch_assoc($result)){


                      echo '  

                          <form  action="ajout_panier.php" method="POST">

                    <!-- On récupère id_item de la bdd en la cachant à lutilisateur au début de la création de la boite-->
                   <input type="hidden" name="id_item" value="'.$colonne['Id_item'].'"> 


                   <!-- Debut boite-->

                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 box ">


                      <div class="col-item">

                          <div class="image_item ">

                              <div class="absolute-aligned">

                                   <img src="photo_item/'.$colonne['Photo_article'].'"class="img-responsive" alt="a" />
                              </div>

                          </div>

                          <!-- -->
                          <div class="info">
                            <!-- -->
                              <div class="row">
                                <!-- -->
                                  <div class="price col-md-12">

                                    <!-- -->
                                       <div class="titre_article">

                                        <h5><a href ="fiche_item.php?id='.$colonne['Id_item'].'">'.$colonne['Nom_item'].'</a></h5>

                                       </div>

                                       <!-- -->
                                     <div class="row">
                                        <!-- -->
                                          <div class="price col-md-12">
                                                <strong>Categorie:</strong><span class="pull-right"> '.$colonne['Categorie'].'  </span>
                                          </div>

                                            <div class="price col-md-12">
                                                <strong>Genre:</strong><span class="pull-right">'.$colonne['Genre'].'</span>
                                          </div>


                                            <!-- Prix  -->
                                           <div class="price col-md-12">
                                                <strong>Prix : </strong><span class="pull-right price-text-color">'.$colonne['Prix_unite'].'€</span>
                                           </div>
                                      </div>    
                                  </div>
                              </div>
                               <!-- -->
                              <div class="separator clear-left">
                                 <div class="separator clear-left">
                                     <p></p>

                                     <input type="number" id="quantite" name="quantite">
                              <label class="form-quantite" for="quantite">
                                Quantité
                              </label>

                                    <button class="btn btn-outline btn-warning btn-sm btn-block " name="ajouter_panier" type="submit">
                                    <i class="fa fa-shopping-cart fa-fw"></i>Ajouter au panier</button>
                                 </div>
                              </div>
                              <!-- -->
                              <div class="clearfix"></div>
                          </div>
                      </div>
                  </div>
                </form>';}

                    ?>
        </div>   
                  
         <div class="row">
            <div class="col-2 col-sm-12">
               <h3 id="description">Musique</h3>
               <hr class="separator">
          </div>

                <?php 

                      $database = "ece_amazon";
                      $conn = mysqli_connect('localhost', 'root', '', $database );
                    $sql ="SELECT * FROM item WHERE Categorie='Musique' ORDER BY Quantite_vendu DESC LIMIT 4";
                    $result = mysqli_query($conn, $sql);
                  
                      while($colonne = mysqli_fetch_assoc($result)){


                      echo '  

                          <form  action="ajout_panier.php" method="POST">

                    <!-- On récupère id_item de la bdd en la cachant à lutilisateur au début de la création de la boite-->
                   <input type="hidden" name="id_item" value="'.$colonne['Id_item'].'"> 


                   <!-- Debut boite-->

                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 box ">


                      <div class="col-item">

                          <div class="image_item ">

                              <div class="absolute-aligned">

                                   <img src="photo_item/'.$colonne['Photo_article'].'"class="img-responsive" alt="a" />
                              </div>

                          </div>

                          <!-- -->
                          <div class="info">
                            <!-- -->
                              <div class="row">
                                <!-- -->
                                  <div class="price col-md-12">

                                    <!-- -->
                                       <div class="titre_article">

                                        <h5><a href ="fiche_item.php?id='.$colonne['Id_item'].'">'.$colonne['Nom_item'].'</a></h5>

                                       </div>

                                       <!-- -->
                                     <div class="row">
                                        <!-- -->
                                          <div class="price col-md-12">
                                                <strong>Categorie:</strong><span class="pull-right"> '.$colonne['Categorie'].'  </span>
                                          </div>

                                            <div class="price col-md-12">
                                                <strong>Genre:</strong><span class="pull-right">'.$colonne['Genre'].'</span>
                                          </div>


                                            <!-- Prix  -->
                                           <div class="price col-md-12">
                                                <strong>Prix : </strong><span class="pull-right price-text-color">'.$colonne['Prix_unite'].'€</span>
                                           </div>
                                      </div>    
                                  </div>
                              </div>
                               <!-- -->
                              <div class="separator clear-left">
                                 <div class="separator clear-left">
                                     <p></p>

                                     <input type="number" id="quantite" name="quantite">
                              <label class="form-quantite" for="quantite">
                                Quantité
                              </label>

                                    <button class="btn btn-outline btn-warning btn-sm btn-block " name="ajouter_panier" type="submit">
                                    <i class="fa fa-shopping-cart fa-fw"></i>Ajouter au panier</button>
                                 </div>
                              </div>
                              <!-- -->
                              <div class="clearfix"></div>
                          </div>
                      </div>
                  </div>
                </form>';}

                    ?>



          
         </div>


          <div class="row">

             <div class="col-2 col-sm-12">
                <h3 id="description">Vetements</h3>
                <hr class="separator">
           </div>

                <?php 

                      $database = "ece_amazon";
                      $conn = mysqli_connect('localhost', 'root', '', $database );
                    $sql ="SELECT * FROM item WHERE Categorie='Vetement' ORDER BY Quantite_vendu DESC LIMIT 4";
                    $result = mysqli_query($conn, $sql);
                  
                      while($colonne = mysqli_fetch_assoc($result)){


                      echo '  

                          <form  action="ajout_panier.php" method="POST">

                    <!-- On récupère id_item de la bdd en la cachant à lutilisateur au début de la création de la boite-->
                   <input type="hidden" name="id_item" value="'.$colonne['Id_item'].'"> 


                   <!-- Debut boite-->

                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 box ">


                      <div class="col-item">

                          <div class="image_item ">

                              <div class="absolute-aligned">

                                   <img src="photo_item/'.$colonne['Photo_article'].'"class="img-responsive" alt="a" />
                              </div>

                          </div>

                          <!-- -->
                          <div class="info">
                            <!-- -->
                              <div class="row">
                                <!-- -->
                                  <div class="price col-md-12">

                                    <!-- -->
                                       <div class="titre_article">

                                        <h5><a href ="fiche_item.php?id='.$colonne['Id_item'].'">'.$colonne['Nom_item'].'</a></h5>

                                       </div>

                                       <!-- -->
                                     <div class="row">
                                        <!-- -->
                                          <div class="price col-md-12">
                                                <strong>Categorie:</strong><span class="pull-right"> '.$colonne['Categorie'].'  </span>
                                          </div>

                                            <div class="price col-md-12">
                                                <strong>Genre:</strong><span class="pull-right">'.$colonne['Genre'].'</span>
                                          </div>


                                            <!-- Prix  -->
                                           <div class="price col-md-12">
                                                <strong>Prix : </strong><span class="pull-right price-text-color">'.$colonne['Prix_unite'].'€</span>
                                           </div>
                                      </div>    
                                  </div>
                              </div>
                               <!-- -->
                              <div class="separator clear-left">
                                 <div class="separator clear-left">
                                     <p></p>

                                     <input type="number" id="quantite" name="quantite">
                              <label class="form-quantite" for="quantite">
                                Quantité
                              </label>

                                    <button class="btn btn-outline btn-warning btn-sm btn-block " name="ajouter_panier" type="submit">
                                    <i class="fa fa-shopping-cart fa-fw"></i>Ajouter au panier</button>
                                 </div>
                              </div>
                              <!-- -->
                              <div class="clearfix"></div>
                          </div>
                      </div>
                  </div>
                </form>';}

                    ?>

           </div>  

           <div class="row"> 

             <div class="col-2 col-sm-12">
                <h3 id="description">Sport et Loisir</h3>
                <hr class="separator">
            </div>

                <?php 

                      $database = "ece_amazon";
                      $conn = mysqli_connect('localhost', 'root', '', $database );
                    $sql ="SELECT * FROM item WHERE Categorie='Sport et Loisir' ORDER BY Quantite_vendu DESC LIMIT 4";
                    $result = mysqli_query($conn, $sql);
                  
                      while($colonne = mysqli_fetch_assoc($result)){


                      echo '  

                          <form  action="ajout_panier.php" method="POST">

                    <!-- On récupère id_item de la bdd en la cachant à lutilisateur au début de la création de la boite-->
                   <input type="hidden" name="id_item" value="'.$colonne['Id_item'].'"> 


                   <!-- Debut boite-->

                   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 box ">


                      <div class="col-item">

                          <div class="image_item ">

                              <div class="absolute-aligned">

                                   <img src="photo_item/'.$colonne['Photo_article'].'"class="img-responsive" alt="a" />
                              </div>

                          </div>

                          <!-- -->
                          <div class="info">
                            <!-- -->
                              <div class="row">
                                <!-- -->
                                  <div class="price col-md-12">

                                    <!-- -->
                                       <div class="titre_article">

                                        <h5><a href ="fiche_item.php?id='.$colonne['Id_item'].'">'.$colonne['Nom_item'].'</a></h5>

                                       </div>

                                       <!-- -->
                                     <div class="row">
                                        <!-- -->
                                          <div class="price col-md-12">
                                                <strong>Categorie:</strong><span class="pull-right"> '.$colonne['Categorie'].'  </span>
                                          </div>

                                            <div class="price col-md-12">
                                                <strong>Genre:</strong><span class="pull-right">'.$colonne['Genre'].'</span>
                                          </div>


                                            <!-- Prix  -->
                                           <div class="price col-md-12">
                                                <strong>Prix : </strong><span class="pull-right price-text-color">'.$colonne['Prix_unite'].'€</span>
                                           </div>
                                      </div>    
                                  </div>
                              </div>
                               <!-- -->
                              <div class="separator clear-left">
                                 <div class="separator clear-left">
                                     <p></p>

                                     <input type="number" id="quantite" name="quantite">
                              <label class="form-quantite" for="quantite">
                                Quantité
                              </label>

                                    <button class="btn btn-outline btn-warning btn-sm btn-block " name="ajouter_panier" type="submit">
                                    <i class="fa fa-shopping-cart fa-fw"></i>Ajouter au panier</button>
                                 </div>
                              </div>
                              <!-- -->
                              <div class="clearfix"></div>
                          </div>
                      </div>
                  </div>
                </form>';}

                    ?>
           </div>   

        </div>
    </div>

  <!-- Debut footer / contact -->
  <?php

    include_once 'footer.php'

  ?>
  <!-- fin footer -->

</body>
</html>
