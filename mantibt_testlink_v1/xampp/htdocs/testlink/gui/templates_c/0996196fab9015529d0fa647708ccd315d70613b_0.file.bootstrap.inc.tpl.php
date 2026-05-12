<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:49
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\bootstrap.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9d1114218_14543311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0996196fab9015529d0fa647708ccd315d70613b' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\bootstrap.inc.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a00a9d1114218_14543311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('bb', ($_smarty_tpl->tpl_vars['basehref']->value).("third_party/bootstrap/3.4.1"));?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['bb']->value;?>
/css/bootstrap.min.css" >

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['bb']->value;?>
/css/bootstrap-theme.min.css">

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['bb']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php }
}
