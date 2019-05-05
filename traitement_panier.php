<?php
			if(isset($_POST['retirer_panier']))
			{

				    $database = "ece_amazon";
					//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
					$conn = mysqli_connect("localhost", "root", "", $database);

				 $id_panier = $_POST['id_panier'];
	

				//Détection d'erreurs
				

					$sql ="SELECT * FROM panier WHERE Id_panier ='$id_panier'";
					$result = mysqli_query($conn, $sql);
					$verification = mysqli_num_rows($result);

					if ($verification == 1){
						$sql = "DELETE FROM panier WHERE Id_panier = '$id_panier'";
						$result = mysqli_query($conn, $sql);

						header("Location: panier.php?article_retirer_du_panier");
						exit();
					}
					
			}

mysqli_close($conn);		

?>