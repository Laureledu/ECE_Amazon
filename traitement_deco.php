<?php

	
$database = "ece_amazon";
	//connectez-vous dans votre BDD
	//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
	$conn = mysqli_connect('localhost', 'root', '' );
	$db_found = mysqli_select_db($conn, $database);



		if (isset($_POST['deconnexion']))
		{
			//on récupère la session ouverte 
			session_start();
			//
			session_unset();
			//on détruit la session preuve que l'utilisateur c'est déco. Les superglobales $_SESSION sont vides après session_destroy()
			session_destroy();
			header("Location: index.php");
			exit();

		}

?>