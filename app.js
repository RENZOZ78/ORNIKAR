
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

// bouton


var c = document.getElementById('canvas');
var ctx = c.getContext('2d');
var btn = document.getElementsByClassName('btn')[0];

c.width = window.innerWidth;
c.height = window.innerHeight;

var mouseX = c.width / 2;
var mouseY = c.height / 2;
var txtPosition = 0;

var particles = [];

btn.addEventListener('mouseup', function(e){
mouseX = e.clientX;
mouseY = e.clientY;

createParticles();
changeText();
});

setTimeout(function(){
createParticles();
}, 250);

draw();

function draw(){

drawBg();
incParticles();
drawParticles();

window.requestAnimationFrame(draw);

}

function drawBg(){
ctx.rect(0, 0, c.width, c.height);
ctx.fillStyle = "rgb(40, 45, 50)";
ctx.fill();
}

function drawParticles(){
for(i = 0; i < particles.length; i++){
ctx.beginPath();
ctx.arc(particles[i].x,
      particles[i].y,
      particles[i].size,
      0,
      Math.PI * 2);
ctx.fillStyle = particles[i].color;
ctx.closePath();
ctx.fill();
}
}

function incParticles(){
for(i = 0; i < particles.length; i++){
particles[i].x += particles[i].velX;
particles[i].y += particles[i].velY;

particles[i].size = Math.max(0, (particles[i].size - .05));

if(particles[i].size === 0){
 particles.splice(i, 1);
}
}
}

function createParticles(){
for(i = 0; i < 30; i++){
particles.push({
 x: mouseX,
 y: mouseY,
 size: parseInt(Math.random() * 10),
 color: 'rgb(' + ranRgb() + ')',
 velX: ranVel(),
 velY: ranVel()
});
}
}

function ranRgb(){
var colors = [
'255, 122, 206',
'0, 157, 255',
'0, 240, 168',
'0, 240, 120'
];

var i = parseInt(Math.random() * 10);

return colors[i];
}

function ranVel(){
var vel = 0;

if(Math.random() < 0.5){
vel = Math.abs(Math.random());
} else {
vel = -Math.abs(Math.random());
}

return vel;
}

// Text

var btnTxt = [
'hehe',
'ouch!',
'sparkles!',
'ooh',
'oooooh',
'ooooooooooh',
'HARDER',
'softer',
'tenderly',
'this is getting weird',
'please stop',
'"gags"',
'woof',
'meow',
'@Lewitje'
];

function changeText(){
if(txtPosition !== btnTxt.length){
btn.innerHTML = btnTxt[txtPosition];
txtPosition += 1;
}
}
