<?php
/* Smarty version 5.4.1, created on 2025-04-21 16:00:22
  from 'file:market.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68066b96b1b126_72181502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6f082be465a7ffb7ec63583638e80d8ac83080' => 
    array (
      0 => 'market.tpl',
      1 => 1744139797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__svg_icons.tpl' => 8,
    'file:_ads.tpl' => 1,
    'file:__feeds_product.tpl' => 2,
    'file:_no_data.tpl' => 3,
    'file:_addresses.tpl' => 1,
    'file:_order.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_68066b96b1b126_72181502 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_online_shopping_ga73.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_description_marketplace']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-handle="market">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for products");?>
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
        <li <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "search" || $_smarty_tpl->getValue('view') == "category") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market");?>
</span>
          </a>
        </li>
        <?php if ($_smarty_tpl->getValue('system')['market_shopping_cart_enabled'] && $_smarty_tpl->getValue('user')->_logged_in) {?>
          <li <?php if ($_smarty_tpl->getValue('view') == "cart") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/cart">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shopping Cart");?>
</span>
            </a>
          </li>
          <li <?php if ($_smarty_tpl->getValue('view') == "orders") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/orders">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Orders");?>
</span>
            </a>
          </li>
          <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products']) {?>
            <li <?php if ($_smarty_tpl->getValue('view') == "sales") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/sales">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sales");?>
</span>
              </a>
            </li>
          <?php }?>
        <?php }?>
      </ul>
      <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products']) {?>
        <div class="mt10 float-end">
          <button class="btn btn-md btn-primary d-none d-lg-block" data-toggle="modal" data-url="posts/product.php?do=create">
            <i class="fa fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Product");?>

          </button>
          <button class="btn btn-sm btn-icon btn-primary d-block d-lg-none" data-toggle="modal" data-url="posts/product.php?do=create">
            <i class="fa fa-plus-circle"></i>
          </button>
        </div>
      <?php }?>
    </div>
    <!-- tabs -->
  </div>

  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('view'),array('','search','category'))) {?>

    <div class="row">
      <!-- left panel -->
      <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
        <!-- categories -->
        <div class="card">
          <div class="card-body with-nav">
            <ul class="side-nav">
              <?php if ($_smarty_tpl->getValue('view') != "category") {?>
                <li class="active">
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>

                  </a>
                </li>
              <?php } else { ?>
                <li>
                  <?php if ($_smarty_tpl->getValue('current_category')['parent']) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/category/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('current_category')['parent']['category_url'];?>
">
                      <i class="fas fa-arrow-alt-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('current_category')['parent']['category_name']);?>

                    </a>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market">
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
/market/category/<?php echo $_smarty_tpl->getValue('category')['category_id'];?>
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

      <!-- right panel -->
      <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

        <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('view') == "search") {?>
          <div class="bs-callout bs-callout-info mt0">
            <!-- results counter -->
            <span class="badge rounded-pill badge-lg bg-secondary"><?php echo $_smarty_tpl->getValue('total');?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("results were found for the search for");?>
 "<strong class="text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('htmlentities')($_smarty_tpl->getValue('query'),ENT_QUOTES,'utf-8');?>
</strong>"
            <!-- results counter -->
          </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('view') == '' && $_smarty_tpl->getValue('promoted_products')) {?>
          <div class="blogs-widget-header">
            <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Products");?>
</div>
          </div>
          <div class="row mb20">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('promoted_products'), 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_boosted'=>true), (int) 0, $_smarty_current_dir);
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('rows')) {?>
          <div class="blogs-widget-header clearfix">
            <!-- sort -->
            <div class="float-end">
              <div class="dropdown">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle ml10" data-bs-toggle="dropdown" data-display="static">
                  <?php if (!$_smarty_tpl->getValue('sort') || $_smarty_tpl->getValue('sort') == "latest") {?>
                    <i class="fas fa-bars fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Latest");?>

                  <?php } elseif ($_smarty_tpl->getValue('sort') == "price-high") {?>
                    <i class="fas fa-sort-amount-down fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price High");?>

                  <?php } elseif ($_smarty_tpl->getValue('sort') == "price-low") {?>
                    <i class="fas fa-sort-amount-down-alt fa-fw"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price Low");?>

                  <?php }?>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="?<?php if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=latest" class="dropdown-item"><i class="fas fa-bars fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Latest");?>
</a>
                  <a href="?<?php if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=price-high" class="dropdown-item"><i class="fas fa-sort-amount-down fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price High");?>
</a>
                  <a href="?<?php if ($_smarty_tpl->getValue('distance')) {?>distance=<?php echo $_smarty_tpl->getValue('distance');?>
&<?php }?>sort=price-low" class="dropdown-item"><i class="fas fa-sort-amount-down-alt fa-fw mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price Low");?>
</a>
                </div>
              </div>
            </div>
            <!-- sort -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('system')['location_finder_enabled']) {?>
              <!-- location filter -->
              <div class="float-end">
                <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                    <i class="fa fa-map-marker-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                    <form class="ptb15 plr15" method="get" action="?">
                      <div class="form-group">
                        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Distance");?>
</label>
                        <div>
                          <?php if ($_smarty_tpl->getValue('sort')) {?>
                            <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->getValue('sort');?>
">
                          <?php }?>
                          <div class="d-grid mb10">
                            <input type="range" class="custom-range" min="1" max="5000" name="distance" value="<?php if ($_smarty_tpl->getValue('distance')) {
echo $_smarty_tpl->getValue('distance');
} else { ?>5000<?php }?>" oninput="this.form.distance_value.value=this.value">
                          </div>
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><?php if ($_smarty_tpl->getValue('system')['system_distance'] == "mile") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ML");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("KM");
}?></span>
                            <input disabled type="number" class="form-control" min="1" max="5000" name="distance_value" value="<?php if ($_smarty_tpl->getValue('distance')) {
echo $_smarty_tpl->getValue('distance');
} else { ?>5000<?php }?>" oninput="this.form.distance.value=this.value">
                          </div>
                        </div>
                      </div>
                      <div class="d-grid">
                        <button type="submit" class="btn btn-md btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Filter");?>
</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- location filter -->
            <?php }?>
            <div class="blogs-widget-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");?>
</div>
          </div>

          <div class="row">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'post');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach2DoElse = false;
?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </div>

          <?php echo $_smarty_tpl->getValue('pager');?>

        <?php } else { ?>
          <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
      </div>
      <!-- right panel -->
    </div>

  <?php } elseif ($_smarty_tpl->getValue('view') == "cart") {?>

    <div class="card">
      <div class="card-header with-icon">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shopping Cart");?>

      </div>
      <div class="card-body page-content">
        <div class="row">
          <!-- Addresses -->
          <div class="col-md-5">
            <div class="section-title mb20">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your Addresses");?>

            </div>
            <?php $_smarty_tpl->renderSubTemplate('file:_addresses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_small'=>true), (int) 0, $_smarty_current_dir);
?>
          </div>
          <!-- Addresses -->

          <!-- Shopping Cart -->
          <div class="col-md-7">
            <div class="section-title mb20">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shopping Cart");?>

            </div>
            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Items");?>

            </div>
            <div class="pl-md-4">
              <?php if ($_smarty_tpl->getValue('cart')['items']) {?>
                <div class="row">
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart')['items'], 'cart_item');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cart_item')->value) {
$foreach3DoElse = false;
?>
                    <div class="col-lg-6">
                      <div class="card product active">
                        <div class="product-image">
                          <div class="product-price">
                            <?php if ($_smarty_tpl->getValue('cart_item')['post']['product']['price'] > 0) {?>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('cart_item')['post']['product']['price']);?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free");?>

                            <?php }?>
                          </div>
                          <?php if ($_smarty_tpl->getValue('cart_item')['post']['photos_num'] > 0) {?>
                            <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('cart_item')['post']['photos'][0]['source'];?>
">
                          <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/blank_product.png">
                          <?php }?>
                        </div>
                        <div class="product-info plr15">
                          <div class="product-meta">
                            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('cart_item')['post']['post_id'];?>
" class="title"><?php echo $_smarty_tpl->getValue('cart_item')['post']['product']['name'];?>
</a>
                            <?php if ($_smarty_tpl->getValue('cart_item')['post']['product']['is_digital']) {?>
                              <span class="badge bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Digital");?>
</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->getValue('cart_item')['post']['product']['status'] == "new") {?>
                              <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New");?>
</span>
                            <?php } else { ?>
                              <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Used");?>
</span>
                            <?php }?>
                          </div>
                          <div class="mt20">
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Qty:");?>
</span>
                                <select class="form-select js_shopping-update-cart" name="quantity" data-id="<?php echo $_smarty_tpl->getValue('cart_item')['product_post_id'];?>
">
                                  <?php
$_smarty_tpl->assign('i', null);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->getValue('i') <= $_smarty_tpl->getValue('cart_item')['post']['product']['quantity']) {
for ($_foo=true;$_smarty_tpl->getValue('i') <= $_smarty_tpl->getValue('cart_item')['post']['product']['quantity']; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                    <option value="<?php echo $_smarty_tpl->getValue('i');?>
" <?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('cart_item')['quantity']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('i');?>
</option>
                                  <?php }
}
?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="d-grid">
                              <button type="button" class="btn btn-sm btn-light js_shopping-remove-from-cart" data-id="<?php echo $_smarty_tpl->getValue('cart_item')['product_post_id'];?>
">
                                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"danger-icon",'width'=>"18px",'height'=>"18px"), (int) 0, $_smarty_current_dir);
?>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
              <?php } else { ?>
                <div class="alert alert-info">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your cart is empty.");?>

                </div>
              <?php }?>
            </div>
            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shipping Address");?>

            </div>
            <div class="pl-md-4">
              <?php if ($_smarty_tpl->getValue('addresses')) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addresses'), 'address');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach4DoElse = false;
?>
                  <div class="shipping-address">
                    <div class="form-check">
                      <input class="form-check-input js_shipping-address" type="radio" name="shipping_address" id="shipping_address-<?php echo $_smarty_tpl->getValue('address')['address_id'];?>
" value="<?php echo $_smarty_tpl->getValue('address')['address_id'];?>
">
                      <label class="form-check-label" for="shipping_address-<?php echo $_smarty_tpl->getValue('address')['address_id'];?>
">
                        <strong><?php echo $_smarty_tpl->getValue('address')['address_title'];?>
</strong> (<?php echo $_smarty_tpl->getValue('address')['address_details'];?>
, <?php echo $_smarty_tpl->getValue('address')['address_city'];?>
 - <?php echo $_smarty_tpl->getValue('address')['address_country'];?>
)
                      </label>
                    </div>
                  </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <!-- error -->
                <div class="alert alert-danger mt15 mb0 x-hidden" id="addresses-error">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select a shipping address");?>

                </div>
                <!-- error -->
              <?php } else { ?>
                <div class="alert alert-warning">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You have no addresses");?>

                </div>
              <?php }?>
            </div>
            <div class="divider"></div>
            <div class="text-end">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Price");?>

              <p>
                <span class="text-xxlg">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('cart')['total'],2));?>

                </span>
              </p>
            </div>
            <div class="divider"></div>
            <div class="text-end">
              <button type="button" class="btn btn-success btn-lg js_shopping-checkout" <?php if (!$_smarty_tpl->getValue('cart')['items']) {?>disabled<?php }?>>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Checkout");?>

              </button>
            </div>
          </div>
          <!-- Shopping Cart -->
        </div>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('view') == "orders") {?>

    <div class="blogs-widget-header clearfix">
      <!-- search -->
      <div class="float-end">
        <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/orders" method="get">
          <input type="text" class="form-control form-control-sm" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
'>
        </form>
      </div>
      <!-- search -->
      <div class="blogs-widget-title lg">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Orders");?>
 <?php if (!$_smarty_tpl->getValue('query')) {?><span class="badge bg-info rounded-pill"><?php echo $_smarty_tpl->getValue('orders_count');?>
</span><?php }?>
        <?php if ($_smarty_tpl->getValue('query')) {?>
          <span class="badge bg-secondary rounded-pill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("for");?>
: <?php echo $_smarty_tpl->getValue('query');?>
</span>
        <?php }?>
      </div>
    </div>

    <?php if ($_smarty_tpl->getValue('orders')) {?>
      <ul class="js_orders-stream">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach5DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:_order.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </ul>

      <!-- see-more -->
      <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('orders')) >= $_smarty_tpl->getValue('system')['max_results']) {?>
        <div class="alert alert-post see-more js_see-more" data-get="orders" data-target-stream=".js_orders-stream" <?php if ($_smarty_tpl->getValue('query')) {?>data-filter="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
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

  <?php } elseif ($_smarty_tpl->getValue('view') == "sales") {?>

    <div class="row">
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-primary">
          <div class="stat-cell narrow">
            <i class="fa fa-file-invoice bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('orders_count');?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Orders");?>
</span><br>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-info">
          <div class="stat-cell narrow">
            <i class="fa fa-dollar-sign bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('monthly_sales'),2));?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This Month Earnings");?>
</span><br>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="stat-panel bg-gradient-info">
          <div class="stat-cell narrow">
            <i class="fa fa-dollar-sign bg-icon"></i>
            <span class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('user')->_data['user_market_balance'],2));?>
</span><br>
            <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Earnings");?>
</span><br>
          </div>
        </div>
      </div>
    </div>

    <div class="blogs-widget-header clearfix">
      <!-- search -->
      <div class="float-end">
        <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/sales" method="get">
          <input type="text" class="form-control form-control-sm" name="query" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
'>
        </form>
      </div>
      <!-- search -->
      <div class="blogs-widget-title lg">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sales Orders");?>

        <?php if ($_smarty_tpl->getValue('query')) {?>
          <span class="badge bg-secondary rounded-pill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("for");?>
: <?php echo $_smarty_tpl->getValue('query');?>
</span>
        <?php }?>
      </div>
    </div>

    <?php if ($_smarty_tpl->getValue('orders')) {?>
      <ul class="js_orders-stream">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach6DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:_order.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sales'=>true), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </ul>

      <!-- see-more -->
      <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('orders')) >= $_smarty_tpl->getValue('system')['max_results']) {?>
        <div class="alert alert-post see-more js_see-more" data-get="sales_orders" data-target-stream=".js_orders-stream" <?php if ($_smarty_tpl->getValue('query')) {?>data-filter="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
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

  <?php }?>

</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
