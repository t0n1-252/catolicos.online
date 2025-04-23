<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:48:19
  from 'file:started.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e7a3362388_01475174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30e1a5a2e2e83c8e705fdc8bc6a2b8968f9e3c87' => 
    array (
      0 => 'started.tpl',
      1 => 1744139708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_user.tpl' => 3,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6801e7a3362388_01475174 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_product_teardown_elol.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Getting Started");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This information will let us know more about you");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-10 mx-md-auto">
      <div class="card shadow">
        <div class="card-body">

          <!-- nav -->
          <ul class="nav nav-pills nav-fill nav-started mb30 js_wizard-steps">
            <li class="nav-item">
              <a class="nav-link active" href="#step-1">
                <h4 class="mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Step 1");?>
</h4>
                <p class="mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload your photo");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-2">
                <h4 class="mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Step 2");?>
</h4>
                <p class="mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Update your info");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-3">
                <h4 class="mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Step 3");?>
</h4>
                <p class="mb0">
                  <?php if ($_smarty_tpl->getValue('friends') || $_smarty_tpl->getValue('followers') || $_smarty_tpl->getValue('pages') || $_smarty_tpl->getValue('groups')) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Connections");?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Friends");?>

                  <?php }?>
                </p>
              </a>
            </li>
          </ul>
          <!-- nav -->

          <!-- tabs -->
          <div class="js_wizard-content" id="step-1">
            <div class="text-center">
              <h3 class="mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->getValue('user')->_data['name'];?>
</span></h3>
              <p class="mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Let's start with your photo");?>
</p>
            </div>

            <!-- profile-avatar -->
            <div class="position-relative" style="height: 170px;">
              <div class="profile-avatar-wrapper static">
                <img src="<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
" alt="">

                <!-- buttons -->
                <div class="profile-avatar-change">
                  <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                </div>
                <div class="profile-avatar-change-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="profile-avatar-crop <?php if ($_smarty_tpl->getValue('user')->_data['user_picture_default'] || !$_smarty_tpl->getValue('user')->_data['user_picture_id']) {?>x-hidden<?php }?>">
                  <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->getValue('user')->_data['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->getValue('user')->_data['user_id'];?>
"></i>
                </div>
                <div class="profile-avatar-delete <?php if ($_smarty_tpl->getValue('user')->_data['user_picture_default']) {?>x-hidden<?php }?>">
                  <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                </div>
                <!-- buttons -->
              </div>
            </div>
            <!-- profile-avatar -->

            <!-- buttons -->
            <div class="clearfix mt20">
              <button id="activate-step-2" class="btn btn-primary float-end"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
            </div>
            <!-- buttons -->
          </div>

          <div class="js_wizard-content x-hidden" id="step-2">
            <div class="text-center">
              <h3 class="mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Update your info");?>
</h3>
              <p class="mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share your information with our community");?>
</p>
            </div>

            <form class="js_ajax-forms" data-url="users/started.php?do=update">
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

              </div>
              <div class="pl-md-4">
                <div class="form-group">
                  <label class="form-label" for="country"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
                  <select class="form-select" name="country" id="country">
                    <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
?>
                      <option <?php if ($_smarty_tpl->getValue('user')->_data['user_country'] == $_smarty_tpl->getValue('country')['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <?php if ($_smarty_tpl->getValue('system')['location_info_enabled']) {?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="city"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Current City");?>
</label>
                      <input type="text" class="form-control js_geocomplete" name="city" id="city" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_current_city'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="hometown"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hometown");?>
</label>
                      <input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_hometown'];?>
">
                    </div>
                  </div>
                <?php }?>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['work_info_enabled']) {?>
                <div class="divider"></div>

                <div class="heading-small mb20">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work");?>

                </div>
                <div class="pl-md-4">
                  <div class="form-group">
                    <label class="form-label" for="work_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Title");?>
</label>
                    <input type="text" class="form-control" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_work_title'];?>
">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="work_place"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Place");?>
</label>
                      <input type="text" class="form-control" name="work_place" id="work_place" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_work_place'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="work_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Website");?>
</label>
                      <input type="text" class="form-control" name="work_url" id="work_url" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_work_url'];?>
">
                    </div>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['education_info_enabled']) {?>
                <div class="divider"></div>

                <div class="heading-small mb20">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Education");?>

                </div>
                <div class="pl-md-4">
                  <div class="form-group">
                    <label class="form-label" for="edu_major"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Major");?>
</label>
                    <input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_edu_major'];?>
">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="edu_school"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("School");?>
</label>
                      <input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_edu_school'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="edu_class"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Class");?>
</label>
                      <input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_edu_class'];?>
">
                    </div>
                  </div>
                </div>
              <?php }?>

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <div class="float-end">
                  <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
                  <button type="button" class="btn btn-primary" id="activate-step-3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                </div>
              </div>
              <!-- buttons -->
            </form>
          </div>

          <div class="js_wizard-content x-hidden" id="step-3">
            <div class="text-center">
              <h3 class="mb5">
                <?php if ($_smarty_tpl->getValue('friends') || $_smarty_tpl->getValue('followers') || $_smarty_tpl->getValue('pages') || $_smarty_tpl->getValue('groups')) {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Connections");?>

                <?php } else { ?>
                  <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Followers");
}?>
                <?php }?>
              </h3>
              <p class="mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Get latest activities from our popular users");?>
</p>
            </div>

            <form class="js_ajax-forms" data-url="users/started.php?do=finish">
              <?php if ($_smarty_tpl->getValue('friends') || $_smarty_tpl->getValue('followers') || $_smarty_tpl->getValue('pages') || $_smarty_tpl->getValue('groups')) {?>
                <!-- friends -->
                <?php if ($_smarty_tpl->getValue('friends')) {?>
                  <div class="heading-small mb20">
                    <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                  </div>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('friends'), '_user');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach1DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php }?>
                <!-- friends -->
                <!-- followers -->
                <?php if ($_smarty_tpl->getValue('followers')) {?>
                  <div class="divider"></div>
                  <div class="heading-small mb20">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>

                  </div>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('followers'), '_user');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach2DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php }?>
                <!-- followers -->
                <!-- pages -->
                <?php if ($_smarty_tpl->getValue('pages')) {?>
                  <div class="divider"></div>
                  <div class="heading-small mb20">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>

                  </div>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), '_page');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach3DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php }?>
                <!-- pages -->
                <!-- groups -->
                <?php if ($_smarty_tpl->getValue('groups')) {?>
                  <div class="divider"></div>
                  <div class="heading-small mb20">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

                  </div>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), '_group');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach4DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php }?>
                <!-- groups -->
              <?php } else { ?>
                <!-- new people -->
                <?php if ($_smarty_tpl->getValue('new_people')) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_people'), '_user');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach5DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>"add",'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php }?>
                <!-- new people -->
              <?php }?>

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <button type="submit" class="btn btn-danger float-end"><i class="fas fa-check-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Finish");?>
</button>
              </div>
              <!-- buttons -->
            </form>
          </div>
          <!-- tabs -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
  $(function() {

    var wizard_steps = $('.js_wizard-steps li a');
    var wizard_content = $('.js_wizard-content');

    wizard_content.hide();

    wizard_steps.click(function(e) {
      e.preventDefault();
      var $target = $($(this).attr('href'));
      if (!$(this).hasClass('disabled')) {
        wizard_steps.removeClass('active');
        $(this).addClass('active');
        wizard_content.hide();
        $target.show();
      }
    });

    $('.js_wizard-steps li a.active').trigger('click');

    $('#activate-step-2').on('click', function(e) {
      $('.js_wizard-steps li:eq(1) a').removeClass('disabled');
      $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
    });

    $('#activate-step-3').on('click', function(e) {
      $('.js_wizard-steps li:eq(2) a').removeClass('disabled');
      $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
    });

  });
<?php echo '</script'; ?>
><?php }
}
