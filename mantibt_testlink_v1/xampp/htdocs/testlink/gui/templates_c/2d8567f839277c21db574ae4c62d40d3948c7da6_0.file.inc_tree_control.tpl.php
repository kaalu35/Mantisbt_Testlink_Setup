<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:54:41
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\inc_tree_control.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00aa4167f7d6_18507103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d8567f839277c21db574ae4c62d40d3948c7da6' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\inc_tree_control.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a00aa4167f7d6_18507103 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'labels','s'=>'expand_tree, collapse_tree'),$_smarty_tpl ) );?>


<div class="x-panel-body exec_additional_info" style="padding:3px; padding-left: 9px;border:1px solid #99BBE8;">

<input type="button"
       value="<?php echo $_smarty_tpl->tpl_vars['labels']->value['expand_tree'];?>
" 
       id="expand_tree" 
       name="expand_tree"
       onclick="tree.expandAll();"
       style="font-size: 90%;" />

<input type="button"
       value="<?php echo $_smarty_tpl->tpl_vars['labels']->value['collapse_tree'];?>
"
       id="collapse_tree"
       name="collapse_tree"
       onclick="tree.collapseAll();"
       style="font-size: 90%;" />

</div>
<?php }
}
