function changeImage(){
    for (let i = 0; i < images.length; i++){
        let imgId = images[i].substr(9, images[i].length-13);
        let image = document.getElementById(imgId);
        image.setAttribute("style", "display:none");
    }
    let selectElement = document.getElementById("imageSelect");
    let selectedVal = selectElement.value;
    if (selectedVal != "none"){
        let selectedImg = document.getElementById(selectedVal);
        selectedImg.setAttribute("style", '');
    }
}