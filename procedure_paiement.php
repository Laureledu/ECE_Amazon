<?php

	session_start();

?>

<?php

			if(isset($_POST['paiement']))
			{

				if(isset($_SESSION['id_acheteur'])){

					header("Location: paiement.php");
					exit();

				}else{

					header("Location: connexion_acheteurs.php");
					exit();

				}

					
			}
?>