<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>page_de_connexion_vendeur</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style_con_vend.css">

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
				<a href="vendeur_con.php"> Vendre </a>
				<a href="#"> Vente flash </a>
				<a href="#"> Catégories </a>
				<a href="#"> Connexion </a>
			</nav>

		</div>

	</header>
	<!-- fin header -->

    <section class = "container-fluid fomulaire">

		 <div class="form-area"> 
				    	<!-- role = --> 
				        <form role="form" action="traitement_co_vend.php" method="post">
				        <!-- tout est à la ligne et rien ne doit déborder les bords-->	
				        	<br style="clear:both">

			                <h3 style="margin-bottom: 10px; text-align: center;">Connexion du vendeur</h3>
			                <!-- Trait rouge-->
			                <hr class="separateur">

							<div class="form-group">
								<input type="text" class="form-control"  name="pseudo_vendeur" placeholder="Pseudo du vendeur" required>
							</div>

                            <div class="form-group">
								<input type="text" class="form-control"  name="email_vendeur" placeholder="Email du vendeur" required>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="mdp_vendeur" placeholder="Mot de passe" required>
							</div>
					
		        			<center><button type="submit"  name="submit" class="btn btn-primary pull-right">Valide</button></center>
			        </form>
	       		</div>

	</section>
	
	
		

	
  
</body>

</html>
