
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

// NAVBAR Animation =si on scroll de plus de 30px a partir du haut, alors la navbar devient opaque et plus petite
$(window).scroll(function(){
    if($(this).scrollTop() > 30){
        $('.navbar').addClass('opaque');
    } else{
        $('.navbar').removeClass('opaque');
    }
})

