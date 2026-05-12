<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:48
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9d09580a3_63179893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad471972f1a3c4d350bba9fce75d658d9236cbd7' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\main.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a00a9d09580a3_63179893 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['pageCharset']->value;?>
" />
	<meta http-equiv="Content-language" content="en" />
	<meta name="generator" content="testlink" />
	<meta name="author" content="TestLink Development Team" />
	<meta name="copyright" content="TestLink Development Team" />
	<meta name="robots" content="NOFOLLOW" />
	<title>TestLink <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tlVersion']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
	<meta name="description" content="TestLink - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['gui']->value->title)===null||$tmp==='' ? "Main page" : $tmp);?>
" />
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;
echo (defined('TL_THEME_IMG_DIR') ? constant('TL_THEME_IMG_DIR') : null);?>
favicon.ico" type="image/x-icon" />

  <!-- for the iframes -->
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;
echo $_smarty_tpl->tpl_vars['tlCfg']->value->theme_dir;?>
/css/frame.css">


</head>

<body>
  <iframe src="<?php echo $_smarty_tpl->tpl_vars['gui']->value->titleframe;?>
" name="titlebar" id="titlebar" class="navigationBar"></iframe>
  <iframe src="<?php echo $_smarty_tpl->tpl_vars['gui']->value->mainframe;?>
" name="mainframe" id="mainframe" class="siteContent"></iframe>
</body>

</html>
<?php }
}
