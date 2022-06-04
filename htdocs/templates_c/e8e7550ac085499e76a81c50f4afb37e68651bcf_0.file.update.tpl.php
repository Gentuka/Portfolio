<?php
/* Smarty version 4.1.0, created on 2022-05-29 05:15:32
  from '/var/www/html/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6293017468e074_89272420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e7550ac085499e76a81c50f4afb37e68651bcf' => 
    array (
      0 => '/var/www/html/update.tpl',
      1 => 1653801329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_6293017468e074_89272420 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="de">
  <head>
    <?php $_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
    <div class="container">
      <form action="update.php" method="get">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'arr', false, 'key');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
" class="form-control" placeholder=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 title="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <input type="submit" name="update" class="btn btn-primary" value="update">
        </form>
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
