<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Paiement</title>

	<!-- Debut CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="styles_paiement.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="styles_footer.css">
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
	<div class = "container-fluid ">

		<!-- Créons trois colonnes qui contiendront des articles (images + textes) décrivant le but du site avec div "row"-->
		<!-- Etape 1 créer le container qui contiendra la ligne-->

		<div class = "container principal">

			<h2 id="titre_page"> Paiement </h2>
			<hr class="separateur">
			<!-- Etape 2 créer la ligne qui contiendra les colonnes-->

			<div class="row">

    			<div class="col-7" style="background-color:white;">

    				<p class="h5" style="text-align: center"><strong>Informations du clients</strong></p>
    				<hr class="separateur">	


						

							<div class='liste_client'>
						    <ul>

						    	<?php 

						            $database = "ece_amazon";
						            $conn = mysqli_connect('localhost', 'root', '', $database );
						            $id = $_SESSION['id_acheteur'];
						          	$sql ="SELECT * FROM acheteur Where id_acheteur = '$id'";
						          	$result = mysqli_query($conn, $sql);
						          	$row = mysqli_fetch_assoc($result);
						       


						            echo '

						            	<li> <strong> Nom  </strong>: '. $row['Nom_ach'] . ' </li>
						            	<li> <strong> Prenom </strong>: '. $row['Prenom_ach'] . ' </li>
						            	<li> <strong> Adresse 1 </strong>: '. $row['Adresse_1'] . ' </li>
						            	<li> <strong> Adresse 2 </strong>: '. $row['Adresse_2'] . ' </li>
						            	<li> <strong> Ville </strong>: '. $row['Ville'] . ' </li>
						            	<li> <strong> Code postal </strong>: '. $row['CodePostal'] . ' </li>
						            	<li> <strong> Pays </strong>: '. $row['Pays'] . ' </li>
						            	<li> <strong> Numero de télephone </strong>: '. $row['Num_Tel'] . ' </li>

						            ';

								      
						        ?>

						    </ul>
						</div>
					</div>



   				<div class="col-5">

   					<div class = "colonne-centree">


   						<form action="traitement_paiement.php" method="POST">

   						<p class="h5" style="text-align: center"><strong>Informations paiements</strong></p>
   						<hr class="separateur">



						  <div class="form-row">
							  <div class="form-group col-md-6 pl-1">
							    <label >Type de carte</label>
							    <select name = "type_carte" class="form-control" required> 
							        <option value="Visa">Visa</option>
							        <option value="MasterCard">MasterCard</option>
							        <option value="American Express">American Express</option>
							        <option value="PayPal">PayPal</option>
							      </select>
							    </div>
								
								<div class="form-group col-md-6 ">
							       <label >Nom propriétaire</label>
							       <input type="text" class="form-control" name="nom_proprio" placeholder="Nom sur la carte" required>
							    </div>
						  
						  </div>

						  <div class="form-group">
						  	<label >Numero de carte</label>
						     <input type="text" class="form-control" name ="num_carte" pattern="[0-9]{16}" placeholder="Ex : XXXXXXXXXXXXXXXX" required>
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
							      <input type="password" class="form-control" name="cvv" placeholder="cvv" required>
							    </div>
						 </div>

						  <button type="submit" name ="payer" class="btn btn-primary btn-block">Payer</button>
					</form>
				  </div>
  					
				</div>
			</div>
		</div>	
	</div>
	


	<!-- Debut footer / contact -->
	<?php

		include_once 'footer.php'

	?>
	<!-- fin footer -->


</body>


</html>