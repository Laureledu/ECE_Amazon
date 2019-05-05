<?php
	
	session_start();

	if(isset($_POST['payer']))
	{

		    $database = "ece_amazon";
			//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
			$conn = mysqli_connect('localhost', 'root', '', $database);


			$type_carte = $_POST['type_carte'];
	 		$num_carte = $_POST['num_carte'];
	 		$date_exp_carte = $_POST['date_exp_carte'];
	 		$code_carte = $_POST['code_carte'];
	 		$cvv = $_POST['cvv'];
	 		$nom_carte = $_POST['nom_proprio'];

	 		$id=$_SESSION['id_acheteur'];

	 		$sql = "SELECT * FROM acheteur WHERE Id_acheteur = '$id' AND Type_Carte = '$type_carte' AND Num_Carte = '$num_carte' AND Date_Exp_Carte = '$date_exp_carte' AND  Code_Carte = '$code_carte' AND Cvv = '$cvv' AND Nom_carte = '$nom_carte'";

	 		$result = mysqli_query($conn, $sql);
			$verification = mysqli_num_rows($result);

			if ($verification == 0)
			{
				header("Location: paiement.php?formulaire_faux");
				exit();
			}
			else
			{
				$sql_i ="SELECT * FROM panier INNER JOIN item WHERE panier.Id_item = item.Id_item ";
				$result_i = mysqli_query($conn, $sql_i);

				// On change les quantités dans la table item  puis on supprime les items du panier 
				while($colonne = mysqli_fetch_assoc($result_i)){

					//update d'item
					$quantite_panier = $colonne['Quantite'];
					$quantite_item = $colonne['Quantite_item'];
					$quantite_vendu_tot = $colonne['Quantite_vendu'];

					//La valeur du stock diminue et le nombre d'item vendu au total augmente
					$quantite_item = $quantite_item - $quantite_panier;
					$quantite_vendu_tot = $quantite_vendu_tot +  $quantite_panier;

					$id_item = $colonne['Id_item'];

					$sql_up = "UPDATE item SET Quantite_item ='$quantite_item' WHERE Id_item = '$id_item'";
					$result = mysqli_query($conn, $sql_up);

					$sql_up = "UPDATE item SET Quantite_vendu ='$quantite_vendu_tot' WHERE Id_item = '$id_item'";
					$result = mysqli_query($conn, $sql_up);


				}

				//On supprime du panier
				$sql =" DELETE FROM panier";
				$result = mysqli_query($conn, $sql);
				header("Location: index.php?Paiement=succès");
				exit();

			}
		}

mysqli_close($conn);

 ?>