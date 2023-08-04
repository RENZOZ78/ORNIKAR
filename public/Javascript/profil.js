//bouton qui affichent et cachent les boutons au clic
let btnModifMail = document.querySelector("#btnModifMail");
let btnValidModifMail = document.querySelector("#btnValidModifMail");

//affichage des div
let divMail = document.querySelector("#Mail");
let divModificationMail = document.querySelector("#modificationMail");

btnModifMail.addEventListener("click",function(){
  divMail.classList.add("d-none");
  divModificationMail.classList.remove("d-none");
})
