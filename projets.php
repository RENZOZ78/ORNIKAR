<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--le css de bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!--Custom css-->
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="projets.css">
        <!-- <link rel="stylesheet" href="circle.css"> -->
        <script src="app.js" type="text/javascript">

        </script>


    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>

        <!--Police de caractère-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!--fontawesome-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- css ekko librairie -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js">

        <!-- css aos librairie -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Agence WebyCloudy</title>

    </head>

    <?php

      $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
      Weby Cloudy vous propose en outre de vous accompagner dans la création et la gestion de votre société" ;
      $page_title= "Weby ";
      $page_content= "BONJOUR";
      include ("inc/content_accueil.php");
      require_once("views/common/template.php");
     ?>

    <body>
    <!-- header, Navigation, titre ------------------------------------------------------->
        <header id="top" >
            <div class="container " >

                <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top" id="main-nav">

                    <div class="container cont_nav">

                        <!-- <div class="box">
                            <div class="circle">
                                <a href="index.php" class=" nav-circle" >WebyCloudy</a>
                            </div>
                        </div> -->
                        <a href="index.php" class="navbar-brand" >WebyCloudy</a>
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon" ></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item mr-1">
                                    <a href="#top" class="nav-link">Accueil</a>
                                </li>
                                <!-- <li class="nav-item mr-1">
                                    <a href="#aPropos" class="nav-link">Concept</a>
                                </li> -->
                                <li class="nav-item mr-1">
                                    <a href="#projets" class="nav-link">Sites internet</a>
                                </li>
                                <!-- <li class="nav-item mr-1">
                                    <a href="#prix" class="nav-link">Tarifs</a>
                                </li> -->
                                <!-- <li class="nav-item mr-1">
                                    <a href="#contact" class="nav-link">Contact</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>

                ul>li*3

                <div class="text-intro">
                    <div class="preTxt font-italic">Vos idées sont notre inspiration</div>
                    <h1>Agence WebyCloudy</h1>
                    <a href="index.php" class="btn btn-dark mt-3">En savoir Plus</a>
                    <a href="projets.html"
                      class=" btn-wrapper btn btn-outline-dark mt-3"
                      id="canvas"
                      >Nos projets</a>
                </div>
            </div>
        </header>



        <!-- footer -->
        <footer class="text-center p-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>Tout Droits Réservés &copy
                            <span id="year">WebyCloudy 2022 </span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>


    

    </body>
</html>
