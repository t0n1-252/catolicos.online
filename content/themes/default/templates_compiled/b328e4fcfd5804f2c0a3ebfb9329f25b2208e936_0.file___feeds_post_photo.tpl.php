<?php
/* Smarty version 5.4.1, created on 2025-04-17 06:19:05
  from 'file:__feeds_post_photo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68009d59112d96_28815364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b328e4fcfd5804f2c0a3ebfb9329f25b2208e936' => 
    array (
      0 => '__feeds_post_photo.tpl',
      1 => 1744139733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 5,
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
  ),
))) {
function content_68009d59112d96_28815364 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- post body -->
<div class="post-body <?php if ($_smarty_tpl->getValue('_lightbox')) {?>pt0<?php }?>">

  <!-- post header -->
  <div class="post-header">
    <!-- post picture -->
    <div class="post-avatar">
      <?php if ($_smarty_tpl->getValue('post')['is_anonymous']) {?>
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
      <?php } else { ?>
        <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->getValue('post')['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('post')['post_author_picture'];?>
);">
        </a>
        <?php if ($_smarty_tpl->getValue('post')['post_author_online']) {?><i class="fa fa-circle online-dot"></i><?php }?>
      <?php }?>
    </div>
    <!-- post picture -->

    <!-- post meta -->
    <div class="post-meta">
      <!-- post author -->
      <?php if ($_smarty_tpl->getValue('post')['is_anonymous']) {?>
        <span class="post-author"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Anonymous");?>
</span>
      <?php } else { ?>
        <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->getValue('post')['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('post')['user_id'];?>
">
          <a class="post-author" href="<?php echo $_smarty_tpl->getValue('post')['post_author_url'];?>
"><?php echo $_smarty_tpl->getValue('post')['post_author_name'];?>
</a>
        </span>
        <?php if ($_smarty_tpl->getValue('post')['post_author_verified']) {?>
          <span class="verified-badge" data-bs-toggle="tooltip" title='<?php if ($_smarty_tpl->getValue('post')['user_type'] == "user") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Page");
}?>'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('post')['user_subscribed']) {?>
          <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          </span>
        <?php }?>
      <?php }?>
      <!-- post author -->

      <!-- post time & location & privacy -->
      <div class="post-time">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('post')['time'];?>
"><?php echo $_smarty_tpl->getValue('post')['time'];?>
</a>

        <?php if ($_smarty_tpl->getValue('post')['location']) {?>
          ·
          <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->getValue('post')['location'];?>
</span>
        <?php }?>

        -
        <?php if ($_smarty_tpl->getValue('post')['privacy'] == "me") {?>
          <i class="fa fa-lock" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>
'></i>
        <?php } elseif ($_smarty_tpl->getValue('post')['privacy'] == "friends") {?>
          <i class="fa fa-users" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>'></i>
        <?php } elseif ($_smarty_tpl->getValue('post')['privacy'] == "public") {?>
          <i class="fa fa-globe" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>
'></i>
        <?php } elseif ($_smarty_tpl->getValue('post')['privacy'] == "custom") {?>
          <i class="fa fa-cog" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom People");?>
'></i>
        <?php }?>
      </div>
      <!-- post time & location & privacy -->
    </div>
    <!-- post meta -->
  </div>
  <!-- post header -->

  <!-- photo -->
  <?php if (!$_smarty_tpl->getValue('_lightbox')) {?>
    <div class="mt10 clearfix">
      <div class="pg_wrapper">
        <div class="pg_1x <?php if ($_smarty_tpl->getValue('photo')['blur']) {?>x-blured<?php }?>">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" data-context="<?php if ($_smarty_tpl->getValue('photo')['is_single']) {?>album<?php } else { ?>post<?php }?>">
            <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
">
          </a>
        </div>
      </div>
    </div>
  <?php }?>
  <!-- photo -->

  <!-- post stats -->
  <div class="post-stats clearfix">
    <!-- reactions stats -->
    <?php if ($_smarty_tpl->getValue('photo')['reactions_total_count'] > 0) {?>
      <div class="float-start" data-toggle="modal" data-url="posts/who_reacts.php?<?php if ($_smarty_tpl->getValue('photo')['is_single']) {?>post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];
} else { ?>photo_id=<?php echo $_smarty_tpl->getValue('photo')['photo_id'];
}?>">
        <div class="reactions-stats">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('photo')['reactions'], 'reaction_count', false, 'reaction_type');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction_type')->value => $_smarty_tpl->getVariable('reaction_count')->value) {
$foreach0DoElse = false;
?>
            <?php if ($_smarty_tpl->getValue('reaction_count') > 0) {?>
              <div class="reactions-stats-item">
                <div class="inline-emoji no_animation">
                  <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction_type')), (int) 0, $_smarty_current_dir);
?>
                </div>
              </div>
            <?php }?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          <!-- reactions count -->
          <span>
            <?php echo $_smarty_tpl->getValue('photo')['reactions_total_count_formatted'];?>

          </span>
          <!-- reactions count -->
        </div>
      </div>
    <?php }?>
    <!-- reactions stats -->

    <!-- comments & shares -->
    <span class="float-end">
      <!-- comments -->
      <span class="pointer js_comments-toggle">
        <i class="fa fa-comments"></i> <?php echo $_smarty_tpl->getValue('photo')['comments_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comments");?>

      </span>
      <!-- comments -->

      <!-- shares -->
      <span class="pointer ml10 <?php if ($_smarty_tpl->getValue('post')['shares'] == 0) {?>x-hidden<?php }?>" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
        <i class="fa fa-share"></i> <?php echo $_smarty_tpl->getValue('post')['shares_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shares");?>

      </span>
      <!-- shares -->
    </span>
    <!-- comments & shares -->
  </div>
  <!-- post stats -->

  <!-- post actions -->
  <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
    <div class="post-actions clearfix">
      <!-- reactions -->
      <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->getValue('photo')['i_react']) {?>js_unreact-<?php if ($_smarty_tpl->getValue('photo')['is_single']) {?>post<?php } else { ?>photo<?php }
}?>" data-reaction="<?php echo $_smarty_tpl->getValue('photo')['i_reaction'];?>
">
        <!-- reaction-btn -->
        <div class="reaction-btn">
          <?php if (!$_smarty_tpl->getValue('photo')['i_react']) {?>
            <div class="reaction-btn-icon">
              <i class="far fa-smile fa-fw action-icon"></i>
            </div>
            <span class="reaction-btn-name d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("React");?>
</span>
          <?php } else { ?>
            <div class="reaction-btn-icon">
              <div class="inline-emoji no_animation">
                <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('photo')['i_reaction']), (int) 0, $_smarty_current_dir);
?>
              </div>
            </div>
            <span class="reaction-btn-name" style="color: <?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('photo')['i_reaction']]['color'];?>
;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('photo')['i_reaction']]['title']);?>
</span>
          <?php }?>
        </div>
        <!-- reaction-btn -->

        <!-- reactions-container -->
        <div class="reactions-container">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reactions_enabled'), 'reaction');
$_smarty_tpl->getVariable('reaction')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('reaction')->iteration++;
$foreach1Backup = clone $_smarty_tpl->getVariable('reaction');
?>
            <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->getVariable('reaction')->iteration;?>
 js_react-<?php if ($_smarty_tpl->getValue('photo')['is_single']) {?>post<?php } else { ?>photo<?php }?>" data-reaction="<?php echo $_smarty_tpl->getValue('reaction')['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->getValue('reaction')['color'];?>
" data-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reaction')['title']);?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction')['reaction']), (int) 0, $_smarty_current_dir);
?>
            </div>
          <?php
$_smarty_tpl->setVariable('reaction', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <!-- reactions-container -->
      </div>
      <!-- reactions -->

      <!-- comment -->
      <span class="action-btn js_comment <?php if ($_smarty_tpl->getValue('post')['comments_disabled']) {?>x-hidden<?php }?>">
        <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comment",'class'=>"action-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comment");?>
</span>
      </span>
      <!-- comment -->

      <!-- share -->
      <?php if ($_smarty_tpl->getValue('post')['privacy'] == "public") {?>
        <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
&photo_id=<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"action-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
          <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>
</span>
        </div>
      <?php }?>
      <!-- share -->
    </div>
  <?php }?>
  <!-- post actions -->
</div>

<!-- post footer -->
<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
  <div class="post-footer">
    <!-- comments -->
    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_is_photo'=>(!$_smarty_tpl->getValue('photo')['is_single']) ? true : false), (int) 0, $_smarty_current_dir);
?>
    <!-- comments -->
  </div>
<?php } else { ?>
  <div class="post-footer">
    <div class="post-comments">
      <div class="pb10">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/signin"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Please log in to like, share and comment!");?>
</a>
      </div>
    </div>
  </div>
<?php }?>
<!-- post footer --><?php }
}
