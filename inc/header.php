<!-- header, Navigation, titre ---------------------------------------->
 <header id="top" >
     <div class="container">

         <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top" id="main-nav">

             <div class="container cont_nav">

                 <a href="accueil" class="navbar-brand" >WebyCloudy</a>
                 <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                     <span class="navbar-toggler-icon" ></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item mr-1">
                             <a href="accueil" class="nav-link">Accueil</a>
                         </li>
                          <!-- <li class="nav-item mr-1">
                             <a href="#aPropos" class="nav-link">Concept</a>
                         </li> -->
                         <li class="nav-item mr-1">
                             <a href="entreprises" class="nav-link">Gestion d'entreprise</a>
                         </li>
                         <li class="nav-item mr-1">
                             <a href="sites" class="nav-link">Site internet</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="reseaux" class="nav-link">Réseaux sociaux</a>
                         </li>

                         <li class="nav-item mr-1">
                             <a href="contact" class="nav-link">Contact</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>

         <div class="text-intro">
             <div class="preTxt font-italic"><?= $uvp; ?></div>
             <h1><?= $H1; ?></h1>
             <a href="index.html" class=" btn btn_nav btn-dark mt-3">En savoir Plus</a>
             <a href="projets.php" class=" btn btn_nav btn-outline-dark mt-3">Nos projets</a>
         </div>


     </div>
 </header>
