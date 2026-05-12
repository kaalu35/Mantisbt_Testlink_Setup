<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\error_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350a95cd4_42903778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab190c63b237c4ebde33ff85680ce8476ce4630' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\error_icon.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e350a95cd4_42903778 (Smarty_Internal_Template $_smarty_tpl) {
?><img id="error_icon_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" style="visibility: hidden;" 
     src="<?php echo (defined('TL_THEME_IMG_DIR') ? constant('TL_THEME_IMG_DIR') : null);?>
/error.gif" alt="error condition detected" 
     title="error condition detected" width="1" height="1" />
<?php }
}
