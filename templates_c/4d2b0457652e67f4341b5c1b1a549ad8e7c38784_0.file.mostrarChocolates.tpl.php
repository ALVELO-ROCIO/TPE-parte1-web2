<?php
/* Smarty version 4.5.3, created on 2024-10-11 22:44:18
  from 'C:\xampp\htdocs\TPE-parte1-web2\templates\mostrarChocolates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67098e226f3d00_75641314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2b0457652e67f4341b5c1b1a549ad8e7c38784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-parte1-web2\\templates\\mostrarChocolates.tpl',
      1 => 1728678507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67098e226f3d00_75641314 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Choco</title>
</head>
<body>
    <header">
        <h1>Listado de Chocos</h1>
    </header>

<main>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chocolates']->value, 'choco');
$_smarty_tpl->tpl_vars['choco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['choco']->value) {
$_smarty_tpl->tpl_vars['choco']->do_else = false;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['choco']->value->SABOR;?>
</h3>
            <p>Relleno: <?php echo $_smarty_tpl->tpl_vars['choco']->value->RELLENO;?>
</p>
            <p>Empaque: <?php echo $_smarty_tpl->tpl_vars['choco']->value->EMPAQUE;?>
</p>
            <a href="index.php?action=combosporchocolate/<?php echo $_smarty_tpl->tpl_vars['choco']->value->ID;?>
">Ver todos los combos por chocolate</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</main>

    <footer>
        <p>&copy; 2024 ChocoAras</p>
    </footer>
</body>
</html><?php }
}
