<?php


			if(isset($_POST['inscription']))
			{

				    $database = "ece_amazon";
					//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
					$conn = mysqli_connect("localhost", "root", "", $database);

				$prenom = $_POST['prenom'];
				$nom = $_POST['nom'];
				$email = $_POST['email']; 
				$pseudo = $_POST['pseudo']; 
	     		$mdp = $_POST['mdp'];
	     		$tel = $_POST['tel'];
	     		$adresse_1 = $_POST['adresse_1'];
	     		$adresse_2 = $_POST['adresse_2'];
	     		$ville = $_POST['ville'];
	     		$pays = $_POST['pays'];
	     		$code_postal = $_POST['code_postal'];
	     		$type_carte = $_POST['type_carte'];
	     		$num_carte = $_POST['num_carte'];
	     		$date_exp_carte = $_POST['date_exp_carte'];
	     		$code_carte = $_POST['code_carte'];
	     		$cvv = $_POST['cvv'];

	     		echo $type_carte." ".$tel." ".$date_exp_carte;
	

				//Détection d'erreurs
				// On vérifie si les champs ne sont pas vides. Si c'est vide on affiche un message dans la barre de navigation "création=champs_vides"
				if(!preg_match("/^[a-zA-Z]*$/",$prenom)|| !preg_match("/^[a-zA-Z]*$/",$nom)){//interet des else : etre sur que l'on passe par tous les tests de conditions

					//Les charactères saisis sont ils valides ?
					// preg_match("caractères à chercher dans $var", $var) : on check dans dans $prenom et $nom si les charactères sont valides (alphabet latin min et maj). Exemple : si on met de l'alphabet arabe le compte ne sera pas ajouté dans la bdd : on évite les caractères relou. 
					header("Location: inscription_acheteurs.php?création=prenom_nom_invalide");
					exit();
				}

				elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {

					
						//filter_var(chaine de caractères, FILTER_VALIDATE_EMAIL): filter_var peut filtrer n'importe quelle chaine de caractères avec un filtre existant (second paramètre). Ici FILTER_VALIDATE_EMAIL est un des filtres dispo dans la docu de php qui permet de verifier si le string est bien un email. 
						header("Location: inscription_acheteurs.php?création=email_invalide");
						exit();

				}else{


						$sql ="SELECT * FROM acheteur WHERE Pseudo_ach ='$pseudo' OR Email_ach = '$email'";
						$result = mysqli_query($conn, $sql);
						$verification = mysqli_num_rows($result);
						if($verification > 0)
						{
							header("Location: inscription_acheteurs.php?création=pseudo_ou_email_deja_utilise");
							exit();

						}
						else{

							//On passe enfin à l'insertion du compte dans la database
							$sql = "INSERT INTO acheteur (Nom_ach, Prenom_ach, Pseudo_ach, Email_ach, Adresse_1, Adresse_2,Ville,CodePostal,Pays,Num_Tel, Type_Carte, Num_Carte, Date_Exp_Carte, Code_Carte, Cvv, Mdp) VALUES ('$nom', '$prenom', '$pseudo', '$email', '$adresse_1',      '$adresse_2','$ville', '$code_postal','$pays','$tel','$type_carte','$num_carte','$date_exp_carte','$code_carte','$cvv','$mdp')";
							$result = mysqli_query($conn, $sql);

							header("Location: index.php?création=compte_ajoute");
							exit();

						}
					}			
			}

mysql_close($conn);		

?>