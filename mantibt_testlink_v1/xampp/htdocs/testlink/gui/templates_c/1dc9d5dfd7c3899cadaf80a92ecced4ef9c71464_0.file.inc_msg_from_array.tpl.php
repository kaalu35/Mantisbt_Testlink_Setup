<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:49
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\inc_msg_from_array.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9d114cb35_42547067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc9d5dfd7c3899cadaf80a92ecced4ef9c71464' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\inc_msg_from_array.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a00a9d114cb35_42547067 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="<?php echo $_smarty_tpl->tpl_vars['arg_css_class']->value;?>
">
		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_of_msg']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
			<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div><?php }
}
