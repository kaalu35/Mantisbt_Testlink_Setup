<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\keywords.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350b6b215_61627931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a02df60819319ef07f4a014304ea65867f2eb7' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\keywords.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e350b6b215_61627931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'kw_labels','s'=>'btn_add,img_title_remove_keyword,warning,select_keywords,
             createKW,btn_create_and_link'),$_smarty_tpl ) );?>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'remove_kw_msgbox_msg','var'=>'remove_kw_msgbox_msg'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'remove_kw_msgbox_title','var'=>'remove_kw_msgbox_title'),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
var alert_box_title = "<?php echo strtr($_smarty_tpl->tpl_vars['kw_labels']->value['warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
var remove_kw_msgbox_msg = '<?php echo strtr($_smarty_tpl->tpl_vars['remove_kw_msgbox_msg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var remove_kw_msgbox_title = '<?php echo strtr($_smarty_tpl->tpl_vars['remove_kw_msgbox_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

/**
 * 
 *
 */
function keyword_remove_confirmation(item_id, tckw_link_id, keyword, title, msg, pFunction) 
{
  var my_msg = msg.replace('%i',keyword);
  var safe_title = escapeHTML(title);
  Ext.Msg.confirm(safe_title, my_msg,
                  function(btn, text) { 
                    pFunction(btn,text,item_id, tckw_link_id);
                  });
}


/**
 * 
 *
 */
function remove_keyword(btn, text, item_id, tckw_link_id) {

  var my_url = "<?php echo $_smarty_tpl->tpl_vars['gui']->value->delTCVKeywordURL;?>
";
  var dummy = my_url.replace('%1',item_id);
  var my_action = dummy.replace('%2',tckw_link_id);


  if( btn == 'yes' ) {
    window.location=my_action;
  }
}

var pF_remove_keyword = remove_keyword;

<?php echo '</script'; ?>
>

<form method="post" id="kwf" name="kwf" 
  action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
  <input type="hidden" id="kwf_doAction" name="doAction" value="removeKeyword" />
  <input type="hidden" name="tcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_tcase_id']->value;?>
" />
  <input type="hidden" name="tcversion_id" value="<?php echo $_smarty_tpl->tpl_vars['args_tcversion_id']->value;?>
" />
  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'tproject_id')) {?> 
    <input type="hidden" name="tproject_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tproject_id;?>
" />
  <?php }?>

  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'tplan_id')) {?> 
    <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />
  <?php }?>
  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'show_mode')) {?> 
    <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
  <?php }?>


  <?php $_smarty_tpl->_assignInScope('kwView', smarty_modifier_replace("lib/keywords/keywordsView.php?tproject_id=%s%&openByKWInc=1",'%s%',$_smarty_tpl->tpl_vars['gui']->value->tproject_id));?>

  <?php $_smarty_tpl->_assignInScope('kwAdd', smarty_modifier_replace("lib/keywords/keywordsEdit.php?doAction=create&tproject_id=%s%&directAccess=1",'%s%',$_smarty_tpl->tpl_vars['gui']->value->tproject_id));?>

  <?php $_smarty_tpl->_assignInScope('kwAL', smarty_modifier_replace("lib/keywords/keywordsEdit.php?doAction=cfl&tproject_id=%s%&directAccess=1&tcversion_id=".((string)$_smarty_tpl->tpl_vars['args_tcversion_id']->value),'%s%',$_smarty_tpl->tpl_vars['gui']->value->tproject_id));?>

  <?php $_smarty_tpl->_assignInScope('removeEnabled', $_smarty_tpl->tpl_vars['args_edit_enabled']->value && $_smarty_tpl->tpl_vars['gui']->value->assign_keywords && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no");?>

  <table cellpadding="0" cellspacing="0" style="font-size:100%;" width="45%">
    <tr>
      <td width="45%" style="vertical-align:top;">
        <a href="javascript:open_popup('<?php echo $_smarty_tpl->tpl_vars['kwView']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['keywords'];?>
</a> &nbsp; 

        <a href="javascript:open_popup('<?php echo $_smarty_tpl->tpl_vars['kwAdd']->value;?>
')">
        <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['add'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['kw_labels']->value['createKW'];?>
"  style="border:none" /></a>&nbsp; 

        <a href="javascript:open_popup('<?php echo $_smarty_tpl->tpl_vars['kwAL']->value;?>
')">
        <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['keyword_add'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['kw_labels']->value['btn_create_and_link'];?>
"  style="border:none" /></a>&nbsp; 
      </td>

    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['args_keywords_map']->value, 'tckw_link_item');
$_smarty_tpl->tpl_vars['tckw_link_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tckw_link_item']->value) {
$_smarty_tpl->tpl_vars['tckw_link_item']->do_else = false;
?>
      <tr>
        <td style="vertical-align:top;">
              <?php if ($_smarty_tpl->tpl_vars['removeEnabled']->value) {?>
                <a href="javascript:keyword_remove_confirmation(<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcase_id;?>
,
                        <?php echo $_smarty_tpl->tpl_vars['tckw_link_item']->value['tckw_link'];?>
,
                        '<?php echo strtr($_smarty_tpl->tpl_vars['tckw_link_item']->value['keyword'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
', 
                        remove_kw_msgbox_title, remove_kw_msgbox_msg, 
                        pF_remove_keyword);">
              <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['delete'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['kw_labels']->value['img_title_remove_keyword'];?>
"  style="border:none" /></a>
            <?php }?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tckw_link_item']->value['keyword'], ENT_QUOTES, 'UTF-8', true);?>

        </td>      
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <tr><td>&nbsp;</td></tr>
    <tr>
      <?php $_smarty_tpl->_assignInScope('addEnabled', $_smarty_tpl->tpl_vars['args_edit_enabled']->value);?>
      <?php if ($_smarty_tpl->tpl_vars['addEnabled']->value && null != $_smarty_tpl->tpl_vars['gui']->value->currentVersionFreeKeywords) {?> 
        <td>
          <select id="free_keywords" name="free_keywords[]"
            data-placeholder="<?php echo $_smarty_tpl->tpl_vars['kw_labels']->value['select_keywords'];?>
"
            class="chosen-add-keywords" multiple="multiple">
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gui']->value->currentVersionFreeKeywords),$_smarty_tpl);?>

          </select>
          <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['kw_labels']->value['btn_add'];?>
"
            onclick="doAction.value='addKeyword'">
        </td>  

        <?php echo '<script'; ?>
>
        jQuery( document ).ready(
          function() { 
            jQuery(".chosen-add-keywords").chosen({ width: "75%", allow_single_deselect: true }); 
          }
        );
        <?php echo '</script'; ?>
>  
      <?php }?>
    </tr>
  </table>  
</form>
<?php }
}
