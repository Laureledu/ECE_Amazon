<?php
    session_start(); // on récupère la session qui existe déjà 
    
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>page_de_connexion_vendeur</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style_profil_vendeur.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- debutJquery -->
	<script type="text/javascript">
	  $(document).ready(//adapte le header en fonction de la taille de l'écran
 	  function(){ $('.coucou').height($(window).height())}; 
        
	</script> 
</head>

<body>
<!-- gère le profil et la déconnexion-->
<!-- gère la page de profil -->
<!-- il doit pouvoir être capable d'ajouter et de supprimer un ou plusieur items dans la base de donnée "item"-->


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
	<!-- fin header -->

    <!-- affichage du profil correspondant au pseudo, avec : une photo, le pseudo, son e-mail -->
    <!-- liste des différentes info -->

    <section class = "container-fluid coucou">
        
        <div class = "row">

            <div class="image_fond">

                <?php
                    // on a la session ouverte et on récupère les infos
                   
                    echo "<img style='opacity:0.75;' src='fond_profil_vendeur/".$_SESSION['photo_fond']."' alt='image_fond'/>"; 
                    
                    
                ?> 

            </div>
            <div class="photo_profil">
                <h1 style="color:#FFFFFF"><?php echo $_SESSION['pseudo_du_vendeur'];?></h1>
                <?php
                // on a la session ouverte et on récupère les infos
                    echo "<img  class='rounded-circle' width='304' height='236' src='".$_SESSION['photo_profil_vendeur']."' alt='image'>"; 
                    echo '<br>'; echo '<br>'; 
                ?>
                <!-- choisir son fond préféré -->
                
                <!--<?php

                    echo '<form role="form" action="personnaliser_profil_vendeur.php" method="post">
                        <button  type="submit" name = "personnalise" class="btn btn-info"> Personnaliser son profil </button>
                        </form>';
				?>--> 

                <!--<form method="POST" action="choisir_son_fond_prefere.php" enctype="multipart/form-data">
                    <center><input type="file" name="avatar">
                    <button type="submit"  name="submit">Personnaliser son profil</button></center>
                </form>-->
            </div>

        </div>
        <br>
        <div class = "row">
        <br>
            <div class = "col-md-10 centre_profil">
                <center><h1>Personnaliser son profil</h1></center><br><br>
                <p>Tu peux, dorénavant, personnaliser le fond d'écran de ton profil ECE_Amazon avec une image pré-enregisté sur ton ordinateur.</p><br><br><br>
                <form method="POST" action="choisir_son_fond_prefere.php" enctype="multipart/form-data">
                    <center>
                        <input type="file" name="avatar">
                        <button  type="submit" class="btn btn-info" name="submit">Modifier son image de fond</button>
                    </center>
                </form>
            </div>

        </div>
    
        <div class="row" >
            <div class="col-md-10 centre_profil">
                <?php
                echo $_SESSION['pseudo_du_vendeur']; echo '<br>'; echo '<br>';
                echo $_SESSION['email_du_vendeur']; 
                ?>           
            </div>
            
        </div> 
        <br>

        <!-- gestion des articles associés aux vendeurs --> 
        <div class = "row">
            <div class = "class="col-md-10 gestion_item>
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
                $reponse = $database->query('SELECT * FROM item INNER JOIN vendeur ON item.Id_vendeur=vendeur.Id_vendeur'); // requète
                echo 'salut'; 
                while($row = $reponse->fetch())
                {
                    echo "Identifiant : ".$_SESSION['id_item'] = $row['Id_item']."";<br> ;  
                    
                            

                }



                ?>
            </div>
        </div>
       
    <!-- fin du profil -->

    <!-- affichage du boutton "MODIFIER" où il pourra choisir de visionner ses items (relation avec l'id du vendeur dans la table item), en ajouter ou en supprimer -->
    </section>
    

</body>

<footer class = "container-fluid footer">

    <!-- Pour le contact on ne va pas se faire chier à en imaginer un : on peut en choper un gratos sur bootsnipp.com--> 

    <div class ="container">

        <div class="row"> 
            <article class="col-lg-8 col-md-8 col-sm-16"> 
                <br>
                <h10 class="text-uppercase font-weight-bold">Information additionnelle</h10> 
                <p> Le projet se passera bien ! blblblblblabalbalbalbalablabalablabalablabalbalablabalbalbalbalbalabalbalba
                balablabalbalabalbalbabalabalabalbalablablababalb</p> 
            </article> 
        </div>
    </div>
    
</footer>


</html>

<!--$_SESSION['id_item'] = $row['Id_item'];
$_SESSION['nom_item'] = $row['Nom_item'];
$_SESSION['prix_unite'] = $row['Prix_unite'];
$_SESSION['quantite_item'] = $row['Quantite_item'];
$_SESSION['quantite_vendu'] = $row['Quantite_vendu'];
$_SESSION['cantite'] = $row['Quantite']; 
$_SESSION['auteur'] = $row['Auteur']; 
$_SESSION['genre_litteraire'] = $row['Genre_litteraire']; 
$_SESSION['collection'] = $row['Collection']; 
$_SESSION['artiste'] = $row['Artiste']; 
$_SESSION['genre_musical'] = $row['Genre_musical']; 
$_SESSION['type_vetement'] = $row['Type_vetement']; 
$_SESSION['taille'] = $row['Taille']; 
$_SESSION['couleur'] = $row['Couleur']; 
$_SESSION['genre_sexe'] = $row['Genre_sexe']; 
$_SESSION['equipement'] = $row['Equipement']; 
$_SESSION['genre_loisir_sport'] = $row['Genre_loisir_sport']; 
$_SESSION['photo_article'] = $row['Photo_article']; --> 