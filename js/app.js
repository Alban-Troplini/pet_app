// main image slider
var slideIndex = 0;
var slides = document.getElementsByClassName("mimg");

function showSlides() {
  var i;
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

if (typeof(slides) != 'undefined' && slides != null){ 
   showSlides();    
}


//gsap effects

const tl = gsap.timeline({defaults: { ease: "power1.out"}});

tl.to('.titles', { x: 0, duration: 1, delay: 1, ease: "back.inOut(3)"})
    .to('.text', { x: 0, duration: 1, ease: "back.inOut(3)"}, '-=0.5')
    .to('.but', { x: 0, duration: 1, ease: "back.inOut(3)"}, '-=0.5')
    .to('.navbar', { y: 0, duration: 1, ease: "back.inOut(3)"}, '-=1');


// spiner effect 

var spin;


var load = document.getElementById("loader");
var uploads = document.getElementById("upl")

function showPage() {
  load.style.display = "none";
  uploads.style.display = "grid";
}

  function spiner() {
    spin = setTimeout(showPage, 6000);
  }



