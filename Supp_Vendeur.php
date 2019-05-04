<?php


			if(isset($_POST['Supprimer']))
			{

			    $database = "ece_amazon";
				//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
				$conn = mysqli_connect("localhost", "root", "", $database);

				$id_vend = $_POST['id_vend'];
	     		
				$sql = "DELETE FROM item WHERE Id_vendeur='$id_vend'";
				$result = mysqli_query($conn, $sql);

				$sql = "DELETE FROM vendeur WHERE Id_vendeur='$id_vend'";
				$result = mysqli_query($conn, $sql);


				header("Location: admin.php?Suppression=compte_supprime");
				exit();
								
			}

mysql_close($conn);		

?>