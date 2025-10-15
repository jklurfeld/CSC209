function addRow(name, pt1, pt2){
    let newRow = ROW.replace("NAME", name).replace("CHECKCROSS1", pt1).replace("CHECKCROSS2", pt2);
    document.getElementById("myTable").innerHTML += newRow;
}

function addRows(){
    for (let i = 0; i < NRROWS; i++){
        addRow(NAMES[i], PART1[i], PART2[i]);
    }
}