<?php

  $page_description = "Page de de modification de mot de passe" ;

  $costum_css= "projets.css";
  //$uvp= "Restons en contact";
  //$page_title= "WebySites | Contact";
  //$H1= "Contact";
  $header_content=  include "inc/header.php";

 ?>

  <!--<h1>Modification du mot de pass -
    <//?= $_SESSION['profil']['login'] ?>
  </h1>
  -->

<form method="post" action="<?=URL ?>compte/validation_modificationPassword" class="row g-3 needs-validation mt-3 mb-5 d-flex justify-content-evenly" novalidate>

    <div class="col-md-3">
      <label for="passord" class="form-label">Ancien password</label>
      <input type="password" id="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock" required>
      <div id="passwordHelpBlock" class="form-text">
        Tapez votre ancien mot de passe
      </div>
    </div>

    <div class="col-md-3">
      <label for="nouveauPassword" class="form-label">Nouveau mot de passe</label>
      <input type="password" id="nouveauPassword" name="nouveauPassword" class="form-control" aria-labelledby="passwordHelpBlock" required>
      <div id="passwordHelpBlock" class="form-text">
        Saisissez votre nouveau mot de passe.
      </div>
    </div>

    <div class="col-md-3">
      <label for="ConfirmNouveauPassword" class="form-label">Confirmation nouveau mot de passe</label>
      <input type="password" id="ConfirmNouveauPassword" name="ConfirmNouveauPassword" class="form-control" aria-labelledby="passwordHelpBlock" required>
      <div id="passwordHelpBlock" class="form-text">
        Confirmer votre nouveau mot de passe.
      </div>
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>
