<?php
/* Smarty version 5.4.1, created on 2025-04-18 14:53:52
  from 'file:ajax.chat.conversation.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680267806db850_15684404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd15fb0a16e214ce42715492d5ef814bf68d108' => 
    array (
      0 => 'ajax.chat.conversation.tpl',
      1 => 1744139711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 6,
    'file:ajax.chat.conversation.messages.tpl' => 1,
  ),
))) {
function content_680267806db850_15684404 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card panel-messages" data-cid="<?php echo $_smarty_tpl->getValue('conversation')['conversation_id'];?>
" data-color="<?php echo $_smarty_tpl->getValue('conversation')['color'];?>
" data-chat-price="<?php echo $_smarty_tpl->getValue('conversation')['chat_price'];?>
" data-call-price="<?php echo $_smarty_tpl->getValue('conversation')['call_price'];?>
">
  <div class="card-header with-icon">
    <div class="row">
      <div class="col-lg-6 mb-2 mb-lg-0">
        <?php if ($_smarty_tpl->getValue('conversation')['node_id']) {?>
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('conversation')['link'];?>
" class="text-dark"><?php echo $_smarty_tpl->getValue('conversation')['name'];?>
</a>
        <?php } else { ?>
          <?php if (!$_smarty_tpl->getValue('conversation')['multiple_recipients']) {?>
            <?php echo $_smarty_tpl->getValue('conversation')['name_html'];?>

          <?php } else { ?>
            <span title="<?php echo $_smarty_tpl->getValue('conversation')['name_list'];?>
"><?php echo $_smarty_tpl->getValue('conversation')['name'];?>
</span>
          <?php }?>
        <?php }?>
      </div>
      <div class="col-lg-6 text-start text-lg-end">
        <?php if (!$_smarty_tpl->getValue('conversation')['multiple_recipients'] && !$_smarty_tpl->getValue('conversation')['node_id']) {?>
          <?php if ($_smarty_tpl->getValue('system')['video_call_enabled']) {?>
            <button type="button" class="btn btn-sm btn-light rounded-pill js_chat-call-start" data-type="video" data-uid="<?php echo $_smarty_tpl->getValue('conversation')['user_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('conversation')['name'];?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"call_video",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            </button>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('system')['audio_call_enabled']) {?>
            <button type="button" class="btn btn-sm btn-light rounded-pill js_chat-call-start" data-type="audio" data-uid="<?php echo $_smarty_tpl->getValue('conversation')['user_id'];?>
" data-name="<?php echo $_smarty_tpl->getValue('conversation')['name'];?>
">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"call_audio",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            </button>
          <?php }?>
        <?php }?>
        <?php if (!$_smarty_tpl->getValue('conversation')['node_id']) {?>
          <button type="button" class="btn btn-sm btn-light rounded-pill js_delete-conversation">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"delete",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-light rounded-pill js_leave-conversation">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"logout",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
          </button>
        <?php }?>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="chat-conversations js_scroller" data-slimScroll-height="420px" data-slimScroll-start="bottom">
      <?php $_smarty_tpl->renderSubTemplate('file:ajax.chat.conversation.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <div class="chat-typing">
      <i class="far fa-comment-dots mr5"></i><span class="loading-dots"><span class="js_chat-typing-users"></span> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Typing");?>
</span>
    </div>
    <div class="chat-voice-notes">
      <div class="voice-recording-wrapper" data-handle="chat">
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
    <div class="chat-attachments attachments clearfix x-hidden">
      <ul>
        <li class="loading">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </li>
      </ul>
    </div>
    <div class="x-form chat-form">
      <div class="chat-form-message">
        <textarea class="js_autosize js_post-message" dir="auto" rows="1" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write a message");?>
'></textarea>
      </div>
      <ul class="x-form-tools clearfix">
        <?php if ($_smarty_tpl->getValue('system')['chat_photos_enabled']) {?>
          <li class="x-form-tools-attach">
            <i class="far fa-image fa-lg fa-fw js_x-uploader" data-handle="chat"></i>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['voice_notes_chat_enabled']) {?>
          <li class="x-form-tools-voice js_chat-voice-notes-toggle">
            <i class="fas fa-microphone fa-lg fa-fw"></i>
          </li>
        <?php }?>
        <li class="x-form-tools-emoji js_emoji-menu-toggle">
          <i class="far fa-smile-wink fa-lg fa-fw"></i>
        </li>
        <?php if (!$_smarty_tpl->getValue('conversation')['node_id']) {?>
          <li class="x-form-tools-colors js_chat-colors-menu-toggle js_chat-color-me">
            <i class="fa fa-circle fa-lg fa-fw"></i>
          </li>
        <?php }?>
        <li class="x-form-tools-post js_post-message">
          <i class="far fa-paper-plane fa-lg fa-fw"></i>
        </li>
      </ul>
    </div>
  </div>
</div><?php }
}
