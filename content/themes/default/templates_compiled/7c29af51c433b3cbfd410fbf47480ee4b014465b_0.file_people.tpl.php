<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:56:23
  from 'file:people.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e98772a4c7_22646044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c29af51c433b3cbfd410fbf47480ee4b014465b' => 
    array (
      0 => 'people.tpl',
      1 => 1744139790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_user.tpl' => 4,
    'file:__custom_fields.tpl' => 1,
    'file:_ads_campaigns.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_6801e98772a4c7_22646044 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar js_sticky-sidebar">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- left panel -->

    <!-- content panel -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar">

      <!-- tabs -->
      <div class="content-tabs rounded-sm shadow-sm clearfix">
        <ul>
          <li <?php if ($_smarty_tpl->getValue('view') == '' || $_smarty_tpl->getValue('view') == "find") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Find");?>
</a>
          </li>
          <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
            <li <?php if ($_smarty_tpl->getValue('view') == "friend_requests") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people/friend_requests">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friend Requests");?>

                <?php if ($_smarty_tpl->getValue('user')->_data['friend_requests']) {?>
                  <span class="badge badge-lg bg-info ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user')->_data['friend_requests']);?>
</span>
                <?php }?>
              </a>
            </li>
            <li <?php if ($_smarty_tpl->getValue('view') == "sent_requests") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people/sent_requests">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent Requests");?>

                <?php if ($_smarty_tpl->getValue('user')->_data['friend_requests_sent_total']) {?>
                  <span class="badge badge-lg bg-warning ml5"><?php echo $_smarty_tpl->getValue('user')->_data['friend_requests_sent_total'];?>
</span>
                <?php }?>
              </a>
            </li>
          <?php }?>
        </ul>
      </div>
      <!-- tabs -->

      <!-- content -->
      <div class="row">
        <!-- left panel -->
        <div class="col-lg-8">
          <div class="card">

            <?php if ($_smarty_tpl->getValue('view') == '') {?>
              <div class="card-header bg-transparent">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("People You May Know");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('people')) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"add"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>

                  <!-- see-more -->
                  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('people')) >= $_smarty_tpl->getValue('system')['min_results']) {?>
                    <div class="alert alert-post see-more js_see-more" data-get="new_people">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                  <?php }?>
                  <!-- see-more -->
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No people available");?>

                  </p>
                <?php }?>
              </div>

            <?php } elseif ($_smarty_tpl->getValue('view') == "find") {?>
              <div class="card-header bg-transparent">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search Results");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('people')) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), '_user');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach1DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>$_smarty_tpl->getValue('_user')['connection']), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No people available for your search");?>

                  </p>
                <?php }?>
              </div>

            <?php } elseif ($_smarty_tpl->getValue('view') == "friend_requests") {?>
              <div class="card-header bg-transparent">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Respond to Your Friend Request");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('user')->_data['friend_requests']) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['friend_requests'], '_user');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach2DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No new requests");?>

                  </p>
                <?php }?>

                <!-- see-more -->
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user')->_data['friend_requests']) >= $_smarty_tpl->getValue('system')['max_results']) {?>
                  <div class="alert alert-info see-more js_see-more" data-get="friend_requests">
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                <?php }?>
                <!-- see-more -->
              </div>

            <?php } elseif ($_smarty_tpl->getValue('view') == "sent_requests") {?>
              <div class="card-header bg-transparent">
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friend Requests Sent");?>
</strong>
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('user')->_data['friend_requests_sent']) {?>
                  <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['friend_requests_sent'], '_user');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach3DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"cancel"), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php } else { ?>
                  <p class="text-center text-muted">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No new requests");?>

                  </p>
                <?php }?>

                <!-- see-more -->
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user')->_data['friend_requests_sent']) >= $_smarty_tpl->getValue('system')['max_results']) {?>
                  <div class="alert alert-info see-more js_see-more" data-get="friend_requests_sent">
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                    <div class="loader loader_small x-hidden"></div>
                  </div>
                <?php }?>
                <!-- see-more -->
              </div>

            <?php }?>

          </div>
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-lg-4">
          <!-- search panel -->
          <div class="card">
            <div class="card-header">
              <i class="fa fa-search mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

            </div>
            <div class="card-body">
              <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people/find" method="post">
                <?php if ($_smarty_tpl->getValue('system')['location_finder_enabled']) {?>
                  <div class="form-group">
                    <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Distance");?>
 <?php echo $_smarty_tpl->getValue('distance_value');?>
</label>
                    <div class="d-grid">
                      <input type="range" class="custom-range mb10" min="1" max="5000" name="distance_slider" value="<?php echo (null !== ($_smarty_tpl->getValue('distance_value') ?? null)) ? $_smarty_tpl->getValue('distance_value') : 5000;?>
" oninput="this.form.distance_value.value=this.value">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><?php if ($_smarty_tpl->getValue('system')['system_distance'] == "mile") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ML");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("KM");
}?></span>
                        <input type="number" class="form-control" min="1" max="5000" name="distance_value" value="<?php echo (null !== ($_smarty_tpl->getValue('distance_value') ?? null)) ? $_smarty_tpl->getValue('distance_value') : 5000;?>
" oninput="this.form.distance_slider.value=this.value">
                      </div>
                    </div>
                  </div>
                <?php }?>
                <!-- query -->
                <div class="form-group">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Query");?>
</label>
                  <input type="text" class="form-control" name="query" value="<?php echo $_smarty_tpl->getValue('query');?>
">
                </div>
                <!-- query -->
                <!-- gender -->
                <div class="form-group <?php if ($_smarty_tpl->getValue('system')['genders_disabled']) {?>x-hidden<?php }?>">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Gender");?>
</label>
                  <select class="form-select" name="gender">
                    <option value="any"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Any");?>
</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), '_gender');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_gender')->value) {
$foreach4DoElse = false;
?>
                      <option <?php if ($_smarty_tpl->getValue('gender') == $_smarty_tpl->getValue('_gender')['gender_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('_gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('_gender')['gender_name'];?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <!-- gender -->
                <!-- relationship -->
                <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
                  <div class="form-group">
                    <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Relationship");?>
</label>
                    <select class="form-select" name="relationship">
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "any") {?>selected<?php }?> value="any"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Any");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "single") {?>selected<?php }?> value="single"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Single");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "relationship") {?>selected<?php }?> value="relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In a relationship");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "married") {?>selected<?php }?> value="married"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Married");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "complicated") {?>selected<?php }?> value="complicated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("It's complicated");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "separated") {?>selected<?php }?> value="separated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "divorced") {?>selected<?php }?> value="divorced"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Divorced");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('relationship') == "widowed") {?>selected<?php }?> value="widowed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widowed");?>
</option>
                    </select>
                  </div>
                <?php }?>
                <!-- relationship -->
                <!-- online status -->
                <div class="form-group">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Online Status");?>
</label>
                  <select class="form-select" name="status">
                    <option value="any"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Any");?>
</option>
                    <option value="online"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Online");?>
</option>
                    <option value="offline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offline");?>
</option>
                  </select>
                </div>
                <!-- online status -->
                <!-- custom fields -->
                <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
                  <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true,'_search'=>true), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <!-- custom fields -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary" name="submit"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
                </div>
              </form>
            </div>
          </div>
          <!-- search panel -->

          <?php $_smarty_tpl->renderSubTemplate('file:_ads_campaigns.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php $_smarty_tpl->renderSubTemplate('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
        <!-- right panel -->


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
