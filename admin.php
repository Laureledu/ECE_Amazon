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

	<link rel="stylesheet" type="text/css" href="styles_footer.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="styles.admin.css">
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script type="text/javascript">
	  $(document).ready(
 	  function(){ 
 	  	$('.banner').height($(window).height())


 	  	$("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

  });
 	  
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

			<h2 id="description"> Bienvenue sur la page administrateur</h2>
			<hr class="separateur">
			<!-- Etape 2 créer la ligne qui contiendra les colonnes-->

			<div class="row">

    			<div class="col" style="background-color:white;">
    				<p>Rechercher un vendeur :</p>  
  					<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
					<div class="table-wrapper-scroll-y my-custom-scrollbar">
	    				<table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>Pseudo</th>
						        <th>Email</th>
						        <th>Supprimer</th>
						      </tr>
						    </thead>
						    <tbody id="myTable">

						    	<?php 

						            $database = "ece_amazon";
						            $conn = mysqli_connect('localhost', 'root', '', $database );
						          	$sql ="SELECT * FROM vendeur";
						          	$result = mysqli_query($conn, $sql);
						        
						            while($colonne = mysqli_fetch_assoc($result)){


						            	$_SESSION['num_colonne'] = $colonne;

							            echo '



									    	<tr>
									        	<td>'.$colonne['Pseudo_vend'].'</td>
									        	<td>'.$colonne['Email_vend'].'</td>

									        	<td> 
									        		<form action="Supp_Vendeur.php" method="POST">

									        			<input type="hidden" name="id_vend" value="'.$colonne['Id_vendeur'].'"> 
									        			<button type="submit" name="Supprimer" class="btn btn-outline-danger"> Supprimer
									        			</button>
									        		</form>
									        	</td>
									        	
									        </tr>';
								  	}

						        ?>

						    </tbody>
						</table>

					</div></br>

	  	   			<a href="addVendeur.php" class="btn btn-info btn-block" role="button">Ajouter Vendeur</a>
				</div>
   				<div class="col">

					    <a href="ajouter_item_admin.php" class="btn btn-primary btn-block" role="button">Ajouter Item</a>
					    <a href="gestion_items.php" class="btn btn-primary btn-block" role="button">Supprimer Item</a>
  					
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