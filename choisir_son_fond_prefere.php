<?php
    session_start(); 
    $database = new PDO ('mysql:host=localhost;dbname=ece_amazon', 'root', '');  
// ici on veut que l'utilisateur puisse choisir son fond préféré 

//--------------------- LIEN UTILISE : https://www.youtube.com/watch?v=lDZLZAdr1is ---------------------//
//// -------------- autre lien : https://www.youtube.com/watch?v=JaRq73y5MJk&t=201s&fbclid=IwAR30OKpUcrUAL20KvSkN833RXSEQ_zU8qUtvjvEhrg1CeTtAH26VjqZOgAE ------ //

    //// ----------------- PHOTO DE PROFIL ----------------------- ///
    if (isset($_POST['submit_profil'])){


        if (isset($_FILES['avatar_profil']) AND !empty($_FILES['avatar_profil']['name']))
        {
            $taille_dossier = 2000000; 
            $extentionValide=array('jpg', 'gif', 'png', 'jpeg'); 
            if ($_FILES['avatar_profil']['size'] <= $taille_dossier)
            {
                $extentionUpload = strtolower(substr(strrchr($_FILES['avatar_profil']['name'], '.'),1));
                if(in_array($extentionUpload, $extentionValide))
               {
                    $chemin = "photo_de_profil/".$_SESSION['id_vendeur'].".".$extentionUpload; 
                    $resultat = move_uploaded_file($_FILES['avatar_profil']['tmp_name'], $chemin);
                    if($resultat)
                    {
                        $update_table_vendeur = $database->prepare('UPDATE vendeur SET Photo_prof_vend = :avatar_profil WHERE Id_vendeur = :id_vendeur'); 
                                $update_table_vendeur->execute(array(
                                    'avatar_profil' => $_SESSION['id_vendeur'].".".$dossier_actuel_Ext,
                                    'id_vendeur'=> $_SESSION['id_vendeur']
                                ));
                                $_SESSION['photo_profil_vendeur']=$_SESSION['id_vendeur'].".".$extentionUpload;
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


    ////----------------- FOND D'ECRAN -------------------------//// 
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
                                $_SESSION['photo_fond']=$_SESSION['id_vendeur'].".".$extentionUpload;
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
?>