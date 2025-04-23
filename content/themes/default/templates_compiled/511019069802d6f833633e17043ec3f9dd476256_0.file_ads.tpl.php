<?php
/* Smarty version 5.4.1, created on 2025-04-21 11:38:42
  from 'file:ads.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68062e42ba2701_87094366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '511019069802d6f833633e17043ec3f9dd476256' => 
    array (
      0 => 'ads.tpl',
      1 => 1744139709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_68062e42ba2701_87094366 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/headers/undraw_growth_analytics_8btt.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Manager");?>
</h2>
    <p class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Ads, Create new Campaign");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">

      <!-- tabs -->
      <div class="position-relative">
        <div class="content-tabs rounded-sm shadow-sm clearfix">
          <ul>
            <li class="active">
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Campaigns");?>

              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- tabs -->

      <!-- adblock-warning-message -->
      <div class="adblock-warning-message">
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn off the ad blocker or add this web page's URL as an exception so you use ads system without any problems");?>
, <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("After you turn off the ad blocker, you'll need to refresh your screen");?>

      </div>
      <!-- adblock-warning-message -->

      <?php if ($_smarty_tpl->getValue('view') == '') {?>

        <!-- ads campaigns -->
        <div class="card mt20">
          <div class="card-header with-icon">
            <a class="btn btn-md btn-primary float-end" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads/new">
              <i class="fa fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New Campaign");?>

            </a>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("My Campaigns");?>

          </div>
          <div class="card-body">
            <?php if ($_smarty_tpl->getValue('campaigns')) {?>
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                  <thead>
                    <tr>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start - End Date");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Budget");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Spend");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Bidding");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clicks/Views");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Created");?>
</th>
                      <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('campaigns'), 'campaign');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('campaign')->value) {
$foreach0DoElse = false;
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->getValue('campaign')['campaign_title'];?>
</td>
                        <td>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('campaign')['campaign_start_date'],"%e %B %Y");?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('campaign')['campaign_end_date'],"%e %B %Y");?>

                        </td>
                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('campaign')['campaign_budget'],2));?>
</td>
                        <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('campaign')['campaign_spend'],2));?>
</td>
                        <td>
                          <span class="badge bg-secondary">
                            <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == "click") {?>
                              <i class="fa fa-hand-pointer mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Click");?>

                            <?php } else { ?>
                              <i class="fa fa-eye mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View");?>

                            <?php }?>
                          </span>
                        </td>
                        <td>
                          <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == "click") {?>
                            <?php echo $_smarty_tpl->getValue('campaign')['campaign_clicks'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Clicks");?>

                          <?php } else { ?>
                            <?php echo $_smarty_tpl->getValue('campaign')['campaign_views'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

                          <?php }?>
                        </td>
                        <td>
                          <?php if ($_smarty_tpl->getValue('campaign')['campaign_is_declined']) {?>
                            <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Declined");?>
</span>
                          <?php } else { ?>
                            <?php if (!$_smarty_tpl->getValue('campaign')['campaign_is_approved']) {?>
                              <span class="badge rounded-pill badge-lg bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approval Pending");?>
</span>
                            <?php } else { ?>
                              <?php if ($_smarty_tpl->getValue('campaign')['campaign_is_active']) {?>
                                <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Active");?>
</span>
                              <?php } else { ?>
                                <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Not Active");?>
</span>
                              <?php }?>
                            <?php }?>
                          <?php }?>
                        </td>
                        <td>
                          <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('campaign')['campaign_created_date'];?>
"><?php echo $_smarty_tpl->getValue('campaign')['campaign_created_date'];?>
</span>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads/edit/<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                            <i class="fa fa-pencil-alt"></i>
                          </a>
                          <?php if ($_smarty_tpl->getValue('campaign')['campaign_is_approved']) {?>
                            <?php if ($_smarty_tpl->getValue('campaign')['campaign_is_active']) {?>
                              <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stop");?>
' class="btn btn-sm btn-icon btn-rounded btn-warning js_ads-stop-campaign" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
                                <i class="fas fa-stop-circle"></i>
                              </button>
                            <?php } else { ?>
                              <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Resume");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_ads-resume-campaign" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
                                <i class="fas fa-play-circle"></i>
                              </button>
                            <?php }?>
                          <?php }?>
                          <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_ads-delete-campaign" data-id="<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
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
            <?php } else { ?>
              <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
          </div>
        </div>
        <!-- ads campaigns -->

      <?php } elseif ($_smarty_tpl->getValue('view') == "new") {?>

        <!-- new campaign -->
        <div class="card mt20">
          <div class="card-header with-icon">
            <div class="float-end">
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads" class="btn btn-md btn-light">
                <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

              </a>
            </div>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New Campaign");?>

          </div>
          <form class="js_ajax-forms" data-url="ads/campaign.php?do=create">
            <div class="card-body">
              <?php if ($_smarty_tpl->getValue('user')->_data['user_wallet_balance'] == 0) {?>
                <div class="bs-callout bs-callout-danger mt0">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current wallet credit is");?>
: <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('user')->_data['user_wallet_balance'],2));?>
</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You need to");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Replenish your wallet credit");?>
</a>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['ads_approval_enabled']) {?>
                <div class="bs-callout bs-callout-warning mt0">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your campaign will need to be approved by admin before publishing");?>

                </div>
              <?php }?>

              <div class="row">
                <!-- campaign details & target audience -->
                <div class="col-sm-6">
                  <!-- campaign details -->
                  <div class="section-title mb20">
                    <i class="fa fa-cog mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Details");?>

                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Title");?>
</label>
                    <input type="text" class="form-control" name="campaign_title" id="campaign_title">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a title for your campaign");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_start_date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Start Date");?>
</label>
                    <input type="datetime-local" class="form-control" name="campaign_start_date">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set Campaign start datetime (UTC)");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_end_date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign End Date");?>
</label>
                    <input type="datetime-local" class="form-control" name="campaign_end_date">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set Campaign end datetime (UTC)");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_budget"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Budget");?>
</label>
                    <div class="input-money <?php echo $_smarty_tpl->getValue('system')['system_currency_dir'];?>
">
                      <span><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
                      <input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="campaign_budget">
                    </div>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a budget for your campaign, campaign will be paused if reached its limit");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_bidding"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Bidding");?>
</label>
                    <select class="form-select" name="campaign_bidding">
                      <option value="click"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pay Per Click");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['ads_cost_click']);?>
)</option>
                      <option value="view"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pay Per View");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['ads_cost_view']);?>
)</option>
                    </select>
                  </div>
                  <!-- campaign details -->

                  <!-- target audience -->
                  <div class="section-title mb20">
                    <i class="fa fa-crosshairs mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Audience");?>

                  </div>
                  <div class="form-group">
                    <label class="form-label" for="audience_countries"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience Country");?>
</label>
                    <select class="form-select" multiple name="audience_countries[]" id="js_ads-audience-countries">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                  <div class="form-group <?php if ($_smarty_tpl->getValue('system')['genders_disabled']) {?>x-hidden<?php }?>">
                    <label class="form-label" for="audience_gender"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience Gender");?>
</label>
                    <select class="form-select" name="audience_gender" id="js_ads-audience-gender">
                      <option value="all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), 'gender');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gender')->value) {
$foreach2DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('gender')['gender_name'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                  <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
                    <div class="form-group">
                      <label class="form-label" for="audience_relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience Relationship");?>
</label>
                      <select class="form-select" name="audience_relationship" id="js_ads-audience-relationship">
                        <option value="all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
</option>
                        <option value="single"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Single");?>
</option>
                        <option value="relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In a relationship");?>
</option>
                        <option value="married"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Married");?>
</option>
                        <option value="complicated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("It's complicated");?>
</option>
                        <option value="separated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated");?>
</option>
                        <option value="divorced"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Divorced");?>
</option>
                        <option value="widowed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widowed");?>
</option>
                      </select>
                    </div>
                  <?php }?>
                  <div class="form-group">
                    <label class="form-label" for="potential_reach"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Potential Reach");?>
</label>
                    <div class="text-lg">
                      <div class="float-end x-hidden" id="js_ads-potential-reach-loader">
                        <div class="spinner-border text-info"></div>
                      </div>
                      <i class="fa fa-users"></i> <span class="badge rounded-pill badge-lg bg-danger" id="js_ads-potential-reach"><?php echo $_smarty_tpl->getValue('potential_reach');?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("People");?>

                    </div>
                  </div>
                  <!-- target audience -->
                </div>
                <!-- campaign details & target audience -->

                <!-- ads details -->
                <div class="col-sm-6">
                  <div class="section-title mb20">
                    <i class="fa fa-bullhorn mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Details");?>

                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Title");?>
</label>
                    <input type="text" class="form-control" name="ads_title" id="ads_title">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a title for your ads");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Description");?>
</label>
                    <textarea class="form-control" name="ads_description" rows="5"></textarea>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a description for your ads (maximum 200 characters)");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_type"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Advertise For");?>
</label>
                    <select class="form-select" name="ads_type" id="js_campaign-type">
                      <option value="url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("URL");?>
</option>
                      <option value="page"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page");?>
</option>
                      <option value="group"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group");?>
</option>
                      <option value="event"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event");?>
</option>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can advertise for a URL or one of your pages, groups or events");?>

                    </div>
                  </div>
                  <div class="form-group" id="js_campaign-type-url">
                    <label class="form-label" for="ads_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target URL");?>
</label>
                    <input type="text" class="form-control" name="ads_url">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter your URL you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group x-hidden" id="js_campaign-type-page">
                    <label class="form-label" for="ads_page"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Page");?>
</label>
                    <select class="form-select" name="ads_page">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Page");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'page');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach3DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('page')['page_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('page')['page_title']);?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select one of your pages you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group x-hidden" id="js_campaign-type-group">
                    <label class="form-label" for="ads_group"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Group");?>
</label>
                    <select class="form-select" name="ads_group">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Group");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach4DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('group')['group_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('group')['group_title']);?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select one of your groups you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group x-hidden" id="js_campaign-type-event">
                    <label class="form-label" for="ads_event"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Event");?>
</label>
                    <select class="form-select" name="ads_event">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Event");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('events'), 'event');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach5DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['event_title']);?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select one of your events you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_placement"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Placement");?>
</label>
                    <select class="form-select" name="ads_placement">
                      <option value="newsfeed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Newsfeed");?>
</option>
                      <option value="sidebar"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sidebar");?>
</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_image"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Image");?>
</label>
                    <div class="x-image">
                      <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                      </button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                      <input type="hidden" class="js_x-image-input" name="ads_image">
                    </div>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The image of your ads, supported formats (JPG, PNG, GIF)");?>

                    </div>
                  </div>
                </div>
                <!-- ads details -->
              </div>

              <!-- error -->
              <div class="alert alert-danger mt15 mb0 x-hidden"></div>
              <!-- error -->
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>

              </button>
            </div>
          </form>
        </div>
        <!-- new campaign -->

      <?php } elseif ($_smarty_tpl->getValue('view') == "edit") {?>

        <!-- edit campaign -->
        <div class="card mt20">
          <div class="card-header with-icon">
            <div class="float-end">
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/ads" class="btn btn-md btn-light">
                <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

              </a>
            </div>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Campaign");?>

          </div>
          <form class="js_ajax-forms" data-url="ads/campaign.php?do=edit&id=<?php echo $_smarty_tpl->getValue('campaign')['campaign_id'];?>
">
            <div class="card-body">
              <?php if ($_smarty_tpl->getValue('user')->_data['user_wallet_balance'] == 0) {?>
                <div class="bs-callout bs-callout-danger mt0">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current wallet credit is");?>
: <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('user')->_data['user_wallet_balance'],2));?>
</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You need to");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/wallet"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Replenish your wallet credit");?>
</a>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['ads_approval_enabled']) {?>
                <div class="bs-callout bs-callout-warning mt0">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your campaign will need to be approved by admin before publishing");?>

                </div>
              <?php }?>

              <div class="row">
                <!-- campaign details & target audience -->
                <div class="col-sm-6">
                  <!-- campaign details -->
                  <div class="section-title mb20">
                    <i class="fa fa-cog mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Details");?>

                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Title");?>
</label>
                    <input type="text" class="form-control" name="campaign_title" value="<?php echo $_smarty_tpl->getValue('campaign')['campaign_title'];?>
">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a title for your campaign");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_start_date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Start Date");?>
</label>
                    <input type="datetime-local" class="form-control" name="campaign_start_date" value="<?php echo $_smarty_tpl->getValue('campaign')['campaign_start_date'];?>
">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set Campaign start datetime (UTC)");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_end_date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign End Date");?>
</label>
                    <input type="datetime-local" class="form-control" name="campaign_end_date" value="<?php echo $_smarty_tpl->getValue('campaign')['campaign_end_date'];?>
">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set Campaign end datetime (UTC)");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_budget"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Budget");?>
</label>
                    <div class="input-money <?php echo $_smarty_tpl->getValue('system')['system_currency_dir'];?>
">
                      <span><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
                      <input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="campaign_budget" value="<?php echo $_smarty_tpl->getValue('campaign')['campaign_budget'];?>
">
                    </div>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a budget for your campaign, campaign will be paused if reached its limit");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="campaign_bidding"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Campaign Bidding");?>
</label>
                    <select class="form-select" name="campaign_bidding">
                      <option <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == "click") {?>selected<?php }?> value="click"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pay Per Click");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['ads_cost_click']);?>
)</option>
                      <option <?php if ($_smarty_tpl->getValue('campaign')['campaign_bidding'] == "view") {?>selected<?php }?> value="view"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pay Per View");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('system')['ads_cost_view']);?>
)</option>
                    </select>
                  </div>
                  <!-- campaign details -->

                  <!-- target audience -->
                  <div class="section-title mb20">
                    <i class="fa fa-crosshairs mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Audience");?>

                  </div>
                  <div class="form-group">
                    <label class="form-label" for="audience_countries"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience Country");?>
</label>
                    <select class="form-select" multiple name="audience_countries[]" id="js_ads-audience-countries">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach6DoElse = false;
?>
                        <option <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('country')['country_id'],$_smarty_tpl->getValue('campaign')['audience_countries'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                  <div class="form-group <?php if ($_smarty_tpl->getValue('system')['genders_disabled']) {?>x-hidden<?php }?>">
                    <label class="form-label" for="audience_gender"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience Gender");?>
</label>
                    <select class="form-select" name="audience_gender" id="js_ads-audience-gender">
                      <option <?php if ($_smarty_tpl->getValue('campaign')['audience_gender'] == "all") {?>selected<?php }?> value="all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), 'gender');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gender')->value) {
$foreach7DoElse = false;
?>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_gender'] == $_smarty_tpl->getValue('gender')['gender_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('gender')['gender_name'];?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                  </div>
                  <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
                    <div class="form-group">
                      <label class="form-label" for="audience_relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience Relationship");?>
</label>
                      <select class="form-select" name="audience_relationship" id="js_ads-audience-relationship">
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "all") {?>selected<?php }?> value="all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Single");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In a relationship");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Married");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("It's complicated");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Divorced");?>
</option>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['audience_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widowed");?>
</option>
                      </select>
                    </div>
                  <?php }?>
                  <div class="form-group">
                    <label class="form-label" for="potential_reach"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Potential Reach");?>
</label>
                    <div class="text-lg">
                      <div class="float-end x-hidden" id="js_ads-potential-reach-loader">
                        <div class="spinner-border text-info"></div>
                      </div>
                      <i class="fa fa-users"></i> <span class="text-primary" id="js_ads-potential-reach"><?php echo $_smarty_tpl->getValue('campaign')['campaign_potential_reach'];?>
</span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("People");?>

                    </div>
                  </div>
                  <!-- target audience -->
                </div>
                <!-- campaign details & target audience -->

                <!-- ads details -->
                <div class="col-sm-6">
                  <div class="section-title mb20">
                    <i class="fa fa-bullhorn mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Details");?>

                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Title");?>
</label>
                    <input type="text" class="form-control" name="ads_title" id="ads_title" value="<?php echo $_smarty_tpl->getValue('campaign')['ads_title'];?>
">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a title for your ads");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_description"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Description");?>
</label>
                    <textarea class="form-control" name="ads_description" rows="5"><?php echo $_smarty_tpl->getValue('campaign')['ads_description'];?>
</textarea>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a description for your ads (maximum 200 characters)");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_type"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Advertise For");?>
</label>
                    <select class="form-select" name="ads_type" id="js_campaign-type">
                      <option <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "url") {?>selected<?php }?> value="url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("URL");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "page") {?>selected<?php }?> value="page"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "group") {?>selected<?php }?> value="group"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] == "event") {?>selected<?php }?> value="event"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Event");?>
</option>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can advertise for a URL or one of your pages, groups or events");?>

                    </div>
                  </div>
                  <div class="form-group <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] != 'url') {?>x-hidden<?php }?>" id="js_campaign-type-url">
                    <label class="form-label" for="ads_url"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target URL");?>
</label>
                    <input type="text" class="form-control" name="ads_url" value="<?php echo $_smarty_tpl->getValue('campaign')['ads_url'];?>
">
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter your URL you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] != 'page') {?>x-hidden<?php }?>" id="js_campaign-type-page">
                    <label class="form-label" for="ads_page"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Page");?>
</label>
                    <select class="form-select" name="ads_page">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Page");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pages'), 'page');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('page')->value) {
$foreach8DoElse = false;
?>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['ads_page'] == $_smarty_tpl->getValue('page')['page_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('page')['page_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('page')['page_title']);?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select one of your pages you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] != 'group') {?>x-hidden<?php }?>" id="js_campaign-type-group">
                    <label class="form-label" for="ads_group"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Group");?>
</label>
                    <select class="form-select" name="ads_group">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Group");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('groups'), 'group');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach9DoElse = false;
?>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['ads_group'] == $_smarty_tpl->getValue('group')['group_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('group')['group_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('group')['group_title']);?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select one of your groups you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group <?php if ($_smarty_tpl->getValue('campaign')['ads_type'] != 'event') {?>x-hidden<?php }?>" id="js_campaign-type-event">
                    <label class="form-label" for="ads_event"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Event");?>
</label>
                    <select class="form-select" name="ads_event">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Event");?>
</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('events'), 'event');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('event')->value) {
$foreach10DoElse = false;
?>
                        <option <?php if ($_smarty_tpl->getValue('campaign')['ads_event'] == $_smarty_tpl->getValue('event')['event_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('event')['event_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('event')['event_title']);?>
</option>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select one of your events you want to advertise for");?>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_placement"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Placement");?>
</label>
                    <select class="form-select" name="ads_placement">
                      <option <?php if ($_smarty_tpl->getValue('campaign')['ads_placement'] == "newsfeed") {?>selected<?php }?> value="newsfeed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Newsfeed");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('campaign')['ads_placement'] == "sidebar") {?>selected<?php }?> value="sidebar"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sidebar");?>
</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="ads_image"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Image");?>
</label>
                    <?php if ($_smarty_tpl->getValue('campaign')['ads_image'] == '') {?>
                      <div class="x-image">
                        <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                        </button>
                        <div class="x-image-loader">
                          <div class="progress x-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                        <input type="hidden" class="js_x-image-input" name="ads_image">
                      </div>
                    <?php } else { ?>
                      <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('campaign')['ads_image'];?>
')">
                        <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'>

                        </button>
                        <div class="x-image-loader">
                          <div class="progress x-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                        <input type="hidden" class="js_x-image-input" name="ads_image" value="<?php echo $_smarty_tpl->getValue('campaign')['ads_image'];?>
">
                      </div>
                    <?php }?>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The image of your ads, supported formats (JPG, PNG, GIF)");?>

                    </div>
                  </div>
                </div>
                <!-- ads details -->
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
        </div>
        <!-- edit campaign -->

      <?php }?>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
