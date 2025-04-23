<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:56:45
  from 'file:settings.account.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e99d1a5e85_66155582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74cc280891aea6cf9dd812036f67e22afe190300' => 
    array (
      0 => 'settings.account.tpl',
      1 => 1744139798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_6801e99d1a5e85_66155582 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account Settings");?>

</div>
<form class="js_ajax-forms" data-url="users/settings.php?edit=account">
  <div class="card-body">
    <div class="heading-small mb20">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Address");?>

    </div>
    <div class="pl-md-4">
      <?php if (!$_smarty_tpl->getValue('user')->_data['user_email_verified']) {?>
        <div class="alert alert-danger">
          <div class="icon">
            <i class="fa fa-exclamation-circle fa-2x"></i>
          </div>
          <div class="text">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Verification Required");?>
</strong><br>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check your email inbox");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the verification process");?>

            <button class="btn btn-sm btn-success ml10" data-toggle="modal" data-url="core/activation_email_resend.php"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend Verification Email");?>
</button>
          </div>
        </div>
      <?php }?>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Address");?>

        </label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_email'];?>
">
          </div>
        </div>
      </div>
    </div>

    <?php if (($_smarty_tpl->getValue('system')['activation_enabled'] && $_smarty_tpl->getValue('system')['activation_type'] == "sms") || ($_smarty_tpl->getValue('system')['two_factor_enabled'] && $_smarty_tpl->getValue('system')['two_factor_type'] == "sms")) {?>
      <div class="divider"></div>

      <div class="heading-small mb20">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Number");?>

      </div>
      <div class="pl-md-4">
        <?php if ($_smarty_tpl->getValue('user')->_data['user_phone'] && !$_smarty_tpl->getValue('user')->_data['user_phone_verified']) {?>
          <div class="alert alert-danger">
            <div class="icon">
              <i class="fa fa-exclamation-circle fa-2x"></i>
            </div>
            <div class="text">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Verification Required");?>
</strong><br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check your phone SMS");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete phone verification process");?>

              <button class="btn btn-sm btn-success ml10" data-toggle="modal" data-url="#activation-phone"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter Code");?>
</button>
            </div>
          </div>
        <?php }?>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Number");?>

          </label>
          <div class="col-md-9">
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
              <input type="text" class="form-control" name="phone" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_phone'];?>
">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone number (e.g: +1234567890)");?>

            </div>
          </div>
        </div>
      </div>
    <?php }?>

    <?php if (!$_smarty_tpl->getValue('system')['disable_username_changes']) {?>
      <div class="divider"></div>

      <?php if ($_smarty_tpl->getValue('user')->_data['user_verified']) {?>
        <div class="alert alert-warning">
          <div class="icon">
            <i class="fa fa-exclamation-triangle fa-2x"></i>
          </div>
          <div class="text">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Attention");?>
</strong><br>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is already verified if you changed your username you will lose the verification badge");?>

          </div>
        </div>
      <?php }?>

      <div class="heading-small mb20">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>

      </div>
      <div class="pl-md-4">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>

          </label>
          <div class="col-md-9">
            <div class="input-group">
              <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/</span>
              <input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
">
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')");?>

            </div>
          </div>
        </div>
      </div>

    <?php }?>

    <!-- Secuirty Check -->
    <div class="js_hidden-section x-hidden">
      <div class="divider"></div>
      <div class="heading-small mb20">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Secuirty Check");?>

      </div>
      <div class="pl-md-4">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Current Password");?>

          </label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="password">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You need to enter your current password for security check");?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Secuirty Check -->

    <!-- success -->
    <div class="alert alert-success mt15 mb0 x-hidden"></div>
    <!-- success -->

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="card-footer text-end">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
  </div>
</form><?php }
}
