<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:57:39
  from 'file:settings.verification.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e9d3788488_68151525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b95213cdbda1724c09ed171488c2637c374c94' => 
    array (
      0 => 'settings.verification.tpl',
      1 => 1744139725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
  ),
))) {
function content_6801e9d3788488_68151525 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card-header with-icon">
  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification");?>

</div>
<?php if ($_smarty_tpl->getValue('case') == "verified") {?>
  <div class="card-body">
    <div class="text-center">
      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon mb10",'width'=>"60px",'height'=>"60px"), (int) 0, $_smarty_current_dir);
?>
      <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Congratulations");?>
</h4>
      <p class="mt20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This account is verified");?>
</p>
    </div>
  </div>
<?php } elseif ($_smarty_tpl->getValue('case') == "pending") {?>
  <div class="card-body">
    <div class="text-center">
      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pending",'class'=>"main-icon mb10",'width'=>"60px",'height'=>"60px"), (int) 0, $_smarty_current_dir);
?>
      <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</h4>
      <p class="mt20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your verification request is still awaiting admin approval");?>
</p>
    </div>
  </div>
<?php } elseif ($_smarty_tpl->getValue('case') == "request" || "declined") {?>
  <form class="js_ajax-forms" data-url="users/verify.php?node=user">
    <div class="card-body">
      <?php if ($_smarty_tpl->getValue('case') == "declined") {?>
        <div class="text-center">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"declined",'class'=>"main-icon mb10",'width'=>"60px",'height'=>"60px"), (int) 0, $_smarty_current_dir);
?>
          <h4><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sorry");?>
</h4>
          <p class="mt20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your verification request has been declined by the admin");?>
</p>
        </div>
        <div class="divider"></div>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['verification_docs_required']) {?>
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification Documents");?>

          </label>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-6">
                <div class="section-title mb20">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Photo");?>

                </div>
                <div class="x-image full">
                  <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                  </button>
                  <div class="x-image-loader">
                    <div class="progress x-progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                  <input type="hidden" class="js_x-image-input" name="photo" value="">
                </div>

              </div>
              <div class="col-sm-6">
                <div class="section-title mb20">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Passport or National ID");?>

                </div>
                <div class="x-image full">
                  <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                  </button>
                  <div class="x-image-loader">
                    <div class="progress x-progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <i class="fa fa-camera fa-2x js_x-uploader" data-handle="x-image"></i>
                  <input type="hidden" class="js_x-image-input" name="passport" value="">
                </div>
              </div>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please attach your photo and your Passport or National ID");?>

            </div>
          </div>
        </div>
      <?php }?>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Additional Information");?>

        </label>
        <div class="col-md-9">
          <textarea class="form-control" name="message"></textarea>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please share why your account should be verified");?>

          </div>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send");?>

      </button>
    </div>
  </form>
<?php }
}
}
