<?php
			if(isset($_POST['supprimer_item']))
			{

				    $database = "ece_amazon";
					//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
					$conn = mysqli_connect("localhost", "root", "", $database);

				 $id_item = $_POST['id_item'];


				 	//On vérifie si l'item est dans le panier

				 	$sql ="SELECT * FROM panier WHERE Id_item ='$id_item'";
					$result = mysqli_query($conn, $sql);
					$verification = mysqli_num_rows($result);

					if($verification==1){


						//Suppression de la ligne de l'item en question dans la bdd

					    $sql = "DELETE FROM panier WHERE Id_item ='$id_item'";
						$result = mysqli_query($conn, $sql);

					}
	
					//on va ensuite supprimer l'item de la table item

					$sql ="SELECT * FROM item WHERE Id_item ='$id_item'";
					$result = mysqli_query($conn, $sql);
					$verification = mysqli_num_rows($result);
					$row = mysqli_fetch_assoc($result);

					if($verification==1){


						if($row['Categorie'] == 'Livre')
						{
							$sql = "DELETE FROM collection_livre WHERE Id_item ='$id_item'";
						    $result = mysqli_query($conn, $sql);

						}elseif ($row['Categorie'] == 'Vetement')
						{
							$sql = "DELETE FROM couleur WHERE Id_item ='$id_item'";
						    $result = mysqli_query($conn, $sql);

						    $sql = "DELETE FROM taille WHERE Id_item ='$id_item'";
						    $result = mysqli_query($conn, $sql);

						    $sql = "DELETE FROM type_vetement WHERE Id_item ='$id_item'";
						    $result = mysqli_query($conn, $sql);
						}

						//Suppression de la ligne de l'item en question dans la bdd
						$sql = "DELETE FROM item WHERE Id_item ='$id_item'";
						$result = mysqli_query($conn, $sql);

						
						header("Location: gestion_items.php?item_supprimé");
						exit();
					}
			}

mysqli_close($conn);		

?>