<?php
/* Smarty version 4.5.3, created on 2024-10-11 22:51:40
  from 'C:\xampp\htdocs\TPE-parte1-web2\templates\mostrarCombosPorChocolates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67098fdccbeca2_87691853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a672542e1fafbc1cc141c72bd87a1e1df0b8c8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-parte1-web2\\templates\\mostrarCombosPorChocolates.tpl',
      1 => 1728679888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67098fdccbeca2_87691853 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Combos</title>
</head>
<body>
    <header">
        <h1>Listado de combos</h1>
    </header>

<main>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['combos']->value, 'combo');
$_smarty_tpl->tpl_vars['combo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['combo']->value) {
$_smarty_tpl->tpl_vars['combo']->do_else = false;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['combo']->value->NOMBRE;?>
</h3>
            <a href="index.php?action=detallescombo/<?php echo $_smarty_tpl->tpl_vars['combo']->value->ID;?>
">Ver Detalles</a>
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
