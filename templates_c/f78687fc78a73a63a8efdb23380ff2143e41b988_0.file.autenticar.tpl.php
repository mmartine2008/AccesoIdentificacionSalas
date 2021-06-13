<?php
/* Smarty version 3.1.39, created on 2021-06-13 19:57:31
  from '/var/www/html/templates/autenticar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c6632bdd2b88_60055525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78687fc78a73a63a8efdb23380ff2143e41b988' => 
    array (
      0 => '/var/www/html/templates/autenticar.tpl',
      1 => 1623614243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6632bdd2b88_60055525 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <title>Identificación Salas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/jquery.dataTables.min.css'>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/camara.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/jquery-3.6.0.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/bootstrap.bundle.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/jquery.dataTables.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/camcanvas.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/acceso.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/load_captcha.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/camara.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/camcanvas.js"><?php echo '</script'; ?>
>



</head>
<body > 

    <div class="m-2">
        <div class="d-flex justify-content-center"><h1>Identificación para acceso a la sala</h1> 
        </div>
        <div class="d-flex p-2 justify-content-center">
            <div class="d-flex p-2 justify-content-center">
                Nombre de la sala / Evento: <div class="px-2 font-weight-bold"><p id="i_sala_nombre" class="font-weight-bold">Sala 1</p></div>
            </div>
            <div class="d-flex p-2 justify-content-center">
                Responsable / Anfitrión: <div class="px-2 font-weight-bold"><p id="i_sala_nombre" class="font-weight-bold">Virginia Mauco</p></div>
            </div>
        </div>
        <div class="container border">
            
            <form method="post" action="/registrar">
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

                </div>
                <div class="row p-2">
                    <div class="col form-group">								
						<label class="col control-label"><img style="border: 1px solid #D3D0D0" src="/captcha?rand" id="captcha"></label>
						
           				<div class="col">
                            <a 
                                href="javascript:void(0)" 
                                id="reloadCaptcha">
                                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> Recargar codigo
                                <input type="text" name="securityCode" id="securityCode" class="form-control" placeholder="Código de seguridad">                                
                        </div>
                        
                    </div>     
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
</html><?php }
}
