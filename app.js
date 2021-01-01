// main image slider
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mimg");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

//gsap effects

const tl = gsap.timeline({defaults: { ease: "power1.out"}});

tl.to('.titles', { x: 0, duration: 1, delay: 1, ease: "back.inOut(3)"})
    .to('.text', { x: 0, duration: 1, ease: "back.inOut(3)"}, '-=0.5')
    .to('.but', { x: 0, duration: 1, ease: "back.inOut(3)"}, '-=0.5')
    .to('.navbar', { y: 0, duration: 1, ease: "back.inOut(3)"}, '-=1');


// spiner effect 

var myVar;

function spiner() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementsByClassName("loader").style.display = "none";
  document.getElementsByClassName(".card").style.display = "block";
}