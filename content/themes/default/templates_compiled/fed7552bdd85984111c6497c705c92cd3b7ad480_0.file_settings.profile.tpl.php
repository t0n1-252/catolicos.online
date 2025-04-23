<?php
/* Smarty version 5.4.1, created on 2025-04-21 12:05:02
  from 'file:settings.profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6806346eebf720_10162813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed7552bdd85984111c6497c705c92cd3b7ad480' => 
    array (
      0 => 'settings.profile.tpl',
      1 => 1744139710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 14,
    'file:__custom_fields.tpl' => 5,
  ),
))) {
function content_6806346eebf720_10162813 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('sub_view') == '') {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Basic");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=basic">
    <div class="card-body">
      <?php if (!$_smarty_tpl->getValue('system')['show_usernames_enabled'] && $_smarty_tpl->getValue('user')->_data['user_verified']) {?>
        <div class="alert alert-warning">
          <div class="icon">
            <i class="fa fa-exclamation-triangle fa-2x"></i>
          </div>
          <div class="text">
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Attention");?>
</strong><br>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your account is already verified if you changed your name you will lose the verification badge");?>

          </div>
        </div>
      <?php }?>

      <div class="row">
        <?php if (!$_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
          <div class="form-group col-md-6">
            <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("First Name");?>
</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_firstname'];?>
">
          </div>

          <div class="form-group col-md-6">
            <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Last Name");?>
</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_lastname'];?>
">
          </div>
        <?php }?>

        <?php if (!$_smarty_tpl->getValue('system')['genders_disabled']) {?>
          <div class="form-group col-md-6">
            <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("I am");?>
</label>
            <select class="form-select" name="gender">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Sex");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), 'gender');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gender')->value) {
$foreach0DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getValue('user')->_data['user_gender'] == $_smarty_tpl->getValue('gender')['gender_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('gender')['gender_name'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
          <div class="form-group col-md-6">
            <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Relationship Status");?>
</label>
            <select class="form-select" name="relationship">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Relationship");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Single");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In a relationship");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Married");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("It's complicated");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Divorced");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widowed");?>
</option>
            </select>
          </div>
        <?php }?>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
          <select class="form-select" name="country">
            <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
?>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_country'] == $_smarty_tpl->getValue('country')['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </select>
        </div>

        <?php if ($_smarty_tpl->getValue('system')['website_info_enabled']) {?>
          <div class="form-group col-md-6">
            <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Website");?>
</label>
            <input type="text" class="form-control" name="website" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_website'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Website link must start with http:// or https://");?>

            </div>
          </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Birthdate");?>
</label>
        <div class="row">
          <div class="col">
            <select class="form-select" name="birth_month">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Month");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jan");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Feb");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mar");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apr");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("May");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jun");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jul");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Aug");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sep");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Oct");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Nov");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Dec");?>
</option>
            </select>
          </div>
          <div class="col">
            <select class="form-select" name="birth_day">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Day");?>
</option>
              <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->getValue('i')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</option>
              <?php }
}
?>
            </select>
          </div>
          <div class="col">
            <select class="form-select" name="birth_year">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Year");?>
</option>
              <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2023+1 - (1905) : 1905-(2023)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <option <?php if ($_smarty_tpl->getValue('user')->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->getValue('i')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</option>
              <?php }
}
?>
            </select>
          </div>
        </div>
      </div>

      <?php if ($_smarty_tpl->getValue('system')['biography_info_enabled']) {?>
        <div class="form-group">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About Me");?>
</label>
          <textarea class="form-control" name="biography"><?php echo $_smarty_tpl->getValue('user')->_data['user_biography'];?>
</textarea>
        </div>
      <?php }?>

      <!-- custom fields -->
      <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['basic'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- custom fields -->

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
  </form>

<?php } elseif ($_smarty_tpl->getValue('sub_view') == "work") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=work">
    <div class="card-body">
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Title");?>
</label>
        <input type="text" class="form-control" name="work_title" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_work_title'];?>
">
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Place");?>
</label>
          <input type="text" class="form-control" name="work_place" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_work_place'];?>
">
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Website");?>
</label>
          <input type="text" class="form-control" name="work_url" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_work_url'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Website link must start with http:// or https://");?>

          </div>
        </div>
      </div>

      <!-- custom fields -->
      <?php if ($_smarty_tpl->getValue('custom_fields')['work']) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['work'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- custom fields -->

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
  </form>

<?php } elseif ($_smarty_tpl->getValue('sub_view') == "location") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=location">
    <div class="card-body">
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Current City");?>
</label>
        <input type="text" class="form-control js_geocomplete" name="city" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_current_city'];?>
">
      </div>

      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hometown");?>
</label>
        <input type="text" class="form-control js_geocomplete" name="hometown" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_hometown'];?>
">
      </div>

      <!-- custom fields -->
      <?php if ($_smarty_tpl->getValue('custom_fields')['location']) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['location'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- custom fields -->

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
  </form>

<?php } elseif ($_smarty_tpl->getValue('sub_view') == "education") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Education");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=education">
    <div class="card-body">
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("School");?>
</label>
        <input type="text" class="form-control" name="edu_school" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_edu_school'];?>
">
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Major");?>
</label>
          <input type="text" class="form-control" name="edu_major" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_edu_major'];?>
">
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Class");?>
</label>
          <input type="text" class="form-control" name="edu_class" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_edu_class'];?>
">
        </div>
      </div>

      <!-- custom fields -->
      <?php if ($_smarty_tpl->getValue('custom_fields')['education']) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['education'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- custom fields -->

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
  </form>

<?php } elseif ($_smarty_tpl->getValue('sub_view') == "other") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Other");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=other">
    <div class="card-body">
      <!-- custom fields -->
      <?php if ($_smarty_tpl->getValue('custom_fields')['other']) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['other'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- custom fields -->

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
  </form>

<?php } elseif ($_smarty_tpl->getValue('sub_view') == "social") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Social Links");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=social">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Facebook Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"facebook",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_facebook'];?>
">
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("X Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitter",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_twitter'];?>
">
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("YouTube Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"youtube",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_youtube'];?>
">
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Instagram Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"instagram",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_instagram'];?>
">
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Twitch Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitch",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="twitch" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_twitch'];?>
">
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("LinkedIn Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linkedin",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_linkedin'];?>
">
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Vkontakte Profile URL");?>
</label>
          <div class="input-group">
            <span class="input-group-text bg-transparent">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"vk",'width'=>"22px",'height'=>"22px"), (int) 0, $_smarty_current_dir);
?>
            </span>
            <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_social_vkontakte'];?>
">
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
      <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
    </div>
  </form>

<?php } elseif ($_smarty_tpl->getValue('sub_view') == "design") {?>
  <div class="card-header with-icon">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Design");?>

  </div>
  <form class="js_ajax-forms" data-url="users/settings.php?edit=design">
    <div class="card-body">
      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Profile Background");?>

        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->getValue('user')->_data['user_profile_background'] == '') {?>
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="user_profile_background" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['user_profile_background'];?>
')">
              <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="user_profile_background" value="<?php echo $_smarty_tpl->getValue('user')->_data['user_profile_background'];?>
">
            </div>
          <?php }?>
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
      <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
    </div>
  </form>

<?php }
}
}
