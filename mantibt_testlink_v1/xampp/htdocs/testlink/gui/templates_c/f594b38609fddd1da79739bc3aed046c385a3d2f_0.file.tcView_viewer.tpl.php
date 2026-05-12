<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\tcView_viewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e3508dc863_84142861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f594b38609fddd1da79739bc3aed046c385a3d2f' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\tcView_viewer.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e3508dc863_84142861 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>"tcView_viewer_labels",'s'=>"requirement_spec,Requirements,tcversion_is_inactive_msg,
             btn_edit,btn_delete,btn_mv_cp,btn_del_this_version,btn_new_version,
             btn_export,btn_execute_automatic_testcase,version,
             testplan_usage,version_short,updateLinkToThisTCVersion,
             testproject,testsuite,title_test_case,summary,steps,btn_add_to_testplans,applyExecTypeChangeToAllSteps,
             title_last_mod,title_created,by,expected_results,keywords,
             goto_execute,btn_new_version_from_latest,
             btn_create_step,step_number,btn_reorder_steps,step_actions,hint_new_sibling,
             execution_type_short_descr,delete_step,show_hide_reorder,btn_new_sibling,
             test_plan,platform,insert_step,btn_print,btn_print_view,hint_new_version,
             execution_type,test_importance,importance,none,preconditions,btn_compare_versions,btn_bulk,
             show_ghost_string,display_author_updater,onchange_save,
             estimated_execution_duration,status,btn_save,estimated_execution_duration_short,
             requirement,btn_show_exec_history,btn_resequence_steps,link_unlink_requirements,
             code_mgmt,code_link_tl_to_cts,can_not_edit_frozen_tc,testcase_operations,
			       testcase_version_operations,goto_execute,tc_has_relations,
             click_to_copy_ghost_to_clipboard,do_not_execute"),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'warning_delete_step','var'=>"warning_msg"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'delete','var'=>"del_msgbox_title"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('tableColspan', $_smarty_tpl->tpl_vars['gui']->value->tableColspan);?> 
<?php $_smarty_tpl->_assignInScope('addInfoDivStyle', 'style="padding: 5px 3px 4px 10px;"');?>


<?php $_smarty_tpl->_assignInScope('module', 'lib/testcases/');
$_smarty_tpl->_assignInScope('tcase_id', $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id']);
$_smarty_tpl->_assignInScope('tcversion_id', $_smarty_tpl->tpl_vars['args_testcase']->value['id']);?>  <?php $_smarty_tpl->_assignInScope('showMode', $_smarty_tpl->tpl_vars['gui']->value->show_mode);?> 

<?php $_smarty_tpl->_assignInScope('openC', $_smarty_tpl->tpl_vars['gsmarty_gui']->value->role_separator_open);
$_smarty_tpl->_assignInScope('closeC', $_smarty_tpl->tpl_vars['gsmarty_gui']->value->role_separator_close);
$_smarty_tpl->_assignInScope('sepC', $_smarty_tpl->tpl_vars['gsmarty_gui']->value->title_separator_1);?>


<?php $_smarty_tpl->_assignInScope('tcViewAction', "lib/testcases/archiveData.php?tcase_id=".((string)$_smarty_tpl->tpl_vars['tcase_id']->value)."&show_mode=".((string)$_smarty_tpl->tpl_vars['showMode']->value));?>
             
<?php $_smarty_tpl->_assignInScope('hrefReqSpecMgmt', "lib/general/frmWorkArea.php?feature=reqSpecMgmt");
$_smarty_tpl->_assignInScope('hrefReqSpecMgmt', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['hrefReqSpecMgmt']->value));?>

<?php $_smarty_tpl->_assignInScope('hrefReqMgmt', "lib/requirements/reqView.php?showReqSpecTitle=1&requirement_id=");
$_smarty_tpl->_assignInScope('hrefReqMgmt', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['hrefReqMgmt']->value));?>

<?php $_smarty_tpl->_assignInScope('url_args', "tcAssign2Tplan.php?tcase_id=".((string)$_smarty_tpl->tpl_vars['tcase_id']->value)."&tcversion_id=".((string)$_smarty_tpl->tpl_vars['tcversion_id']->value));
$_smarty_tpl->_assignInScope('hrefAddTc2Tplan', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['module']->value).((string)$_smarty_tpl->tpl_vars['url_args']->value));?>


<?php $_smarty_tpl->_assignInScope('url_args', "tcEdit.php?doAction=editStep&testcase_id=".((string)$_smarty_tpl->tpl_vars['tcase_id']->value)."&tcversion_id=".((string)$_smarty_tpl->tpl_vars['tcversion_id']->value));
$_smarty_tpl->_assignInScope('goBackAction', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['tcViewAction']->value));
$_smarty_tpl->_assignInScope('goBackActionURLencoded', rawurlencode($_smarty_tpl->tpl_vars['goBackAction']->value));
$_smarty_tpl->_assignInScope('url_args', ((string)$_smarty_tpl->tpl_vars['url_args']->value)."&goback_url=".((string)$_smarty_tpl->tpl_vars['goBackActionURLencoded']->value)."&show_mode=".((string)$_smarty_tpl->tpl_vars['showMode']->value)."&step_id=");
$_smarty_tpl->_assignInScope('hrefEditStep', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['module']->value).((string)$_smarty_tpl->tpl_vars['url_args']->value));?>

<?php $_smarty_tpl->_assignInScope('tproject_id', $_smarty_tpl->tpl_vars['gui']->value->tproject_id);
$_smarty_tpl->_assignInScope('tcExportAction', "lib/testcases/tcExport.php?tproject_id=".((string)$_smarty_tpl->tpl_vars['tproject_id']->value)."&goback_url=".((string)$_smarty_tpl->tpl_vars['goBackActionURLencoded']->value)."&show_mode=".((string)$_smarty_tpl->tpl_vars['showMode']->value));
$_smarty_tpl->_assignInScope('exportTestCaseAction', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['tcExportAction']->value));?>

<?php $_smarty_tpl->_assignInScope('printTestCaseAction', "lib/testcases/tcPrint.php?show_mode=".((string)$_smarty_tpl->tpl_vars['showMode']->value));?>

<?php $_smarty_tpl->_assignInScope('execFeatureAction', "lib/general/frmWorkArea.php?feature=executeTest");?>

<?php $_smarty_tpl->_assignInScope('bulkOpAction', "lib/testcases/tcBulkOp.php?goback_url=".((string)$_smarty_tpl->tpl_vars['goBackActionURLencoded']->value)."&show_mode=".((string)$_smarty_tpl->tpl_vars['showMode']->value));
$_smarty_tpl->_assignInScope('bulkOpAction', ((string)$_smarty_tpl->tpl_vars['basehref']->value).((string)$_smarty_tpl->tpl_vars['bulkOpAction']->value));?>


<?php $_smarty_tpl->_assignInScope('author_userinfo', $_smarty_tpl->tpl_vars['args_users']->value[$_smarty_tpl->tpl_vars['args_testcase']->value['author_id']]);
$_smarty_tpl->_assignInScope('updater_userinfo', '');?>

<?php if ($_smarty_tpl->tpl_vars['args_testcase']->value['updater_id'] != '') {?>
  <?php $_smarty_tpl->_assignInScope('updater_userinfo', $_smarty_tpl->tpl_vars['args_users']->value[$_smarty_tpl->tpl_vars['args_testcase']->value['updater_id']]);
}?>

<?php if ($_smarty_tpl->tpl_vars['args_show_title']->value == "yes") {?>
  <?php if ($_smarty_tpl->tpl_vars['args_tproject_name']->value != '') {?>
    <h2><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['testproject'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['args_tproject_name']->value, ENT_QUOTES, 'UTF-8', true);?>
 </h2>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['args_tsuite_name']->value != '') {?>
    <h2><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['testsuite'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['args_tsuite_name']->value, ENT_QUOTES, 'UTF-8', true);?>
 </h2>
  <?php }?>
	<h2><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['title_test_case'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['args_testcase']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 </h2>
<?php }?>
  
<?php $_smarty_tpl->_assignInScope('warning_edit_msg', '');
$_smarty_tpl->_assignInScope('warning_delete_msg', '');
$_smarty_tpl->_assignInScope('edit_enabled', 0);
$_smarty_tpl->_assignInScope('delete_enabled', 0);
$_smarty_tpl->_assignInScope('show_relations', 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'can_not_edit_tc','var'=>"warning_edit_msg"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'system_blocks_delete_executed_tc','var'=>"warning_delete_msg"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('has_been_executed', 0);
if ($_smarty_tpl->tpl_vars['args_status_quo']->value != null && $_smarty_tpl->tpl_vars['args_status_quo']->value[$_smarty_tpl->tpl_vars['args_testcase']->value['id']]['executed']) {?>
  <?php $_smarty_tpl->_assignInScope('has_been_executed', 1);?>  
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gui']->value->TCWKFStatusDisplayHintOnTestDesign, 'lblKey', false, 'wkfStatusVerbose');
$_smarty_tpl->tpl_vars['lblKey']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wkfStatusVerbose']->value => $_smarty_tpl->tpl_vars['lblKey']->value) {
$_smarty_tpl->tpl_vars['lblKey']->do_else = false;
?>
  <?php if ($_smarty_tpl->tpl_vars['lblKey']->value != '' && $_smarty_tpl->tpl_vars['gui']->value->TCWKFStatusVerboseCode[$_smarty_tpl->tpl_vars['wkfStatusVerbose']->value] == $_smarty_tpl->tpl_vars['args_testcase']->value['status']) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>"TCWKFMsg",'s'=>((string)$_smarty_tpl->tpl_vars['lblKey']->value)),$_smarty_tpl ) );?>

    <div id="overlay-text"><?php echo $_smarty_tpl->tpl_vars['gui']->value->domainTCStatus[$_smarty_tpl->tpl_vars['args_testcase']->value['status']];?>
<br><?php echo $_smarty_tpl->tpl_vars['TCWKFMsg']->value;?>
</div>
  <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




<?php if ($_smarty_tpl->tpl_vars['args_can_do']->value->edit == "yes") {?>
    <?php if ($_smarty_tpl->tpl_vars['args_status_quo']->value == null || $_smarty_tpl->tpl_vars['args_status_quo']->value[$_smarty_tpl->tpl_vars['args_testcase']->value['id']]['executed'] == null) {?>
        <?php $_smarty_tpl->_assignInScope('edit_enabled', 1);?>
        <?php $_smarty_tpl->_assignInScope('delete_enabled', 1);?>
        <?php $_smarty_tpl->_assignInScope('warning_edit_msg', '');?>
        <?php $_smarty_tpl->_assignInScope('warning_delete_msg', '');?>
    <?php } else { ?> 
      <?php if ((isset($_smarty_tpl->tpl_vars['args_tcase_cfg']->value)) && $_smarty_tpl->tpl_vars['args_tcase_cfg']->value->can_edit_executed == 1) {?>
        <?php $_smarty_tpl->_assignInScope('edit_enabled', 1);?> 
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'warning_editing_executed_tc','var'=>"warning_edit_msg"),$_smarty_tpl ) );?>

      <?php }?> 
      
      <?php if ((isset($_smarty_tpl->tpl_vars['args_tcase_cfg']->value))) {?>
        <?php if ($_smarty_tpl->tpl_vars['args_tcase_cfg']->value->can_delete_executed == 1) {?>
          <?php $_smarty_tpl->_assignInScope('delete_enabled', 1);?> 
          <?php $_smarty_tpl->_assignInScope('warning_delete_msg', '');?>
        <?php } else { ?>
          <?php if (($_smarty_tpl->tpl_vars['args_can_do']->value->delete_testcase == "yes" && $_smarty_tpl->tpl_vars['args_can_delete_testcase']->value == "yes") || ($_smarty_tpl->tpl_vars['args_can_do']->value->delete_version == "yes" && $_smarty_tpl->tpl_vars['args_can_delete_version']->value == "yes")) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'system_blocks_delete_executed_tc','var'=>"warning_delete_msg"),$_smarty_tpl ) );?>

          <?php }?>  
        <?php }?>  
      <?php }?> 
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['args_read_only']->value == "yes") {?>
      <?php $_smarty_tpl->_assignInScope('edit_enabled', 0);?> 
      <?php $_smarty_tpl->_assignInScope('delete_enabled', 0);?> 
    <?php }?>

    <?php if ('editOnExec' != $_smarty_tpl->tpl_vars['gui']->value->show_mode && $_smarty_tpl->tpl_vars['args_hide_relations']->value == "yes") {?>
    	<?php $_smarty_tpl->_assignInScope('show_relations', 0);?>
    <?php }?>

    <div style="display:<?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->gui->op_area_display->test_case;?>
;" 
         id="tcView_viewer_tcase_control_panel_<?php echo $_smarty_tpl->tpl_vars['tcversion_id']->value;?>
">

    <?php $_smarty_tpl->_assignInScope('allOpOnTCV', false);?>
    <?php if ('editOnExec' != $_smarty_tpl->tpl_vars['gui']->value->show_mode && (isset($_smarty_tpl->tpl_vars['args_tcase_operations_enabled']->value)) && $_smarty_tpl->tpl_vars['args_tcase_operations_enabled']->value == "yes") {?>
      <?php $_smarty_tpl->_assignInScope('allOpOnTCV', true);?>
    <?php }?> 

    <?php if ($_smarty_tpl->tpl_vars['allOpOnTCV']->value) {?>
      <fieldset class="groupBtn">
    	  <b><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['testcase_operations'];?>
</b>
        <form style="display: inline;" id="topControls" name="topControls"
          method="post" action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
      		<input type="hidden" name="testcase_id"
                 value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
      		<input type="hidden" name="tcversion_id" 
                 value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
      		<input type="hidden" name="has_been_executed" 
                 value="<?php echo $_smarty_tpl->tpl_vars['has_been_executed']->value;?>
" />
      		<input type="hidden" name="doAction" value="" />
      		<input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
          <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />

      		      		<?php if ($_smarty_tpl->tpl_vars['args_new_sibling']->value == "yes") {?>
      			<input type="hidden" name="containerID" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testsuite_id'];?>
" />
      			<input type="submit" name="new_tc" title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['hint_new_sibling'];?>
"
      				   onclick="doAction.value='create';<?php echo $_smarty_tpl->tpl_vars['gui']->value->submitCode;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_new_sibling'];?>
" />
      		<?php }?>

      		      		<?php if ($_smarty_tpl->tpl_vars['args_can_do']->value->copy == "yes" && $_smarty_tpl->tpl_vars['args_can_move_copy']->value == "yes") {?>
      			<input type="submit" name="move_copy_tc"
                   value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_mv_cp'];?>
" />
      		<?php }?>
      	  
      		      		<?php if ($_smarty_tpl->tpl_vars['delete_enabled']->value && $_smarty_tpl->tpl_vars['args_can_do']->value->delete_testcase == "yes" && $_smarty_tpl->tpl_vars['args_can_delete_testcase']->value == "yes") {?>
      		   <input type="submit" name="delete_tc"
                  value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_delete'];?>
" />
      		<?php }?>
        </form> <!-- id="topControls" -->
      
      	      	<?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_bulk_action']->value == "yes") {?>
      	  <form style="display: inline;" id="tcbulkact" name="tcbulkact" 
      			method="post" action="<?php echo $_smarty_tpl->tpl_vars['bulkOpAction']->value;?>
" >
      		<input type="hidden" name="tcase_id" id="tcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
      		<input type="submit" name="bulk_op" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_bulk'];?>
" />
      	  </form>
      	<?php }?>
      	
      	      	<span>
      	  <?php if ($_smarty_tpl->tpl_vars['args_testcase']->value['version'] > 1) {?>
        		<form style="display: inline;" id="version_compare" 
                  name="version_compare" method="post" 
                  action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcCompareVersions.php">
        		  <input type="hidden" name="testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
        		  <input type="submit" name="compare_versions" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_compare_versions'];?>
" />
        		</form>
      	  <?php }?>
      	</span>

              	<span>
            <input type="button" onclick="javascript:openExecHistoryWindow(<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
,1);"
                 value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_show_exec_history'];?>
" />
        </span>
      </fieldset>
    <?php }?>
    
        <fieldset class="groupBtn">
    	<b><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['testcase_version_operations'];?>
</b>
      <form style="display: inline;" 
        name="versionControls" method="post" 
        action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
      	<input type="hidden" name="testcase_id" 
               value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
      	<input type="hidden" name="tcversion_id"
               value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />

        <input type="hidden" name="tplan_id"
               value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />

      	<input type="hidden" name="has_been_executed"
               value="<?php echo $_smarty_tpl->tpl_vars['has_been_executed']->value;?>
" />
      	<input type="hidden" name="doAction" value="" />
      	<input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />

      	      	<?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>
      		 <input type="submit" name="edit_tc" 
      				onclick="doAction.value='edit';<?php echo $_smarty_tpl->tpl_vars['gui']->value->submitCode;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_edit'];?>
" />
      	<?php }?>

        <?php if (((isset($_smarty_tpl->tpl_vars['args_tcversion_operation_only_edit_button']->value)) && $_smarty_tpl->tpl_vars['args_tcversion_operation_only_edit_button']->value == "no") || ($_smarty_tpl->tpl_vars['args_can_do']->value->delete_frozen_tcversion == "yes")) {?>

                    <?php if ($_smarty_tpl->tpl_vars['args_can_do']->value->create_new_version == "yes" && $_smarty_tpl->tpl_vars['args_read_only']->value != "yes") {?>
             <?php if ($_smarty_tpl->tpl_vars['gui']->value->new_version_source == 'this') {?>
               <input type="submit" name="do_create_new_version" 
                 title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['hint_new_version'];?>
" 
                 value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_new_version'];?>
" />
             <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['gui']->value->new_version_source == 'latest') {?>
               <input type="submit" name="do_create_new_version_from_latest" 
               title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_new_version_from_latest'];?>
" 
               value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_new_version_from_latest'];?>
" />      
             <?php }?>
          <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['args_can_do']->value->edit == "yes" && $_smarty_tpl->tpl_vars['args_can_do']->value->deactivate == 'yes' && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>

              <?php $_smarty_tpl->_assignInScope('act_deact_btn', "activate_this_tcversion");?>
              <?php $_smarty_tpl->_assignInScope('act_deact_value', "activate_this_tcversion");?>
              <?php $_smarty_tpl->_assignInScope('version_title_class', "inactivate_version");?>
              
              <?php if ($_smarty_tpl->tpl_vars['args_testcase']->value['active'] == 1) {?>
                <?php $_smarty_tpl->_assignInScope('prex', "de");?>
                <?php $_smarty_tpl->_assignInScope('act_deact_btn', ((string)$_smarty_tpl->tpl_vars['prex']->value).((string)$_smarty_tpl->tpl_vars['act_deact_btn']->value));?>
                <?php $_smarty_tpl->_assignInScope('act_deact_value', ((string)$_smarty_tpl->tpl_vars['prex']->value).((string)$_smarty_tpl->tpl_vars['act_deact_value']->value));?>
                <?php $_smarty_tpl->_assignInScope('version_title_class', "activate_version");?>
              <?php }?>

              <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['act_deact_btn']->value;?>
"
                       value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>$_smarty_tpl->tpl_vars['act_deact_value']->value),$_smarty_tpl ) );?>
" />
          <?php }?>



        	        	<?php if ('editOnExec' != $_smarty_tpl->tpl_vars['gui']->value->show_mode && $_smarty_tpl->tpl_vars['args_read_only']->value != "yes" && $_smarty_tpl->tpl_vars['args_can_do']->value->freeze == 'yes') {?>
        		  <?php if ($_smarty_tpl->tpl_vars['args_frozen_version']->value == "yes") {?>
        			  <?php $_smarty_tpl->_assignInScope('freeze_btn', "unfreeze");?>
        			  <?php $_smarty_tpl->_assignInScope('freeze_value', "unfreeze_this_tcversion");?>
        			  <?php $_smarty_tpl->_assignInScope('version_title_class', "unfreeze_version");?>
        		  <?php } else { ?>
        			  <?php $_smarty_tpl->_assignInScope('freeze_btn', "freeze");?>
        			  <?php $_smarty_tpl->_assignInScope('freeze_value', "freeze_this_tcversion");?>
        			  <?php $_smarty_tpl->_assignInScope('version_title_class', "freeze_version");?>
        		  <?php }?>

        		 <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['freeze_btn']->value;?>
" 
        				onclick="doAction.value='<?php echo $_smarty_tpl->tpl_vars['freeze_btn']->value;?>
';<?php echo $_smarty_tpl->tpl_vars['gui']->value->submitCode;?>
" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>$_smarty_tpl->tpl_vars['freeze_value']->value),$_smarty_tpl ) );?>
" />
        	<?php }?>

        	        	<?php if (($_smarty_tpl->tpl_vars['args_frozen_version']->value == "no" || $_smarty_tpl->tpl_vars['args_can_do']->value->delete_frozen_tcversion == "yes") && $_smarty_tpl->tpl_vars['args_can_do']->value->delete_version == "yes" && $_smarty_tpl->tpl_vars['args_can_delete_version']->value == "yes") {?>
        	   <input type="submit" name="delete_tc_version" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_del_this_version'];?>
" />
        	<?php }?>
        <?php }?>
      </form>

      <?php if ('editOnExec' != $_smarty_tpl->tpl_vars['gui']->value->show_mode && (isset($_smarty_tpl->tpl_vars['args_tcversion_operation_only_edit_button']->value)) && $_smarty_tpl->tpl_vars['args_tcversion_operation_only_edit_button']->value == "no") {?>
        
                <?php if ($_smarty_tpl->tpl_vars['args_can_do']->value->add2tplan == "yes" && $_smarty_tpl->tpl_vars['args_has_testplans']->value) {?>
        	<span>
        	  <form style="display: inline;" id="addToTestPlans" name="addToTestPlans" method="post" action="">
        		<input type="hidden" name="testcase_id" id="versionControls_testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
        		<input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
        		<input type="button" id="addTc2Tplan_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
"  name="addTc2Tplan_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" 
        		   value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_add_to_testplans'];?>
" onclick="location='<?php echo $_smarty_tpl->tpl_vars['hrefAddTc2Tplan']->value;?>
'" />
        	  </form>
        	</span>
        <?php }?>
              	<span>
      	  <form style="display: inline;" id="tcexport" name="tcexport" method="post" action="<?php echo $_smarty_tpl->tpl_vars['exportTestCaseAction']->value;?>
" >
      		<input type="hidden" name="testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
      		<input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
      		<input type="submit" name="export_tc" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_export'];?>
" />
      	  </form>
      	</span>
      <?php }?>
    </fieldset>
    
<?php }?> <span>
  <form style="display: inline;" id="tcprint" 
        name="tcprint" method="post" action="" >
    <input type="button" name="tcPrinterFriendly"
           value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_print_view'];?>
" 
           onclick="javascript:openPrintPreview('tc',<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
,null,'<?php echo $_smarty_tpl->tpl_vars['printTestCaseAction']->value;?>
');"/>
  </form>
</span>

<?php if (1 == $_smarty_tpl->tpl_vars['gui']->value->candidateToUpd && '' != $_smarty_tpl->tpl_vars['gui']->value->tplan_id && 'editOnExec' == $_smarty_tpl->tpl_vars['gui']->value->show_mode && 'yes' == $_smarty_tpl->tpl_vars['args_can_do']->value->updTplanTCV) {?> 
  <span>
    <form style="display: inline;" id="updTPlan" name="updTPlan" 
          method="post"
          action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
      <input type="hidden" name="testcase_id" id="updTPlan_testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
      <input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
      <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />
      <input type="hidden" id="updTPlan_show_mode" name="show_mode" 
          value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
        
      <input type="hidden" name="doAction" value="updateTPlanLinkToTCV">
      <input type="submit" id="updTPlan" name="updTPlan" 
           style="background:#B22222;color:white;"
           value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['updateLinkToThisTCVersion'];?>
">
    </form>
  </span>
<?php }?>

</div>

  <?php if ($_smarty_tpl->tpl_vars['args_testcase']->value['active'] == 0) {?>
    <div class="messages" align="center"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['tcversion_is_inactive_msg'];?>
</div>
  <?php }?>
  
    <?php if ($_smarty_tpl->tpl_vars['args_frozen_version']->value == "yes") {?>
    <div class="messages" align="center"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['can_not_edit_frozen_tc'];?>
</div>
  <?php }?>


   <?php if ($_smarty_tpl->tpl_vars['warning_edit_msg']->value != '') {?>
       <div class="messages" align="center">
         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['warning_edit_msg']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
       </div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['warning_delete_msg']->value != '') {?>
       <div class="messages" align="center">
         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['warning_delete_msg']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
       </div>
   <?php }?>
  <?php if (count($_smarty_tpl->tpl_vars['gui']->value->additionalMessages) > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gui']->value->additionalMessages, 'msgCfg');
$_smarty_tpl->tpl_vars['msgCfg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msgCfg']->value) {
$_smarty_tpl->tpl_vars['msgCfg']->do_else = false;
?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>$_smarty_tpl->tpl_vars['msgCfg']->value->label,'var'=>"additionalMsg"),$_smarty_tpl ) );?>


      <?php $_smarty_tpl->_assignInScope('defClass', "messages");?> 
      <?php if (property_exists($_smarty_tpl->tpl_vars['msgCfg']->value,"class") && $_smarty_tpl->tpl_vars['msgCfg']->value->class != '') {?>
        <?php $_smarty_tpl->_assignInScope('defClass', $_smarty_tpl->tpl_vars['msgCfg']->value->class);?> 
      <?php }?>


      <div class="<?php echo $_smarty_tpl->tpl_vars['defClass']->value;?>
" align="center">
        <?php if (property_exists($_smarty_tpl->tpl_vars['msgCfg']->value,"tlImagesAccessKey") && $_smarty_tpl->tpl_vars['msgCfg']->value->tlImagesAccessKey != '') {?>
          <?php $_smarty_tpl->_assignInScope('imgAccessKey', $_smarty_tpl->tpl_vars['msgCfg']->value->tlImagesAccessKey);?>
          <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value[$_smarty_tpl->tpl_vars['msgCfg']->value->tlImagesAccessKey];?>
" />
        <?php }?>      
      <?php echo $_smarty_tpl->tpl_vars['additionalMsg']->value;?>

      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>



<?php echo '<script'; ?>
 type="text/javascript">
  /**
   * used instead of window.open().
   *
   */
  function launchEditStep(step_id)
  {
    document.getElementById('stepsControls_step_id').value=step_id;
    document.getElementById('stepsControls_doAction').value='editStep';
    document.getElementById('stepsControls').submit();
  }

  /**
   * used instead of window.open().
   *
   */
  function launchInsertStep(step_id)
  {
    document.getElementById('stepsControls_step_id').value=step_id;
    document.getElementById('stepsControls_doAction').value='doInsertStep';
    document.getElementById('stepsControls').submit();
  }
<?php echo '</script'; ?>
>

<form id="stepsControls" name="stepsControls" 
  method="post" action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
  <input type="hidden" name="goback_url" value="<?php echo $_smarty_tpl->tpl_vars['goBackAction']->value;?>
" />
  <input type="hidden" id="stepsControls_doAction" name="doAction" value="" />
  <input type="hidden" name="testcase_id" 
         value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
  <input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
  <input type="hidden" name="has_been_executed" value="<?php echo $_smarty_tpl->tpl_vars['has_been_executed']->value;?>
" />
  <input type="hidden" id="stepsControls_step_id" name="step_id" value="0" />
  <input type="hidden" id="stepsControls_show_mode" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
  <input type="hidden" id="stepsControls_tplan_id" name="tplan_id" 
         value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />

  <div class="workBack">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['inc_tcbody']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inc_relations'=>$_smarty_tpl->tpl_vars['args_relations']->value,'inc_tcbody_close_table'=>false,'inc_tcbody_testcase'=>$_smarty_tpl->tpl_vars['args_testcase']->value,'inc_tcbody_show_title'=>$_smarty_tpl->tpl_vars['args_show_title']->value,'inc_tcbody_tableColspan'=>$_smarty_tpl->tpl_vars['tableColspan']->value,'inc_tcbody_labels'=>$_smarty_tpl->tpl_vars['tcView_viewer_labels']->value,'inc_tcbody_author_userinfo'=>$_smarty_tpl->tpl_vars['author_userinfo']->value,'inc_tcbody_updater_userinfo'=>$_smarty_tpl->tpl_vars['updater_userinfo']->value,'inc_tcbody_editor_type'=>$_smarty_tpl->tpl_vars['gui']->value->designEditorType,'inc_tcbody_cf'=>$_smarty_tpl->tpl_vars['args_cf']->value), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['args_testcase']->value['steps'] != '') {?>
      <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['inc_steps']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layout'=>$_smarty_tpl->tpl_vars['gui']->value->steps_results_layout,'edit_enabled'=>$_smarty_tpl->tpl_vars['edit_enabled']->value,'args_frozen_version'=>$_smarty_tpl->tpl_vars['args_frozen_version']->value,'ghost_control'=>true,'steps'=>$_smarty_tpl->tpl_vars['args_testcase']->value['steps']), 0, true);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>
      <div <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
>
        <input type="submit" name="create_step" 
                onclick="doAction.value='createStep';<?php echo $_smarty_tpl->tpl_vars['gui']->value->submitCode;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_create_step'];?>
" />

        <?php if ($_smarty_tpl->tpl_vars['args_testcase']->value['steps'] != '') {?>
          <input type="submit" name="resequence_steps" id="resequence_steps" 
                  onclick="doAction.value='doResequenceSteps';<?php echo $_smarty_tpl->tpl_vars['gui']->value->submitCode;?>
" 
                  value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_resequence_steps'];?>
" />
        <?php }?>

        <span class="order_info" style='display:none'>
        <input type="submit" name="renumber_step" 
                onclick="doAction.value='doReorderSteps';<?php echo $_smarty_tpl->tpl_vars['gui']->value->submitCode;?>
;javascript: return validateStepsReorder('step_number<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
');"
                value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_reorder_steps'];?>
" />
        </span>
      </div>
    <?php }?>
  </div>
</form>

<div class="workBack">
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['attributesLinearForViewer.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> 

<?php if ($_smarty_tpl->tpl_vars['args_cf']->value['standard_location'] != '') {?>
  <div <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
>
        <div id="cfields_design_time" class="custom_field_container"><?php echo $_smarty_tpl->tpl_vars['args_cf']->value['standard_location'];?>
</div>
  </div>
<?php }?>

<p>
<div <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
>
   <?php $_smarty_tpl->_assignInScope('kwRW', $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no" && $_smarty_tpl->tpl_vars['edit_enabled']->value == 1 && $_smarty_tpl->tpl_vars['has_been_executed']->value == 0);?> 
   
   <?php if ($_smarty_tpl->tpl_vars['args_frozen_version']->value == "no" && $_smarty_tpl->tpl_vars['has_been_executed']->value == 1) {?>
     <?php if ($_smarty_tpl->tpl_vars['args_tcase_cfg']->value->can_edit_executed == 1 || $_smarty_tpl->tpl_vars['args_tcase_cfg']->value->can_add_remove_kw_on_executed == 1) {?>
       <?php $_smarty_tpl->_assignInScope('kwRW', 1);?>
     <?php }?>
   <?php }?>
   
   <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['keywords.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_edit_enabled'=>$_smarty_tpl->tpl_vars['kwRW']->value,'args_tcase_id'=>$_smarty_tpl->tpl_vars['tcase_id']->value,'args_tcversion_id'=>$_smarty_tpl->tpl_vars['tcversion_id']->value), 0, true);
?> 
</div>
  
<p>
<div <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
>
   <?php $_smarty_tpl->_assignInScope('kwRW', $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no" && $_smarty_tpl->tpl_vars['edit_enabled']->value == 1 && $_smarty_tpl->tpl_vars['has_been_executed']->value == 0);?> 
   
   <?php $_smarty_tpl->_assignInScope('platRW', 1);?>
   <?php if ($_smarty_tpl->tpl_vars['args_frozen_version']->value == "yes") {?>
     <?php $_smarty_tpl->_assignInScope('platRW', 0);?>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['has_been_executed']->value == 1) {?>
      <?php $_smarty_tpl->_assignInScope('platRW', 0);?>
     <?php if ($_smarty_tpl->tpl_vars['args_tcase_cfg']->value->can_edit_executed == 1) {?>
       <?php $_smarty_tpl->_assignInScope('platRW', 1);?>
     <?php }?>
   <?php }?>
   
   <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['platforms.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_edit_enabled'=>$_smarty_tpl->tpl_vars['platRW']->value,'args_tcase_id'=>$_smarty_tpl->tpl_vars['tcase_id']->value,'args_tcversion_id'=>$_smarty_tpl->tpl_vars['tcversion_id']->value), 0, true);
?> 
</div>


<?php if ($_smarty_tpl->tpl_vars['gui']->value->requirementsEnabled == TRUE && ($_smarty_tpl->tpl_vars['gui']->value->view_req_rights == "yes" || $_smarty_tpl->tpl_vars['gui']->value->req_tcase_link_management)) {?>
  <?php $_smarty_tpl->_assignInScope('reqLinkingEnabled', 0);?>
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->req_tcase_link_management && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no" && $_smarty_tpl->tpl_vars['args_testcase']->value['active'] == 1 && $_smarty_tpl->tpl_vars['edit_enabled']->value == 1) {?>
         <?php $_smarty_tpl->_assignInScope('reqLinkingEnabled', 1);?>
  <?php }?>    

  <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->reqLinkingDisabledAfterExec == 1 && $_smarty_tpl->tpl_vars['has_been_executed']->value == 1 && $_smarty_tpl->tpl_vars['args_tcase_cfg']->value->can_edit_executed == 0) {?>
       <?php $_smarty_tpl->_assignInScope('reqLinkingEnabled', 0);?>
  <?php }?>
  <div <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
>
    <table cellpadding="0" cellspacing="0" style="font-size:100%;">
      <tr>
        <td colspan="<?php echo $_smarty_tpl->tpl_vars['tableColspan']->value;?>
" style="vertical-align:text-top;"><span><a title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['requirement_spec'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['hrefReqSpecMgmt']->value;?>
"
               target="mainframe" class="bold"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['Requirements'];?>
</a>

              <?php if ($_smarty_tpl->tpl_vars['reqLinkingEnabled']->value && $_smarty_tpl->tpl_vars['args_testcase']->value['isTheLatest'] == 1) {?>
                <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['item_link'];?>
"
                     onclick="javascript:openReqWindow(<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
,'a');"
                     title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['link_unlink_requirements'];?>
" />
              <?php }?>
              : &nbsp;</span>
        </td>
        <td>
              <?php
$__section_item_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['args_reqs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_item_1_total = $__section_item_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_item'] = new Smarty_Variable(array());
if ($__section_item_1_total !== 0) {
for ($__section_item_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] = 0; $__section_item_1_iteration <= $__section_item_1_total; $__section_item_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_item']->value['last'] = ($__section_item_1_iteration === $__section_item_1_total);
?>
                <?php $_smarty_tpl->_assignInScope('reqID', $_smarty_tpl->tpl_vars['args_reqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['id']);?>
                <?php $_smarty_tpl->_assignInScope('reqVersionID', $_smarty_tpl->tpl_vars['args_reqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['req_version_id']);?>
                <?php $_smarty_tpl->_assignInScope('reqVersionNum', $_smarty_tpl->tpl_vars['args_reqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['version']);?>
                
                
                <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['edit'];?>
"
                     onclick="javascript:openLinkedReqVersionWindow(<?php echo $_smarty_tpl->tpl_vars['reqID']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['reqVersionID']->value;?>
);"
                     title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['requirement'];?>
" />
                <?php echo $_smarty_tpl->tpl_vars['openC']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['args_reqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['req_spec_title'], ENT_QUOTES, 'UTF-8', true);
echo $_smarty_tpl->tpl_vars['closeC']->value;?>

                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['args_reqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['req_doc_id'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp<?php echo $_smarty_tpl->tpl_vars['openC']->value;
echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['version_short'];
echo $_smarty_tpl->tpl_vars['reqVersionNum']->value;
echo $_smarty_tpl->tpl_vars['closeC']->value;
echo $_smarty_tpl->tpl_vars['sepC']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['args_reqs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['index'] : null)]['title'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_item']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_item']->value['last'] : null)) {?><br /><?php }?>
              <?php }} else {
 ?>
                <?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['none'];?>

              <?php
}
?>
        </td>
      </tr>
    </table>
  </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->codeTrackerEnabled) {?>
  <br>
  <div <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
>
    <table cellpadding="0" cellspacing="0" style="font-size:100%;">
      <tr>
        <td colspan="<?php echo $_smarty_tpl->tpl_vars['tableColspan']->value;?>
" style="vertical-align:text-top;">
          <span><a title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['code_mgmt'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->cts->cfg->uriview;?>
"
               target="_blank" class="bold"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['code_mgmt'];?>
</a><b>: &nbsp;</b>
            <a href="javascript:open_script_add_window(<?php echo $_smarty_tpl->tpl_vars['gui']->value->tproject_id;?>
,null,<?php echo $_smarty_tpl->tpl_vars['tcversion_id']->value;?>
,'link')">
            <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['new_f2_16'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['code_link_tl_to_cts'];?>
" style="border:none" /></a>
              &nbsp;
          </span>
        </td>
      </tr>
            <?php if ((isset($_smarty_tpl->tpl_vars['gui']->value->scripts[$_smarty_tpl->tpl_vars['tcversion_id']->value])) && !is_null($_smarty_tpl->tpl_vars['gui']->value->scripts[$_smarty_tpl->tpl_vars['tcversion_id']->value])) {?>
        <tr style="background-color: #d0d0d0">
          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['inc_show_scripts_table']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scripts_map'=>$_smarty_tpl->tpl_vars['gui']->value->scripts[$_smarty_tpl->tpl_vars['tcversion_id']->value],'can_delete'=>true,'tcase_id'=>$_smarty_tpl->tpl_vars['tcversion_id']->value,'tproject_id'=>$_smarty_tpl->tpl_vars['tproject_id']->value), 0, true);
?>
        </tr>
      <?php }?>
    </table>
  </div>
<?php }?>
  
<?php if ($_smarty_tpl->tpl_vars['show_relations']->value) {?>
  <br />
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['relations.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_is_latest_tcv'=>$_smarty_tpl->tpl_vars['args_testcase']->value['isTheLatest'],'args_relations'=>$_smarty_tpl->tpl_vars['args_relations']->value,'args_frozen_version'=>$_smarty_tpl->tpl_vars['args_frozen_version']->value,'args_edit_enabled'=>$_smarty_tpl->tpl_vars['edit_enabled']->value), 0, true);
?> 
<?php }?>

<?php if ('editOnExec' != $_smarty_tpl->tpl_vars['gui']->value->show_mode && $_smarty_tpl->tpl_vars['args_linked_versions']->value != null && $_smarty_tpl->tpl_vars['tlCfg']->value->spec_cfg->show_tplan_usage) {?>
    <br />
  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConfig']->value['quickexec.inc']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_edit_enabled'=>$_smarty_tpl->tpl_vars['edit_enabled']->value), 0, true);
?> 
<?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->closeMyWindow) {?>
  <?php echo '<script'; ?>
 type="text/javascript">
  window.close();
  <?php echo '</script'; ?>
>
<?php }
}
}
