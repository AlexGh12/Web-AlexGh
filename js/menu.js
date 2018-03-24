$(document).ready(function(){

	var cont = false;

	$('.menu-mini').on('click',function(){
		$('#menu-principal').slideToggle();
	})
});

// =============== Pasado ===============

// $(document).ready(main);
// 	var cont = false;
// function main(){
// 	$('.menu-mini').click(function(){
// 		if(cont == false){
// 			$('#center-menu').animate({
// 				left: '0'
// 			});
// 			cont = true;
// 		} else {
// 			cont = false;
// 			$('#center-menu').animate({
// 				left: '-100%'
// 			});
// 		}
// 	})
// }