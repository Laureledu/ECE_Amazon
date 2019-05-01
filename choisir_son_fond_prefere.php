<?php
    session_start(); 
// ici on veut que l'utilisateur puisse choisir son fond préféré 
    /*if (isset($_FILES['submit']) AND !empty($_FILES['submit']['name']))
    {
        $extentionValide=array('jpg'); 
        $extentionUpload = strtolower(substr(strrchr($_FILES['submit']['name'], '.'),1)); 
        if(in_array($extentionUpload, $extentionValide))
        {
            $chemin = "fond_profil_vendeur/".$_SESSION['id_vendeur'].".".$extentionUpload; 
        }
    }*/
    
    if (isset($_POST['submit']))
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
                    $nv_nom_dossier = uniqid('',true).".".$dossier_actuel_Ext;
                    $destination_dossier = 'fond_profil_vendeur/'.$_SESSION['id_vendeur'].$nv_nom_dossier; 
                    $resultat = move_uploaded_file($repertoire_temporaire, $destination_dossier);  // on va chercher le fichier ici 
                    echo "yo"; 
                    if($resultat) // maintenant on veut envoyer l'information vers la base de donnée 
                    {
                        echo "salut"; 
                        $updat_table_vendeur = $database->prepare('UPDATE vendeur SET Fond_vend = :dossier WHERE Id_vendeur = :id_vendeur'); 
                        $updat_table_vendeur->execute(array(
                            'dossier' => $_SESSION['id_vendeur'].".".$dossier_actuel_Ext,
                            'id_vendeur'=> $_SESSION['id_vendeur'].".".$dossier_actuel_Ext
                        ));
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

    }



    
?>