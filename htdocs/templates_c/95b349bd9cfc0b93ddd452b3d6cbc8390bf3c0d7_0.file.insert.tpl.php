<?php
/* Smarty version 4.1.0, created on 2022-05-30 06:53:59
  from '/var/www/html/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62946a07344f62_21919370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b349bd9cfc0b93ddd452b3d6cbc8390bf3c0d7' => 
    array (
      0 => '/var/www/html/insert.tpl',
      1 => 1653801329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_62946a07344f62_21919370 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="de">
  <head>
    <?php $_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
    <div class="container">
      <form action="insert.php" method="get">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'arr');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['arr']->value;?>

            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
" title=<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <input type="submit" name="insert" class="btn btn-primary" value="insert">
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
