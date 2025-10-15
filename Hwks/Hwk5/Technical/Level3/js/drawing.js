
function draw(){
    const canvas = document.getElementById("myCanvas");
    const ctx = canvas.getContext("2d");
    ctx.clearRect(0,0,500,500);

    for (let i = 0; i < 3; i++){
        let point = POINTS[i];
        ctx.beginPath();
        ctx.arc(point.x, point.y, 20, 0, 2 * Math.PI);
        ctx.lineWidth = 4;
        ctx.strokeStyle = point.color;
        ctx.stroke();
        
        ctx.moveTo(point.x, point.y);
        ctx.lineTo(point.x + (point.directionX * point.speed), point.y  + (point.directionY * point.speed));
        ctx.stroke();
    }
    
}

function randomize(){
    for (let i = 0; i < 3; i++){
        let randomX = Math.floor(Math.random()*500);
        let randomY = Math.floor(Math.random()*500);
        let randDirX = Math.random()*4 - 2;
        let randDirY = Math.random()*4 - 2;
        let randSpeed = Math.random()*50;
        let point = POINTS[i];
        point.x = randomX;
        point.y = randomY;
        point.directionX = randDirX;
        point.directionY = randDirY;
        point.speed = randSpeed;
    }
    draw();
}
