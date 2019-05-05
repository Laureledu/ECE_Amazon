<?php
session_start();
?>
<!DOCTYPE html>
    <meta charset="utf-8">
	<title>Ajouter un item</title>

	<!-- Debut CSS -->
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" type="text/css" href="styles_index.css">
    <link rel="stylesheet" type="text/css" href="styles_formulaire.css">
    
    
	<!-- fin CSS -->

	<!-- Debut Jquery -->

	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	
	<script type="text/javascript">
        $(document).ready(//adapte le header en fonction de la taille de l'écran 
        function()
        { 

            $('#selection_cat').change(function()
            {
                if(document.getElementById("selection_cat").value == "Vetement")
                {
                    $('#vetements').show();
                }else{
                    $('#vetements').hide(); 
                }
                alert(document.getElementById("selection_cat").value); 
                if(document.getElementById("selection_cat").value == "Livre")
                {
                    $('#livres').show();
                }else{
                    $('#livres').hide(); 
                }
            });

            $('.header').height($(window).height()); 
            
        }); 
        
	</script> 

	<!-- fin Jquery -->

    
</head>
    <?php
        include_once 'barre2.php'
    ?>

    <section class="container-fluid formulaire-inscription-item">
        <div class = "row">
            <!-- Colonne-centree est contenu dans le CSS et permet de mettre tout le contenu au centre de la ligne-->
			
				<!-- Colonne-centree est contenu dans le CSS et permet de mettre tout le contenu au centre de la ligne-->
				<div class = "col-md-5 colonne-centree">
					<!-- Default form login -->
					<form class="text-center border border-light p-6" action="traitement_ajout_item.php" method="POST">

					    <p class="h4 mb-4">Ajout d'item</p>

					    <!-- Nom item / Auteur -->
                        <div class ="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nom de l'item</label>
                                <input type="text" class="form-control" name="nom_item" placeholder="Nom de l'item" required>
                            </div>
                            <div class ="form-group col-md-6">
                                <label for="inputEmail4">Auteur de l'item</label>
                                <input type="text" class="form-control" name="auteur" placeholder="Auteur de l'item" required>
                            </div>
                        </div>

                        <div class ="form-group">
                            <label for="inputEmail4">Genre</label>
                            <input type="text" class="form-control" name="genre_item" placeholder="Genre" required>
                        </div>

                        <div class ="form-group">
                            <label for="inputEmail4">Quantité d'item</label>
                            <input type="text" class="form-control" name="quantite_item" placeholder="Quantité d'item" required>
                        </div>

                       
                        <div class ="form-group">
                            <label for="inputEmail4">Prix unité</label>
                            <input type="text" class="form-control" name="prix_item" placeholder="Prix unité" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name ="description" rows="4" placeholder="Description"></textarea>
                        </div>


                        <div class ="form-group col-md-5 pl-1">
                            <label>Catégorie</label>
                            <select name ="categorie_item" class="form-control" id="selection_cat" required>
                                <option selected>Choix ... </option>
                                <option value="Livre" >Livre</option>
                                <option value="Musique">Musique</option>
                                <option value="Vetement">Vêtement</option>
                                <option value="Sport et Loisir">Sport et Loisir</option>
                            </select>
                        </div>


                        <!-- les cases cachées -->
                        <div id="livres" style="display:none">
                            <div class="form-group">
                                <label>Collection</label>
                                <input type="text" class="form-control" name="collection_livre" placeholder="Collection" >
                            </div>
                        </div>

                        
                   
                        <div id="vetements" style="display:none">
                            <div class="form-group">
                                <label>Type de vêtement</label>
                                <input type="text" class="form-control" name="type_ventement" placeholder="Type de vêtement" >
                            </div>

                            <div class="form-row">
                                <div calss="form-group col-md-6">
                                    <label>Taille</label>
                                    <input type="text" class ="form-control" name="taille_vetement" placeholder="Taille">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Couleur</label>
                                    <input type="text" class="form-control" name="couleur_vetement" placeholder="Couleur">
                                </div>
                            </div>
                        </div>  
                        <br/>
                    
                        <!-- fin des cases cachés --> 
                        
                        <!--
                        <div class="form-row " style="float:left">
                            <label for="inputEmail4">Photo de l'item</label>
                            <form  method="POST" action="ajout_photo_video_item.php" enctype="multipart/form-data">
                                <input type="file" name="image_item">
                                <button  type="submit" class="btn btn-warning" name="submit_photo">Choix photo</button>
                            </form> 
                        </div>
                        <br/><br/>

                        <div class="form-row" style="float:left">
                            <label for="inputEmail4">Video de l'item</label>
                            <form  method="POST" action="ajout_photo_video_item.php" enctype="multipart/form-data" >
                                <input type="file" name="video_item">
                                <button type="submit" class="btn btn-success" name="submit_video">Choix video</button>
                            </form>   
                        </div>-->

                        <div class="form-row col-md-7 colonne-centree">
                            <button  type="submit" name="inscription_item" class="btn btn-primary" required>Ajouter</button>
                        </div>


                        




                        
					    <!-- Sign in button -->
                        
					 </form>
                    

                        
				</div>
        </div>
    </section>
</html>