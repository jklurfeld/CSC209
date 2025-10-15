
function draw(){
    const canvas = document.getElementById("myCanvas");
    const ctx = canvas.getContext("2d");

    // x, y of point, x and y of arrow, velocity

    points = [
        {
            x: 50,
            y: 50,
            directionX: -1,
            directionY: 0,
            speed: 35
        }
    ]
    
    ctx.beginPath();
    ctx.arc(points[0].x, points[0].y, 20, 0, 2 * Math.PI);
    ctx.lineWidth = 4;
    ctx.strokeStyle = "blue";
    ctx.stroke();
    
    ctx.moveTo(points[0].x, points[0].y);
    let x = points[0].x + (points[0].directionX * points[0].speed);
    // console.log(x);
    let y = points[0].y  + (points[0].directionY * points[0].speed);
    // console.log(y);
    ctx.lineTo(x,y);
    ctx.stroke();
}
