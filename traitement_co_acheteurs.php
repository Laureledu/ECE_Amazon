<?php


$database = "ece_amazon";
	//connectez-vous dans votre BDD
	//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
	$conn = mysqli_connect('localhost', 'root', '', $database );


		if (isset($_POST['submit']))
		{
			//la commande est une manière propre de choper des info d'un formulaire pour éviter les pertes de charactères
			$utilisateur_co =  $_POST['utilisateur_co'];
			$MdP =$_POST['Mdp'];

			if(empty($utilisateur_co) || empty($MdP)){

				header("Location: connexion_acheteurs.php?login=empty");
	 			exit();

			}else{
		

					$sql ="SELECT * FROM acheteur WHERE Pseudo_ach = '$utilisateur_co' OR Email_ach = '$utilisateur_co'";
					$result = mysqli_query($conn, $sql);
					$verification = mysqli_num_rows($result);

					//Attention
					if($verification < 1 ){

						echo $verification;

						header("Location: connexion_acheteurs.php?login=existe_pas");
		 				exit();

					}
					elseif($row = mysqli_fetch_assoc($result)){
						

							if ($MdP != $row['Mdp']){

								header("Location: index.php?Mdp=error_try again");
								exit();

							}
							elseif($MdP == $row['Mdp']){

								//on crée une session : pk faire ça ? C'est hyper improtant car une session permet de conserver des variables ($_SESSIONS['blabla']) sur TOUTES les pages du sites, on pourra ainsi les utiliser durant la visite de l'utilisateur (voir : https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4239476-session-cookies ).
								session_start();


								$_SESSION['id_acheteur'] = $row['Id_acheteur'];
								$_SESSION['prenom_ach'] = $row['Prenom_ach'];
								$_SESSION['nom_ach'] = $row['Nom_ach'];
								$_SESSION['email_ach'] = $row['Email_ach'];
								$_SESSION['pseudo_ach'] = $row['Pseudo_ach'];
								$_SESSION['adresse_1'] = $row['Adresse_1'];
								$_SESSION['adresse_2'] = $row['Adresse_2'];
								$_SESSION['code_postal'] = $row['CodePostal'];
								$_SESSION['pays'] = $row['Pays'];
								$_SESSION['num_Tel'] = $row['Num_Tel'];
								$_SESSION['type_carte'] = $row['Type_carte'];
								$_SESSION['num_carte'] = $row['Num_Carte'];
								$_SESSION['date_exp_carte'] = $row['Date_Exp_Carte'];
								$_SESSION['code_carte'] = $row['Code_Carte'];
								$_SESSION['cvv'] = $row['Cvv'];
								header("Location: index.php?login=success");
								exit();

							}
					}

			}
		
		}elseif (isset($_POST['creer']))
		{
			header("Location: inscription_acheteurs.php");
			exit();
		}
	mysql_close($conn);

?>
