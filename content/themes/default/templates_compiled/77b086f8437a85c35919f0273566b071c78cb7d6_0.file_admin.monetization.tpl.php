<?php
/* Smarty version 5.4.1, created on 2025-04-21 21:19:55
  from 'file:admin.monetization.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6806b67b58e181_21882367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b086f8437a85c35919f0273566b071c78cb7d6' => 
    array (
      0 => 'admin.monetization.tpl',
      1 => 1744139715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
  ),
))) {
function content_6806b67b58e181_21882367 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-coins mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "payments") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Requests");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <form class="js_ajax-forms" data-url="admin/monetization.php?do=settings">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable monetization to enable your users to earn money from their content");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/payments"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments Settings");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="monetization_enabled">
              <input type="checkbox" name="monetization_enabled" id="monetization_enabled" <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Can Subscribe Via Wallet Balance");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable users to subscribe via their wallet balance");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="monetization_wallet_payment_enabled">
              <input type="checkbox" name="monetization_wallet_payment_enabled" id="monetization_wallet_payment_enabled" <?php if ($_smarty_tpl->getValue('system')['monetization_wallet_payment_enabled']) {?>checked<?php }?>>
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
            <label class="switch" for="monetization_money_withdraw_enabled">
              <input type="checkbox" name="monetization_money_withdraw_enabled" id="monetization_money_withdraw_enabled" <?php if ($_smarty_tpl->getValue('system')['monetization_money_withdraw_enabled']) {?>checked<?php }?>>
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
              <input type="checkbox" class="form-check-input" name="method_paypal" id="method_paypal" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("paypal",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_paypal"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("PayPal");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_skrill" id="method_skrill" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("skrill",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_skrill"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Skrill");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_moneypoolscash" id="method_moneypoolscash" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("moneypoolscash",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_moneypoolscash"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("MoneyPoolsCash");?>
</label>
            </div>
            <div class="form-check form-check-inline">
              <input type="checkbox" class="form-check-input" name="method_bank" id="method_bank" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("bank",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_bank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bank Transfer");?>
</label>
            </div>
            <div class="form-check form-check-inline" id="js_custome-withdrawal">
              <input type="checkbox" class="form-check-input" name="method_custom" id="method_custom" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')("custom",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>checked<?php }?>>
              <label class="form-check-label" for="method_custom"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Method");?>
</label>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users can send withdrawal requests via any of these methods");?>

            </div>
          </div>
        </div>

        <div id="js_custome-withdrawal-name" <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')("custom",$_smarty_tpl->getValue('system')['monetization_payment_method_array'])) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Method Name");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="monetization_payment_method_custom" value="<?php echo $_smarty_tpl->getValue('system')['monetization_payment_method_custom'];?>
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
            <input type="text" class="form-control" name="monetization_min_withdrawal" value="<?php echo $_smarty_tpl->getValue('system')['monetization_min_withdrawal'];?>
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
            <label class="switch" for="monetization_money_transfer_enabled">
              <input type="checkbox" name="monetization_money_transfer_enabled" id="monetization_money_transfer_enabled" <?php if ($_smarty_tpl->getValue('system')['monetization_money_transfer_enabled']) {?>checked<?php }?>>
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
            <input type="text" class="form-control" name="monetization_commission" value="<?php echo $_smarty_tpl->getValue('system')['monetization_commission'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Leave it 0 if you don't want to get any commissions");?>

            </div>
          </div>
        </div>

        <div class="divider dashed"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maximum Paid Post Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="monetization_max_paid_post_price" value="<?php echo $_smarty_tpl->getValue('system')['monetization_max_paid_post_price'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The maximum price that a user can set for a paid post (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Maximum Monetization Plan Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="monetization_max_plan_price" value="<?php echo $_smarty_tpl->getValue('system')['monetization_max_plan_price'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The maximum price that a user can set for a monetization plan (0 for unlimited)");?>

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
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
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
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-withdraw" data-type="monetization" data-handle="approve" data-id="<?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
">
                    <i class="fa fa-check"></i>
                  </button>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-withdraw" data-type="monetization" data-handle="decline" data-id="<?php echo $_smarty_tpl->getValue('row')['payment_id'];?>
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
