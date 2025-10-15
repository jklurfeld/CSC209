function addRows(){
    for (let i = 0; i < NRROWS; i++){
        let newRow = ROW.replace("CHECKCROSS1", "fa fa-check").replace("CHECKCROSS2", "fa fa-remove");
        document.getElementById("myTable").innerHTML += newRow;
    }
}