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
            $id_vendeur_de_item = $_POST['id_vendeur_item']; 

            
            
            $sql ="SELECT * FROM vendeur WHERE Id_vendeur = '$id_vendeur_de_item'";
            $result = mysqli_query($conn, $sql);
            $verification = mysqli_num_rows($result);

            //Attention : on vérifie si le pseudo du vendeur entré exiqte déjà dans la base de donnée 
            if($verification < 1 ){

                header("Location: ajouter_item_admin.php?vendeur=n_existe_pas");
                 exit();

            }
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            if(!preg_match("/^[0-9]*$/",$qauntite_de_item) || !preg_match("/^[0-9]*$/",$taille_de_item) )
            {
                header("Location: ajouter_item_admin.php?création=quantite_et_ou_taille_invalides");
                exit();

            }
            
            else
            {
               
                
                $sql_total = "INSERT INTO item (Nom_item, Prix_unite, Quantite_item , Categorie, Auteur, 
                Genre, Photo_article, Video_article, Description_article, Id_vendeur, Id_admin) 
                VALUES ('$nom_de_item', '$prix_de_item', '$qauntite_de_item', '$categorie_de_item', '$auteur_de_item', 
                '$genre_de_item', '', '', '$description_de_item', '$id_vendeur_de_item', 1)"; 
            
            

                $sql = "SELECT MAX(Id_item) AS nbMax FROM item" ;
                $result =  mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result); 
                $id =$row['nbMax'];
                $id++;
                $result = mysqli_query($conn, $sql_total);
            
                if ($categorie_de_item == "Livre")
                {
                    

                    $sql_collection = "INSERT INTO collection_livre (Nom_collection, Id_item) VALUES('$collection_de_item', '$id')"; 
                    $result_collection = mysqli_query($conn, $sql_collection);
                    

                }elseif ($categorie_de_item == "Vetement")
                {
                    $sql_type = "INSERT INTO type_vetement (Nom_type, Id_item) VALUES ('$type_de_item', '$id')"; 
                    $result_type = mysqli_query($conn, $sql_type);
                    
                    $sql_taille = "INSERT INTO taille (Nom_taille, Id_item) VALUES ('$taille_de_item', '$id')"; 
                    $result_taille = mysqli_query($conn, $sql_taille);

                    
                    $sql_couleur = "INSERT INTO couleur (Nom_couleur, Id_item) VALUES ('$couleur_de_item', '$id')"; 
                    $result_couleur = mysqli_query($conn, $sql_couleur);
                    
                } 
            }  

        }
    




            
            
        
        
    $conn->close();

    header("Location: admin.php?res=item_ajoute"); 
    exit(); 

    	

?>