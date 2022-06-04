<?php
/* Smarty version 4.1.0, created on 2022-05-15 10:58:53
  from '/home/gent/workspace/Programmierungen/WebsiteDevelopmentTemplate/htdocs/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6280c0cd17bb60_47675935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca342a153ffda207d76c791b9d74641cf28bb2ce' => 
    array (
      0 => '/home/gent/workspace/Programmierungen/WebsiteDevelopmentTemplate/htdocs/index.tpl',
      1 => 1652605126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280c0cd17bb60_47675935 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Beispiel</title>
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
    <?php echo '<script'; ?>
 src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
