<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\steps_horizontal.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350a73bf4_09467794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e1343cae88af99568bce0ad0572af4a34352e2' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\steps_horizontal.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error_icon.tpl' => 1,
    'file:execute/add_issue_on_step.inc.tpl' => 1,
    'file:execute/issue_inputs_on_step.inc.tpl' => 1,
    'file:attachments_simple.inc.tpl' => 1,
  ),
),false)) {
function content_6a02e350a73bf4_09467794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
  <?php $_smarty_tpl->_assignInScope('inExec', 0);?>
  <?php if ((isset($_smarty_tpl->tpl_vars['add_exec_info']->value)) && $_smarty_tpl->tpl_vars['add_exec_info']->value) {?>
    <?php $_smarty_tpl->_assignInScope('inExec', 1);?>
  <?php }?>  

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" 
  src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
node_modules/tablednd/js/jquery.tablednd.js">
<?php echo '</script'; ?>
>


<div class="workBack">
  <table class="simple" id="stepsOnTable">
  <tr class="nodrag">
    <th width="40px"><nobr>
    <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['steps']->value != '' && !is_null($_smarty_tpl->tpl_vars['steps']->value) && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>
      <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['reorder'];?>
" align="left"
           title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['show_hide_reorder'];?>
"
           onclick="showHideByClass('span','order_info');">
      <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['ghost_item'];?>
" align="left"
           title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['show_ghost_string'];?>
"
           onclick="showHideByClass('span','ghost');">
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['step_number'];?>

    </th>
    <th><?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['step_actions'];?>

    </th>
    <th><?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['expected_results'];?>
</th>
    <?php if ($_smarty_tpl->tpl_vars['session']->value['testprojectOptions']->automationEnabled) {?>
    <th width="25"><?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['execution_type_short_descr'];?>
</th>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value) {?>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['inExec']->value) {?>
      <th><?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->exec_cfg->steps_exec_notes_default == 'latest') {
echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['latest_exec_notes'];?>

          <?php } else {
echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['step_exec_notes'];
}?>
          <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['clear_notes'];?>
" 
          onclick="javascript:clearTextAreaByClassName('step_note_textarea');" title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['clear_all_notes'];?>
"></th>

      <th><?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['step_exec_status'];?>

       <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['reset'];?>
" 
          onclick="javascript:clearSelectByClassName('step_status');" title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['clear_all_status'];?>
"></th>
    <?php }?>    
  </tr>

  <?php $_smarty_tpl->_assignInScope('rowCount', count($_smarty_tpl->tpl_vars['steps']->value));?> 
  <?php $_smarty_tpl->_assignInScope('row', 0);?>

  <?php $_smarty_tpl->_assignInScope('att_ena', $_smarty_tpl->tpl_vars['inExec']->value && $_smarty_tpl->tpl_vars['tlCfg']->value->exec_cfg->steps_exec_attachments);?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value, 'step_info');
$_smarty_tpl->tpl_vars['step_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step_info']->value) {
$_smarty_tpl->tpl_vars['step_info']->do_else = false;
?>
  <tr id="step_row_<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
" style="border: 1px solid white;">
    <td style="text-align:center;">
      <span class="order_info" style='display:none'>
      <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>
        <input type="text" class="step_number<?php echo $_smarty_tpl->tpl_vars['args_testcase']->value['id'];?>
" name="step_set[<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
]" id="step_set_<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
"
          value="<?php echo $_smarty_tpl->tpl_vars['step_info']->value['step_number'];?>
"
          size="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'STEP_NUMBER_SIZE');?>
"
          maxlength="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'STEP_NUMBER_MAXLEN');?>
">
        <?php $_smarty_tpl->_subTemplateRender("file:error_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>"step_number"), 0, true);
?>
      <?php }?>
      </span>
      <span id="tcstep_<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['step_info']->value['step_number'];?>
</span>
      <?php $_smarty_tpl->_assignInScope('spanid', "tcstep_ghost_".((string)$_smarty_tpl->tpl_vars['step_info']->value['id']));?>
      <?php if ($_smarty_tpl->tpl_vars['ghost_control']->value) {?>
        <span id="<?php echo $_smarty_tpl->tpl_vars['spanid']->value;?>
" 
              class="ghost" 
              style="display:none"
              title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['click_to_copy_ghost_to_clipboard'];?>
"
              onclick="copyGhostString('<?php echo $_smarty_tpl->tpl_vars['spanid']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['step_info']->value['ghost_action'];?>
</span>    
      <?php }?>
    </td>
    <td title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['doubleclick_to_edit'];?>
" <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?> style="cursor:pointer;" ondblclick="launchEditStep(<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
)" <?php }?>><?php if ($_smarty_tpl->tpl_vars['gui']->value->stepDesignEditorType == 'none') {
echo nl2br($_smarty_tpl->tpl_vars['step_info']->value['actions']);
} else {
echo $_smarty_tpl->tpl_vars['step_info']->value['actions'];
}?>
    </td>
    <td title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['doubleclick_to_edit'];?>
" <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?> style="cursor:pointer;" ondblclick="launchEditStep(<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
)" <?php }?>><?php if ($_smarty_tpl->tpl_vars['gui']->value->stepDesignEditorType == 'none') {
echo nl2br($_smarty_tpl->tpl_vars['step_info']->value['expected_results']);
} else {
echo $_smarty_tpl->tpl_vars['step_info']->value['expected_results'];
}?></td>
    <?php if ($_smarty_tpl->tpl_vars['session']->value['testprojectOptions']->automationEnabled) {?>
    <td <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?> style="cursor:pointer;" ondblclick="launchEditStep(<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
)" <?php }?>><?php echo $_smarty_tpl->tpl_vars['gui']->value->execution_types[$_smarty_tpl->tpl_vars['step_info']->value['execution_type']];?>
</td>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>
    <td class="clickable_icon">
      <img style="border:none;cursor: pointer;"
           title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['delete_step'];?>
"
           alt="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['delete_step'];?>
"
           onclick="delete_confirmation(<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
,'<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['step_info']->value['step_number'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{")), ENT_QUOTES, 'UTF-8', true);?>
',
                                         '<?php echo $_smarty_tpl->tpl_vars['del_msgbox_title']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['warning_msg']->value;?>
');"
           src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['delete'];?>
"/>
    </td>
    
    <td class="clickable_icon">
      <img style="border:none;cursor: pointer;"  title="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['insert_step'];?>
"    
           alt="<?php echo $_smarty_tpl->tpl_vars['inc_steps_labels']->value['insert_step'];?>
"
           onclick="launchInsertStep(<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
);"    src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['insert_step'];?>
"/>
    </td>
    
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['inExec']->value) {?>
      <td class="exec_tcstep_note">
        <textarea class="step_note_textarea" 
          name="step_notes[<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
]" id="step_notes_<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
" 
          cols="40" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['step_info']->value['execution_notes'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
      </td>

      <td>
        <select class="step_status" name="step_status[<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
]" id="step_status_<?php echo $_smarty_tpl->tpl_vars['step_info']->value['id'];?>
">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gui']->value->execStepStatusValues,'selected'=>$_smarty_tpl->tpl_vars['step_info']->value['execution_status']),$_smarty_tpl);?>


        </select> <br>
        
        <?php if ($_smarty_tpl->tpl_vars['gui']->value->tlCanCreateIssue) {?>
          <?php $_smarty_tpl->_subTemplateRender("file:execute/add_issue_on_step.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_labels'=>$_smarty_tpl->tpl_vars['labels']->value,'args_step_id'=>$_smarty_tpl->tpl_vars['step_info']->value['id']), 0, true);
?>
        <?php }?>
      </td>

    <?php }?>
   
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['inExec']->value && $_smarty_tpl->tpl_vars['gui']->value->tlCanCreateIssue) {?> 
    <tr>
      <td colspan=6>
      <?php $_smarty_tpl->_subTemplateRender("file:execute/issue_inputs_on_step.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('args_labels'=>$_smarty_tpl->tpl_vars['labels']->value,'args_step_id'=>$_smarty_tpl->tpl_vars['step_info']->value['id']), 0, true);
?>
      </td>
    </tr> 
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['gui']->value->allowStepAttachments && $_smarty_tpl->tpl_vars['att_ena']->value) {?>
    <tr>
      <td colspan=6>
      <?php $_smarty_tpl->_subTemplateRender("file:attachments_simple.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attach_id'=>$_smarty_tpl->tpl_vars['step_info']->value['id']), 0, true);
?>
      </td>
    </tr> 
  <?php }?> 
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 </table>
</div>

<input type="hidden" name="stepSeq" id="stepSeq" value="">
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
    // Initialise the table
    $("#stepsOnTable").tableDnD({
      onDrop: function(table, row) {
          var xx = $.tableDnD.serialize()
                    .replace(/stepsOnTable/g,'')
                    .replace(/%5D/g,'')
                    .replace(/%5B/g,'')
                    .replace(/=/g,'')
                    .replace(/step_row_/g,'');
          $('#stepSeq').val(xx);

          // alert('Before jQuery AJAX');    
          url2call = fRoot+'lib/ajax/stepReorder.php';
          // alert(url2call);

          // -------------------------------------
          jQuery.ajax({
                  url: url2call,
                  data: {
                      'stepSeq': xx,
                  },
                  success:function(data) {
                    /* 
                     update screen
                    */
                    var parsec = JSON.parse(data);
                    for(var prop in parsec) {
                      jQuery("span#tcstep_" + prop).html(parsec[prop]);
                    } 
                    alert('Steps numbers have been re-sequenced'); 
                    // console.log(data);
                    // console.log('done');
                  },
                  error: function(){
                    console.log('FAILURE AJAX CALL -> ' + url2call);
                  }
              });  

          // alert('Use the Resequence Steps Button To Save');    
      }
    });
});
<?php echo '</script'; ?>
><?php }
}
