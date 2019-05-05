<?php

    session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Connexion du vendeur</title>

	<!-- Debut CSS -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<!--<link rel="stylesheet" type="text/css" href="styles_index.css">-->
    <link rel="stylesheet" type="text/css" href="style_profil_vendeur.css">
    <link rel="stylesheet" type="text/css" href="style_profil_footer.css">

    
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	
	<script type="text/javascript">
	  $(document).ready(//adapte le header en fonction de la taille de l'écran
 	  function(){ $('.header').height($(window).height())}; 
        
	</script> 

	 <!-- fin Jquery -->
</head>

<body>
    <?php

        include_once 'barre2.php'
        
    ?>

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
                    echo "<img  class='rounded-circle' width='304' height='236' src='photo_de_profil/".$_SESSION['photo_profil_vendeur']."' alt='image_profil'>"; 
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
                <center><h1>Personnaliser son profil</h1><br><br>
                <p>Tu peux, dorénavant, personnaliser la photo de profil ainsi que le fond d'écran de ton profil ECE_Amazon avec une image pré-enregisté sur ton ordinateur.</p></center><br><br><br>
                <form method="POST" action="choisir_son_fond_prefere.php" enctype="multipart/form-data">
                    <center>
                        <input type="file" name="avatar_profil">
                        <button  type="submit" class="btn btn-info" name="submit_profil">Modifier sa photo de profil</button>
                    </center>

                    <br/><br/><br/>
                    <center>
                        <input type="file" name="avatar">
                        <button  type="submit" class="btn btn-info" name="submit">Modifier son image de fond</button>
                    </center>
                </form>

            </div>

        </div>
    
        <div class="row" >
            <div class="col-md-10 centre_profil">
                <center><h1>Mon Profil</h1><br><br>
                <?php
                echo "Mon pseudo : ".$_SESSION['pseudo_du_vendeur']."<br/><br/>";
                echo "Email : ".$_SESSION['email_du_vendeur']; 
                ?>           
            </div></center>
            
        </div> 
        

        <!-- gestion des articles associés aux vendeurs --> 
        <div class = "row">
        
            <div class = "col-md-10 bouton_gestion_item">
                <form method="POST" action="gestion_items.php">
                    
                        <button  type="submit" class="btn btn-info" name="submit">Gestion des items</button>
                    
                </form>

            </div>
        </div>  
        
        
       
    <!-- fin du profil -->

    <!-- affichage du boutton "MODIFIER" où il pourra choisir de visionner ses items (relation avec l'id du vendeur dans la table item), en ajouter ou en supprimer -->
    <div class = "row">
        
            <div class = "col-md-10 bouton_ajout_item">
                <form method="POST" action="ajouter_item.php">
                    
                        <button  type="submit" class="btn btn-info" name="submit">Ajouter un item</button>
                    
                </form>

            </div>
        </div>  
    </section>
    





</body>

<footer>
</footer>