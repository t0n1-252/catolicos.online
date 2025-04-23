<?php
/* Smarty version 5.4.1, created on 2025-04-17 06:27:23
  from 'file:__feeds_user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68009f4b570617_74199354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07b1c8ed55047825caf5f8355d03b6c3c2e53df' => 
    array (
      0 => '__feeds_user.tpl',
      1 => 1744139730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 6,
    'file:__reaction_emojis.tpl' => 1,
  ),
))) {
function content_68009f4b570617_74199354 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('_tpl') == "box") {?>
  <div class="col-md-6 col-lg-3">
    <div class="ui-box <?php if ($_smarty_tpl->getValue('_darker')) {?>darker<?php }?>">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
">
          <img alt="" src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
          <a class="h6" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];?>
">
            <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
              <?php echo $_smarty_tpl->getValue('_user')['user_name'];?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];?>

            <?php }?>
          </a>
        </span>
        <?php if ($_smarty_tpl->getValue('_user')['user_verified']) {?>
          <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('_user')['user_subscribed']) {?>
          <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
      </div>
      <?php if ($_smarty_tpl->getValue('_user')['monetization_plan']) {?>
        <div class="mt10">
          <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_user')['monetization_plan']['price']);?>
 / <?php if ($_smarty_tpl->getValue('_user')['monetization_plan']['period_num'] != '1') {
echo $_smarty_tpl->getValue('_user')['monetization_plan']['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('_user')['monetization_plan']['period']));?>
</span>
        </div>
      <?php }?>
      <div class="mt10">
        <!-- buttons -->
        <?php if ($_smarty_tpl->getValue('_connection') == "request") {?>
          <button type="button" class="btn btn-sm btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Confirm");?>
</button>
          <button type="button" class="btn btn-sm btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "add") {?>
          <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
            <button type="button" class="btn btn-sm btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i><?php if ($_smarty_tpl->getValue('_small')) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Friend");
}?>
            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-success js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

            </button>
          <?php }?>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "cancel") {?>
          <button type="button" class="btn btn-sm btn-light js_friend-cancel" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-clock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "remove") {?>
          <button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->getValue('_no_action')) {?>btn-delete<?php }?> js_friend-remove" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

          </button>
          <?php if ($_smarty_tpl->getValue('_top_friends')) {?>
            <button type="button" class="btn btn-sm btn-warning <?php if ($_smarty_tpl->getValue('_user')['top_friend']) {?>js_friend-unfavorite<?php } else { ?>js_friend-favorite<?php }?>" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <?php if ($_smarty_tpl->getValue('_user')['top_friend']) {?>
                <i class="fa-solid fa-star"></i>
              <?php } else { ?>
                <i class="fa-regular fa-star"></i>
              <?php }?>
            </button>
          <?php }?>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "follow") {?>
          <button type="button" class="btn btn-sm btn-info js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-rss mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "unfollow") {?>
          <button type="button" class="btn btn-sm btn-info js_unfollow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Following");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "blocked") {?>
          <button type="button" class="btn btn-sm btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unblock");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_invite") {?>
          <button type="button" class="btn btn-info btn-sm js_page-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_manage") {?>
          <button type="button" class="btn btn-danger js_page-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

          </button>
          <?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
            <button type="button" class="btn btn-danger js_page-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-primary js_page-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

            </button>
          <?php }?>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_invite") {?>
          <button type="button" class="btn btn-sm btn-info js_group-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_request") {?>
          <button type="button" class="btn btn-sm btn-primary js_group-request-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
</button>
          <button type="button" class="btn btn-sm btn-danger js_group-request-decline" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_manage") {?>
          <button type="button" class="btn btn-sm btn-danger js_group-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

          </button>
          <?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
            <button type="button" class="btn btn-sm btn-danger js_group-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-primary js_group-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

            </button>
          <?php }?>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "event_invite") {?>
          <button type="button" class="btn btn-sm btn-info js_event-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <i class="fa fa-user-plus mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

          </button>

        <?php } elseif ($_smarty_tpl->getValue('_connection') == "unsubscribe") {?>
          <?php if ($_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('_user')['plan_user_id']) {?>
            <button type="button" class="btn btn-sm btn-danger js_unsubscribe-plan" data-id="<?php echo $_smarty_tpl->getValue('_user')['plan_id'];?>
">
              <i class="fa fa-trash mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsubscribe");?>

            </button>
          <?php }?>

        <?php }?>
        <!-- buttons -->
      </div>
    </div>
  </div>
<?php } elseif ($_smarty_tpl->getValue('_tpl') == "list") {?>
  <li class="feeds-item" <?php if ($_smarty_tpl->getValue('_user')['id']) {?>data-id="<?php echo $_smarty_tpl->getValue('_user')['id'];?>
" <?php }?>>
    <div class="data-container <?php if ($_smarty_tpl->getValue('_small')) {?>small<?php }?>">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>">
        <img src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" alt="">
        <?php if ($_smarty_tpl->getValue('_reaction')) {?>
          <div class="data-reaction">
            <div class="inline-emoji no_animation">
              <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('_reaction')), (int) 0, $_smarty_current_dir);
?>
            </div>
          </div>
        <?php }?>
      </a>
      <div class="data-content">
        <div class="float-end">
          <!-- buttons -->
          <?php if ($_smarty_tpl->getValue('_connection') == "request") {?>
            <button type="button" class="btn btn-sm btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Confirm");?>
</button>
            <button type="button" class="btn btn-sm btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "add") {?>
            <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
              <button type="button" class="btn btn-sm btn-light rounded-pill js_friend-add" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_add",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-sm btn-light rounded-pill js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"user_add",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              </button>
            <?php }?>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "cancel") {?>
            <button type="button" class="btn btn-sm btn-warning js_friend-cancel" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-clock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "remove") {?>
            <button type="button" class="btn btn-sm btn-success <?php if (!$_smarty_tpl->getValue('_no_action')) {?>btn-delete<?php }?> js_friend-remove" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "follow") {?>
            <button type="button" class="btn btn-sm js_follow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-rss mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "unfollow") {?>
            <button type="button" class="btn btn-sm js_unfollow" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Following");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "blocked") {?>
            <button type="button" class="btn btn-sm btn-danger js_unblock-user" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unblock");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_invite") {?>
            <button type="button" class="btn btn-sm btn-info js_page-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_manage") {?>
            <button type="button" class="btn btn-danger js_page-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

            </button>
            <?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
              <button type="button" class="btn btn-danger js_page-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-primary js_page-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

              </button>
            <?php }?>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_invite") {?>
            <button type="button" class="btn btn-sm btn-info js_group-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_request") {?>
            <button type="button" class="btn btn-sm btn-primary js_group-request-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
</button>
            <button type="button" class="btn btn-sm btn-danger js_group-request-decline" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "group_manage") {?>
            <button type="button" class="btn btn-sm btn-danger js_group-member-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

            </button>
            <?php if ($_smarty_tpl->getValue('_user')['i_admin']) {?>
              <button type="button" class="btn btn-sm btn-danger js_group-admin-remove" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove Admin");?>

              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-sm btn-primary js_group-admin-addation" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
                <i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make Admin");?>

              </button>
            <?php }?>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "event_invite") {?>
            <button type="button" class="btn btn-sm btn-info js_event-invite" data-id="<?php echo $_smarty_tpl->getValue('_user')['node_id'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-user-plus mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invite");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "connected_account_remove") {?>
            <button type="button" class="btn btn-sm btn-danger js_connected-account-remove" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "connected_account_revoke") {?>
            <button type="button" class="btn btn-sm btn-danger js_connected-account-revoke">
              <i class="fa fa-trash mr5"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Revoke");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_activities_request") {?>
            <button type="button" class="btn btn-danger js_activities-permission-decline" data-id="<?php echo $_smarty_tpl->getValue('_user')['request_id'];?>
">
              <i class="fa fa-circle-xmark mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>

            </button>
            <button type="button" class="btn btn-primary js_activities-permission-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['request_id'];?>
" data-permission="editor">
              <i class="fa fa-circle-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve Editor");?>

            </button>
            <button type="button" class="btn btn-primary js_activities-permission-accept" data-id="<?php echo $_smarty_tpl->getValue('_user')['request_id'];?>
" data-permission="viewer">
              <i class="fa fa-circle-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve Viewer");?>

            </button>

          <?php } elseif ($_smarty_tpl->getValue('_connection') == "page_activities_manage") {?>
            <button type="button" class="btn btn-danger js_activities-permission-revoke" data-id="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
              <i class="fa fa-trash mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Revoke Permission");?>

            </button>

          <?php }?>
          <!-- buttons -->
        </div>
        <div class="mt5">
          <span class="name js_user-popover" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_user')['user_name'];
if ($_smarty_tpl->getValue('_search')) {?>?ref=qs<?php }?>">
              <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {?>
                <?php echo $_smarty_tpl->getValue('_user')['user_name'];?>

              <?php } else { ?>
                <?php echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];?>

              <?php }?>
            </a>
          </span>
          <?php if ($_smarty_tpl->getValue('_user')['user_verified']) {?>
            <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_user')['user_subscribed']) {?>
            <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_user')['permission']) {?><span class="badge bg-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_user')['permission']));?>
</span><?php }?>
        </div>
        <?php if ($_smarty_tpl->getValue('_connection') != "me" && $_smarty_tpl->getValue('_user')['mutual_friends_count'] > 0) {?>
          <div>
            <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
"><?php echo $_smarty_tpl->getValue('_user')['mutual_friends_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("mutual friends");?>
</span>
          </div>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('_donation')) {?>
          <div>
            <span class="badge bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('_donation'),2));?>
</span>
            <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('_donation_time');?>
"><?php echo $_smarty_tpl->getValue('_donation_time');?>
</span>
          </div>
        <?php }?>
      </div>
    </div>
  </li>
<?php }
}
}
