<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:32:26
  from 'file:_sign_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c1accb908_62011296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd4955641399bce01e19ecaeb39c186d2318b9cf' => 
    array (
      0 => '_sign_form.tpl',
      1 => 1744139801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__social_login.tpl' => 3,
    'file:__custom_fields.tpl' => 2,
  ),
))) {
function content_68004c1accb908_62011296 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('system')['landing_page_template'] == "elengine") {?>

  <style>
    <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "LTR") {?>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('minimize_css')("../css/elengine.css");?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('minimize_css')("../css/elengine.rtl.css");?>

    <?php }?>
  </style>

  <div class="fr_auth_form">
    <!-- signin -->
    <div class="js_panel <?php if ($_smarty_tpl->getValue('do') == 'up') {?>x-hidden<?php }?>">
      <div class="text-center mt-4 mb-4">
        <h2 class="m-0 fr_welcome_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In to your Account");?>
</h2>
      </div>

      <?php if ($_smarty_tpl->getValue('system')['social_login_enabled']) {?>
        <div class="mtb20">
          <?php $_smarty_tpl->renderSubTemplate('file:__social_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_or_pos'=>"bottom"), (int) 0, $_smarty_current_dir);
?>
        </div>
      <?php }?>

      <?php if ((null !== ($_smarty_tpl->getValue('highlight') ?? null))) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->getValue('highlight');?>
</div><?php }?>

      <form class="js_ajax-forms" data-url="core/signin.php" method="POST">
        <!-- username or email -->
        <div class="fr_welcome_field">
          <input type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("or");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
' name="username_email" required>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="position-absolute">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
            <path d="M3 7l9 6l9 -6" />
          </svg>
        </div>
        <!-- username or email -->

        <!-- password -->
        <div class="fr_welcome_field mb-2">
          <input type="password" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Password");?>
' name="password" required>
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="position-absolute">
            <path fill="currentColor" d="M120-280h720q17 0 28.5 11.5T880-240q0 17-11.5 28.5T840-200H120q-17 0-28.5-11.5T80-240q0-17 11.5-28.5T120-280Zm40-222-19 34q-6 11-18 14t-23-3q-11-6-14-18t3-23l19-34H70q-13 0-21.5-8.5T40-562q0-13 8.5-21.5T70-592h38l-19-32q-6-11-3-23t14-18q11-6 23-3t18 14l19 32 19-32q6-11 18-14t23 3q11 6 14 18t-3 23l-19 32h38q13 0 21.5 8.5T280-562q0 13-8.5 21.5T250-532h-38l19 34q6 11 3 23t-14 18q-11 6-23 3t-18-14l-19-34Zm320 0-19 34q-6 11-18 14t-23-3q-11-6-14-18t3-23l19-34h-38q-13 0-21.5-8.5T360-562q0-13 8.5-21.5T390-592h38l-19-32q-6-11-3-23t14-18q11-6 23-3t18 14l19 32 19-32q6-11 18-14t23 3q11 6 14 18t-3 23l-19 32h38q13 0 21.5 8.5T600-562q0 13-8.5 21.5T570-532h-38l19 34q6 11 3 23t-14 18q-11 6-23 3t-18-14l-19-34Zm320 0-19 34q-6 11-18 14t-23-3q-11-6-14-18t3-23l19-34h-38q-13 0-21.5-8.5T680-562q0-13 8.5-21.5T710-592h38l-19-32q-6-11-3-23t14-18q11-6 23-3t18 14l19 32 19-32q6-11 18-14t23 3q11 6 14 18t-3 23l-19 32h38q13 0 21.5 8.5T920-562q0 13-8.5 21.5T890-532h-38l19 34q6 11 3 23t-14 18q-11 6-23 3t-18-14l-19-34Z" />
          </svg>
        </div>
        <!-- password -->

        <!-- remember me -->
        <div class="d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remember me");?>
</label>
          </div>

          <a class="float-end" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/reset"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forgotten password?");?>
</a>
        </div>
        <!-- remember me -->

        <!-- submit -->
        <div class="mt-4">
          <button type="submit" class="btn btn-primary d-block w-100 fr_welcome_btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In");?>
</button>
        </div>
        <!-- submit -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>

      <?php if ($_smarty_tpl->getValue('system')['registration_enabled']) {?>
        <div class="mt-4 text-center fr_welcome_switch">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Do not have an account?");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signup<?php if ($_smarty_tpl->getValue('oauth_app_id')) {?>?oauth_app_id=<?php echo $_smarty_tpl->getValue('oauth_app_id');
}?>" class="js_toggle-panel text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</a>
        </div>
      <?php }?>
    </div>
    <!-- signin -->

    <!-- signup -->
    <div class="js_panel <?php if ($_smarty_tpl->getValue('do') != 'up') {?>x-hidden<?php }?>">
      <div class="text-center my-4">
        <h2 class="m-0 fr_welcome_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up for an Account");?>
</h2>
      </div>

      <form class="js_ajax-forms" data-url="core/signup.php" method="POST">
        <?php if ($_smarty_tpl->getValue('system')['invitation_enabled']) {?>
          <!-- invitation code -->
          <div class="fr_welcome_field">
            <input name="invitation_code" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invitation Code");?>
' value="<?php echo $_smarty_tpl->getValue('invitation_code');?>
" required>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="position-absolute">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9.183 6.117a6 6 0 1 0 4.511 3.986" />
              <path d="M14.813 17.883a6 6 0 1 0 -4.496 -3.954" />
            </svg>
          </div>
          <!-- invitation code -->
        <?php }?>

        <?php if (!$_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
          <!-- first name -->
          <div class="fr_welcome_field">
            <input name="first_name" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("First name");?>
' required>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="position-absolute">
              <path fill="currentColor" d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
            </svg>
          </div>
          <!-- first name -->

          <!-- last name -->
          <div class="fr_welcome_field">
            <input name="last_name" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Last name");?>
' required>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="position-absolute">
              <path fill="currentColor" d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
            </svg>
          </div>
          <!-- last name -->
        <?php }?>

        <!-- username -->
        <div class="fr_welcome_field">
          <input name="username" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
' required>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="position-absolute">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
          </svg>
        </div>
        <!-- username -->

        <!-- email -->
        <div class="fr_welcome_field">
          <input name="email" type="email" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
' required>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="position-absolute">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
            <path d="M3 7l9 6l9 -6" />
          </svg>
        </div>
        <!-- email -->

        <?php if ($_smarty_tpl->getValue('system')['activation_enabled'] && $_smarty_tpl->getValue('system')['activation_type'] == "sms") {?>
          <!-- phone -->
          <div class="fr_welcome_field">
            <input name="phone" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone number (e.g: +1234567890)");?>
' required>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="position-absolute">
              <path fill="currentColor" d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z" />
            </svg>
          </div>
          <!-- phone -->
        <?php }?>

        <!-- password -->
        <div class="fr_welcome_field">
          <input name="password" type="password" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Password");?>
' required>
          <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="position-absolute">
            <path fill="currentColor" d="M120-280h720q17 0 28.5 11.5T880-240q0 17-11.5 28.5T840-200H120q-17 0-28.5-11.5T80-240q0-17 11.5-28.5T120-280Zm40-222-19 34q-6 11-18 14t-23-3q-11-6-14-18t3-23l19-34H70q-13 0-21.5-8.5T40-562q0-13 8.5-21.5T70-592h38l-19-32q-6-11-3-23t14-18q11-6 23-3t18 14l19 32 19-32q6-11 18-14t23 3q11 6 14 18t-3 23l-19 32h38q13 0 21.5 8.5T280-562q0 13-8.5 21.5T250-532h-38l19 34q6 11 3 23t-14 18q-11 6-23 3t-18-14l-19-34Zm320 0-19 34q-6 11-18 14t-23-3q-11-6-14-18t3-23l19-34h-38q-13 0-21.5-8.5T360-562q0-13 8.5-21.5T390-592h38l-19-32q-6-11-3-23t14-18q11-6 23-3t18 14l19 32 19-32q6-11 18-14t23 3q11 6 14 18t-3 23l-19 32h38q13 0 21.5 8.5T600-562q0 13-8.5 21.5T570-532h-38l19 34q6 11 3 23t-14 18q-11 6-23 3t-18-14l-19-34Zm320 0-19 34q-6 11-18 14t-23-3q-11-6-14-18t3-23l19-34h-38q-13 0-21.5-8.5T680-562q0-13 8.5-21.5T710-592h38l-19-32q-6-11-3-23t14-18q11-6 23-3t18 14l19 32 19-32q6-11 18-14t23 3q11 6 14 18t-3 23l-19 32h38q13 0 21.5 8.5T920-562q0 13-8.5 21.5T890-532h-38l19 34q6 11 3 23t-14 18q-11 6-23 3t-18-14l-19-34Z" />
          </svg>
        </div>
        <!-- password -->

        <!-- custom fields -->
        <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <!-- custom fields -->

        <div class="js_hidden-section x-hidden">
          <?php if (!$_smarty_tpl->getValue('system')['genders_disabled']) {?>
            <!-- genders -->
            <div class="fr_welcome_field">
              <select class="form-select" name="gender" id="gender" required>
                <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Sex");?>
:</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), 'gender');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gender')->value) {
$foreach2DoElse = false;
?>
                  <option value="<?php echo $_smarty_tpl->getValue('gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('gender')['gender_name'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="position-absolute">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M11 11m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M19 3l-5 5" />
                <path d="M15 3h4v4" />
                <path d="M11 16v6" />
                <path d="M8 19h6" />
              </svg>
            </div>
            <!-- genders -->
          <?php }?>

          <?php if ($_smarty_tpl->getValue('system')['age_restriction']) {?>
            <!-- birthdate -->
            <div class="form-group">
              <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Birthdate");?>
</label>
              <div class="row">
                <div class="col">
                  <div class="fr_welcome_field">
                    <select class="px-3 form-select" name="birth_month">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Month");?>
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
                </div>
                <div class="col">
                  <div class="fr_welcome_field">
                    <select class="px-3 form-select" name="birth_day">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Day");?>
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
                </div>
                <div class="col">
                  <div class="fr_welcome_field">
                    <select class="px-3 form-select" name="birth_year">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Year");?>
</option>
                      <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2023+1 - (1923) : 1923-(2023)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1923, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
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
            </div>
            <!-- birthdate -->
          <?php }?>

          <?php if ($_smarty_tpl->getValue('system')['select_user_group_enabled'] && $_smarty_tpl->getValue('user_groups')) {?>
            <!-- user group -->
            <div class="fr_welcome_field">
              <select class="px-3 form-select" name="custom_user_group">
                <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select User Group");?>
:</option>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_groups'), 'user_group');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user_group')->value) {
$foreach3DoElse = false;
?>
                  <option value="<?php echo $_smarty_tpl->getValue('user_group')['user_group_id'];?>
"><?php echo $_smarty_tpl->getValue('user_group')['user_group_title'];?>
</option>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <!-- user group -->
          <?php }?>

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

                    <input type="text" name="field1" style="display:none !important" tabindex="-1" autocomplete="off">
          
          <?php if ($_smarty_tpl->getValue('system')['newsletter_consent']) {?>
            <!-- newsletter consent -->
            <div class="form-check mb10">
              <input type="checkbox" class="form-check-input" name="newsletter_agree" id="newsletter_agree">
              <label class="form-check-label" for="newsletter_agree"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("I expressly agree to receive the newsletter");?>
</label>
            </div>
            <!-- newsletter consent -->
          <?php }?>

          <!-- privacy & terms consent -->
          <div class="form-check mb10">
            <input type="checkbox" class="form-check-input" name="privacy_agree" id="privacy_agree">
            <label class="form-check-label" for="privacy_agree">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/static/terms" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Terms");?>
</a> & <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/static/privacy" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy Policy");?>
</a>
            </label>
          </div>
          <!-- privacy & terms consent -->
        </div>

        <!-- submit -->
        <div class="mt-4">
          <?php if ($_smarty_tpl->getValue('oauth_app_id')) {?>
            <input type="hidden" name="oauth_app_id" value="<?php echo $_smarty_tpl->getValue('oauth_app_id');?>
">
          <?php }?>
          <button type="submit" class="btn btn-primary d-block w-100 fr_welcome_btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</button>
        </div>
        <!-- submit -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>

      <div class="mt-4 text-center fr_welcome_switch">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Already have an account?");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin" class="js_toggle-panel text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In");?>
</a>
      </div>
    </div>
    <!-- signup -->
  </div>

<?php } else { ?>

  <div class="card card-register">

    <!-- signin -->
    <div class="js_panel <?php if ($_smarty_tpl->getValue('do') == 'up') {?>x-hidden<?php }?>">
      <div class="card-header">
        <h4 class="card-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In to your Account");?>
</h4>
        <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Welcome back! Please enter your details");?>
</p>
      </div>
      <div class="card-body pt0">
        <?php if ((null !== ($_smarty_tpl->getValue('highlight') ?? null))) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->getValue('highlight');?>
</div><?php }?>
        <form class="js_ajax-forms" data-url="core/signin.php" method="POST">
          <!-- username or email -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-envelope fa-fw"></i></span>
              <input type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("or");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
' name="username_email" required>
            </div>
          </div>
          <!-- username or email -->
          <!-- password -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-lock fa-fw"></i></span>
              <input type="password" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Password");?>
' name="password" required>
            </div>
          </div>
          <!-- password -->
          <!-- remember me -->
          <div class="row">
            <div class="col-12 col-lg-6 mb10">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remember me");?>
</label>
              </div>
            </div>
            <div class="col-12 col-lg-6 mb10">
              <a class="float-end" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/reset"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forgotten password?");?>
</a>
            </div>
          </div>
          <!-- remember me -->
          <!-- submit -->
          <div class="form-group d-grid">
            <button type="submit" class="btn btn-lg btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In");?>
</button>
          </div>
          <!-- submit -->
          <!-- error -->
          <div class="alert alert-danger mt15 mb0 x-hidden"></div>
          <!-- error -->
        </form>
        <?php if ($_smarty_tpl->getValue('system')['social_login_enabled']) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:__social_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['registration_enabled']) {?>
          <div class="mt30 text-center">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Do not have an account?");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signup<?php if ($_smarty_tpl->getValue('oauth_app_id')) {?>?oauth_app_id=<?php echo $_smarty_tpl->getValue('oauth_app_id');
}?>" class="js_toggle-panel text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</a>
          </div>
        <?php }?>
      </div>
    </div>
    <!-- signin -->

    <!-- signup -->
    <div class="js_panel <?php if ($_smarty_tpl->getValue('do') != 'up') {?>x-hidden<?php }?>">
      <div class="card-header">
        <h4 class="card-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up for an Account");?>
</h4>
      </div>
      <div class="card-body pt0">
        <form class="js_ajax-forms" data-url="core/signup.php" method="POST">
          <?php if ($_smarty_tpl->getValue('system')['invitation_enabled']) {?>
            <!-- invitation code -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-handshake fa-fw"></i></span>
                <input name="invitation_code" type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invitation Code");?>
' value="<?php echo $_smarty_tpl->getValue('invitation_code');?>
" required>
              </div>
            </div>
            <!-- invitation code -->
          <?php }?>
          <?php if (!$_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
            <!-- first name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-user fa-fw"></i></span>
                <input name="first_name" type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("First name");?>
' required>
              </div>
            </div>
            <!-- first name -->
            <!-- last name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-user fa-fw"></i></span>
                <input name="last_name" type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Last name");?>
' required>
              </div>
            </div>
            <!-- last name -->
          <?php }?>
          <!-- username -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-globe fa-fw"></i></span>
              <input name="username" type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
' required>
            </div>
          </div>
          <!-- username -->
          <!-- email -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-text bg-transparent"><i class="fas fa-envelope fa-fw"></i></span>
              <input name="email" type="email" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>
' required>
            </div>
          </div>
          <!-- email -->
          <?php if ($_smarty_tpl->getValue('system')['activation_enabled'] && $_smarty_tpl->getValue('system')['activation_type'] == "sms") {?>
            <!-- phone -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-phone fa-fw"></i></span>
                <input name="phone" type="text" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone number (e.g: +1234567890)");?>
' required>
              </div>
            </div>
            <!-- phone -->
          <?php }?>
          <!-- password -->
          <div class="form-group">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-text bg-transparent"><i class="fas fa-key fa-fw"></i></span>
                <input name="password" type="password" class="form-control" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Password");?>
' required>
              </div>
            </div>
          </div>
          <!-- password -->
          <!-- custom fields -->
          <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
            <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
          <?php }?>
          <!-- custom fields -->
          <div class="js_hidden-section x-hidden">
            <?php if (!$_smarty_tpl->getValue('system')['genders_disabled']) {?>
              <!-- genders -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-text bg-transparent"><i class="fas fa-venus-mars fa-fw"></i></span>
                  <select class="form-select" name="gender" id="gender" required>
                    <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Sex");?>
:</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), 'gender');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gender')->value) {
$foreach4DoElse = false;
?>
                      <option value="<?php echo $_smarty_tpl->getValue('gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('gender')['gender_name'];?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>
              <!-- genders -->
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['age_restriction']) {?>
              <!-- birthdate -->
              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Birthdate");?>
</label>
                <div class="row">
                  <div class="col">
                    <select class="form-select" name="birth_month">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Month");?>
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
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Day");?>
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
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Year");?>
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
              <!-- birthdate -->
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['select_user_group_enabled'] && $_smarty_tpl->getValue('user_groups')) {?>
              <!-- user group -->
              <div class="form-group mb10">
                <select class="form-select" name="custom_user_group">
                  <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select User Group");?>
:</option>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_groups'), 'user_group');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user_group')->value) {
$foreach5DoElse = false;
?>
                    <option value="<?php echo $_smarty_tpl->getValue('user_group')['user_group_id'];?>
"><?php echo $_smarty_tpl->getValue('user_group')['user_group_title'];?>
</option>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
              </div>
              <!-- user group -->
            <?php }?>
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
                        <input type="text" name="field1" style="display:none !important" tabindex="-1" autocomplete="off">
                        <?php if ($_smarty_tpl->getValue('system')['newsletter_consent']) {?>
              <!-- newsletter consent -->
              <div class="form-check mb10">
                <input type="checkbox" class="form-check-input" name="newsletter_agree" id="newsletter_agree">
                <label class="form-check-label" for="newsletter_agree">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("I expressly agree to receive the newsletter");?>

                </label>
              </div>
              <!-- newsletter consent -->
            <?php }?>
            <!-- privacy & terms consent -->
            <div class="form-check mb10">
              <input type="checkbox" class="form-check-input" name="privacy_agree" id="privacy_agree">
              <label class="form-check-label" for="privacy_agree">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("By creating your account, you agree to our");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/static/terms" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Terms");?>
</a> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/static/privacy" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy Policy");?>
</a>
              </label>
            </div>
            <!-- privacy & terms consent -->
          </div>
          <!-- submit -->
          <div class="form-group d-grid">
            <?php if ($_smarty_tpl->getValue('oauth_app_id')) {?>
              <input type="hidden" name="oauth_app_id" value="<?php echo $_smarty_tpl->getValue('oauth_app_id');?>
">
            <?php }?>
            <button type="submit" class="btn btn-lg btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>
</button>
          </div>
          <!-- submit -->
          <!-- error -->
          <div class="alert alert-danger mt15 mb0 x-hidden"></div>
          <!-- error -->
        </form>
        <?php if ($_smarty_tpl->getValue('system')['social_login_enabled']) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:__social_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        <div class="mt20 text-center">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Already have an account?");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin" class="js_toggle-panel text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In");?>
</a>
        </div>
      </div>
    </div>
    <!-- signup -->
  </div>

<?php }
}
}
