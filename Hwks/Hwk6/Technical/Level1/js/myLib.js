function createImages(){
    for (let i = 0; i < images.length; i++){
        let image = document.createElement("img");
        image.setAttribute("src", images[i]);
        image.setAttribute("style", "width:30%");
        document.body.appendChild(image);
    }
}