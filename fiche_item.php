<?php 
	
	session_start();


 ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Livres</title>

	<!-- Debut CSS -->
	
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="categories.css">
	<link rel="stylesheet" type="text/css" href="styles_footer.css">
	<link rel="stylesheet" type="text/css" href="styles_paiement.css">
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


	
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

	<div class ="container-fluid">

		<div class="container mb-5 mt-5">

			<div class="row mb-4">

				<div class="col-2.5 mr-3">

					<div class="text-center">
					  <?php 

				            $database = "ece_amazon";
				            $conn = mysqli_connect('localhost', 'root', '', $database );
				            $id = $_GET['id'];
				          	$sql ="SELECT * FROM item Where Id_item = '$id'";
				          	$result = mysqli_query($conn, $sql);
				          	$row = mysqli_fetch_assoc($result);

				          	echo '<img src="photo_item/'.$row['Photo_article'].'" class="img-thumbnail" alt="laure" style =" width:200px; height:250px">';
  						

  						?>

					</div>

				</div>


				<div class="col-6 mr-5">

					<div class='liste_client'>
				

					    	<?php 

					            $database = "ece_amazon";
					            $conn = mysqli_connect('localhost', 'root', '', $database );
					            $id = $_GET['id'];
					          	$sql ="SELECT * FROM item Where Id_item = '$id'";
					          	$result = mysqli_query($conn, $sql);
					          	$row = mysqli_fetch_assoc($result);
					       


					            echo '

					            	<h5><strong> '. $row['Nom_item'] .'</strong></h5></br>
					            	 Categorie : '. $row['Categorie'] . ' </br>
					                 Auteur : '. $row['Auteur'] . ' </br>
					            	 Genre : '. $row['Genre'] . ' </br>
					            	 Prix unité : '. $row['Prix_unite'] . '€</br>
					            ';

							      
					        ?>

						</div>
				</div>


				<div class="col-3">


						<?php 

				            $database = "ece_amazon";
				            $conn = mysqli_connect('localhost', 'root', '', $database );
				            $id = $_GET['id'];
				          	$sql ="SELECT * FROM item Where Id_item = '$id'";
				          	$result = mysqli_query($conn, $sql);
				          	$row = mysqli_fetch_assoc($result);
						       

							   echo '

						 			<form class ="border border-dark p-5"action="ajout_panier.php" method="POST">

						         	 <!-- On récupère id_item de la bdd en la cachant à lutilisateur au début de la création de la boite-->
						         		<input type="hidden" name="id_item" value="'.$row['Id_item'].'">	


					                         <input type="number" id="quantite" name="quantite">
										        <label class="form-quantite" for="quantite">
										          Quantité
										        </label>

					                        <button class="btn btn-outline btn-warning btn-sm btn-block btn-primary " name="ajouter_panier" type="submit">
					                        <i class="fa fa-shopping-cart fa-fw"></i>Ajouter au panier</button>
					                    </form>';
					       ?>   
				</div>

			</div>	


			<div class="row">


				<div class="col-8 col-sm-12 mx-auto">	

						<?php 

				            $database = "ece_amazon";
				            $conn = mysqli_connect('localhost', 'root', '', $database );
				            $id = $_GET['id'];
				          	$sql ="SELECT * FROM item Where Id_item = '$id'";
				          	$result = mysqli_query($conn, $sql);
				          	$row = mysqli_fetch_assoc($result);
				       


				            echo '

				            	<h5><strong> Description :</strong></h5></br>
				            	<p> '. $row['Description_article'] . ' </p>

				            ';
				        ?>    
				</div>	
			</div>
		 </div>		
	</div>
	

	<!-- Debut footer / contact -->
	<?php

		include_once 'footer.php';
		

	?>
</body>
</html>