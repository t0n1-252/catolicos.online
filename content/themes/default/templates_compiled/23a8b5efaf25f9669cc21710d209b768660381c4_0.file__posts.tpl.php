<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:34:23
  from 'file:_posts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c8fef2b23_68004975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a8b5efaf25f9669cc21710d209b768660381c4' => 
    array (
      0 => '_posts.tpl',
      1 => 1744139712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 18,
    'file:__feeds_post.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
))) {
function content_68004c8fef2b23_68004975 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php if ($_smarty_tpl->getValue('_title')) {
echo $_smarty_tpl->getValue('_title');
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Recent Updates");
}?></span>
  <?php if ($_smarty_tpl->getValue('user')->_logged_in && !$_smarty_tpl->getValue('_filter') && !$_smarty_tpl->getValue('_query')) {?>
    <div class="float-end">
      <div class="btn-group btn-group-sm js_posts-filter" data-value="all" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
'>
        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
          <i class="btn-group-icon fa fa-bars fa-fw"></i> <span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
</span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <div class="js_scroller">
            <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
' data-value="all">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

            </div>
            <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Text");?>
' data-value="">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comments",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Text");?>

            </div>
            <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Links");?>
' data-value="link">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"links",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Links");?>
</div>
            <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Media");?>
' data-value="media">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"media",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Media");?>

            </div>
            <?php if ($_smarty_tpl->getValue('system')['live_enabled'] && $_smarty_tpl->getValue('_get') != "posts_page" && $_smarty_tpl->getValue('_get') != "posts_group" && $_smarty_tpl->getValue('_get') != "posts_event") {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live");?>
' data-value="live">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live");?>

              </div>
            <?php }?>
            <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
' data-value="photos">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

            </div>
            <?php if ($_smarty_tpl->getValue('system')['geolocation_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maps");?>
' data-value="map">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maps");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
' data-value="article">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['market_enabled'] && $_smarty_tpl->getValue('_get') != "posts_page" && $_smarty_tpl->getValue('_get') != "posts_group" && $_smarty_tpl->getValue('_get') != "posts_event") {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");?>
' data-value="product">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['funding_enabled'] && $_smarty_tpl->getValue('_get') != "posts_page" && $_smarty_tpl->getValue('_get') != "posts_group" && $_smarty_tpl->getValue('_get') != "posts_event") {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>
' data-value="funding">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['offers_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
' data-value="offer">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['jobs_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
' data-value="job">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['courses_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>
' data-value="course">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['polls_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Polls");?>
' data-value="poll">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"polls",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Polls");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
' data-value="reel">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
' data-value="video">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['audio_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audios");?>
' data-value="audio">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"audios",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audios");?>

              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['file_enabled']) {?>
              <div class="dropdown-item pointer" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Files");?>
' data-value="file">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"files",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Files");?>

              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  <?php } elseif ($_smarty_tpl->getValue('_filter') == "article") {?>
    <?php if ($_smarty_tpl->getValue('user')->_data['can_write_blogs']) {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/new" class="btn btn-sm btn-primary">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Blog");?>

        </a>
      </div>
    <?php }?>
  <?php } elseif ($_smarty_tpl->getValue('_filter') == "product" && !$_smarty_tpl->getValue('_query')) {?>
    <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products']) {?>
      <div class="float-end">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/product.php?do=create">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Product");?>

        </button>
      </div>
    <?php }?>
  <?php } elseif ($_smarty_tpl->getValue('_filter') == "funding") {?>
    <?php if ($_smarty_tpl->getValue('user')->_data['can_raise_funding']) {?>
      <div class="float-end">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/funding.php?do=create">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Funding");?>

        </button>
      </div>
    <?php }?>
  <?php }?>

  <!-- newsfeed location filter -->
  <?php if ($_smarty_tpl->getValue('system')['newsfeed_location_filter_enabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array('index','group','event')) && $_smarty_tpl->getValue('view') != "boosted_posts" && (!$_smarty_tpl->getValue('_filter') || $_smarty_tpl->getValue('view') == "watch")) {?>
    <div class="float-end mr10">
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
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach19DoElse = false;
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
  <?php }?>
  <!-- newsfeed location filter -->
</div>
<!-- posts-filter -->

<!-- posts-loader -->
<div class="post x-hidden js_posts_loader">
  <div class="post-body with-loader">
    <div class="panel-effect">
      <div class="fake-effect fe-0"></div>
      <div class="fake-effect fe-1"></div>
      <div class="fake-effect fe-2"></div>
      <div class="fake-effect fe-3"></div>
      <div class="fake-effect fe-4"></div>
      <div class="fake-effect fe-5"></div>
      <div class="fake-effect fe-6"></div>
      <div class="fake-effect fe-7"></div>
      <div class="fake-effect fe-8"></div>
      <div class="fake-effect fe-9"></div>
      <div class="fake-effect fe-10"></div>
      <div class="fake-effect fe-11"></div>
    </div>
  </div>
</div>
<!-- posts-loader -->

<!-- posts staging -->
<button class="btn btn-primary rounded-pill posts-staging-btn js_view-staging-posts">
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");?>
 <span>0</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New Posts");?>

</button>

<div class="js_posts_stream_staging" style="display: none;"></div>
<!-- posts staging -->

<!-- posts stream -->
<div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->getValue('_get');?>
" data-filter="<?php if ($_smarty_tpl->getValue('_filter')) {
echo $_smarty_tpl->getValue('_filter');
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->getValue('selected_country')) {
echo $_smarty_tpl->getValue('selected_country')['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->getValue('_id')) {?>data-id="<?php echo $_smarty_tpl->getValue('_id');?>
" <?php }?> <?php if ($_smarty_tpl->getValue('_query')) {?>data-query="<?php echo $_smarty_tpl->getValue('_query');?>
" <?php }?>>
  <?php if ($_smarty_tpl->getValue('posts')) {?>
    <ul>
      <!-- posts -->
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach20DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->getValue('_get')), (int) 0, $_smarty_current_dir);
?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <!-- posts -->
    </ul>

    <!-- see-more -->
    <div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="<?php if ($_smarty_tpl->getValue('_load_more')) {
echo $_smarty_tpl->getValue('_load_more');
} else {
echo $_smarty_tpl->getValue('_get');
}?>" data-filter="<?php if ($_smarty_tpl->getValue('_filter')) {
echo $_smarty_tpl->getValue('_filter');
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->getValue('selected_country')) {
echo $_smarty_tpl->getValue('selected_country')['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->getValue('_id')) {?>data-id="<?php echo $_smarty_tpl->getValue('_id');?>
" <?php }?> <?php if ($_smarty_tpl->getValue('_query')) {?>data-query="<?php echo $_smarty_tpl->getValue('_query');?>
" <?php }?>>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More Stories");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->getValue('_get');?>
" data-filter="<?php if ($_smarty_tpl->getValue('_filter')) {
echo $_smarty_tpl->getValue('_filter');
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->getValue('selected_country')) {
echo $_smarty_tpl->getValue('selected_country')['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->getValue('_id')) {?>data-id="<?php echo $_smarty_tpl->getValue('_id');?>
" <?php }?>>
      <ul>
        <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </ul>
    </div>
  <?php }?>
</div>
<!-- posts stream --><?php }
}
