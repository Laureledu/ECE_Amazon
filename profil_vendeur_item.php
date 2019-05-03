<?php
    session_start(); // on récupère la session qui existe déjà 
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>page_de_connexion_vendeur</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style_profil_vendeur_item.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- debutJquery -->
	<script type="text/javascript">
	  $(document).ready(//adapte le header en fonction de la taille de l'écran
 	  function(){ $('.coucou').height($(window).height())}; 
        
	</script> 
</head>


<body>
    <header class = "container-fluid header">
            
        <div class="container">

            <!-- Logo -->
            <a href="index.php" class = "logo"> Logo </a>
            <!-- Barre de navigation en haut de l'écran pour les pcs il s'agit là d'un nav -->
            <nav class ="menu">
                <a href="#"> Catégories </a>
                <!-- bande déroulante avec le compte du "nom_du_pseudo" et "Déconnexion" -->
                <div class="co_deco">

                    <?php

                        if(isset($_SESSION['id_vendeur']))
                        {
                            echo  '<form role="form" action="traitement_deco.php" method="post">
                                <button  type="submit" name = "deconnexion" class="btn btn-primary pull-right"> Déconnexion </button>
                                </form>';

                        }else {

                            echo'<a href="profil_vendeur.php"> Votre compte </a>';
                            echo  $_SESSION['id_vendeur'].$_SESSION['pseudo_du_vendeur'];

                        }
                        
    

                    ?>
                </div>
            </nav>
        </div>

    </header>

    <section class="container-fluid item">
        <div class = "row">
            <div class="col-md-10 gestion_item">
                <h1 align="center">Mes Items</h1><br>

                <?php
                    /*$database = "ece_amazon"; 
                    $connect = mysqli_connect('localhost','root',''); 
                    $db_found = mysqli_select_db($connect,$database); 
                    
                    if($db_found)
                    {
                        $sql = "SELECT * FROM item INNER JOIN vendeur ON item.Id_vendeur=vendeur.Id_vendeur" ; 
                        //$sql = "SELECT * FROM item WHERE Id_vendeur == $_SESSION['id_vendeur'] , ALL IS NOT NULL"; 
                        $result = mysqli_query($connect, $sql); 
                        if ($row = mysqli_fetch_assoc($result)){

                            $_SESSION['id_item'] = $row['Id_item'];
                            $_SESSION['nom_item'] = $row['Nom_item'];
                            $_SESSION['prix_unite'] = $row['Prix_unite'];
                            $_SESSION['quantite_item'] = $row['Quantite_item'];
                            $_SESSION['quantite_vendu'] = $row['Quantite_vendu'];
                            $_SESSION['categrorie'] = $row['Categorie']; 
                            $_SESSION['auteur'] = $row['Auteur']; 
                            $_SESSION['genre'] = $row['Genre']; 
                            $_SESSION['collection'] = $row['Collection']; 
                            $_SESSION['type_vetement'] = $row['Type_vetement']; 
                            $_SESSION['taille'] = $row['Taille']; 
                            $_SESSION['couleur'] = $row['Couleur']; 
                            $_SESSION['photo_article'] = $row['Photo_article'];
                           
                        }
                    }*/

                    try{
                        $database = new PDO ('mysql:host=localhost;dbname=ece_amazon;charset=utf8', 'root', ''); // on se connect à la bdd
                    }
                    catch (Exception $e) // en cas d'erreur 
                    {
                        die ('Erreur : '.$e->getMessage()); 
                    }
                    $reponse = $database->query('SELECT * FROM item WHERE Id_vendeur ='.$_SESSION['id_vendeur'].''); // requète
                    while($row = $reponse->fetch())
                    {
                        $_SESSION['id_item'] = $row['Id_item']; 
                        $_SESSION['nom_item'] = $row['Nom_item'];
                        $_SESSION['prix_unite'] = $row['Prix_unite'];
                        $_SESSION['quantite_item'] = $row['Quantite_item'];
                        $_SESSION['quantite_vendu'] = $row['Quantite_vendu'];
                        $_SESSION['categrorie'] = $row['Categorie']; 
                        $_SESSION['auteur'] = $row['Auteur']; 
                        $_SESSION['genre'] = $row['Genre']; 
                        $_SESSION['collection'] = $row['Collection']; 
                        $_SESSION['type_vetement'] = $row['Type_vetement']; 
                        $_SESSION['taille'] = $row['Taille']; 
                        $_SESSION['couleur'] = $row['Couleur']; 
                        $_SESSION['photo_article'] = $row['Photo_article'];
                        $_SESSION['description_article']=$row['Description_article']; 

                    ?>

                    <article class="photo_article">
                        <?php
                            echo "<img width='20%' height='30%' src='photo_item/".$_SESSION['photo_article']."' alt='image_article'/><br/><br/>";
                        ?>
                    </article>
                
                    

                    <aside class = "block1">
                        <?php
                        echo "Identifiant : ".$_SESSION['id_item']."<br/>"; 
                        echo "Nom de l'article : ".$_SESSION['nom_item']."<br/>";
                        echo "Prix en EUR : ".$_SESSION['prix_unite']."<br/>";
                        echo "Quantité en magasin : ".$_SESSION['quantite_item']."<br/>";
                        echo "Quantité vendu : ".$_SESSION['quantite_vendu']."<br/>";
                        echo "Catégorie : ".$_SESSION['categrorie']."<br/>"; 
                        echo "Auteur : ".$_SESSION['auteur']."<br/>"; 
                        echo "Genre : ".$_SESSION['genre']."<br/>"; 
                        echo "Collection : ".$_SESSION['collection']."<br/>";
                        echo "Type de vêtement : ".$_SESSION['type_vetement']."<br/>"; 
                        echo "Taille : ".$_SESSION['taille']."<br/>"; 
                        echo "Couleur : ".$_SESSION['couleur']."<br/>"; 
                        

                        ?>
                    </aside>
                    <aside class="block2">
                        <h4 style="font-weight">Description : </h4> 
                        <?php
                            echo $_SESSION['description_article']."<br/>"; 
                        ?>
                    </div>
                    <?php
                    
                }

                $reponse->closeCursor(); 

                ?>
            
               

            </div>
            <div class="col-md-10 retour_bouton">
                <form method="POST" action="profil_vendeur.php" >
                    <center>
                        <button  type="submit" class="btn btn-secondary" name="submit">Gestion des items</button>
                    </center>
                </form>

            </div>

        </div>
    </section>
    


</body>


<footer>

</footer>
</html>