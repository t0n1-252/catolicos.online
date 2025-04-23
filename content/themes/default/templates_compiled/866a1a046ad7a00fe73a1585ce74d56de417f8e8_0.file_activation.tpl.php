<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:46:34
  from 'file:activation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e73a8a7a79_36640346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866a1a046ad7a00fe73a1585ce74d56de417f8e8' => 
    array (
      0 => 'activation.tpl',
      1 => 1744139713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6801e73a8a7a79_36640346 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_check_boxes_re_v40f.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activation Required");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You have to activate your account before you start");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-10 mx-md-auto">
      <div class="card shadow">
        <div class="card-body text-center">

          <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hey");?>
 👋 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Let's verify your");?>
 <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Number");
}?></h2>
          <p class="text-xlg mt10 mb30">
            <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please go to");?>
 <span class="text-primary"><?php echo $_smarty_tpl->getValue('user')->_data['user_email'];?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the activation process");?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please check the SMS on your phone");?>
 <strong><?php echo $_smarty_tpl->getValue('user')->_data['user_phone'];?>
</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the activation process");?>

            <?php }?>
          </p>

          <div>
            <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
              <button type="button" class="btn btn-success rounded-pill mr10" data-toggle="modal" data-url="core/activation_email_resend.php">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend Verification Email");?>

              </button>
              <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-url="#activation-email-reset">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Change Email");?>

              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-success rounded-pill mr10" data-toggle="modal" data-url="#activation-phone"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter Code");?>
</button>
              <?php if ($_smarty_tpl->getValue('user')->_data['user_phone']) {?>
                <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-url="core/activation_phone_resend.php">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend SMS");?>

                </button>
              <?php }?>
              <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-url="#activation-phone-reset">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Change Phone Number");?>

              </button>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
