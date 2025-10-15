function addRow(name, pt1, pt2){
    let table = document.getElementById("myTable");
    let row = document.createElement("tr");
    let td1 = document.createElement("td");
    td1.innerHTML = name;

    let td2 = document.createElement("td");
    let td2text = document.createElement("i");
    td2text.setAttribute("class", pt1);
    td2.appendChild(td2text);

    let td3 = document.createElement("td");
    let td3text = document.createElement("i");
    td3text.setAttribute("class", pt2);
    td3.appendChild(td3text);

    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);
    table.appendChild(row);
}

function addRows(){
    for (let i = 0; i < NRROWS; i++){
        addRow(NAMES[i], PART1[i], PART2[i]);
    }
}