
// image fermante elkko lightbox
$(document).on('click', '[data-toggle="lightbox"]', function(event){
    event.preventDefault();
    $(this).ekkoLightbox();
}) 


// carousel de texte = enlever la pose sur le texte pointé
$('.carousel').carousel({
    interval: 2500,
    pause: 'null'
})

