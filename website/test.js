var canvas = document.getElementById('maze');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// canvas.width = e.target.outerWidth;
// canvas.height = e.target.outerHeight;

var canvas = canvas.getContext('2d');

var x = 200;
var y = 200;
var vx = 4;
var vy = 4;
var radius = 20;

function animate(){
	requestAnimationFrame(animate);
	canvas.clearRect(0, 0, innerWidth, innerHeight);
	
	canvas.beginPath();
	canvas.arc(x, y, radius, 0, Math.PI * 2, false);
	canvas.strokeStyle = '#3e74c1';
	canvas.stroke();

	if (x + radius >= innerWidth || x - radius <= 0){
		vx = -vx;
	}
	if (y + radius >= innerHeight || y - radius <= 0){
		vy = -vy;
	}


	y += vy;
	x += vx;
}

// canvas.fillRect(100, 100, 100, 100);

animate();


