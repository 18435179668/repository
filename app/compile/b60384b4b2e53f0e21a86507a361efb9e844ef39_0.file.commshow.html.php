<?php
/* Smarty version 3.1.30, created on 2017-04-11 03:48:04
  from "C:\wamp\www\app\template\index\commshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec35d48c5c75_53346511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b60384b4b2e53f0e21a86507a361efb9e844ef39' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\index\\commshow.html',
      1 => 1491875282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec35d48c5c75_53346511 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
<meta name="viewport" content="width=device-width,initial-scale=0.5,minimum-scale=0.5,maximum-scale=0.5,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css">
</head>
<body>
    <div class="ywm-header">
    <img src="<?php echo IMG_PATH;?>
/hearder.png" alt="" class="header-img">
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['c']->value["cimgurl"];?>

        <?php echo $_smarty_tpl->tpl_vars['c']->value["ctitle"];?>

        <a href="index.php?m=index&f=comm&cid=<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value["cname"];?>
</a>
        <?php echo $_smarty_tpl->tpl_vars['c']->value["chit"];?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <!-- 选项卡 -->
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/index.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
