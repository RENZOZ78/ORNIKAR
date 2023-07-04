

    <?php
    session_start();

    define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").  "://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

      require_once("./controllers/MainController.controller.php");
      $mainController = new MainController();

      try {
        //test routage
        if(empty($_GET['page'])){
           echo "page d'accueil";
           header("location:accueil");

        } else{
           echo "autres pages";
           $url= explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
           $page = $url[0];
        }

        //routage vers les différentes page_description
        switch($page){
          case "accueils": $mainController->accueil();
          break;
          case "entreprises": $mainController->entreprise();
          break;
          case "sites": $mainController->site();
          break;
          case "reseaux": $mainController->reseaux();
          break;
          case "contact":  $mainController->contact();
          break;
          default: throw new exception( "la page n'existe pas du tout");
        }

      } catch (\Exception $e) {
        $mainController->pageErreur($e->getMessage());
      }






     ?>
