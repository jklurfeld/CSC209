function sort(column){
    if (column == "username"){
        console.log("username");
    }
    else if (column == "password"){
        console.log("password");
    }
    else{
        console.log("loggedtimes");
    }
}

function timeLoggedIn(){
    return 5;
}

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

function editUser(index){
    // const xhttp = new XMLHttpRequest();
    // xhttp.onload = function() {
    //     document.createElement("form");
    //     document.createElement("input")
    //     console.log(this.responseText);
    //     document.getElementById("tableDiv").innerHTML = this.responseText;
    // }
    // xhttp.open("POST", "../php/editUser.php?index="+index);
    // xhttp.send();
    let div = document.getElementById('editDiv');
    div.style.display = 'block';
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("POST", "../php/editUser.php?index="+index);
    xhttp.send();
    // div.innerHTML += "<form class='modal-content animate' action='../php/editUser.php' method='post>\
    // <span onclick=\"document.getElementById('editDiv').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>\
    // <div class=\container\">\
    // <label for=\"username\"><b>Username</b></label>\
    // <input type=\"text\" placeholder=\"Enter New Username\" name=\"username\">\
    // <label for=\"password\"><b>Password</b></label>\
    // <input type=\"password\" placeholder=\"Enter New Password\" name=\"password\">\
    // <input type=\"user\" type=\"hidden\" value=\"index\">\
    // <button type=\"submit\">Submit</button>\
    // </div>\
    // </form>";
}