<?php
/* Smarty version 5.4.1, created on 2025-04-18 14:56:04
  from 'file:__feeds_comment.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68026804519230_91885066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475c50175cb7330fcc618c068967ba60726d96d2' => 
    array (
      0 => '__feeds_comment.tpl',
      1 => 1744139709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 4,
    'file:__feeds_comment.text.tpl' => 1,
    'file:__reaction_emojis.tpl' => 3,
    'file:__feeds_comment.tpl' => 2,
  ),
))) {
function content_68026804519230_91885066 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><li>
  <div class="comment <?php if ($_smarty_tpl->getValue('_is_reply')) {?>reply<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('_comment')['comment_id'];?>
" id="comment_<?php echo $_smarty_tpl->getValue('_comment')['comment_id'];?>
">
    <!-- comment avatar -->
    <div class="comment-avatar">
      <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->getValue('_comment')['author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('_comment')['author_picture'];?>
);">
      </a>
    </div>
    <!-- comment avatar -->

    <!-- comment body -->
    <div class="comment-data">
      <!-- comment menu -->
      <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
        <div class="comment-btn dropdown">
          <i class="fas fa-ellipsis-h dropdown-toggle-icon" data-bs-toggle="dropdown" data-display="static"></i>
          <div class="dropdown-menu dropdown-menu-end">
            <?php if (!$_smarty_tpl->getValue('_comment')['edit_comment'] && !$_smarty_tpl->getValue('_comment')['delete_comment']) {?>
              <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=comment&id=<?php echo $_smarty_tpl->getValue('_comment')['comment_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Report");?>
</div>
            <?php } elseif (!$_smarty_tpl->getValue('_comment')['edit_comment'] && $_smarty_tpl->getValue('_comment')['delete_comment']) {?>
              <div class="dropdown-item pointer js_delete-comment"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Comment");?>
</div>
            <?php } else { ?>
              <div class="dropdown-item pointer js_edit-comment"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Comment");?>
</div>
              <div class="dropdown-item pointer js_delete-comment"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Comment");?>
</div>
            <?php }?>
          </div>
        </div>
      <?php }?>
      <!-- comment menu -->

      <!-- comment author & text  -->
      <div class="comment-inner-wrapper">
        <div class="comment-inner js_notifier-flasher">
          <!-- author -->
          <div class="comment-author">
            <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->getValue('_comment')['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->getValue('_comment')['user_id'];?>
">
              <a href="<?php echo $_smarty_tpl->getValue('_comment')['author_url'];?>
"><?php echo $_smarty_tpl->getValue('_comment')['author_name'];?>
</a>
            </span>
            <?php if ($_smarty_tpl->getValue('_comment')['author_verified']) {?>
              <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              </span>
            <?php }?>
            <?php if ($_smarty_tpl->getValue('_comment')['user_subscribed']) {?>
              <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_comment')['package_name']);?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Member");?>
'>
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              </span>
            <?php }?>
          </div>
          <!-- author -->

          <!-- text -->
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <!-- text -->
        </div>
      </div>
      <!-- comment author & text  -->

      <!-- comment actions & time  -->
      <ul class="comment-actions clearfix">
        <!-- reactions -->
        <li>
          <div class="pointer unselectable reactions-wrapper <?php if ($_smarty_tpl->getValue('_comment')['i_react']) {?>js_unreact-comment<?php }?>" data-reaction="<?php echo $_smarty_tpl->getValue('_comment')['i_reaction'];?>
">
            <!-- reaction-btn -->
            <div class="reaction-btn">
              <?php if (!$_smarty_tpl->getValue('_comment')['i_react']) {?>
                <div class="reaction-btn-icon d-none">
                  <i class="fa fa-smile fa-fw"></i>
                </div>
                <span class="reaction-btn-name text-link"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("React");?>
</span>
              <?php } else { ?>
                <div class="reaction-btn-icon d-none">
                  <div class="inline-emoji no_animation">
                    <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('_comment')['i_reaction']), (int) 0, $_smarty_current_dir);
?>
                  </div>
                </div>
                <span class="reaction-btn-name text-link" style="color: <?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_comment')['i_reaction']]['color'];?>
;"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_comment')['i_reaction']]['title']);?>
</span>
              <?php }?>
            </div>
            <!-- reaction-btn -->

            <!-- reactions-container -->
            <div class="reactions-container">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('reactions_enabled'), 'reaction');
$_smarty_tpl->getVariable('reaction')->iteration = 0;
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction')->value) {
$foreach0DoElse = false;
$_smarty_tpl->getVariable('reaction')->iteration++;
$foreach0Backup = clone $_smarty_tpl->getVariable('reaction');
?>
                <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->getVariable('reaction')->iteration;?>
 js_react-comment" data-reaction="<?php echo $_smarty_tpl->getValue('reaction')['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->getValue('reaction')['color'];?>
" data-title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('reaction')['title']);?>
">
                  <?php $_smarty_tpl->renderSubTemplate('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->getValue('reaction')['reaction']), (int) 0, $_smarty_current_dir);
?>
                </div>
              <?php
$_smarty_tpl->setVariable('reaction', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <!-- reactions-container -->
          </div>
        </li>
        <!-- reactions -->

        <!-- comment -->
        <li>
          <span class="text-link js_reply <?php if ($_smarty_tpl->getValue('_comment')['comments_disabled']) {?>x-hidden<?php }?>" data-username="<?php if ($_smarty_tpl->getValue('user')->_data['user_name'] != $_smarty_tpl->getValue('_comment')['author_user_name']) {
echo $_smarty_tpl->getValue('_comment')['author_user_name'];
}?>">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reply");?>

          </span>
        </li>
        <!-- comment -->

        <!-- time  -->
        <li>
          <small class="text-muted js_moment" data-time="<?php echo $_smarty_tpl->getValue('_comment')['time'];?>
"><?php echo $_smarty_tpl->getValue('_comment')['time'];?>
</small>
        </li>
        <!-- time  -->

        <!-- reactions stats -->
        <?php if ($_smarty_tpl->getValue('_comment')['reactions_total_count'] > 0) {?>
          <li class="ml5">
            <div data-toggle="modal" data-url="posts/who_reacts.php?comment_id=<?php echo $_smarty_tpl->getValue('_comment')['comment_id'];?>
">
              <div class="reactions-stats">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_comment')['reactions'], 'reaction_count', false, 'reaction_type');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reaction_type')->value => $_smarty_tpl->getVariable('reaction_count')->value) {
$foreach1DoElse = false;
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
                  <?php echo $_smarty_tpl->getValue('_comment')['reactions_total_count_formatted'];?>

                </span>
                <!-- reactions count -->
              </div>
            </div>
          </li>
        <?php }?>
        <!-- reactions stats -->
      </ul>
      <!-- comment actions & time  -->

      <!-- comment replies  -->
      <?php if (!$_smarty_tpl->getValue('_is_reply')) {?>
        <?php if (!$_smarty_tpl->getValue('standalone') && $_smarty_tpl->getValue('_comment')['replies'] > 0) {?>
          <div class="ptb10 plr10 js_replies-toggle">
            <span class="text-link">
              <i class="fa fa-comments"></i>
              <?php echo $_smarty_tpl->getValue('_comment')['replies'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Replies");?>

            </span>
          </div>
        <?php }?>
        <div class="comment-replies <?php if (!$_smarty_tpl->getValue('standalone')) {?>x-hidden<?php }?>">
          <!-- previous replies -->
          <?php if ($_smarty_tpl->getValue('_comment')['replies'] >= $_smarty_tpl->getValue('system')['min_results']) {?>
            <div class="pb10 text-center js_see-more" data-get="comment_replies" data-id="<?php echo $_smarty_tpl->getValue('_comment')['comment_id'];?>
" data-remove="true">
              <span class="text-link">
                <i class="fa fa-comment"></i>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View previous replies");?>

              </span>
              <div class="loader loader_small x-hidden"></div>
            </div>
          <?php }?>
          <!-- previous replies -->

          <!-- replies -->
          <ul class="js_replies">
            <?php if ($_smarty_tpl->getValue('_comment')['replies'] > 0) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_comment')['comment_replies'], 'reply');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reply')->value) {
$foreach2DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->getValue('reply'),'_is_reply'=>true), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php }?>
          </ul>
          <!-- replies -->

          <!-- post a reply -->
          <?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
            <div class="x-hidden js_reply-form">
              <div class="x-form comment-form">
                <textarea dir="auto" class="js_autosize js_mention js_post-reply" rows="1" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write a Reply");?>
'></textarea>
                <ul class="x-form-tools clearfix">
                  <li class="x-form-tools-post js_post-reply">
                    <i class="far fa-paper-plane fa-lg fa-fw"></i>
                  </li>
                  <?php if ($_smarty_tpl->getValue('system')['comments_photos_enabled']) {?>
                    <li class="x-form-tools-attach">
                      <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="comment"></i>
                    </li>
                  <?php }?>
                  <?php if ($_smarty_tpl->getValue('system')['voice_notes_comments_enabled']) {?>
                    <li class="x-form-tools-voice js_comment-voice-notes-toggle">
                      <i class="fas fa-microphone fa-lg fa-fw"></i>
                    </li>
                  <?php }?>
                  <li class="x-form-tools-emoji js_emoji-menu-toggle">
                    <i class="far fa-smile-wink fa-lg fa-fw"></i>
                  </li>
                </ul>
              </div>
              <div class="comment-voice-notes">
                <div class="voice-recording-wrapper" data-handle="comment">
                  <!-- processing message -->
                  <div class="x-hidden js_voice-processing-message">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"upload",'class'=>"main-icon mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Processing");?>
<span class="loading-dots"></span>
                  </div>
                  <!-- processing message -->

                  <!-- success message -->
                  <div class="x-hidden js_voice-success-message">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Voice note recorded successfully");?>

                    <div class="float-end">
                      <button type="button" class="btn-close js_voice-remove">

                      </button>
                    </div>
                  </div>
                  <!-- success message -->

                  <!-- start recording -->
                  <div class="btn-voice-start js_voice-start">
                    <i class="fas fa-microphone mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Record");?>

                  </div>
                  <!-- start recording -->

                  <!-- stop recording -->
                  <div class="btn-voice-stop js_voice-stop" style="display: none">
                    <i class="far fa-stop-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Recording");?>
 <span class="js_voice-timer">00:00</span>
                  </div>
                  <!-- stop recording -->
                </div>
              </div>
              <div class="comment-attachments attachments clearfix x-hidden">
                <ul>
                  <li class="loading">
                    <div class="progress x-progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          <?php }?>
          <!-- post a reply -->
        </div>
      <?php }?>
      <!-- comment replies  -->
    </div>
    <!-- comment body -->
  </div>
</li><?php }
}
