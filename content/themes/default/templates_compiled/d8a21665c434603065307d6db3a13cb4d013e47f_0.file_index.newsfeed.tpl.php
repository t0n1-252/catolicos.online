<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:34:23
  from 'file:index.newsfeed.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c8fd0d9e4_88312406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a21665c434603065307d6db3a13cb4d013e47f' => 
    array (
      0 => 'index.newsfeed.tpl',
      1 => 1744139707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:__svg_icons.tpl' => 6,
    'file:_publisher.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 10,
    'file:__feeds_page.tpl' => 2,
    'file:_no_data.tpl' => 1,
    'file:_trending_widget.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer_mini.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_68004c8fd0d9e4_88312406 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">
      <div class="row">
        <!-- center panel -->
        <div class="col-lg-8">

          <!-- announcments -->
          <?php $_smarty_tpl->renderSubTemplate('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <!-- announcments -->

          <?php if ($_smarty_tpl->getValue('view') == '') {?>

            <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
              <!-- stories -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories'] || ($_smarty_tpl->getValue('system')['stories_enabled'] && !empty($_smarty_tpl->getValue('stories')['array']))) {?>
                <div class="card">
                  <div class="card-header bg-transparent border-bottom-0">
                    <strong class="text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stories");?>
</strong>
                    <?php if ($_smarty_tpl->getValue('has_story')) {?>
                      <div class="float-end">
                        <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Your Story");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_story-deleter">
                          <i class="fa fa-trash-alt"></i>
                        </button>
                      </div>
                    <?php }?>
                  </div>
                  <div class="card-body pt5 stories-wrapper">
                    <div id="stories" data-json='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlspecialchars')($_smarty_tpl->getValue('stories')["json"],ENT_QUOTES,'UTF-8');?>
'>
                      <?php if ($_smarty_tpl->getValue('user')->_data['can_add_stories']) {?>
                        <div class="add-story" data-toggle="modal" data-url="posts/story.php?do=create">
                          <div class="img" style="background-image:url(<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
);">
                          </div>
                          <div class="add">
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"add",'class'=>"main-icon",'width'=>"18px",'height'=>"18px"), (int) 0, $_smarty_current_dir);
?>
                          </div>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              <?php }?>
              <!-- stories -->

              <!-- publisher -->
              <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_node_can_monetize_content'=>$_smarty_tpl->getValue('user')->_data['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->getValue('user')->_data['user_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->getValue('user')->_data['user_monetization_plans'],'_privacy'=>true), (int) 0, $_smarty_current_dir);
?>
              <!-- publisher -->

              <!-- pro users -->
              <?php if ($_smarty_tpl->getValue('pro_members')) {?>
                <div class="d-block d-lg-none">
                  <div class="card bg-indigo border-0">
                    <div class="card-header ptb20 bg-transparent border-bottom-0">
                      <?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
                        <div class="float-end">
                          <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>
</a></small>
                        </div>
                      <?php }?>
                      <h6 class="pb0">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro",'class'=>"mr5",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff;"), (int) 0, $_smarty_current_dir);
?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Users");?>

                      </h6>
                    </div>
                    <div class="card-body pt0 plr5">
                      <div class="pro-box-wrapper <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('pro_members')) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pro_members'), '_member');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_member')->value) {
$foreach0DoElse = false;
?>
                          <a class="user-box text-white" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_member')['user_name'];?>
">
                            <img alt="" src="<?php echo $_smarty_tpl->getValue('_member')['user_picture'];?>
" />
                            <div class="name">
                              <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
                                <?php echo $_smarty_tpl->getValue('_member')['user_name'];?>

                              <?php } else { ?>
                                <?php echo $_smarty_tpl->getValue('_member')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_member')['user_lastname'];?>

                              <?php }?>
                            </div>
                          </a>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }?>
              <!-- pro users -->

              <!-- pro pages -->
              <?php if ($_smarty_tpl->getValue('promoted_pages')) {?>
                <div class="d-block d-lg-none">
                  <div class="card bg-teal border-0">
                    <div class="card-header ptb20 bg-transparent border-bottom-0">
                      <?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
                        <div class="float-end">
                          <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>
</a></small>
                        </div>
                      <?php }?>
                      <h6 class="pb0">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro",'class'=>"mr5",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff;"), (int) 0, $_smarty_current_dir);
?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Pages");?>

                      </h6>
                    </div>
                    <div class="card-body pt0 plr5">
                      <div class="pro-box-wrapper <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('promoted_pages')) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_pages'), '_page');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach1DoElse = false;
?>
                          <a class="user-box text-white" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/<?php echo $_smarty_tpl->getValue('_page')['page_name'];?>
">
                            <img alt="<?php echo $_smarty_tpl->getValue('_page')['page_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_page')['page_picture'];?>
" />
                            <div class="name" title="<?php echo $_smarty_tpl->getValue('_page')['page_title'];?>
">
                              <?php echo $_smarty_tpl->getValue('_page')['page_title'];?>

                            </div>
                          </a>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }?>
              <!-- pro pages -->
            <?php }?>

            <!-- boosted post -->
            <?php if ($_smarty_tpl->getValue('boosted_post')) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('boosted_post')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <!-- boosted post -->

            <!-- posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), (int) 0, $_smarty_current_dir);
?>
            <!-- posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "popular") {?>
            <!-- popular posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"popular",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular Posts")), (int) 0, $_smarty_current_dir);
?>
            <!-- popular posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "discover") {?>
            <!-- discover posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover Posts")), (int) 0, $_smarty_current_dir);
?>
            <!-- discover posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "saved") {?>
            <!-- saved posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Saved Posts")), (int) 0, $_smarty_current_dir);
?>
            <!-- saved posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "memories") {?>
            <!-- page header -->
            <div class="page-header mini rounded mb10">
              <div class="circle-1"></div>
              <div class="circle-2"></div>
              <div class="inner">
                <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Memories");?>
</h2>
                <p class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enjoy looking back on your memories");?>
</p>
              </div>
            </div>
            <!-- page header -->

            <!-- memories posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"memories",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("ON THIS DAY"),'_filter'=>"all"), (int) 0, $_smarty_current_dir);
?>
            <!-- memories posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "blogs") {?>
            <!-- blogs posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"article",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Blogs")), (int) 0, $_smarty_current_dir);
?>
            <!-- blogs posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "products") {?>
            <!-- products posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"product",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Products")), (int) 0, $_smarty_current_dir);
?>
            <!-- products posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "funding_requests") {?>
            <!-- funding posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('user')->_data['user_id'],'_filter'=>"funding",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Funding")), (int) 0, $_smarty_current_dir);
?>
            <!-- funding posts -->

          <?php } elseif ($_smarty_tpl->getValue('view') == "boosted_posts") {?>
            <?php if ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
              <!-- boosted posts -->
              <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"boosted",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("My Boosted Posts")), (int) 0, $_smarty_current_dir);
?>
              <!-- boosted posts -->
            <?php } else { ?>
              <!-- upgrade -->
              <div class="alert alert-warning">
                <div class="icon">
                  <i class="fa fa-id-card fa-2x"></i>
                </div>
                <div class="text">
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>
</strong><br>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
                </div>
              </div>
              <div class="text-center">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>
</a>
              </div>
              <!-- upgrade -->
            <?php }?>

          <?php } elseif ($_smarty_tpl->getValue('view') == "boosted_pages") {?>
            <?php if ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
              <div class="card">
                <div class="card-header">
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Boosted Pages");?>
</strong>
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->getValue('boosted_pages')) {?>
                    <ul>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('boosted_pages'), '_page');
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

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('boosted_pages')) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-info see-more js_see-more" data-get="boosted_pages">
                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                  <?php }?>
                </div>
              </div>
            <?php } else { ?>
              <!-- upgrade -->
              <div class="alert alert-warning">
                <div class="icon">
                  <i class="fa fa-id-card fa-2x"></i>
                </div>
                <div class="text">
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>
</strong><br>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
                </div>
              </div>
              <div class="text-center">
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade to Pro");?>
</a>
              </div>
              <!-- upgrade -->
            <?php }?>

          <?php } elseif ($_smarty_tpl->getValue('view') == "watch") {?>
            <!-- videos posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"discover",'_filter'=>"video",'_load_more'=>"watch",'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch")), (int) 0, $_smarty_current_dir);
?>
            <!-- videos posts -->

          <?php }?>
        </div>
        <!-- center panel -->

        <!-- right panel -->
        <div class="col-lg-4 js_sticky-sidebar">

          <!-- pro users -->
          <?php if ($_smarty_tpl->getValue('pro_members')) {?>
            <div class="d-none d-lg-block">
              <div class="card bg-indigo border-0">
                <div class="card-header ptb20 bg-transparent border-bottom-0">
                  <?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
                    <div class="float-end">
                      <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>
</a></small>
                    </div>
                  <?php }?>
                  <h6 class="pb0">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro",'class'=>"mr5",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff;"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Users");?>

                  </h6>
                </div>
                <div class="card-body pt0 plr5">
                  <div class="pro-box-wrapper <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('pro_members')) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pro_members'), '_member');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_member')->value) {
$foreach3DoElse = false;
?>
                      <a class="user-box text-white" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_member')['user_name'];?>
">
                        <img alt="" src="<?php echo $_smarty_tpl->getValue('_member')['user_picture'];?>
" />
                        <div class="name">
                          <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
                            <?php echo $_smarty_tpl->getValue('_member')['user_name'];?>

                          <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('_member')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_member')['user_lastname'];?>

                          <?php }?>
                        </div>
                      </a>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
          <!-- pro users -->

          <!-- pro pages -->
          <?php if ($_smarty_tpl->getValue('promoted_pages')) {?>
            <div class="d-none d-lg-block">
              <div class="card bg-teal border-0">
                <div class="card-header ptb20 bg-transparent border-bottom-0">
                  <?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
                    <div class="float-end">
                      <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade");?>
</a></small>
                    </div>
                  <?php }?>
                  <h6 class="pb0">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro",'class'=>"mr5",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff;"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Pages");?>

                  </h6>
                </div>
                <div class="card-body pt0 plr5">
                  <div class="pro-box-wrapper <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('promoted_pages')) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_pages'), '_page');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach4DoElse = false;
?>
                      <a class="user-box text-white" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/<?php echo $_smarty_tpl->getValue('_page')['page_name'];?>
">
                        <img alt="<?php echo $_smarty_tpl->getValue('_page')['page_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_page')['page_picture'];?>
" />
                        <div class="name" title="<?php echo $_smarty_tpl->getValue('_page')['page_title'];?>
">
                          <?php echo $_smarty_tpl->getValue('_page')['page_title'];?>

                        </div>
                      </a>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
          <!-- pro pages -->

          <!-- trending -->
          <?php if ($_smarty_tpl->getValue('trending_hashtags')) {?>
            <?php $_smarty_tpl->renderSubTemplate('file:_trending_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php }?>
          <!-- trending -->

          <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php $_smarty_tpl->renderSubTemplate('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

          <!-- friends suggestions -->
          <?php if ($_smarty_tpl->getValue('new_people')) {?>
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="float-end">
                  <small><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>
</a></small>
                </div>
                <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Friends");?>

                <?php } else { ?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested People");?>

                <?php }?>
              </div>
              <div class="card-body with-list">
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_people'), '_user');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach5DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
          <?php }?>
          <!-- friends suggestions -->

          <!-- suggested pages -->
          <?php if ($_smarty_tpl->getValue('new_pages')) {?>
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="float-end">
                  <small><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>
</a></small>
                </div>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Pages");?>

              </div>
              <div class="card-body with-list">
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_pages'), '_page');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach6DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
          <?php }?>
          <!-- suggested pages -->

          <!-- suggested groups -->
          <?php if ($_smarty_tpl->getValue('new_groups')) {?>
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="float-end">
                  <small><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>
</a></small>
                </div>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Groups");?>

              </div>
              <div class="card-body with-list">
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_groups'), '_group');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach7DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
          <?php }?>
          <!-- suggested groups -->

          <!-- suggested events -->
          <?php if ($_smarty_tpl->getValue('new_events')) {?>
            <div class="card">
              <div class="card-header bg-transparent">
                <div class="float-end">
                  <small><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>
</a></small>
                </div>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested Events");?>

              </div>
              <div class="card-body with-list">
                <ul>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('new_events'), '_event');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach8DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_small'=>true), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
          <?php }?>
          <!-- suggested events -->

          <!-- invitation widget -->
          <?php if ($_smarty_tpl->getValue('user')->_data['can_invite_users']) {?>
            <div class="card">
              <div class="card-body text-center">
                <div class="mb10">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon",'width'=>"60px",'height'=>"60px"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <a class="btn btn-sm btn-primary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/invitations"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite Your Friends");?>
</a>
              </div>
            </div>
          <?php }?>
          <!-- invitation widget -->

          <!-- mini footer -->
          <?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <!-- mini footer -->

        </div>
        <!-- right panel -->
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
