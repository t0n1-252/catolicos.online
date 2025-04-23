<?php
/* Smarty version 5.4.1, created on 2025-04-17 05:55:57
  from 'file:blogs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680097ed218b03_68733740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b71f90795a20e3a4a157a721fb269b97c5321061' => 
    array (
      0 => 'blogs.tpl',
      1 => 1744139778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 5,
    'file:__feeds_blog.tpl' => 4,
    'file:_no_data.tpl' => 2,
    'file:_ads.tpl' => 3,
    'file:_widget.tpl' => 2,
    'file:_need_payment.tpl' => 1,
    'file:_need_subscription.tpl' => 1,
    'file:_need_pro_package.tpl' => 1,
    'file:_need_age_verification.tpl' => 1,
    'file:__svg_icons.tpl' => 11,
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_680097ed218b03_68733740 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('view') == '') {?>
  <!-- page header -->
  <div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_content_creator_xeju.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
      <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
</h2>
      <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_blogs']);?>
</p>
      <div class="row mt20">
        <div class="col-sm-9 col-lg-6 mx-sm-auto">
          <form class="js_search-form" data-filter="blogs">
            <div class="input-group">
              <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for blogs");?>
'>
              <button type="submit" class="btn btn-light"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- page header -->
<?php }?>


<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <?php if ($_smarty_tpl->getValue('view') == '') {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <!-- location filter -->
        <?php if ($_smarty_tpl->getValue('system')['newsfeed_location_filter_enabled']) {?>
          <div class="posts-filter">
            <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
</span>
            <div class="float-end">
              <a href="#" data-bs-toggle="dropdown" class="countries-filter">
                <i class="fa fa-globe fa-fw"></i>
                <?php if ($_smarty_tpl->getValue('selected_country')) {?>
                  <span><?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
</span>
                <?php } else { ?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>
</span>
                <?php }?>
              </a>
              <div class="dropdown-menu dropdown-menu-end countries-dropdown">
                <div class="js_scroller">
                  <a class="dropdown-item" href="?country=all">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>

                  </a>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
?>
                    <a class="dropdown-item" href="?country=<?php echo $_smarty_tpl->getValue('country')['country_name_native'];?>
">
                      <?php echo $_smarty_tpl->getValue('country')['country_name'];?>

                    </a>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        <!-- location filter -->

        <div class="blogs-wrapper">
          <?php if ($_smarty_tpl->getValue('blogs')) {?>
            <ul class="row">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blogs'), 'blog');
$_smarty_tpl->getVariable('blog')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('blog')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('blog')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('blog');
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__feeds_blog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"featured",'_iteration'=>$_smarty_tpl->getVariable('blog')->iteration), (int) 0, $_smarty_current_dir);
?>
              <?php
$_smarty_tpl->setVariable('blog', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>

            <!-- see-more -->
            <div class="alert alert-post see-more js_see-more" data-get="blogs" data-country="<?php if ($_smarty_tpl->getValue('selected_country')) {
echo $_smarty_tpl->getValue('selected_country')['country_id'];
} else { ?>all<?php }?>">
              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More Blogs");?>
</span>
              <div class="loader loader_small x-hidden"></div>
            </div>
            <!-- see-more -->
          <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php }?>
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->getValue('view') == "category") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-8 mb20">
            <!-- location filter -->
            <?php if ($_smarty_tpl->getValue('system')['newsfeed_location_filter_enabled']) {?>
              <div class="posts-filter">
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_name']);?>
</span>
                <div class="float-end">
                  <a href="#" data-bs-toggle="dropdown" class="countries-filter">
                    <i class="fa fa-globe fa-fw"></i>
                    <?php if ($_smarty_tpl->getValue('selected_country')) {?>
                      <span><?php echo $_smarty_tpl->getValue('selected_country')['country_name'];?>
</span>
                    <?php } else { ?>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>
</span>
                    <?php }?>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end countries-dropdown">
                    <div class="js_scroller">
                      <a class="dropdown-item" href="?country=all">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Countries");?>

                      </a>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach2DoElse = false;
?>
                        <a class="dropdown-item" href="?country=<?php echo $_smarty_tpl->getValue('country')['country_name_native'];?>
">
                          <?php echo $_smarty_tpl->getValue('country')['country_name'];?>

                        </a>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- location filter -->

            <?php if ($_smarty_tpl->getValue('blogs')) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blogs'), 'blog');
$_smarty_tpl->getVariable('blog')->iteration = 0;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('blog')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('blog')->iteration++;
$foreach3Backup = clone $_smarty_tpl->getVariable('blog');
?>
                  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_blog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php
$_smarty_tpl->setVariable('blog', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>

              <!-- see-more -->
              <div class="alert alert-post see-more js_see-more" data-get="category_blogs" data-id="<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
" data-country="<?php if ($_smarty_tpl->getValue('selected_country')) {
echo $_smarty_tpl->getValue('selected_country')['country_id'];
} else { ?>all<?php }?>">
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More Blogs");?>
</span>
                <div class="loader loader_small x-hidden"></div>
              </div>
              <!-- see-more -->
            <?php } else { ?>
              <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- create new blog -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('user')->_data['can_write_blogs']) {?>
              <div class="mb10 d-none d-sm-block">
                <div class="d-grid">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/new" class="btn btn-success">
                    <i class="fa fa-edit mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Blog");?>

                  </a>
                </div>
              </div>
            <?php }?>
            <!-- create new blog -->

            <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

            <?php if ($_smarty_tpl->getValue('category')['category_description']) {?>
              <!-- category description -->
              <div class="blogs-widget-header">
                <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</div>
              </div>
              <div class="mb15">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_description']);?>

              </div>
              <!-- category description -->
            <?php }?>

            <?php if ($_smarty_tpl->getValue('blogs_categories')) {?>
              <!-- blogs categories -->
              <div class="blogs-widget-header">
                <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sub-Categories");?>
</div>
              </div>
              <ul class="blog-categories clearfix">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blogs_categories'), 'category');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach4DoElse = false;
?>
                  <li>
                    <a class="blog-category" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
/<?php echo $_smarty_tpl->getValue('category')['category_url'];?>
">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_name']);?>

                    </a>
                  </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>
              <!-- blogs categories -->
            <?php }?>

            <!-- read more -->
            <div class="blogs-widget-header">
              <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Read More");?>
</div>
            </div>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('latest_blogs'), 'blog');
$_smarty_tpl->getVariable('blog')->iteration = 0;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('blog')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('blog')->iteration++;
$foreach5Backup = clone $_smarty_tpl->getVariable('blog');
?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_blog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), (int) 0, $_smarty_current_dir);
?>
            <?php
$_smarty_tpl->setVariable('blog', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <!-- read more -->
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->getValue('view') == "blog") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-8 mb20">
            <?php if ($_smarty_tpl->getValue('blog')['needs_payment']) {?>
              <div class="blog-wrapper no-footer">
                <div class="ptb20 plr20">
                  <?php $_smarty_tpl->renderSubTemplate('file:_need_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post_id'=>$_smarty_tpl->getValue('blog')['post_id'],'price'=>$_smarty_tpl->getValue('blog')['post_price'],'paid_text'=>$_smarty_tpl->getValue('blog')['paid_text']), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('blog')['needs_subscription']) {?>
              <div class="blog-wrapper no-footer">
                <div class="ptb20 plr20">
                  <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>$_smarty_tpl->getValue('blog')['needs_subscription_type'],'node_id'=>$_smarty_tpl->getValue('blog')['needs_subscription_id'],'price'=>$_smarty_tpl->getValue('blog')['needs_subscription_price']), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('blog')['needs_pro_package']) {?>
              <div class="blog-wrapper no-footer">
                <div class="ptb20 plr20">
                  <?php $_smarty_tpl->renderSubTemplate('file:_need_pro_package.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_manage'=>true), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('blog')['needs_age_verification']) {?>
              <div class="blog-wrapper no-footer">
                <div class="ptb20 plr20">
                  <?php $_smarty_tpl->renderSubTemplate('file:_need_age_verification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            <?php } else { ?>
              <div class="blog mb20 <?php if (($_smarty_tpl->getValue('blog')['is_pending']) || ($_smarty_tpl->getValue('blog')['in_group'] && !$_smarty_tpl->getValue('blog')['group_approved']) || ($_smarty_tpl->getValue('blog')['in_event'] && !$_smarty_tpl->getValue('blog')['event_approved'])) {?>pending<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
">
                <?php if (($_smarty_tpl->getValue('blog')['is_pending']) || ($_smarty_tpl->getValue('blog')['in_group'] && !$_smarty_tpl->getValue('blog')['group_approved']) || ($_smarty_tpl->getValue('blog')['in_event'] && !$_smarty_tpl->getValue('blog')['event_approved'])) {?>
                  <div class="pending-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Post");?>
">
                    <i class="fa fa-clock"></i>
                  </div>
                <?php }?>
                <div class="blog-wrapper <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>pb10<?php }?>">
                  <?php if ($_smarty_tpl->getValue('blog')['manage_post']) {?>
                    <div class="text-end mb10">
                      <a type="button" class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/edit/<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>

                      </a>
                    </div>
                  <?php }?>

                  <!-- blog title -->
                  <h3 class="mb10"><?php echo $_smarty_tpl->getValue('blog')['blog']['title'];?>
</h3>
                  <!-- blog title -->

                  <!-- blog category -->
                  <div class="mb20">
                    <a class="badge bg-light text-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>

                    </a>
                    <i class="fa fa-chevron-right ml5 mr5"></i>
                    <a class="badge bg-light text-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->getValue('blog')['blog']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('blog')['blog']['category_url'];?>
">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('blog')['blog']['category_name']);?>

                    </a>
                  </div>
                  <!-- blog category -->

                  <!-- blog meta -->
                  <div class="row">
                    <div class="col-lg-6 mb20">
                      <div class="post-avatar">
                        <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->getValue('blog')['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('blog')['post_author_picture'];?>
);">
                        </a>
                      </div>
                      <div class="post-meta">
                        <div>
                          <!-- post author name -->
                          <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->getValue('blog')['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('blog')['user_id'];?>
">
                            <a href="<?php echo $_smarty_tpl->getValue('blog')['post_author_url'];?>
"><?php echo $_smarty_tpl->getValue('blog')['post_author_name'];?>
</a>
                          </span>
                          <?php if ($_smarty_tpl->getValue('blog')['post_author_verified']) {?>
                            <span class="verified-badge" data-bs-toggle="tooltip" title='<?php if ($_smarty_tpl->getValue('blog')['user_type'] == "user") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Page");
}?>'>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                            </span>
                          <?php }?>
                          <?php if ($_smarty_tpl->getValue('blog')['user_subscribed']) {?>
                            <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                            </span>
                          <?php }?>
                          <!-- post author name -->
                        </div>
                        <div class="post-time">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posted");?>
 <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('blog')['time'];?>
"><?php echo $_smarty_tpl->getValue('blog')['time'];?>
</span>
                          <?php if ($_smarty_tpl->getValue('blog')['for_subscriptions']) {?>
                            <span class="badge bg-light text-primary ml5"><i class="fa fa-star mr5"></i><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions") ?? '', 'UTF-8');?>
</span>
                          <?php }?>
                          <?php if ($_smarty_tpl->getValue('blog')['is_paid']) {?>
                            <span class="badge bg-light text-primary ml5"><i class="fa-solid fa-sack-dollar mr5"></i><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid") ?? '', 'UTF-8');?>
</span>
                          <?php }?>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end mb20">
                      <a class="blog-meta-counter unselectable" href="#blog-comments">
                        <i class="fa fa-comments fa-fw"></i> <?php echo $_smarty_tpl->getValue('blog')['comments_formatted'];?>

                      </a>
                      <div class="blog-meta-counter unselectable">
                        <i class="fa fa-eye fa-fw"></i> <?php echo $_smarty_tpl->getValue('blog')['views_formatted'];?>

                      </div>
                    </div>
                  </div>
                  <!-- blog meta -->

                  <!-- blog cover -->
                  <?php if ($_smarty_tpl->getValue('blog')['blog']['cover']) {?>
                    <div class="mb20">
                      <img class="img-fluid" src="<?php echo $_smarty_tpl->getValue('blog')['blog']['parsed_cover'];?>
">
                    </div>
                  <?php }?>
                  <!-- blog cover -->

                  <!-- blog text -->
                  <div class="blog-text text-with-list" dir="auto">
                    <?php echo $_smarty_tpl->getValue('blog')['blog']['parsed_text'];?>

                  </div>
                  <!-- blog text -->

                  <!-- blog tags -->
                  <?php if ($_smarty_tpl->getValue('blog')['blog']['parsed_tags']) {?>
                    <div class="blog-tags">
                      <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blog')['blog']['parsed_tags'], 'tag');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tag')->value) {
$foreach6DoElse = false;
?>
                          <li>
                            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/hashtag/<?php echo $_smarty_tpl->getValue('tag');?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('tag'));?>
</a>
                          </li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </ul>
                    </div>
                  <?php }?>
                  <!-- blog tags -->

                  <!-- post stats -->
                  <div class="post-stats clearfix">
                    <!-- reactions stats -->
                    <?php if ($_smarty_tpl->getValue('blog')['reactions_total_count'] > 0) {?>
                      <div class="float-start mr10" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
">
                        <div class="reactions-stats">
                          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blog')['reactions'], 'reaction_count', false, 'reaction_type');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction_type')->value => $_smarty_tpl->getVariable('reaction_count')->value) {
$foreach7DoElse = false;
?>
                            <?php if ($_smarty_tpl->getValue('reaction_count') > 0) {?>
                              <div class="reactions-stats-item">
                                <div class="inline-emoji no_animation">
                                  <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction_type')), (int) 0, $_smarty_current_dir);
?>
                                </div>
                              </div>
                            <?php }?>
                          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                          <!-- reactions count -->
                          <span>
                            <?php echo $_smarty_tpl->getValue('blog')['reactions_total_count_formatted'];?>

                          </span>
                          <!-- reactions count -->
                        </div>
                      </div>
                    <?php }?>
                    <!-- reactions stats -->
                  </div>
                  <!-- post stats -->

                  <!-- post actions -->
                  <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
                    <div class="post-actions">
                      <!-- reactions -->
                      <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->getValue('blog')['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->getValue('blog')['i_reaction'];?>
">
                        <!-- reaction-btn -->
                        <div class="reaction-btn">
                          <?php if (!$_smarty_tpl->getValue('blog')['i_react']) {?>
                            <div class="reaction-btn-icon">
                              <i class="far fa-smile fa-fw action-icon"></i>
                            </div>
                            <span class="reaction-btn-name d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("React");?>
</span>
                          <?php } else { ?>
                            <div class="reaction-btn-icon">
                              <div class="inline-emoji no_animation">
                                <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('blog')['i_reaction']), (int) 0, $_smarty_current_dir);
?>
                              </div>
                            </div>
                            <span class="reaction-btn-name" style="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('blog')['i_reaction']]['color'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('blog')['i_reaction']]['title']);?>
</span>
                          <?php }?>
                        </div>
                        <!-- reaction-btn -->

                        <!-- reactions-container -->
                        <div class="reactions-container">
                          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reactions_enabled'), 'reaction');
$_smarty_tpl->getVariable('reaction')->iteration = 0;
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction')->value) {
$foreach8DoElse = false;
$_smarty_tpl->getVariable('reaction')->iteration++;
$foreach8Backup = clone $_smarty_tpl->getVariable('reaction');
?>
                            <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->getVariable('reaction')->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->getValue('reaction')['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->getValue('reaction')['color'];?>
" data-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reaction')['title']);?>
">
                              <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction')['reaction']), (int) 0, $_smarty_current_dir);
?>
                            </div>
                          <?php
$_smarty_tpl->setVariable('reaction', $foreach8Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                        <!-- reactions-container -->
                      </div>
                      <!-- reactions -->

                      <!-- comment -->
                      <div class="action-btn js_comment <?php if ($_smarty_tpl->getValue('blog')['comments_disabled']) {?>x-hidden<?php }?>">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comment",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comment");?>
</span>
                      </div>
                      <!-- comment -->

                      <!-- share -->
                      <?php if ($_smarty_tpl->getValue('blog')['privacy'] == "public") {?>
                        <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>
</span>
                        </div>
                      <?php }?>
                      <!-- share -->

                      <!-- tips -->
                      <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('blog')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id'] && $_smarty_tpl->getValue('blog')['tips_enabled']) {?>
                        <div class="action-btn" data-toggle="modal" data-url="#send-tip" data-options='{ "id": "<?php echo $_smarty_tpl->getValue('blog')['author_id'];?>
"}'>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tip",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tip");?>
</span>
                        </div>
                      <?php }?>
                      <!-- tips -->
                    </div>
                  <?php }?>
                  <!-- post actions -->
                </div>

                <!-- post footer -->
                <div class="post-footer" id="blog-comments">
                  <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
                    <!-- comments -->
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('blog')), (int) 0, $_smarty_current_dir);
?>
                    <!-- comments -->
                  <?php } else { ?>
                    <div class="ptb10">
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please log in to like, share and comment!");?>
</a>
                    </div>
                  <?php }?>
                </div>
                <!-- post footer -->
              </div>
            <?php }?>
            <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ads'=>$_smarty_tpl->getValue('ads_footer')), (int) 0, $_smarty_current_dir);
?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- create new blog -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('user')->_data['can_write_blogs']) {?>
              <div class="mb10 d-none d-sm-block">
                <div class="d-grid">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/new" class="btn btn-success">
                    <i class="fa fa-edit mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Blog");?>

                  </a>
                </div>
              </div>
            <?php }?>
            <!-- create new blog -->

            <!-- search -->
            <div class="blogs-widget-header">
              <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</div>
            </div>
            <div class="mb10">
              <form class="js_search-form" data-filter="blogs">
                <div class="input-group">
                  <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for blogs");?>
'>
                  <button type="submit" class="btn btn-secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
                </div>
              </form>
            </div>
            <!-- search -->

            <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

            <!-- blogs categories -->
            <div class="blogs-widget-header">
              <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
</div>
            </div>
            <ul class="blog-categories clearfix">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blogs_categories'), 'category');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach9DoElse = false;
?>
                <li>
                  <a class="blog-category" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
/<?php echo $_smarty_tpl->getValue('category')['category_url'];?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_name']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
            <!-- blogs categories -->

            <!-- read more -->
            <div class="blogs-widget-header">
              <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Read More");?>
</div>
            </div>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('latest_blogs'), 'blog');
$_smarty_tpl->getVariable('blog')->iteration = 0;
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('blog')->value) {
$foreach10DoElse = false;
$_smarty_tpl->getVariable('blog')->iteration++;
$foreach10Backup = clone $_smarty_tpl->getVariable('blog');
?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_blog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), (int) 0, $_smarty_current_dir);
?>
            <?php
$_smarty_tpl->setVariable('blog', $foreach10Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <!-- read more -->
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->getValue('view') == "edit") {?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">
        <!-- content -->
        <div class="card">
          <div class="card-header with-icon">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Blog");?>

            <div class="float-end">
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
/<?php echo $_smarty_tpl->getValue('blog')['blog']['title_url'];?>
" class="btn btn-md btn-light">
                <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

              </a>
            </div>
          </div>
          <div class="js_ajax-forms-html " data-url="posts/blog.php?do=edit&id=<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
">
            <div class="card-body">
              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('blog')['blog']['title'];?>
">
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Content");?>

                </label>
                <div class="col-md-10">
                  <textarea name="text" class="form-control js_wysiwyg"><?php echo $_smarty_tpl->getValue('blog')['blog']['text'];?>
</textarea>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cover");?>

                </label>
                <div class="col-md-10">
                  <?php if ($_smarty_tpl->getValue('blog')['blog']['cover'] == '') {?>
                    <div class="x-image">
                      <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                      </button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                      <input type="hidden" class="js_x-image-input" name="cover" value="">
                    </div>
                  <?php } else { ?>
                    <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('blog')['blog']['cover'];?>
')">
                      <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                      </button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                      <input type="hidden" class="js_x-image-input" name="cover" value="<?php echo $_smarty_tpl->getValue('blog')['blog']['cover'];?>
">
                    </div>
                  <?php }?>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>

                </label>
                <div class="col-md-10">
                  <select class="form-select" name="category">
                    <option><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Category");?>
</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blogs_categories'), 'category');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach11DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('blog')['blog']['category_id']), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tags");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control js_tagify" name="tags" value="<?php echo $_smarty_tpl->getValue('blog')['blog']['tags'];?>
">
                  <div class="form-text">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type a tag name and press Enter or Comma to add it");?>

                  </div>
                </div>
              </div>

              <?php if (($_smarty_tpl->getValue('user')->_data['can_receive_tip'] && $_smarty_tpl->getValue('blog')['user_type'] != "page") || $_smarty_tpl->getValue('user')->_data['can_monetize_content']) {?>
                <div class="divider"></div>
              <?php }?>

              <!-- enable tips -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_receive_tip'] && $_smarty_tpl->getValue('blog')['user_type'] != "page") {?>
                <div class="form-table-row mb10">
                  <div>
                    <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable Tips");?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow people to send you tips");?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="tips_enabled">
                      <input type="checkbox" name="tips_enabled" id="tips_enabled" <?php if ($_smarty_tpl->getValue('blog')['tips_enabled']) {?> checked<?php }?>>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- enable tips -->

              <!-- only for subscribers -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_monetize_content']) {?>
                <div class="form-table-row mb10 <?php if ($_smarty_tpl->getValue('blog')['is_paid']) {?>disabled<?php }?>" id="subscribers-toggle-wrapper">
                  <div>
                    <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers Only");?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share this post to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("subscribers only");?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="subscribers_only">
                      <input type="checkbox" name="subscribers_only" id="subscribers_only" class="js_publisher-subscribers-toggle" <?php if ($_smarty_tpl->getValue('blog')['for_subscriptions']) {?> checked<?php }?> <?php if ($_smarty_tpl->getValue('blog')['is_paid']) {?>disabled<?php }?>>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- only for subscribers -->

              <!-- paid post -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_monetize_content'] && $_smarty_tpl->getValue('user')->_data['user_monetization_enabled']) {?>
                <div class="form-table-row mb10 <?php if ($_smarty_tpl->getValue('blog')['for_subscriptions']) {?>disabled<?php }?>" id="paid-toggle-wrapper">
                  <div>
                    <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post");?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a price to your post");?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="paid_post">
                      <input type="checkbox" name="paid_post" id="paid_post" class="js_publisher-paid-toggle" <?php if ($_smarty_tpl->getValue('blog')['is_paid']) {?> checked<?php }?> <?php if ($_smarty_tpl->getValue('blog')['for_subscriptions']) {?>disabled<?php }?>>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group <?php if (!$_smarty_tpl->getValue('blog')['post_price']) {?>x-hidden<?php }?>" id="paid-price-wrapper">
                  <input type="text" class="form-control" name="paid_post_price" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)" value="<?php echo $_smarty_tpl->getValue('blog')['post_price'];?>
">
                </div>
                <div class="form-group <?php if (!$_smarty_tpl->getValue('blog')['paid_text']) {?>x-hidden<?php }?>" id="paid-price-wrapper">
                  <textarea class="form-control" name="paid_post_text" rows="3"><?php echo $_smarty_tpl->getValue('blog')['paid_text'];?>
</textarea>
                </div>
              <?php }?>
              <!-- paid post -->

              <!-- error -->
              <div class="alert alert-danger mt15 mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-end">
              <button type="button" class="btn btn-danger js_delete-blog" data-id="<?php echo $_smarty_tpl->getValue('blog')['post_id'];?>
">
                <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Blog");?>

              </button>
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
            </div>
          </div>
        </div>
        <!-- content -->
      </div>
      <!-- content panel -->

    <?php } elseif ($_smarty_tpl->getValue('view') == "new") {?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">
        <!-- content -->
        <div class="card">
          <div class="card-header with-icon">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Blog");?>

          </div>
          <div class="js_ajax-forms-html" data-url="posts/blog.php?do=create">
            <div class="card-body">
              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish To");?>

                </label>
                <div class="col-md-10">
                  <!-- publish to options -->
                  <div>
                    <!-- Timeline -->
                    <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_timeline" value="timeline" <?php if ($_smarty_tpl->getValue('share_to') == "timeline") {?>checked="checked" <?php }?> />
                    <label class="button-label" for="publish_to_timeline">
                      <div class="icon">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      </div>
                      <div class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Timeline");?>
</div>
                    </label>
                    <!-- Timeline -->
                    <!-- Page -->
                    <?php if ($_smarty_tpl->getValue('system')['pages_enabled'] && $_smarty_tpl->getValue('pages')) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_page" value="page" <?php if ($_smarty_tpl->getValue('share_to') == "page") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_page">
                        <div class="icon">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                        <div class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Page -->
                    <!-- Group -->
                    <?php if ($_smarty_tpl->getValue('system')['groups_enabled'] && $_smarty_tpl->getValue('groups')) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_group" value="group" <?php if ($_smarty_tpl->getValue('share_to') == "group") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_group">
                        <div class="icon">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                        <div class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Group -->
                    <!-- Event -->
                    <?php if ($_smarty_tpl->getValue('system')['events_enabled'] && $_smarty_tpl->getValue('events')) {?>
                      <input class="x-hidden input-label" type="radio" name="publish_to" id="publish_to_event" value="event" <?php if ($_smarty_tpl->getValue('share_to') == "event") {?>checked="checked" <?php }?> />
                      <label class="button-label" for="publish_to_event">
                        <div class="icon">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                        </div>
                        <div class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event");?>
</div>
                      </label>
                    <?php }?>
                    <!-- Event -->
                  </div>
                  <!-- publish to options -->
                </div>
              </div>

              <div id="js_publish-to-page" <?php if ($_smarty_tpl->getValue('share_to') != "page") {?>class="x-hidden" <?php }?>>
                <div class="row form-group">
                  <label class="col-md-2 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Page");?>

                  </label>
                  <div class="col-md-10">
                    <select class="form-select" name="page_id">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'page');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach12DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('page')['page_id'];?>
" <?php if ($_smarty_tpl->getValue('share_to_page_id') == $_smarty_tpl->getValue('page')['page_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('page')['page_title'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div id="js_publish-to-group" <?php if ($_smarty_tpl->getValue('share_to') != "group") {?>class="x-hidden" <?php }?>>
                <div class="row form-group">
                  <label class="col-md-2 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Group");?>

                  </label>
                  <div class="col-md-10">
                    <select class="form-select" name="group_id">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach13DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('group')['group_id'];?>
" <?php if ($_smarty_tpl->getValue('share_to_group_id') == $_smarty_tpl->getValue('group')['group_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('group')['group_title'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div id="js_publish-to-event" <?php if ($_smarty_tpl->getValue('share_to') != "event") {?>class="x-hidden" <?php }?>>
                <div class="row form-group">
                  <label class="col-md-2 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Event");?>

                  </label>
                  <div class="col-md-10">
                    <select class="form-select" name="event_id">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('events'), 'event');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach14DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
" <?php if ($_smarty_tpl->getValue('share_to_event_id') == $_smarty_tpl->getValue('event')['event_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('event')['event_title'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control" name="title">
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Content");?>

                </label>
                <div class="col-md-10">
                  <textarea name="text" class="form-control js_wysiwyg"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cover");?>

                </label>
                <div class="col-md-10">
                  <div class="x-image">
                    <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                    </button>
                    <div class="x-image-loader">
                      <div class="progress x-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                    <input type="hidden" class="js_x-image-input" name="cover">
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>

                </label>
                <div class="col-md-10">
                  <select class="form-select" name="category">
                    <option><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Category");?>
</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blogs_categories'), 'category');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach15DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-2 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tags");?>

                </label>
                <div class="col-md-10">
                  <input class="form-control js_tagify" name="tags">
                  <div class="form-text">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type a tag name and press Enter or Comma to add it");?>

                  </div>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('user')->_data['can_receive_tip'] || $_smarty_tpl->getValue('user')->_data['can_monetize_content']) {?>
                <div class="divider"></div>
              <?php }?>

              <!-- enable tips -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_receive_tip']) {?>
                <div id="js_tips-enabled">
                  <div <?php if ($_smarty_tpl->getValue('share_to') == "page") {?>class="x-hidden" <?php }?>>
                    <div class="form-table-row mb10">
                      <div>
                        <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable Tips");?>
</div>
                        <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow people to send you tips");?>
</div>
                      </div>
                      <div class="text-end">
                        <label class="switch" for="tips_enabled">
                          <input type="checkbox" name="tips_enabled" id="tips_enabled">
                          <span class="slider round"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }?>
              <!-- enable tips -->

              <!-- only for subscribers -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_monetize_content']) {?>
                <div class="form-table-row mb10" id="subscribers-toggle-wrapper">
                  <div>
                    <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers Only");?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share this post to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("subscribers only");?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="subscribers_only">
                      <input type="checkbox" name="subscribers_only" id="subscribers_only" class="js_publisher-subscribers-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
              <?php }?>
              <!-- only for subscribers -->

              <!-- paid post -->
              <?php if ($_smarty_tpl->getValue('user')->_data['can_monetize_content'] && $_smarty_tpl->getValue('user')->_data['user_monetization_enabled']) {?>
                <div class="form-table-row mb10" id="paid-toggle-wrapper">
                  <div>
                    <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post");?>
</div>
                    <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a price to your post");?>
</div>
                  </div>
                  <div class="text-end">
                    <label class="switch" for="paid_post">
                      <input type="checkbox" name="paid_post" id="paid_post" class="js_publisher-paid-toggle">
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group x-hidden" id="paid-price-wrapper">
                  <input type="text" class="form-control" name="paid_post_price" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)">
                </div>
                <div class="form-group x-hidden" id="paid-text-wrapper">
                  <textarea class="form-control" name="paid_post_text" rows="3" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post Description");?>
"></textarea>
                </div>
              <?php }?>
              <!-- paid post -->

              <!-- error -->
              <div class="alert alert-danger mt15 mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
            </div>
          </div>
        </div>
        <!-- content -->
      </div>
      <!-- content panel -->

    <?php }?>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php echo '<script'; ?>
>
  /* share post */
  $('input[type=radio][name=publish_to]').on('change', function() {
    switch ($(this).val()) {
      case 'timeline':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').hide();
        $('#js_tips-enabled').fadeIn();
        break;
      case 'page':
        $('#js_publish-to-page').fadeIn();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').hide();
        $('#js_tips-enabled').hide();
        break;
      case 'group':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').fadeIn();
        $('#js_publish-to-event').hide();
        $('#js_tips-enabled').fadeIn();
        break;
      case 'event':
        $('#js_publish-to-page').hide();
        $('#js_publish-to-group').hide();
        $('#js_publish-to-event').fadeIn();
        $('#js_tips-enabled').fadeIn();
        break;
    }
  });
<?php echo '</script'; ?>
><?php }
}
