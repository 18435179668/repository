<?php
/* Smarty version 3.1.30, created on 2017-04-06 09:00:45
  from "C:\wamp\www\app\template\admin\addcon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e5e79da88440_87967351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f52595a394d86c74e768d28d6e68cec31ff87c' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\addcon.html',
      1 => 1491461968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e5e79da88440_87967351 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<body>
<form action="index.php?m=admin&f=art&a=addheadlineInfo" method="post" id="form" >
    <div class="form-group">
        <label for="htitle">标题：</label>
        <input type="text" name="htitle" id="stitle">
    </div>
    <div class="form-group">
        <label for="editor">内容：</label>
        <?php echo '<script'; ?>
 id="editor" name="edit" type="text/plain" style="width:1024px;height:500px;"><?php echo '</script'; ?>
>
    </div>
        <input type="submit" value="提交">
</form>
</body>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</html><?php }
}
