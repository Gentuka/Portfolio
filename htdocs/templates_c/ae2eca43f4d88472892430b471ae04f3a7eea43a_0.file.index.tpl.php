<?php
/* Smarty version 4.1.0, created on 2022-05-29 07:02:19
  from '/var/www/html/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62931a7b0bf0c0_24517901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae2eca43f4d88472892430b471ae04f3a7eea43a' => 
    array (
      0 => '/var/www/html/index.tpl',
      1 => 1653807736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_62931a7b0bf0c0_24517901 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="de">
  <head>
    <?php $_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
    <div class="container">
      <a href="list.php">List</a>
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
