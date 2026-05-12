<?php
/* Smarty version 3.1.48, created on 2026-05-12 10:22:40
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\testcases\tctitle.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a02e35097f656_20888004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294982d67f4e065d0464835f10749eea23e63046' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\testcases\\tctitle.inc.tpl',
      1 => 1778154367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a02e35097f656_20888004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('whoaim', smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'basename' ][ 0 ], array( basename($_smarty_tpl->source->filepath) )),".inc.tpl",''));?>
<div class="container-fluid" id="<?php echo $_smarty_tpl->tpl_vars['whoaim']->value;?>
">
  <div class="row" id="title-and-icons"
       style = 
       "background:transparent url(gui/themes/default/images/white-top-bottom.gif) repeat-x 0 -1px;
        background-color: #CDDEF3;padding:    5px 3px 4px 5px;
        border:     1px solid #99bbe8;
        padding:    5px 3px 4px 5px;
        line-height:  15px;
        overflow:    hidden;
        font: bold 11px tahoma,arial,verdana,sans-serif;
        color:      #15428b;">

            <?php if ($_smarty_tpl->tpl_vars['inc_relations']->value != '') {?>
        <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['relations'];?>
"
             title="<?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['tc_has_relations'];?>
"
             onclick="document.getElementById('relations_<?php echo $_smarty_tpl->tpl_vars['tcversion_id']->value;?>
').scrollIntoView();">       
      <?php }?> 
    
      <?php echo $_smarty_tpl->tpl_vars['tco']->value['tc_external_id'];
echo (defined('TITLE_SEP') ? constant('TITLE_SEP') : null);
echo htmlspecialchars($_smarty_tpl->tpl_vars['tco']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

      <?php echo (defined('TITLE_SEP_TYPE2') ? constant('TITLE_SEP_TYPE2') : null);
echo htmlspecialchars($_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['version'], ENT_QUOTES, 'UTF-8', true);
echo $_smarty_tpl->tpl_vars['tco']->value['version'];?>

      <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['ghost_item'];?>
"
               title="<?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['show_ghost_string'];?>
"
               onclick="showHideByDataEntity('ghostTC');">

      <img class="clickable" src="<?php echo $_smarty_tpl->tpl_vars['tlImages']->value['activity'];?>
"
           title="<?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['display_author_updater'];?>
"
           onclick="showHideByDataEntity('createUpdate');">
  </div>
  <div class="row" style="display:none;" data-entity="ghostTC"><?php echo $_smarty_tpl->tpl_vars['tco']->value['ghost'];?>
<hr></div> 
  <?php if ($_smarty_tpl->tpl_vars['inc_tcbody_author_userinfo']->value != '') {?>  
    <div class="row" style="display:none;" data-entity="createUpdate">
      <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['title_created'];?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['localize_timestamp'][0], array( array('ts'=>$_smarty_tpl->tpl_vars['tco']->value['creation_ts']),$_smarty_tpl ) );?>
&nbsp;
      <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['by'];?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inc_tcbody_author_userinfo']->value->getDisplayName(), ENT_QUOTES, 'UTF-8', true);?>

    </div>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['tco']->value['updater_id'] != '') {?>
    <div class="row" style="display:none;" data-entity="createUpdate">
      <?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['title_last_mod'];?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['localize_timestamp'][0], array( array('ts'=>$_smarty_tpl->tpl_vars['tco']->value['modification_ts']),$_smarty_tpl ) );?>

      &nbsp;<?php echo $_smarty_tpl->tpl_vars['inc_tcbody_labels']->value['by'];?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['inc_tcbody_updater_userinfo']->value->getDisplayName(), ENT_QUOTES, 'UTF-8', true);?>

    </div>
  <?php }?>
  <div class="row" style="display:none;" data-entity="createUpdate"><hr></div>
</div>
<?php }
}
