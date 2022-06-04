<?php
/* Smarty version 4.1.0, created on 2022-05-30 07:40:49
  from '/var/www/html/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629475014b42f5_55817931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e19e0a7a5e12b5753f9327e2ac521ffaa5938b' => 
    array (
      0 => '/var/www/html/list.tpl',
      1 => 1653896447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_629475014b42f5_55817931 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="de">
  <head>
    <?php $_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
    <div class="container">
      <form method="GET" action="">
        <table class="table">
          <thead>
            <tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                <th scope="col"><?php echo $_smarty_tpl->tpl_vars['column']->value;?>
</th>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'arr');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['test'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['gent'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['teot'];?>
</td>
              <td>
                <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">delete</a>
                <a href="update.php?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">update</a>
                <a href="read.php?id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">read</a>
              </td>
            </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </form>
      <a href="insert.php">insert</a>
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
