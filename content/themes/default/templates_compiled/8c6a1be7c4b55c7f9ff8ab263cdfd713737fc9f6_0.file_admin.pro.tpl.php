<?php
/* Smarty version 5.4.1, created on 2025-04-18 02:44:55
  from 'file:admin.pro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801bca7b34b00_87686333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6a1be7c4b55c7f9ff8ab263cdfd713737fc9f6' => 
    array (
      0 => 'admin.pro.tpl',
      1 => 1744139712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
))) {
function content_6801bca7b34b00_87686333 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "packages") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Package");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add" || $_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/packages" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-cubes mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro System");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "packages") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Packages");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['name'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Package");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "subscribers") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=settings">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"membership",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro Packages Enabled");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable pro packages to be used as upgrading plans or for subscriptions");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/payments"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payments Settings");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="packages_enabled">
              <input type="checkbox" name="packages_enabled" id="packages_enabled" <?php if ($_smarty_tpl->getValue('system')['packages_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"wallet",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Can Buy Packages From Wallet Balance");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable users to buy packages from their wallet balance");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make sure you have enabled");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet System");?>
</a>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="packages_wallet_payment_enabled">
              <input type="checkbox" name="packages_wallet_payment_enabled" id="packages_wallet_payment_enabled" <?php if ($_smarty_tpl->getValue('system')['packages_wallet_payment_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"noads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads FREE");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disable any ads for all PRO user");?>

            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="packages_ads_free_enabled">
              <input type="checkbox" name="packages_ads_free_enabled" id="packages_ads_free_enabled" <?php if ($_smarty_tpl->getValue('system')['packages_ads_free_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "packages") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Period");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['package_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/edit/<?php echo $_smarty_tpl->getValue('row')['package_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['icon'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['name'];?>

                  </a>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['package_permissions_group_id'] == 0) {?>
                    <?php if ($_smarty_tpl->getValue('row')['verification_badge_enabled']) {?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/verified">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Permissions");?>

                      </a>
                    <?php } else { ?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/users">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>

                      </a>
                    <?php }?>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/<?php echo $_smarty_tpl->getValue('row')['package_permissions_group_id'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['permissions_group_title'];?>

                    </a>
                  <?php }?>
                </td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('row')['price']);?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['period'] == 'life') {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->getValue('row')['period_num'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('row')['period']);?>

                  <?php }?>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['package_order'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/edit/<?php echo $_smarty_tpl->getValue('row')['package_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="package" data-id="<?php echo $_smarty_tpl->getValue('row')['package_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['package_id'];?>
">
      <div class="card-body">

        <div class="alert alert-info">
          <div class="icon">
            <i class="fa fa-info-circle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If package comes with verified badge and package permissions set to be");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/users"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>
</a> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("so the");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/verified"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Permissions");?>
</a> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("will be used instead");?>

          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->getValue('data')['name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="price" value="<?php echo $_smarty_tpl->getValue('data')['price'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can set the price as 0 and it will be trial package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Every");?>

          </label>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-8">
                <input class="form-control" name="period_num" value="<?php echo $_smarty_tpl->getValue('data')['period_num'];?>
">
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="period">
                  <option <?php if ($_smarty_tpl->getValue('data')['period'] == "day") {?>selected<?php }?> value="day"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Day");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['period'] == "week") {?>selected<?php }?> value="week"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Week");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['period'] == "month") {?>selected<?php }?> value="month"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Month");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['period'] == "year") {?>selected<?php }?> value="year"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Year");?>
</option>
                  <option <?php if ($_smarty_tpl->getValue('data')['period'] == "life") {?>selected<?php }?> value="life"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>
</option>
                </select>
              </div>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For example 15 days, 2 Months, 1 Year");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="text" class="form-control form-control-color" name="color" value="<?php echo $_smarty_tpl->getValue('data')['color'];?>
" />
              <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('data')['color'];?>
" />
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The theme color for this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Icon");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getValue('data')['icon'] == '') {?>
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="icon" value="">
              </div>
            <?php } else { ?>
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('data')['icon'];?>
')">
                <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="icon" value="<?php echo $_smarty_tpl->getValue('data')['icon'];?>
">
              </div>
            <?php }?>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="1" <?php if ($_smarty_tpl->getValue('data')['package_permissions_group_id'] == '1') {?>selected<?php }?>>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>

              </option>
              <option value="2" <?php if ($_smarty_tpl->getValue('data')['package_permissions_group_id'] == '2') {?>selected<?php }?>>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Permissions");?>

              </option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['permissions_groups'], 'group');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach1DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getValue('data')['package_permissions_group_id'] == $_smarty_tpl->getValue('group')['permissions_group_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('group')['permissions_group_id'];?>
"><?php echo $_smarty_tpl->getValue('group')['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions Groups");?>
</a>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_videos_categories" value="<?php echo $_smarty_tpl->getValue('data')['allowed_videos_categories'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many videos categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_blogs_categories" value="<?php echo $_smarty_tpl->getValue('data')['allowed_blogs_categories'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many blogs categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market Products");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_products" value="<?php echo $_smarty_tpl->getValue('data')['allowed_products'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many market products allowed to sell for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification Badge Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="verification_badge_enabled">
              <input type="checkbox" name="verification_badge_enabled" id="verification_badge_enabled" <?php if ($_smarty_tpl->getValue('data')['verification_badge_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable verification badge with this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost Posts Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_posts_enabled">
              <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled" <?php if ($_smarty_tpl->getValue('data')['boost_posts_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable boost posts feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_posts" value="<?php echo $_smarty_tpl->getValue('data')['boost_posts'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Max posts boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost Pages Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_pages_enabled">
              <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled" <?php if ($_smarty_tpl->getValue('data')['boost_pages_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable boost pages feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_pages" value="<?php echo $_smarty_tpl->getValue('data')['boost_pages'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Max pages boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="custom_description" rows="5"><?php echo $_smarty_tpl->getValue('data')['custom_description'];?>
</textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add more text to show it to your users");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="package_order" value="<?php echo $_smarty_tpl->getValue('data')['package_order'];?>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add") {?>

    <form class="js_ajax-forms" data-url="admin/pro.php?do=add">
      <div class="card-body">

        <div class="alert alert-info">
          <div class="icon">
            <i class="fa fa-info-circle fa-2x"></i>
          </div>
          <div class="text pt5">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If package comes with verified badge and package permissions set to be");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/users"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>
</a> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("so the");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/verified"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Permissions");?>
</a> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("will be used instead");?>

          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="price">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can set the price as 0 and it will be trial package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Every");?>

          </label>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-8">
                <input class="form-control" name="period_num">
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="period">
                  <option value="day"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Day");?>
</option>
                  <option value="week"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Week");?>
</option>
                  <option value="month"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Month");?>
</option>
                  <option value="year"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Year");?>
</option>
                  <option value="life"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>
</option>
                </select>
              </div>
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For example 15 days, 2 Months, 1 Year");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Color");?>

          </label>
          <div class="col-md-9">
            <div class="input-group js_colorpicker">
              <input type="color" class="form-control form-control-color" name="color" />
              <input type="color" class="form-control form-control-color" />
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The theme color for this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Icon");?>

          </label>
          <div class="col-md-9">
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="icon" value="">
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="1">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>

              </option>
              <option value="2">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Permissions");?>

              </option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('permissions_groups'), 'group');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach2DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('group')['permissions_group_id'];?>
"><?php echo $_smarty_tpl->getValue('group')['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions Groups");?>
</a><br>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_videos_categories">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many videos categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs Categories");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_blogs_categories">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many blogs categories allowed for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market Products");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="allowed_products">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How many market products allowed to sell for this package (0 for unlimited)");?>

            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verification Badge Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="verification_badge_enabled">
              <input type="checkbox" name="verification_badge_enabled" id="verification_badge_enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable verification badge with this package");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost Posts Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_posts_enabled">
              <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable boost posts feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_posts">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Max posts boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost Pages Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="boost_pages_enabled">
              <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable boost pages feature");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages Boosts");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="boost_pages">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Max pages boosts allowed");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="custom_description" rows="5"></textarea>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add more text to show it to your users");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="package_order">
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "subscribers") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscription");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expiration");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach3DoElse = false;
?>
              <tr>
                <td><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('row')['user_id'];?>
</a></td>
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
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/pro/edit/<?php echo $_smarty_tpl->getValue('row')['package_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['icon'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['name'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('row')['user_subscription_date'],"%e %B %Y");?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['period'] == "life") {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('row')['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->getValue('row')['subscription_timeleft'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remaining");?>
 <?php echo $_smarty_tpl->getValue('row')['subscription_timeleft'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Days");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expired");
}?>)
                  <?php }?>
                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/edit/<?php echo $_smarty_tpl->getValue('row')['user_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
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
