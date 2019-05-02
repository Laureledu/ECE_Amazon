<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Mon site bootstrap</title>

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

	<!-- Debut banière -->
	<section class = "container-fluid banner">

		<div class="row">
		
			<article class = "ban">

				<img src="biblio.jpg" alt = "banniere"/>
		

			</article>

			
			<article class = "inner-banner">

				<?php

							if(isset($_SESSION['id_acheteur']))
							{
								echo  '<h1>'. $_SESSION['nom_ach']." a pour prénom ".$_SESSION['prenom_ach'].'</h1>';	

							}else {

								 echo'<h1> Bienvenue dans ECE-Amazon</h1>
								 <form action ="inscription_acheteurs.php">
								 	<button type="submit" class="btn btn-custom mt-0">Inscrivez vous dès maintenant </button>
								 </form>';

							}


				?>
				 
			</article>
		</div>
	</section>
	<!-- fin banière -->


	<!-- Debut à propos -->
	<!--Container fluid colle tous les éléments automatiquement-->
	<section class = "container-fluid about">

		<!-- Créons trois colonnes qui contiendront des articles (images + textes) décrivant le but du site avec div "row"-->
		<!-- Etape 1 créer le container qui contiendra la ligne-->

		<div class = "container">

			<h2 id="description"> Qui sommes nous ?</h2>
			<hr class="separateur">
			<!-- Etape 2 créer la ligne qui contiendra les colonnes-->

			<div class ="row">
				<!-- Col-md-4 et lg 4 signifient que lorsque l'on est en ecran large : les articles seront les un à cotés des autres et auront pour dim 4*4-->
				<!-- Col-xs-12 et sm 12 signifient que lorsque l'on est sur du petit écran : chaque articles prendront la totalité de l'écran (on devra défiler)-->

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12">

					<h2> Emy Mahouni </h2>

					<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</p>

				</article>

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12">

					<h2> Laure Le Du </h2>
					
					<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</p>

				</article>

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12">

					<h2> Baptiste Cauvin </h2>
					
					<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</p>

				</article>

			</div>
			
		</div>

		
	</section>
	<!-- fin à propos -->


	<!-- Debut footer / contact -->
	<?php

		include_once 'footer.php'

	?>

</body>
</html>