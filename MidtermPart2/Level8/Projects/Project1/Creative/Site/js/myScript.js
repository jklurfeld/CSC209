function showAnswer(id){
    let ans = document.getElementById(id);
    let display = window.getComputedStyle(ans).display;
    if (display == "none"){
        ans.style.display = "block";
    }
    else{
        ans.style.display = "none";
    }
}

function collapseAll(){
    let ans;
    for (let i =0; i < 4; i++){
        ans = document.getElementById(i);
        ans.style.display = "none";
    }
}

function showAll(){
    let ans;
    for (let i =0; i < 4; i++){
        ans = document.getElementById(i);
        ans.style.display = "block";
    }
}