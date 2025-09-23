



function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function createSlides(){
  let container = document.getElementById("mySlideshow");
  let str = "";
  for (let i = 0; i < NRIMAGES; i++){
    str += TEMPLATE.replace("NUMBER", (i+1)+"/"+NRIMAGES).replace("PATH", IMAGE[i]).replace("TEXT", DESCRIPTIONS[i]);
  }
  container.innerHTML += str;
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  console.log("slides", slides);
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}

  // makes it so none of the slides display
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  // makes it so none of the dots are active
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // sets the active dot and slide so they display
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}