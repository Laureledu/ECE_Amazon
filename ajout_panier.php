<?php
			if(isset($_POST['ajouter_panier']))
			{

				    $database = "ece_amazon";
					//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
					$conn = mysqli_connect("localhost", "root", "", $database);

				 $id_item = $_POST['id_item'];
				 $quantite = $_POST['quantite'];
	

				//Détection d'erreurs
				// On vérifie si l'utilisateur saisie dans un premier temps des quantité d'items valables
				if($quantite == 0 || $quantite <0){

					header("Location: Livres.php?quantite=invalide");
					exit();
				}else{

						$sql ="SELECT * FROM panier WHERE Id_item ='$id_item'";
						$result = mysqli_query($conn, $sql);
						$verification = mysqli_num_rows($result);
						if($verification == 1 )
						{	
							$nvlle_quantite = $quantite + $verification['Quantite'];

							$sql = "UPDATE panier SET Quantite = '$nvlle_quantite'";
							$result = mysqli_query($conn, $sql);
							header("Location: index.php?quantite_changé");
							exit();
				

						}
						else{

							//On passe enfin à l'insertion du compte dans la database
							$sql = "INSERT INTO panier (Quantite, Id_item) VALUES ('$quantite', '$id_item')";
							$result = mysqli_query($conn, $sql);

							
							header("Location: index.php?item_ajoute_dans_lepanier");
							exit();

						}
				}			
			}

mysqli_close($conn);		

?>