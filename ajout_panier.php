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

						$sql ="SELECT * FROM panier INNER JOIN item WHERE panier.Id_item = item.Id_item ";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						$verification = mysqli_num_rows($result);

						
						$quantite_item = $row['Quantite_item'];
;
						//Si la quantité demandé par l'utilisateur est plus grande que la quantité en stock alors on annule l'ajout
						if($quantite_item < $quantite)
						{
							header("Location: index.php?la_quantité_demandé_excède_la_valeur_du_stock_de_cet_item");
							exit();
						}else{


								if($verification == 1 )
								{	
									
									$quantite_ancienne = $row['Quantite'];
									$nvlle_quantite = $quantite + $quantite_ancienne;

									$sql = "UPDATE panier SET Quantite = '$nvlle_quantite'";
									$result = mysqli_query($conn, $sql);
									header("Location: panier.php?quantite_changé");
									exit();
						

								}
								else{

									//On passe enfin à l'insertion du compte dans la database
									$sql = "INSERT INTO panier (Quantite, Id_item) VALUES ('$quantite', '$id_item')";
									$result = mysqli_query($conn, $sql);

									
									header("Location: panier.php?item_ajoute_dans_lepanier");
									exit();

									}
						}
				   }			
			}

mysqli_close($conn);		

?>