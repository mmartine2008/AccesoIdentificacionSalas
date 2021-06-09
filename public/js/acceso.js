function confirmar()
{
	try {
		var canvas = document.getElementById("canvas");
		var context = canvas.getContext("2d");
		var img     = canvas.toDataURL("image/png");
		var imagen = document.getElementById("imagen");
		imagen.value = img;
	}
	catch(err) {
		console.log(err);		
	}	
	
}

$( document ).ready(function() {
    initCanvas(320,240);

    $('#btEnviar').click(confirmar);
});
