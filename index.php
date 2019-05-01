<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Mon site bootstrap</title>

	<!-- Debut CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	
	<script type="text/javascript">
	  $(document).ready(//adapte le header en fonction de la taille de l'écran
 	  //function(){ $('.header').height($(window).height())}; 

	   //Vérifie que l'utilisateur ne saisie pas plus de 140 charactères
 		function(){
	 		//message au niveau de la zone avec l'id character left
	 		$('#characterLeft').text('140 charactères restants');

	 		//dans le cas ou on écrit dans la case message on appelle la fonction qui alerte l'utilisateur si oui ou non il a dépassé la limite de caractères
	    	$('#message').keydown( function () {
	        	var max = 140;
	        	//this correspond à la chaine de charactère #message : en javascript var prends en compte tout type de valeurs
	        	var len = $(this).val().length;
	        	if (len >= max) {
	            	$('#characterLeft').text('Vous avez atteint la limite');

	            	//la case contenant le texte de l'utilisateur devient rouge
	            	$('#characterLeft').addClass('red');

	            	// interdiction de procéder à l'action : le bouton soumettre est désactivé avec addClass('disabled')
	            	$('#btnSubmit').addClass('disabled');            
	        	} //fin if
	        	else {
	           		 var ch = max - len;
	            	$('#characterLeft').text(ch + ' characters restants');
	            	$('#btnSubmit').removeClass('disabled');
	            	$('#characterLeft').removeClass('red');            
	        	}//fin else
	        });//fin de la fonction 2
	        
        });//fin de la fonction Char_max et du .ready
        
	</script> 

	<!-- fin Jquery -->
</head>

<body>

	<!-- Debut header -->
	<header class = "container-fluid header">
		
		<div class="container">

			<!-- Logo -->
			<a  href="index.php" class = "logo" > Logo </a>
			<!-- Barre de navigation en haut de l'écran pour les pcs il s'agit là d'un nav -->
			<nav class ="menu">
				<div class="co_deco">

					<?php

						if(isset($_SESSION['id_vendeur']))
						{
							echo  '<form role="form" action="traitement_deco.php" method="post">
								<button  type="submit" name = "deconnexion" class="btn btn-primary pull-right"> Déconnexion </button>
								</form>';

						}else {

							 echo'<a href="vendeur_con.php"> Vendre </a>';

						}

					?>
				</div>

				<a href="#"> Ventes flash </a>
				<a href="#"> Catégories </a>
				<a href="#"> Connexion </a>
				

			</nav>
		</div>

	</header>
	<!-- fin header -->

	<!-- Debut banière -->
	<section class = "container-fluid banner">

		<div class = "ban">

		

		</div>
		
		<div class = "inner-banner"  >

			<h1> ECE Amazon </h1>
			<button class="btn btn-custom">Ne sert pas à grand chose pour le moment...</button>

		</div>
		

	</section>
	<!-- fin banière -->


	<!-- Debut à propos -->
	<!--Container fluid colle tous les éléments automatiquement-->
	<section class = "container-fluid about">

		<!-- Créons trois colonnes qui contiendront des articles (images + textes) décrivant le but du site avec div "row"-->
		<!-- Etape 1 créer le container qui contiendra la ligne-->

		<div class = "container">

			<h2 id="description"> A quoi nous attendre pour cette semaine ?</h2>
			<hr class="separateur">
			<!-- Etape 2 créer la ligne qui contiendra les colonnes-->

			<div class ="row">
				<!-- Col-md-4 et lg 4 signifient que lorsque l'on est en ecran large : les articles seront les un à cotés des autres et auront pour dim 4*4-->
				<!-- Col-xs-12 et sm 12 signifient que lorsque l'on est sur du petit écran : chaque articles prendront la totalité de l'écran (on devra défiler)-->

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12">

					<h2> La semaine piscine c'est de la maitrise de Js que je n'ai pas !</h2>

					<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</p>

				</article>

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12">

					<h2> La semaine piscine c'est de la maîtrise de php et sql que j'ai !</h2>
					
					<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</p>

				</article>

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12">

					<h2> La semaine piscine c'est de la maitrise de CSS et Html que je n'ai qu'à moitié !</h2>
					
					<p>Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.</p>

				</article>

			</div>
			
		</div>

		
	</section>
	<!-- fin à propos -->


	<!-- Debut portfolio -->
	<section class = "container-fluid album">

		<div class ="container">

			<h2 id="album"> Voici une succession d'images fun :</h2>
			<hr class="separateur">

			<div class="row">
			<!-- item album est le nom de la classe-->
				 <article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12 item-album">

				 
				 	<img src="hitman.png" class="img-fluid" height = "200" width="200"> 

				</article>

				 <article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12 item-album">

				 	<img src="mouhali.jpg" class="img-fluid" height = "200" width="200"> 


				</article>

				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12 item-album">


				</article>
			</div>


			<div class="row">


			    <article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12 item-album">


				</article>


     			<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12 item-album">


				</article>


				<article class = "col-md-4 col-lg-4 col-xs-12 col-sm-12 item-album">


				</article>
				
			</div>
		</div>
		

	</section>
	<!-- fin portfolio -->


	<!-- Debut footer / contact -->
	<footer class = "container-fluid footer">

		<!-- Pour le contact on ne va pas se faire chier à en imaginer un : on peut en choper un gratos sur bootsnipp.com--> 

		<div class ="container">

			<div class="row"> 


				<article class="col-lg-8 col-md-8 col-sm-12"> 
					<h6 class="text-uppercase font-weight-bold">Information additionnelle</h6> 
					<p> Le projet se passera bien ! blblblblblabalbalbalbalablabalablabalablabalbalablabalbalbalbalbalabalbalba
					balablabalbalabalbalbabalabalabalbalablablababalb</p> 
				</article> 


				<article class="col-md-4 col-sm-12">
				    <div class="form-area"> 
				    	<!-- role = --> 
				        <form role="form">
				        <!-- tout est à la ligne et rien ne doit déborder les bords-->	
				        <br style="clear:both">

				                    <h3 style="margin-bottom: 25px; text-align: center;">Contactez nous !</h3>
				                    <hr class="separateur">

				    				<div class="form-group">
				    					<!-- form-control = commande bootsrapp résponsable de l'apparence de la case   ; placeholder = texte déjà présent dans la case au début (au lieu de mettre value) ;  required = -->
										<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
									</div>

				                    <div class="form-group">
				                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
				                        <span class="help-block"><p id="characterLeft" class="help-block ">Il vous reste 140 charactères</p></span>                    
				                    </div>
				            
				        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Soumettre</button>
				        </form>
		       		</div>
				</article>

			  </div>

			 <div class="footer-copyright text-center">&copy; 2019 Copyright | Droit d'auteur: Emy
			</div> 

		</div>	
	</footer>
	<!-- fin footer -->


</body>


</html>