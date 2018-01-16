var canvas = document.getElementById('dodge');

canvas.width = 1350;
canvas.height = 650;

var canvas = canvas.getContext('2d');

var playerY = 0;
var playerX = 0;

var squares = [];

window.addEventListener("keydown", keysDown, false);
window.addEventListener("keyup", keysUp, false);
 
var upPressed = false;
var downPressed = false;

function drawTriangle(){
	canvas.beginPath();
	canvas.lineWidth = 2;
	canvas.strokeStyle = "#3dff3d";
	canvas.moveTo(200 + playerX, 280 + playerY);
	canvas.lineTo(240 + playerX, 300 + playerY);
	canvas.lineTo(200 + playerX, 320 + playerY);
	canvas.closePath();
	canvas.stroke();
}

function Square(sqrX, sqrY, radius, speed){
	this.sqrX = sqrX;
	this.sqrY = sqrY;
	this.radius = radius;
	this.speed = speed;
}

function drawSquare(sqrX, sqrY, radius){
	canvas.beginPath();
	canvas.lineWidth = 2;
	canvas.strokeStyle = "#ca1eff";
	canvas.rect(sqrX, sqrY, radius, radius);
	canvas.closePath();
	canvas.stroke();
}

function setupSquares(){
	for (var i = 1; i <= 3; i++) {
        var sqrX = 1350;
        var sqrY = Math.round(0 + Math.random() * 650);
        var speed = Math.round(1 + Math.random() * 3);
        var radius = Math.round(20 + Math.random() * 20);
 
        var square = new Square(sqrX, sqrY, radius, speed);
        squares.push(square);
    }
}

function keysDown(e) {
    // change the coordinates when pressed
    // down
    if (e.keyCode == 38) {
    	downPressed = true;
    	playerY -= 5;
    }
    // up
    else if (e.keyCode == 40) {
    	upPressed = true;
    	playerY += 5;
    }
}

function keysUp(e) {
    // update keys that are released
    if(e.keyCode == 38){
    	upPressed = false;
    }
    else if (e.keyCode == 40){
    	downPressed = false;
    }
}

function draw(){
	canvas.clearRect(0, 0, 1350, 650);
	drawTriangle();
	setupSquares();
	square();
	drawSquare();


}

setInterval(draw, 10);