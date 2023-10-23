//bouton qui affichent et cachent les boutons au clic
let btnModifMail = document.querySelector("#btnModifMail");
let btnValidModifMail = document.querySelector("#btnValidModifMail");

//affichage des div de modificaiton mail
let divMail = document.querySelector("#Mail");
let divModificationMail = document.querySelector("#modificationMail");

btnModifMail.addEventListener("click",function(){
  divMail.classList.add("d-none");
  divModificationMail.classList.remove("d-none");
})

// au clicc supprimer lea ft la proprieté display-none de bootstrap
document.querySelector("#btnSupCompte").addEventListener("click",function(){
  document.querySelector("#suppressionCompte").classList.remove("d-none");
})
