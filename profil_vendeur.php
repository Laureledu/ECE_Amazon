
<!DOCTYPE html>
<html>
<?php
    session_start(); // on récupère la session qui existe déjà 
?>
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
 	  function(){ $('.header').height($(window).height())}; 
        
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

    <section class = "container-fluid">
        
        <div class="block">
            <center>
                <h1>PROFIL</h1>
                <?php
                // on a la session ouverte et on récupère les infos
                    echo "<img  class='rounded-circle' width='304' height='236' src='".$_SESSION['photo_profil_vendeur']."' alt='image'>"; 
                    echo '<br>'; echo '<br>'; 
                ?>
                <!-- choisir son fond préféré -->
                <form method="POST" action="choisir_son_fond_prefere.php" enctype="multipart/form-data">
                    <center><input type="file" name="avatar">
                    <button type="submit"  name="submit">Personnaliser son profil</button></center>
                </form>
            </center>
        </div>
        <br>
        <div class="row" >
            <div class="col-md-4 centre_profil">
                <?php
                echo $_SESSION['pseudo_du_vendeur']; echo '<br>'; echo '<br>';
                echo $_SESSION['email_du_vendeur']; 
                ?>           
            </div>
            
        </div> 
       
    </section>

    
   

    <!-- fin du profil -->

    <!-- affichage du boutton "MODIFIER" où il pourra choisir de visionner ses items (relation avec l'id du vendeur dans la table item), en ajouter ou en supprimer -->




</body>

<footer>
</footer>

</html>