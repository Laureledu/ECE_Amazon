
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>connexion</title>

	<!-- Debut CSS -->
	
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles_formulaire.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="styles_index.css">
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	 
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

	<!-- Formulaire de connexion avec bootsrap -->
	<section class = "container-fluid ">

		<!-- On crée une ligne qui contiendra une seule colonne (le formulaire)-->
			<div class="row">
				<!-- Colonne-centree est contenu dans le CSS et permet de mettre tout le contenu au centre de la ligne-->
				<div class = "col-md-4 colonne-centree">
					<!-- Default form login -->
					<form class="text-center border border-light p-5" action="traitement_co_admin.php" method="POST">

					    <p class="h4 mb-4">Connexion Admin</p>

					    <!-- Email -->
					    <input type="text"  name="admin_co" class="form-control mb-4" placeholder="E-mail/Nom d'utilisateur">

					    <!-- Password -->
					    <input type="password"  name="Mdp" class="form-control mb-4" placeholder="Mot de passe">



					    <!-- Sign in button -->
					    <button class="btn btn-info btn-block my-4" type="submit" name="submit" >Connexion</button>

					 </form>
				</div>
			</div>			        

	</section>

					<!-- Debut footer / contact -->
					<?php

						include_once 'footer.php'

					?>
</body>
</html>