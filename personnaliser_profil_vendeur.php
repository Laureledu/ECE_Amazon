<!DOCTYPE html>
<html>
<?php
    session_start(); // on récupère la session qui existe déjà 
?>
<head>
    <meta charset="utf-8">  
    <title>Personnalisation_du_profil_vendeur</title>

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

    <section class = "container-fluid">
        <div class = "row">
        <br>
            <div class = "col-md-10 centre_profil">
                <center><h1>Personnaliser son profil</h1></center><br><br>
                <p>Tu peux, dorénavant, personnaliser le fond d'écran de ton profil ECE_Amazon avec une image pré-enregisté sur ton ordinateur.</p><br><br><br>
                <form method="POST" action="choisir_son_fond_prefere.php" enctype="multipart/form-data">
                    <center>
                        <input type="file" name="avatar">
                        <button class="btn btn-info" type="submit"  name="submit">Modifier son image de fond</button>
                    </center>
                </form>
            </div>

        </div>
    </section>
    
    

    





</body>

<footer>
</footer>

</html>