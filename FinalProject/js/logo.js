var INTERVAL;

let note = {
    char: "\u266B",
    x: 10,
    y: 25,
    vy: 0.5,
    size: 24,
    color: "black",
    font: "Arial"
};

function drawNote() {
    const canvas = document.getElementById("logoCanvas");
    const ctx = canvas.getContext("2d");
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.font = `${note.size}px ${note.font}`;
    ctx.fillStyle = note.color;
    ctx.textAlign = "center";
    ctx.textBaseline = "middle";
    ctx.fillText(note.char, note.x, note.y);
}

function start(){
    clearInterval(INTERVAL);
    currentSteps = 0;
    INTERVAL = setInterval(move, 50);
}

function move(){
    if (note.y < 15 || note.y > 30){
        note.vy = -(note.vy);
    }
    note.y += note.vy;
    
    drawNote();
}