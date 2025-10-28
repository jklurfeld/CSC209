
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function createSlides(){
  let container = document.getElementById("mySlideshow");
  for (let i = 0; i < NRIMAGES; i++){
    let slideDiv = document.createElement("div");
    slideDiv.setAttribute("class", "mySlides fade"); //can't set attribute twice b/c it will overwrite

    let numberDiv = document.createElement("div");
    numberDiv.setAttribute("class", "numbertext");
    let number = document.createTextNode((i+1)+"/"+NRIMAGES);
    numberDiv.appendChild(number);

    let image = document.createElement("img");
    image.setAttribute("src", IMAGE[i]);
    image.setAttribute("style", "width:100%");

    let textDiv = document.createElement("div");
    textDiv.setAttribute("class", "text");
    let text = document.createTextNode(DESCRIPTIONS[i]);
    textDiv.appendChild(text);

    slideDiv.appendChild(numberDiv);
    slideDiv.appendChild(image);
    slideDiv.appendChild(textDiv);
    container.appendChild(slideDiv);
  }
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
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