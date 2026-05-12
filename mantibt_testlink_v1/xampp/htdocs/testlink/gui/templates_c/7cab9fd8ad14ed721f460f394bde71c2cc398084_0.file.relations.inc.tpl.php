<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\relations.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350c56b49_55287752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cab9fd8ad14ed721f460f394bde71c2cc398084' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\relations.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e350c56b49_55287752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'rel_labels','s'=>'relation_id, relation_type, relation_status, relation_project,
             relation_set_by, relation_delete, relations, new_relation, by, title_created,can_not_delete_a_frozen_relation,
             in, btn_add, img_title_delete_relation,no_records_found,other_versions,version,
             title_test_case,match_count,warning,can_not_edit_frozen_tc,can_not_delete_relation_frozen_tc,can_not_delete_relation_because_this_is_not_the_latest,
             commit_title,current_direct_link,current_testcase,test_case,relation_set_on,this_tcversion,can_not_delete_relation_tcversion_frozen,can_not_delete_relation_related_tcversion_frozen,
             specific_direct_link,req_does_not_exist,actions,tcase_relation_hint,tcase_relation_help'),$_smarty_tpl ) );?>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'delete_rel_msgbox_msg','var'=>'delete_rel_msgbox_msg'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'delete_rel_msgbox_title','var'=>'delete_rel_msgbox_title'),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
var alert_box_title = "<?php echo strtr($_smarty_tpl->tpl_vars['rel_labels']->value['warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
var delete_rel_msgbox_msg = '<?php echo strtr($_smarty_tpl->tpl_vars['delete_rel_msgbox_msg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var delete_rel_msgbox_title = '<?php echo strtr($_smarty_tpl->tpl_vars['delete_rel_msgbox_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

/**
 * 
 *
 */
function relation_delete_confirmation(item_id, relation_id, title, msg, pFunction) 
{
  var my_msg = msg.replace('%i',relation_id);
  var safe_title = escapeHTML(title);
  Ext.Msg.confirm(safe_title, my_msg,
                  function(btn, text) { 
                    pFunction(btn,text,item_id, relation_id);
                  });
}


/**
 * 
 *
 */
function delete_relation(btn, text, item_id, relation_id)  {
  
  var my_url = "<?php echo $_smarty_tpl->tpl_vars['gui']->value->delTCVRelationURL;?>
";
  var dummy = my_url.replace('%1',item_id);
  var my_action = dummy.replace('%2',relation_id);

  if( btn == 'yes' ) {
    window.location=my_action;
  }
}

var pF_delete_relation = delete_relation;

<?php echo '</script'; ?>
>
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
  <input type="hidden" name="doAction" value="doAddRelation" />
      
  <input type="hidden" name="relation_source_tcase_id" id="relation_source_tcase_id"
         value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcase_id;?>
" />

    <input type="hidden" name="relation_source_tcversion_id" 
         id="relation_source_tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcversion_id;?>
" />
             
  <input type="hidden" name="tcase_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcase_id;?>
" />
  <input type="hidden" name="tcversion_id" 
    value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcversion_id;?>
" />

  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'tplan_id')) {?> 
    <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />
  <?php }?>
  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'show_mode')) {?> 
    <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
  <?php }?>

    <table class="simple" id="relations_<?php echo $_smarty_tpl->tpl_vars['tcversion_id']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['args_edit_enabled']->value) {?>
      <?php $_smarty_tpl->_assignInScope('canWork', $_smarty_tpl->tpl_vars['args_is_latest_tcv']->value == 1 || $_smarty_tpl->tpl_vars['tlCfg']->value->testcase_cfg->addTCVRelationsOnlyOnLatestTCVersion == 0);?>

      <br>
      <?php if ($_smarty_tpl->tpl_vars['canWork']->value) {?>
        <tr><th colspan="7"><?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['relations'];?>
 
          <?php if ($_smarty_tpl->tpl_vars['args_relations']->value['num_relations'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['args_relations']->value['num_relations'];?>
) <?php }?>
        </th></tr>

        <?php if ($_smarty_tpl->tpl_vars['gui']->value->add_relation_feedback_msg != '') {?>
          <tr style="height:40px; vertical-align: middle;">
            <td style="height:40px; vertical-align: middle;" colspan="7">
              <div class="info"><?php echo $_smarty_tpl->tpl_vars['gui']->value->add_relation_feedback_msg;?>
</div>
            </td>
          </tr>
        <?php }?>
  		
  		  <?php if ($_smarty_tpl->tpl_vars['args_frozen_version']->value == "no") {?>
            <tr style="height:40px; vertical-align: middle;"><td style="height:40px; vertical-align: middle;" colspan="7">
            
              <span class="bold"><?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['new_relation'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['this_tcversion'];?>

                
              <select name="relation_type">
              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gui']->value->relation_domain['items'],'selected'=>$_smarty_tpl->tpl_vars['gui']->value->relation_domain['selected']),$_smarty_tpl);?>

              </select>
          
              <input type="text" name="relation_destination_tcase" id="relation_destination_tcase"
                     placeholder="<?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['tcase_relation_hint'];?>
"
                     title="<?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['tcase_relation_help'];?>
"
                     size="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TC_EXTERNAL_ID_SIZE');?>
" maxlength="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TC_EXTERNAL_ID_MAXLEN');?>
" 
                     onclick="javascript:this.value=''" required />
              
              <input type="submit" name="relation_submit_btn" value="<?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['btn_add'];?>
" />          
              </td>
            </tr>
  		  <?php }?>

      <?php }?>
    <?php }?> 

        <?php if ($_smarty_tpl->tpl_vars['args_relations']->value['num_relations'] > 0) {?>
      
      <tr>
        <th><nobr><?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['relation_id'];?>
 / <?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['relation_type'];?>
</nobr></th>
        <th colspan="1"><?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['test_case'];?>
</th>
        <th><nobr><?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['relation_set_by'];?>
</nobr></th>
        <th><nobr>&nbsp;</nobr></th>
      </tr>
      

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['args_relations']->value['relations'], 'rx');
$_smarty_tpl->tpl_vars['rx']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rx']->value) {
$_smarty_tpl->tpl_vars['rx']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('canDel', $_smarty_tpl->tpl_vars['args_edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == 'no' && $_smarty_tpl->tpl_vars['rx']->value['related_tcase']['is_open'] && $_smarty_tpl->tpl_vars['rx']->value['link_status'] == (defined('LINK_TC_RELATION_OPEN') ? constant('LINK_TC_RELATION_OPEN') : null));?>
        
        <?php if ($_smarty_tpl->tpl_vars['canDel']->value == 0) {?>
          <?php $_smarty_tpl->_assignInScope('cannotDelMsg', '...');?>      
                    <?php if ($_smarty_tpl->tpl_vars['args_edit_enabled']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', '');?>      
          <?php } elseif ($_smarty_tpl->tpl_vars['rx']->value['link_status'] != (defined('LINK_TC_RELATION_OPEN') ? constant('LINK_TC_RELATION_OPEN') : null)) {?>
            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', $_smarty_tpl->tpl_vars['rel_labels']->value['can_not_delete_a_frozen_relation']);?>

          <?php } elseif ($_smarty_tpl->tpl_vars['rx']->value['link_status'] == (defined('LINK_TC_RELATION_OPEN') ? constant('LINK_TC_RELATION_OPEN') : null)) {?>

            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', 'rop');?>      
            <?php if ($_smarty_tpl->tpl_vars['args_is_latest_tcv']->value == 0) {?>
              <?php $_smarty_tpl->_assignInScope('cannotDelMsg', $_smarty_tpl->tpl_vars['rel_labels']->value['can_not_delete_relation_because_this_is_not_the_latest']);?>
            <?php }?>

          <?php } elseif ($_smarty_tpl->tpl_vars['args_frozen_version']->value == "yes") {?>
            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', $_smarty_tpl->tpl_vars['rel_labels']->value['can_not_delete_relation_tcversion_frozen']);?>
          <?php } elseif ($_smarty_tpl->tpl_vars['rx']->value['related_tcase']['is_open'] == 0) {?>
            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', $_smarty_tpl->tpl_vars['rel_labels']->value['can_not_delete_relation_related_tcversion_frozen']);?>
          <?php } elseif ($_smarty_tpl->tpl_vars['args_is_latest_tcv']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', $_smarty_tpl->tpl_vars['rel_labels']->value['can_not_delete_relation_because_this_is_not_the_latest']);?>            
          <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('cannotDelMsg', $_smarty_tpl->tpl_vars['rel_labels']->value['can_not_delete_a_frozen_relation']);?>
          <?php }?>
        <?php }?>  
        <tr>
          <td class="bold"><nobr><?php echo $_smarty_tpl->tpl_vars['rx']->value['id'];?>
 / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rx']->value['type_localized'], ENT_QUOTES, 'UTF-8', true);?>
</nobr></td>
          <td>
            <a href="javascript:openTCaseWindow(<?php echo $_smarty_tpl->tpl_vars['rx']->value['related_tcase']['testcase_id'];?>
,<?php echo $_smarty_tpl->tpl_vars['rx']->value['related_tcase']['id'];?>
)">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rx']->value['related_tcase']['fullExternalID'], ENT_QUOTES, 'UTF-8', true);?>
:
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rx']->value['related_tcase']['name'], ENT_QUOTES, 'UTF-8', true);?>
 [<?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['version'];?>
 <?php echo $_smarty_tpl->tpl_vars['rx']->value['related_tcase']['version'];?>
]</a></td>
          <td><nobr><span title="<?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['title_created'];?>
 <?php echo $_smarty_tpl->tpl_vars['rx']->value['creation_ts'];?>
 <?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['by'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rx']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
">
             <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rx']->value['author'], ENT_QUOTES, 'UTF-8', true);?>
</span></nobr></td>

          
		     <?php if ($_smarty_tpl->tpl_vars['canDel']->value) {?>
          <td align="center">
            <a href="javascript:relation_delete_confirmation(<?php echo $_smarty_tpl->tpl_vars['args_relations']->value['item']['testcase_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['rx']->value['id'];?>
, 
                                                              delete_rel_msgbox_title, delete_rel_msgbox_msg, 
                                                              pF_delete_relation);">
           <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['delete'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rel_labels']->value['img_title_delete_relation'];?>
"  style="border:none" /></a>
          </td>
		  <?php } else { ?>
  		  <td align="center">
  			<img style="border:none;" 	alt="<?php echo $_smarty_tpl->tpl_vars['cannotDelMsg']->value;?>
"
  			   title="<?php echo $_smarty_tpl->tpl_vars['cannotDelMsg']->value;?>
"	src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['vorsicht'];?>
" />
  		  </td>
		  <?php }?>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    
    </table>
    </form>
<?php }
}
