<?php
/* Smarty version 3.1.48, created on 2026-05-10 17:52:13
  from 'C:\mantibt_testlink_v1\xampp\htdocs\testlink\gui\templates\tl-classic\login\login-model-marcobiedermann.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6a00a9add34789_94252779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818390a5834c99365d3809afaa0781793ee0aa2c' => 
    array (
      0 => 'C:\\mantibt_testlink_v1\\xampp\\htdocs\\testlink\\gui\\templates\\tl-classic\\login\\login-model-marcobiedermann.tpl',
      1 => 1778154366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a00a9add34789_94252779 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "input_dimensions.conf", "login", 0);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang_get'][0], array( array('var'=>'labels','s'=>'login_name,password,btn_login,new_user_q,login,demo_usage,lost_password_q,oauth_login'),$_smarty_tpl ) );?>

<html >
  <head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['labels']->value['login'];?>
</title>
    <link rel="stylesheet" href="gui/icons/font-awesome-4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="gui/themes/default/login/codepen.io/marcobiedermann/css/style.css">
  </head>
  <body class="align">
    <div class="site__container">
      <div class="grid__container">
      <img src="<?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->theme_dir;?>
images/<?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->logo_login;?>
" style="height: 72px; width: auto;"><br>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tlVersion']->value, ENT_QUOTES, 'UTF-8', true);?>
 </span>
      </div>
      
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->note != '') {?>
      <br>
      <div class="grid__container">
      <div class="user__feedback">
      <?php echo $_smarty_tpl->tpl_vars['gui']->value->note;?>

      </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->demoMode) {?>
      <br>
      <div class="grid__container">
      <?php echo $_smarty_tpl->tpl_vars['labels']->value['demo_usage'];?>

      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['tlCfg']->value->login_info != '') {?>
      <div class="text--center">
      <?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->login_info;?>

      </div>
      <?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['gui']->value->draw) {?>  
        <div class="grid__container">
          <form name="login" id="login" action="login.php?viewer=<?php echo $_smarty_tpl->tpl_vars['gui']->value->viewer;?>
" method="post" class="form form--login">
            <input type="hidden" name="reqURI" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['gui']->value->reqURI);?>
"/>
            <input type="hidden" name="destination" value="<?php echo rawurlencode($_smarty_tpl->tpl_vars['gui']->value->destination);?>
"/>

            <?php if ($_smarty_tpl->tpl_vars['gui']->value->ssodisable) {?>
            <input type="hidden" name="ssodisable" value="<?php echo $_smarty_tpl->tpl_vars['gui']->value->ssodisable;?>
"/>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['gui']->value->authCfg['sso_only']) {?>
            <div class="form__field">
              <label for="tl_login"><i class="fa fa-user"></i></label>
              <input maxlength="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'LOGIN_MAXLEN');?>
" name="tl_login" id="tl_login" type="text" class="form__input" placeholder="<?php echo $_smarty_tpl->tpl_vars['labels']->value['login_name'];?>
" required>
            </div>

            <div class="form__field">
              <label for="tl_password"><i class="fa fa-lock"></i></label>
              <input name="tl_password" id="tl_password" type="password" class="form__input" placeholder="<?php echo $_smarty_tpl->tpl_vars['labels']->value['password'];?>
" required>
            </div>

            <div class="form__field">
              <input id="tl_login_button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['labels']->value['btn_login'];?>
">
            </div>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gui']->value->oauth, 'oauth_item');
$_smarty_tpl->tpl_vars['oauth_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oauth_item']->value) {
$_smarty_tpl->tpl_vars['oauth_item']->do_else = false;
?>
                <div class="button">
                <a style="text-decoration: none; color:#ffffff;" href="<?php echo $_smarty_tpl->tpl_vars['oauth_item']->value->link;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['tlCfg']->value->theme_dir;?>
images/<?php echo $_smarty_tpl->tpl_vars['oauth_item']->value->icon;?>
" style="height: 42px; vertical-align:middle;">
                <span style="padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['labels']->value['oauth_login'];
echo $_smarty_tpl->tpl_vars['oauth_item']->value->name;?>
</span></a>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </form>

          <p class="text--center">
          <?php if ($_smarty_tpl->tpl_vars['gui']->value->user_self_signup) {?>
            <a href="firstLogin.php?viewer=new" id="tl_sign_up">
            <?php echo $_smarty_tpl->tpl_vars['labels']->value['new_user_q'];?>
</a> &nbsp; &nbsp;
          <?php }?>

              
          <?php if ($_smarty_tpl->tpl_vars['gui']->value->external_password_mgmt == 0 && $_smarty_tpl->tpl_vars['tlCfg']->value->demoMode == 0) {?>
            <a href="lostPassword.php?viewer=new" id="tl_lost_password">
            <?php echo $_smarty_tpl->tpl_vars['labels']->value['lost_password_q'];?>
</a>
          <?php }?>
          </p> 
        </div>
      <?php }?>
  </div>
</body>
</html>
<?php }
}
