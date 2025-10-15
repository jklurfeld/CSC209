
function draw(){
    const canvas = document.getElementById("myCanvas");
    const ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, 500, 500);

    for (let i = 0; i < NRPOINTS; i++){
        let point = POINTS[i];
        ctx.beginPath();
        ctx.arc(point.x, point.y, 20, 0, 2 * Math.PI);
        ctx.lineWidth = 4;
        ctx.strokeStyle = point.color;
        ctx.stroke();
        
        ctx.moveTo(point.x, point.y);
        ctx.lineTo(point.x + (point.directionX * 20), point.y  + (point.directionY * 20));
        ctx.stroke();
    }
}

function drawNPoints(){
    let num = document.getElementById("num").value;
    if (num > NRPOINTS){
        let newPts = num-NRPOINTS;
        createPoints(newPts);
    }
    NRPOINTS = num;
    randomize();
    draw();
}

function randomize(){
    for (let i = 0; i < NRPOINTS; i++){
        let randomX = Math.floor(Math.random()*500);
        let randomY = Math.floor(Math.random()*500);
        let randDirX = Math.random()*4 - 2;
        let randDirY = Math.random()*4 - 2;
        // let randSpeed = Math.random()*50;
        let color = Math.floor(Math.random()*6);
        let point = POINTS[i];
        point.x = randomX;
        point.y = randomY;
        point.directionX = randDirX;
        point.directionY = randDirY;
        // point.speed = randSpeed;
        point.color = COLORS[color];
    }
    draw();
}

function createPoints(n){
    for (let i = 0; i < n; i++){
        POINTS.push({});
    } 
}

// for level 7, call onchange for the selection of the number so that every time the variable changes, the points update and it updates NRPOINTS  and calls draw for that number of points

// for level 8, it's okay to store the original position, or you can undo (subtract) the number of steps from the x and y for each point

// for level 9, use mod: if the currentSteps % 5 or 10 is 0, then push to the array
// if you uncheck trace, it should undraw the trace first
// you don't need to store the velocity, you only need the position so you can just have an array of arrays that are x, y coordinates

// inside step, update all of the points and then draw all of them

// this global variable  interval would be defined in the head of the html
// or you could make a file called global.js where you define your global variables so your html isn't so long

function start(){
    currentSteps = 0;
    clearInterval(INTERVAL);
    INTERVAL = setInterval(move, 50);
}

function move(){
    if (currentSteps == NRSTEPS){
        clearInterval(INTERVAL);
    }
    currentSteps++;
    for (let i = 0; i < NRPOINTS; i++){
        point = POINTS[i];
        // update point position
        point.x += point.directionX;
        point.y += point.directionY;
    }
    draw();
}