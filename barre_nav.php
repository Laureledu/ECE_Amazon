
	<!-- Debut header -->
	<header class = "container-fluid header">
		
		<div class="container">

			<!-- Logo -->	
			<a href="index.php" class = "logo"> Logo </a>
			<!-- Barre de navigation en haut de l'écran pour les pcs il s'agit là d'un nav -->
			<nav class ="menu">
				<ul class ="nav navbar-nav">
	

					<?php

						if(isset($_SESSION['id']))
						{
							echo  '<li><form role="form" action="traitement_deco_acheteur.php" method="post" >
								<button  type="submit" name = "deconnexion" class="deco btn-warning btn-sm"> Déconnexion </button>
								</form></li>
								<li><a href="#"> Panier </a></li>';	

						}else {

							 echo'<li><a href="#"> Panier </a></li>
							 <li><a href="connexion_acheteurs.php"> Votre compte </a></li>
							 	  <li><a href="#"> Admin </a></	li>';

						}

					?>
				
					<li><a href="#"> Vendre </a></li>


					<li class ="nav-item dropdown">	
						    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCo" role="button" data-toggle="dropdown">Categories</a>
							 <ul class="dropdown-menu">
								<li><a class="dropdown-item disabled" href="#">Livres </a></li>
								<li><a class="dropdown-item disabled" href="#">Musiques</a></li>
								<li><a class="dropdown-item disabled" href="#"></i>Vetements</a></li>
								<li><a class="dropdown-item disabled" href="#">Sports et Loisirs</a></li>
							</ul>
						
					</li>

			</ul>

			</nav>
		</div>

	</header>
	<!-- fin header -->
