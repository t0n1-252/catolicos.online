<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:32:26
  from 'file:_header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c1ac6d744_93322914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a7515d4b547a76f47f593ae6643d280f9bf26d' => 
    array (
      0 => '_header.tpl',
      1 => 1744139733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 18,
    'file:_header.search.tpl' => 1,
    'file:_header.friend_requests.tpl' => 1,
    'file:_header.messages.tpl' => 1,
    'file:_header.notifications.tpl' => 1,
    'file:_user_menu.tpl' => 1,
    'file:_ads.tpl' => 1,
  ),
))) {
function content_68004c1ac6d744_93322914 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if (!$_smarty_tpl->getValue('user')->_logged_in) {?>

  <body data-hash-tok="<?php echo $_smarty_tpl->getValue('session_hash')['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->getValue('session_hash')['position'];?>
" <?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>data-bs-theme="dark" <?php }?> class="<?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>night-mode<?php }?> visitor n_chat <?php if ($_smarty_tpl->getValue('page') == 'index' && !$_smarty_tpl->getValue('system')['newsfeed_public']) {?>index-body<?php }?>" <?php if ($_smarty_tpl->getValue('page') == 'profile' && $_smarty_tpl->getValue('system')['system_profile_background_enabled'] && $_smarty_tpl->getValue('profile')['user_profile_background']) {?>style="background: url(<?php echo $_smarty_tpl->getValue('profile')['user_profile_background'];?>
) fixed !important; background-size: 100% auto;" <?php }?>>
  <?php } else { ?>

    <body data-hash-tok="<?php echo $_smarty_tpl->getValue('session_hash')['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->getValue('session_hash')['position'];?>
" data-chat-enabled="<?php echo $_smarty_tpl->getValue('user')->_data['user_chat_enabled'];?>
" <?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>data-bs-theme="dark" <?php }?> class="<?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>night-mode<?php }?> <?php if (!$_smarty_tpl->getValue('system')['chat_enabled'] || $_smarty_tpl->getValue('user')->_data['user_privacy_chat'] == "me") {?>n_chat<?php }
if ($_smarty_tpl->getValue('system')['activation_enabled'] && !$_smarty_tpl->getValue('system')['activation_required'] && !$_smarty_tpl->getValue('user')->_data['user_activated']) {?> n_activated<?php }
if (!$_smarty_tpl->getValue('system')['system_live']) {?> n_live<?php }?>" <?php if ($_smarty_tpl->getValue('page') == 'profile' && $_smarty_tpl->getValue('system')['system_profile_background_enabled'] && $_smarty_tpl->getValue('profile')['user_profile_background']) {?>style="background: url(<?php echo $_smarty_tpl->getValue('profile')['user_profile_background'];?>
) fixed !important; background-size: 100% auto;" <?php }?> <?php if ($_smarty_tpl->getValue('url')) {?>onload="initialize_scraper()" <?php }?>>
    <?php }?>
    <!-- main wrapper -->
    <div class="main-wrapper">
      <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['activation_enabled'] && !$_smarty_tpl->getValue('system')['activation_required'] && !$_smarty_tpl->getValue('user')->_data['user_activated']) {?>
        <!-- top-bar -->
        <div class="top-bar">
          <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
            <div class="row">
              <div class="col-sm-7 d-none d-sm-block">
                <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please go to");?>
 <span class="text-primary"><?php echo $_smarty_tpl->getValue('user')->_data['user_email'];?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the activation process");?>
.
                <?php } else { ?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please check the SMS on your phone");?>
 <strong><?php echo $_smarty_tpl->getValue('user')->_data['user_phone'];?>
</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("to complete the activation process");?>
.
                <?php }?>
              </div>
              <div class="col-sm-5">
                <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
                  <span class="text-link" data-toggle="modal" data-url="core/activation_email_resend.php">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend Verification Email");?>

                  </span>
                  -
                  <span class="text-link" data-toggle="modal" data-url="#activation-email-reset">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Change Email");?>

                  </span>
                <?php } else { ?>
                  <span class="btn btn-info btn-sm mr10" data-toggle="modal" data-url="#activation-phone"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter Code");?>
</span>
                  <?php if ($_smarty_tpl->getValue('user')->_data['user_phone']) {?>
                    <span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resend SMS");?>

                    </span>
                    -
                  <?php }?>
                  <span class="text-link" data-toggle="modal" data-url="#activation-phone-reset">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Change Phone Number");?>

                  </span>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
        <!-- top-bar -->
      <?php }?>

      <?php if (!$_smarty_tpl->getValue('system')['system_live']) {?>
        <!-- top-bar alert-->
        <div class="top-bar danger">
          <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
            <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
            <span class="d-none d-sm-inline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The system has been shutted down");?>
.</span>
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn it on from");?>
</span> <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/admincp/settings"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admin Panel");?>
</a>
          </div>
        </div>
        <!-- top-bar alert-->
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_login_as) {?>
        <!-- bottom-bar alert-->
        <div class="bottom-bar">
          <div class="container logged-as-container">
            <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You are currently logged in as");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
"><?php echo $_smarty_tpl->getValue('user')->_data['name'];?>
</a></span>
            <button class="btn btn-sm btn-warning ml20 js_login-as" data-handle="revoke">
              <i class="fa-solid fa-arrow-rotate-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Switch Back");?>

            </button>
          </div>
        </div>
        <!-- bottom-bar alert-->
      <?php }?>

      <!-- main-header -->
      <?php if ($_smarty_tpl->getValue('page') != "index" || ($_smarty_tpl->getValue('user')->_logged_in || $_smarty_tpl->getValue('system')['newsfeed_public'])) {?>
        <div class="main-header" <?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>style="padding-right: 0;" <?php }?>>
          <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
            <div class="row">

              <div class="col-7 col-md-4 col-lg-3">
                <!-- logo-wrapper -->
                <div class="logo-wrapper" <?php if (!($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['newsfeed_public']))) {?>style="padding-left: 0;" <?php }?>>

                  <?php if ($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['newsfeed_public'])) {?>
                    <!-- menu-icon -->
                    <a href="#" data-bs-toggle="sg-offcanvas" class="menu-icon d-block d-md-none">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-menu",'class'=>"header-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    </a>
                    <!-- menu-icon -->
                  <?php }?>

                  <!-- logo -->
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
" class="logo">
                    <?php if ($_smarty_tpl->getValue('system')['system_logo']) {?>
                      <img class="logo-light img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
" alt="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
                      <?php if (!$_smarty_tpl->getValue('system')['system_logo_dark']) {?>
                        <img class="logo-dark img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
" alt="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
                      <?php } else { ?>
                        <img class="logo-dark img-fluid" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo_dark'];?>
" alt="<?php echo $_smarty_tpl->getValue('system')['system_title'];?>
" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
">
                      <?php }?>
                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>

                    <?php }?>
                  </a>
                  <!-- logo -->
                </div>
                <!-- logo-wrapper -->
              </div>

              <div class="col-5 col-md-8 col-lg-9">
                <div class="row">
                  <div class="col-md-7 col-lg-8">
                    <!-- search-wrapper -->
                    <?php if ($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['system_public'])) {?>
                      <?php $_smarty_tpl->renderSubTemplate('file:_header.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php }?>
                    <!-- search-wrapper -->
                  </div>
                  <div class="col-md-5 col-lg-4">
                    <!-- navbar-wrapper -->
                    <div class="navbar-wrapper">
                      <ul>
                        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
                          <?php if ($_smarty_tpl->getValue('user')->_data['can_publish_posts'] || $_smarty_tpl->getValue('user')->_data['can_go_live'] || $_smarty_tpl->getValue('user')->_data['can_add_stories'] || $_smarty_tpl->getValue('user')->_data['can_write_blogs'] || $_smarty_tpl->getValue('user')->_data['can_sell_products'] || $_smarty_tpl->getValue('user')->_data['can_raise_funding'] || $_smarty_tpl->getValue('user')->_data['can_create_ads'] || $_smarty_tpl->getValue('user')->_data['can_create_pages'] || $_smarty_tpl->getValue('user')->_data['can_create_groups'] || $_smarty_tpl->getValue('user')->_data['can_create_events']) {?>
                            <!-- add -->
                            <li class="d-none d-xxl-block dropdown">
                              <a href="#" data-bs-toggle="dropdown" data-display="static">
                                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-plus",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_publish_posts']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/publisher.php">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Post");?>

                                  </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_go_live']) {?>
                                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/live">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Live");?>

                                  </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/story.php?do=create">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"24_hours",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Story");?>

                                  </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_write_blogs']) {?>
                                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/new">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Blog");?>

                                  </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/product.php?do=create">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Product");?>

                                  </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_raise_funding']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/funding.php?do=create">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Funding");?>

                                  </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_ads']) {?>
                                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads/new">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Ads");?>

                                  </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_pages']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/add.php?type=page">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Page");?>

                                  </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_groups']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/add.php?type=group">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Group");?>

                                  </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_events']) {?>
                                  <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/add.php?type=event">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Event");?>

                                  </div>
                                <?php }?>
                              </div>
                            </li>
                            <!-- add -->
                          <?php }?>

                          <!-- friend requests -->
                          <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                            <?php $_smarty_tpl->renderSubTemplate('file:_header.friend_requests.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                          <?php }?>
                          <!-- friend requests -->

                          <!-- messages -->
                          <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('user')->_data['user_privacy_chat'] != "me") {?>
                            <?php $_smarty_tpl->renderSubTemplate('file:_header.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                          <?php }?>
                          <!-- messages -->

                          <!-- notifications -->
                          <?php $_smarty_tpl->renderSubTemplate('file:_header.notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                          <!-- notifications -->

                          <!-- user-menu -->
                          <li class="d-none d-md-block dropdown">
                            <?php $_smarty_tpl->renderSubTemplate('file:_user_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                          </li>
                          <!-- user-menu -->

                        <?php } else { ?>

                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle user-menu float-end" data-bs-toggle="dropdown" data-display="static">
                              <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/blank_profile_male.png">
                              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Join");?>
</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin">
                                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"login",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign In");?>

                              </a>
                              <?php if ($_smarty_tpl->getValue('system')['registration_enabled']) {?>
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signup">
                                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_add",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sign Up");?>

                                </a>
                              <?php }?>
                              <?php if ($_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['system_public'])) {?>
                                <div class="d-block d-md-none">
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                                  </a>
                                </div>
                              <?php }?>
                              <?php if (($_smarty_tpl->getValue('system')['themes'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('system')['themes']) > 1) || $_smarty_tpl->getValue('system')['system_theme_mode_select']) {?>
                                <div class="dropdown-divider"></div>
                              <?php }?>
                              <?php if ($_smarty_tpl->getValue('system')['themes'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('system')['themes']) > 1) {?>
                                <div class="dropdown-item pointer" data-toggle="modal" data-url="#theme-switcher">
                                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"themes_switcher",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Theme Switcher");?>

                                </div>
                              <?php }?>
                              <?php if ($_smarty_tpl->getValue('system')['system_theme_mode_select']) {?>
                                <?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>
                                  <div class="dropdown-item pointer js_theme-mode" data-mode="day">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                                    <span class="js_theme-mode-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Day Mode");?>
</span>
                                  </div>
                                <?php } else { ?>
                                  <div class="dropdown-item pointer js_theme-mode" data-mode="night">
                                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                                    <span class="js_theme-mode-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Night Mode");?>
</span>
                                  </div>
                                <?php }?>
                              <?php }?>
                            </div>
                          </li>

                        <?php }?>
                      </ul>
                    </div>
                    <!-- navbar-wrapper -->
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      <?php }?>
      <!-- main-header -->

      <!-- ads -->
      <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->getValue('ads_master')['header'],'_master'=>true), (int) 0, $_smarty_current_dir);
?>
<!-- ads --><?php }
}
