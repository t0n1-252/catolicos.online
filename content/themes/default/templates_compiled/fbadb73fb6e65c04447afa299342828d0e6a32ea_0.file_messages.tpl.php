<?php
/* Smarty version 5.4.1, created on 2025-04-18 14:53:52
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680267806ab193_61644874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbadb73fb6e65c04447afa299342828d0e6a32ea' => 
    array (
      0 => 'messages.tpl',
      1 => 1744139761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__svg_icons.tpl' => 5,
    'file:__feeds_conversation.tpl' => 1,
    'file:ajax.chat.conversation.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
))) {
function content_680267806ab193_61644874 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
$_smarty_tpl->renderSubTemplate('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<!-- page content -->
<div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row h-100">

    <!-- threads -->
    <div class="col-md-4 col-lg-3 sg-offcanvas-sidebar">
      <div class="card">
        <div class="card-header with-icon">
          <div class="row">
            <div class="col-xl-8 mb-2 mb-xl-0 pt-xl-1">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comments",'class'=>"main-icon mr5",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Messenger");?>

            </div>
            <div class="col-xl-4 text-start text-xl-end">
              <a class="btn btn-sm btn-light rounded-pill js_chat-new" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/messages/new">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"start_chat",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body plr0 js_live-messages-alt">
          <div class="js_scroller" data-slimScroll-height="490px">
            <?php if ($_smarty_tpl->getValue('user')->_data['conversations']) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['conversations'], '_conversation');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_conversation')->value) {
$foreach0DoElse = false;
?>
                  <?php $_smarty_tpl->renderSubTemplate('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('conversation'=>$_smarty_tpl->getValue('_conversation')), (int) 0, $_smarty_current_dir);
?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </ul>
              <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user')->_data['conversations']) >= $_smarty_tpl->getValue('system')['max_results']) {?>
                <!-- see-more -->
                <div class="alert alert-post see-more small mlr5 js_see-more" data-get="conversations">
                  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Load Older Threads");?>
</span>
                  <div class="loader loader_small x-hidden"></div>
                </div>
                <!-- see-more -->
              <?php }?>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- threads -->

    <!-- conversation -->
    <div class="col-md-8 col-lg-9 sg-offcanvas-mainbar js_conversation-container">
      <?php if ($_smarty_tpl->getValue('view') == "new") {?>
        <div class="card panel-messages fresh">
          <div class="card-header with-icon">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New Message");?>

          </div>
          <div class="card-body">
            <div class="chat-conversations js_scroller" data-slimScroll-height="420px"></div>
            <div class="chat-to clearfix js_autocomplete-tags">
              <div class="to"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To");?>
:</div>
              <ul class="tags">
                <?php if ($_smarty_tpl->getValue('recipient')) {?>
                  <li data-uid="<?php echo $_smarty_tpl->getValue('recipient')['user_id'];?>
"><?php echo $_smarty_tpl->getValue('recipient')['user_fullname'];?>
<button type="button" class="btn-close js_tag-remove" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
"></button></li>
                <?php }?>
              </ul>
              <div class="typeahead">
                <input type="text" size="1" autofocus>
              </div>
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
                <li class="x-form-tools-post js_post-message">
                  <i class="far fa-paper-plane fa-lg fa-fw"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <?php if ($_smarty_tpl->getValue('conversation')) {?>
          <?php $_smarty_tpl->renderSubTemplate('file:ajax.chat.conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php } else { ?>
          <div class="card card-messages" style="padding-top: 60px;">
            <div class="card-body text-center text-muted" style="min-height: 510px;">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"empty",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), (int) 0, $_smarty_current_dir);
?>
              <p class="mt10 mb0"><strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No Conversation Selected");?>
</strong></p>
              <a class="mt20 btn btn-md rounded-pill btn-primary js_chat-new" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/messages/new">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New Message");?>

              </a>
            </div>
          </div>
        <?php }?>
      <?php }?>
    </div>
    <!-- conversation -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->renderSubTemplate('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
