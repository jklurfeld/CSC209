function addRow(pt1, pt2){
    let newRow = ROW.replace("CHECKCROSS1", pt1).replace("CHECKCROSS2", pt2);
    document.getElementById("myTable").innerHTML += newRow;
}