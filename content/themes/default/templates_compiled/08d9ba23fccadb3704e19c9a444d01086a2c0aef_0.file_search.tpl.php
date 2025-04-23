<?php
/* Smarty version 5.4.1, created on 2025-04-17 05:59:40
  from 'file:search.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680098cc5eab32_56895031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d9ba23fccadb3704e19c9a444d01086a2c0aef' => 
    array (
      0 => 'search.tpl',
      1 => 1744139718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post.tpl' => 2,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_680098cc5eab32_56895031 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_file_searching_duff.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover new people, create new connections and make new friends");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -45px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar mt30">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <!-- search form -->
      <div class="card">
        <div class="card-body">
          <form class="js_search-form" <?php if ($_smarty_tpl->getValue('tab')) {?> data-filter="<?php echo $_smarty_tpl->getValue('tab');?>
" <?php }?>>
            <div class="form-group mb0">
              <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
' <?php if ($_smarty_tpl->getValue('query')) {?> value="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
                <button type="submit" name="submit" class="btn btn-light plr30"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- search form -->

      <div class="row">
        <!-- left panel -->
        <div class="col-lg-8">
          <!-- panel nav -->
          <?php if ($_smarty_tpl->getValue('query')) {?>
            <ul class="nav nav-pills nav-fill nav-search mb10">
              <li class="nav-item">
                <a class="nav-link rounded-pill <?php if ($_smarty_tpl->getValue('tab') == '' || $_smarty_tpl->getValue('tab') == "posts") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('hashtag')) {?>hashtag/<?php }
if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/posts<?php }?>">
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</strong>
                </a>
              </li>
              <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
                <li class="nav-item">
                  <a class="nav-link rounded-pill <?php if ($_smarty_tpl->getValue('tab') == "blogs") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('hashtag')) {?>hashtag/<?php }
if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/blogs<?php }?>">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
</strong>
                  </a>
                </li>
              <?php }?>
              <li class="nav-item">
                <a class="nav-link rounded-pill <?php if ($_smarty_tpl->getValue('tab') == "users") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/users<?php }?>">
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>
</strong>
                </a>
              </li>
              <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
                <li class="nav-item">
                  <a class="nav-link rounded-pill <?php if ($_smarty_tpl->getValue('tab') == "pages") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/pages<?php }?>">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</strong>
                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
                <li class="nav-item">
                  <a class="nav-link rounded-pill <?php if ($_smarty_tpl->getValue('tab') == "groups") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/groups<?php }?>">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</strong>
                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
                <li class="nav-item">
                  <a class="nav-link rounded-pill <?php if ($_smarty_tpl->getValue('tab') == "events") {?>active<?php }?>" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/search/<?php if ($_smarty_tpl->getValue('query')) {
echo $_smarty_tpl->getValue('query');?>
/events<?php }?>">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</strong>
                  </a>
                </li>
              <?php }?>
            </ul>
          <?php }?>
          <!-- panel nav -->

          <div class="tab-content">

            <div class="tab-pane active">
              <?php if ($_smarty_tpl->getValue('results')) {?>
                <ul>
                  <?php if ($_smarty_tpl->getValue('tab') == '' || $_smarty_tpl->getValue('tab') == "posts") {?>
                    <!-- posts -->
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <!-- posts -->
                  <?php } elseif ($_smarty_tpl->getValue('tab') == "blogs") {?>
                    <!-- blogs -->
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <!-- blogs -->
                  <?php } elseif ($_smarty_tpl->getValue('tab') == "users") {?>
                    <!-- users -->
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_user');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach2DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')['connection']), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <!-- users -->
                  <?php } elseif ($_smarty_tpl->getValue('tab') == "pages") {?>
                    <!-- pages -->
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_page');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach3DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <!-- pages -->
                  <?php } elseif ($_smarty_tpl->getValue('tab') == "groups") {?>
                    <!-- groups -->
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_group');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach4DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <!-- groups -->
                  <?php } elseif ($_smarty_tpl->getValue('tab') == "events") {?>
                    <!-- events -->
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), '_event');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach5DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <!-- events -->
                  <?php }?>
                </ul>

                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('results')) >= $_smarty_tpl->getValue('system')['search_results']) {?>
                  <!-- see-more -->
                  <div class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="search_<?php echo $_smarty_tpl->getValue('tab');?>
" data-filter="<?php echo $_smarty_tpl->getValue('query');?>
">
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More Results");?>
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
        </div>
        <!-- left panel -->

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
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
