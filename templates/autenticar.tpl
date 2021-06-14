<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <title>Identificación Salas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='{$base_url}/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='{$base_url}/css/jquery.dataTables.min.css'>
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/camara.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src='{$base_url}/js/jquery-3.6.0.min.js'></script>
    <script src='{$base_url}/js/bootstrap.bundle.min.js'></script>
    <script src='{$base_url}/js/jquery.dataTables.min.js'></script>
    <script src="{$base_url}/js/camcanvas.js"></script>    
    <script src="{$base_url}/js/acceso.js"></script>  
    <script src="{$base_url}/js/load_captcha.js"></script>
    
    <script src="{$base_url}/js/camara.js"></script>
    <script src="{$base_url}/js/camcanvas.js"></script>



</head>
<body > 

    <div class="m-2">
        <div class="d-flex justify-content-center"><h1>Identificación para acceso a la sala</h1> 
        </div>
        <div class="d-flex p-2 justify-content-center">
            <div class="d-flex p-2 justify-content-center">
                Nombre de la sala / Evento: <div class="px-2 font-weight-bold"><p id="i_sala_nombre" class="font-weight-bold">{$nombre}</p></div>
            </div>
            <div class="d-flex p-2 justify-content-center">
                Responsable / Anfitrión: <div class="px-2 font-weight-bold"><p id="i_sala_nombre" class="font-weight-bold">{$responsable}</p></div>
            </div>
        </div>
        <div class="container border">
            
            <form method="post" action="/registrar">
                <input name="id_sala"  type="hidden" value="{$sala_id}">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="apellido">Apellido *</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="apellido"
                                id="apellido" aria-describedby="emailHelp" placeholder="Apellido" >
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres *</label>
                            <input 
                                name="nombres"
                                type="text" class="form-control" id="nombres" placeholder="Nombres" >
                        </div>
                        <div class="form-group">
                            <label for="documento">Documento *</label>
                            <input 
                                name = "documento"
                                type="text" class="form-control" id="documento" placeholder="Documento" >
                        </div>
                    </div>
                    <div class="col p-2"> 
                        <div class="form-group">
                            <div>
                                <div style="width: 320px; height: 240px;">
                                    <div id="promoNode"></div>
                                    <div>
                                    <video id="video" class="video" autoplay width="320" height="240" ></video>
                                    <canvas id="canvas" class="video" hidden></canvas>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>   
                </div>             
                <div class="row">
                    <div class="col form-group">
                        <label for="Ayuda">Ingrese la información solicitada, capture una imagen clara de su rostro con la cámara de su dispositivo desde este formulario. Una vez finalizado oprima el botón “ACREDITARME” y recibirá un mail con el enlace de acceso. El registro quedará disponible para el anfitrión.</label>
                    </div>
                </div>             
                <div class="row">
                    <div class="col form-group">
                        <label for="email">Email *</label>
                        <input 
                            name="email"
                            type="email" class="form-control" id="email" placeholder="email" >
                    </div>
                    <div class="col form-group">
                        <label for="email">Celular *</label>
                        <input 
                            name="celular"
                            type="text" class="form-control" id="celular" placeholder="(cod area) numero" >
                    </div>
                    <div class="col form-group">								
						<label class="col control-label"><img style="border: 1px solid #D3D0D0" src="/captcha?rand" id="captcha"></label>
						
           				<div class="col justify-content-center">
                            <a 
                                href="javascript:void(0)" 
                                id="reloadCaptcha">
                                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> Recargar codigo
                                <input type="text" name="securityCode" id="securityCode" class="form-control" placeholder="Código de seguridad">                                
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col justify-content-center ">
                        <input name="imagen" id="imagen" size="307200" maxlength="307200" type="hidden">
                        
                        <button type="submit" class="btn btn-primary" id="btEnviar">Acreditarme</button>
                    </div>               
                </div>

            </form>
            </div>
        </div>
       
</div>
</body>
</html>