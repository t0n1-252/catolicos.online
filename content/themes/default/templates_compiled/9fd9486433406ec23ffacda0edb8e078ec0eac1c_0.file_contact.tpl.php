<?php
/* Smarty version 5.4.1, created on 2025-04-17 02:07:08
  from 'file:contact.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6800624c7bd575_12377695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fd9486433406ec23ffacda0edb8e078ec0eac1c' => 
    array (
      0 => 'contact.tpl',
      1 => 1744139718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6800624c7bd575_12377695 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_message_sent_1030.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact Us");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact us and we’ll get back to you as soon as possible");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt20">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto sg-offcanvas-mainbar">
      <div class="card px-4 py-4 shadow">
        <div class="card-body">
          <form class="js_ajax-forms" data-url="core/contact.php">
            <div class="form-group">
              <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
              <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
 <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
              <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subject");?>
 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="subject">
            </div>

            <div class="form-group">
              <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Message");?>
 <span class="text-danger">*</span></label>
              <textarea class="form-control" name="message" rows="5"></textarea>
            </div>

            <?php if ($_smarty_tpl->getValue('system')['reCAPTCHA_enabled']) {?>
              <div class="form-group">
                <!-- reCAPTCHA -->
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->getValue('system')['reCAPTCHA_site_key'];?>
"></div>
                <!-- reCAPTCHA -->
              </div>
            <?php }?>

            <div class="form-group d-grid">
              <button type="submit" class="btn btn-primary">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send");?>

              </button>
            </div>

            <!-- success -->
            <div class="alert alert-success x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->

          </form>
        </div>
      </div>
    </div>
    <!-- content panel -->
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
