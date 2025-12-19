function refresh(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../php/scripts/refreshTable.php");
    xhttp.send();
}

function deleteUser(index){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("POST", "../php/scripts/deleteUser.php?index="+index);
    xhttp.send();
}

// for deleting past performances
function deletePost(index){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("ppDiv").innerHTML = this.responseText;
    }
    xhttp.open("POST", "../php/scripts/deletePost.php?index="+index);
    xhttp.send();
}

function deleteUpcomingPost(index){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("upDiv").innerHTML = this.responseText;
    }
    xhttp.open("POST", "../php/scripts/deleteUpcomingPost.php?index="+index);
    xhttp.send();
}

function editUser(index){
    let username = prompt("Enter new username");
    let password = prompt("Enter new password");
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("tableDiv").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../php/scripts/editUser.php?index="+index+"&username="+username+"&password="+password);
    xhttp.send();
}

function editUsername(username){
    let newUsername = prompt("Enter new username");
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("hello").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../php/scripts/editUsername.php?username="+username+"&newUsername="+newUsername);
    xhttp.send();
}

function editPost(index, type){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("modalBody").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../php/scripts/getPostContent.php?index="+index+"&type="+type);
    xhttp.send();
}

function addComment(){
    let comment = document.getElementById("commentBox").value;
    let file = document.getElementById("file").value;
    let user = document.getElementById("username").value;
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("commentBox").value = "";
        document.getElementById("commentDiv").innerHTML = this.responseText;
    }
    xhttp.open("POST", "../php/scripts/addComment.php?comment="+comment+"&file="+file+"&user="+user);
    xhttp.send();
}