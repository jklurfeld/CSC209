  
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

function moveSq(sq, direction, pos){
    var count = 0;
    var stepId = setInterval(step, 30);
    
    function step() {
        if (count == 350) {
            clearInterval(stepId); //this stops the function setInterval() from calling the stepRed() function
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
