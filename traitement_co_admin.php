<?php


$database = "ece_amazon";
	//connectez-vous dans votre BDD
	//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
	$conn = mysqli_connect('localhost', 'root', '', $database );


		if (isset($_POST['submit']))
		{
			//la commande est une manière propre de choper des info d'un formulaire pour éviter les pertes de charactères
			$admin_co =  $_POST['admin_co'];
			$MdP =$_POST['Mdp'];

			if(empty($admin_co) || empty($MdP)){

				header("Location: connexion_admin.php?login=empty");
	 			exit();

			}else{
		

					$sql ="SELECT * FROM admin WHERE Pseudo = '$admin_co' OR Email = '$admin_co'";
					$result = mysqli_query($conn, $sql);
					$verification = mysqli_num_rows($result);

					//Attention
					if($verification < 1 ){

						echo $verification;

						header("Location: connexion_admin.php?login=existe_pas");
		 				exit();

					}
					elseif($row = mysqli_fetch_assoc($result)){
						

							if ($MdP != $row['Mdp_admin']){

								header("Location: index.php?Mdp=error_try again");
								exit();

							}
							elseif($MdP == $row['Mdp_admin']){

								//on crée une session : pk faire ça ? C'est hyper improtant car une session permet de conserver des variables ($_SESSIONS['blabla']) sur TOUTES les pages du sites, on pourra ainsi les utiliser durant la visite de l'utilisateur (voir : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies ).
								session_start();


								$_SESSION['id_admin'] = $row['Id_admin'];
								$_SESSION['pseudo_admin'] = $row['Pseudo'];
								$_SESSION['email_admin'] = $row['Email'];
								header("Location: admin.php?login=success");
								exit();

							}
					}

			}
		
		}
	mysql_close($conn);

?>
