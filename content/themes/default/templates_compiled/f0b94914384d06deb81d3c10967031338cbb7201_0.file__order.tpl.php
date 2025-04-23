<?php
/* Smarty version 5.4.1, created on 2025-04-21 16:54:02
  from 'file:_order.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6806782ab2ee34_62073193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b94914384d06deb81d3c10967031338cbb7201' => 
    array (
      0 => '_order.tpl',
      1 => 1744139793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
  ),
))) {
function content_6806782ab2ee34_62073193 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header ptb30 plr30">
    <div class="row">
      <div class="col-md-3">
        <div><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
 #:</strong></div>
        <?php echo $_smarty_tpl->getValue('order')['order_hash'];?>

      </div>

      <div class="col-md-3">
        <div><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order Placed");?>
:</strong></div>
        <?php echo $_smarty_tpl->getValue('order')['insert_time'];?>

      </div>

      <div class="col-md-3">
        <div><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
:</strong></div>
        <?php if ($_smarty_tpl->getValue('order')['status'] == "canceled") {?>
          <span class="badge badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('order')['status']));?>
</span>
        <?php } elseif ($_smarty_tpl->getValue('order')['status'] == "delivered") {?>
          <span class="badge badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('order')['status']));?>
</span>
        <?php } else { ?>
          <span class="badge badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('order')['status']));?>
</span>
        <?php }?>
      </div>

      <div class="col-md-3 text-end">
        <?php if (!$_smarty_tpl->getValue('for_admin')) {?>
          <!-- update order -->
          <?php if ($_smarty_tpl->getValue('sales')) {?>
            <?php if ($_smarty_tpl->getValue('order')['status'] != "delivered" && $_smarty_tpl->getValue('order')['status'] != "canceled") {?>
              <button class="btn btn-md btn-outline-primary" data-toggle="modal" data-url="users/orders.php?do=edit&id=<?php echo $_smarty_tpl->getValue('order')['order_id'];?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("UPDATE");?>

              </button>
            <?php }?>
          <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('order')['status'] != "delivered" && $_smarty_tpl->getValue('order')['status'] != "canceled") {?>
              <button class="btn btn-md btn-outline-primary" data-toggle="modal" data-url="users/orders.php?do=edit&id=<?php echo $_smarty_tpl->getValue('order')['order_id'];?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("UPDATE");?>

              </button>
            <?php }?>
          <?php }?>
          <!-- update order -->

          <!-- invoice -->
          <button class="btn btn-md btn-outline-success js_shopping-download-invoice" data-id="<?php echo $_smarty_tpl->getValue('order')['order_id'];?>
">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("INVOICE");?>

          </button>
          <!-- invoice -->
        <?php }?>
      </div>
    </div>
  </div>
  <div class="card-body page-content">
    <div class="row">

      <div class="col-md-5 mb30">
        <!-- Tracking Details -->
        <div class="section-title mb20">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linked_accounts",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php if ($_smarty_tpl->getValue('order')['is_digital']) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download Details");?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tracking Details");?>

          <?php }?>
        </div>
        <div class="plr20">
          <?php if ($_smarty_tpl->getValue('order')['is_digital']) {?>
            <div class="mb20">
              <div class="mb10">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download Link");?>
:</strong>
              </div>
              <?php if ($_smarty_tpl->getValue('order')['items'][0]['post']['product']['product_file_source']) {?>
                <div>
                  <a class="btn btn-md btn-outline-primary" href="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('order')['items'][0]['post']['product']['product_file_source'];?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download");?>
</a>
                </div>
              <?php } else { ?>
                <div>
                  <a class="btn btn-md btn-outline-primary" href="<?php echo $_smarty_tpl->getValue('order')['items'][0]['post']['product']['product_download_url'];?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download");?>
</a>
                </div>
              <?php }?>
            </div>
          <?php } else { ?>
            <div class="mb20">
              <div>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tracking Link");?>
:</strong>
              </div>
              <div>
                <?php if ($_smarty_tpl->getValue('order')['tracking_link']) {?><a href="<?php echo $_smarty_tpl->getValue('order')['tracking_link'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('order')['tracking_link'];?>
</a><?php } else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("N/A");
}?>
              </div>
            </div>

            <div class="mb20">
              <div>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tracking Number");?>
:</strong>
              </div>
              <div>
                <?php if ($_smarty_tpl->getValue('order')['tracking_number']) {
echo $_smarty_tpl->getValue('order')['tracking_number'];
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("N/A");
}?>
              </div>
            </div>
          <?php }?>
        </div>
        <!-- Tracking Details -->

        <!-- Shipping Addresses -->
        <div class="section-title mt30 mb20">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shipping Addresses");?>

        </div>
        <div class="payment-plans">
          <div class="payment-plan full">
            <div class="text-xlg"><strong><?php echo $_smarty_tpl->getValue('order')['buyer_fullname'];?>
</strong></div>
            <div><?php echo $_smarty_tpl->getValue('order')['address_details'];?>
</div>
            <div><?php echo $_smarty_tpl->getValue('order')['address_city'];?>
</div>
            <div><?php echo $_smarty_tpl->getValue('order')['address_country'];?>
</div>
            <div><?php echo $_smarty_tpl->getValue('order')['address_zip_code'];?>
</div>
            <div><?php echo $_smarty_tpl->getValue('order')['address_phone'];?>
</div>
          </div>
        </div>
      </div>
      <!-- Shipping Addresses -->

      <div class="col-md-7">
        <!-- Payments -->
        <div class="section-title mb20">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments");?>

        </div>
        <div class="plr20">
          <div class="mb5">
            <span class="text-lg"><?php if ($_smarty_tpl->getValue('sales')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subtotal");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total");
}?>:</span>
            <span class="float-end">
              <span class="text-lg">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['sub_total'],2));?>

              </span>
            </span>
          </div>
          <?php if ($_smarty_tpl->getValue('sales')) {?>
            <div class="mb5">
              <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
:</span>
              <span class="float-end">
                <span class="text-lg">
                  - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['total_commission'],2));?>

                </span>
              </span>
            </div>
            <div class="divider mtb5"></div>
            <div class="mb5">
              <span class="text-lg"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total");?>
:</strong></span>
              <span class="float-end">
                <span class="text-lg">
                  <strong>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['final_price'],2));?>

                  </strong>
                </span>
              </span>
            </div>
          <?php }?>
        </div>
        <!-- Payments -->

        <!-- Order Items -->
        <div class="section-title mt30 mb20">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Items");?>

        </div>
        <div class="row">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')['items'], 'order_item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order_item')->value) {
$foreach0DoElse = false;
?>
            <div class="col-lg-6">
              <div class="card product active">
                <div class="product-image">
                  <div class="product-price">
                    <?php if ($_smarty_tpl->getValue('order_item')['post']['product']['price'] > 0) {?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('order_item')['post']['product']['price']);?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free");?>

                    <?php }?>
                  </div>
                  <?php if ($_smarty_tpl->getValue('order_item')['post']['photos_num'] > 0) {?>
                    <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('order_item')['post']['photos'][0]['source'];?>
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
/posts/<?php echo $_smarty_tpl->getValue('order_item')['post']['post_id'];?>
" class="title"><?php echo $_smarty_tpl->getValue('order_item')['post']['product']['name'];?>
</a>
                    <?php if ($_smarty_tpl->getValue('order_item')['post']['product']['status'] == "new") {?>
                      <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New");?>
</span>
                    <?php } else { ?>
                      <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Used");?>
</span>
                    <?php }?>
                  </div>
                  <div class="mt20">
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Qty:");?>
</strong>
                    <?php echo $_smarty_tpl->getValue('order_item')['quantity'];?>

                  </div>
                </div>
              </div>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <!-- Order Items -->
      </div>
    </div>
  </div>
</div><?php }
}
