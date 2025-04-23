<?php
/* Smarty version 5.4.1, created on 2025-04-17 05:47:48
  from 'file:directory.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68009604bccc19_12099366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ded9d1f632cfa0cc167a487d0039788a62763f8' => 
    array (
      0 => 'directory.tpl',
      1 => 1744139727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 28,
    'file:__feeds_user.tpl' => 1,
    'file:_no_data.tpl' => 6,
    'file:__feeds_post.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:__feeds_game.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_68009604bccc19_12099366 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_bookmarks_r6up.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_directory']);?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<?php if ($_smarty_tpl->getValue('view') == '') {?>

  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
    <div class="row">
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt20">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="card border-0 shadow">
          <div class="card-body static-page-content pb25">
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/users" class="directory-card">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                  <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>
</h5>
                  <p>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Help friends know you better and show them what you have in common");?>

                  </p>
                </a>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/posts" class="directory-card">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                  <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</h5>
                  <p>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See what everyone’s up to and what’s on their minds");?>

                  </p>
                </a>
              </div>
              <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/pages" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Never miss a thing out! Keep in touch with your fans and customers");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/groups" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Communicate and collaborate with the people who share your interests");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/events" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members can organize community events for online and offline doings");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sharing thoughts, ideas and creating amazing contents");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Trusted community marketplace wherein members can post and browse items");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['funding_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/funding" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Fundraisers make it easy to support friends, family and the causes that are important to you");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['offers_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find the best offers that you can buy");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['jobs_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Seeking for a job, You can find theme here");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['courses_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/courses" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Seeking for a job, You can find theme here");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['forums_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/forums" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forum is an old­school framework for online community");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['movies_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Watching movies always fun, Watch with the people who share your interests");?>

                    </p>
                  </a>
                </div>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['games_enabled']) {?>
                <div class="col-sm-6 col-md-6 col-lg-4 mb25">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/games" class="directory-card">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon",'width'=>"120px",'height'=>"120px"), (int) 0, $_smarty_current_dir);
?>
                    <h5 class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>
</h5>
                    <p>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Playing games always fun, Play with the people who share your interests");?>

                    </p>
                  </a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
      <!-- content panel -->
    </div>
  </div>

<?php } else { ?>

  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
    <div class="row">

      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <li <?php if ($_smarty_tpl->getValue('view') == "users") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/users">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"find_people",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>

                </a>
              </li>
              <li <?php if ($_smarty_tpl->getValue('view') == "posts") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/posts">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</a>
              </li>
              <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('view') == "pages") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/pages">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('view') == "groups") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/groups">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('view') == "events") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/events">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['funding_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/funding">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['offers_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/offers">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['jobs_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/jobs">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['courses_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/courses">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['forums_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/forums">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['movies_enabled']) {?>
                <li>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/movies">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['games_enabled']) {?>
                <li <?php if ($_smarty_tpl->getValue('view') == "games") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory/games">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>

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
        <div class="row">
          <!-- center panel -->
          <div class="col-lg-8">
            <?php if ($_smarty_tpl->getValue('view') == "users") {?>
              <?php if ($_smarty_tpl->getValue('rows')) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')["connection"]), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->getValue('pager');?>

              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('view') == "posts") {?>
              <?php if ($_smarty_tpl->getValue('rows')) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->getValue('pager');?>

              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('view') == "pages") {?>
              <?php if ($_smarty_tpl->getValue('rows')) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), '_page');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach2DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->getValue('pager');?>

              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('view') == "groups") {?>
              <?php if ($_smarty_tpl->getValue('rows')) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), '_group');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach3DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->getValue('pager');?>

              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('view') == "events") {?>
              <?php if ($_smarty_tpl->getValue('rows')) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), '_event');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach4DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->getValue('pager');?>

              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('view') == "games") {?>
              <?php if ($_smarty_tpl->getValue('rows')) {?>
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), '_game');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_game')->value) {
$foreach5DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                <?php echo $_smarty_tpl->getValue('pager');?>

              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php }?>
          </div>
          <!-- center panel -->

          <!-- right panel -->
          <div class="col-lg-4">
            <?php $_smarty_tpl->renderSubTemplate('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- right panel -->

    </div>
  </div>

<?php }?>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
