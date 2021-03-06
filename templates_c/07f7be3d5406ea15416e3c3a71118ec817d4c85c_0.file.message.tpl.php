<?php
/* Smarty version 3.1.39, created on 2021-06-24 03:44:33
  from '/var/www/html/templates/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d3ffa1738b41_31193438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f7be3d5406ea15416e3c3a71118ec817d4c85c' => 
    array (
      0 => '/var/www/html/templates/message.tpl',
      1 => 1624505726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d3ffa1738b41_31193438 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Identificación Salas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/jquery-3.6.0.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/bootstrap.bundle.min.js'><?php echo '</script'; ?>
>

    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/jquery.dataTables.min.css'>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/camara.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex p-2"><h2>Salas y Eventos Programados por TICs</h2>
        </div>
        <hr>
        <div class="d-flex p-2 justify-content-center">
            <?php if ($_smarty_tpl->tpl_vars['errorlevel']->value == 1) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['errorlevel']->value == 0) {?>
                <div class="alert alert-primary" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            <?php }?>
        </div>
        <div class="d-flex p-2 justify-content-center">
            <?php if ($_smarty_tpl->tpl_vars['errorlevel']->value == 0) {?>
            <div>
                <a class="btn btn-success" href="/salas">Continuar</a>
            </div>
            <?php } else { ?>
            <div>
                <a class="btn btn-danger" href="/salas">Volver</a>
            </div>
            <?php }?>
        </div>

    </div>
</body>
</html>
<?php }
}
