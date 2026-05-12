<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\attributesLinearForViewer.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350b0e387_19563204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9935556ebe5ccbeb3346039eeec2888ea5ddba8' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\attributesLinearForViewer.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e350b0e387_19563204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<p>
<fieldset>
<legend></legend>
<form style="display:inline;" 
      id="statusForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" name="statusForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
"  
      method="post" action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">

  <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
  <input type="hidden" name="doAction" value="setStatus">
  <input type="hidden" name="testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
  <input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
  <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />

  <span class="labelHolder" title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['onchange_save'];?>
">
  <?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['status'];
echo (defined('TITLE_SEP') ? constant('TITLE_SEP') : null);?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_testcase']->value['is_open']) {?>
  <select name="status" id="status" onchange="document.getElementById('statusForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
').submit();">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gui']->value->domainTCStatus,'selected'=>$_smarty_tpl->tpl_vars['args_testcase']->value['status']),$_smarty_tpl);?>

  </select>
  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['gui']->value->domainTCStatus[$_smarty_tpl->tpl_vars['args_testcase']->value['status']];?>

  <?php }?>
</form>

<?php if ($_smarty_tpl->tpl_vars['session']->value['testprojectOptions']->testPriorityEnabled) {?>
   <form style="display:inline;" id="importanceForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" 
         name="importanceForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" method="post" 
         action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">

    <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
    <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />
    <input type="hidden" name="doAction" value="setImportance">
    <input type="hidden" name="testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
    <input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
    
  <span class="labelHolder" title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['onchange_save'];?>
"
        style="margin-left:20px;"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['importance'];
echo (defined('TITLE_SEP') ? constant('TITLE_SEP') : null);?>
</span>
    <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_testcase']->value['is_open']) {?>
    <select name="importance" onchange="document.getElementById('importanceForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
').submit();" >
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gsmarty_option_importance']->value,'selected'=>$_smarty_tpl->tpl_vars['args_testcase']->value['importance']),$_smarty_tpl);?>

    </select>
    <?php } else { ?>
      <?php echo $_smarty_tpl->tpl_vars['gsmarty_option_importance']->value[$_smarty_tpl->tpl_vars['args_testcase']->value['importance']];?>

    <?php }?>
   </form>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['session']->value['testprojectOptions']->automationEnabled) {?>
<form style="display:inline;" id="execTypeForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" 
      name="execTypeForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
  
    <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />  
    <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />
    <input type="hidden" name="doAction" value="setExecutionType">
    <input type="hidden" name="testcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
    <input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />
  <span class="labelHolder" title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['onchange_save'];?>
" 
        style="margin-left:20px;"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['execution_type'];
echo (defined('TITLE_SEP') ? constant('TITLE_SEP') : null);?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_testcase']->value['is_open']) {?>
    <select name="exec_type" onchange="document.getElementById('execTypeForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
').submit();" >
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gui']->value->execution_types,'selected'=>$_smarty_tpl->tpl_vars['args_testcase']->value['execution_type']),$_smarty_tpl);?>

    </select>
    <input name="changeExecTypeOnSteps" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['applyExecTypeChangeToAllSteps'];?>

  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['gui']->value->execution_types[$_smarty_tpl->tpl_vars['args_testcase']->value['execution_type']];?>

  <?php }?>
</form>
<?php }?>

<br>
<form style="display:inline;" id="estimatedExecDurationForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" 
      name="estimatedExecDurationForm_<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" method="post"
      action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">

  <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
  <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />      
  <input type="hidden" name="doAction" 
    value="setEstimatedExecDuration">
  <input type="hidden" name="testcase_id" 
    value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['testcase_id'];?>
" />
  <input type="hidden" name="tcversion_id" 
    value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" />

  <span class="labelHolder" title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['estimated_execution_duration'];?>
"
        style="margin-left:20px;"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['estimated_execution_duration_short'];
echo (defined('TITLE_SEP') ? constant('TITLE_SEP') : null);?>
</span>

  <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_testcase']->value['is_open']) {?>
  <span>
  <input type="text" name="estimated_execution_duration" id="estimated_execution_duration"
       size="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'EXEC_DURATION_SIZE');?>
" maxlength="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'EXEC_DURATION_MAXLEN');?>
"
       title="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['estimated_execution_duration'];?>
" 
       value="<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['estimated_exec_duration'];?>
" <?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->estimated_execution_duration->required;?>
>
  <input type="submit" name="setEstimated" value="<?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['btn_save'];?>
" />
  </span>
  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['estimated_exec_duration'];?>

  <?php }?>

</form>
</fieldset><?php }
}
