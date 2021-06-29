<?php
/* Smarty version 3.1.39, created on 2021-06-24 03:34:00
  from '/var/www/html/templates/autenticar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d3fd28423708_30764403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78687fc78a73a63a8efdb23380ff2143e41b988' => 
    array (
      0 => '/var/www/html/templates/autenticar.tpl',
      1 => 1624505638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d3fd28423708_30764403 (Smarty_Internal_Template $_smarty_tpl) {
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
/js/tooltip.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/camara.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/camcanvas.js"><?php echo '</script'; ?>
>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>
    

</head>
<body >
    <div class="m-2">
        <div class="container d-flex "><h2>Identificación para acceso a la sala</h2>
        </div>
        <div class="container d-flex datos-sala" >
            <div class="izquierda d-flex">
              Nombre de la sala: <p id="i_sala_nombre" class="font-weight-bold"> <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</p>
            </div>
            <div class="derecha d-flex">
              Responsable: <p id="i_sala_nombre" class="font-weight-bold"> <?php echo $_smarty_tpl->tpl_vars['responsable']->value;?>
</p>
            </div>
        </div>
        <div class="container">
          <hr>
        </div>
        <div class="container">

            <div class="alert alert-primary" role="alert">
                Completa este formulario para acreditarte. Recibirás en <b>tu mail</b> (el declarado en este formulario) el link de acceso al final <b>una hora antes</b> del examen.
            </div>


            <form method="post" action="/registrar">
                <input name="id_sala"  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sala_id']->value;?>
">
                <div class="row">
                        <div class="col-lg-8">
                              <div class="form-group row">
                                    <label for="apellido" class="col-sm-2 col-form-label">Apellido *</label>
                                    <div class="col-sm-10">
                                      <input   type="text"  class="form-control"   name="apellido"    id="apellido" aria-describedby="emailHelp" placeholder="García" >
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nombres" class="col-sm-2 col-form-label">Nombres *</label>
                                    <div class="col-sm-10">
                                    <input
                                        name="nombres"
                                        type="text" class="form-control" id="nombres" placeholder="Juana María" >
                              </div></div>
                              <div class="form-group row">
                                  <label for="documento" class="col-sm-2 col-form-label">Documento *</label>
                                  <div class="col-sm-10">
                                  <input
                                      name = "documento"
                                      type="text" class="form-control" id="documento" placeholder="18568997" >
                              </div></div>
                              <div class="form-group row">
                                  <label for="email" class="col-sm-2 col-form-label">Email *</label>
                                  <div class="col-sm-10">
                                  <input
                                      name="email"
                                      type="email" class="form-control" id="email" placeholder="jmgarcia@gmail.com" >
                              </div></div>
                              <div class="form-group row">
                                  <label for="email" class="col-sm-2 col-form-label">Celular</label>
                                  <div class="col-sm-10">
                                  <input
                                      name="celular"
                                      type="text" class="form-control" id="celular" placeholder="2494123456" >
                              </div></div>
                              <div class="form-group row">
          						                

                     		     <div class="col-sm-6">
						<label class="control-label" style="display: block;"><img  src="/captcha?rand" id="captcha" width="100%"></label>

                                    </div>
                     		     <div class="col-sm-6">
					
                                      <a
                                          href="javascript:void(0)"
                                          id="reloadCaptcha">
                                          <small id="passwordHelpBlock" class="form-text text-muted"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                                            Recargar el código
                                          </small>
                                          </a>
                                          <br>
                                          <input type="text" name="securityCode" id="securityCode" class="form-control" placeholder="Código de seguridad" style="margin-top:5px;">
                                  </div>

                              </div>




                      </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                          <label for="imagen" class="col-form-label imagen">Foto personal *</label>
                            <div>
                                <div style="width: 100%; height: auto;">
                                    <div id="promoNode"></div>
                                    <div>
                                    <video id="video" class="video" autoplay width="100%" height="auto" poster="img/dni.png"></video>
                                    <canvas id="canvas" class="video" hidden></canvas>
                                    </div>
                                </div>
                             </div>
                             <div id="photoHelpBlock">
                             <small  class="form-text text-muted">
                               Capture una imagen clara en la que se vea su rostro y su DNI. <a data-toggle="tooltip" data-placement="bottom" data-html="true" title="<img src='img/dni.png' width='100%'/>">
        Ver ejemplo
      </a></small></div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>

                
                    <div class=" justify-content-center ">
                        <input name="imagen" id="imagen" size="307200" maxlength="307200" type="hidden">

                        <button type="submit" class="btn btn-primary grow" id="btEnviar">Acreditarme</button>
                    </div>
                




            </form>


            </div>

        </div>

</div>
</body>
</html>
<?php }
}
