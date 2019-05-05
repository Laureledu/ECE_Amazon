<?php
/// traitement de la connexion du vendeur : lié à la base de donnée 'vendeur' 

$database = "ece_amazon";
	//connectez-vous dans votre BDD
	//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
	$conn = mysqli_connect('localhost', 'root', '', $database );


		if (isset($_POST['submit'])) // le 'submit' est le bouton de validation dans le fichier "vendeur_con.php" 
		{
			//la commande est une manière propre de choper des info d'un formulaire pour éviter les pertes de charactères
			$pseudo_vendeur =  $_POST["pseudo_vendeur"];
            $email_vendeur = $_POST["email_vendeur"];
            $mdp_vendeur = $_POST["mdp_vendeur"];  

			if(empty($pseudo_vendeur) || empty($email_vendeur) || empty($mdp_vendeur)){

				header("Location: index.php?login=empty");
	 			exit();

			}
			else{

				$sql ="SELECT * FROM vendeur WHERE Pseudo_vend = '$pseudo_vendeur' AND Email_vend = '$email_vendeur'";
				$result = mysqli_query($conn, $sql);
				$verification = mysqli_num_rows($result);

				//Attention
				if($verification < 1 ){

					header("Location: vendeur_con.php?login=error_pseudo");
	 				exit();

				}
				elseif($row = mysqli_fetch_assoc($result)){
					

                        if ($mdp_vendeur != $row['Mdp_vend']){

							header("location: vendeur_con.php?mdp_vendeur=error_try_again");
							exit();

						}
						elseif ($mdp_vendeur == $row['Mdp_vend']){

							//on crée une session : pk faire ça ? C'est hyper improtant car une session permet de conserver des variables ($_SESSIONS['blabla']) sur TOUTES les pages du sites, on pourra ainsi les utiliser durant la visite de l'utilisateur (voir : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies ).
							session_start();
							
							
							$_SESSION['id_vendeur'] = $row['Id_vendeur'];
							$_SESSION['photo_profil_vendeur'] = $row['Photo_prof_vend'];
							$_SESSION['photo_fond'] = $row['Fond_vendeur'];
							$_SESSION['pseudo_du_vendeur'] = $row['Pseudo_vend'];
							$_SESSION['email_du_vendeur'] = $row['Email_vend'];

							 ?> <script >

								alert('toto');

							</script> <?php
							
							
							//sleep(3);
							header("Location: profil_vendeur.php?login=success");
							exit();

						}
				}
			}

		}

?>
