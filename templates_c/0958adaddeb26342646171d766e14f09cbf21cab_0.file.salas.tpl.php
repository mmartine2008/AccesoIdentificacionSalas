<?php
/* Smarty version 3.1.39, created on 2021-06-13 19:28:43
  from '/var/www/html/templates/salas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c65c6b352fb8_07171751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0958adaddeb26342646171d766e14f09cbf21cab' => 
    array (
      0 => '/var/www/html/templates/salas.tpl',
      1 => 1623612473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c65c6b352fb8_07171751 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/jquery.dataTables.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/main.js'><?php echo '</script'; ?>
>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/jquery.dataTables.min.css'>
</head>
<body>
    <div>
        <div class="d-flex p-2 justify-content-center"><h1>Salas y Eventos Programados por TICs</h1> 
        </div>
        <div class="d-flex p-2 justify-content-center">
            <input type="text" id="id_search" placeholder="Buscar ...">
            <input type="button" id="bt_buscar" value="...">
        </div>
        <div class="d-flex p-2 justify-content-center" id="div_resultados_busqueda">
        </div>        
        <div class="d-flex p-2 justify-content-center">
            <table class="table table-striped" id='id_tabla_resultados'>
            </table>
        </div>        
</div>
</body>
</html><?php }
}
