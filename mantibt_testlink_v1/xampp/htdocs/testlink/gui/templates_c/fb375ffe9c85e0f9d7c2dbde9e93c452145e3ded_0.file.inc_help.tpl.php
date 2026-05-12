<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:49
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\inc_help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9d1260835_64442681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb375ffe9c85e0f9d7c2dbde9e93c452145e3ded' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\inc_help.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a00a9d1260835_64442681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),1=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'help','var'=>'img_alt'),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('img_style', (($tmp = @$_smarty_tpl->tpl_vars['inc_help_style']->value)===null||$tmp==='' ? "vertical-align: top;" : $tmp));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>"help_text_raw",'s'=>$_smarty_tpl->tpl_vars['helptopic']->value),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_assignInScope('help_text', (($tmp = @smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['help_text_raw']->value,"/[\r\t\n]/"," "),"'","&#39;"),"\"","&quot;"))===null||$tmp==='' ? "Help: Localization/Text is missing." : $tmp));?>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
	var help_localized_text = "<img style='float: right' " +
		"src='<?php echo (defined('TL_THEME_IMG_DIR') ? constant('TL_THEME_IMG_DIR') : null);?>
/x-icon.gif' " +
		"onclick='javascript: close_help();' /> <?php echo strtr($_smarty_tpl->tpl_vars['help_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
//-->
<?php echo '</script'; ?>
>  
<?php if ($_smarty_tpl->tpl_vars['show_help_icon']->value !== false) {?>
<img alt="<?php echo $_smarty_tpl->tpl_vars['img_alt']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['img_style']->value;?>
" 
	src="<?php echo (defined('TL_THEME_IMG_DIR') ? constant('TL_THEME_IMG_DIR') : null);?>
/sym_question.gif" 
	onclick='javascript: show_help(help_localized_text);'
/>
<?php }
}
}
