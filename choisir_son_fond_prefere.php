<?php
    session_start(); 
    $database = new PDO ('mysql:host=localhost;dbname=ece_amazon', 'root', '');  
// ici on veut que l'utilisateur puisse choisir son fond préféré 

//--------------------- LIEN UTILISE : https://www.youtube.com/watch?v=lDZLZAdr1is ---------------------//
//// -------------- autre lien : https://www.youtube.com/watch?v=JaRq73y5MJk&t=201s&fbclid=IwAR30OKpUcrUAL20KvSkN833RXSEQ_zU8qUtvjvEhrg1CeTtAH26VjqZOgAE ------ //

    if (isset($_POST['submit'])){


        if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
        {
            $taille_dossier = 2000000; 
            $extentionValide=array('jpg', 'gif', 'png', 'jpeg'); 
            if ($_FILES['avatar']['size'] <= $taille_dossier)
            {
                $extentionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'),1));
                if(in_array($extentionUpload, $extentionValide))
               {
                    $chemin = "fond_profil_vendeur/".$_SESSION['id_vendeur'].".".$extentionUpload; 
                    $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                    if($resultat)
                    {
                        $update_table_vendeur = $database->prepare('UPDATE vendeur SET Fond_vendeur = :avatar WHERE Id_vendeur = :id_vendeur'); 
                                $update_table_vendeur->execute(array(
                                    'avatar' => $_SESSION['id_vendeur'].".".$dossier_actuel_Ext,
                                    'id_vendeur'=> $_SESSION['id_vendeur']
                                ));
                                
                                header("Location: profil_vendeur.php?login=success");
                                exit();
    
                    }
               }
           }
            else{
                $msg = "probleme de taille "; 
            }   
        }
        else{
            header("Location: profil_vendeur.php?login=error");
            exit();

        }
        
    }
    /*$database = "ece_amazon";
	//connectez-vous dans votre BDD
	//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $conn = mysqli_connect('localhost', 'root', '', $database );*/
    
      
    /*if (isset($_POST['submit']))
    {
        $dossier = $_FILES['avatar']; 

        $nom_dossier = $_FILES['avatar']['name']; 
        $repertoire_temporaire = $_FILES['avatar']['tmp_name']; 
        $taille_dossier = $_FILES['avatar']['size']; 
        $dossier_error = $_FILES['avatar']['error']; 
        $fileType = $_FILES['avatar']['type']; 

        $dossier_extention = explode('.', $nom_dossier); // on cherche la dernière occurence du "point" : "blablabla.png" 
        $dossier_actuel_Ext = strtolower(end($dossier_extention)); // on s'assureque ce soit toujour des lettres minuscules 

        $extention_autorise = array('jpg', 'jpeg', 'png', 'pdf'); // propose différentes extentions
        echo "salutsalut"; 
        if (in_array( $dossier_actuel_Ext, $extention_autorise)) // ici on regarde si les extention .blabla et le blabla est correctement utilisé 
        {
            if( $dossier_error === 0)
            {
                if ($taille_dossier < 1000000)
                {
                    //$chemin = "fond_profil_vendeur/".$_SESSION['id_vendeur'].".".$extentionUpload; 
                    $nv_nom_dossier = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                    //$nv_nom_dossier = uniqid('',true).".".$dossier_actuel_Ext;
                    $destination_dossier = 'fond_profil_vendeur/'.$_SESSION['id_vendeur'].".".$nv_nom_dossier; 
                    $resultat = move_uploaded_file($repertoire_temporaire, $destination_dossier);  // on va chercher le fichier ici 
                    echo "yo"; 
                    if($resultat) // maintenant on veut envoyer l'information vers la base de donnée 
                    {
                        echo "salut"; 
                        $update_table_vendeur = $database->prepare('UPDATE vendeur SET Fond_vendeur = :avatar WHERE Id_vendeur = :id_vendeur'); 
                        $update_table_vendeur->execute(array(
                            'avatar' => $_SESSION['id_vendeur'].".".$dossier_actuel_Ext,
                            'id_vendeur'=> $_SESSION['id_vendeur']
                        ));
                        sleep(3); 
                        header("Location: profil_vendeur.php?login=success");
                        exit();
                    }else
                    {
                        $message = "il y a eu une erreur durant l'importation du fichier"; 
                    }

                   

                }else{
                    echo "ton dossier est trop important"; 
                }

            }else
            {
                echo "Il y a une erreur dans le changement"; 
            }
        }
        else
        {
            echo "Tu n as pas pris un fichier avec le bon type"; 
        }

    }*/





    
?>