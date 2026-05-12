<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:54:41
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\tcTree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00aa414b7f04_85626894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e26e7ac7a2e73c8a2688ce0b4eaf19799a6354' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\tcTree.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc_head.tpl' => 1,
    'file:inc_ext_js.tpl' => 1,
    'file:inc_filter_panel_js.tpl' => 1,
    'file:inc_filter_panel.tpl' => 1,
    'file:inc_tree_control.tpl' => 1,
  ),
),false)) {
function content_6a00aa414b7f04_85626894 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>"labels",'s'=>"caption_nav_filter_settings,testsuite,do_auto_update,keywords_filter_help,
             button_update_tree,no_tc_spec_av,keyword,execution_type"),$_smarty_tpl ) );?>



<?php $_smarty_tpl->_subTemplateRender("file:inc_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('openHead'=>"yes"), 0, false);
$_smarty_tpl->_subTemplateRender("file:inc_ext_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('bResetEXTCss'=>1), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src='gui/javascript/ext_extensions.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
treeCfg = { tree_div_id:'tree_div',root_name:"",root_id:0,root_href:"",
		            loader:"", enableDD:false, dragDropBackEndUrl:'',children:"" };
Ext.onReady(function() {


/* #3714 
Ext.state.Manager.setProvider(new Ext.state.CookieProvider());
*/
Ext.state.Manager.setProvider(new Ext.ux.LocalStorageProvider());
  	

// Use a collapsible panel for filter settings
// and place a help icon in ther header
var settingsPanel = new Ext.ux.CollapsiblePanel({
				id: 'tl_exec_filter',
				applyTo: 'settings_panel',
				tools: [{
					id: 'help',
					handler: function(event, toolEl, panel) {
						show_help(help_localized_text);
					}
				}]
			});
var filtersPanel = new Ext.ux.CollapsiblePanel({
				id: 'tl_exec_settings',
				applyTo: 'filter_panel'
			});
});
<?php echo '</script'; ?>
>
	
<?php if ($_smarty_tpl->tpl_vars['gui']->value->ajaxTree->loader == '') {?>
  <?php echo '<script'; ?>
 type="text/javascript">
  treeCfg = { tree_div_id:'tree_div',root_name:"",root_id:0,root_href:"",
              loader:"", enableDD:false, dragDropBackEndUrl:'',children:"" };
  treeCfg.root_name='<?php echo strtr($_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
  treeCfg.root_id=<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->id;?>
;
  treeCfg.root_href='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->href;?>
';
  treeCfg.children=<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->children;?>
;
  treeCfg.cookiePrefix='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->cookiePrefix;?>
';
  treeCfg.enableDD='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->dragDrop->enabled;?>
';
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src='gui/javascript/execTree.js'><?php echo '</script'; ?>
>
    
<?php } else { ?>
  <?php echo '<script'; ?>
 type="text/javascript">
  treeCfg = { tree_div_id:'tree_div',root_name:"",root_id:0,root_href:"",
              root_testlink_node_type:'',useBeforeMoveNode:false,
              loader:"", enableDD:false, dragDropBackEndUrl:'' };
  treeCfg.loader='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->loader;?>
';
  treeCfg.root_name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->name, ENT_QUOTES, 'UTF-8', true);?>
';
  treeCfg.root_id=<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->id;?>
;
  treeCfg.root_href='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->href;?>
';
  treeCfg.enableDD='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->dragDrop->enabled;?>
';
  treeCfg.dragDropBackEndUrl='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->dragDrop->BackEndUrl;?>
';
  treeCfg.cookiePrefix='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->cookiePrefix;?>
';
  treeCfg.root_testlink_node_type='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->root_node->testlink_node_type;?>
';
  treeCfg.useBeforeMoveNode='<?php echo $_smarty_tpl->tpl_vars['gui']->value->ajaxTree->dragDrop->useBeforeMoveNode;?>
';
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src='gui/javascript/treebyloader.js'><?php echo '</script'; ?>
>
<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:inc_filter_panel_js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['gui']->value->treeHeader;?>
</h1>
<?php $_smarty_tpl->_subTemplateRender('file:inc_filter_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:inc_tree_control.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="tree_div" style="overflow:auto; height:100%;border:1px solid #c3daf9;"></div>
</body>
</html><?php }
}
