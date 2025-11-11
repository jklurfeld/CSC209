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
    xhttp.open("GET", "../php/script.php");
    xhttp.send();
}