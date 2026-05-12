<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\quickexec.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e350c9aa48_19004948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784cae62cee466c7f5c649d82af63a69582bfa03' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\quickexec.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e350c9aa48_19004948 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'qex_labels','s'=>'testplan_usage,platform,version,test_plan,goto_execute'),$_smarty_tpl ) );?>


<table class="simple">
    <theader <?php echo $_smarty_tpl->tpl_vars['addInfoDivStyle']->value;?>
><?php echo $_smarty_tpl->tpl_vars['qex_labels']->value['testplan_usage'];?>
</theader>
    <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['qex_labels']->value['version'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['tlImages']->value['sort_hint'];
echo $_smarty_tpl->tpl_vars['qex_labels']->value['test_plan'];?>
</th>
    <?php if ($_smarty_tpl->tpl_vars['gui']->value->platforms != null) {?>
      <th><?php echo $_smarty_tpl->tpl_vars['tlImages']->value['sort_hint'];
echo $_smarty_tpl->tpl_vars['qex_labels']->value['platform'];?>
</th>
    <?php }?>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['args_linked_versions']->value, 'link2tplan_platform');
$_smarty_tpl->tpl_vars['link2tplan_platform']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link2tplan_platform']->value) {
$_smarty_tpl->tpl_vars['link2tplan_platform']->do_else = false;
?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link2tplan_platform']->value, 'link2platform', false, 'tplan_id');
$_smarty_tpl->tpl_vars['link2platform']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tplan_id']->value => $_smarty_tpl->tpl_vars['link2platform']->value) {
$_smarty_tpl->tpl_vars['link2platform']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link2platform']->value, 'version_info');
$_smarty_tpl->tpl_vars['version_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['version_info']->value) {
$_smarty_tpl->tpl_vars['version_info']->do_else = false;
?>
          <tr>
          <td style="width:10%;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['version_info']->value['version'];?>
</td>
          <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version_info']->value['tplan_name'], ENT_QUOTES, 'UTF-8', true);?>

              <a href="<?php echo $_smarty_tpl->tpl_vars['execFeatureAction']->value;?>
" target="_parent" ><img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['execute'];?>
" 
                             title="<?php echo $_smarty_tpl->tpl_vars['qex_labels']->value['goto_execute'];?>
" /></a>
          </td>
          <?php if ($_smarty_tpl->tpl_vars['gui']->value->platforms != null) {?>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['version_info']->value['platform_id'] > 0) {?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gui']->value->platforms[$_smarty_tpl->tpl_vars['version_info']->value['platform_id']], ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>          
            </td>
          <?php }?>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
