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

	<section class = "container-fluid fomulaire">

		 <div class="row">
				<!-- Colonne-centree est contenu dans le CSS et permet de mettre tout le contenu au centre de la ligne-->
				<div class = "col-md-5 colonne-centree">
				<!-- Default form login -->
					<form class="text-center border border-light p-5" action="traitement_addVendeur.php" method="POST">

						<p class="h4 mb-4">Ajouter un vendeur</p>

						 <div class="form-group">
						    <label>Pseudo Vendeur</label>
						    <input type="text" class="form-control"  name="pseudo" placeholder="Pvendeur" required>
						  </div>

						  <div class="form-group">
						    <label>Adresse mail</label>
						    <input type="text" class="form-control"  name="email" placeholder="Ex : paulo.tran@XXXXXX.com" required>
						  </div>

						  <div class="form-group">
						    <label>Mot de passe</label>
						    <input type="password" class="form-control"  name="mdp" placeholder="Mot de passe" required>
						  </div>
	 
						  
						  <button type="submit" name ="inscription" class="btn btn-primary">Ajouter</button>
					</form>
				</div>
			</div>			     

	</section>

	<!-- Debut footer / contact -->
	<?php

		include_once 'footer.php'

	?>
	<!-- fin footer -->


</body>


</html>