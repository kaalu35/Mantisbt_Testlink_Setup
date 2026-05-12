<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:54:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\frmInner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00aa4092f767_78489364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1a9b60cb857a6adb24e0575530c54e33725f01e' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\frmInner.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bootstrap.inc.tpl' => 1,
  ),
),false)) {
function content_6a00aa4092f767_78489364 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['pageCharset']->value;?>
" />
    	<meta http-equiv="Content-language" content="en" />
    	<meta http-equiv="expires" content="-1" />
    	<meta http-equiv="pragma" content="no-cache" />
    	<meta name="generator" content="testlink" />
    	<meta name="author" content="Martin Havlat" />
    	<meta name="copyright" content="GNU" />
    	<meta name="robots" content="NOFOLLOW" />
    	<base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
" />
    	<title>TestLink Inner Frame</title>
    	<style media="all" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
";</style>
    	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;
echo $_smarty_tpl->tpl_vars['tlCfg']->value->theme_dir;?>
/css/frame.css">
    	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/jquery/<?php echo (defined('TL_JQUERY') ? constant('TL_JQUERY') : null);?>
" language="javascript"><?php echo '</script'; ?>
>
    	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/chosen/chosen.jquery.js"><?php echo '</script'; ?>
>
    	<?php $_smarty_tpl->_subTemplateRender("file:bootstrap.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
    <body>
      <iframe src="<?php echo $_smarty_tpl->tpl_vars['treeframe']->value;?>
" name="treeframe" id="treeframe" class="treeframe"></iframe>
      <iframe src="<?php echo $_smarty_tpl->tpl_vars['workframe']->value;?>
" name="workframe" id="workframe" class="workframe"></iframe>
    </body>
</html>
<?php }
}
