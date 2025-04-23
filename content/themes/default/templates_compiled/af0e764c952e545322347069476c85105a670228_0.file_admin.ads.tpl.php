<?php
/* Smarty version 5.4.1, created on 2025-04-20 04:28:50
  from 'file:admin.ads.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68047802c72950_57932029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af0e764c952e545322347069476c85105a670228' => 
    array (
      0 => 'admin.ads.tpl',
      1 => 1744139768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
))) {
function content_68047802c72950_57932029 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="card-header with-icon">
      <i class="fa fa-bullseye mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");?>

    </div>

    <form class="js_ajax-forms" data-url="admin/ads.php?do=settings">
      <div class="card-body">
        <!-- adblock-warning-message -->
        <div class="adblock-warning-message">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn off the ad blocker or add this web page's URL as an exception so you use ads system without any problems");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("After you turn off the ad blocker, you'll need to refresh your screen");?>

        </div>
        <!-- adblock-warning-message -->

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Campaigns");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow users to create ads");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable it will enable wallet by default");?>
)</div>
          </div>
          <div class="text-end">
            <label class="switch" for="ads_enabled">
              <input type="checkbox" name="ads_enabled" id="ads_enabled" <?php if ($_smarty_tpl->getValue('system')['ads_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verification",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Campaigns Approval System");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the approval system On and Off");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If disabled all campaigns will be approved by default");?>
)</div>
          </div>
          <div class="text-end">
            <label class="switch" for="ads_approval_enabled">
              <input type="checkbox" name="ads_approval_enabled" id="ads_approval_enabled" <?php if ($_smarty_tpl->getValue('system')['ads_approval_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost by View");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="ads_cost_view" value="<?php echo $_smarty_tpl->getValue('system')['ads_cost_view'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-sm-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Cost by Click");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="ads_cost_click" value="<?php echo $_smarty_tpl->getValue('system')['ads_cost_click'];?>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "users_ads") {?>

    <!-- card-header -->
    <div class="card-header with-icon with-nav">
      <!-- panel title -->
      <div class="mb20">
        <i class="fa fa-bullseye mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Ads");?>

      </div>
      <!-- panel title -->

      <!-- panel nav -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#Pending" data-bs-toggle="tab">
            <i class="fa fa-clock fa-fw mr5"></i><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Approved" data-bs-toggle="tab">
            <i class="fa fa-check-circle fa-fw mr5"></i><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved");?>
</strong>
          </a>
        </li>
      </ul>
      <!-- panel nav -->
    </div>
    <!-- card-header -->

    <!-- tab-content -->
    <div class="tab-content">

      <!-- Pending -->
      <div class="tab-pane active" id="Pending">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
              <thead>
                <tr>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("By");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Budget");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows')["pending"], 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('row')['campaign_title'];?>
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
                    <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['campaign_budget'],2));?>
</td>
                    <td>
                      <span class="badge rounded-pill badge-lg bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");?>
</span>
                    </td>
                    <td>
                      <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
" target="_blank" class="btn btn-sm btn-icon btn-rounded btn-primary">
                        <i class="fa fa-eye"></i>
                      </a>
                      <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-approve" data-id="<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
">
                        <i class="fa fa-check"></i>
                      </button>
                      <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-decline" data-id="<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
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
      </div>
      <!-- Pending -->

      <!-- Approved -->
      <div class="tab-pane" id="Approved">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
              <thead>
                <tr>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("By");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Budget");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Spend");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clicks/Views");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows')["approved"], 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('row')['campaign_title'];?>
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
                    <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['campaign_budget'],2));?>
</td>
                    <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('row')['campaign_spend'],2));?>
</td>
                    <td>
                      <?php if ($_smarty_tpl->getValue('row')['campaign_bidding'] == "click") {?>
                        <?php echo $_smarty_tpl->getValue('row')['campaign_clicks'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clicks");?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->getValue('row')['campaign_views'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

                      <?php }?>
                    </td>
                    <td>
                      <?php if ($_smarty_tpl->getValue('row')['campaign_is_active']) {?>
                        <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Active");?>
</span>
                      <?php } else { ?>
                        <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Not Active");?>
</span>
                      <?php }?>
                    </td>
                    <td>
                      <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                        <i class="fa fa-pencil-alt"></i>
                      </a>
                      <?php if ($_smarty_tpl->getValue('row')['campaign_is_active']) {?>
                        <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stop");?>
' class="btn btn-sm btn-icon btn-rounded btn-warning js_ads-stop-campaign" data-id="<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
">
                          <i class="fas fa-stop-circle"></i>
                        </button>
                      <?php } else { ?>
                        <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resume");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-resume-campaign" data-id="<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
">
                          <i class="fas fa-play-circle"></i>
                        </button>
                      <?php }?>
                      <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-delete-campaign" data-id="<?php echo $_smarty_tpl->getValue('row')['campaign_id'];?>
">
                        <i class="fas fa-trash"></i>
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
      </div>
      <!-- Approved -->

    </div>
    <!-- tab-content -->

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "system_ads") {?>

    <div class="card-header with-icon">
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Ads");?>

        </a>
      </div>
      <i class="fa fa-bullseye mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("System Ads");?>

    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Place");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach2DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('row')['ads_id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['title'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "home") {?><i class='fa fa-home fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "search") {?><i class='fa fa-search fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "people") {?><i class='fa fa-users fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover People Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "notifications") {?><i class='fa fa-bell fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "post") {?><i class='fa fa-file-powerpoint fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post (Right Panel)");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "post_footer") {?><i class='fa fa-file-powerpoint fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post (Footer)");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "photo") {?><i class='fa fa-file-image fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "pages") {?><i class='fa fa-flag fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "groups") {?><i class='fa fa-users fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "directory") {?><i class='fa fa-th-list fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "market") {?><i class='fa fa-shopping-bag fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "offers") {?><i class='fa fa-tag fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "jobs") {?><i class='fa fa-briefcase fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "courses") {?><i class='fa fa-book fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "movies") {?><i class='fa fa-film fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "newfeed_1") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 1<?php }?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "newfeed_2") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 2<?php }?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "newfeed_3") {?><i class='fa fa-newspaper fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 3<?php }?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "blog") {?><i class='fa fa-file-alt fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog (Right Panel)");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "blog_footer") {?><i class='fa fa-file-alt fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog (Footer)");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "header") {?><i class='fa fa-chevron-circle-up fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "footer") {?><i class='fa fa-chevron-circle-down fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Footer");
}?>
                </td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('row')['time'],"%e %B %Y");?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads/edit/<?php echo $_smarty_tpl->getValue('row')['ads_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="ads_system" data-id="<?php echo $_smarty_tpl->getValue('row')['ads_id'];?>
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

    <div class="card-header with-icon">
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads/system_ads" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
      <i class="fa fa-bullseye mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['title'];?>

    </div>

    <form class="js_ajax-forms" data-url="admin/ads.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['ads_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['title'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Place");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="place" id="js_ads-place">
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "home") {?>selected<?php }?> value="home"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "search") {?>selected<?php }?> value="search"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "people") {?>selected<?php }?> value="people"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover People");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "notifications") {?>selected<?php }?> value="notifications"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "post") {?>selected<?php }?> value="post"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post (Right Panel)");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "post_footer") {?>selected<?php }?> value="post_footer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post (Footer)");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "photo") {?>selected<?php }?> value="photo"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "pages") {?>selected<?php }?> value="pages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "groups") {?>selected<?php }?> value="groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "directory") {?>selected<?php }?> value="directory"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "market") {?>selected<?php }?> value="market"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "offers") {?>selected<?php }?> value="offers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "jobs") {?>selected<?php }?> value="jobs"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "courses") {?>selected<?php }?> value="courses"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "movies") {?>selected<?php }?> value="movies"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "newfeed_1") {?>selected<?php }?> value="newfeed_1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 1</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "newfeed_2") {?>selected<?php }?> value="newfeed_2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 2</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "newfeed_3") {?>selected<?php }?> value="newfeed_3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 3</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "blog") {?>selected<?php }?> value="blog"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog (Right Panel)");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "blog_footer") {?>selected<?php }?> value="blog_footer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog (Footer)");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "header") {?>selected<?php }?> value="header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "footer") {?>selected<?php }?> value="footer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Footer");?>
</option>
            </select>
          </div>
        </div>

        <div id="js_selected-pages" <?php if (!$_smarty_tpl->getValue('data')['ads_pages_ids']) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Pages");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="pages" name="ads_pages_ids" value="<?php echo $_smarty_tpl->getValue('data')['ads_pages_ids'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for pages you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div id="js_selected-groups" <?php if (!$_smarty_tpl->getValue('data')['ads_groups_ids']) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Groups");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="groups" name="ads_groups_ids" value="<?php echo $_smarty_tpl->getValue('data')['ads_groups_ids'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for groups you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->getValue('data')['code'];?>
</textarea>
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

    <div class="card-header with-icon">
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/ads/system_ads" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
      <i class="fa fa-bullseye mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Ads");?>

    </div>

    <form class="js_ajax-forms" data-url="admin/ads.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Place");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="place" id="js_ads-place">
              <option value="home"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home");?>
</option>
              <option value="search"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</option>
              <option value="people"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover People");?>
</option>
              <option value="notifications"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>
</option>
              <option value="post"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post (Right Panel)");?>
</option>
              <option value="post_footer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post (Footer)");?>
</option>
              <option value="photo"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo");?>
</option>
              <option value="pages"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</option>
              <option value="groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</option>
              <option value="directory"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>
</option>
              <option value="market"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>
</option>
              <option value="offers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</option>
              <option value="jobs"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</option>
              <option value="courses"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>
</option>
              <option value="movies"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
</option>
              <option value="newfeed_1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 1</option>
              <option value="newfeed_2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 2</option>
              <option value="newfeed_3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Feed");?>
 3</option>
              <option value="blog"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog (Right Panel)");?>
</option>
              <option value="blog_footer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog (Footer)");?>
</option>
              <option value="header"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header");?>
</option>
              <option value="footer"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Footer");?>
</option>
            </select>
          </div>
        </div>

        <div id="js_selected-pages" class="x-hidden">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Pages");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="pages" name="ads_pages_ids">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for pages you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div id="js_selected-groups" class="x-hidden">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Groups");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="js_tagify-ajax x-hidden" data-handle="groups" name="ads_groups_ids">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search for groups you want to show this ads");?>

              </div>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="message" rows="8"></textarea>
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

  <?php }?>

</div><?php }
}
