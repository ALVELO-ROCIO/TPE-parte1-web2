<?php
/* Smarty version 4.5.3, created on 2024-10-14 22:40:19
  from 'C:\xampp\htdocs\TPE-parte1-web2\templates\mostrarChocolates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_670d81b31d0822_49331657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2b0457652e67f4341b5c1b1a549ad8e7c38784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-parte1-web2\\templates\\mostrarChocolates.tpl',
      1 => 1728938413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_670d81b31d0822_49331657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
