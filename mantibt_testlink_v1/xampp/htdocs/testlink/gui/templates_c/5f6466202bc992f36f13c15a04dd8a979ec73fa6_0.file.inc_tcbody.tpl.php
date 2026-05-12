<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\inc_tcbody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350945fe7_28549459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f6466202bc992f36f13c15a04dd8a979ec73fa6' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\inc_tcbody.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:testcases/tctitle.inc.tpl' => 1,
  ),
),false)) {
function content_6a02e350945fe7_28549459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('tco', $_smarty_tpl->tpl_vars['inc_tcbody_testcase']->value);?>

<?php $_smarty_tpl->_subTemplateRender("file:testcases/tctitle.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<!-- ------------------------------------------- -->

<?php if ($_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['after_title'] != '') {?>
  <div style="padding: 5px 3px 4px 5px;"> 
    <div id="cf_after_title" style="padding: 5px 3px 4px 5px;"
         class="custom_field_container">
      <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['after_title'];?>

    </div>
  </div  
<?php }?>

<?php $_smarty_tpl->_assignInScope('showSummary', 0);
if ($_smarty_tpl->tpl_vars['tco']->value['summary'] != '' || ($_smarty_tpl->tpl_vars['tco']->value['summary'] == '' && $_smarty_tpl->tpl_vars['gui']->value->hideSummary == FALSE)) {?> 
  <?php $_smarty_tpl->_assignInScope('showSummary', 1);
}?>

<?php $_smarty_tpl->_assignInScope('showPreconditions', 0);
if ($_smarty_tpl->tpl_vars['tco']->value['preconditions'] != '' || ($_smarty_tpl->tpl_vars['tco']->value['preconditions'] == '' && $_smarty_tpl->tpl_vars['gui']->value->hidePreconditions == FALSE)) {?>    
  <?php $_smarty_tpl->_assignInScope('showPreconditions', 1);
}?>


<div class="mainAttrContainer"> 
  <div class="summaryCONTAINER">
    <?php if ($_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['before_summary'] != '') {?>
      <div id="cf_before_summary"
            class="custom_field_container">
        <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['before_summary'];?>

      </div>
      <br>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['showSummary']->value) {?> 
      <div class="labelHolder"><?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['summary'];?>
</div>
      <div id="summary"><?php if ($_smarty_tpl->tpl_vars['inc_tcbody_editor_type']->value == 'none') {
echo nl2br($_smarty_tpl->tpl_vars['tco']->value['summary']);
} else {
echo $_smarty_tpl->tpl_vars['tco']->value['summary'];
}?></div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['after_summary'] != '') {?>
      <br>
      <div id="cf_after_summary"
            class="custom_field_container">
        <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['after_summary'];?>

      </div>
    <?php }?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['showPreconditions']->value && $_smarty_tpl->tpl_vars['showSummary']->value) {?>
    <div class="spaceOne" style="margin-top:35px;"></div>
  <?php }?>

  <div class="preconditionsCONTAINER">
    <?php if ($_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['before_preconditions'] != '') {?>
      <div id="cf_before_preconditions"
            class="custom_field_container">
        <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['before_preconditions'];?>

      </div>
      <br>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['showPreconditions']->value) {?> 
      <?php $_smarty_tpl->_assignInScope('spanid', "preconditions_".((string)$_smarty_tpl->tpl_vars['tco']->value['id']));?>
      <span id="<?php echo $_smarty_tpl->tpl_vars['spanid']->value;?>
" 
            class="ghost" 
            style="display:none"><?php echo $_smarty_tpl->tpl_vars['tco']->value['ghost_preconditions'];?>
</span>    

      <div class="labelHolder"><?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['preconditions'];?>

        <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['ghost_item'];?>
"
             title="<?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['click_to_copy_ghost_to_clipboard'];?>
"
             onclick="copyAttrGhostString('<?php echo $_smarty_tpl->tpl_vars['spanid']->value;?>
');">
      </div>
      <div><?php if ($_smarty_tpl->tpl_vars['inc_tcbody_editor_type']->value == 'none') {
echo nl2br($_smarty_tpl->tpl_vars['tco']->value['preconditions']);
} else {
echo $_smarty_tpl->tpl_vars['tco']->value['preconditions'];
}?></div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['after_summary'] != '') {?>
      <br>
      <div id="cf_after_preconditions"
            class="custom_field_container">
        <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['after_preconditions'];?>

      </div>
    <?php }?>
  </div>
  
  <?php if ($_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['before_steps_results'] != '') {?>
    <div class="CFBeforeStepsCONTAINER">
      <div class="custom_field_container">
        <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_cf']->value['before_steps_results'];?>

      </div>
    </div>
  <?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['showPreconditions']->value && $_smarty_tpl->tpl_vars['showSummary']->value) {?>
  <hr>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
function copyAttrGhostString(spanID) {
  var ghostString = document.getElementById(spanID).innerText;
  navigator.clipboard.writeText(ghostString);
}
<?php echo '</script'; ?>
>
<?php }
}
