<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>création de compte</title>

	<!-- Debut CSS -->
	
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles_co_deco_acheteurs.css">
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

	<!-- Debut header -->
	<?php

		include_once 'barre2.php';

	?>

	<section class = "container-fluid fomulaire">

		 <div class="row">
				<!-- Colonne-centree est contenu dans le CSS et permet de mettre tout le contenu au centre de la ligne-->
				<div class = "col-md-5 colonne-centree">
				<!-- Default form login -->
					<form class="text-center border border-light p-5" action="traitement_inscription_acheteurs.php" method="POST">

						<p class="h4 mb-4">Inscription</p>

						<!-- Nom / prenom-->
					    <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Nom</label>
						      <input type="text" class="form-control" name ="nom" placeholder="Nom" required>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Prenom</label>
						      <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
						    </div>
						 </div>

						  	<!-- Email / Tel-->
						  <div class="form-row">
						    <div class="form-group col-md-7">
						      <label >Adresse mail</label>
						      <input type="text" class="form-control" name ="email" placeholder="Ex : paulo.tran@XXXXXX.com" required >
						    </div>
						    <div class="form-group col-md-5">
						      <label >Tel.</label>
						      <input type="number" class="form-control" name="tel" pattern="[0-9]{10}" placeholder="Format : 06XXXXXXXX" required>
						    </div>
						 </div>



						  	<!-- Pseudo/ Mdp -->

						  <div class="form-row">
							    <div class="form-group col-md-5 mr-5">
							      <label>Nom d'utilisateur</label>
							      <input type="text" class="form-control"   name ="pseudo" placeholder="Nom d'utilisateur" required>
							    </div>
							    <div class="form-group col-md-5 ">
							      <label >Mot de passe</label>
							      <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
							    </div>
						 </div>


						  	<!-- Adresse 1-->
						  <div class="form-group">
						    <label>Adresse 1</label>
						    <input type="text" class="form-control"  name="adresse_1" placeholder="2 rue de la victoire" required>
						  </div>

						  	<!-- Adresse 2-->
						  <div class="form-group">
						    <label >Adresse 2</label>
						    <input type="text" class="form-control"  name="adresse_2" placeholder="Apartement, studio ou etage" >
						  </div>

						  	<!-- Ville/Pays/Code postal-->
						  <div class="form-row">
						    <div class="form-group col-md-5">
						      <label >Ville</label>
						      <input type="text" class="form-control"  name="ville" required>
						    </div>
						    <div class="form-group col-md-4">
						      <label>Pays</label>
						      <input type="text" class="form-control" name="pays" required>
						    </div>
						    <div class="form-group col-md-3">
						      <label>Code Postal</label>
						      <input type="number" class="form-control"  name="code_postal" required>
						    </div>
						  </div>

						  <!-- On passe à la seconde étape on marquant une séparation puis en passant aux infos bancaires-->

						  <hr class="separator">

						  <p class="h5 mb-4 mt-4">Informations paiements</p>

						  <div class="form-group col-md-5 pl-1">
						    <label >Type de carte</label>
						    <select name = "type_carte" class="form-control" required> 
						        <option selected>Choix...</option>
						        <option value="Visa">Visa</option>
						        <option value="MasterCard">MasterCard</option>
						        <option value="American Express">American Express</option>
						        <option value="PayPal">PayPal</option>
						      </select>
						  </div>

						  <div class="form-group">
						  	<label >Numero de carte</label>
						     <input type="number" class="form-control" name ="num_carte" placeholder="Ex : XXXXXXXXXXXXXXXX" required>
						  </div>


						  <div class="form-row">
							    <div class="form-group col-md-4">
							      <label >Date d'expiration</label>
							      <input type="Date" class="form-control"  name ="date_exp_carte" placeholder="Date" required>
							    </div>
							    <div class="form-group col-md-4 ">
							      <label >Code de sécurité</label>
							      <input type="password" class="form-control" name="code_carte" placeholder="Code de sécurité" required>
							    </div>

							    <div class="form-group col-md-4 ">
							      <label >Cvv</label>
							      <input type="password" class="form-control" name="cvv" placeholder="vv" required>
							    </div>
						 </div>


						  <div class="form-group mt-3 mb-3">
						    <div class="form-check">
						      <input class="form-check-input" type="checkbox" id="gridCheck" required>
						      <label class="form-check-label" for="gridCheck">
						        Accepter les conditions d'utilisations
						      </label>
						    </div>
						  </div>
						  <button type="submit" name ="inscription" class="btn btn-primary">Inscription</button>
					</form>
				</div>
			</div>			     

	</section>

	<!-- Debut footer / contact -->
	<?php

		include_once 'footer.php'

	?>
</body>
</html>.