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

	<!-- Debut à propos -->
	<!--Container fluid colle tous les éléments automatiquement-->
	<div class = "container-fluid">

		<!-- Créons trois colonnes qui contiendront des articles (images + textes) décrivant le but du site avec div "row"-->
		<!-- Etape 1 créer le container qui contiendra la ligne-->

		<div class = "container">

			<h2 id="description"> Ajouter un vendeur </h2>
			<hr class="separateur">
			<!-- Etape 2 créer la ligne qui contiendra les colonnes-->
			<form action="/action_page.php">
				<div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label for="name">Nom:</label>
			      <input type="text" class="form-control" id="nom" placeholder="Enter name" name="nom">
			    </div>
			    <div class="form-group">
			      <label for="Prenom">Prenom:</label>
			      <input type="text" class="form-control" id="prenom" placeholder="Enter name" name="prenom">
			    </div>
			    <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>	
	</div>
	<!-- fin à propos -->

	<!-- Debut footer / contact -->
	<?php

		include_once 'footer.php'

	?>
	<!-- fin footer -->


</body>


</html>