<?php
/* Smarty version 3.1.39, created on 2021-06-24 03:32:12
  from '/var/www/html/templates/salas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d3fcbcd93645_44535436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0958adaddeb26342646171d766e14f09cbf21cab' => 
    array (
      0 => '/var/www/html/templates/salas.tpl',
      1 => 1624505530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d3fcbcd93645_44535436 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
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
 src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/js/main.js'><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/camara.css">

    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/css/jquery.dataTables.min.css'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>
</head>
<body>
    <?php echo '<script'; ?>
>
        dataSet = '<?php echo $_smarty_tpl->tpl_vars['salas']->value;?>
'
        dataSet = JSON.parse(dataSet);
        actualizaTabla();
    <?php echo '</script'; ?>
>

    <div class="container">
        <div class="d-flex p-2"><h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
        </div>
        <hr>
        <div class="d-flex p-2 justify-content-center" id="div_resultados_busqueda">
        </div>
        <div class="p-2 justify-content-center">
            <table class="table table-striped" id='id_tabla_resultados'>
            </table>
        </div>
</div>
</body>
</html>
<?php }
}
