$(document).ready(function(){
	


		let guess = 0;
		let selectedColor = '';
		//$('.submit').hide();
		let Klik = 0;
		let selectie = false;
		//let antwoord = makeAnswer();
		let gokarray 	= $('.cirkel');
		let cirkelplaats		= [];

		for(let i = 9; i >= 0; i--){
			cirkelplaats.push(gokarray[i]);
		}

	




		for(let i = 0; i < 10; i++){
			let guess = cirkelplaats[i].getElementsByClassName("cirkel");
			for(let j = 0; j < 4; j++){
				$(cirkelplaats[j]).attr('id', `g-${i}-${j}`);
	
			}
		}




		$('.submit').click(function(){
			$('.active').removeClass('active');
			guess++;
			for(let i = 0; i < 4; i++) {
 				$(`.c`+guess).addClass('active');
 					$('.submit').show();}
		});








	$('.selector-kleurbinnekant').click(function (){
		selectie = true;
		$('.selector-zwartrondje').css('background-color', 
		'grey');
	let peg = ($(this).parent())[0];
	selectedColor = 
	$(this).css('background-color');
	$(peg).css('background-color', selectedColor);
	});


	$('.cirkel').click(function(){	 
		if($(this).hasClass('active')) {		
		
			$(this).css('background', 'none');
			$(this).css('background-color', selectedColor);
			$(this).css('border', '1px solid white');
		}
	});

	});
	