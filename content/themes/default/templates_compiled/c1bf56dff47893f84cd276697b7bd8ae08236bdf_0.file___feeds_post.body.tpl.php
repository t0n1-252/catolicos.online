<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:37:02
  from 'file:__feeds_post.body.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d2edff6e7_36307613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1bf56dff47893f84cd276697b7bd8ae08236bdf' => 
    array (
      0 => '__feeds_post.body.tpl',
      1 => 1744139711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 46,
    'file:__feeds_post.text.tpl' => 6,
    'file:__feeds_post.body.tpl' => 2,
    'file:__feeds_post.body.photos.tpl' => 2,
    'file:_need_pro_package.tpl' => 1,
    'file:_need_payment.tpl' => 1,
    'file:_need_subscription.tpl' => 1,
    'file:_need_age_verification.tpl' => 1,
  ),
))) {
function content_68004d2edff6e7_36307613 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- post header -->
<div class="post-header">

  <!-- post picture -->
  <div class="post-avatar">
    <?php if ($_smarty_tpl->getValue('_post')['is_anonymous']) {?>
      <div class="post-avatar-anonymous">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      </div>
    <?php } else { ?>
      <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->getValue('_post')['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('_post')['post_author_picture'];?>
);">
      </a>
      <?php if ($_smarty_tpl->getValue('_post')['post_author_online']) {?><i class="fa fa-circle online-dot"></i><?php }?>
    <?php }?>
  </div>
  <!-- post picture -->

  <!-- post meta -->
  <div class="post-meta">
    <!-- post menu -->
    <?php if ($_smarty_tpl->getValue('user')->_logged_in && !$_smarty_tpl->getValue('_shared') && $_smarty_tpl->getValue('_get') != "posts_information") {?>
      <div class="float-end dropdown">
        <i class="fa fa-chevron-down dropdown-toggle" data-bs-toggle="dropdown" data-display="static"></i>
        <div class="dropdown-menu dropdown-menu-end action-dropdown-menu">
          <?php if ($_smarty_tpl->getValue('_post')['manage_post'] && $_smarty_tpl->getValue('_post')['post_type'] == "product") {?>
            <?php if ($_smarty_tpl->getValue('_post')['product']['available']) {?>
              <div class="dropdown-item pointer js_sold-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Sold");?>
</span>
                </div>
              </div>
            <?php } else { ?>
              <div class="dropdown-item pointer js_unsold-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Available");?>
</span>
                </div>
              </div>
            <?php }?>
            <div class="dropdown-divider"></div>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['manage_post'] && $_smarty_tpl->getValue('_post')['post_type'] == "job") {?>
            <?php if ($_smarty_tpl->getValue('_post')['job']['available']) {?>
              <div class="dropdown-item pointer js_closed-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Closed");?>
</span>
                </div>
              </div>
            <?php } else { ?>
              <div class="dropdown-item pointer js_unclosed-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Available");?>
</span>
                </div>
              </div>
            <?php }?>
            <div class="dropdown-divider"></div>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['manage_post'] && $_smarty_tpl->getValue('_post')['post_type'] == "course") {?>
            <?php if ($_smarty_tpl->getValue('_post')['course']['available']) {?>
              <div class="dropdown-item pointer js_closed-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Closed");?>
</span>
                </div>
              </div>
            <?php } else { ?>
              <div class="dropdown-item pointer js_unclosed-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mark as Available");?>
</span>
                </div>
              </div>
            <?php }?>
            <div class="dropdown-divider"></div>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['i_save']) {?>
            <div href="#" class="dropdown-item pointer js_unsave-post">
              <div class="action no-desc">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"saved",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsave Post");?>
</span>
              </div>
            </div>
          <?php } else { ?>
            <div class="dropdown-item pointer js_save-post">
              <div class="action no-desc">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"saved",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Post");?>
</span>
              </div>
            </div>
          <?php }?>
          <div class="dropdown-divider"></div>
          <?php if ($_smarty_tpl->getValue('_post')['manage_post']) {?>
            <!-- Boost -->
            <?php if ($_smarty_tpl->getValue('system')['packages_enabled'] && !$_smarty_tpl->getValue('_post')['in_group'] && !$_smarty_tpl->getValue('_post')['in_event']) {?>
              <?php if ($_smarty_tpl->getValue('_post')['boosted']) {?>
                <div class="dropdown-item pointer js_unboost-post">
                  <div class="action no-desc">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unboost Post");?>
</span>
                  </div>
                </div>
              <?php } else { ?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_boost_posts']) {?>
                  <div class="dropdown-item pointer js_boost-post">
                    <div class="action no-desc">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost Post");?>
</span>
                    </div>
                  </div>
                <?php } else { ?>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/packages" class="dropdown-item">
                    <div class="action no-desc">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"boosted",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boost Post");?>
</span>
                    </div>
                  </a>
                <?php }?>
              <?php }?>
            <?php }?>
            <!-- Boost -->
            <!-- Pin -->
            <?php if (!$_smarty_tpl->getValue('_post')['is_anonymous']) {?>
              <?php if ((!$_smarty_tpl->getValue('_post')['in_group'] && !$_smarty_tpl->getValue('_post')['in_event']) || ($_smarty_tpl->getValue('_post')['in_group'] && $_smarty_tpl->getValue('_post')['is_group_admin']) || ($_smarty_tpl->getValue('_post')['in_event'] && $_smarty_tpl->getValue('_post')['is_event_admin'])) {?>
                <?php if ($_smarty_tpl->getValue('_post')['pinned']) {?>
                  <div class="dropdown-item pointer js_unpin-post">
                    <div class="action no-desc">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pin",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unpin Post");?>
</span>
                    </div>
                  </div>
                <?php } else { ?>
                  <div class="dropdown-item pointer js_pin-post">
                    <div class="action no-desc">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pin",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pin Post");?>
</span>
                    </div>
                  </div>
                <?php }?>
              <?php }?>
            <?php }?>
            <!-- Pin -->
            <!-- Edit -->
            <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "article") {?>
              <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/edit/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" class="dropdown-item pointer">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Blog");?>
</span>
                </div>
              </a>
            <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "product") {?>
              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/product.php?do=edit&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Product");?>
</span>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "funding") {?>
              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/funding.php?do=edit&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Funding");?>
</span>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "offer") {?>
              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/offer.php?do=edit&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Offer");?>
</span>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "job") {?>
              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/job.php?do=edit&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Job");?>
</span>
                </div>
              </div>
            <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "course") {?>
              <div class="dropdown-item pointer" data-toggle="modal" data-url="posts/course.php?do=edit&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Course");?>
</span>
                </div>
              </div>
            <?php } else { ?>
              <div class="dropdown-item pointer js_edit-post">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"edit",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Post");?>
</span>
                </div>
              </div>
            <?php }?>
            <!-- Edit -->
            <!-- Monetization -->
            <?php if ($_smarty_tpl->getValue('_post')['can_be_for_subscriptions']) {?>
              <?php if ($_smarty_tpl->getValue('_post')['for_subscriptions']) {?>
                <div class="dropdown-item pointer js_unmonetize-post">
                  <div class="action no-desc">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For Everyone");?>
</span>
                  </div>
                </div>
              <?php } else { ?>
                <div class="dropdown-item pointer js_monetize-post">
                  <div class="action no-desc">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For Subscribers Only");?>
</span>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- Monetization -->
            <!-- Delete -->
            <div class="dropdown-item pointer js_delete-post">
              <div class="action no-desc">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Post");?>
</span>
              </div>
            </div>
            <!-- Delete -->
            <!-- Hide -->
            <?php if ($_smarty_tpl->getValue('_post')['user_type'] == "user" && !$_smarty_tpl->getValue('_post')['in_group'] && !$_smarty_tpl->getValue('_post')['in_event'] && !$_smarty_tpl->getValue('_post')['is_anonymous']) {?>
              <?php if ($_smarty_tpl->getValue('_post')['is_hidden']) {?>
                <div class="dropdown-item pointer js_allow-post">
                  <div class="action no-desc">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"unhide",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow on Timeline");?>
</span>
                  </div>
                </div>
              <?php } else { ?>
                <div class="dropdown-item pointer js_disallow-post">
                  <div class="action no-desc">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"hide",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hide from Timeline");?>
</span>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- Hide -->
            <!-- Disable Comments -->
            <?php if ($_smarty_tpl->getValue('_post')['comments_disabled']) {?>
              <div class="dropdown-item pointer js_enable-post-comments">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comments",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn on Commenting");?>
</span>
                </div>
              </div>
            <?php } else { ?>
              <div class="dropdown-item pointer js_disable-post-comments">
                <div class="action no-desc">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comments",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn off Commenting");?>
</span>
                </div>
              </div>
            <?php }?>
            <!-- Disable Comments -->
          <?php } else { ?>
            <?php if ($_smarty_tpl->getValue('_post')['user_type'] == "user" && !$_smarty_tpl->getValue('_post')['is_anonymous']) {?>
              <div class="dropdown-item pointer js_hide-author" data-author-id="<?php echo $_smarty_tpl->getValue('_post')['user_id'];?>
" data-author-name="<?php echo $_smarty_tpl->getValue('_post')['post_author_name'];?>
">
                <div class="action">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"block",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unfollow");?>
 <?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_post')['user_name'];
} else {
echo $_smarty_tpl->getValue('_post')['user_firstname'];
}?>
                </div>
                <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stop seeing posts but stay friends");?>
</div>
              </div>
            <?php }?>
            <div class="dropdown-item pointer js_hide-post">
              <div class="action">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"hide",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hide this post");?>

              </div>
              <div class="action-desc"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See fewer posts like this");?>
</div>
            </div>
            <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=post&id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
              <div class="action no-desc">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"report",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Report post");?>
</span>
              </div>
            </div>
          <?php }?>
          <div class="dropdown-divider"></div>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" target="_blank" class="dropdown-item">
            <div class="action no-desc">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"link",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Open post in new tab");?>
</span>
            </div>
          </a>
          <?php if ($_smarty_tpl->getValue('_post')['is_anonymous'] && ($_smarty_tpl->getValue('user')->_is_admin || $_smarty_tpl->getValue('user')->_is_moderator)) {?>
            <div class="dropdown-divider"></div>
            <a href="<?php echo $_smarty_tpl->getValue('_post')['post_author_url'];?>
" target="_blank" class="dropdown-item">
              <div class="action no-desc">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon mr10",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Open Author Profile");?>
</span>
              </div>
            </a>
          <?php }?>
        </div>
      </div>
    <?php }?>
    <!-- post menu -->

    <!-- post author -->
    <?php if ($_smarty_tpl->getValue('_post')['is_anonymous']) {?>
      <span class="post-author"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Anonymous");?>
</span>
    <?php } else { ?>
      <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->getValue('_post')['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_post')['user_id'];?>
">
        <a class="post-author" href="<?php echo $_smarty_tpl->getValue('_post')['post_author_url'];?>
"><?php echo $_smarty_tpl->getValue('_post')['post_author_name'];?>
</a>
      </span>
      <?php if ($_smarty_tpl->getValue('_post')['post_author_verified']) {?>
        <span class="verified-badge" data-bs-toggle="tooltip" title='<?php if ($_smarty_tpl->getValue('_post')['user_type'] == "user") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Page");
}?>'>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        </span>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('_post')['user_subscribed']) {?>
        <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_post')['package_name']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Member");?>
'>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        </span>
      <?php }?>
    <?php }?>
    <!-- post author -->

    <!-- post-title -->
    <span class="post-title">
      <?php if (!$_smarty_tpl->getValue('_shared') && $_smarty_tpl->getValue('_post')['post_type'] == "shared") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("shared");?>

        <?php if ($_smarty_tpl->getValue('_post')['origin']['is_anonymous']) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Anonymous post");?>

        <?php } else { ?>
          <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->getValue('_post')['origin']['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_post')['origin']['user_id'];?>
">
            <a href="<?php echo $_smarty_tpl->getValue('_post')['origin']['post_author_url'];?>
">
              <?php echo $_smarty_tpl->getValue('_post')['origin']['post_author_name'];?>

            </a><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("'s");?>

          </span>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['origin']['post_id'];?>
">
            <?php if ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'link') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("link");?>


            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'media') {?>
              <?php if ($_smarty_tpl->getValue('_post')['origin']['media']['media_type'] != "soundcloud") {?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("video");?>

              <?php } else { ?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("song");?>

              <?php }?>

            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'photos') {?>
              <?php if ($_smarty_tpl->getValue('_post')['origin']['photos_num'] > 1) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("photos");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("photo");
}?>

            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'album') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("album");?>


            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'poll') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("poll");?>


            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'reel') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("reel");?>


            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'video') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("video");?>


            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'audio') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("audio");?>


            <?php } elseif ($_smarty_tpl->getValue('_post')['origin']['post_type'] == 'file') {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("file");?>


            <?php } else { ?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("post");?>

            <?php }?>
          </a>
        <?php }?>

      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "link") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("shared a link");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "live") {?>
        <?php if ($_smarty_tpl->getValue('_post')['live']['live_ended']) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("was live");?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("is live now");?>

        <?php }?>

      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "photos") {?>
        <?php if ($_smarty_tpl->getValue('_post')['photos_num'] == 1) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added a photo");?>

        <?php } else { ?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added");?>
 <?php echo $_smarty_tpl->getValue('_post')['photos_num'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("photos");?>

        <?php }?>

      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "album") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added");?>
 <?php echo $_smarty_tpl->getValue('_post')['photos_num'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("photos to the album");?>
: <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_post')['album']['path'];?>
/album/<?php echo $_smarty_tpl->getValue('_post')['album']['album_id'];?>
"><?php echo $_smarty_tpl->getValue('_post')['album']['title'];?>
</a>

      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "profile_picture") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated the profile picture");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "profile_cover") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated the cover photo");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "page_picture") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated page picture");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "page_cover") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated cover photo");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "group_picture") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated group picture");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "group_cover") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated group cover");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "event_cover") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("updated event cover");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "article") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added blog");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->getValue('_post')['blog']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('_post')['blog']['category_url'];?>
" class="blog-category text-no-underline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_post')['blog']['category_name']);?>
</a>

      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "product") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added product for sale");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "funding") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("raised funding request");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "offer") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added offer");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "job") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added job");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "course") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added course");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "poll") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added poll");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "reel") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added reel");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "video") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added video");?>
 <span class="badge rounded-pill badge-lg bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_post')['video']['category_name']);?>
</span>

      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "audio") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added audio");?>


      <?php } elseif ($_smarty_tpl->getValue('_post')['post_type'] == "file") {?>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("added file");?>


      <?php }?>

      <?php if ($_smarty_tpl->getValue('_get') != 'posts_group' && $_smarty_tpl->getValue('_post')['in_group']) {?>
        <i class="fa fa-chevron-right ml5 mr5"></i>
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_post')['group_name'];?>
"><?php echo $_smarty_tpl->getValue('_post')['group_title'];?>
</a>
      <?php } elseif ($_smarty_tpl->getValue('_get') != 'posts_event' && $_smarty_tpl->getValue('_post')['in_event']) {?>
        <i class="fa fa-chevron-right ml5 mr5"></i>
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_post')['event_id'];?>
"><?php echo $_smarty_tpl->getValue('_post')['event_title'];?>
</a>
      <?php } elseif ($_smarty_tpl->getValue('_post')['in_wall']) {?>
        <i class="fa fa-chevron-right ml5 mr5"></i>
        <span class="js_user-popover" data-type="user" data-uid="<?php echo $_smarty_tpl->getValue('_post')['wall_id'];?>
">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_post')['wall_username'];?>
"><?php echo $_smarty_tpl->getValue('_post')['wall_fullname'];?>
</a>
        </span>
      <?php }?>
    </span>
    <!-- post-title -->

    <!-- post feeling -->
    <?php if ($_smarty_tpl->getValue('_post')['feeling_action']) {?>
      <span class="post-title">
        <?php if ($_smarty_tpl->getValue('_post')['post_type'] != '' && $_smarty_tpl->getValue('_post')['post_type'] != "map" && $_smarty_tpl->getValue('_post')['post_type'] != "media") {?> & <?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("is");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_post')["feeling_action"]);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_post')["feeling_value"]);?>
 <i class="twa twa-lg twa-<?php echo $_smarty_tpl->getValue('_post')['feeling_icon'];?>
"></i>
      </span>
    <?php }?>
    <!-- post feeling -->

    <!-- post time & location & privacy -->
    <div class="post-time">
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('_post')['time'];?>
"><?php echo $_smarty_tpl->getValue('_post')['time'];?>
</a>
      <?php if ($_smarty_tpl->getValue('_post')['location']) {?>
        - <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->getValue('_post')['location'];?>
</span>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['post_translation_enabled']) {?>
        - <span class="text-link js_translator"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Translate");?>
</span>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('system')['newsfeed_source'] == "default") {?>
        -
        <?php if (!$_smarty_tpl->getValue('_post')['is_anonymous'] && !$_smarty_tpl->getValue('_shared') && $_smarty_tpl->getValue('_post')['manage_post'] && $_smarty_tpl->getValue('_post')['user_type'] == 'user' && !$_smarty_tpl->getValue('_post')['in_group'] && !$_smarty_tpl->getValue('_post')['in_event'] && $_smarty_tpl->getValue('_post')['post_type'] != "article" && $_smarty_tpl->getValue('_post')['post_type'] != "product" && $_smarty_tpl->getValue('_post')['post_type'] != "funding") {?>
          <!-- privacy -->
          <?php if ($_smarty_tpl->getValue('_post')['privacy'] == "me") {?>
            <div class="btn-group" data-bs-toggle="tooltip" data-value="me" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Only Me");?>
'>
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                <i class="btn-group-icon fa fa-lock"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-left">
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Public");?>
' data-value="public">
                  <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                </div>
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Followers");
}?>' data-value="friends">
                  <i class="fa fa-users"></i> <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                </div>
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Only Me");?>
' data-value="me">
                  <i class="fa fa-lock"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>

                </div>
              </div>
            </div>
          <?php } elseif ($_smarty_tpl->getValue('_post')['privacy'] == "friends") {?>
            <div class="btn-group" data-bs-toggle="tooltip" data-value="friends" title='<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Followers");
}?>'>
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                <i class="btn-group-icon fa fa-users"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-left">
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Public");?>
' data-value="public">
                  <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                </div>
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Followers");
}?>' data-value="friends">
                  <i class="fa fa-users"></i> <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                </div>
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Only Me");?>
' data-value="me">
                  <i class="fa fa-lock"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>

                </div>
              </div>
            </div>
          <?php } elseif ($_smarty_tpl->getValue('_post')['privacy'] == "public") {?>
            <div class="btn-group" data-bs-toggle="tooltip" data-value="public" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Public");?>
'>
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                <i class="btn-group-icon fa fa-globe"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-left">
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Public");?>
' data-value="public">
                  <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                </div>
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Followers");
}?>' data-value="friends">
                  <i class="fa fa-users"></i> <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                </div>
                <div class="dropdown-item pointer js_edit-privacy" data-title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with: Only Me");?>
' data-value="me">
                  <i class="fa fa-lock"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>

                </div>
              </div>
            </div>
          <?php }?>

          <!-- privacy -->
        <?php } else { ?>
          <?php if ($_smarty_tpl->getValue('_post')['privacy'] == "me") {?>
            <i class="fa fa-lock" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>
'></i>
          <?php } elseif ($_smarty_tpl->getValue('_post')['privacy'] == "friends") {?>
            <i class="fa fa-users" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>'></i>
          <?php } elseif ($_smarty_tpl->getValue('_post')['privacy'] == "public") {?>
            <i class="fa fa-globe" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>
'></i>
          <?php } elseif ($_smarty_tpl->getValue('_post')['privacy'] == "custom") {?>
            <i class="fa fa-cog" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom People");?>
'></i>
          <?php }?>
        <?php }?>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('_post')['for_subscriptions']) {?>
        <span class="badge bg-light text-primary ml5"><i class="fa fa-star mr5"></i><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscriptions") ?? '', 'UTF-8');?>
</span>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('_post')['is_paid']) {?>
        <span class="badge bg-light text-primary ml5"><i class="fa-solid fa-sack-dollar mr5"></i><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid") ?? '', 'UTF-8');?>
</span>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('_post')['for_adult']) {?>
        <span class="badge bg-light text-primary ml5"><i class="fa-solid fa-eye-slash mr5"></i><?php echo mb_strtoupper((string) $_smarty_tpl->getSmarty()->getModifierCallback('__')("Adult") ?? '', 'UTF-8');?>
</span>
      <?php }?>

      <?php if ($_smarty_tpl->getValue('system')['posts_reviews_enabled'] && $_smarty_tpl->getValue('post')['post_type'] != "product") {?>
        <?php if ($_smarty_tpl->getValue('_post')['post_rate']) {?>
          <span class="review-stars small ml5">
            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_post')['post_rate'] >= 1) {?>checked<?php }?>"></i>
            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_post')['post_rate'] >= 2) {?>checked<?php }?>"></i>
            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_post')['post_rate'] >= 3) {?>checked<?php }?>"></i>
            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_post')['post_rate'] >= 4) {?>checked<?php }?>"></i>
            <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_post')['post_rate'] >= 5) {?>checked<?php }?>"></i>
          </span>
          <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('_post')['post_rate'],1);?>
</span>
        <?php }?>
      <?php }?>
    </div>
    <!-- post time & location & privacy -->
  </div>
  <!-- post meta -->
</div>
<!-- post header -->

<?php if (!$_smarty_tpl->getValue('_post')['needs_payment'] && !$_smarty_tpl->getValue('_post')['needs_subscription'] && !$_smarty_tpl->getValue('_post')['needs_age_verification']) {?>

  <?php if (!$_smarty_tpl->getValue('_post')['needs_pro_package']) {?>
    <!-- post text -->
    <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_post')['post_type'],array('product','funding','offer','job','course'))) {?>
      <?php if (!$_smarty_tpl->getValue('_shared')) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('_post')['colored_pattern']) {?>
          <div class="post-colored" <?php if ($_smarty_tpl->getValue('_post')['colored_pattern']['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->getValue('_post')['colored_pattern']['background_color_1'];?>
, <?php echo $_smarty_tpl->getValue('_post')['colored_pattern']['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['colored_pattern']['background_image'];?>
)" <?php }?>>
            <div class="post-colored-text-wrapper js_scroller" data-slimScroll-height="240">
              <div class="post-text" dir="auto" style="color: <?php echo $_smarty_tpl->getValue('_post')['colored_pattern']['text_color'];?>
;">
                <?php echo $_smarty_tpl->getValue('_post')['text'];?>

              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="post-text js_readmore" dir="auto"><?php echo $_smarty_tpl->getValue('_post')['text'];?>
</div>
        <?php }?>
        <div class="post-text-translation x-hidden" dir="auto"></div>
      <?php }?>
    <?php }?>
    <!-- post text -->

    <?php if (!$_smarty_tpl->getValue('_shared') && $_smarty_tpl->getValue('_post')['post_type'] == "shared" && $_smarty_tpl->getValue('_post')['origin']) {?>
      <div class="post-snippet <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_post')['origin']['post_type'],array('product','funding','job','course','poll'))) {?>pb15<?php }?>">
        <?php if ($_smarty_tpl->getValue('_snippet')) {?>
          <div class="post-snippet-toggle text-link js_show-attachments"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show Attachments");?>
</div>
        <?php }?>
        <div <?php if ($_smarty_tpl->getValue('_snippet')) {?>class="x-hidden" <?php }?>>
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_post'=>$_smarty_tpl->getValue('_post')['origin'],'_shared'=>true), (int) 0, $_smarty_current_dir);
?>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "link" && $_smarty_tpl->getValue('_post')['link']) {?>
      <div class="mt10 plr15">
        <div class="post-media">
          <?php if ($_smarty_tpl->getValue('_post')['link']['source_thumbnail']) {?>
            <a class="post-media-image" href="<?php echo $_smarty_tpl->getValue('_post')['link']['source_url'];?>
" target="_blank" rel="nofollow">
              <img src="<?php echo $_smarty_tpl->getValue('_post')['link']['source_thumbnail'];?>
">
              <div class="source"><?php echo mb_strtoupper((string) $_smarty_tpl->getValue('_post')['link']['source_host'] ?? '', 'UTF-8');?>
</div>
            </a>
          <?php }?>
          <div class="post-media-meta">
            <a class="title mb5" href="<?php echo $_smarty_tpl->getValue('_post')['link']['source_url'];?>
" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->getValue('_post')['link']['source_title'];?>
</a>
            <div class="text mb5"><?php echo $_smarty_tpl->getValue('_post')['link']['source_text'];?>
</div>
          </div>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "media" && $_smarty_tpl->getValue('_post')['media']) {?>
      <div class="mt10 plr15">
        <?php if ($_smarty_tpl->getValue('_post')['media']['source_type'] == "photo") {?>
          <div class="post-media">
            <div class="post-media-image">
              <img src="<?php echo $_smarty_tpl->getValue('_post')['media']['source_url'];?>
">
            </div>
            <div class="post-media-meta">
              <div class="source"><a target="_blank" href="<?php echo $_smarty_tpl->getValue('_post')['media']['source_url'];?>
"><?php echo $_smarty_tpl->getValue('_post')['media']['source_provider'];?>
</a></div>
            </div>
          </div>
        <?php } else { ?>
          <?php if ($_smarty_tpl->getValue('_post')['media']['source_provider'] == "YouTube") {?>
            <?php if ($_smarty_tpl->getValue('system')['smart_yt_player']) {?>
              <?php $_tmp_array = $_smarty_tpl->getValue('_post') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['media']['vidoe_id'] = $_smarty_tpl->getSmarty()->getModifierCallback('get_youtube_id')($_smarty_tpl->getValue('_post')['media']['source_html']);
$_smarty_tpl->assign('_post', $_tmp_array, false, NULL);?>
              <div class="youtube-player js_youtube-player" data-id="<?php echo $_smarty_tpl->getValue('_post')['media']['vidoe_id'];?>
">
                <img src="https://i.ytimg.com/vi/<?php echo $_smarty_tpl->getValue('_post')['media']['vidoe_id'];?>
/hqdefault.jpg">
                <div class="play"></div>
              </div>
            <?php } else { ?>
              <div class="post-media">
                <div class="ratio ratio-16x9">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('_post')['media']['source_html'],ENT_QUOTES);?>

                </div>
              </div>
            <?php }?>

          <?php } elseif ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_post')['media']['source_provider'],array("Vimeo","Twitch","Rumble.com","Banned.Video","Brighteon","Odysee","Gab TV"))) {?>
            <div class="post-media">
              <div class="ratio ratio-16x9">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('_post')['media']['source_html'],ENT_QUOTES);?>

              </div>
            </div>
          <?php } elseif ($_smarty_tpl->getValue('_post')['media']['source_provider'] == "Facebook") {?>
            <div class="embed-facebook-wrapper">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('_post')['media']['source_html'],ENT_QUOTES);?>

              <div class="embed-facebook-placeholder ptb30">
                <div class="d-flex justify-content-center">
                  <div class="spinner-grow"></div>
                </div>
              </div>
            </div>
          <?php } else { ?>
            <div class="embed-iframe-wrapper">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('_post')['media']['source_html'],ENT_QUOTES);?>

            </div>
          <?php }?>
        <?php }?>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "live" && $_smarty_tpl->getValue('_post')['live']) {?>
      <?php if ($_smarty_tpl->getValue('system')['save_live_enabled'] && $_smarty_tpl->getValue('_post')['live']['live_ended'] && $_smarty_tpl->getValue('_post')['live']['live_recorded']) {?>
        <div class="overflow-hidden">
          <video class="js_video-plyr" id="video-<?php echo $_smarty_tpl->getValue('_post')['live']['live_id'];
if ($_smarty_tpl->getValue('pinned') || $_smarty_tpl->getValue('boosted')) {?>-<?php echo $_smarty_tpl->getValue('_post')['post_id'];
}?>" <?php if ($_smarty_tpl->getValue('_post')['live']['video_thumbnail']) {?>poster="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['live']['video_thumbnail'];?>
" <?php }?> playsinline controls preload="auto">
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_agora_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['live']['agora_file'];?>
" type="application/x-mpegURL">
          </video>
        </div>
      <?php } else { ?>
        <div class="youtube-player with-live js_lightbox-live">
          <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['live']['video_thumbnail'];?>
">
          <div class="play"></div>
        </div>
      <?php }?>
    <?php }?>

    <?php if (($_smarty_tpl->getValue('_post')['post_type'] == "photos" || $_smarty_tpl->getValue('_post')['post_type'] == "album" || $_smarty_tpl->getValue('_post')['post_type'] == "profile_picture" || $_smarty_tpl->getValue('_post')['post_type'] == "profile_cover" || $_smarty_tpl->getValue('_post')['post_type'] == "page_picture" || $_smarty_tpl->getValue('_post')['post_type'] == "page_cover" || $_smarty_tpl->getValue('_post')['post_type'] == "group_picture" || $_smarty_tpl->getValue('_post')['post_type'] == "group_cover" || $_smarty_tpl->getValue('_post')['post_type'] == "event_cover" || $_smarty_tpl->getValue('_post')['post_type'] == "product" || $_smarty_tpl->getValue('_post')['post_type'] == "combo") && $_smarty_tpl->getValue('_post')['photos_num'] > 0) {?>
      <div class="mt10">
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.body.photos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "map") {?>
      <div class="post-map">
        <iframe width="100%" height="300" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $_smarty_tpl->getValue('system')['geolocation_key'];?>
&amp;q=<?php echo $_smarty_tpl->getValue('_post')['location'];?>
"></iframe>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "article" && $_smarty_tpl->getValue('_post')['blog']) {?>
      <div class="mt10 plr15">
        <div class="post-media">
          <?php if ($_smarty_tpl->getValue('_post')['blog']['cover']) {?>
            <a class="post-media-image" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
/<?php echo $_smarty_tpl->getValue('_post')['blog']['title_url'];?>
">
              <div style="padding-top: 50%; background-size: cover; background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['blog']['cover'];?>
');"></div>
            </a>
          <?php }?>
          <div class="post-media-meta">
            <a class="title mb5" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
/<?php echo $_smarty_tpl->getValue('_post')['blog']['title_url'];?>
"><?php echo $_smarty_tpl->getValue('_post')['blog']['title'];?>
</a>
            <div class="text mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('_post')['blog']['text_snippet'],400);?>
</div>
          </div>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "product" && $_smarty_tpl->getValue('_post')['product']) {?>
      <div class="post-product-container">
        <div class="mtb10 text-xlg">
          <strong><?php echo $_smarty_tpl->getValue('_post')['product']['name'];?>
</strong>
          <?php if ($_smarty_tpl->getValue('_post')['product']['is_digital']) {?>
            <span class="badge bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Digital");?>
</span>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['product']['status'] == "new") {?>
            <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New");?>
</span>
          <?php } else { ?>
            <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Used");?>
</span>
          <?php }?>
        </div>
        <div class="mb20 text-lg text-success">
          <strong>
            <?php if ($_smarty_tpl->getValue('_post')['product']['price'] > 0) {?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['product']['price']);?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free");?>

            <?php }?>
          </strong>
        </div>
        <div class="mb10">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <?php if ($_smarty_tpl->getValue('_post')['product']['available']) {?>
            <?php if ($_smarty_tpl->getValue('_post')['product']['quantity'] > 0) {?>
              <span class="badge badge-lg bg-light text-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In stock");?>
</span>
            <?php } else { ?>
              <span class="badge badge-lg bg-light text-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Out of stock");?>
</span>
            <?php }?>
          <?php } else { ?>
            <span class="badge badge-lg bg-light text-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SOLD");?>
</span>
          <?php }?>
        </div>
        <?php if ($_smarty_tpl->getValue('_post')['product']['location']) {?>
          <div class="mb10">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getValue('_post')['product']['location'];?>

          </div>
        <?php }?>
        <div class="mb20">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"saved",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/market/category/<?php echo $_smarty_tpl->getValue('_post')['product']['category_id'];?>
/<?php echo $_smarty_tpl->getValue('_post')['product']['category_url'];?>
" class="badge badge-lg bg-light text-primary text-no-underline"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_post')['product']['category_name']);?>
</a>
        </div>
        <?php if ($_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
          <div class="mb20">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span class="pointer ml10" data-toggle="modal" data-url="posts/who_reviews.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
              <?php echo $_smarty_tpl->getValue('post')['reviews_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>

            </span>
            <?php if ($_smarty_tpl->getValue('post')['post_rate']) {?>
              <span class="review-stars small ml5">
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 1) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 2) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 3) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 4) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 5) {?>checked<?php }?>"></i>
              </span>
              <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('post')['post_rate'],1);?>
</span>
            <?php }?>
          </div>
        <?php }?>
        <!-- post text -->
        <?php if (!$_smarty_tpl->getValue('_shared')) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
          <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->getValue('_post')['text'];?>
</div>
          <div class="post-text-translation x-hidden" dir="auto"></div>
        <?php }?>
        <!-- post text -->
        <!-- custom fileds -->
        <?php if ($_smarty_tpl->getValue('_post')['custom_fields']['basic']) {?>
          <div class="post-custom-fileds-wrapper mt10">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['custom_fields']['basic'], 'custom_field');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach4DoElse = false;
?>
              <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                <div>
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
                </div>
              <?php }?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </div>
        <?php }?>
        <!-- custom fileds -->
        <?php if ($_smarty_tpl->getValue('_post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
          <div class="mt10 row g-1">
            <?php if ($_smarty_tpl->getValue('system')['market_shopping_cart_enabled']) {?>
              <div class="col-12 <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('_post')['user_type'] == 'user') {?>col-md-9<?php }?> mb5">
                <div class="d-grid">
                  <?php if ($_smarty_tpl->getValue('_post')['product']['available'] && $_smarty_tpl->getValue('_post')['product']['quantity'] > 0) {?>
                    <button type="button" class="btn btn-primary js_shopping-add-to-cart" data-id="<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                      <?php if ($_smarty_tpl->getValue('_post')['product']['is_digital']) {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy & Download");?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy");?>

                      <?php }?>
                    </button>
                  <?php } else { ?>
                    <button type="button" class="btn btn-primary" disabled>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Currently unavailable");?>

                    </button>
                  <?php }?>
                </div>
              </div>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('_post')['user_type'] == 'user') {?>
              <div class="col-12 <?php if ($_smarty_tpl->getValue('system')['market_shopping_cart_enabled']) {?>col-md-3<?php }?>">
                <div class="d-grid">
                  <button type="button" class="btn btn-light js_chat-start" data-uid="<?php echo $_smarty_tpl->getValue('_post')['author_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('_post')['post_author_name'];?>
" data-link="<?php echo $_smarty_tpl->getValue('_post')['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->getValue('_post')['post_author_picture'];?>
">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-messages",'class'=>"main-icon",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                    <?php if (!$_smarty_tpl->getValue('system')['market_shopping_cart_enabled']) {?>
                      <span class="ml10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact Seller");?>
</span>
                    <?php }?>
                  </button>
                </div>
              </div>
            <?php }?>
          </div>
        <?php }?>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "funding" && $_smarty_tpl->getValue('_post')['funding']) {?>
      <div class="mt10">
        <div class="post-media">
          <a class="post-media-image" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" target="_blank">
            <div class="image" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['funding']['cover_image'];?>
');"></div>
            <div class="icon">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"32px",'height'=>"32px"), (int) 0, $_smarty_current_dir);
?>
            </div>
          </a>
        </div>
        <div class="post-funding-meta">
          <div class="funding-title mb10 mt20">
            <?php echo $_smarty_tpl->getValue('_post')['funding']['title'];?>

          </div>
          <div class="funding-completion mb10 mt20">
            <span class="float-end"><?php echo $_smarty_tpl->getValue('_post')['funding']['funding_completion'];?>
%</span>
            <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['funding']['raised_amount']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Raised of");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['funding']['amount']);?>
</strong>
            <div class="progress mt5">
              <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->getValue('_post')['funding']['funding_completion'];?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->getValue('_post')['funding']['funding_completion'];?>
%"></div>
            </div>
          </div>
          <div class="funding-description">
            <!-- post text -->
            <?php if (!$_smarty_tpl->getValue('_shared')) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->getValue('_post')['text'];?>
</div>
              <div class="post-text-translation x-hidden" dir="auto"></div>
            <?php }?>
            <!-- post text -->
          </div>
          <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('_post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <div class="mt10 d-grid">
              <button type="button" class="btn btn-success" data-toggle="modal" data-url="#funding-donate" data-options='{ "post_id": <?php echo $_smarty_tpl->getValue('_post')["post_id"];?>
 }'>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Donate");?>

              </button>
            </div>
          <?php }?>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "offer" && $_smarty_tpl->getValue('_post')['offer']) {?>
      <div class="mt10 plr15">
        <div class="post-media">
          <div class="post-media-image">
            <?php if ($_smarty_tpl->getValue('_post')['photos_num'] == 1) {?>
              <div class="image" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['offer']['thumbnail'];?>
');"></div>
            <?php } else { ?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.body.photos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('_post')['offer']['end_date']) {?>
              <div class="source">
                <i class="far fa-calendar-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expires");?>
: <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('_post')['offer']['end_date'],$_smarty_tpl->getValue('system')['system_date_format']);?>
</strong>
              </div>
            <?php }?>
            <div class="icon">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'width'=>"32px",'height'=>"32px"), (int) 0, $_smarty_current_dir);
?>
            </div>
          </div>
          <div class="post-media-meta">
            <span class="title text-active mb5 mt20"><?php echo $_smarty_tpl->getValue('_post')['offer']['meta_title'];?>
</span>
            <?php if ($_smarty_tpl->getValue('_post')['offer']['price']) {?>
              <div class="text-success mtb5">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
 <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['offer']['price']);?>
</strong>
              </div>
            <?php }?>
            <!-- post text -->
            <?php if (!$_smarty_tpl->getValue('_shared')) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->getValue('_post')['text'];?>
</div>
              <div class="post-text-translation x-hidden" dir="auto"></div>
            <?php }?>
            <!-- post text -->
            <!-- custom fileds -->
            <?php if ($_smarty_tpl->getValue('_post')['custom_fields']['basic']) {?>
              <div class="post-custom-fileds-wrapper mt10">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['custom_fields']['basic'], 'custom_field');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach5DoElse = false;
?>
                  <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                    <div>
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
                    </div>
                  <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </div>
            <?php }?>
            <!-- custom fileds -->
          </div>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "job" && $_smarty_tpl->getValue('_post')['job']) {?>
      <div class="mt10 plr15">
        <div class="post-media">
          <a class="post-media-image" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" target="_blank">
            <div class="image" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['job']['cover_image'];?>
');"></div>
            <div class="source">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['job']['salary_minimum'],$_smarty_tpl->getValue('_post')['job']['salary_minimum_currency']['symbol'],$_smarty_tpl->getValue('_post')['job']['salary_minimum_currency']['dir']);?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['job']['salary_maximum'],$_smarty_tpl->getValue('_post')['job']['salary_maximum_currency']['symbol'],$_smarty_tpl->getValue('_post')['job']['salary_maximum_currency']['dir']);?>
 / <?php echo $_smarty_tpl->getValue('_post')['job']['pay_salary_per_meta'];?>
</strong>
            </div>
            <div class="icon">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'width'=>"32px",'height'=>"32px"), (int) 0, $_smarty_current_dir);
?>
            </div>
          </a>
        </div>
        <div class="post-job-meta">
          <div class="job-title mb10 mt20">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('_post')['job']['title'];?>
</a>
          </div>
          <div class="post-product-wrapper">
            <div class="post-product-details">
              <div class="title">
                <i class="fa fa-map-marker fa-fw mr5" style="color: #1f9cff;"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

              </div>
              <div class="description">
                <?php echo $_smarty_tpl->getValue('_post')['job']['location'];?>

              </div>
            </div>
            <div class="post-product-details">
              <div class="title">
                <i class="fa fa-briefcase fa-fw mr5" style="color: #2bb431;"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>

              </div>
              <div class="description">
                <?php echo $_smarty_tpl->getValue('_post')['job']['type_meta'];?>

              </div>
            </div>
            <div class="post-product-details">
              <div class="title">
                <i class="fa fa-clock fa-fw mr5" style="color: #a038b2;"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>

              </div>
              <div class="description">
                <?php if ($_smarty_tpl->getValue('_post')['job']['available']) {?>
                  <span class="badge bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Open");?>
</span>
                <?php } else { ?>
                  <span class="badge bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed");?>
</span>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="job-description">
            <!-- post text -->
            <?php if (!$_smarty_tpl->getValue('_shared')) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->getValue('_post')['text'];?>
</div>
              <div class="post-text-translation x-hidden" dir="auto"></div>
            <?php }?>
            <!-- post text -->
          </div>
          <!-- custom fileds -->
          <?php if ($_smarty_tpl->getValue('_post')['custom_fields']['basic']) {?>
            <div class="post-custom-fileds-wrapper mt10">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['custom_fields']['basic'], 'custom_field');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach6DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                  <div>
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
                  </div>
                <?php }?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
          <?php }?>
          <!-- custom fileds -->
          <?php if ($_smarty_tpl->getValue('_post')['author_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <div class="mt10 d-grid">
              <button type="button" class="btn btn-primary js_job-apply" data-toggle="modal" data-size="large" data-url="posts/job.php?do=candidates&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" <?php if ($_smarty_tpl->getValue('_post')['job']['candidates_count'] == 0) {?>disabled<?php }?>>
                <i class="fa fa-users mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View Candidates");?>
 (<?php echo $_smarty_tpl->getValue('_post')['job']['candidates_count'];?>
)
              </button>
            </div>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('_post')['job']['available'] && $_smarty_tpl->getValue('_post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <div class="mt10 d-grid">
              <button type="button" class="btn btn-success js_job-apply" data-toggle="modal" data-size="large" data-url="posts/job.php?do=application&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apply Now");?>

              </button>
            </div>
          <?php }?>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "course" && $_smarty_tpl->getValue('_post')['course']) {?>
      <div class="mt10 plr15">
        <div class="post-media">
          <a class="post-media-image" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" target="_blank">
            <div class="image" style="background-image:url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['course']['cover_image'];?>
');"></div>
            <div class="source">
              <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('_post')['course']['fees'],$_smarty_tpl->getValue('_post')['course']['fees_currency']['symbol'],$_smarty_tpl->getValue('_post')['course']['fees_currency']['dir']);?>
</strong>
            </div>
            <div class="icon">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'width'=>"32px",'height'=>"32px"), (int) 0, $_smarty_current_dir);
?>
            </div>
          </a>
        </div>
        <div class="post-course-meta">
          <div class="course-title mb10 mt20">
            <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('_post')['course']['title'];?>
</a>
          </div>
          <div class="post-product-wrapper">
            <div class="post-product-details">
              <div class="title">
                <i class="fa fa-map-marker fa-fw mr5" style="color: #1f9cff;"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

              </div>
              <div class="description">
                <?php echo $_smarty_tpl->getValue('_post')['course']['location'];?>

              </div>
            </div>
            <div class="post-product-details">
              <div class="title">
                <i class="fa fa-clock fa-fw mr5" style="color: #a038b2;"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>

              </div>
              <div class="description">
                <?php if ($_smarty_tpl->getValue('_post')['course']['available']) {?>
                  <span class="badge bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Open");?>
</span>
                <?php } else { ?>
                  <span class="badge bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Closed");?>
</span>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="course-description">
            <!-- post text -->
            <?php if (!$_smarty_tpl->getValue('_shared')) {?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } else { ?>
              <div class="post-text js_readmore text-muted" dir="auto"><?php echo $_smarty_tpl->getValue('_post')['text'];?>
</div>
              <div class="post-text-translation x-hidden" dir="auto"></div>
            <?php }?>
            <!-- post text -->
          </div>
          <!-- custom fileds -->
          <?php if ($_smarty_tpl->getValue('_post')['custom_fields']['basic']) {?>
            <div class="post-custom-fileds-wrapper mt10">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['custom_fields']['basic'], 'custom_field');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('custom_field')->value) {
$foreach7DoElse = false;
?>
                <?php if ($_smarty_tpl->getValue('custom_field')['value']) {?>
                  <div>
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
                  </div>
                <?php }?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
          <?php }?>
          <!-- custom fileds -->
          <?php if ($_smarty_tpl->getValue('_post')['author_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <div class="mt10 d-grid">
              <button type="button" class="btn btn-primary js_course-enroll" data-toggle="modal" data-size="large" data-url="posts/course.php?do=candidates&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
" <?php if ($_smarty_tpl->getValue('_post')['course']['candidates_count'] == 0) {?>disabled<?php }?>>
                <i class="fa fa-users mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View Candidates");?>
 (<?php echo $_smarty_tpl->getValue('_post')['course']['candidates_count'];?>
)
              </button>
            </div>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('_post')['course']['available'] && $_smarty_tpl->getValue('_post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
            <div class="mt10 d-grid">
              <button type="button" class="btn btn-success js_course-enroll" data-toggle="modal" data-size="large" data-url="posts/course.php?do=application&post_id=<?php echo $_smarty_tpl->getValue('_post')['post_id'];?>
">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enroll Now");?>

              </button>
            </div>
          <?php }?>
        </div>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "poll" && $_smarty_tpl->getValue('_post')['poll']) {?>
      <div class="poll-options mt10" data-poll-votes="<?php echo $_smarty_tpl->getValue('_post')['poll']['votes'];?>
">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_post')['poll']['options'], 'option');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('option')->value) {
$foreach8DoElse = false;
?>
          <div class="mb5">
            <div class="poll-option js_poll-vote" data-id="<?php echo $_smarty_tpl->getValue('option')['option_id'];?>
" data-option-votes="<?php echo $_smarty_tpl->getValue('option')['votes'];?>
">
              <div class="percentage-bg" <?php if ($_smarty_tpl->getValue('_post')['poll']['votes'] > 0) {?> style="width: <?php echo ($_smarty_tpl->getValue('option')['votes']/$_smarty_tpl->getValue('_post')['poll']['votes'])*100;?>
%" <?php }?>></div>
              <div class="form-check form-check-inline">
                <input type="radio" name="poll_<?php echo $_smarty_tpl->getValue('_post')['poll']['poll_id'];?>
" id="option_<?php echo $_smarty_tpl->getValue('option')['option_id'];?>
" class="form-check-input" <?php if ($_smarty_tpl->getValue('option')['checked']) {?>checked<?php }?>>
                <label class="form-check-label" for="option_<?php echo $_smarty_tpl->getValue('option')['option_id'];?>
"><?php echo $_smarty_tpl->getValue('option')['text'];?>
</label>
              </div>
            </div>
            <div class="poll-voters">
              <div class="more" data-toggle="modal" data-url="posts/who_votes.php?option_id=<?php echo $_smarty_tpl->getValue('option')['option_id'];?>
">
                <?php echo $_smarty_tpl->getValue('option')['votes'];?>

              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "reel" && $_smarty_tpl->getValue('_post')['reel']) {?>
      <div class="overflow-hidden <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "combo") {?>mt10<?php }?>">
        <video class="js_video-plyr" id="reel-<?php echo $_smarty_tpl->getValue('_post')['reel']['reel_id'];
if ($_smarty_tpl->getValue('pinned') || $_smarty_tpl->getValue('boosted')) {?>-<?php echo $_smarty_tpl->getValue('_post')['post_id'];
}?>" <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>onplay="update_media_views('reel', <?php echo $_smarty_tpl->getValue('_post')['reel']['reel_id'];?>
)" <?php }?> <?php if ($_smarty_tpl->getValue('_post')['reel']['thumbnail']) {?>data-poster="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['thumbnail'];?>
" <?php }?> playsinline controls preload="auto">
          <?php if (empty($_smarty_tpl->getValue('_post')['reel']['source_240p']) && empty($_smarty_tpl->getValue('_post')['reel']['source_360p']) && empty($_smarty_tpl->getValue('_post')['reel']['source_480p']) && empty($_smarty_tpl->getValue('_post')['reel']['source_720p']) && empty($_smarty_tpl->getValue('_post')['reel']['source_1080p']) && empty($_smarty_tpl->getValue('_post')['reel']['source_1440p']) && empty($_smarty_tpl->getValue('_post')['reel']['source_2160p'])) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source'];?>
" type="video/mp4">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_240p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_240p'];?>
" type="video/mp4" size="240">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_360p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_360p'];?>
" type="video/mp4" size="360">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_480p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_480p'];?>
" type="video/mp4" size="480">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_720p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_720p'];?>
" type="video/mp4" size="720">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_1080p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_1080p'];?>
" type="video/mp4" size="1080">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_1440p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_1440p'];?>
" type="video/mp4" size="1440">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['reel']['source_2160p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['reel']['source_2160p'];?>
" type="video/mp4" size="2160">
          <?php }?>
        </video>
      </div>
    <?php }?>

    <?php if (($_smarty_tpl->getValue('_post')['post_type'] == "video" || $_smarty_tpl->getValue('_post')['post_type'] == "combo") && $_smarty_tpl->getValue('_post')['video']) {?>
      <div class="overflow-hidden <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "combo") {?>mt10<?php }?>">
        <video class="js_video-plyr" id="video-<?php echo $_smarty_tpl->getValue('_post')['video']['video_id'];
if ($_smarty_tpl->getValue('pinned') || $_smarty_tpl->getValue('boosted')) {?>-<?php echo $_smarty_tpl->getValue('_post')['post_id'];
}?>" <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>onplay="update_media_views('video', <?php echo $_smarty_tpl->getValue('_post')['video']['video_id'];?>
)" <?php }?> <?php if ($_smarty_tpl->getValue('_post')['video']['thumbnail']) {?>data-poster="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['thumbnail'];?>
" <?php }?> playsinline controls preload="auto">
          <?php if (empty($_smarty_tpl->getValue('_post')['video']['source_240p']) && empty($_smarty_tpl->getValue('_post')['video']['source_360p']) && empty($_smarty_tpl->getValue('_post')['video']['source_480p']) && empty($_smarty_tpl->getValue('_post')['video']['source_720p']) && empty($_smarty_tpl->getValue('_post')['video']['source_1080p']) && empty($_smarty_tpl->getValue('_post')['video']['source_1440p']) && empty($_smarty_tpl->getValue('_post')['video']['source_2160p'])) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source'];?>
" type="video/mp4">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_240p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_240p'];?>
" type="video/mp4" size="240">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_360p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_360p'];?>
" type="video/mp4" size="360">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_480p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_480p'];?>
" type="video/mp4" size="480">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_720p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_720p'];?>
" type="video/mp4" size="720">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_1080p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_1080p'];?>
" type="video/mp4" size="1080">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_1440p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_1440p'];?>
" type="video/mp4" size="1440">
          <?php }?>
          <?php if ($_smarty_tpl->getValue('_post')['video']['source_2160p']) {?>
            <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['video']['source_2160p'];?>
" type="video/mp4" size="2160">
          <?php }?>
        </video>
      </div>
    <?php }?>

    <?php if (($_smarty_tpl->getValue('_post')['post_type'] == "audio" || $_smarty_tpl->getValue('_post')['post_type'] == "combo") && $_smarty_tpl->getValue('_post')['audio']) {?>
      <div class="plr10 <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "combo") {?>mt10<?php }?>">
        <audio class="js_audio" id="audio-<?php echo $_smarty_tpl->getValue('_post')['audio']['audio_id'];?>
" <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>onplay="update_media_views('audio', <?php echo $_smarty_tpl->getValue('_post')['audio']['audio_id'];?>
)" <?php }?> controls preload="auto" style="width: 100%;">
          <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['audio']['source'];?>
" type="audio/mpeg">
          <source src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['audio']['source'];?>
" type="audio/mp3">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your browser does not support HTML5 audio");?>

        </audio>
      </div>
    <?php }?>

    <?php if (($_smarty_tpl->getValue('_post')['post_type'] == "file" || $_smarty_tpl->getValue('_post')['post_type'] == "combo") && $_smarty_tpl->getValue('_post')['file']) {?>
      <div class="post-downloader <?php if ($_smarty_tpl->getValue('_post')['post_type'] == "combo") {?>mt10<?php }?>">
        <div class="icon">
          <i class="fa fa-file-alt fa-2x"></i>
        </div>
        <div class="info">
          <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("File Type");?>
</strong>: <?php ob_start();
echo $_smarty_tpl->getValue('_post')['file']['source'];
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->getSmarty()->getModifierCallback('get_extension')($_prefixVariable1);?>

          <div class="mt10">
            <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_post')['file']['source'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download");?>
</a>
          </div>
        </div>
      </div>

    <?php }?>

  <?php } else { ?>
    <div class="ptb20 plr20">
      <?php $_smarty_tpl->renderSubTemplate('file:_need_pro_package.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_manage'=>true), (int) 0, $_smarty_current_dir);
?>
    </div>
  <?php }?>

<?php } else { ?>

  <?php if ($_smarty_tpl->getValue('_post')['needs_payment']) {?>
    <?php $_smarty_tpl->renderSubTemplate('file:_need_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post_id'=>$_smarty_tpl->getValue('_post')['post_id'],'price'=>$_smarty_tpl->getValue('_post')['post_price'],'paid_text'=>$_smarty_tpl->getValue('_post')['paid_text'],'paid_image'=>$_smarty_tpl->getValue('_post')['paid_image']), (int) 0, $_smarty_current_dir);
?>
  <?php } elseif ($_smarty_tpl->getValue('_post')['needs_subscription']) {?>
    <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node_type'=>$_smarty_tpl->getValue('_post')['needs_subscription_type'],'node_id'=>$_smarty_tpl->getValue('_post')['needs_subscription_id'],'price'=>$_smarty_tpl->getValue('_post')['needs_subscription_price'],'subscriptions_image'=>$_smarty_tpl->getValue('_post')['subscriptions_image']), (int) 0, $_smarty_current_dir);
?>
  <?php } elseif ($_smarty_tpl->getValue('_post')['needs_age_verification']) {?>
    <?php $_smarty_tpl->renderSubTemplate('file:_need_age_verification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <?php }?>

<?php }
}
}
