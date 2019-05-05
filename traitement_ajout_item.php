<?php

session_start();

        

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ece_amazon";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else
        {

            //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
            
            // on récupère les valeurs saisies dans les différents inputs 

            $nom_de_item = $_POST['nom_item']; 
            $auteur_de_item = $_POST['auteur']; 
            $genre_de_item = $_POST['genre_item']; 
            $prix_de_item = $_POST['prix_item']; 
            $qauntite_de_item = $_POST['quantite_item']; 
            $description_de_item = $_POST['description']; 
            $categorie_de_item = $_POST['categorie_item']; 
            $collection_de_item = $_POST['collection_livre']; 
            $type_de_item = $_POST['type_ventement']; 
            $taille_de_item = $_POST['taille_vetement']; 
            $couleur_de_item = $_POST['couleur_vetement']; 

            
            if(!preg_match("/^[0-9]*$/",$qauntite_de_item) || !preg_match("/^[0-9]*$/",$taille_de_item) ) // on blinde pour n'autauriser que l'entrer de variables de type int 
            {
                header("Location: ajouter_item.php?création=quantite_et_ou_taille_invalides");
                exit();

            }else{

        

                $vendeur = $_SESSION['id_vendeur']; 
                
                $sql_total = "INSERT INTO item (Nom_item, Prix_unite, Quantite_item , Categorie, Auteur, 
                Genre, Photo_article, Video_article, Description_article, Id_vendeur, Id_admin) 
                VALUES ('$nom_de_item', '$prix_de_item', '$qauntite_de_item', '$categorie_de_item', '$auteur_de_item', 
                '$genre_de_item', '', '', '$description_de_item', '$vendeur', 1)"; 
            
            

                $sql = "SELECT MAX(Id_item) AS nbMax FROM item" ;
                $result =  mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result); 
                $id =$row['nbMax'];
                $id++;
                $result = mysqli_query($conn, $sql_total);

                // cette boucle va permetre d'inserer les valeurs des nouveaux items dans les tables qui "héritent" de celle de la table item
                // les catégories vont déterminer quelles sont exactement tous les attribues qui correspondent aux items
            
                if ($categorie_de_item == "Livre")
                {
                    

                    $sql_collection = "INSERT INTO collection_livre (Nom_collection, Id_item) VALUES('$collection_de_item', '$id')"; 
                    $result_collection = mysqli_query($conn, $sql_collection);
                    if ($conn->query($sql_collection) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql_collection . "<br>" . $conn->error;
                    }

                }elseif ($categorie_de_item == "Vetement")
                {
                    $sql_type = "INSERT INTO type_vetement (Nom_type, Id_item) VALUES ('$type_de_item', '$id')"; 
                    $result_type = mysqli_query($conn, $sql_type);

                    $sql_type = "INSERT INTO taille (Nom_taille, Id_item) VALUES ('$taille_de_item', '$id')"; 
                    $result_type = mysqli_query($conn, $sql_type);

                    $sql_couleur = "INSERT INTO couleur (Nom_couleur, Id_item) VALUES ('$couleur_de_item', '$id')"; 
                    $result_couleur = mysqli_query($conn, $sql_couleur);

                } 
            }  

        }
    

        
    $conn->close();

    header("Location: profil_vendeur.php?res=item_ajoute"); 
    exit(); 

    	

?>