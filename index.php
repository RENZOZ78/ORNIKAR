

    <?php
    session_start();

    define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").  "://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

      require_once("./controllers/Visiteur/Visiteur.controller.php");
      $visiteurController = new VisiteurController();


      try {
        //test routage
        if(empty($_GET['page'])){
           echo "page d'accueil";
           //header("location:accueil");
            $page= "accueils";

        } else{
           echo "autres pages";
           $url= explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
           $page = $url[0];
        }

        //routage vers les différentes page_description
        switch($page){
          case "accueils": $visiteurController->accueil();
          break;
          case "entreprises": $visiteurController->entreprise();
            switch ($url[1]){
                case "creation": $visiteurController->creation_entreprise();
                break;
            }
            switch ($url[2]){
                case "modification": $visiteurController->modification_entreprise();
                break;
            }
            switch ($url[3]){
                case "gestion": $visiteurController->gestion_entreprise();
                break;
            }
          break;

          case "sites": $visiteurController->site();
          break;
          case "reseaux": $visiteurController->reseaux();
          break;
          case "contact":  $visiteurController->contact();
          break;
          case "marketing":  $visiteurController->marketing();
          break;
          default: throw new exception( "la page n'existe pas du tout");
        }

      } catch (\Exception $e) {
        $visiteurController->pageErreur($e->getMessage());
      }




     ?>
