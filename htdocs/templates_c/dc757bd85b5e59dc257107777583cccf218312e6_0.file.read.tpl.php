<?php
/* Smarty version 4.1.0, created on 2022-05-29 05:15:34
  from '/var/www/html/read.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62930176e88ce2_48351433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc757bd85b5e59dc257107777583cccf218312e6' => 
    array (
      0 => '/var/www/html/read.tpl',
      1 => 1653801329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_62930176e88ce2_48351433 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="de">
  <head>
    <?php $_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
    <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'arr', false, 'key');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
 <br>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php echo '<script'; ?>
 src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/script.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
