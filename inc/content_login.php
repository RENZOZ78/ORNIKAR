


<!-- SECTION ABOUT-->
<section id="aPropos">
    <div class="container">
        <div class="row">


  <form method="post" action="validation_login" class="row g-3 needs-validation" novalidate>

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
      <label for="inputPassword5" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock" required>
      <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
      </div>
    </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>


          </div>
      </div>
  </section>
