
const nouveauPassword = document.querySelector("#nouveauPassword");
const confirmNouveauPassword = document.querySelector("#confirmNouveauPassword")

//ft qui ecoute la valeur du champs nouveauPassword
nouveauPassword.addEventListener("keyup",function(){
  verificationPassword();
})

//ft qui ecoute la valeur rentrée dans le champs confirmNouveauPassword
confirmNouveauPassword.addEventListener("keyup",function(){
  verificationPassword();
})

//ft qui verifie si les 2 ,nouveau mdp sont egaux. si ils ne sont pas egaux, le bouton valider estr disable et une alerte apparait
function verificationPassword(){
  if(nouveauPassword.value === confirmNouveauPassword.value){
    document.querySelector("#btnValidation").disabled = false;
    document.querySelector("#erreur").classList.add("d-none");
  }else{
    document.querySelector("#btnValidation").disabled = true;
    document.querySelector("#erreur").classList.remove("d-none");

  }
}
