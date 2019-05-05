<?php


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