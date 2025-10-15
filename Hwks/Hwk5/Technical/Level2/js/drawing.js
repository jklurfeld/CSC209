
function draw(){
    const canvas = document.getElementById("myCanvas");
    const ctx = canvas.getContext("2d");

    points = [
        {
            x: 50,
            y: 50,
            directionX: -1,
            directionY: 0,
            speed: 35,
            color: "blue"
        },
        {
            x: 200,
            y: 50,
            directionX: 1,
            directionY: -1,
            speed: 25,
            color: "red"
        },
        {
            x: 300,
            y: 400,
            directionX: 0,
            directionY: 1,
            speed: 35,
            color: "green"
        }
    ]
    for (let i = 0; i < 3; i++){
        let point = points[i];
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
