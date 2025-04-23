<?php
/* Smarty version 5.4.1, created on 2025-04-17 02:22:01
  from 'file:admin.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680065c9b61d66_07271782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70ae314e1ae6a729b89eb78951fe0a75e6932878' => 
    array (
      0 => 'admin.tpl',
      1 => 1744139803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:admin.".((string)$_smarty_tpl->getValue(\'view\')).".tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_680065c9b61d66_07271782 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar admin-sidebar">

      <!-- System -->
      <div class="card mb15">
        <div class="card-header block-title">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("System");?>

        </div>
        <div class="card-body with-nav">
          <ul class="side-nav">
            <!-- Dashboard -->
            <li <?php if ($_smarty_tpl->getValue('view') == "dashboard") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
">
                <i class="fa fa-tachometer-alt fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Dashboard");?>

              </a>
            </li>
            <!-- Dashboard -->

            <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
              <!-- Settings -->
              <li <?php if ($_smarty_tpl->getValue('view') == "settings") {?>class="active" <?php }?>>
                <a href="#settings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "settings") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-cog fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "settings") {?>show<?php }?>' id="settings">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings">
                        <i class="fa fa-cogs fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("System Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "posts") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/posts">
                        <i class="fa fa-comment-alt fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "registration") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/registration">
                        <i class="fa fa-sign-in-alt fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Registration Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "accounts") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/accounts">
                        <i class="fa fa-users-cog fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Accounts Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "email") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/email">
                        <i class="fa fa-envelope-open fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "sms") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/sms">
                        <i class="fa fa-mobile fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SMS Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "notifications") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/notifications">
                        <i class="fa fa-bell fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "chat") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/chat">
                        <i class="fa fa-comments fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "live") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/live">
                        <i class="fa fa-signal fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live Stream Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "uploads") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/uploads">
                        <i class="fa fa-upload fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploads Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/payments">
                        <i class="fa fa-credit-card fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "security") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/security">
                        <i class="fa fa-shield-alt fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Security Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "limits") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/limits">
                        <i class="fa fa-tachometer-alt fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Limits Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "analytics") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/analytics">
                        <i class="fa fa-chart-pie fa-lg fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Analytics Settings");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Settings -->

              <!-- Themes -->
              <li <?php if ($_smarty_tpl->getValue('view') == "themes") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/themes">
                  <i class="fa fa-desktop fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Themes");?>

                </a>
              </li>
              <!-- Themes -->

              <!-- Design -->
              <li <?php if ($_smarty_tpl->getValue('view') == "design") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/design">
                  <i class="fa fa-paint-brush fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Design");?>

                </a>
              </li>
              <!-- Design -->

              <!-- Languages -->
              <li <?php if ($_smarty_tpl->getValue('view') == "languages") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/languages">
                  <i class="fa fa-language fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Languages");?>

                </a>
              </li>
              <!-- Languages -->

              <!-- Countries -->
              <li <?php if ($_smarty_tpl->getValue('view') == "countries") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/countries">
                  <i class="fa fa-globe fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Countries");?>

                </a>
              </li>
              <!-- Countries -->

              <!-- Currencies -->
              <li <?php if ($_smarty_tpl->getValue('view') == "currencies") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/currencies">
                  <i class="fa fa-money-bill-alt fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Currencies");?>

                </a>
              </li>
              <!-- Currencies -->

              <!-- Genders -->
              <li <?php if ($_smarty_tpl->getValue('view') == "genders") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/genders">
                  <i class="fa fa-venus-mars fa-lg fa-fw mr10" style="color: #5e72e4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Genders");?>

                </a>
              </li>
              <!-- Genders -->
            <?php }?>
          </ul>
        </div>
      </div>
      <!-- System -->

      <!-- Users -->
      <div class="card mb15">
        <div class="card-header block-title">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>

        </div>
        <div class="card-body with-nav">
          <ul class="side-nav">
            <!-- Users -->
            <li <?php if ($_smarty_tpl->getValue('view') == "users") {?>class="active" <?php }?>>
              <a href="#users" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "users") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-user fa-lg fa-fw mr10" style="color: #9C27B0"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "users") {?>show<?php }?>' id="users">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Users");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "moderators") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/moderators">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Moderators");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "admins") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/admins">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Admins");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "online") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/online">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Online");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "banned") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/banned">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Banned");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "not_activated") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/not_activated">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Not Activated");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "pending") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/pending">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Pending");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "users" && $_smarty_tpl->getValue('sub_view') == "stats") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/stats">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Users Stats");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Users -->

            <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
              <!-- Users Groups -->
              <li <?php if ($_smarty_tpl->getValue('view') == "users_groups") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users_groups">
                  <i class="fa fa-users fa-lg fa-fw mr10" style="color: #9C27B0"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Groups");?>

                </a>
              </li>
              <!-- Users Groups -->
            <?php }?>

            <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
              <!-- Permissions Groups -->
              <li <?php if ($_smarty_tpl->getValue('view') == "permissions_groups") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups">
                  <i class="fa fa-key fa-lg fa-fw mr10" style="color: #9C27B0"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions Groups");?>

                </a>
              </li>
              <!-- Permissions Groups -->
            <?php }?>
          </ul>
        </div>
      </div>
      <!-- Users -->


      <!-- Modules -->
      <div class="card mb15">
        <div class="card-header block-title">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Modules");?>

        </div>
        <div class="card-body with-nav">
          <ul class="side-nav">

            <!-- Posts -->
            <li <?php if ($_smarty_tpl->getValue('view') == "posts") {?>class="active" <?php }?>>
              <a href="#posts" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "posts") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-newspaper fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "posts") {?>show<?php }?>' id="posts">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "posts" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Posts");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "posts" && $_smarty_tpl->getValue('sub_view') == "pending") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts/pending">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Pending Posts");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "posts" && $_smarty_tpl->getValue('sub_view') == "videos_categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/posts/videos_categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Videos Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Posts -->

            <!-- Pages -->
            <li <?php if ($_smarty_tpl->getValue('view') == "pages") {?>class="active" <?php }?>>
              <a href="#pages" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "pages") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-flag fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "pages") {?>show<?php }?>' id="pages">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "pages" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pages">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Pages");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "pages" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pages/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Pages -->

            <!-- Groups -->
            <li <?php if ($_smarty_tpl->getValue('view') == "groups") {?>class="active" <?php }?>>
              <a href="#groups" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "groups") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-users fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "groups") {?>show<?php }?>' id="groups">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "groups" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Groups");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "groups" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/groups/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Groups -->

            <!-- Events -->
            <li <?php if ($_smarty_tpl->getValue('view') == "events") {?>class="active" <?php }?>>
              <a href="#events" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "events") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-calendar fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "events") {?>show<?php }?>' id="events">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "events" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Events");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "events" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/events/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Events -->

            <!-- Blogs -->
            <li <?php if ($_smarty_tpl->getValue('view') == "blogs") {?>class="active" <?php }?>>
              <a href="#blogs" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "blogs") {?>aria-expanded="true" <?php }?>>
                <i class="fab fa-blogger-b fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "blogs") {?>show<?php }?>' id="blogs">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "blogs" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/blogs">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Blogs");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "blogs" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/blogs/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Blogs -->

            <!-- Offers -->
            <li <?php if ($_smarty_tpl->getValue('view') == "offers") {?>class="active" <?php }?>>
              <a href="#offers" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "offers") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-tag fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "offers") {?>show<?php }?>' id="offers">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "offers" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/offers">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Offers");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "offers" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/offers/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Offers -->

            <!-- Jobs -->
            <li <?php if ($_smarty_tpl->getValue('view') == "jobs") {?>class="active" <?php }?>>
              <a href="#jobs" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "jobs") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-briefcase fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "jobs") {?>show<?php }?>' id="jobs">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "jobs" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/jobs">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Jobs");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "jobs" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/jobs/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Jobs -->

            <!-- Courses -->
            <li <?php if ($_smarty_tpl->getValue('view') == "courses") {?>class="active" <?php }?>>
              <a href="#courses" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "courses") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-book fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "courses") {?>show<?php }?>' id="courses">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "courses" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/courses">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Courses");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "courses" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/courses/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Courses -->

            <!-- Forums -->
            <li <?php if ($_smarty_tpl->getValue('view') == "forums") {?>class="active" <?php }?>>
              <a href="#forums" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "forums") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-comments fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "forums") {?>show<?php }?>' id="forums">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "forums" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/forums">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Forums");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "forums" && $_smarty_tpl->getValue('sub_view') == "threads") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/forums/threads">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Threads");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "forums" && $_smarty_tpl->getValue('sub_view') == "replies") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/forums/replies">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Replies");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Forums -->

            <!-- Movies -->
            <li <?php if ($_smarty_tpl->getValue('view') == "movies") {?>class="active" <?php }?>>
              <a href="#movies" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "movies") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-film fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "movies") {?>show<?php }?>' id="movies">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "movies" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Movies");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "movies" && $_smarty_tpl->getValue('sub_view') == "genres") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/movies/genres">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Genres");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Movies -->

            <!-- Games -->
            <li <?php if ($_smarty_tpl->getValue('view') == "games") {?>class="active" <?php }?>>
              <a href="#games" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "games") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-gamepad fa-lg fa-fw mr10" style="color: #F44336"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "games") {?>show<?php }?>' id="games">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "games" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/games">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Games");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "games" && $_smarty_tpl->getValue('sub_view') == "genres") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/games/genres">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Genres");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Games -->

          </ul>
        </div>
      </div>
      <!-- Modules -->

      <!-- Activities -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card mb15 x-hidden">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activities");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">
              <li <?php if ($_smarty_tpl->getValue('view') == "activities") {?>class="active" <?php }?>>
                <a href="#activities" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "activities") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-calendar-days fa-lg fa-fw mr10" style="color: #ffc107"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activities");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "activities") {?>show<?php }?>' id="activities">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "activities" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/activities">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activities Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "activities" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/activities/categories">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      <?php }?>
      <!-- Activities -->

      <!-- Money -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card mb15">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Money");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">

              <!-- Earnings -->
              <li <?php if ($_smarty_tpl->getValue('view') == "earnings") {?>class="active" <?php }?>>
                <a href="#earnings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "earnings") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-chart-line fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Earnings");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "earnings") {?>show<?php }?>' id="earnings">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/earnings">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == "commissions") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/earnings/commissions">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commissions");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == "packages") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/earnings/packages">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Packages Earnings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == "movies") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/earnings/movies">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies Earnings");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Earnings -->

              <!-- Ads -->
              <li <?php if ($_smarty_tpl->getValue('view') == "ads") {?>class="active" <?php }?>>
                <a href="#ads" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "ads") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-bullseye fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "ads") {?>show<?php }?>' id="ads">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "ads" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "ads" && $_smarty_tpl->getValue('sub_view') == "users_ads") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads/users_ads">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Users Ads");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "ads" && $_smarty_tpl->getValue('sub_view') == "system_ads") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads/system_ads">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List System Ads");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Ads -->

              <!-- Wallet -->
              <li <?php if ($_smarty_tpl->getValue('view') == "wallet") {?>class="active" <?php }?>>
                <a href="#wallet" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "wallet") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-wallet fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "wallet") {?>show<?php }?>' id="wallet">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "wallet" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "wallet" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet/payments">
                        <?php if ($_smarty_tpl->getValue('wallet_payments_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('wallet_payments_insights');?>
</span><?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Wallet -->

              <!-- Pro System -->
              <li <?php if ($_smarty_tpl->getValue('view') == "pro") {?>class="active" <?php }?>>
                <a href="#pro" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "pro") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-cubes fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro System");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "pro") {?>show<?php }?>' id="pro">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "pro" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "pro" && $_smarty_tpl->getValue('sub_view') == "packages") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/packages">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Packages");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "pro" && $_smarty_tpl->getValue('sub_view') == "subscribers") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/subscribers">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Subscribers");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Pro System -->

              <!-- Affiliates -->
              <li <?php if ($_smarty_tpl->getValue('view') == "affiliates") {?>class="active" <?php }?>>
                <a href="#affiliates" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "affiliates") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-exchange-alt fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliates");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "affiliates") {?>show<?php }?>' id="affiliates">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "affiliates" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/affiliates">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliates Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "affiliates" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/affiliates/payments">
                        <?php if ($_smarty_tpl->getValue('affiliates_payments_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('affiliates_payments_insights');?>
</span><?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Affiliates -->

              <!-- Points -->
              <li <?php if ($_smarty_tpl->getValue('view') == "points") {?>class="active" <?php }?>>
                <a href="#points" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "points") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-piggy-bank fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points System");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "points") {?>show<?php }?>' id="points">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "points" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/points">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "points" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/points/payments">
                        <?php if ($_smarty_tpl->getValue('points_payments_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('points_payments_insights');?>
</span><?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Points -->

              <!-- Market -->
              <li <?php if ($_smarty_tpl->getValue('view') == "market") {?>class="active" <?php }?>>
                <a href="#market" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "market") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-shopping-bag fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "market") {?>show<?php }?>' id="market">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "market" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "market" && $_smarty_tpl->getValue('sub_view') == "products") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/products">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Products");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "market" && $_smarty_tpl->getValue('sub_view') == "orders") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/orders">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Orders");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "market" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/categories">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "market" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/payments">
                        <?php if ($_smarty_tpl->getValue('marketplace_payments_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('marketplace_payments_insights');?>
</span><?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Market -->

              <!-- Funding -->
              <li <?php if ($_smarty_tpl->getValue('view') == "funding") {?>class="active" <?php }?>>
                <a href="#funding" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "funding") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-hand-holding-usd fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "funding") {?>show<?php }?>' id="funding">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "funding" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/funding">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "funding" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/funding/payments">
                        <?php if ($_smarty_tpl->getValue('funding_payments_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('funding_payments_insights');?>
</span><?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "funding" && $_smarty_tpl->getValue('sub_view') == "requests") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/funding/requests">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding Requests");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Funding -->

              <!-- Monetization -->
              <li <?php if ($_smarty_tpl->getValue('view') == "monetization") {?>class="active" <?php }?>>
                <a href="#monetization" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "monetization") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-coins fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "monetization") {?>show<?php }?>' id="monetization">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "monetization" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/monetization">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "monetization" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/monetization/payments">
                        <?php if ($_smarty_tpl->getValue('monetization_payments_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('monetization_payments_insights');?>
</span><?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Monetization -->

              <!-- Tips -->
              <li <?php if ($_smarty_tpl->getValue('view') == "tips") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/tips">
                  <i class="fa fa-dollar-sign fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tips");?>

                </a>
              </li>
              <!-- Tips -->

            </ul>
          </div>
        </div>
      <?php }?>
      <!-- Money -->

      <!-- Payments -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card mb15">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">

              <!-- CoinPayments -->
              <li <?php if ($_smarty_tpl->getValue('view') == "coinpayments") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/coinpayments">
                  <i class="fab fa-bitcoin fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("CoinPayments");?>

                </a>
              </li>
              <!-- CoinPayments -->

              <!-- Bank Receipts -->
              <li <?php if ($_smarty_tpl->getValue('view') == "bank") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/bank">
                  <?php if ($_smarty_tpl->getValue('bank_transfers_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('bank_transfers_insights');?>
</span><?php }?>
                  <i class="fa fa-university fa-lg fa-fw mr10" style="color: #4CAF50"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Receipts");?>

                </a>
              </li>
              <!-- Bank Receipts -->

            </ul>
          </div>
        </div>
      <?php }?>
      <!-- Payments -->

      <!-- Developers -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card mb15">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">

              <!-- Developers -->
              <li <?php if ($_smarty_tpl->getValue('view') == "developers") {?>class="active" <?php }?>>
                <a href="#developers" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "developers") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-cubes fa-lg fa-fw mr10" style="color: #ffc107"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "developers") {?>show<?php }?>' id="developers">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "developers" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/developers">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers Settings");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "developers" && $_smarty_tpl->getValue('sub_view') == "apps") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/developers/apps">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Apps");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "developers" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/developers/categories">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Developers -->

            </ul>
          </div>
        </div>
      <?php }?>
      <!-- Developers -->

      <!-- Tools -->
      <div class="card mb15">
        <div class="card-header block-title">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tools");?>

        </div>
        <div class="card-body with-nav">
          <ul class="side-nav">

            <!-- Reports -->
            <li <?php if ($_smarty_tpl->getValue('view') == "reports") {?>class="active" <?php }?>>
              <a href="#reports" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "reports") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-exclamation-triangle fa-lg fa-fw mr10" style="color: #03A9F4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reports");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "reports") {?>show<?php }?>' id="reports">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "reports" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/reports">
                      <?php if ($_smarty_tpl->getValue('reports_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('reports_insights');?>
</span><?php }?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List reports");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "reports" && $_smarty_tpl->getValue('sub_view') == "categories") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/reports/categories">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Categories");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Reports -->

            <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
              <!-- Blacklist -->
              <li <?php if ($_smarty_tpl->getValue('view') == "blacklist") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/blacklist">
                  <i class="fa fa-minus-circle fa-lg fa-fw mr10" style="color: #03A9F4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blacklist");?>

                </a>
              </li>
              <!-- Blacklist -->
            <?php }?>

            <!-- Verification -->
            <li <?php if ($_smarty_tpl->getValue('view') == "verification") {?>class="active" <?php }?>>
              <a href="#verification" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "verification") {?>aria-expanded="true" <?php }?>>
                <i class="fa fa-check-circle fa-lg fa-fw mr10" style="color: #03A9F4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "verification") {?>show<?php }?>' id="verification">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "verification" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/verification">
                      <?php if ($_smarty_tpl->getValue('verification_requests_insights')) {?><span class="float-end badge rounded-pill bg-danger"><?php echo $_smarty_tpl->getValue('verification_requests_insights');?>
</span><?php }?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Requests");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "verification" && $_smarty_tpl->getValue('sub_view') == "users") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/verification/users">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Verified Users");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "verification" && $_smarty_tpl->getValue('sub_view') == "pages") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/verification/pages">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Verified Pages");?>

                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- Verification -->

            <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
              <!-- Tools -->
              <li <?php if ($_smarty_tpl->getValue('view') == "tools") {?>class="active" <?php }?>>
                <a href="#tools" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "tools") {?>aria-expanded="true" <?php }?>>
                  <i class="fa fa-toolbox fa-lg fa-fw mr10" style="color: #03A9F4"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tools");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "tools") {?>show<?php }?>' id="tools">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "tools" && $_smarty_tpl->getValue('sub_view') == "faker") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/tools/faker">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Fake Generator");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "tools" && $_smarty_tpl->getValue('sub_view') == "auto-connect") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/tools/auto-connect">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Auto Connect");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "tools" && $_smarty_tpl->getValue('sub_view') == "garbage-collector") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/tools/garbage-collector">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Garbage Collector");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "tools" && $_smarty_tpl->getValue('sub_view') == "backups") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/tools/backups">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Backup Database & Files");?>

                      </a>
                    </li>
                    <li <?php if ($_smarty_tpl->getValue('view') == "tools" && $_smarty_tpl->getValue('sub_view') == "reset") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/tools/reset">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Factory Reset");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Tools -->
            <?php }?>

          </ul>
        </div>
      </div>
      <!-- Tools -->

      <!-- Customization -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card mb15">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Customization");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">

              <!-- Custom Fields -->
              <li <?php if ($_smarty_tpl->getValue('view') == "custom_fields") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/custom_fields">
                  <i class="fa fa-bars fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Fields");?>

                </a>
              </li>
              <!-- Custom Fields -->

              <!-- Static Pages -->
              <li <?php if ($_smarty_tpl->getValue('view') == "static") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/static">
                  <i class="fa fa-file fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Static Pages");?>

                </a>
              </li>
              <!-- Static Pages -->

              <!-- Colored Posts -->
              <li <?php if ($_smarty_tpl->getValue('view') == "colored_posts") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/colored_posts">
                  <i class="fa fa-palette fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Colored Posts");?>

                </a>
              </li>
              <!-- Colored Posts -->

              <!-- Widgets -->
              <li <?php if ($_smarty_tpl->getValue('view') == "widgets") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/widgets">
                  <i class="fa fa-puzzle-piece fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widgets");?>

                </a>
              </li>
              <!-- Widgets -->

              <!-- Reactions -->
              <li <?php if ($_smarty_tpl->getValue('view') == "reactions") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/reactions">
                  <i class="fa fa-smile fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reactions");?>

                </a>
              </li>
              <!-- Reactions -->

              <!-- Emojis -->
              <li <?php if ($_smarty_tpl->getValue('view') == "emojis") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/emojis">
                  <i class="fa fa-grin-tears fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Emojis");?>

                </a>
              </li>
              <!-- Emojis -->

              <!-- Stickers -->
              <li <?php if ($_smarty_tpl->getValue('view') == "stickers") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/stickers">
                  <i class="fa fa-hand-peace fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stickers");?>

                </a>
              </li>
              <!-- Stickers -->

              <!-- Gifts -->
              <li <?php if ($_smarty_tpl->getValue('view') == "gifts") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/gifts">
                  <i class="fa fa-gift fa-lg fa-fw mr10" style="color: #FF5722"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Gifts");?>

                </a>
              </li>
              <!-- Gifts -->

            </ul>
          </div>
        </div>
      <?php }?>
      <!-- Customization -->

      <!-- Reach -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card mb15">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reach");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">

              <!-- Announcements -->
              <li <?php if ($_smarty_tpl->getValue('view') == "announcements") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/announcements">
                  <i class="fa fa-bullhorn fa-lg fa-fw mr10" style="color: #009688"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Announcements");?>

                </a>
              </li>
              <!-- Announcements -->

              <!-- Notifications -->
              <li <?php if ($_smarty_tpl->getValue('view') == "notifications") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/notifications">
                  <i class="fa fa-bell fa-lg fa-fw mr10" style="color: #009688"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mass Notifications");?>

                </a>
              </li>
              <!-- Notifications -->

              <!-- Newsletter -->
              <li <?php if ($_smarty_tpl->getValue('view') == "newsletter") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/newsletter">
                  <i class="fa fa-paper-plane fa-lg fa-fw mr10" style="color: #009688"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Newsletter");?>

                </a>
              </li>
              <!-- Newsletter -->

            </ul>
          </div>
        </div>
      <?php }?>
      <!-- Reach -->

      <!-- System -->
      <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
        <div class="card">
          <div class="card-header block-title">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Info");?>

          </div>
          <div class="card-body with-nav">
            <ul class="side-nav">

              <!-- Changelog -->
              <li <?php if ($_smarty_tpl->getValue('view') == "changelog") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/changelog">
                  <i class="fa fa-stopwatch fa-lg fa-fw mr10" style="color: #795548"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Changelog");?>

                </a>
              </li>
              <!-- Changelog -->

              <!-- Build -->
              <li>
                <div class="static">
                  <i class="fa fa-copyright fa-lg fa-fw mr10" style="color: #795548"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Build");?>
 v<?php echo $_smarty_tpl->getValue('system')['system_version'];?>

                </div>
              </li>
              <!-- Build -->

            </ul>
          </div>
        </div>
      <?php }?>
      <!-- System -->

    </div>
    <!-- left panel -->

    <!-- right panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">
      <?php $_smarty_tpl->renderSubTemplate("file:admin.".((string)$_smarty_tpl->getValue('view')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- right panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
