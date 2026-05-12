<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:49
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\inc_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9d104f575_45173805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd68900ca8a46b1fe5c1a9a153bb94a015ab89c13' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\inc_head.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc_jsCfieldsValidation.tpl' => 1,
    'file:inc_tinymce_init.tpl' => 1,
    'file:custom_inc_head.tpl' => 1,
  ),
),false)) {
function content_6a00a9d104f575_45173805 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['pageCharset']->value;?>
" />
	<meta http-equiv="Content-language" content="en" />
	<meta http-equiv="expires" content="-1" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="author" content="Martin Havlat" />
	<meta name="copyright" content="GNU" />
	<meta name="robots" content="NOFOLLOW" />
	<base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
"/>
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "TestLink" : $tmp);?>
</title>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;
echo (defined('TL_THEME_IMG_DIR') ? constant('TL_THEME_IMG_DIR') : null);?>
favicon.ico" type="image/x-icon" />
	
 
	<style media="all" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
";</style>

	<?php if ($_smarty_tpl->tpl_vars['use_custom_css']->value) {?>
	<style media="all" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>
";</style>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['testproject_coloring']->value == 'background') {?>
  	<style type="text/css"> body {background: <?php echo $_smarty_tpl->tpl_vars['testprojectColor']->value;?>
;}</style>
	<?php }?>
  
	<style media="print" type="text/css">@import "<?php echo $_smarty_tpl->tpl_vars['basehref']->value;
echo (defined('TL_PRINT_CSS') ? constant('TL_PRINT_CSS') : null);?>
";</style>

 
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/testlink_library.js" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/test_automation.js" language="javascript"><?php echo '</script'; ?>
>
	
	<?php if ($_smarty_tpl->tpl_vars['jsValidate']->value == "yes") {?> 
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/validate.js" language="javascript"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:inc_jsCfieldsValidation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
   
	<?php if ($_smarty_tpl->tpl_vars['editorType']->value == 'tinymce') {?>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript"
    	src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/tinymce/jscripts/tiny_mce/tiny_mce.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:inc_tinymce_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

	<?php if ((defined('TL_SORT_TABLE_ENGINE') ? constant('TL_SORT_TABLE_ENGINE') : null) == 'kryogenix.org') {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/javascript/sorttable.js" 
		language="javascript"><?php echo '</script'; ?>
>
	<?php }?>


  	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/chosen/chosen.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/jquery/<?php echo (defined('TL_JQUERY') ? constant('TL_JQUERY') : null);?>
" language="javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/chosen/chosen.jquery.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript" language="javascript">
	//<!--
	var fRoot = '<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
';
	var menuUrl = '<?php echo $_smarty_tpl->tpl_vars['menuUrl']->value;?>
';
	var args  = '<?php echo $_smarty_tpl->tpl_vars['args']->value;?>
';
	var additionalArgs  = '<?php echo $_smarty_tpl->tpl_vars['additionalArgs']->value;?>
';
	var printPreferences = '<?php echo $_smarty_tpl->tpl_vars['printPreferences']->value;?>
';
	
	// To solve problem diplaying help
	var SP_html_help_file  = '<?php echo $_smarty_tpl->tpl_vars['SP_html_help_file']->value;?>
';
	
	//attachment related JS-Stuff
	var attachmentDlg_refWindow = null;
	var attachmentDlg_refLocation = null;
	var attachmentDlg_bNoRefresh = false;
	
	// bug management (using logic similar to attachment)
	var bug_dialog = new bug_dialog();

	// for ext js
	var extjsLocation = '<?php echo (defined('TL_EXTJS_RELATIVE_PATH') ? constant('TL_EXTJS_RELATIVE_PATH') : null);?>
';
	
	//-->
	<?php echo '</script'; ?>
> 

    <?php $_smarty_tpl->_subTemplateRender("file:custom_inc_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['openHead']->value == "no") {?> </head>
<?php }
}
}
