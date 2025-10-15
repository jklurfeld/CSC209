
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

function reset(){
    for (let i = 0; i < NRPOINTS; i++){
        let point = POINTS[i];
        point.x -= point.directionX*currentSteps;
        point.y -= point.directionY*currentSteps;
    }
    currentSteps = 0;
    draw();
}

function randomize(){
    for (let i = 0; i < NRPOINTS; i++){
        let randomX = Math.floor(Math.random()*500);
        let randomY = Math.floor(Math.random()*500);
        let randDirX = Math.random()*4 - 2;
        let randDirY = Math.random()*4 - 2;
        let randSpeed = Math.random()*50;
        let color = Math.floor(Math.random()*6);
        let point = POINTS[i];
        point.x = randomX;
        point.y = randomY;
        point.directionX = randDirX;
        point.directionY = randDirY;
        point.speed = randSpeed;
        point.color = COLORS[color];
    }
    draw();
}

function createPoints(n){
    for (let i = 0; i < n; i++){
        POINTS.push({});
    } 
}

function start(){
    clearInterval(INTERVAL);
    currentSteps = 0;
    INTERVAL = setInterval(move, 50);
}

function move(){
    currentSteps++;
    let temp = document.getElementById("temp").value;
    let speed;
    if (temp == "low"){
        speed = 1;
    }
    else if (temp == "medium"){
        speed = 1.5;
    }
    else{
        speed = 2;
    }
    for (let i = 0; i < NRPOINTS; i++){
        point = POINTS[i];

        if (point.x < 0 || point.x > 500){
            point.directionX = -(point.directionX);
        }
        if (point.y < 0 || point.y > 500){
            point.directionY = -(point.directionY);
        }
        point.x += point.directionX * speed;
        point.y += point.directionY * speed;
    }
    draw();
}