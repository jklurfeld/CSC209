  
function move(){   
    for (let i = 0; i < SQUARES.length; i++){
        var sq = document.getElementById("square" + i);
        console.log(sq);
        direction = SQUARES[i][2];
        var pos;
        if (direction == "up" || direction == "down"){
            pos = SQUARES[i][0];
        }
        else {
            pos = SQUARES[i][1];
        }
        moveSq(sq, direction, pos);
    }
}

// this global variable  interval would be defined in the head of the html
// or you could make a flie called global.js where you define your global variables so your html isn't so long
var INTERVAL;
var count;

function moveSq(sq, direction, pos){
    clearInterval(INTERVAL);

    // this is how you pass parameters into the step function
    INTERVAL = setInterval(step, 30, sq, direction, pos);
    count = 0;
}

function step(sq, direction, pos) {
    if (count == 350) {
        clearInterval(INTERVAL); //this stops the function setInterval() from calling the stepRed() function
    } else {
        count++;
        if (direction == "up"){
            pos--;
            sq.style.top = pos + 'px'; 
        }
        else if (direction == "down"){
            pos++;
            sq.style.top = pos + 'px'; 
        }
        else if (direction == "right"){
            pos++;
            sq.style.left = pos + 'px';
        }
        else {
            pos--;
            sq.style.left = pos + 'px';
        }
    }
}

function createSquares(){
    let container = document.getElementById("myContainer");
    for (let i = 0; i < SQUARES.length; i++){
        let sq = document.createElement("div");
        sq.id = "square" + i;
        sq.style.width = "50px";
        sq.style.height = "50px";
        sq.style.position = "absolute";
        sqTop = SQUARES[i][0];
        // console.log(i, "top:", sqTop);
        sq.style.top = SQUARES[i][0] + "px";
        sqLeft = SQUARES[i][1];
        // console.log(i, "left:", sqLeft);
        sq.style.left = SQUARES[i][1] + "px";
        sq.style.backgroundColor = String(SQUARES[i][3]);
        container.appendChild(sq);
    }
}
