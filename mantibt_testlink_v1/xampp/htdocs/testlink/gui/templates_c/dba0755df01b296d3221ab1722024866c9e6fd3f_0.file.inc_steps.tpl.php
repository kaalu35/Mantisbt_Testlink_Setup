<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\inc_steps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e3509b7c56_28320943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dba0755df01b296d3221ab1722024866c9e6fd3f' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\inc_steps.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e3509b7c56_28320943 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>"inc_steps_labels",'s'=>"show_hide_reorder, step_number,clear_all_status, 
             step_actions,expected_results,
             latest_exec_notes,step_exec_status,
             clear_all_notes,step_exec_notes,
             execution_type_short_descr,delete_step,
             insert_step,show_ghost_string,
             doubleclick_to_edit,click_to_copy_ghost_to_clipboard"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'warning_delete_step','var'=>"warning_msg"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'delete','var'=>"del_msgbox_title"),$_smarty_tpl ) );?>


<?php if ($_smarty_tpl->tpl_vars['layout']->value == 'horizontal') {?>
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['steps_horizontal.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['steps_vertical.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>


<?php echo '<script'; ?>
 type="text/javascript">
function copyGhostString(spanID) {
  var ghostString = document.getElementById(spanID).innerText;
  navigator.clipboard.writeText(ghostString);
}
<?php echo '</script'; ?>
>
<?php }
}
