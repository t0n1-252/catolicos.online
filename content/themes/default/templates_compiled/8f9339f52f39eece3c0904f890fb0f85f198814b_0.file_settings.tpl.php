<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:56:45
  from 'file:settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e99d151497_79118380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f9339f52f39eece3c0904f890fb0f85f198814b' => 
    array (
      0 => 'settings.tpl',
      1 => 1744139704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__svg_icons.tpl' => 22,
    'file:settings.account.tpl' => 1,
    'file:settings.profile.tpl' => 1,
    'file:settings.security.tpl' => 1,
    'file:settings.privacy.tpl' => 1,
    'file:settings.notifications.tpl' => 1,
    'file:settings.accounts.tpl' => 1,
    'file:settings.linked.tpl' => 1,
    'file:settings.membership.tpl' => 1,
    'file:settings.invitations.tpl' => 1,
    'file:settings.affiliates.tpl' => 1,
    'file:settings.points.tpl' => 1,
    'file:settings.market.tpl' => 1,
    'file:settings.funding.tpl' => 1,
    'file:settings.monetization.tpl' => 1,
    'file:settings.coinpayments.tpl' => 1,
    'file:settings.bank.tpl' => 1,
    'file:settings.verification.tpl' => 1,
    'file:settings.apps.tpl' => 1,
    'file:settings.blocking.tpl' => 1,
    'file:settings.addresses.tpl' => 1,
    'file:settings.information.tpl' => 1,
    'file:settings.delete.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6801e99d151497_79118380 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
      <div class="card">
        <div class="card-body with-nav">
          <ul class="side-nav">
            <li <?php if ($_smarty_tpl->getValue('view') == '') {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account Settings");?>

              </a>
            </li>

            <li <?php if ($_smarty_tpl->getValue('view') == "profile") {?>class="active" <?php }?>>
              <a href="#info-settings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "profile") {?>aria-expanded="true" <?php }?>>
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Profile");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "profile") {?>show<?php }?>' id="info-settings">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Basic");?>

                    </a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('system')['work_info_enabled']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == "work") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/work">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['location_info_enabled']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == "location") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/location">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['education_info_enabled']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == "education") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/education">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Education");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('custom_fields')['other']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == "other") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/other">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Other");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['social_info_enabled']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == "social") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/social">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Social Links");?>

                      </a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['system_profile_background_enabled']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "profile" && $_smarty_tpl->getValue('sub_view') == "design") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/design">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Design");?>

                      </a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </li>

            <li <?php if ($_smarty_tpl->getValue('view') == "security") {?>class="active" <?php }?>>
              <a href="#security-settings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "security") {?>aria-expanded="true" <?php }?>>
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"security",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Security Settings");?>

              </a>
              <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "security") {?>show<?php }?>' id="security-settings">
                <ul>
                  <li <?php if ($_smarty_tpl->getValue('view') == "security" && $_smarty_tpl->getValue('sub_view') == "password") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/security/password">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Password");?>

                    </a>
                  </li>
                  <li <?php if ($_smarty_tpl->getValue('view') == "security" && $_smarty_tpl->getValue('sub_view') == "sessions") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/security/sessions">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Sessions");?>

                    </a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('system')['two_factor_enabled']) {?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "security" && $_smarty_tpl->getValue('sub_view') == "two-factor") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/security/two-factor">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Two-Factor Authentication");?>

                      </a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </li>

            <div class="divider mtb5"></div>

            <li <?php if ($_smarty_tpl->getValue('view') == "notifications") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/notifications">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"notifications",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>

              </a>
            </li>

            <?php if ($_smarty_tpl->getValue('system')['verification_requests']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "verification") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/verification">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification");?>

                </a>
              </li>
            <?php }?>

            <div class="divider mtb5"></div>

            <li <?php if ($_smarty_tpl->getValue('view') == "privacy") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/privacy">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"privacy",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy");?>

              </a>
            </li>

            <li <?php if ($_smarty_tpl->getValue('view') == "blocking") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/blocking">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blocking",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blocking");?>

              </a>
            </li>

            <?php if ($_smarty_tpl->getValue('system')['switch_accounts_enabled'] || $_smarty_tpl->getValue('system')['social_login_enabled']) {?>
              <div class="divider mtb5"></div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['switch_accounts_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "accounts") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/accounts">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_add",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Connected Accounts");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['social_login_enabled']) {?>
              <?php if ($_smarty_tpl->getValue('system')['facebook_login_enabled'] || $_smarty_tpl->getValue('system')['google_login_enabled'] || $_smarty_tpl->getValue('system')['twitter_login_enabled'] || $_smarty_tpl->getValue('system')['linkedin_login_enabled'] || $_smarty_tpl->getValue('system')['vkontakte_login_enabled'] || $_smarty_tpl->getValue('system')['wordpress_login_enabled'] || $_smarty_tpl->getValue('system')['sngine_login_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('view') == "linked") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/linked">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linked_accounts",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Linked Accounts");?>

                  </a>
                </li>
              <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['packages_enabled'] || $_smarty_tpl->getValue('user')->_data['can_monetize_content'] || $_smarty_tpl->getValue('user')->_data['can_invite_users'] || $_smarty_tpl->getValue('system')['affiliates_enabled'] || $_smarty_tpl->getValue('system')['points_enabled'] || $_smarty_tpl->getValue('user')->_data['can_sell_products'] || $_smarty_tpl->getValue('user')->_data['can_raise_funding'] || $_smarty_tpl->getValue('system')['coinpayments_enabled'] || $_smarty_tpl->getValue('system')['bank_transfers_enabled']) {?>
              <div class="divider mtb5"></div>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['packages_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "membership") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/membership">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"membership",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('user')->_data['can_monetize_content']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "monetization") {?>class="active" <?php }?>>
                <a href="#monetization-settings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "monetization") {?>aria-expanded="true" <?php }?>>
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "monetization") {?>show<?php }?>' id="monetization-settings">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "monetization" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/monetization">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");?>

                      </a>
                    </li>
                    <?php if ($_smarty_tpl->getValue('system')['monetization_money_withdraw_enabled']) {?>
                      <li <?php if ($_smarty_tpl->getValue('view') == "monetization" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/monetization/payments">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");?>

                        </a>
                      </li>
                    <?php }?>
                    <li <?php if ($_smarty_tpl->getValue('view') == "monetization" && $_smarty_tpl->getValue('sub_view') == "earnings") {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/monetization/earnings">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Earnings");?>

                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('user')->_data['can_invite_users']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "invitations") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/invitations">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invitations");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['affiliates_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "affiliates") {?>class="active" <?php }?>>
                <a href="#affiliates-settings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "affiliates") {?>aria-expanded="true" <?php }?>>
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"affiliates",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Affiliates");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "affiliates") {?>show<?php }?>' id="affiliates-settings">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "affiliates" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/affiliates">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Affiliates");?>

                      </a>
                    </li>
                    <?php if ($_smarty_tpl->getValue('system')['affiliates_money_withdraw_enabled']) {?>
                      <li <?php if ($_smarty_tpl->getValue('view') == "affiliates" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/affiliates/payments">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");?>

                        </a>
                      </li>
                    <?php }?>
                  </ul>
                </div>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['points_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "points") {?>class="active" <?php }?>>
                <a href="#points-settings" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('view') == "points") {?>aria-expanded="true" <?php }?>>
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"points",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points");?>

                </a>
                <div class='collapse <?php if ($_smarty_tpl->getValue('view') == "points") {?>show<?php }?>' id="points-settings">
                  <ul>
                    <li <?php if ($_smarty_tpl->getValue('view') == "points" && $_smarty_tpl->getValue('sub_view') == '') {?>class="active" <?php }?>>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/points">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Points");?>

                      </a>
                    </li>
                    <?php if ($_smarty_tpl->getValue('system')['points_per_currency'] > 0 && $_smarty_tpl->getValue('system')['points_money_withdraw_enabled']) {?>
                      <li <?php if ($_smarty_tpl->getValue('view') == "points" && $_smarty_tpl->getValue('sub_view') == "payments") {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/points/payments">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");?>

                        </a>
                      </li>
                    <?php }?>
                  </ul>
                </div>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products'] && $_smarty_tpl->getValue('system')['market_shopping_cart_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "market") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/market">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('user')->_data['can_raise_funding']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "funding") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/funding">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['coinpayments_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "coinpayments") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/coinpayments">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"coinpayments",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("CoinPayments");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['bank_transfers_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "bank") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/bank">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"bank",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Transfers");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['developers_apps_enabled']) {?>
              <div class="divider mtb5"></div>

              <li <?php if ($_smarty_tpl->getValue('view') == "apps") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/apps">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"apps",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apps");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['download_info_enabled'] || $_smarty_tpl->getValue('system')['delete_accounts_enabled']) {?>
              <div class="divider mtb5"></div>
            <?php }?>

            <li <?php if ($_smarty_tpl->getValue('view') == "addresses") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/addresses">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Addresses");?>

              </a>
            </li>

            <?php if ($_smarty_tpl->getValue('system')['download_info_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "information") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/information">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_information",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Information");?>

                </a>
              </li>
            <?php }?>

            <?php if ($_smarty_tpl->getValue('system')['delete_accounts_enabled']) {?>
              <li <?php if ($_smarty_tpl->getValue('view') == "delete") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/delete">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete_user",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Account");?>

                </a>
              </li>
            <?php }?>
          </ul>
        </div>
      </div>
    </div>
    <!-- left panel -->

    <!-- right panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">
      <div class="card">
        <?php if ($_smarty_tpl->getValue('view') == '') {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "profile") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.profile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "security") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.security.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "privacy") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.privacy.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "notifications") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "accounts") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.accounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "linked") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.linked.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "membership") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.membership.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "invitations") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.invitations.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "affiliates") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.affiliates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "points") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.points.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "market") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.market.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "funding") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.funding.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "monetization") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.monetization.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "coinpayments") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.coinpayments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "bank") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.bank.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "verification") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.verification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "apps") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.apps.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "blocking") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.blocking.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "addresses") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.addresses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "information") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.information.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } elseif ($_smarty_tpl->getValue('view') == "delete") {?>
          <?php $_smarty_tpl->renderSubTemplate('file:settings.delete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
      </div>
    </div>
    <!-- right panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
