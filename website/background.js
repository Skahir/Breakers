var color = ["#840000", "#008400", "#000084"]

function randNum(){
	return Math.floor(Math.random() * 3);
}

var c = document.createElement('canvas');      
    ctx = c.getContext('2d');
    cw = c.width = 3;
    ch = c.height = 3;

for( var x = 0; x < cw; x++ ){
    for( var y = 0; y < ch; y++ ){
        ctx.fillStyle = color[randNum()];
        ctx.fillRect(x, y, 1, 1);
    }
}

document.body.style.background = 'url(' + c.toDataURL() + ')';