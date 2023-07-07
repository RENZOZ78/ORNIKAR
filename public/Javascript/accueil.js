// alert("coucou") ;

// definition des variables bnt1 et 2
var btn1 = document.querySelector("#btn1");
var btn2 = document.querySelector("#btn2");


// Evenement, quand je clique sur le btn , tu m'affiche ou tu me cache le texte'
btn1.addEventListener("click",function(e) {
    document.querySelector("#div1").classList.toggle("p_invisible") ;
})
btn2.addEventListener("click",function(e) {
    document.querySelector("#div2").classList.toggle("p_invisible") ;
})