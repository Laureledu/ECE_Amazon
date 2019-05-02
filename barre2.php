
<!--<nav class="navbar navbar-inverse menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ECE Amazon</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Catégories <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Livres</a></li>
          <li><a href="#">Musiques</a></li>
          <li><a href="#">Vetements</a></li>
          <li><a href="#">Sports et Loisirs</a></li>
        </ul>
      </li>
      <li><a href="#">Ventes flash</a></li>
    </ul>


    <!-<- La partie de droite sera la seule à changer pour le moment
    <?php
      /*if(isset($_SESSION['id'])){

        echo '<ul class="nav navbar-nav navbar-right droite">
              <li><form role="form" action="traitement_deco_acheteur.php" method="post" >
                      <button  type="submit" name = "deconnexion" class="deco btn-warning btn-sm"> Déconnexion </button>
                      </form></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Panier</a></li>
            </ul>';

      }
      else{

        echo '<ul class="nav navbar-nav navbar-right droite">
        <li><a href="connexion_acheteurs"><span class="glyphicon glyphicon-user"></span> Votre compte</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Panier</a></li>
      </ul>';

      }*/
    ?>
  </div>
</nav>-->






 <!-- A horizontal navbar that becomes vertical on small screens -->
      <nav class="navbar navbar-expand-sm bg-dark">
        
         <!-- Left -->
         <ul class="navbar-nav mr-auto">

            <li class="nav-item">
               <a class="nav-link navbar-brand" href="index.php">Ece Amazon</a>
            </li>

          
            <li class="nav-item">
               <a class="nav-link" href="#">Vendre</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Vente flash</a> 
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               Categories
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Livres</a>
                  <a class="dropdown-item" href="#">Musiques</a>
                  <a class="dropdown-item" href="#">Vetements</a>
                  <a class="dropdown-item" href="#">Sports et Loisirs</a>
               </div>
            </li>

         </ul>

          <!-- Right -->
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="#">Panier</a>
           </li>


           <?php
               if(isset($_SESSION['id_acheteur'])){
                 echo '<li class="nav-item">
                    <form role="form" action="traitement_deco_acheteur.php" method="post" >
                    <button  type="submit" name = "deconnexion" class="deco btn-danger btn-sm"> Déconnexion </button>
                      </form>
                 </li>';
                 }else{

                   echo '<li class="nav-item">
                            <a class="nav-link" href="connexion_acheteurs">Votre compte</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">admin</a>
                         </li>';

                 }


           ?>

         </ul>
      </nav>
































  
