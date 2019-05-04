<?php


			if(isset($_POST['inscription']))
			{

				    $database = "ece_amazon";
					//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
					$conn = mysqli_connect("localhost", "root", "", $database);

				
				
				$pseudo = $_POST['pseudo'];
				$email = $_POST['email']; 
	     		$mdp = $_POST['mdp'];
	     		
	

				//Détection d'erreurs
				// On vérifie si les champs ne sont pas vides. Si c'est vide on affiche un message dans la barre de navigation "création=champs_vides"
				
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {

					
						//filter_var(chaine de caractères, FILTER_VALIDATE_EMAIL): filter_var peut filtrer n'importe quelle chaine de caractères avec un filtre existant (second paramètre). Ici FILTER_VALIDATE_EMAIL est un des filtres dispo dans la docu de php qui permet de verifier si le string est bien un email. 
						header("Location: AddVendeur.php?création=email_invalide");
						exit();
				}
			
				else{

						$sql ="SELECT * FROM vendeur WHERE Pseudo_vend ='$pseudo' OR Email_vend = '$email'";
						$result = mysqli_query($conn, $sql);
						$verification = mysqli_num_rows($result);
						if($verification > 0)
						{
							header("Location: AddVendeur.php?création=pseudo_ou_email_deja_utilise");
							exit();

						}
						else{

							//On passe enfin à l'insertion du compte dans la database
							$sql = "INSERT INTO vendeur (Pseudo_vend, Email_vend, Mdp_vend) VALUES ('$pseudo', '$email', '$mdp')";
							$result = mysqli_query($conn, $sql);

							header("Location: admin.php?création=compte_ajoute");
							exit();

						}
					}			
			}

mysql_close($conn);		

?>