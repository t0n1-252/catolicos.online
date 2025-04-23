<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:34:23
  from 'file:_sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c8fdfcbc0_00608123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86b4fb51aab4f4ba5c7ef1bc645f07a24d29e94b' => 
    array (
      0 => '_sidebar.tpl',
      1 => 1744139798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 29,
  ),
))) {
function content_68004c8fdfcbc0_00608123 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card main-side-nav-card">
  <div class="card-body with-nav">
    <ul class="main-side-nav">

      <!-- favorites -->
      <li <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "discover" || $_smarty_tpl->getValue('view') == "popular")) {?>class="active" <?php }?>>
        <?php if (!$_smarty_tpl->getValue('user')->_logged_in || (!$_smarty_tpl->getValue('system')['popular_posts_enabled'] && !$_smarty_tpl->getValue('system')['discover_posts_enabled'])) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("News Feed");?>

          </a>
        <?php } else { ?>
          <a href="#newsfeed" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == "discover" || $_smarty_tpl->getValue('view') == "popular")) {?>aria-expanded="true" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("News Feed");?>

          </a>
          <div class='collapse <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == "discover" || $_smarty_tpl->getValue('view') == "popular")) {?>show<?php }?>' id="newsfeed">
            <ul>
              <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == '') {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_recent",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Recent Updates");?>

                </a>
              </li>
              <?php if ($_smarty_tpl->getValue('system')['popular_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "popular") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/popular">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"popularity",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular Posts");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['discover_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "discover") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/discover">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_discover",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover Posts");?>

                  </a>
                </li>
              <?php }?>
            </ul>
          </div>
        <?php }?>
      </li>

      <?php if ($_smarty_tpl->getValue('user')->_data['can_write_blogs']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "blogs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/my/blogs">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Blogs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "products") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/my/products">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Products");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_data['can_raise_funding']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "funding_requests") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/my/funding">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"money-bag",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "saved") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/saved">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"saved",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Saved Posts");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <?php if ($_smarty_tpl->getValue('system')['memories_enabled']) {?>
          <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "memories") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/memories">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"memories",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Memories");?>

            </a>
          </li>
        <?php }?>
      <?php }?>
      <!-- favorites -->

      <!-- advertising -->
      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <?php if ($_smarty_tpl->getValue('user')->_data['can_create_ads'] || $_smarty_tpl->getValue('system')['wallet_enabled'] || $_smarty_tpl->getValue('system')['packages_enabled']) {?>
          <li class="ptb5">
            <small class="text-muted"><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("Advertising") ?? '', 'UTF-8');?>
</small>
          </li>

          <?php if ($_smarty_tpl->getValue('user')->_data['can_create_ads']) {?>
            <li <?php if ($_smarty_tpl->getValue('page') == "ads") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Manager");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('system')['wallet_enabled']) {?>
            <li <?php if ($_smarty_tpl->getValue('page') == "wallet") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/wallet">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->getValue('system')['packages_enabled']) {?>
            <a href="#boosted" data-bs-toggle="collapse" <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == "boosted_posts" || $_smarty_tpl->getValue('view') == "boosted_pages")) {?>aria-expanded="true" <?php }?>>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted");?>

            </a>
            <div class='collapse <?php if ($_smarty_tpl->getValue('page') == "index" && ($_smarty_tpl->getValue('view') == "boosted_posts" || $_smarty_tpl->getValue('view') == "boosted_pages")) {?>show<?php }?>' id="boosted">
              <ul>
                <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "boosted_posts") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/posts">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Posts");?>

                  </a>
                </li>
                <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
                  <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "boosted_pages") {?>class="active" <?php }?>>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/boosted/pages">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Pages");?>

                    </a>
                  </li>
                <?php }?>
              </ul>
            </div>
          <?php }?>
        <?php }?>
      <?php }?>
      <!-- advertising -->

      <!-- explore -->
      <li class="ptb5">
        <small class="text-muted"><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("explore") ?? '', 'UTF-8');?>
</small>
      </li>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "people") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("People");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "pages") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "groups") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "events") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <?php if ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
          <li <?php if ($_smarty_tpl->getValue('page') == "reels") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/reels">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>

            </a>
          </li>
        <?php }?>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <?php if ($_smarty_tpl->getValue('system')['watch_enabled']) {?>
          <li <?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == "watch") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/watch">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"watch",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch");?>

            </a>
          </li>
        <?php }?>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "blogs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
        <li>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['funding_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "funding") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/funding">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['offers_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "offers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['jobs_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "jobs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['courses_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "courses") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/courses">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['forums_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "forums") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/forums">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['movies_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "movies") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['games_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "games") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/games">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['developers_apps_enabled'] || $_smarty_tpl->getValue('system')['developers_share_enabled']) {?>
        <li <?php if ($_smarty_tpl->getValue('page') == "developers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/developers<?php if (!$_smarty_tpl->getValue('system')['developers_apps_enabled']) {?>/share<?php }?>">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"developers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('static_pages')) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('static_pages'), 'static_page');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('static_page')->value) {
$foreach12DoElse = false;
?>
          <?php if ($_smarty_tpl->getValue('static_page')['page_in_sidebar']) {?>
            <li <?php if ($_smarty_tpl->getValue('page') == "static_page" && $_smarty_tpl->getValue('static_page')['page_id'] == $_smarty_tpl->getValue('static_page_id')) {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('static_page')['url'];?>
">
                <img width="24" height="24" class="mr10" src="<?php echo $_smarty_tpl->getValue('static_page')['page_icon'];?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('static_page')['page_title']);?>

              </a>
            </li>
          <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php }?>
      <!-- explore -->
    </ul>
  </div>
</div><?php }
}
