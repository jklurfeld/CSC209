  
function moveRed()
{   
    var redSquare = document.getElementById("redSq");   
    var redPos = 0;
    var speed = document.getElementById("redSpeed").value;
    // console.log("speed", speed);
    var stepRedId = setInterval(stepRed, speed); //this  sets the interval to call the function stepRed() every 10 milliseconds

    function stepRed() {
        if (redPos == 350) {
            clearInterval(stepRedId); //this stops the function setInterval() from calling the stepRed() function
        } else {
            redPos++; 
            redSquare.style.top = redPos + 'px'; 
            redSquare.style.left = redPos + 'px';
        }
    }
}

function moveBlue()
{   
    var blueSquare = document.getElementById("blueSq");   
    var bluePos = 350;
    var speed = document.getElementById("blueSpeed").value;
    var stepBlueId = setInterval(stepBlue, speed); //this  sets the interval to call the function stepRed() every 10 milliseconds

    function stepBlue() {
        if (bluePos == 0) {
            clearInterval(stepBlueId); //this stops the function setInterval() from calling the stepRed() function
        } else {
            bluePos--; 
            blueSquare.style.top = bluePos + 'px'; 
            blueSquare.style.left = bluePos + 'px';
        }
    }
}
