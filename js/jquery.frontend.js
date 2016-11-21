
$(document).ready(function(){




$(window).on('resize', function(){
	if($e==1) {
		var m = $('div#menu').height(); 
		var m2 = m-90;
		var m3 = -(m2);
		$('div#menu').css({'top': m3});		
	}
});





/*************************************************************************************************************************
CONDITIONERS
*************************************************************************************************************************/

function setAttsNavUp(){
	$('body').animate({backgroundColor: '#000'}, 300);
	$('div#menu').css({backgroundColor : '#000'});
	$('ul#nav li a').css({color: '#fff'});
	$('ul#nav li a').hover(function(){
		$(this).css({color: '#999'});
	}, function(){
		$(this).css({color: '#fff'});
	});
}

function defs(){
	var m = $('div#menu').height(); 
	var m2 = m-90;
	var m3 = -(m2);
	$('div#menu').css('top', m3);
	setAttsNavUp();	
	$('#container').html('<img src="images/preloader.gif" id="preloader" />');
	$e=1;
}

$e=0;

var hash = $(location).attr('hash');
var spl = hash.split('?');

switch (spl[0]) {

case '#ropa':
	defs();
	$('#container').load('inc/ropa.php');	
	break;
	
case '#calzado':
	defs();
	$('#container').load('inc/calzado.php');	
	break;

case '#bolsas':
	defs();
	$('#container').load('inc/bolsas.php');	
	break;	

case '#joyeria':
	defs();
	$('#container').load('inc/joyeria.php');	
	break;	

case '#lentes':
	defs();
	$('#container').load('inc/lentes.php');	
	break;
	
case '#muebles':
	defs();
	$('#container').load('inc/muebles.php');	
	break;		
}


















/*************************************************************************************************************************
TRIGGER
*************************************************************************************************************************/

$('ul#nav li a').click(function(){
	if ($e==0) {
		var m = $('div#menu').height(); 
		var m2 = m-90;
		var m3 = -(m2);
		$('div#menu').animate({top: m3}, 600, 'easeOutCubic');			
		setAttsNavUp();
		$e=1;
	}
	doc = $(this).attr('rel');	
	$('#container').html('<img src="images/preloader.gif" id="preloader" />');
	$('#container').load('inc/'+doc);	
});









}); /* / document ready */



