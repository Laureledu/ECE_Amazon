<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Panier</title>

	<!-- Debut CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="styles_panier.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="styles_footer.css">
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
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

			<h2 id="titre_page"> Panier </h2>
			<hr class="separateur">
			<!-- Etape 2 créer la ligne qui contiendra les colonnes-->

			<div class="row">

    			<div class="col-8" style="background-color:white;">
					<div class="table-responsive">

						<form action="traitement_panier.php" method="POST">

	    				<table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>Votre panier</th>
						        <th>Description</th>
						        <th>Quantité</th>
						        <th>Prix unité</th>
						      </tr>
						    </thead>
						    <tbody id="myTable">

						    	<?php 

						            $database = "ece_amazon";
						            $conn = mysqli_connect('localhost', 'root', '', $database );
						          	$sql ="SELECT * FROM panier INNER JOIN item WHERE panier.Id_item = item.Id_item ";
						          	$result = mysqli_query($conn, $sql);
						          	$total = 0;
						        
						            while($colonne = mysqli_fetch_assoc($result)){

						            	$total += $colonne['Prix_unite']* $colonne['Quantite'];


						            echo '

						            <input type="hidden" name="id_panier" value="'.$colonne['Id_panier'].'">

								      <tr>

								       <td> 

							                <img src="photo_item/'.$colonne['Photo_article'].'"class="img-responsive" alt="a" />

										</td>
								        <td>
								        	<ul>

								        		<li><strong>'.$colonne['Nom_item'].'</strong></li>
								        		<li>'.$colonne['Categorie'].'</li>
								        		<li>'.$colonne['Genre'].'</li>

								        	</ul>

								        </td>

								        <td> <input type="number"  id="quantite" name="quantite" value = '.$colonne['Quantite'].' ></td>

								        <td>'.$colonne['Prix_unite'].' € </td>

								        <td><button type="submit" name = "retirer_panier" class="btn btn-outline-primary">Retirer du panier</button></td>

								      </tr>';}

								      $_SESSION['total'] = $total;
						        ?>

						    </tbody>
						</table>
					 </form>
					</div>
				</div>



   				<div class="col-4">


   						<form action="procedure_paiement.php" method="POST">

   							<p class="h4 mb-4">Récapitulatif achat </p>

   							<label class="form-quantite" for="Sous-total">
								 Sous-total :
							</label>
							<input  class="mb-4" type="text" id="Sous-total" name="Sous-total" value = <?php echo ' "'.$_SESSION['total'].'"';?> readonly>
					
					        <button type="submit" name = "paiement" class="btn btn-primary"> Proceder au paiement</button>
					   </form> 
  					
				</div>
			</div>
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