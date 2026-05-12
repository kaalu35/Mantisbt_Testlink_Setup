<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\platforms.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350bb9e41_54485336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf822787938ddc4fb3bbbcec886d51d47a23f0c7' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\platforms.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e350bb9e41_54485336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'plat_labels','s'=>'btn_add,img_title_remove_platform,warning,
             select_platforms,title_platforms'),$_smarty_tpl ) );?>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'remove_plat_msgbox_msg','var'=>'remove_plat_msgbox_msg'),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('s'=>'remove_plat_msgbox_title','var'=>'remove_plat_msgbox_title'),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
var alert_box_title = "<?php echo strtr($_smarty_tpl->tpl_vars['plat_labels']->value['warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
";
var remove_plat_msgbox_msg = '<?php echo strtr($_smarty_tpl->tpl_vars['remove_plat_msgbox_msg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';
var remove_plat_msgbox_title = '<?php echo strtr($_smarty_tpl->tpl_vars['remove_plat_msgbox_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
';

/**
 * 
 *
 */
function platform_remove_confirmation(item_id, tcplat_link_id, platform, title, msg, pFunction) 
{
  var my_msg = msg.replace('%i',platform);
  var safe_title = escapeHTML(title);
  Ext.Msg.confirm(safe_title, my_msg,
                  function(btn, text) { 
                    pFunction(btn,text,item_id, tcplat_link_id);
                  });
}


/**
 * 
 *
 */
function remove_platform(btn, text, item_id, tcplat_link_id) {

  var my_url = "<?php echo $_smarty_tpl->tpl_vars['gui']->value->delTCVPlatformURL;?>
";
  var dummy = my_url.replace('%1',item_id);
  var my_action = dummy.replace('%2',tcplat_link_id);

  if( btn == 'yes' ) {
    window.location=my_action;
  }
}

var pF_remove_platform = remove_platform;

<?php echo '</script'; ?>
>

<form method="post" id="platf2" name="platf2" 
  action="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
lib/testcases/tcEdit.php">
  <input type="hidden" name="doAction" value="removeplatform" />
  <input type="hidden" name="tcase_id" value="<?php echo $_smarty_tpl->tpl_vars['args_tcase_id']->value;?>
" />
  <input type="hidden" name="tcversion_id"
    value="<?php echo $_smarty_tpl->tpl_vars['args_tcversion_id']->value;?>
" />

  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'tplan_id')) {?> 
    <input type="hidden" name="tplan_id" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->tplan_id;?>
" />
  <?php }?>
  <?php if (property_exists($_smarty_tpl->tpl_vars['gui']->value,'show_mode')) {?> 
    <input type="hidden" name="show_mode" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->show_mode;?>
" />
  <?php }?>


  <?php $_smarty_tpl->_assignInScope('itemView', smarty_modifier_replace($_smarty_tpl->tpl_vars['gsmarty_href_platformsView']->value,'%s%',$_smarty_tpl->tpl_vars['gui']->value->tproject_id));?>

  <table cellpadding="0" cellspacing="0" style="font-size:100%;">
    <tr>
      <td width="35%" style="vertical-align:top;"><a href=<?php echo $_smarty_tpl->tpl_vars['itemView']->value;?>
><?php echo $_smarty_tpl->tpl_vars['plat_labels']->value['title_platforms'];?>
</a>: &nbsp;
      </td>

            <?php $_smarty_tpl->_assignInScope('removeEnabled', $_smarty_tpl->tpl_vars['args_edit_enabled']->value && $_smarty_tpl->tpl_vars['args_frozen_version']->value == "no");?>

      <td style="vertical-align:top;">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['args_platforms_map']->value, 'tcplat_link_item');
$_smarty_tpl->tpl_vars['tcplat_link_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tcplat_link_item']->value) {
$_smarty_tpl->tpl_vars['tcplat_link_item']->do_else = false;
?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tcplat_link_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php if ($_smarty_tpl->tpl_vars['removeEnabled']->value) {?>
            <a href="javascript:platform_remove_confirmation(<?php echo $_smarty_tpl->tpl_vars['gui']->value->tcase_id;?>
,
                     <?php echo $_smarty_tpl->tpl_vars['tcplat_link_item']->value['tcplat_link'];?>
,
                     '<?php echo strtr($_smarty_tpl->tpl_vars['tcplat_link_item']->value['name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
', 
                     remove_plat_msgbox_title, remove_plat_msgbox_msg, 
                     pF_remove_platform);">
           <img src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['delete'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['plat_labels']->value['img_title_remove_platform'];?>
"  style="border:none" /></a>
           <?php }?>
            <br />
                <?php
}
if ($_smarty_tpl->tpl_vars['tcplat_link_item']->do_else) {
?>
                  <?php echo $_smarty_tpl->tpl_vars['tcView_viewer_labels']->value['none'];?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </td>      
    </tr>
    <tr>
      <?php $_smarty_tpl->_assignInScope('addEnabled', $_smarty_tpl->tpl_vars['args_edit_enabled']->value);?>
      <?php if ($_smarty_tpl->tpl_vars['addEnabled']->value && null != $_smarty_tpl->tpl_vars['gui']->value->currentVersionFreePlatforms) {?> 
      <td>
       &nbsp;  
      <td>
        <select id="free_platforms" name="free_platforms[]"
          data-placeholder="<?php echo $_smarty_tpl->tpl_vars['plat_labels']->value['select_platforms'];?>
"
          class="chosen-add-platforms" multiple="multiple">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['gui']->value->currentVersionFreePlatforms),$_smarty_tpl);?>

        </select>
        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['plat_labels']->value['btn_add'];?>
"
          onclick="doAction.value='addPlatform'">
      </td>  

      <?php echo '<script'; ?>
>
      jQuery( document ).ready(
        function() { 
          jQuery(".chosen-add-platforms").chosen({ width: "75%", allow_single_deselect: true }); 
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
