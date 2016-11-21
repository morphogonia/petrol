
<div id="anuncio">
	<img src="images/preloader.gif" />
	<p id="pcargando"></p>
</div>

<div id="fotos"></div>
<div id="anterior"></div>

<?php 
include('conection.inc');
include('footer.inc'); 
?>

<script type="text/javascript">
$(document).ready(function(){


/*************************************************************************** 
- FUNCIONES -
/**************************************************************************/

function galeria(){
	$('#fotos img#id'+count).show();
	$('#fotos img#id'+count).css({
		'-webkit-animation' : 'loop_frames_in 1.4s',
		'-webkit-animation-direction': 'alternate',
	});
}

ac=0;
function carga(){	
	$('#pcargando').text('Cargando '+ac+' / '+fotos.length);
	var cImg = 'fotos/' + fotos[ac];
	var vimg = new Image();
	$(vimg).load(function () {		
		$('#fotos').append('<img src="'+cImg+'" id="id'+ac+'" />');
		if(ac<(fotos.length-1)) {
			ac++;
			carga();
		} else {
			$('#anuncio').fadeOut(300);
			galeria();
		}
	}).attr('src', cImg);
}

/*************************************************************************** 
- SETTINGS -
/**************************************************************************/

var hashb = $(location).attr('hash');
var splb = hashb.split('=');
count = splb[1];
if (count==null) {
	var count=0;
}

var fotos=[];
$(function(){
	$.ajax({                                      
		url: 'inc/data.php',
		data: 'id=6',
		dataType: 'json',
		success: function(data) {
			$.each(data, function() {
				fotos.push(this['image']);		
			});
			carga();
     	} 
    });
}); 

/*************************************************************************** 
- TRIGGERS -
/**************************************************************************/

$('#fotos').click(function(){
	$('#fotos img').hide();
	count++;
	if(count>=fotos.length) {
		count=0;
	}
	document.location.href='#muebles?cimg='+count;
	galeria();
});

$('#anterior').click(function(){
	$('#fotos img').hide();
	count--;
	if(count<0) {
		count=(fotos.length)-1;
	}
	document.location.href='#muebles?cimg='+count;
	galeria();
});



}); /* / document ready */
</script>














