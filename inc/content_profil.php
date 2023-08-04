


<!-- SECTION ABOUT-->
<section id="aPropos">
    <div class="container">
        <div class="row">



            <div class="" id="mail">
              Mail : <?= $utilisateur['mail'] ?>
              <button class="btn btn-primary" id="btnModifMail" type="button" name="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
              </button>
            </div>

            <div class="d-none" id="modificationMail">
              <form class=""  method="post" action="<?= URL; ?>compte/validation_modificationMail">
                <div class="row">
                  <label for="mail" class="col-2 col-form-label">Mail :</label>
                  <div class="col-8">
                    <input type="mail" class="form-control" name="mail" value="<?= $utilisateur['mail'] ?>" />>
                  </div>
                  <div class="col-2">
                    <button type="btn btn-success" id=btnValidModifMail >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
</svg>
                    </button>

                  </div>
                </div>
              </form>
            </div>



          </div>
      </div>
  </section>
