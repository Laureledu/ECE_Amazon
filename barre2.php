<!-- A horizontal navbar that becomes vertical on small screens -->
      <nav class="navbar navbar-expand-sm menu navbar-dark bg-dark">
        <?php

          //Acheteur connecté
          if(isset($_SESSION['id_acheteur'])){
               //Left
                echo '<ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                       <a class="nav-link navbar-brand" href="index.php">Ece Amazon</a>
                    </li>

                  
                    <li class="nav-item">
                       <a class="nav-link" href="#">Vendre</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="VenteFlash.php">Vente flash</a> 
                    </li>

                    <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       Categories
                       </a>
                       <div class="dropdown-menu">
                          <a class="dropdown-item" href="Livres.php" styles ="color:black">Livres</a>
                          <a class="dropdown-item" href="Musiques.php">Musiques</a>
                          <a class="dropdown-item" href="Vetements.php">Vetements</a>
                          <a class="dropdown-item" href="Sports_Loisirs.php">Sports et Loisirs</a>
                       </div>
                    </li>

                  </ul>

                    <!-- Right -->
                   <ul class="navbar-nav ml-auto mr-5">

                     
                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              '.$_SESSION['pseudo_ach'].'
                             </a>
                               <div class="dropdown-menu">
                                <center>
                                  <form role="form" action="traitement_deco_acheteur.php" method="post" >
                                    <button  type="submit" name = "deconnexion" class="deco btn-danger btn-sm"> Déconnexion </button>
                                 </form>
                                 </center>
                               </div>
                         </li>

                           <li class="nav-item">
                              <a class="nav-link" href="#">Panier</a>
                           </li>';
                       } 

                       //Vendeur connecté

                       elseif(isset($_SESSION['id_vendeur'])){
                     //Left
                      echo '<ul class="navbar-nav mr-auto">

                          <li class="nav-item">
                             <a class="nav-link navbar-brand" href="index.php">Ece Amazon</a>
                          </li>

                        
                          <li class="nav-item">
                             <a class="nav-link" href="#">Vendre</a>
                          </li>


                        </ul>

                          <!-- Right -->
                         <ul class="navbar-nav ml-auto mr-5">


                            <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                '.$_SESSION['pseudo_du_vendeur'].'
                               </a>
                               <div class="dropdown-menu">
                                  <form role="form" action="traitement_deco_acheteur.php" method="post" >
                                    <button  type="submit" name = "deconnexion" class="deco btn-danger btn-sm"> Déconnexion </button>
                                 </form>
                               </div>
                            </li>';
                          }

                      //Vendeur connecté

                      elseif(isset($_SESSION['id_admin'])){
                     //Left
                      echo '<ul class="navbar-nav mr-auto">

                          <li class="nav-item">
                             <a class="nav-link navbar-brand" href="index.php">Ece Amazon</a>
                          </li>

       
                        </ul>

                          <!-- Right -->
                         <ul class="navbar-nav ml-auto mr-5">


                            <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                '.$_SESSION['pseudo_admin'].'
                               </a>
                               <div class="dropdown-menu">
                                <a  href="admin.php" name = "retour" class="deco btn btn-sm" role="button"> Votre profil </a>
                                  <form role="form" action="traitement_deco_acheteur.php" method="post" >
                                    <button  type="submit" name = "deconnexion" class="deco btn-danger btn-sm"> Déconnexion </button>
                                  </form>
                              </div>
                            </li>
                          </ul>';
                          }

                         else{
                          //Left -->
                           echo' <ul class="navbar-nav mr-auto">

                              <li class="nav-item">
                                 <a class="nav-link navbar-brand" href="index.php">Ece Amazon</a>
                              </li>

                            
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Vendre</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="VenteFlash.php">Vente flash</a> 
                              </li>

                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                 Categories
                                 </a>
                                 <div class="dropdown-menu">
                                      <a class="dropdown-item" href="Livres.php" styles ="color:black">Livres</a>
                                      <a class="dropdown-item" href="Musiques.php">Musiques</a>
                                      <a class="dropdown-item" href="Vetements.php">Vetements</a>
                                      <a class="dropdown-item" href="Sports_Loisirs.php">Sports et Loisirs</a>
                                 </div>
                              </li>

                           </ul>

                            <!-- Right -->
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                                <a class="nav-link" href="#">Panier</a>
                              </li>

                               <li class="nav-item">
                                  <a class="nav-link" href="connexion_acheteurs">Votre compte</a>
                                </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="connexion_admin.php">admin</a>
                               </li>';

                       }

           ?>

         </ul>
      </nav>
































  
