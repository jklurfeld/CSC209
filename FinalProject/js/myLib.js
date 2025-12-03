function refresh(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        console.log(this.responseText);
      document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../php/refreshTable.php");
    xhttp.send();
}

function deleteUser(index){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("POST", "../php/deleteUser.php?index="+index);
    xhttp.send();
}

function showEditForm(){
    let div = document.getElementById('editDiv');
    div.style.display = 'block';
}

function editUser(index){
    let username = prompt("Enter new username");
    let password = prompt("Enter new password");
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../php/editUser.php?index="+index+"&username="+username+"&password="+password);
    xhttp.send();
}