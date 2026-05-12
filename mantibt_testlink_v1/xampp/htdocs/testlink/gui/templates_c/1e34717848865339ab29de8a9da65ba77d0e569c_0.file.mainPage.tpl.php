<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:48
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\mainPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9d0f31c11_76650305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e34717848865339ab29de8a9da65ba77d0e569c' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\mainPage.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc_head.tpl' => 1,
    'file:inc_ext_js.tpl' => 1,
    'file:bootstrap.inc.tpl' => 1,
    'file:inc_msg_from_array.tpl' => 1,
    'file:mainPageRight.tpl' => 1,
    'file:mainPageLeft.tpl' => 1,
  ),
),false)) {
function content_6a00a9d0f31c11_76650305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('cfg_section', smarty_modifier_replace(basename($_smarty_tpl->source->filepath),".tpl",''));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "input_dimensions.conf", $_smarty_tpl->tpl_vars['cfg_section']->value, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup'=>"yes",'openHead'=>"yes"), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc_ext_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:bootstrap.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
gui/niftycube/niftycube.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
window.onload=function() 
{

  /* with typeof display_left_block_1 I'm checking is function exists */
  if(typeof display_left_block_top != 'undefined') 
  {
    display_left_block_top();
  }

  if(typeof display_left_block_1 != 'undefined') 
  {
    display_left_block_1();
  }

  if(typeof display_left_block_2 != 'undefined') 
  {
    display_left_block_2();
  }

  if(typeof display_left_block_3 != 'undefined') 
  {
    display_left_block_3();
  }

  if(typeof display_left_block_4 != 'undefined') 
  {
    display_left_block_4();
  }

  if(typeof display_left_block_bottom != 'undefined') 
  {
    display_left_block_bottom();
  }

  if(typeof display_left_block_5 != 'undefined')
  {
    display_left_block_5();
  }

  if( typeof display_right_block_1 != 'undefined')
  {
    display_right_block_1();
  }

  if( typeof display_right_block_2 != 'undefined')
  {
    display_right_block_2();
  }

  if( typeof display_right_block_3 != 'undefined')
  {
    display_right_block_3();
  }

  if( typeof display_right_block_top != 'undefined')
  {
    display_right_block_top();
  }

  if( typeof display_right_block_bottom != 'undefined')
  {
    display_right_block_bottom();
  }
}
<?php echo '</script'; ?>
>
</head>

<body class="testlink">
<?php if ($_smarty_tpl->tpl_vars['gui']->value->securityNotes) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:inc_msg_from_array.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('array_of_msg'=>$_smarty_tpl->tpl_vars['gui']->value->securityNotes,'arg_css_class'=>"warning"), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:mainPageRight.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:mainPageLeft.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
