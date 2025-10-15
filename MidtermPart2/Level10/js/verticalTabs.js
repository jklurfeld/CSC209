function openTab(evt, id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(id).style.display = "block";
    evt.currentTarget.className += " active";
}

function createTabs(){
    let contentDiv = document.getElementById("contentDiv");
    let linkDiv = document.getElementById("linkDiv");

    for (let i = 0; i < NRTABS; i++){
        // create the button and append it to the linkDiv
        let button = document.createElement("button");
        button.setAttribute("class", "tablinks");
        let func = "openTab(event, '" + CITIES[i] + "')";
        button.setAttribute("onclick", func);
        button.innerHTML = CITIES[i];
        if (i == 0){
            button.setAttribute("id", "defaultOpen");
        }
        linkDiv.appendChild(button);
        
        // create the content for the tab and append it to the cityDiv and then the contentDiv
        let cityDiv = document.createElement("div");
        cityDiv.setAttribute("id", CITIES[i]);
        cityDiv.setAttribute("class", "tabcontent");

        let heading = document.createElement("h3");
        heading.innerHTML = CITIES[i];
        let paragraph = document.createElement("p");
        paragraph.innerHTML = CITIES[i] + " is the capital of " + COUNTRIES[i];

        cityDiv.appendChild(heading);
        cityDiv.appendChild(paragraph);
        contentDiv.appendChild(cityDiv);
    }
}