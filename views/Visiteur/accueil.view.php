


<?php
  // affichage du contenu
  //$costum_css = include "style.css";
  $page_description = "Weby cloudy vous permet de mettre en avant votre activité sur le web. Vous obtiendrez de nouveaux clients sur votre site internet et votre  notoriété grandira sur les réseaux sociaux.
  Weby Cloudy vous propose également de vous accompagner dans la création et la gestion de votre société";
  $header_content=  include "./inc/header.php";

  $page_content =  include "./inc/content_accueil.php";
  //$template = "views/common/template.php";
?>

<!--    Affichage des produits en bdd-->
    <?= "<h2>Nos prestations</h2>" ;?>
    <?php foreach ($produits as $ligne ) : ?>
      <br>
      -----------
      <br>
      Id produit: <?= $ligne["id"];?>
      <br>
      Désignation: <?= $ligne["designation"];?>
      <br>
      Prix: <?= $ligne["prix"];?>€
      <br>
    <?php endforeach; ?>

<!--SECTION PRESENTATION DES PRESTATIONS   ------------------------->
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light">Nos prestations</h2>
                <p class="lead text-body-secondary">Nous vous proposons une palette de prestations destinées à vous mener droit au succes de votre activité</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Creation de société</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Creation de société</text></svg>
                        <div class="card-body">
                            <p class="card-text">Nous vous accompagnons dans la création de votre société, mais également pour tous les autres besoins liés à votre activité.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='<?= URL; ?>entreprises'" class="btn btn-sm btn-outline-secondary">En savoir plus</button>
                                    <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>   -->
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Site internet</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Création de votre site internet</text></svg>
                        <div class="card-body">
                            <p class="card-text">Grâce à votre site internet responsive, vous avez le pouvoir d'afficher votre activité sur internet.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='<?= URL; ?>sites'" class="btn btn-sm btn-outline-secondary">En savoir plus</button>
                                    <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>   -->
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Réseaux sociaux</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Réseaux sociaux</text></svg>
                        <div class="card-body">
                            <p class="card-text">Il est tant de mieux exploiter les réseaux sociaux à votre profit avec une gestion dynamique!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='<?= URL; ?>reseaux'" class="btn btn-sm btn-outline-secondary">En savoir plus</button>
                                    <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>  -->
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Marketing web</text></svg>
                        <div class="card-body">
                            <p class="card-text">Nous mettons en place une stratégie marketing pour vous afin de booster votre audience et votre chiffre d'affaire.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='<?= URL; ?>marketing'" class="btn btn-sm btn-outline-secondary">En savoir plus</button>
                                    <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!--FIN SECTION DES PRESTATIONS    ------>

    <!--  exemple bouton js-->
<!--    <div class="bouton mt-3 mb-3">-->
<!--        <button  id="btn1">Bouton1"</button>-->
<!--        <button  id="btn2">Bouton2"</button>-->
<!---->
<!--        <div id="div1" class="p_invisible border border-dark m-2" > Element1</div>-->
<!--        <div id="div2" class="p_invisible border border-dark m-2" > Element2</div>-->
<!--    </div>-->

