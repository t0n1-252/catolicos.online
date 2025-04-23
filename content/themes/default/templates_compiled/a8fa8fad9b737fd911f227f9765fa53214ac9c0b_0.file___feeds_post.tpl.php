<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:37:02
  from 'file:__feeds_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d2ed0d518_78265423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8fa8fad9b737fd911f227f9765fa53214ac9c0b' => 
    array (
      0 => '__feeds_post.tpl',
      1 => 1744139737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.body.tpl' => 1,
    'file:__reaction_emojis.tpl' => 3,
    'file:__svg_icons.tpl' => 4,
    'file:__feeds_post.comments.tpl' => 1,
  ),
))) {
function content_68004d2ed0d518_78265423 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if (!$_smarty_tpl->getValue('standalone')) {?><li><?php }?>
  <!-- post -->
  <?php if ($_smarty_tpl->getValue('post')['source'] == "popular") {?>
    <div class="mb10" style="font-size: 11px; color: #999;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Popular");?>
</div>
  <?php } elseif ($_smarty_tpl->getValue('post')['source'] == "discover") {?>
    <div class="mb10" style="font-size: 11px; color: #999;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Suggested for you");?>
</div>
  <?php }?>
  <div class="post 
                <?php if ($_smarty_tpl->getValue('_get') == "posts_profile" && $_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('post')['author_id'] && ($_smarty_tpl->getValue('post')['is_hidden'] || $_smarty_tpl->getValue('post')['is_anonymous'])) {?>is_hidden<?php }?> 
                <?php if ($_smarty_tpl->getValue('boosted')) {?>boosted<?php }?> 
                <?php if (($_smarty_tpl->getValue('post')['is_pending']) || ($_smarty_tpl->getValue('post')['in_group'] && !$_smarty_tpl->getValue('post')['group_approved']) || ($_smarty_tpl->getValue('post')['in_event'] && !$_smarty_tpl->getValue('post')['event_approved'])) {?>pending<?php }?>
            " data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">

    <?php if (($_smarty_tpl->getValue('post')['is_pending']) || ($_smarty_tpl->getValue('post')['in_group'] && !$_smarty_tpl->getValue('post')['group_approved']) || ($_smarty_tpl->getValue('post')['in_event'] && !$_smarty_tpl->getValue('post')['event_approved'])) {?>
      <div class="pending-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Post");?>
">
        <i class="fa fa-clock"></i>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('standalone') && $_smarty_tpl->getValue('pinned')) {?>
      <div class="pin-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pinned Post");?>
">
        <i class="fa fa-bookmark"></i>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('standalone') && $_smarty_tpl->getValue('boosted')) {?>
      <div class="boosted-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted");?>
">
        <i class="fa fa-bullhorn"></i>
      </div>
    <?php }?>

    <!-- memory post -->
    <?php if ($_smarty_tpl->getValue('_get') == "memories") {?>
      <div class="post-memory-header">
        <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('post')['time'];?>
"><?php echo $_smarty_tpl->getValue('post')['time'];?>
</span>
      </div>
    <?php }?>
    <!-- memory post -->

    <!-- post body -->
    <div class="post-body">

      <!-- post top alert -->
      <?php if ($_smarty_tpl->getValue('_get') == "posts_profile" && $_smarty_tpl->getValue('user')->_data['user_id'] == $_smarty_tpl->getValue('post')['author_id'] && ($_smarty_tpl->getValue('post')['is_hidden'] || $_smarty_tpl->getValue('post')['is_anonymous'])) {?>
        <div class="post-top-alert"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only you can see this post");?>
</div>
      <?php }?>
      <!-- post top alert -->

      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.body.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_post'=>$_smarty_tpl->getValue('post'),'_shared'=>false), (int) 0, $_smarty_current_dir);
?>

      <?php if (!$_smarty_tpl->getValue('post')['needs_payment'] && !$_smarty_tpl->getValue('post')['needs_subscription'] && !$_smarty_tpl->getValue('post')['needs_pro_package'] && !$_smarty_tpl->getValue('post')['needs_age_verification']) {?>
        <!-- post stats -->
        <div class="post-stats clearfix">
          <!-- reactions stats -->
          <?php if ($_smarty_tpl->getValue('post')['reactions_total_count'] > 0) {?>
            <div class="float-start mr10" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
              <div class="reactions-stats">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['reactions'], 'reaction_count', false, 'reaction_type');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction_type')->value => $_smarty_tpl->getVariable('reaction_count')->value) {
$foreach2DoElse = false;
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
                  <?php echo $_smarty_tpl->getValue('post')['reactions_total_count_formatted'];?>

                </span>
                <!-- reactions count -->
              </div>
            </div>
          <?php }?>
          <!-- reactions stats -->

          <!-- comments & shares & views & plays & donations -->
          <span class="float-end">
            <!-- comments -->
            <span class="pointer js_comments-toggle">
              <i class="fa fa-comments"></i> <?php echo $_smarty_tpl->getValue('post')['comments_formatted'];?>
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

            <!-- views -->
            <?php if ($_smarty_tpl->getValue('system')['posts_views_enabled']) {?>
              <span class="pointer ml10">
                <i class="fa fa-eye"></i> <?php echo $_smarty_tpl->getValue('post')['views_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Views");?>

              </span>
            <?php }?>
            <!-- views -->

            <!-- video views -->
            <?php if ($_smarty_tpl->getValue('post')['post_type'] == "video") {?>
              <span class="pointer ml10">
                <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->getValue('post')['video']['views'];?>

              </span>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('post')['post_type'] == "shared" && $_smarty_tpl->getValue('post')['origin']['post_type'] == "video") {?>
              <span class="pointer ml10">
                <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->getValue('post')['origin']['video']['views'];?>

              </span>
            <?php }?>
            <!-- video views -->

            <!-- audio views -->
            <?php if ($_smarty_tpl->getValue('post')['post_type'] == "audio") {?>
              <span class="pointer ml10">
                <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->getValue('post')['audio']['views'];?>

              </span>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('post')['post_type'] == "shared" && $_smarty_tpl->getValue('post')['origin']['post_type'] == "audio") {?>
              <span class="pointer ml10">
                <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->getValue('post')['origin']['audio']['views'];?>

              </span>
            <?php }?>
            <!-- audio views -->

            <!-- donations -->
            <?php if ($_smarty_tpl->getValue('post')['post_type'] == "funding") {?>
              <span class="pointer ml10" data-toggle="modal" data-url="posts/who_donates.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                <i class="fa fa-hand-holding-usd"></i> <?php echo $_smarty_tpl->getValue('post')['funding']['total_donations'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Donations");?>

              </span>
            <?php }?>
            <!-- donations -->

            <?php if ($_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
              <!-- reviews -->
              <span class="pointer ml10" data-toggle="modal" data-url="posts/who_reviews.php?post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                <i class="fa fa-star mr5"></i><?php echo $_smarty_tpl->getValue('post')['reviews_count_formatted'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>

              </span>
              <!-- reviews -->
            <?php }?>
          </span>
          <!-- comments & shares & views & plays & donations -->
        </div>
        <!-- post stats -->

        <!-- post actions -->
        <?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('_get') != "posts_information") {?>
          <div class="post-actions">
            <!-- reactions -->
            <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->getValue('post')['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->getValue('post')['i_reaction'];?>
">
              <!-- reaction-btn -->
              <div class="reaction-btn">
                <?php if (!$_smarty_tpl->getValue('post')['i_react']) {?>
                  <div class="reaction-btn-icon">
                    <i class="far fa-smile fa-fw action-icon"></i>
                  </div>
                  <span class="reaction-btn-name d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("React");?>
</span>
                <?php } else { ?>
                  <div class="reaction-btn-icon">
                    <div class="inline-emoji no_animation">
                      <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('post')['i_reaction']), (int) 0, $_smarty_current_dir);
?>
                    </div>
                  </div>
                  <span class="reaction-btn-name" style="color: <?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('post')['i_reaction']]['color'];?>
;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('post')['i_reaction']]['title']);?>
</span>
                <?php }?>
              </div>
              <!-- reaction-btn -->

              <!-- reactions-container -->
              <div class="reactions-container">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reactions_enabled'), 'reaction');
$_smarty_tpl->getVariable('reaction')->iteration = 0;
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction')->value) {
$foreach3DoElse = false;
$_smarty_tpl->getVariable('reaction')->iteration++;
$foreach3Backup = clone $_smarty_tpl->getVariable('reaction');
?>
                  <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->getVariable('reaction')->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->getValue('reaction')['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->getValue('reaction')['color'];?>
" data-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reaction')['title']);?>
">
                    <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction')['reaction']), (int) 0, $_smarty_current_dir);
?>
                  </div>
                <?php
$_smarty_tpl->setVariable('reaction', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </div>
              <!-- reactions-container -->
            </div>
            <!-- reactions -->

            <!-- comment -->
            <div class="action-btn js_comment <?php if ($_smarty_tpl->getValue('post')['comments_disabled']) {?>x-hidden<?php }?>">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comment",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
              <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Comment");?>
</span>
            </div>
            <!-- comment -->

            <!-- share -->
            <?php if ($_smarty_tpl->getValue('post')['privacy'] == "public" || ($_smarty_tpl->getValue('post')['in_group'] && $_smarty_tpl->getValue('post')['group_privacy'] == "public") || ($_smarty_tpl->getValue('post')['in_event'] && $_smarty_tpl->getValue('post')['event_privacy'] == "public")) {?>
              <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share");?>
</span>
              </div>
            <?php }?>
            <!-- share -->

            <!-- review -->
            <?php if ($_smarty_tpl->getValue('post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id'] && $_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
              <div class="action-btn" data-toggle="modal" data-url="modules/review.php?do=review&id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
&type=post">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <span class="d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Review");?>
</span>
              </div>
            <?php }?>
            <!-- review -->

            <!-- tips -->
            <?php if ($_smarty_tpl->getValue('post')['author_id'] != $_smarty_tpl->getValue('user')->_data['user_id'] && $_smarty_tpl->getValue('post')['tips_enabled']) {?>
              <div class="action-btn" data-toggle="modal" data-url="#send-tip" data-options='{ "id": "<?php echo $_smarty_tpl->getValue('post')['author_id'];?>
"}'>
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tip",'class'=>"action-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                <span class="ml5 d-none d-xl-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tip");?>
</span>
              </div>
            <?php }?>
            <!-- tips -->
          </div>
        <?php }?>
        <!-- post actions -->
      <?php }?>

    </div>
    <!-- post body -->

    <!-- post footer -->
    <?php if (!$_smarty_tpl->getValue('post')['needs_payment'] && !$_smarty_tpl->getValue('post')['needs_subscription'] && !$_smarty_tpl->getValue('post')['needs_pro_package'] && !$_smarty_tpl->getValue('post')['needs_age_verification']) {?>
      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <div class="post-footer <?php if (!$_smarty_tpl->getValue('standalone') || ($_smarty_tpl->getValue('page') != "post" && $_smarty_tpl->getValue('post')['boosted'])) {?>x-hidden<?php }?>">
          <!-- comments -->
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
    <?php }?>
    <!-- post footer -->

    <!-- post approval -->
    <?php if (($_smarty_tpl->getValue('post')['in_group'] && $_smarty_tpl->getValue('post')['is_group_admin'] && !$_smarty_tpl->getValue('post')['group_approved']) || ($_smarty_tpl->getValue('post')['in_event'] && $_smarty_tpl->getValue('post')['is_event_admin'] && !$_smarty_tpl->getValue('post')['event_approved'])) {?>
      <div class="post-approval">
        <button class="btn btn-success btn-sm mr5 js_approve-post"><i class="fa fa-check mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
</button>
        <button class="btn btn-danger btn-sm js_delete-post"><i class="fa fa-times mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Decline");?>
</button>
      </div>
    <?php }?>
    <!-- post approval -->

  </div>
  <!-- post -->
  <?php if (!$_smarty_tpl->getValue('standalone')) {?>
</li><?php }
}
}
