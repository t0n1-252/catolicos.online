<?php
/* Smarty version 5.4.1, created on 2025-04-17 06:06:40
  from 'file:pages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68009a70cc6488_29925043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623e2347726928a47b9bacd774fe27d7ee26e2e3' => 
    array (
      0 => 'pages.tpl',
      1 => 1744139789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_68009a70cc6488_29925043 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_building_websites_i78t.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_pages']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-filter="pages">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for pages");?>
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

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">

  <div class="position-relative">
    <!-- tabs -->
    <div class="content-tabs rounded-sm shadow-sm clearfix">
      <ul>
        <li <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "category") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover");?>
</a>
        </li>
        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
          <li <?php if ($_smarty_tpl->getValue('view') == "liked") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/liked"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Liked Pages");?>
</a>
          </li>
          <li <?php if ($_smarty_tpl->getValue('view') == "manage") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/manage"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Pages");?>
</a>
          </li>
        <?php }?>
      </ul>
      <?php if ($_smarty_tpl->getValue('user')->_data['can_create_pages']) {?>
        <div class="mt10 float-end">
          <button class="btn btn-md btn-primary d-none d-lg-block" data-toggle="modal" data-url="modules/add.php?type=page">
            <i class="fa fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Page");?>

          </button>
          <button class="btn btn-sm btn-icon btn-primary d-block d-lg-none" data-toggle="modal" data-url="modules/add.php?type=page">
            <i class="fa fa-plus-circle"></i>
          </button>
        </div>
      <?php }?>
    </div>
    <!-- tabs -->
  </div>

  <div class="row">

    <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "category") {?>
      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <!-- categories -->
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <?php if ($_smarty_tpl->getValue('view') != "category") {?>
                <li class="active">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                  </a>
                </li>
              <?php } else { ?>
                <li>
                  <?php if ($_smarty_tpl->getValue('current_category')['parent']) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/category/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_url'];?>
">
                      <i class="fas fa-arrow-alt-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('current_category')['parent']['category_name']);?>

                    </a>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages">
                      <?php if ($_smarty_tpl->getValue('current_category')['sub_categories']) {?><i class="fas fa-arrow-alt-circle-left mr5"></i><?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                    </a>
                  <?php }?>
                </li>
              <?php }?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
                <li <?php if ($_smarty_tpl->getValue('view') == "category" && $_smarty_tpl->getValue('current_category')['category_id'] == $_smarty_tpl->getValue('category')['category_id']) {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/category/<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
/<?php echo $_smarty_tpl->getValue('category')['category_url'];?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('category')['category_name']);?>

                    <?php if ($_smarty_tpl->getValue('category')['sub_categories']) {?>
                      <span class="float-end"><i class="fas fa-angle-right"></i></span>
                    <?php }?>
                  </a>
                </li>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
        <!-- categories -->
      </div>
      <!-- left panel -->
    <?php } else { ?>
      <!-- side panel -->
      <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt40">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->
    <?php }?>

    <!-- content panel -->
    <div class="<?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "category") {?>col-md-8 col-lg-9 sg-offcanvas-mainbar<?php } else { ?>col-12 sg-offcanvas-mainbar<?php }?>">
      <!-- location filter -->
      <?php if ($_smarty_tpl->getValue('system')['newsfeed_location_filter_enabled']) {?>
        <div class="posts-filter">
          <span><?php echo $_smarty_tpl->getValue('view_title');?>
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
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
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

      <!-- content -->
      <div>
        <?php if ($_smarty_tpl->getValue('pages')) {?>
          <ul class="row">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), '_page');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach2DoElse = false;
?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), (int) 0, $_smarty_current_dir);
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>

          <!-- see-more -->
          <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('pages')) >= $_smarty_tpl->getValue('system')['pages_results']) {?>
            <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->getValue('get');?>
" <?php if ($_smarty_tpl->getValue('view') == "category") {?>data-id="<?php echo $_smarty_tpl->getValue('current_category')['category_id'];?>
" <?php }?> <?php if ($_smarty_tpl->getValue('view') == "liked" || $_smarty_tpl->getValue('view') == "manage") {?>data-uid="<?php echo $_smarty_tpl->getValue('user')->_data['user_id'];?>
" <?php }?> data-country="<?php if ($_smarty_tpl->getValue('selected_country')) {
echo $_smarty_tpl->getValue('selected_country')['country_id'];
} else { ?>all<?php }?>">
              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
              <div class="loader loader_small x-hidden"></div>
            </div>
          <?php }?>
          <!-- see-more -->
        <?php } else { ?>
          <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
      </div>
      <!-- content -->

    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
