<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:37:44
  from 'file:packages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e528848d12_34958029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34eb431bd253e7dca199a0f6de92d7e726d40788' => 
    array (
      0 => 'packages.tpl',
      1 => 1744139733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 2,
    'file:__svg_icons.tpl' => 78,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6801e528848d12_34958029 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<?php if ($_smarty_tpl->getValue('view') == "packages") {?>

  <!-- page header -->
  <div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_upgrade_06a0.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
      <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Packages");?>
</h2>
      <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Choose the Plan That's Right for You");?>
</p>
    </div>
  </div>
  <!-- page header -->

  <!-- page content -->
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
    <div class="row">

      <!-- side panel -->
      <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar mt20">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="card">
          <div class="card-body page-content">
            <div class="row justify-content-md-center">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('packages'), 'package');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('package')->value) {
$foreach0DoElse = false;
?>
                <!-- package -->
                <div class="col-md-6 col-lg-4 col-xl-<?php if ($_smarty_tpl->getValue('packages_count') >= 4) {?>3<?php } elseif ($_smarty_tpl->getValue('packages_count') == 3) {?>4<?php } elseif ($_smarty_tpl->getValue('packages_count') <= 2) {?>6<?php }?> text-center">
                  <div class="card card-pricing shadow-sm">
                    <div class="card-header bg-transparent text-start pb0">
                      <h3 style="color: <?php echo $_smarty_tpl->getValue('package')['color'];?>
">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('package')['name']);?>

                        <div class="float-end">
                          <img class="icon" src="<?php echo $_smarty_tpl->getValue('package')['icon'];?>
" style="max-width: 42px;">
                        </div>
                      </h3>
                    </div>
                    <div class="card-body text-start">
                      <h2 class="price">
                        <?php if ($_smarty_tpl->getValue('package')['price'] == 0) {?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free");?>

                        <?php } else { ?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('package')['price']);?>

                        <?php }?>
                      </h2>
                      <div>
                        <?php if ($_smarty_tpl->getValue('package')['period'] == "life") {?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>

                        <?php } else { ?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("for");?>

                          <?php if ($_smarty_tpl->getValue('package')['period_num'] != '1') {
echo $_smarty_tpl->getValue('package')['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('package')['period']));?>

                        <?php }?>
                      </div>
                    </div>
                    <ul class="list-group list-group-flush text-start">
                      <li class="list-group-item">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Featured member");?>

                      </li>
                      <?php if ($_smarty_tpl->getValue('system')['packages_ads_free_enabled']) {?>
                        <li class="list-group-item">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No Ads");?>

                        </li>
                      <?php }?>
                      <li class="list-group-item">
                        <?php if ($_smarty_tpl->getValue('package')['verification_badge_enabled']) {?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <?php } else { ?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <?php }?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified badge");?>

                      </li>
                      <li class="list-group-item">
                        <?php if (!$_smarty_tpl->getValue('package')['boost_posts_enabled']) {?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts promotion");?>

                        <?php } else { ?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost up to");?>
 <?php echo $_smarty_tpl->getValue('package')['boost_posts'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>

                        <?php }?>
                      </li>
                      <li class="list-group-item">
                        <?php if (!$_smarty_tpl->getValue('package')['boost_pages_enabled']) {?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages promotion");?>

                        <?php } else { ?>
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost up to");?>
 <?php echo $_smarty_tpl->getValue('package')['boost_pages'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>

                        <?php }?>
                      </li>

                      <!-- Permissions -->
                      <li class="list-group-item">
                        <strong class="text-link" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"permissions",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Permissions");?>

                        </strong>
                      </li>
                      <div class="packages-permissions collapse multi-collapse">
                        <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['pages_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Pages");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['groups_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Groups");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['events_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Events");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['reels_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Reels");?>

                          </li>
                        <?php }?>

                        <li class="list-group-item">
                          <?php if ($_smarty_tpl->getValue('package')['watch_permission']) {?>
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php } else { ?>
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php }?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch Videos");?>
 <?php if ($_smarty_tpl->getValue('package')['watch_permission']) {?><small>(<?php if ($_smarty_tpl->getValue('package')['allowed_videos_categories'] == '0') {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");
} else {
echo $_smarty_tpl->getValue('package')['allowed_videos_categories'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
)</small><?php }?>
                        </li>

                        <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['blogs_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Blogs");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['blogs_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['blogs_permission_read']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Read Blogs");?>
 <?php if ($_smarty_tpl->getValue('package')['blogs_permission_read']) {?><small>(<?php if ($_smarty_tpl->getValue('package')['allowed_blogs_categories'] == '0') {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");
} else {
echo $_smarty_tpl->getValue('package')['allowed_blogs_categories'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
)</small><?php }?>
                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['market_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sell Products");?>
 <small>(<?php if ($_smarty_tpl->getValue('package')['allowed_products'] == '0') {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unlimited");
} else {
echo $_smarty_tpl->getValue('package')['allowed_products'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");
}?>)</small>
                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['offers_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['offers_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Offers");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['jobs_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['jobs_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Jobs");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['courses_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['courses_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Courses");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['forums_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['forums_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Forums Threads/Replies");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['movies_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['movies_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch Movies");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['games_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['games_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Play Games");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['gifts_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['gifts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send Gifts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['stories_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['stories_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Stories");?>

                          </li>
                        <?php }?>

                        <li class="list-group-item">
                          <?php if ($_smarty_tpl->getValue('package')['posts_permission']) {?>
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php } else { ?>
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php }?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Posts");?>

                        </li>

                        <?php if ($_smarty_tpl->getValue('system')['colored_posts_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['colored_posts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Colored Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['activity_posts_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['activity_posts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Feelings/Activity Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['polls_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['polls_posts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Polls Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['geolocation_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['geolocation_posts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Geolocation Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['gif_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['gif_posts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add GIF Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['anonymous_mode']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['anonymous_posts_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Anonymous Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['invitation_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['invitation_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Generate Invitation Codes");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['audio_call_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['audio_call_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Audio Calls");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['video_call_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['video_call_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Video Calls");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['live_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['live_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Live");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['videos_upload_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Videos");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['audio_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['audios_upload_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Audios");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['file_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['files_upload_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Files");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['ads_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['ads_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Ads");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['funding_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['funding_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Raise funding");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['monetization_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetize Content");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->getValue('system')['tips_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->getValue('package')['tips_permission']) {?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Receive Tips");?>

                          </li>
                        <?php }?>
                      </div>
                      <!-- Permissions -->

                      <?php if ($_smarty_tpl->getValue('package')['custom_description']) {?>
                        <li class="list-group-item">
                          <?php echo nl2br((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('package')['custom_description']), (bool) 1);?>

                        </li>
                      <?php }?>
                    </ul>
                    <div class="card-footer bg-transparent">
                      <div class="d-grid">
                        <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
                          <?php if ($_smarty_tpl->getValue('package')['price'] == 0) {?>
                            <button class="btn rounded-pill btn-primary js_try-package" data-id='<?php echo $_smarty_tpl->getValue('package')["package_id"];?>
'>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Try Now");?>

                            </button>
                          <?php } else { ?>
                            <button class="btn rounded-pill btn-danger" data-toggle="modal" data-url="#payment" data-options='{ "handle": "packages", "id": <?php echo $_smarty_tpl->getValue('package')["package_id"];?>
, "price": "<?php echo $_smarty_tpl->getValue('package')["price"];?>
", "vat": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_vat_value')($_smarty_tpl->getValue('package')['price']);?>
", "fees": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_fees_value')($_smarty_tpl->getValue('package')['price']);?>
", "total": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('package')['price']);?>
", "total_printed": "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_payment_total_value')($_smarty_tpl->getValue('package')['price'],true);?>
", "name": "<?php echo $_smarty_tpl->getValue('package')["name"];?>
", "img": "<?php echo $_smarty_tpl->getValue('package')["icon"];?>
" }'>
                              <?php if (!$_smarty_tpl->getValue('user')->_data['user_subscribed']) {?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy Now");?>

                              <?php } else { ?>
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade Now");?>

                              <?php }?>
                            </button>
                          <?php }?>
                        <?php } else { ?>
                          <a class="btn rounded-pill btn-danger" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy Now");?>

                          </a>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /package -->
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        </div>
      </div>
      <!-- content panel -->

    </div>
  </div>
  <!-- page content -->

<?php } elseif ($_smarty_tpl->getValue('view') == "upgraded") {?>

  <!-- page content -->
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
    <div class="row">

      <!-- side panel -->
      <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="card text-center">
          <div class="card-body">
            <div class="mb20">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'class'=>"main-icon",'width'=>"90px",'height'=>"90px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Congratulations");?>
!</h2>
            <p class="text-xlg mt10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You are now");?>
 <span class="badge bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('user')->_data['package_name']);?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("member");?>
</p>
            <?php if ($_smarty_tpl->getValue('user')->_data['can_pick_categories']) {?>
              <p class="text-lg">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your package allows you to pick categories that you are interested in");?>

              </p>
              <p class="text-lg">
                <?php if ($_smarty_tpl->getValue('user')->_data['allowed_videos_categories'] > 0) {?>
                  <span class="badge bg-secondary plr20 ptb15 rounded-pill"><?php echo $_smarty_tpl->getValue('user')->_data['allowed_videos_categories'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['allowed_blogs_categories'] > 0) {?>
                  <span class="badge bg-secondary plr20 ptb15 rounded-pill"><?php echo $_smarty_tpl->getValue('user')->_data['allowed_blogs_categories'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs Categories");?>
</span>
                <?php }?>
              </p>
              <a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/membership"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pick Categories");?>
</a>
            <?php } else { ?>
              <a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Now");?>
</a>
            <?php }?>
          </div>
        </div>
      </div>
      <!-- content panel -->

    </div>
  </div>
  <!-- page content -->

<?php }?>

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
