function toggleMenu(){
    if (document.getElementById("myNav").style.width == "100%"){
        document.getElementById("myNav").style.width = "0%";
    }
    else{
        document.getElementById("myNav").style.width = "100%";
    }
}

function createLinks(){
    let div = document.getElementById("linkDiv");
    for (i = 0; i < NRPROJECTS; i++){
        let link = document.createElement("a");
        link.setAttribute("href", LINKS[i]);
        link.innerHTML = NAMES[i];
        div.appendChild(link);
    }
}