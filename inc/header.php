<!-- header, Navigation, titre ---------------------------------------->
 <header id="top" >
     <div class="container">

         <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top" id="main-nav">

             <div class="container cont_nav">

                 <a href="<?= URL; ?>accueils" class="navbar-brand">WebyCloudy</a>
                 <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                     <span class="navbar-toggler-icon" ></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?> accueils" class="nav-link">Accueil</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>entreprises"  id="navbarDropdown" aria-expanded="false" data-bs-toggle="collapse" class="nav-link dropdown-toggle">Société</a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                 <li><a class="dropdown-item" href="<?= URL; ?>entreprises/creation">Creation de societe</a></li>
                                 <li><a class="dropdown-item" href="<?= URL; ?>entreprises/modification">Modifications de Société</a></li>
                                 <li><a class="dropdown-item" href="<?= URL; ?>entreprises/gestion">Gestion de société</a></li>
                             </ul>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>sites" class="nav-link">Site internet</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>reseaux" class="nav-link">Réseaux sociaux</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>marketing" class="nav-link">Publicité</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>contact" class="nav-link">Contact</a>
                         </li>

                       <!-- si l'utilisateur n'est pas connecté -->
                      <?php if(!Securite::estConnecte()) : ?>
                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>login" class="nav-link">Se connecter</a>
                         </li>
                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>creerCompte" class="nav-link">Créer compte</a>
                         </li>


                       <!-- si l'utilisateur est connecté -->
                     <?php elseif(Securite::estConnecte()) : ?>
                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>compte/profil" class="nav-link">Profil</a>
                         </li>
                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>compte/deconnexion" class="nav-link">Se deconnecter</a>
                         </li>
                         <?php endif; ?>

                       <!-- si l'uilitisateur est admin ou superAdmin, il a access a l'onglet admnistration -->
                     <?php if(Securite::estConnecte() && (Securite::estAdministrateur() || Securite::estSuperAdministrateur() ) ) : ?>
                        <li class=" dropdown">
                            <button class="btn btn-secondary nav-link dropdown-toggle" type="button" href="<?= URL; ?>administration"   aria-expanded="false" data-bs-toggle="dropdown" >Administration</button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= URL; ?>administration/droits">Gérer les droits</a></li>
                            </ul>
                        </li>

                      <!-- si l'uilitisateur est superAdmin, il a access a la page gesdtion utilisateur et gestio commande et gestion produit -->
                    <?php elseif( Securite::estConnecte() &&  Securite::estSuperAdministrateur())
                      :?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-secondary"  type="button" href="<?= URL; ?>administration"  id="navbarDropdown" aria-expanded="false" data-bs-toggle="collapse" >Administration</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= URL; ?>administration/gestionFullUtilisateur">Gestion utilisateur</a></li>
                                <li><a class="dropdown-item" href="<?= URL; ?>administration/gestionCommandes">Gestion commandes</a></li>
                                <li><a class="dropdown-item" href="<?= URL; ?>administration/gestionProduits">Gestion produits</a></li>
                            </ul>
                        </li>
                      <?php endif; ?>

                     </ul>
                 </div>
             </div>
         </nav>

         <div class="text-intro">
             <div class="preTxt font-italic"><?= $uvp; ?></div>
             <h1><?= $H1; ?></h1>
             <a href="<?= URL; ?>index.php" class=" btn btn_nav btn-dark mt-3">En savoir Plus</a>
             <a href="<?= URL; ?>projets.php" class=" btn btn_nav btn-outline-dark mt-3">Nos projets</a>
         </div>

     </div>
 </header>
