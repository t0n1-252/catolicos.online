<?php
/* Smarty version 5.4.1, created on 2025-04-21 15:33:49
  from 'file:admin.market.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6806655d621ee3_75890633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ab972e5c77eb8c9f0906b6b57d59c7ff5adfd0' => 
    array (
      0 => 'admin.market.tpl',
      1 => 1744139734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
    'file:__categories.recursive_rows.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 2,
  ),
))) {
function content_6806655d621ee3_75890633 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/products" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "find_orders") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/orders" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/add_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category" || $_smarty_tpl->getValue('sub_view') == "edit_category") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-shopping-bag mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "products") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "find") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "orders") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Orders");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "find_orders") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Orders");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "categories") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['category_name'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "payments") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments Requests");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <form class="js_ajax-forms" data-url="admin/settings.php?edit=market">
      <div class="card-body">

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the marketplace On and Off");?>
</div>
          </div>
          <div class="text-end">
            <label class="switch" for="market_enabled">
              <input type="checkbox" name="market_enabled" id="market_enabled" <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shopping Cart");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the shopping cart On and Off");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: If disabled buyers can only contact sellers to buy products");?>

            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="market_shopping_cart_enabled">
              <input type="checkbox" name="market_shopping_cart_enabled" id="market_shopping_cart_enabled" <?php if ($_smarty_tpl->getValue('system')['market_shopping_cart_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"withdrawal",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Can Withdraw Earned Money");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If enabled users will be able to withdraw earned money");?>
</div>
          </div>
          <div class="text-end">
            <label class="switch" for="market_money_withdraw_enabled">
              <input type="checkbox" name="market_money_withdraw_enabled" id="market_money_withdraw_enabled" <?php if ($_smarty_tpl->getValue('system')['market_money_withdraw_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Method");?>

          </label>
          <div class="col-md-9">
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_paypal" id="method_paypal" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("paypal",$_smarty_tpl->getValue('system')['market_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_paypal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PayPal");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_skrill" id="method_skrill" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("skrill",$_smarty_tpl->getValue('system')['market_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_skrill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Skrill");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_moneypoolscash" id="method_moneypoolscash" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("moneypoolscash",$_smarty_tpl->getValue('system')['market_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_moneypoolscash"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("MoneyPoolsCash");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_bank" id="method_bank" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("bank",$_smarty_tpl->getValue('system')['market_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_bank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Transfer");?>
</label>
            </div>
            <div class="form-check form-check-inline" id="js_custome-withdrawal">
              <input type="checkbox" class="form-check-input" name="method_custom" id="method_custom" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("custom",$_smarty_tpl->getValue('system')['market_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_custom"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Method");?>
</label>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users can send withdrawal requests via any of these methods");?>

            </div>
          </div>
        </div>

        <div id="js_custome-withdrawal-name" <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')("custom",$_smarty_tpl->getValue('system')['market_payment_method_array'])) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Method Name");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="market_payment_method_custom" value="<?php echo $_smarty_tpl->getValue('system')['market_payment_method_custom'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set the name of your custom withdrawal payment method");?>

              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="market_min_withdrawal" value="<?php echo $_smarty_tpl->getValue('system')['market_min_withdrawal'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The minimum amount of money so user can send a withdrawal request");?>

            </div>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Can Transfer Earned Money To Wallet");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If wallet enabled users will be able to transfer earned money to their wallet");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="market_money_transfer_enabled">
              <input type="checkbox" name="market_money_transfer_enabled" id="market_money_transfer_enabled" <?php if ($_smarty_tpl->getValue('system')['market_money_transfer_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commission");?>
 (%)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="market_commission" value="<?php echo $_smarty_tpl->getValue('system')['market_commission'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Leave it 0 if you don't want to get any commissions");?>

            </div>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "products" || $_smarty_tpl->getValue('sub_view') == "find") {?>

    <div class="card-body">

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Product Name, Description or Location");?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Author");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Link");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getValue('row')['post_id'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('row')['post_author_url'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['post_author_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['post_author_name'];?>

                    </a>
                  </td>
                  <td>
                    <span title="<?php echo $_smarty_tpl->getValue('row')['name'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('row')['name'],30);?>
</span>
                  </td>
                  <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('row')['time'];?>
"><?php echo $_smarty_tpl->getValue('row')['time'];?>
</span></td>
                  <td>
                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('row')['post_id'];?>
" target="_blank">
                      <i class="fa fa-eye mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");?>

                    </a>
                  </td>
                  <td>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="post" data-id="<?php echo $_smarty_tpl->getValue('row')['post_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="6" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

      <?php echo $_smarty_tpl->getValue('pager');?>


    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "orders" || $_smarty_tpl->getValue('sub_view') == "find_orders") {?>

    <div class="card-body">

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/market/find_orders" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Order ID");?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Seller");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buyer");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subtotal");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Time");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
                <tr>
                  <td><?php echo $_smarty_tpl->getValue('row')['order_hash'];?>
</td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['seller_username'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['seller_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['seller_fullname'];?>

                    </a>
                  </td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['buyer_username'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['buyer_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['buyer_fullname'];?>

                    </a>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('row')['status'] == "canceled") {?>
                      <span class="badge badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('row')['status']));?>
</span>
                    <?php } elseif ($_smarty_tpl->getValue('row')['status'] == "delivered") {?>
                      <span class="badge badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('row')['status']));?>
</span>
                    <?php } else { ?>
                      <span class="badge badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('row')['status']));?>
</span>
                    <?php }?>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['sub_total'],2));?>

                  </td>
                  <td><span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('row')['insert_time'];?>
"><?php echo $_smarty_tpl->getValue('row')['insert_time'];?>
</span></td>
                  <td>
                    <button class="btn btn-sm btn-icon btn-rounded btn-info" data-toggle="modal" data-url="users/orders.php?do=view&id=<?php echo $_smarty_tpl->getValue('row')['order_id'];?>
" data-size="extra-large">
                      <i class="fa fa-eye"></i>
                    </button>
                    <?php if ($_smarty_tpl->getValue('row')['status'] != "delivered" && $_smarty_tpl->getValue('row')['status'] != "canceled") {?>
                      <button class="btn btn-sm btn-icon btn-rounded btn-success" data-toggle="modal" data-url="users/orders.php?do=edit&id=<?php echo $_smarty_tpl->getValue('row')['order_id'];?>
">
                        <i class="fa fa-pencil"></i>
                      </button>
                    <?php }?>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="order" data-id="<?php echo $_smarty_tpl->getValue('row')['order_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="7" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

      <?php echo $_smarty_tpl->getValue('pager');?>


    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_treegrid">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach2DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_url'=>"market",'_handle'=>"market_category"), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="5" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category") {?>

    <form class="js_ajax-forms" data-url="admin/market.php?do=add_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach3DoElse = false;
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
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_category") {?>

    <form class="js_ajax-forms" data-url="admin/market.php?do=edit_category&id=<?php echo $_smarty_tpl->getValue('data')['category_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->getValue('data')['category_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"><?php echo $_smarty_tpl->getValue('data')['category_description'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')["categories"], 'category');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach4DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['category_parent_id']), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" value="<?php echo $_smarty_tpl->getValue('data')['category_order'];?>
">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "payments") {?>

    <div class="card-body">

      <div class="alert alert-warning">
        <div class="icon">
          <i class="fa fa-triangle-exclamation fa-2x"></i>
        </div>
        <div class="text pt5">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PayPal & Moneypoolscash support automatic payout APIs so no need to make them manually");?>
.
        </div>
      </div>

      <div class="alert alert-info">
        <div class="icon">
          <i class="fa fa-info-circle fa-2x"></i>
        </div>
        <div class="text pt5">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You will need to make the payments from your Skrill, Bank Account... etc");?>
. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("After making the payment you can mark the payment request as paid");?>
.
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Method");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Transfer To");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach5DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                    <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('row')['user_name'];
} else {
echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];
}?>
                  </a>
                </td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['amount'],2));?>
</td>
                <td>
                  <span class="badge rounded-pill badge-lg bg-<?php echo $_smarty_tpl->getValue('row')['method_color'];?>
">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('row')['method']);?>

                  </span>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['method_value'];?>
</td>
                <td>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Paid");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="market" data-handle="approve" data-id="<?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
">
                    <i class="fa fa-check"></i>
                  </button>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="market" data-handle="decline" data-id="<?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
">
                    <i class="fa fa-times"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php }?>
</div><?php }
}
