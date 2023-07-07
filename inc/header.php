<!-- header, Navigation, titre ---------------------------------------->
 <header id="top" >
     <div class="container">

         <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top" id="main-nav">

             <div class="container cont_nav">

                 <a href="<?= URL; ?>accueils" class="navbar-brand" >WebyCloudy</a>
                 <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                     <span class="navbar-toggler-icon" ></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?> accueils" class="nav-link">Accueil</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="<?= URL; ?>entreprises" class="nav-link">Gestion d'entreprise</a>
                             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li><a class="dropdown-item" href="#">Another action</a></li>
                                 <li><a class="dropdown-item" href="#">Something else here</a></li>
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
