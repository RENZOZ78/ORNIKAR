


<!-- FORMULAIRE DE CREATION DE COMPTE-->
<section id="aPropos">
    <div class="container">
        <div class="row">


  <form method="post" action="validation_creerCompte" class="row g-3 needs-validation" novalidate>

    <div class="col-md-4">
      <label for="login" class="form-label">Login</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="login" name="login" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Entrez votre login
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" id="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock" required>
      <div id="passwordHelpBlock" class="form-text">
        Votre mot de passe doit avoir 8 caractères, contenir des lettre et de chiffres, ne doit pas contenir d'espace, de caracteres spéciaux, ou emoji.
      </div>
    </div>

    <div class="col-md-4">
      <label for="mail" class="form-label">Mail</label>
      <input type="mail" id="mail" name="mail" class="form-control" aria-labelledby="passwordHelpBlock" required>
      <div id="mail" class="form-text">
        Veuillez entrez votre mail
      </div>
    </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        Vous devez donner votre accord avant de valider.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Créer !</button>
  </div>
</form>


          </div>
      </div>
  </section>
