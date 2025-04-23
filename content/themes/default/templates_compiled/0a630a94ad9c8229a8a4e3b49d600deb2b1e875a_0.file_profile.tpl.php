<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:36:18
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d025fc1c0_40748332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a630a94ad9c8229a8a4e3b49d600deb2b1e875a' => 
    array (
      0 => 'profile.tpl',
      1 => 1744139730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__svg_icons.tpl' => 70,
    'file:__feeds_photo.tpl' => 2,
    'file:_footer_mini.tpl' => 2,
    'file:_publisher.tpl' => 2,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 2,
    'file:__feeds_user.tpl' => 5,
    'file:__feeds_page.tpl' => 2,
    'file:__feeds_group.tpl' => 2,
    'file:_need_subscription.tpl' => 6,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_video.tpl' => 2,
    'file:__feeds_product.tpl' => 1,
    'file:_no_data.tpl' => 7,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_68004d025fc1c0_40748332 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar mt20">
      <?php $_smarty_tpl->renderSubTemplate('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header">
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          <?php if ($_smarty_tpl->getValue('profile')['user_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->getValue('profile')['user_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('profile')['user_cover_lightbox']) {?>js_lightbox<?php }?>" data-init-position="<?php echo $_smarty_tpl->getValue('profile')['user_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('profile')['user_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->getValue('profile')['user_cover'];?>
" alt="<?php echo $_smarty_tpl->getValue('profile')['name'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
                <div class="dropdown-menu action-dropdown-menu">
                  <!-- upload -->
                  <div class="dropdown-item pointer js_x-uploader" data-handle="cover-user">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Photo");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload a new photo");?>
</div>
                  </div>
                  <!-- upload -->
                  <!-- select -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=cover&type=user&id=<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Photo");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select a photo");?>
</div>
                  </div>
                  <!-- select -->
                </div>
              </div>
              <div class="profile-cover-position <?php if (!$_smarty_tpl->getValue('profile')['user_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="user" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->getValue('profile')['user_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-user"></i>
              </div>
            </div>
            <!-- buttons -->

            <!-- loaders -->
            <div class="profile-cover-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="profile-cover-position-loader">
              <i class="fa fa-arrows-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Drag to reposition cover");?>

            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
          <img <?php if ($_smarty_tpl->getValue('profile')['user_picture_id']) {?> <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('profile')['user_picture_lightbox']) {?>class="js_lightbox" <?php }?> data-id="<?php echo $_smarty_tpl->getValue('profile')['user_picture_id'];?>
" data-context="album" data-image="<?php echo $_smarty_tpl->getValue('profile')['user_picture_full'];?>
" <?php } elseif (!$_smarty_tpl->getValue('profile')['user_picture_default']) {?> class="js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->getValue('profile')['user_picture'];?>
" <?php }?> src="<?php echo $_smarty_tpl->getValue('profile')['user_picture'];?>
" alt="<?php echo $_smarty_tpl->getValue('profile')['name'];?>
">

          <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <!-- buttons -->
            <div class="profile-avatar-change">
              <i class="fa fa-camera" data-bs-toggle="dropdown" data-display="static"></i>
              <div class="dropdown-menu action-dropdown-menu">
                <!-- upload -->
                <div class="dropdown-item pointer js_x-uploader" data-handle="picture-user">
                  <div class="action">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Photo");?>

                  </div>
                  <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload a new photo");?>
</div>
                </div>
                <!-- upload -->
                <!-- select -->
                <div class="dropdown-item pointer" data-toggle="modal" data-url="users/photos.php?filter=avatar&type=user&id=<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                  <div class="action">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Photo");?>

                  </div>
                  <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select a photo");?>
</div>
                </div>
                <!-- select -->
              </div>
            </div>
            <div class="profile-avatar-crop <?php if ($_smarty_tpl->getValue('profile')['user_picture_default'] || !$_smarty_tpl->getValue('profile')['user_picture_id']) {?>x-hidden<?php }?>">
              <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->getValue('profile')['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete <?php if ($_smarty_tpl->getValue('profile')['user_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
            </div>
            <!-- buttons -->
            <!-- loaders -->
            <div class="profile-avatar-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
"><?php echo $_smarty_tpl->getValue('profile')['name'];?>
</a>
          <?php if ($_smarty_tpl->getValue('profile')['user_verified']) {?>
            <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"45px",'height'=>"45px"), (int) 0, $_smarty_current_dir);
?>
            </span>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('profile')['user_subscribed']) {?>
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('profile')['package_name']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Member");?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            </a>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('profile')['custom_user_group']) {?>
            <a class="badge bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('profile')['custom_user_group']['user_group_title']);?>
</a>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
            <?php if ($_smarty_tpl->getValue('user')->_data['user_id'] != $_smarty_tpl->getValue('profile')['user_id']) {?>
              <!-- add friend -->
              <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                <?php if ($_smarty_tpl->getValue('profile')['we_friends']) {?>
                  <button type="button" class="btn btn-md rounded-pill btn-success btn-delete js_friend-remove" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <i class="fa fa-check"></i>
                    <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>
</span>
                  </button>
                <?php } elseif ($_smarty_tpl->getValue('profile')['he_request']) {?>
                  <button type="button" class="btn btn-md rounded-pill btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <i class="fa fa-user-plus"></i>
                    <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Confirm");?>
</span>
                  </button>
                  <button type="button" class="btn btn-md rounded-pill btn-danger js_friend-decline" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <i class="fa fa-times"></i>
                    <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</span>
                  </button>
                <?php } elseif ($_smarty_tpl->getValue('profile')['i_request']) {?>
                  <button type="button" class="btn btn-md rounded-pill btn-light js_friend-cancel" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <i class="fa fa-clock"></i>
                    <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sent");?>
</span>
                  </button>
                <?php } elseif (!$_smarty_tpl->getValue('profile')['friendship_declined']) {?>
                  <button type="button" class="btn btn-md rounded-pill btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <i class="fa fa-user-plus"></i>
                    <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Friend");?>
</span>
                  </button>
                <?php }?>
              <?php }?>
              <!-- add friend -->

              <!-- follow -->
              <?php if ($_smarty_tpl->getValue('profile')['i_follow']) {?>
                <button type="button" class="btn btn-md rounded-pill btn-light js_unfollow" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                  <i class="fa fa-check"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Following");?>
</span>
                </button>
              <?php } else { ?>
                <button type="button" class="btn btn-md rounded-pill btn-light js_follow" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                  <i class="fa fa-rss"></i>
                  <span class="d-none d-xxl-inline-block ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Follow");?>
</span>
                </button>
              <?php }?>
              <!-- follow -->

              <!-- message -->
              <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
                <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('profile')['user_privacy_chat'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_chat'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                  <button type="button" class="btn btn-icon rounded-pill btn-light mlr5 js_chat-start" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('profile')['name'];?>
" data-link="<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->getValue('profile')['user_picture'];?>
">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-messages",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <?php if ($_smarty_tpl->getValue('profile')['chat_price']) {?><small class="ml5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('profile')['chat_price']);?>
</small><?php }?>
                  </button>
                <?php }?>
              <?php }?>
              <!-- message -->

              <!-- poke & report & block menu -->
              <div class="d-inline-block dropdown">
                <button type="button" class="btn btn-icon rounded-pill btn-light" data-bs-toggle="dropdown" data-display="static">
                  <i class="fa fa-ellipsis-v fa-fw"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end action-dropdown-menu">
                  <!-- poke -->
                  <?php if ($_smarty_tpl->getValue('system')['pokes_enabled'] && !$_smarty_tpl->getValue('profile')['i_poked']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_privacy_poke'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_poke'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                      <div class="dropdown-item pointer js_poke" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('profile')['name'];?>
">
                        <div class="action">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"poke",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Poke");?>

                        </div>
                        <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Let them know you are here");?>
</div>
                      </div>
                    <?php }?>
                  <?php }?>
                  <!-- poke -->
                  <!-- share -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="modules/share.php?node_type=user&node_username=<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share this profile");?>
</div>
                  </div>
                  <!-- share -->
                  <!-- report -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=user&id=<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"report",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Report");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Report this to admins");?>
</div>
                  </div>
                  <!-- report -->
                  <!-- block -->
                  <div class="dropdown-item pointer js_block-user" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                    <div class="action">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"block",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Block");?>

                    </div>
                    <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This user won't be able to reach you");?>
</div>
                  </div>
                  <!-- block -->
                  <!-- manage -->
                  <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit in Admin Panel");?>

                    </a>
                  <?php } elseif ($_smarty_tpl->getValue('user')->_is_moderator) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/modcp/users/edit/<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit_profile",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit in Moderator Panel");?>

                    </a>
                  <?php }?>
                  <!-- manage -->
                </div>
              </div>
              <!-- poke & report & block menu -->
            <?php } else { ?>
              <!-- edit -->
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile" class="btn btn-icon btn-rounded btn-light">
                <i class="fa fa-pencil-alt fa-fw"></i>
              </a>
              <!-- edit -->
            <?php }?>
          <?php }?>
        </div>
        <!-- profile-buttons -->
      </div>
      <!-- profile-header -->

      <!-- profile-tabs -->
      <div class="profile-tabs-wrapper d-flex justify-content-evenly">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
" <?php if ($_smarty_tpl->getValue('view') == '') {?>class="active" <?php }?>>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Timeline");?>
</span>
        </a>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>friends<?php } else { ?>followers<?php }?>" <?php if ($_smarty_tpl->getValue('view') == "friends" || $_smarty_tpl->getValue('view') == "followers" || $_smarty_tpl->getValue('view') == "followings") {?>class="active" <?php }?>>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <span class="ml5 d-none d-xxl-inline-block"><?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?></span>
        </a>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/photos" <?php if ($_smarty_tpl->getValue('view') == "photos" || $_smarty_tpl->getValue('view') == "albums" || $_smarty_tpl->getValue('view') == "album") {?>class="active" <?php }?>>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</span>
        </a>
        <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/videos" <?php if ($_smarty_tpl->getValue('view') == "videos" || $_smarty_tpl->getValue('view') == "reels") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</span>
          </a>
        <?php } elseif ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/reels" <?php if ($_smarty_tpl->getValue('view') == "reels") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('profile')['can_sell_products']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/products" <?php if ($_smarty_tpl->getValue('view') == "products") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Products");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/likes" <?php if ($_smarty_tpl->getValue('view') == "likes") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Likes");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/groups" <?php if ($_smarty_tpl->getValue('view') == "groups") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</span>
          </a>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/events" <?php if ($_smarty_tpl->getValue('view') == "events") {?>class="active" <?php }?>>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="ml5 d-none d-xxl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</span>
          </a>
        <?php }?>
      </div>
      <!-- profile-tabs -->

      <!-- profile-content -->
      <div class="row">
        <!-- view content -->
        <?php if ($_smarty_tpl->getValue('view') == '') {?>

          <!-- left panel -->
          <div class="col-lg-4 order-2 order-lg-1">
            <!-- panel [profile completion] -->
            <?php if ((null !== ($_smarty_tpl->getValue('profile')['profile_completion'] ?? null)) && $_smarty_tpl->getValue('profile')['profile_completion'] < 100) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <span class="float-end"><?php echo $_smarty_tpl->getValue('profile')['profile_completion'];?>
%</span>
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Profile Completion");?>
</strong>
                  <div class="progress mt5">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->getValue('profile')['profile_completion'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->getValue('profile')['profile_completion'];?>
%"></div>
                  </div>
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->getValue('system')['verification_for_posts']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->getValue('profile')['user_verified']) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/verification">
                          <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verify your account to add content");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verify your account to add content");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <div class="mb5">
                    <?php if ($_smarty_tpl->getValue('profile')['user_picture_default']) {?>
                      <span class="text-link js_profile-image-trigger">
                        <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your profile picture");?>

                      </span>
                    <?php } else { ?>
                      <i class="fas fa-check-circle green mr5"></i>
                      <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your profile picture");?>
</span>
                    <?php }?>
                  </div>
                  <div class="mb5">
                    <?php if ($_smarty_tpl->getValue('profile')['user_cover_default']) {?>
                      <span class="text-link js_profile-cover-trigger">
                        <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your profile cover");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your profile cover");?>
</span>
                      <?php }?>
                  </div>
                  <?php if ($_smarty_tpl->getValue('system')['biography_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->getValue('profile')['user_biography']) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile">
                          <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your biography");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your biography");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <div class="mb5">
                    <?php if (!$_smarty_tpl->getValue('profile')['user_birthdate']) {?>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile">
                        <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your birthdate");?>

                      </a>
                    <?php } else { ?>
                      <i class="fas fa-check-circle green mr5"></i>
                      <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your birthdate");?>
</span>
                    <?php }?>
                  </div>
                  <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->getValue('profile')['user_relationship']) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile">
                          <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your relationship");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your relationship");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['work_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->getValue('profile')['user_work_title'] || !$_smarty_tpl->getValue('profile')['user_work_place']) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/work">
                          <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your work info");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your work info");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['location_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->getValue('profile')['user_current_city'] || !$_smarty_tpl->getValue('profile')['user_hometown']) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/location">
                          <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your location info");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your location info");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['education_info_enabled']) {?>
                    <div class="mb5">
                      <?php if (!$_smarty_tpl->getValue('profile')['user_edu_major'] || !$_smarty_tpl->getValue('profile')['user_edu_school']) {?>
                        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/profile/education">
                          <i class="fas fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your education info");?>

                        </a>
                      <?php } else { ?>
                        <i class="fas fa-check-circle green mr5"></i>
                        <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add your education info");?>
</span>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php }?>
            <!-- panel [profile completion] -->

            <!-- subscribe -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('user')->_data['user_id'] != $_smarty_tpl->getValue('profile')['user_id'] && $_smarty_tpl->getValue('profile')['has_subscriptions_plans']) {?>
              <div class="d-grid">
                <button class="btn btn-primary rounded rounded-pill mb20" data-toggle="modal" data-url="monetization/controller.php?do=get_plans&node_id=<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
&node_type=profile" data-size="large">
                  <i class="fa fa-money-check-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SUBSCRIBE");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("STARTING FROM");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('profile')['user_monetization_min_price'],2));?>
)
                </button>
              </div>
            <?php }?>
            <!-- subscribe -->

            <!-- tips -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('user')->_data['user_id'] != $_smarty_tpl->getValue('profile')['user_id'] && $_smarty_tpl->getValue('profile')['can_receive_tips'] && $_smarty_tpl->getValue('profile')['user_tips_enabled']) {?>
              <div class="d-grid">
                <button type="button" class="btn btn-primary rounded-pill mb20" data-toggle="modal" data-url="#send-tip" data-options='{ "id": "<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"}'>
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tip",'class'=>"white-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send a Tip");?>

                </button>
              </div>
            <?php }?>
            <!-- tips -->

            <!-- gifts -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('user')->_data['user_id'] != $_smarty_tpl->getValue('profile')['user_id'] && $_smarty_tpl->getValue('system')['gifts_enabled']) {?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_send_gifts'] && ($_smarty_tpl->getValue('profile')['user_privacy_gifts'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_gifts'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends']))) {?>
                <div class="d-grid">
                  <button type="button" class="btn btn-primary rounded-pill mb20" data-toggle="modal" data-url="#gifts" data-options='{ "uid": <?php echo $_smarty_tpl->getValue('profile')["user_id"];?>
 }'>
                    <i class="fas fa-gift fa-lg mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send a Gift");?>

                  </button>
                </div>
              <?php }?>
            <?php }?>
            <!-- gifts -->

            <!-- panel [about] -->
            <div class="card">
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('system')['biography_info_enabled']) {?>
                  <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('is_empty')($_smarty_tpl->getValue('profile')['user_biography'])) {?>
                    <div class="about-bio">
                      <div class="js_readmore overflow-hidden">
                        <?php echo nl2br((string) $_smarty_tpl->getValue('profile')['user_biography'], (bool) 1);?>

                      </div>
                    </div>
                  <?php }?>
                <?php }?>

                <ul class="about-list">
                  <!-- posts -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('profile')['posts_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>

                    </div>
                  </li>
                  <!-- posts -->
                  <!-- photos -->
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('profile')['photos_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                    </div>
                  </li>
                  <!-- photos -->
                  <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
                    <!-- videos -->
                    <li>
                      <div class="about-list-item">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('profile')['videos_count']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>

                      </div>
                    </li>
                    <!-- videos -->
                  <?php }?>
                  <!-- info -->
                  <?php if ($_smarty_tpl->getValue('system')['work_info_enabled']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_work_title']) {?>
                      <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_work'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_work'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php echo $_smarty_tpl->getValue('profile')['user_work_title'];?>

                            <?php if ($_smarty_tpl->getValue('profile')['user_work_place']) {?>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("at");?>

                              <?php if ($_smarty_tpl->getValue('profile')['user_work_url']) {?>
                                <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_work_url'];?>
"><?php echo $_smarty_tpl->getValue('profile')['user_work_place'];?>
</a>
                              <?php } else { ?>
                                <span><?php echo $_smarty_tpl->getValue('profile')['user_work_place'];?>
</span>
                              <?php }?>
                            <?php }?>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['location_info_enabled']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_current_city']) {?>
                      <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_location'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_location'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"home",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Lives in");?>
 <span class="text-info"><?php echo $_smarty_tpl->getValue('profile')['user_current_city'];?>
</span>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getValue('profile')['user_hometown']) {?>
                      <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_location'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_location'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
 <span class="text-info"><?php echo $_smarty_tpl->getValue('profile')['user_hometown'];?>
</span>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['education_info_enabled']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_edu_major']) {?>
                      <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_education'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_education'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Studied");?>
 <?php echo $_smarty_tpl->getValue('profile')['user_edu_major'];?>

                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("at");?>
 <span class="text-info"><?php echo $_smarty_tpl->getValue('profile')['user_edu_school'];?>
</span>
                            <?php if ($_smarty_tpl->getValue('profile')['user_edu_class']) {?>
                              <div class="details">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Class of");?>
 <?php echo $_smarty_tpl->getValue('profile')['user_edu_class'];?>

                              </div>
                            <?php }?>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if (!$_smarty_tpl->getValue('system')['genders_disabled']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_gender'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_gender'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"genders",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php echo $_smarty_tpl->getValue('profile')['user_gender'];?>

                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_relationship']) {?>
                      <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_relationship'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_relationship'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                        <li>
                          <div class="about-list-item">
                            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"relationship",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                            <?php if ($_smarty_tpl->getValue('profile')['user_relationship'] == "relationship") {?>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In a relationship");?>

                            <?php } elseif ($_smarty_tpl->getValue('profile')['user_relationship'] == "complicated") {?>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("It's complicated");?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('profile')['user_relationship']));?>

                            <?php }?>
                          </div>
                        </li>
                      <?php }?>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('profile')['user_birthdate'] != null) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_birthdate'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_birthdate'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"birthday",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('profile')['user_birthdate'],$_smarty_tpl->getValue('system')['system_date_format']);?>

                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['website_info_enabled']) {?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_website']) {?>
                      <li>
                        <div class="about-list-item">
                          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"website",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                          <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_website'];?>
"><?php echo $_smarty_tpl->getValue('profile')['user_website'];?>
</a>
                        </div>
                      </li>
                    <?php }?>
                  <?php }?>
                  <li>
                    <div class="about-list-item">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followed by");?>

                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers"><?php echo $_smarty_tpl->getValue('profile')['followers_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("people");?>
</a>
                    </div>
                  </li>
                  <!-- info -->
                </ul>
              </div>
            </div>
            <!-- panel [about] -->

            <!-- custom fields [basic] -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
              <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_basic'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_basic'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"profile",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Basic Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_fields')['basic'], 'custom_field');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach0DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                          <li>
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox" && $_smarty_tpl->getValue('custom_field')['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
"><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [basic] -->

            <!-- custom fields [work] -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['work']) {?>
              <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_work'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_work'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_fields')['work'], 'custom_field');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach1DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                          <li>
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox" && $_smarty_tpl->getValue('custom_field')['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
"><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [work] -->

            <!-- custom fields [location] -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['location']) {?>
              <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_location'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_location'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_fields')['location'], 'custom_field');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach2DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                          <li>
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox" && $_smarty_tpl->getValue('custom_field')['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
"><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [location] -->

            <!-- custom fields [education] -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['education']) {?>
              <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_education'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_education'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Education Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_fields')['education'], 'custom_field');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach3DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                          <li>
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox" && $_smarty_tpl->getValue('custom_field')['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
"><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [education] -->

            <!-- custom fields [other] -->
            <?php if ($_smarty_tpl->getValue('custom_fields')['other']) {?>
              <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_other'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_other'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"biography",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Other Info");?>
</strong>
                  </div>
                  <div class="card-body">
                    <ul class="about-list">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('custom_fields')['other'], 'custom_field');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach4DoElse = false;
?>
                        <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                          <li>
                            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('custom_field')['label']);?>
</strong><br>
                            <?php if ($_smarty_tpl->getValue('custom_field')['type'] == "textbox" && $_smarty_tpl->getValue('custom_field')['is_link']) {?>
                              <a href="<?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
"><?php echo $_smarty_tpl->getValue('custom_field')['value'];?>
</a>
                            <?php } elseif ($_smarty_tpl->getValue('custom_field')['type'] == "multipleselectbox") {?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value_string'];?>

                            <?php } else { ?>
                              <?php echo $_smarty_tpl->getValue('custom_field')['value'];?>

                            <?php }?>
                          </li>
                        <?php }?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- custom fields [other] -->

            <!-- social links -->
            <?php if ($_smarty_tpl->getValue('system')['social_info_enabled']) {?>
              <?php if ($_smarty_tpl->getValue('profile')['user_social_facebook'] || $_smarty_tpl->getValue('profile')['user_social_twitter'] || $_smarty_tpl->getValue('profile')['user_social_youtube'] || $_smarty_tpl->getValue('profile')['user_social_instagram'] || $_smarty_tpl->getValue('profile')['user_social_twitch'] || $_smarty_tpl->getValue('profile')['user_social_linkedin'] || $_smarty_tpl->getValue('profile')['user_social_vkontakte']) {?>
                <div class="card">
                  <div class="card-header bg-transparent">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"social_share",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Social Links");?>
</strong>
                  </div>
                  <div class="card-body text-center">
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_facebook']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_facebook'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"facebook",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_twitter']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_twitter'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitter",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_youtube']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_youtube'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"youtube",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_instagram']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_instagram'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"instagram",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_twitch']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_twitch'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitch",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_linkedin']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_linkedin'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linkedin",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->getValue('profile')['user_social_vkontakte']) {?>
                      <a target="_blank" href="<?php echo $_smarty_tpl->getValue('profile')['user_social_vkontakte'];?>
" class="btn-icon-social">
                        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"vk",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      </a>
                    <?php }?>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- social links -->

            <!-- search -->
            <div class="card">
              <div class="card-header bg-transparent">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</strong>
              </div>
              <div class="card-body">
                <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/search" method="get">
                  <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
" />
                    <button type="submit" class="btn btn-primary">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- search -->

            <!-- photos -->
            <?php if ($_smarty_tpl->getValue('profile')['photos']) {?>
              <div class="card panel-photos">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a></strong>
                  <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
                    <small>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/photos" class="float-end">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage");?>

                      </a>
                    </small>
                  <?php }?>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['photos'], 'photo');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach5DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- photos -->

            <!-- friends -->
            <?php if ($_smarty_tpl->getValue('profile')['friends_count'] > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>
</a></strong>
                  <span class="badge rounded-pill bg-light text-primary ml5"><?php echo $_smarty_tpl->getValue('profile')['friends_count'];?>
</span>
                  <?php if ($_smarty_tpl->getValue('profile')['mutual_friends_count'] && $_smarty_tpl->getValue('profile')['mutual_friends_count'] > 0) {?>
                    <small>
                      (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
"><?php echo $_smarty_tpl->getValue('profile')['mutual_friends_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("mutual friends");?>
</span>)
                    </small>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
                    <small>
                      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends" class="float-end">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage");?>

                      </a>
                    </small>
                  <?php }?>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['friends'], '_friend');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_friend')->value) {
$foreach6DoElse = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_friend')['user_name'];?>
">
                            <img src="<?php echo $_smarty_tpl->getValue('_friend')['user_picture'];?>
" />
                            <div class="name">
                              <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_friend')['user_name'];
} else {
echo $_smarty_tpl->getValue('_friend')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_friend')['user_lastname'];
}?>
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- friends -->

            <!-- subscribers -->
            <?php if ($_smarty_tpl->getValue('profile')['subscribers_count'] > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscribers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>
</a></strong>
                  <span class="badge rounded-pill bg-light text-primary ml5"><?php echo $_smarty_tpl->getValue('profile')['subscribers_count'];?>
</span>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['subscribers'], '_subscriber');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_subscriber')->value) {
$foreach7DoElse = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_subscriber')['user_name'];?>
">
                            <img src="<?php echo $_smarty_tpl->getValue('_subscriber')['user_picture'];?>
" />
                            <div class="name">
                              <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_subscriber')['user_name'];
} else {
echo $_smarty_tpl->getValue('_subscriber')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_subscriber')['user_lastname'];
}?>
                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- subscribers -->

            <!-- pages -->
            <?php if ($_smarty_tpl->getValue('system')['pages_enabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['pages']) > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/likes"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Likes");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['pages'], '_page');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach8DoElse = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/<?php echo $_smarty_tpl->getValue('_page')['page_name'];?>
">
                            <img alt="<?php echo $_smarty_tpl->getValue('_page')['page_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_page')['page_picture'];?>
" />
                            <div class="name" title="<?php echo $_smarty_tpl->getValue('_page')['page_title'];?>
">
                              <?php echo $_smarty_tpl->getValue('_page')['page_title'];?>

                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- pages -->

            <!-- groups -->
            <?php if ($_smarty_tpl->getValue('system')['groups_enabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['groups']) > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['groups'], '_group');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach9DoElse = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_group')['group_name'];?>
">
                            <img alt="<?php echo $_smarty_tpl->getValue('_group')['group_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_group')['group_picture'];?>
" />
                            <div class="name" title="<?php echo $_smarty_tpl->getValue('_group')['group_title'];?>
">
                              <?php echo $_smarty_tpl->getValue('_group')['group_title'];?>

                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- groups -->

            <!-- events -->
            <?php if ($_smarty_tpl->getValue('system')['events_enabled'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['events']) > 0) {?>
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/events"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</a></strong>
                </div>
                <div class="card-body ptb10 plr10">
                  <div class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['events'], '_event');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach10DoElse = false;
?>
                      <div class="col-3 col-lg-4">
                        <div class="circled-user-box">
                          <a class="user-box" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_event')['event_id'];?>
">
                            <img alt="<?php echo $_smarty_tpl->getValue('_event')['event_title'];?>
" src="<?php echo $_smarty_tpl->getValue('_event')['event_picture'];?>
" />
                            <div style="" class="name" title="<?php echo $_smarty_tpl->getValue('_event')['event_title'];?>
">
                              <?php echo $_smarty_tpl->getValue('_event')['event_title'];?>

                            </div>
                          </a>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>
            <!-- events -->

            <!-- mini footer -->
            <?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <!-- mini footer -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-lg-8 order-1 order-lg-2">

            <!-- publisher -->
            <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
              <?php if ($_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('profile')['user_id']) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_node_can_monetize_content'=>$_smarty_tpl->getValue('user')->_data['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->getValue('user')->_data['user_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->getValue('user')->_data['user_monetization_plans'],'_privacy'=>true), (int) 0, $_smarty_current_dir);
?>
              <?php } elseif ($_smarty_tpl->getValue('system')['wall_posts_enabled'] && ($_smarty_tpl->getValue('profile')['user_privacy_wall'] == 'friends' && $_smarty_tpl->getValue('profile')['we_friends'] || $_smarty_tpl->getValue('profile')['user_privacy_wall'] == 'public')) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"user",'_id'=>$_smarty_tpl->getValue('profile')['user_id'],'_privacy'=>true), (int) 0, $_smarty_current_dir);
?>
              <?php }?>

            <?php }?>
            <!-- publisher -->

            <!-- pinned post -->
            <?php if ($_smarty_tpl->getValue('pinned_post')) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->getValue('pinned_post')), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <!-- pinned post -->

            <!-- posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('profile')['user_id']), (int) 0, $_smarty_current_dir);
?>
            <!-- posts -->

          </div>
          <!-- right panel -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "friends") {?>
          <!-- friends -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('profile')['friends_count'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followings"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('profile')['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscribers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscriptions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->getValue('profile')['friends']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['friends'], '_user');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach11DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_top_friends'=>true,'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->getValue('profile')['friends_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="friends" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have friends");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- friends -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "followers") {?>
          <!-- followers -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('profile')['followers_count'];?>
</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followings"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('profile')['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscribers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscriptions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->getValue('profile')['followers']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['followers'], '_user');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach12DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>

                  <?php if ($_smarty_tpl->getValue('profile')['followers_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="followers" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have followers");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- followers -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "followings") {?>
          <!-- followings -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followings">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('profile')['followings_count'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('profile')['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscribers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscriptions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->getValue('profile')['followings']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['followings'], '_user');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach13DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>

                  <?php if ($_smarty_tpl->getValue('profile')['followings_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="followings" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have followings");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- followings -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "subscribers") {?>
          <!-- subscribers -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followings"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscribers">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('profile')['subscribers_count'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscriptions"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions");?>
</a>
                    </li>
                  <?php }?>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->getValue('profile')['subscribers']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['subscribers'], '_user');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach14DoElse = false;
?>
                      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->getValue('_user')["connection"],'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->getValue('profile')['subscribers_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="subscribers" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-type="user">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have subscribers");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- subscribers -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "subscriptions") {?>
          <!-- subscriptions -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon with-nav">
                <!-- panel title -->
                <div class="mb20">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"friends",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>

                </div>
                <!-- panel title -->

                <!-- panel nav -->
                <ul class="nav nav-tabs">
                  <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/friends"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>
</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/followings"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->getValue('profile')['has_subscriptions_plans']) {?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscribers"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers");?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/subscriptions">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions");?>

                      <span class="badge rounded-pill bg-info"><?php echo $_smarty_tpl->getValue('profile')['subscriptions_count'];?>
</span>
                    </a>
                  </li>
                </ul>
                <!-- panel nav -->
              </div>
              <div class="card-body pb0">
                <?php if ($_smarty_tpl->getValue('profile')['subscriptions']) {?>
                  <ul class="row">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['subscriptions'], '_subscription');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_subscription')->value) {
$foreach15DoElse = false;
?>
                      <?php if ($_smarty_tpl->getValue('_subscription')['node_type'] == "profile") {?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_user'=>$_smarty_tpl->getValue('_subscription'),'_tpl'=>"box",'_connection'=>'unsubscribe','_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php } elseif ($_smarty_tpl->getValue('_subscription')['node_type'] == "page") {?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_page'=>$_smarty_tpl->getValue('_subscription'),'_tpl'=>"box",'_connection'=>'unsubscribe','_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php } elseif ($_smarty_tpl->getValue('_subscription')['node_type'] == "group") {?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_group'=>$_smarty_tpl->getValue('_subscription'),'_tpl'=>"box",'_connection'=>'unsubscribe','_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php }?>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php if ($_smarty_tpl->getValue('profile')['subscriptions_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="subscriptions" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php }?>
                <?php } else { ?>
                  <p class="text-center text-muted mt10">
                    <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have subscriptions");?>

                  </p>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- subscriptions -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "photos") {?>
          <!-- photos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->getValue('profile')['needs_subscription']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->getValue('profile')['user_id'],'price'=>$_smarty_tpl->getValue('profile')['user_monetization_min_price']), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/albums"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->getValue('profile')['photos']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['photos'], 'photo');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach16DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_can_pin'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-post see-more mt20 js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-type='user'>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have photos");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- photos -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "albums") {?>
          <!-- albums -->
          <div class="col-12">
            <?php if ($_smarty_tpl->getValue('profile')['needs_subscription']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->getValue('profile')['user_id'],'price'=>$_smarty_tpl->getValue('profile')['user_monetization_min_price']), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="card">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/albums"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->getValue('profile')['albums']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['albums'], 'album');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('album')->value) {
$foreach17DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['albums']) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-type='user'>
                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have albums");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "album") {?>
          <!-- albums -->
          <div class="col-12">
            <?php if ($_smarty_tpl->getValue('profile')['needs_subscription']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->getValue('profile')['user_id'],'price'=>$_smarty_tpl->getValue('profile')['user_monetization_min_price']), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="card panel-photos">
                <div class="card-header with-icon with-nav">
                  <!-- back to albums -->
                  <div class="float-end">
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/albums" class="btn btn-md btn-light">
                      <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Back to Albums");?>

                    </a>
                  </div>
                  <!-- back to albums -->

                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/photos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/albums"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Albums");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php $_smarty_tpl->renderSubTemplate('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- albums -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "videos") {?>
          <!-- videos -->
          <div class="col-12">
            <?php if ($_smarty_tpl->getValue('profile')['needs_subscription']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->getValue('profile')['user_id'],'price'=>$_smarty_tpl->getValue('profile')['user_monetization_min_price']), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="card panel-videos">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/videos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</a>
                    </li>
                    <?php if ($_smarty_tpl->getValue('system')['reels_enabled']) {?>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/reels"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</a>
                      </li>
                    <?php }?>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->getValue('profile')['videos']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['videos'], 'video');
$foreach18DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach18DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="videos" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-type='user'>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have videos");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- videos -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "reels") {?>
          <!-- reels -->
          <div class="col-12">
            <?php if ($_smarty_tpl->getValue('profile')['needs_subscription']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->getValue('profile')['user_id'],'price'=>$_smarty_tpl->getValue('profile')['user_monetization_min_price']), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="card panel-videos">
                <div class="card-header with-icon with-nav">
                  <!-- panel title -->
                  <div class="mb20">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>

                  </div>
                  <!-- panel title -->

                  <!-- panel nav -->
                  <ul class="nav nav-tabs">
                    <?php if ($_smarty_tpl->getValue('system')['videos_enabled']) {?>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/videos"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</a>
                      </li>
                    <?php }?>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/reels"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</a>
                    </li>
                  </ul>
                  <!-- panel nav -->
                </div>
                <div class="card-body">
                  <?php if ($_smarty_tpl->getValue('profile')['reels']) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['reels'], 'video');
$foreach19DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('video')->value) {
$foreach19DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_is_reel'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                    <!-- see-more -->
                    <div class="alert alert-post see-more js_see-more" data-get="videos_reels" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
" data-type='user'>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                      <div class="loader loader_small x-hidden"></div>
                    </div>
                    <!-- see-more -->
                  <?php } else { ?>
                    <p class="text-center text-muted mt10">
                      <?php echo $_smarty_tpl->getValue('profile')['name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have reels");?>

                    </p>
                  <?php }?>
                </div>
              </div>
            <?php }?>
          </div>
          <!-- reels -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "products") {?>
          <!-- products -->
          <div class="col-12">
            <?php if ($_smarty_tpl->getValue('profile')['needs_subscription']) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>'profile','node_id'=>$_smarty_tpl->getValue('profile')['user_id'],'price'=>$_smarty_tpl->getValue('profile')['user_monetization_min_price']), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <!-- search -->
              <div class="card">
                <div class="card-header bg-transparent">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                  <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</strong>
                </div>
                <div class="card-body">
                  <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/search" method="get">
                    <div class="input-group">
                      <input type="text" name="query" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
">
                      <input type="hidden" name="filter" value="product">
                      <button type="submit" class="btn btn-primary">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- search -->

              <?php if ($_smarty_tpl->getValue('posts')) {?>
                <ul class="row">
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach20DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach20DoElse = false;
?>
                    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>

                <!-- see-more -->
                <div class="alert alert-post see-more js_see-more" data-get="products_profile" data-id="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
                <!-- see-more -->
              <?php } else { ?>
                <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php }?>
            <?php }?>
          </div>
          <!-- products -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "likes") {?>
          <!-- likes -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Likes");?>

                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_pages'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_pages'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['pages']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['pages'], '_page');
$foreach21DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_page')->value) {
$foreach21DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['pages']) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="profile_pages" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                  <?php }?>
                <?php } else { ?>
                  <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- likes -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "groups") {?>
          <!-- groups -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>

                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_groups'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_groups'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['groups']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['groups'], '_group');
$foreach22DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_group')->value) {
$foreach22DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['groups']) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="profile_groups" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                  <?php }?>
                <?php } else { ?>
                  <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- groups -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "events") {?>
          <!-- events -->
          <div class="col-12">
            <div class="card">
              <div class="card-header with-icon">
                <!-- panel title -->
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>

                <!-- panel title -->
              </div>
              <div class="card-body">
                <?php if ($_smarty_tpl->getValue('profile')['user_id'] == $_smarty_tpl->getValue('user')->_data['user_id'] || $_smarty_tpl->getValue('profile')['user_privacy_events'] == "public" || ($_smarty_tpl->getValue('profile')['user_privacy_events'] == "friends" && $_smarty_tpl->getValue('profile')['we_friends'])) {?>
                  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['events']) > 0) {?>
                    <ul class="row">
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('profile')['events'], '_event');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_event')->value) {
$foreach23DoElse = false;
?>
                        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_darker'=>true), (int) 0, $_smarty_current_dir);
?>
                      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>

                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('profile')['events']) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
                      <!-- see-more -->
                      <div class="alert alert-post see-more js_see-more" data-get="profile_events" data-uid="<?php echo $_smarty_tpl->getValue('profile')['user_id'];?>
">
                        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
                        <div class="loader loader_small x-hidden"></div>
                      </div>
                      <!-- see-more -->
                    <?php }?>
                  <?php } else { ?>
                    <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                  <?php }?>
                <?php } else { ?>
                  <?php $_smarty_tpl->renderSubTemplate('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
              </div>
            </div>
          </div>
          <!-- events -->

        <?php } elseif ($_smarty_tpl->getValue('view') == "search") {?>

          <!-- left panel -->
          <div class="col-lg-4 order-2 order-lg-1">

            <!-- search -->
            <div class="card">
              <div class="card-header bg-transparent">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"search",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</strong>
              </div>
              <div class="card-body">
                <form action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('profile')['user_name'];?>
/search" method="get">
                  <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
" <?php if ($_smarty_tpl->getValue('query')) {?>value="<?php echo $_smarty_tpl->getValue('query');?>
" <?php }?>>
                    <button type="submit" class="btn btn-primary">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>

                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- search -->

            <!-- mini footer -->
            <?php $_smarty_tpl->renderSubTemplate('file:_footer_mini.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <!-- mini footer -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-lg-8 order-1 order-lg-2">

            <!-- posts -->
            <?php $_smarty_tpl->renderSubTemplate('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->getValue('profile')['user_id'],'_title'=>$_smarty_tpl->getSmarty()->getModifierCallback('__')("Search Results"),'_query'=>$_smarty_tpl->getValue('query'),'_filter'=>$_smarty_tpl->getValue('filter')), (int) 0, $_smarty_current_dir);
?>
            <!-- posts -->

          </div>
          <!-- right panel -->

        <?php }?>
        <!-- view content -->
      </div>
      <!-- profile-content -->

      <!-- footer links -->
      <?php if ($_smarty_tpl->getValue('view') != '') {?>
        <?php $_smarty_tpl->renderSubTemplate('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php }?>
      <!-- footer links -->
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('gift')) {?>
  <?php echo '<script'; ?>
>
    $(function() {
      modal('#gift');
    });
  <?php echo '</script'; ?>
>
<?php }
}
}
