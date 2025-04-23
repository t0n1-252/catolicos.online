<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:37:02
  from 'file:__feeds_comment.form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d2ee5fda5_63514805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20fbd0b0fd4f6531a732b5ac57f05b77b389894d' => 
    array (
      0 => '__feeds_comment.form.tpl',
      1 => 1744139724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
))) {
function content_68004d2ee5fda5_63514805 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="comment js_comment-form <?php if ($_smarty_tpl->getValue('post')['comments_disabled']) {?>x-hidden<?php }?>" data-handle="<?php echo $_smarty_tpl->getValue('_handle');?>
" data-id="<?php echo $_smarty_tpl->getValue('_id');?>
">
  <div class="comment-avatar">
    <?php if ($_smarty_tpl->getValue('post')['user_type'] == "page" && $_smarty_tpl->getValue('post')['is_page_admin']) {?>
      <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->getValue('post')['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('post')['post_author_picture'];?>
);"></a>
    <?php } else { ?>
      <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('user')->_data['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
);"></a>
    <?php }?>
  </div>
  <div class="comment-data">
    <div class="x-form comment-form">
      <textarea dir="auto" class="js_autosize js_mention js_post-comment" rows="1" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write a comment");?>
'></textarea>
      <ul class="x-form-tools clearfix">
        <li class="x-form-tools-post js_post-comment">
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
            <button type="button" class="btn-close js_voice-remove"></button>
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
</div>
<div class="pb10 text-center js_comment-disabled-msg <?php if (!$_smarty_tpl->getValue('post')['comments_disabled']) {?>x-hidden<?php }?>">
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Commenting has been turned off for this post");?>
.
</div><?php }
}
