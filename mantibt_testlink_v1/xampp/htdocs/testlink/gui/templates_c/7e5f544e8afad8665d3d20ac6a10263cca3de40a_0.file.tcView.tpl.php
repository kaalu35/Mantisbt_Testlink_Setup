<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\tcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e3506d04d6_27825961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5f544e8afad8665d3d20ac6a10263cca3de40a' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\tcView.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc_head.tpl' => 1,
    'file:inc_del_onclick.tpl' => 1,
    'file:inc_ext_js.tpl' => 1,
    'file:bootstrap.inc.tpl' => 1,
    'file:inc_update.tpl' => 1,
    'file:testcases/tcView_viewer.tpl' => 2,
    'file:attachments.inc.tpl' => 2,
    'file:inc_show_hide_mgmt.tpl' => 2,
    'file:inc_refreshTreeWithFilters.tpl' => 1,
  ),
),false)) {
function content_6a02e3506d04d6_27825961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "input_dimensions.conf", null, 0);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'labels','s'=>'no_records_found,other_versions,show_hide_reorder,version,
             title_test_case,match_count,actions,
             file_upload_ko'),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('showMode', $_smarty_tpl->tpl_vars['gui']->value->show_mode);
$_smarty_tpl->_assignInScope('tplanID', intval($_smarty_tpl->tpl_vars['gui']->value->tplan_id));
$_smarty_tpl->_assignInScope('deleteStepAction', "lib/testcases/tcEdit.php?show_mode=".((string)$_smarty_tpl->tpl_vars['showMode']->value)."&doAction=doDeleteStep");?>

<?php $_smarty_tpl->_assignInScope('deleteStepAction', ((string)$_smarty_tpl->tpl_vars['deleteStepAction']->value)."&tplan_id=".((string)$_smarty_tpl->tpl_vars['tplanID']->value)."&step_id=");?>

<?php $_smarty_tpl->_subTemplateRender("file:inc_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('openHead'=>'yes'), 0, false);
?>

<style>
.mainAttrContainer {
  display: flex;
  flex-direction: column;
}

.summaryCONTAINER {
  padding: 5px 3px 4px 5px;
  order: <?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->viewerFieldsOrder->summary;?>
;
}

.spaceOne {
  padding: 5px 3px 4px 5px;
  order: <?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->viewerFieldsOrder->spaceOne;?>
;
}

.preconditionsCONTAINER {
  padding: 5px 3px 4px 5px;
  order: <?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->viewerFieldsOrder->preconditions;?>
;  
}

.CFBeforeStepsCONTAINER {
  padding: 5px 3px 4px 5px;
  order: 99;  
}
#overlay-text{
  position: absolute;
  top: 30%;
  left: 50%;
  font-size: 50px;
  color: gray;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
  background-color: #EBEBEB;
  opacity: 0.75;
}
</style>





<?php echo '<script'; ?>
 language="JavaScript" src="gui/javascript/expandAndCollapseFunctions.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:inc_del_onclick.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
/* All this stuff is needed for logic contained in inc_del_onclick.tpl */
var del_action = fRoot+'<?php echo $_smarty_tpl->tpl_vars['deleteStepAction']->value;?>
';


function jsCallDeleteFile(btn, text, o_id) { 
  var my_action='';
  if( btn == 'yes' ) {
    my_action='<?php echo $_smarty_tpl->tpl_vars['gui']->value->delAttachmentURL;?>
'+o_id;
    window.location=my_action;
  }
}         
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:inc_ext_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('css_only'=>1), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['gui']->value->bodyOnLoad != '') {?>
  <?php echo '<script'; ?>
 language="JavaScript">
  var urlP ='';
  <?php if ('' != $_smarty_tpl->tpl_vars['gui']->value->additionalURLPar) {?>
    urlP = '<?php echo $_smarty_tpl->tpl_vars['gui']->value->additionalURLPar;?>
';
  <?php }?>
  // alert('BodyOnLoad :: urlP->' + urlP);
  var addStr = '&onTemplate=tcView&refreshTree=0' + urlP;
  // alert(addStr);
  var <?php echo $_smarty_tpl->tpl_vars['gui']->value->dialogName;?>
 = new std_dialog(addStr);
  <?php echo '</script'; ?>
>  
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:bootstrap.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/clipboard/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
third_party/bootbox/bootbox.all.min.js"><?php echo '</script'; ?>
>
</head>

<?php $_smarty_tpl->_assignInScope('my_style', '');
if ($_smarty_tpl->tpl_vars['gui']->value->hilite_testcase_name) {?>
  <?php $_smarty_tpl->_assignInScope('my_style', "background:#059; color:white; margin:0px 0px 4px 0px;padding:3px;");
}?>

<body onLoad="viewElement(document.getElementById('other_versions'),false);<?php echo $_smarty_tpl->tpl_vars['gui']->value->bodyOnLoad;?>
" onUnload="<?php echo $_smarty_tpl->tpl_vars['gui']->value->bodyOnUnload;?>
">
<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['gui']->value->pageTitle;
if ($_smarty_tpl->tpl_vars['gui']->value->show_match_count) {?> - <?php echo $_smarty_tpl->tpl_vars['labels']->value['match_count'];?>
:<?php echo $_smarty_tpl->tpl_vars['gui']->value->match_count;
}?>
</h1>


<?php if ($_smarty_tpl->tpl_vars['gui']->value->uploadOp != null) {?>
  <?php echo '<script'; ?>
>
  var uplMsg = "<?php echo $_smarty_tpl->tpl_vars['labels']->value['file_upload_ko'];?>
<br>";
  var doAlert = false;
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->uploadOp->statusOK == false) {?>
    uplMsg += "<?php echo $_smarty_tpl->tpl_vars['gui']->value->uploadOp->msg;?>
<br>";
    doAlert = true;
  <?php }?>
  if (doAlert) {
    bootbox.alert(uplMsg);
  }
  <?php echo '</script'; ?>
>
<?php }?>



<?php $_smarty_tpl->_subTemplateRender("file:inc_update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_feedback'=>$_smarty_tpl->tpl_vars['gui']->value->user_feedback,'refresh'=>$_smarty_tpl->tpl_vars['gui']->value->refreshTree), 0, false);
?>
<div class="workBack">

<?php if ($_smarty_tpl->tpl_vars['gui']->value->tc_current_version) {
$__section_idx_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['gui']->value->tc_current_version) ? count($_loop) : max(0, (int) $_loop));
$__section_idx_0_total = $__section_idx_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_idx'] = new Smarty_Variable(array());
if ($__section_idx_0_total !== 0) {
for ($__section_idx_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] = 0; $__section_idx_0_iteration <= $__section_idx_0_total; $__section_idx_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']++){
?>
  <?php $_smarty_tpl->_assignInScope('tcID', $_smarty_tpl->tpl_vars['gui']->value->tc_current_version[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][0]['testcase_id']);?>
  <?php $_smarty_tpl->_assignInScope('tcVersionID', $_smarty_tpl->tpl_vars['gui']->value->tc_current_version[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][0]['id']);?>
  <?php $_smarty_tpl->_assignInScope('hasBeenExecuted', false);?>
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->status_quo[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][$_smarty_tpl->tpl_vars['tcVersionID']->value]['executed'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('hasBeenExecuted', true);?>
  <?php }?>

    <?php $_smarty_tpl->_assignInScope('my_delete_version', "no");?>
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->testcase_other_versions[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)] != null) {?>
    <?php $_smarty_tpl->_assignInScope('my_delete_version', "yes");?>
  <?php }?>

    <?php $_smarty_tpl->_assignInScope('frozen_version', "yes");?>
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->tc_current_version[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][0]['is_open'] == 1) {?>
    <?php $_smarty_tpl->_assignInScope('frozen_version', "no");?>
  <?php }?>

  
  <?php echo $_smarty_tpl->tpl_vars['tlImages']->value['toggle_direct_link'];?>
 &nbsp;
  <?php if ($_smarty_tpl->tpl_vars['gui']->value->display_testcase_path) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gui']->value->path_info[$_smarty_tpl->tpl_vars['tcID']->value], 'path_part');
$_smarty_tpl->tpl_vars['path_part']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path_part']->value) {
$_smarty_tpl->tpl_vars['path_part']->do_else = false;
?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path_part']->value, ENT_QUOTES, 'UTF-8', true);?>
 /
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>

    <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['cog'];?>
" onclick="javascript:toogleShowHide('tcView_viewer_tcase_control_panel_<?php echo $_smarty_tpl->tpl_vars['tcVersionID']->value;?>
','inline');"
         title="<?php echo $_smarty_tpl->tpl_vars['labels']->value['actions'];?>
" />

    <div class="direct_link" style='display:none'><a href="<?php echo $_smarty_tpl->tpl_vars['gui']->value->direct_link;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['gui']->value->direct_link;?>
</a></div>

    <?php $_smarty_tpl->_subTemplateRender("file:testcases/tcView_viewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_tcase_operations_enabled'=>"yes",'args_read_only'=>"no",'args_can_move_copy'=>"yes",'args_can_delete_testcase'=>"yes",'args_show_version'=>"yes",'args_hide_relations'=>"no",'args_new_sibling'=>"yes",'args_bulk_action'=>"yes",'args_tcversion_operation_only_edit_button'=>"no",'args_testcase'=>$_smarty_tpl->tpl_vars['gui']->value->tc_current_version[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][0],'args_status_quo'=>$_smarty_tpl->tpl_vars['gui']->value->status_quo[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)],'args_keywords_map'=>$_smarty_tpl->tpl_vars['gui']->value->currentVersionKeywords,'args_platforms_map'=>$_smarty_tpl->tpl_vars['gui']->value->currentVersionPlatforms,'args_reqs'=>$_smarty_tpl->tpl_vars['gui']->value->req4current_version,'args_relations'=>$_smarty_tpl->tpl_vars['gui']->value->relations[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)],'args_can_do'=>$_smarty_tpl->tpl_vars['gui']->value->can_do,'args_frozen_version'=>$_smarty_tpl->tpl_vars['frozen_version']->value,'args_can_delete_version'=>$_smarty_tpl->tpl_vars['my_delete_version']->value,'args_show_title'=>$_smarty_tpl->tpl_vars['gui']->value->show_title,'args_activate_deactivate_name'=>'activate','args_activate_deactivate'=>'bnt_activate','args_cf'=>$_smarty_tpl->tpl_vars['gui']->value->cf_current_version[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)],'args_tcase_cfg'=>$_smarty_tpl->tpl_vars['gui']->value->tcase_cfg,'args_users'=>$_smarty_tpl->tpl_vars['gui']->value->users,'args_tproject_name'=>$_smarty_tpl->tpl_vars['gui']->value->tprojectName,'args_tsuite_name'=>$_smarty_tpl->tpl_vars['gui']->value->parentTestSuiteName,'args_linked_versions'=>$_smarty_tpl->tpl_vars['gui']->value->linked_versions[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)],'args_has_testplans'=>$_smarty_tpl->tpl_vars['gui']->value->has_testplans), 0, true);
?>
    


        <?php $_smarty_tpl->_assignInScope('bDownloadOnly', false);?>
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->can_do->edit != 'yes' || $_smarty_tpl->tpl_vars['frozen_version']->value == 'yes') {?>
      <?php $_smarty_tpl->_assignInScope('bDownloadOnly', true);?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['hasBeenExecuted']->value && $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->downloadOnlyAfterExec == TRUE) {?>
      <?php $_smarty_tpl->_assignInScope('bDownloadOnly', true);?>
    <?php }?>
 
    
    <?php if (!(isset($_smarty_tpl->tpl_vars['gui']->value->loadOnCancelURL))) {?>
      <?php $_smarty_tpl->_assignInScope('loadOnCancelURL', '');?>
    <?php }?> 

    <?php if ($_smarty_tpl->tpl_vars['gui']->value->attachments != '') {?>
      <div class="workBack">
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['gui']->value->fileUploadURL[$_smarty_tpl->tpl_vars['tcVersionID']->value];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:attachments.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attach_attachmentInfos'=>$_smarty_tpl->tpl_vars['gui']->value->attachments[$_smarty_tpl->tpl_vars['tcVersionID']->value],'attach_downloadOnly'=>$_smarty_tpl->tpl_vars['bDownloadOnly']->value,'attach_uploadURL'=>$_prefixVariable1,'attach_loadOnCancelURL'=>$_smarty_tpl->tpl_vars['gui']->value->loadOnCancelURL), 0, true);
?>
      </div>
    <?php }?>

  
    <?php if ('editOnExec' != $_smarty_tpl->tpl_vars['gui']->value->show_mode && $_smarty_tpl->tpl_vars['gui']->value->testcase_other_versions[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)] != null) {?>
        <?php $_smarty_tpl->_assignInScope('vid', $_smarty_tpl->tpl_vars['gui']->value->tc_current_version[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][0]['id']);?>
        <?php $_smarty_tpl->_assignInScope('div_id', "vers_".((string)$_smarty_tpl->tpl_vars['vid']->value));?>
        <?php $_smarty_tpl->_assignInScope('memstatus_id', "mem_".((string)$_smarty_tpl->tpl_vars['div_id']->value));?>
        <br />
        <?php $_smarty_tpl->_subTemplateRender("file:inc_show_hide_mgmt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_hide_container_title'=>$_smarty_tpl->tpl_vars['labels']->value['other_versions'],'show_hide_container_id'=>$_smarty_tpl->tpl_vars['div_id']->value,'show_hide_container_draw'=>false,'show_hide_container_class'=>'exec_additional_info','show_hide_container_view_status_id'=>$_smarty_tpl->tpl_vars['memstatus_id']->value), 0, true);
?>
               
        <div id="vers_<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
" class="workBack">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gui']->value->testcase_other_versions[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)], 'my_testcase', false, 'tdx');
$_smarty_tpl->tpl_vars['my_testcase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tdx']->value => $_smarty_tpl->tpl_vars['my_testcase']->value) {
$_smarty_tpl->tpl_vars['my_testcase']->do_else = false;
?>
  
          <?php $_smarty_tpl->_assignInScope('tcversion_id', $_smarty_tpl->tpl_vars['my_testcase']->value['id']);?>
          
          <?php $_smarty_tpl->_assignInScope('thisVersionIsExecuted', false);?>
          <?php if ($_smarty_tpl->tpl_vars['gui']->value->status_quo[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][$_smarty_tpl->tpl_vars['tcversion_id']->value]['executed'] != '') {?>
            <?php $_smarty_tpl->_assignInScope('thisVersionIsExecuted', true);?>
          <?php }?>

          <?php $_smarty_tpl->_assignInScope('version_num', $_smarty_tpl->tpl_vars['my_testcase']->value['version']);?>
          <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['labels']->value['version']);?>
          <?php $_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['title']->value)." ".((string)$_smarty_tpl->tpl_vars['version_num']->value));?>

          <?php $_smarty_tpl->_assignInScope('tcv_frozen_version', "no");?>
    		  <?php if ($_smarty_tpl->tpl_vars['my_testcase']->value['is_open'] == 0) {?>
      			<?php $_smarty_tpl->_assignInScope('tcv_frozen_version', "yes");?>
    		  <?php }?>
		  
          <?php $_smarty_tpl->_assignInScope('sep', "_");?>
          <?php $_smarty_tpl->_assignInScope('div_id', "v_".((string)$_smarty_tpl->tpl_vars['vid']->value));?>
          <?php $_smarty_tpl->_assignInScope('div_id', ((string)$_smarty_tpl->tpl_vars['div_id']->value).((string)$_smarty_tpl->tpl_vars['sep']->value).((string)$_smarty_tpl->tpl_vars['version_num']->value));?>
          <?php $_smarty_tpl->_assignInScope('memstatus_id', "mem_".((string)$_smarty_tpl->tpl_vars['div_id']->value));?>
          <?php $_smarty_tpl->_subTemplateRender("file:inc_show_hide_mgmt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_hide_container_title'=>$_smarty_tpl->tpl_vars['title']->value,'show_hide_container_id'=>$_smarty_tpl->tpl_vars['div_id']->value,'show_hide_container_draw'=>false,'show_hide_container_class'=>'exec_additional_info','show_hide_container_view_status_id'=>$_smarty_tpl->tpl_vars['memstatus_id']->value), 0, true);
?>
                     
              <div id="<?php echo $_smarty_tpl->tpl_vars['div_id']->value;?>
" class="workBack">
              
              <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['cog'];?>
" 
                onclick="javascript:toogleShowHide('tcView_viewer_tcase_control_panel_<?php echo $_smarty_tpl->tpl_vars['tcversion_id']->value;?>
','inline');"
                   title="<?php echo $_smarty_tpl->tpl_vars['labels']->value['actions'];?>
" />

                                          <?php $_smarty_tpl->_subTemplateRender("file:testcases/tcView_viewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_tcase_cfg'=>$_smarty_tpl->tpl_vars['gui']->value->tcase_cfg,'args_read_only'=>$_smarty_tpl->tpl_vars['tcv_frozen_version']->value,'args_can_move_copy'=>"no",'args_can_delete_testcase'=>'no','args_can_delete_version'=>"yes",'args_hide_relations'=>"no",'args_show_version'=>"no",'args_show_title'=>"no",'args_new_sibling'=>"no",'args_bulk_action'=>"no",'args_tcase_operations_enabled'=>"no",'args_testcase'=>$_smarty_tpl->tpl_vars['my_testcase']->value,'args_status_quo'=>$_smarty_tpl->tpl_vars['gui']->value->status_quo[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)],'args_keywords_map'=>$_smarty_tpl->tpl_vars['gui']->value->otherVersionsKeywords[$_smarty_tpl->tpl_vars['tdx']->value],'args_platforms_map'=>$_smarty_tpl->tpl_vars['gui']->value->otherVersionsPlatforms[$_smarty_tpl->tpl_vars['tdx']->value],'args_reqs'=>$_smarty_tpl->tpl_vars['gui']->value->req4OtherVersions[$_smarty_tpl->tpl_vars['tdx']->value],'args_relations'=>$_smarty_tpl->tpl_vars['gui']->value->otherVersionsRelations[$_smarty_tpl->tpl_vars['tdx']->value],'args_can_do'=>$_smarty_tpl->tpl_vars['gui']->value->can_do,'args_frozen_version'=>$_smarty_tpl->tpl_vars['tcv_frozen_version']->value,'args_users'=>$_smarty_tpl->tpl_vars['gui']->value->users,'args_cf'=>$_smarty_tpl->tpl_vars['gui']->value->cf_other_versions[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)][$_smarty_tpl->tpl_vars['tdx']->value],'args_linked_versions'=>null,'args_has_testplans'=>$_smarty_tpl->tpl_vars['gui']->value->has_testplans), 0, true);
?>


              <?php $_smarty_tpl->_assignInScope('downloadOnly', false);?> 
              <?php if ($_smarty_tpl->tpl_vars['thisVersionIsExecuted']->value && $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->downloadOnlyAfterExec == TRUE) {?>
                <?php $_smarty_tpl->_assignInScope('downloadOnly', true);?>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['tcv_frozen_version']->value == "yes") {?>
                <?php $_smarty_tpl->_assignInScope('downloadOnly', true);?> 
              <?php }?>
              <?php $_smarty_tpl->_subTemplateRender("file:attachments.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attach_attachmentInfos'=>$_smarty_tpl->tpl_vars['gui']->value->attachments[$_smarty_tpl->tpl_vars['tcversion_id']->value],'attach_downloadOnly'=>$_smarty_tpl->tpl_vars['downloadOnly']->value,'attach_uploadURL'=>$_smarty_tpl->tpl_vars['gui']->value->fileUploadURL[$_smarty_tpl->tpl_vars['tcversion_id']->value],'attach_loadOnCancelURL'=>$_smarty_tpl->tpl_vars['gui']->value->loadOnCancelURL), 0, true);
?>

             </div>
             <br />
             
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
  
                        <?php echo '<script'; ?>
 type="text/javascript">
          viewElement(document.getElementById('vers_<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
'),false);
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gui']->value->testcase_other_versions[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)], 'my_testcase');
$_smarty_tpl->tpl_vars['my_testcase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['my_testcase']->value) {
$_smarty_tpl->tpl_vars['my_testcase']->do_else = false;
?>
            viewElement(document.getElementById('v_<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['my_testcase']->value['version'];?>
'),false);
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php echo '</script'; ?>
>
            <?php }?>
    <br>
<?php
}
}
} else { ?>
  <?php if ((isset($_smarty_tpl->tpl_vars['gui']->value->warning_msg))) {?>
    <?php echo $_smarty_tpl->tpl_vars['gui']->value->warning_msg;?>

  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['labels']->value['no_records_found'];?>

  <?php }
}?>

</div>
<?php if ($_smarty_tpl->tpl_vars['gui']->value->refreshTree) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:inc_refreshTreeWithFilters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</body>
</html><?php }
}
