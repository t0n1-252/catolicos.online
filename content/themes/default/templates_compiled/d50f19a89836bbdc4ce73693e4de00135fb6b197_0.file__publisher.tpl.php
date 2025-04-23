<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:34:23
  from 'file:_publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c8fe85785_11375799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50f19a89836bbdc4ce73693e4de00135fb6b197' => 
    array (
      0 => '_publisher.tpl',
      1 => 1744139769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 35,
    'file:__categories.recursive_options.tpl' => 1,
  ),
))) {
function content_68004c8fe85785_11375799 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('user')->_data['can_publish_posts']) {?>
  <?php if ($_smarty_tpl->getValue('system')['verification_for_posts'] && !$_smarty_tpl->getValue('user')->_data['user_verified']) {?>
    <div class="alert alert-danger">
      <div class="icon">
        <i class="fa fa-exclamation-circle fa-2x"></i>
      </div>
      <div class="text">
        <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account Verification Required");?>
</strong><br>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To publish posts your account must be verified");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/settings/verification"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verify Now");?>
</a>
      </div>
    </div>
  <?php } else { ?>
    <div id="publisher-wapper<?php if ($_smarty_tpl->getValue('_modal_mode')) {?>-modal<?php }?>">
      <div class="publisher-overlay"></div>

      <div class="x-form publisher" data-handle="<?php echo $_smarty_tpl->getValue('_handle');?>
" <?php if ($_smarty_tpl->getValue('_id')) {?>data-id="<?php echo $_smarty_tpl->getValue('_id');?>
" <?php }?> <?php if ($_smarty_tpl->getValue('_modal_mode')) {?>data-modal-mode="true" style=" margin-bottom: 0; border-radius: 8px;" <?php }?> id="publisher-box">

        <?php if ($_smarty_tpl->getValue('_modal_mode')) {?>
          <!-- publisher close -->
          <div class="publisher-close">
            <button type="button" class="btn-close js_close-publisher-modal"></button>
          </div>
          <!-- publisher close -->
        <?php }?>

        <!-- publisher loader -->
        <div class="publisher-loader">
          <div class="loader loader_small"></div>
        </div>
        <!-- publisher loader -->

        <!-- publisher-message -->
        <div class="publisher-message">
          <?php if ($_smarty_tpl->getValue('_handle') == "page" || $_smarty_tpl->getValue('_post_as_page')) {?>
            <img class="publisher-avatar" src="<?php echo $_smarty_tpl->getValue('_avatar');?>
">
          <?php } else { ?>
            <img class="publisher-avatar" src="<?php echo $_smarty_tpl->getValue('user')->_data['user_picture'];?>
">
          <?php }?>
          <div class="colored-text-wrapper">
            <textarea <?php if ($_smarty_tpl->getValue('_modal_mode')) {?>autofocus<?php }?> dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("What is on your mind? #Hashtag.. @Mention.. Link..");?>
' placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("What is on your mind? #Hashtag.. @Mention.. Link..");?>
'><?php if ($_smarty_tpl->getValue('url')) {
echo $_smarty_tpl->getValue('url');
}?></textarea>
          </div>
          <div class="publisher-emojis">
            <div class="position-relative">
              <i class="far fa-smile-wink fa-lg js_emoji-menu-toggle"></i>
            </div>
          </div>
        </div>
        <!-- publisher-message -->

        <!-- publisher-slider -->
        <div class="publisher-slider">

          <!-- publisher scraper -->
          <div class="publisher-scraper"></div>
          <!-- publisher scraper -->

          <!-- post attachments (photos) -->
          <div class="publisher-attachments attachments clearfix x-hidden js_attachments-photos"></div>
          <!-- post attachments -->

          <!-- post attachments (reels) -->
          <div class="publisher-attachments attachments clearfix x-hidden js_attachments-reel"></div>
          <!-- post attachments -->

          <!-- post attachments (videos) -->
          <div class="publisher-attachments attachments clearfix x-hidden js_attachments-video"></div>
          <!-- post attachments -->

          <!-- post attachments (audios) -->
          <div class="publisher-attachments attachments clearfix x-hidden js_attachments-audio"></div>
          <!-- post attachments -->

          <!-- post attachments (files) -->
          <div class="publisher-attachments attachments clearfix x-hidden js_attachments-file"></div>
          <!-- post attachments -->

          <!-- post album -->
          <div class="publisher-meta" data-meta="album">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <input type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Album title");?>
'>
          </div>
          <!-- post album -->

          <!-- post feelings -->
          <div class="publisher-meta" data-meta="feelings">
            <div id="feelings-menu-toggle" data-init-text='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("What are you doing?");?>
'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("What are you doing?");?>
</div>
            <div id="feelings-data" style="display: none">
              <input type="text" class="no-icon" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("What are you doing?");?>
'>
              <span></span>
            </div>
            <div id="feelings-menu" class="dropdown-menu dropdown-widget">
              <div class="dropdown-widget-body ptb5">
                <div class="js_scroller">
                  <ul class="feelings-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feelings'), 'feeling');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('feeling')->value) {
$foreach14DoElse = false;
?>
                      <li class="feeling-item js_feelings-add" data-action="<?php echo $_smarty_tpl->getValue('feeling')['action'];?>
" data-placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('feeling')['placeholder']);?>
">
                        <div class="icon">
                          <i class="twa twa-3x twa-<?php echo $_smarty_tpl->getValue('feeling')['icon'];?>
"></i>
                        </div>
                        <div class="data">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('feeling')['text']);?>

                        </div>
                      </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            </div>
            <div id="feelings-types" class="dropdown-menu dropdown-widget">
              <div class="dropdown-widget-body ptb5">
                <div class="js_scroller">
                  <ul class="feelings-list">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('feelings_types'), 'type');
$foreach15DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('type')->value) {
$foreach15DoElse = false;
?>
                      <li class="feeling-item js_feelings-type" data-type="<?php echo $_smarty_tpl->getValue('type')['action'];?>
" data-icon="<?php echo $_smarty_tpl->getValue('type')['icon'];?>
">
                        <div class="icon">
                          <i class="twa twa-3x twa-<?php echo $_smarty_tpl->getValue('type')['icon'];?>
"></i>
                        </div>
                        <div class="data">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('type')['text']);?>

                        </div>
                      </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- post feelings -->

          <!-- post location -->
          <div class="publisher-meta" data-meta="location">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <input class="js_geocomplete" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Where are you?");?>
'>
          </div>
          <!-- post location -->

          <!-- post colored -->
          <div class="publisher-meta" data-meta="colored">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('colored_patterns'), 'pattern');
$foreach16DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('pattern')->value) {
$foreach16DoElse = false;
?>
              <div class="colored-pattern-item js_publisher-pattern" data-id="<?php echo $_smarty_tpl->getValue('pattern')['pattern_id'];?>
" data-type="<?php echo $_smarty_tpl->getValue('pattern')['type'];?>
" data-background-image="<?php echo $_smarty_tpl->getValue('pattern')['background_image'];?>
" data-background-color-1="<?php echo $_smarty_tpl->getValue('pattern')['background_color_1'];?>
" data-background-color-2="<?php echo $_smarty_tpl->getValue('pattern')['background_color_2'];?>
" data-text-color="<?php echo $_smarty_tpl->getValue('pattern')['text_color'];?>
" <?php if ($_smarty_tpl->getValue('pattern')['type'] == "color") {?> style="background-image: linear-gradient(45deg, <?php echo $_smarty_tpl->getValue('pattern')['background_color_1'];?>
, <?php echo $_smarty_tpl->getValue('pattern')['background_color_2'];?>
);" <?php } else { ?> style="background-image: url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('pattern')['background_image'];?>
)" <?php }?>>
              </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </div>
          <!-- post colored -->

          <!-- post voice notes -->
          <div class="publisher-meta" data-meta="voice_notes">
            <div class="voice-recording-wrapper" data-handle="publisher">
              <!-- processing message -->
              <div class="x-hidden js_voice-processing-message">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"upload",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Processing");?>
<span class="loading-dots"></span>
              </div>
              <!-- processing message -->

              <!-- success message -->
              <div class="x-hidden js_voice-success-message">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
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
          <!-- post voice notes -->

          <!-- post gif -->
          <div class="publisher-meta" data-meta="gif">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <input class="js_publisher-gif-search" type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search GIFs");?>
'>
          </div>
          <!-- post gif -->

          <!-- post poll -->
          <div class="publisher-meta" data-meta="poll">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"plus",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <input type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add an option");?>
...'>
          </div>
          <div class="publisher-meta" data-meta="poll">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"plus",'class'=>"main-icon",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <input type="text" placeholder='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add an option");?>
...'>
          </div>
          <!-- post poll -->

          <!-- post reel -->
          <div class="publisher-meta" data-meta="reel">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reel uploaded successfully");?>

            <div class="float-end">
              <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="reel"></button>
            </div>
          </div>
          <div class="publisher-custom-thumbnail publisher-reel-custom-thumbnail">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Reel Thumbnail");?>

            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="video_thumbnail" value="">
            </div>
          </div>
          <!-- post reel -->

          <!-- post video -->
          <div class="publisher-meta" data-meta="video">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Video uploaded successfully");?>

            <div class="float-end">
              <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="video"></button>
            </div>
          </div>
          <div class="publisher-meta" data-meta="video">
            <select class="form-select" name="video_category" id="video_category">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('videos_categories'), 'category');
$foreach17DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach17DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <div class="publisher-custom-thumbnail publisher-video-custom-thumbnail">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Video Thumbnail");?>

            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="video_thumbnail" value="">
            </div>
          </div>
          <!-- post video -->

          <!-- post audio -->
          <div class="publisher-meta" data-meta="audio">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio uploaded successfully");?>

            <div class="float-end">
              <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="audio"></button>
            </div>
          </div>
          <!-- post audio -->

          <!-- post file -->
          <div class="publisher-meta" data-meta="file">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checkmark",'class'=>"main-icon static mr5",'width'=>"16px",'height'=>"16px"), (int) 0, $_smarty_current_dir);
?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("File uploaded successfully");?>

            <div class="float-end">
              <button type="button" class="btn-close js_publisher-attachment-file-remover" data-type="file"></button>
            </div>
          </div>
          <!-- post file -->

          <!-- publisher-tools-tabs -->
          <div class="publisher-tools-tabs">
            <ul class="row">
              <?php if (!$_smarty_tpl->getValue('_quick_mode')) {?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_go_live']) {?>
                  <li class="col-md-6">
                    <a class="publisher-tools-tab link js_publisher-tab" data-tab="live" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/live<?php if ($_smarty_tpl->getValue('_handle') == "page") {?>?page_id=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "group") {?>?group_id=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "event") {?>?event_id=<?php echo $_smarty_tpl->getValue('_id');
}?>">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Live");?>

                      <div class="spinner-grow text-danger ml5" style="width: 10px; height: 10px;">
                      </div>
                    </a>
                  </li>
                <?php }?>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('system')['photos_enabled']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab attach js_publisher-tab" data-tab="photos">
                    <span class="js_x-uploader" data-handle="publisher" data-multiple="true">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"camera",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Photos");?>

                  </div>
                </li>
                <?php if (!$_smarty_tpl->getValue('_quick_mode')) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab js_publisher-tab" data-tab="album">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"photos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Album");?>

                    </div>
                  </li>
                <?php }?>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_add_activity_posts']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab js_publisher-feelings">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"smile",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Feelings/Activity");?>

                  </div>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_add_geolocation_posts']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab js_publisher-tab" data-tab="location">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Check In");?>

                  </div>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_add_colored_posts']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab js_publisher-tab" data-tab="colored">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_colored",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Colored Posts");?>

                  </div>
                </li>
              <?php }?>
              <?php if (!$_smarty_tpl->getValue('_quick_mode')) {?>
                <?php if ($_smarty_tpl->getValue('system')['voice_notes_posts_enabled']) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab js_publisher-tab" data-tab="voice_notes">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"voice_notes",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Voice Notes");?>

                    </div>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_add_gif_posts']) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab js_publisher-tab" data-tab="gif">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("GIF");?>

                    </div>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_write_blogs'] && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event'))) {?>
                  <li class="col-md-6">
                    <a class="publisher-tools-tab link js_publisher-tab" data-tab="blog" href='<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/blogs/new<?php if ($_smarty_tpl->getValue('_handle') == "page") {?>?page=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "group") {?>?group=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "event") {?>?event=<?php echo $_smarty_tpl->getValue('_id');
}?>'>
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Blog");?>

                    </a>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_sell_products'] && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event'))) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab link js_publisher-tab" data-tab="product" data-toggle="modal" data-url="posts/product.php?do=create<?php if ($_smarty_tpl->getValue('_handle') == "page") {?>&page=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "group") {?>&group=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "event") {?>&event=<?php echo $_smarty_tpl->getValue('_id');
}?>">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Product");?>

                    </div>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_raise_funding'] && $_smarty_tpl->getValue('_handle') == "me") {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab link js_publisher-tab" data-tab="funding" data-toggle="modal" data-url="posts/funding.php?do=create">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Funding");?>

                    </div>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_offers'] && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event'))) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab link js_publisher-tab" data-tab="offer" data-toggle="modal" data-url="posts/offer.php?do=create<?php if ($_smarty_tpl->getValue('_handle') == "page") {?>&page=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "group") {?>&group=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "event") {?>&event=<?php echo $_smarty_tpl->getValue('_id');
}?>">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Offer");?>

                    </div>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_jobs'] && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event'))) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/job.php?do=create<?php if ($_smarty_tpl->getValue('_handle') == "page") {?>&page=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "group") {?>&group=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "event") {?>&event=<?php echo $_smarty_tpl->getValue('_id');
}?>">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Job");?>

                    </div>
                  </li>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('user')->_data['can_create_courses'] && $_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event'))) {?>
                  <li class="col-md-6">
                    <div class="publisher-tools-tab link js_publisher-tab" data-tab="job" data-toggle="modal" data-url="posts/course.php?do=create<?php if ($_smarty_tpl->getValue('_handle') == "page") {?>&page=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "group") {?>&group=<?php echo $_smarty_tpl->getValue('_id');
}
if ($_smarty_tpl->getValue('_handle') == "event") {?>&event=<?php echo $_smarty_tpl->getValue('_id');
}?>">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Course");?>

                    </div>
                  </li>
                <?php }?>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_add_polls_posts']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab js_publisher-tab" data-tab="poll">
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"polls",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create Poll");?>

                  </div>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_add_reels']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab attach js_publisher-tab" data-tab="reel">
                    <span class="js_x-uploader" data-handle="publisher" data-type="reel">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Reel");?>

                  </div>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_upload_videos']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab attach js_publisher-tab" data-tab="video">
                    <span class="js_x-uploader" data-handle="publisher" data-type="video">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Video");?>

                  </div>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_upload_audios']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab attach js_publisher-tab" data-tab="audio">
                    <span class="js_x-uploader" data-handle="publisher" data-type="audio">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"audios",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload Audio");?>

                  </div>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->getValue('user')->_data['can_upload_files']) {?>
                <li class="col-md-6">
                  <div class="publisher-tools-tab attach js_publisher-tab" data-tab="file">
                    <span class="js_x-uploader" data-handle="publisher" data-type="file">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"files",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload File");?>

                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <!-- publisher-tools-tabs -->

          <!-- publisher-footer -->
          <div class="publisher-footer">
            <?php if ($_smarty_tpl->getValue('system')['adult_mode'] || ($_smarty_tpl->getValue('_handle') == "me" && $_smarty_tpl->getValue('user')->_data['can_add_anonymous_posts']) || ($_smarty_tpl->getValue('_handle') != "page" && $_smarty_tpl->getValue('user')->_data['can_receive_tip']) || ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group')) && $_smarty_tpl->getValue('_node_can_monetize_content') && $_smarty_tpl->getValue('_node_monetization_enabled') && $_smarty_tpl->getValue('_node_monetization_plans') > 0) || ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event')) && $_smarty_tpl->getValue('user')->_data['can_monetize_content'] && $_smarty_tpl->getValue('user')->_data['user_monetization_enabled'])) {?>
              <!-- publisher-options -->
              <div class="publisher-footer-options">

                <!-- anonymous post -->
                <?php if ($_smarty_tpl->getValue('_handle') == "me" && $_smarty_tpl->getValue('user')->_data['can_add_anonymous_posts']) {?>
                  <div class="form-table-row mb10">
                    <div class="avatar">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <div>
                      <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Anonymous Post");?>
</div>
                      <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share your post as anonymous post");?>
</div>
                    </div>
                    <div class="text-end">
                      <label class="switch" for="is_anonymous">
                        <input type="checkbox" name="is_anonymous" id="is_anonymous" class="js_publisher-anonymous-toggle">
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                <?php }?>
                <!-- anonymous post -->

                <!-- adult content -->
                <?php if ($_smarty_tpl->getValue('system')['adult_mode']) {?>
                  <div class="form-table-row mb10" id="adult-toggle-wrapper">
                    <div class="avatar">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"adult",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <div>
                      <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Adult Content");?>
</div>
                      <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share your post as adult content");?>
</div>
                    </div>
                    <div class="text-end">
                      <label class="switch" for="for_adult">
                        <input type="checkbox" name="for_adult" id="for_adult" class="js_publisher-adult-toggle">
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                <?php }?>
                <!-- adult content -->

                <!-- enable tips -->
                <?php if ($_smarty_tpl->getValue('_handle') != "page" && $_smarty_tpl->getValue('user')->_data['can_receive_tip']) {?>
                  <div class="form-table-row mb10" id="tips-toggle-wrapper">
                    <div class="avatar">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tips",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <div>
                      <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable Tips");?>
</div>
                      <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow people to send you tips");?>
</div>
                    </div>
                    <div class="text-end">
                      <label class="switch" for="tips_enabled">
                        <input type="checkbox" name="tips_enabled" id="tips_enabled" class="js_publisher-tips-toggle">
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                <?php }?>
                <!-- enable tips -->

                <!-- only for subscribers -->
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group')) && $_smarty_tpl->getValue('_node_can_monetize_content') && $_smarty_tpl->getValue('_node_monetization_enabled') && $_smarty_tpl->getValue('_node_monetization_plans') > 0) {?>
                  <div class="form-table-row mb10" id="subscribers-toggle-wrapper">
                    <div class="avatar">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <div>
                      <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscribers Only");?>
</div>
                      <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share this post to");?>
 <?php if ($_smarty_tpl->getValue('_handle') != "me") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('_handle'));?>
 <?php }
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("subscribers only");?>
</div>
                    </div>
                    <div class="text-end">
                      <label class="switch" for="subscribers_only">
                        <input type="checkbox" name="subscribers_only" id="subscribers_only" class="js_publisher-subscribers-toggle">
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group x-hidden" id="subscriptions-image-wrapper">
                    <div class="x-image">
                      <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image" data-blur="true"></i>
                      <input type="hidden" class="js_x-image-input" name="subscriptions_image" value="">
                    </div>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload a preview image for your post (This image will be blured)");?>

                    </div>
                  </div>
                <?php }?>
                <!-- only for subscribers -->

                <!-- paid post -->
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('_handle'),array('me','page','group','event')) && $_smarty_tpl->getValue('user')->_data['can_monetize_content'] && $_smarty_tpl->getValue('user')->_data['user_monetization_enabled']) {?>
                  <div class="form-table-row mb10" id="paid-toggle-wrapper">
                    <div class="avatar">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <div>
                      <div class="form-label mb0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post");?>
</div>
                      <div class="form-text d-none d-sm-block mt0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set a price to your post");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("subscribers also paying");?>
)</div>
                    </div>
                    <div class="text-end">
                      <label class="switch" for="paid_post">
                        <input type="checkbox" name="paid_post" id="paid_post" class="js_publisher-paid-toggle">
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group x-hidden" id="paid-price-wrapper">
                    <input type="text" class="form-control" name="paid_post_price" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)">
                  </div>
                  <div class="form-group x-hidden" id="paid-text-wrapper">
                    <textarea class="form-control" name="paid_post_text" rows="3" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Paid Post Description");?>
"></textarea>
                  </div>
                  <div class="form-group x-hidden" id="paid-image-wrapper">
                    <div class="x-image">
                      <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                      <div class="x-image-loader">
                        <div class="progress x-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image" data-blur="true"></i>
                      <input type="hidden" class="js_x-image-input" name="paid_image" value="">
                    </div>
                    <div class="form-text">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upload a preview image for your post (This image will be blured)");?>

                    </div>
                  </div>
                <?php }?>
                <!-- paid post -->

              </div>
            <?php }?>
            <!-- publisher-options -->

            <!-- publisher-buttons -->
            <div class="publisher-footer-buttons">
              <?php if ($_smarty_tpl->getValue('_privacy')) {?>
                <?php if ($_smarty_tpl->getValue('system')['newsfeed_source'] == "default") {?>
                  <!-- privacy -->
                  <?php if ($_smarty_tpl->getValue('system')['default_privacy'] == "me") {?>
                    <div class="btn-group js_publisher-privacy" data-value="me">
                      <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                        <i class="btn-group-icon fa fa-lock mr10"></i><span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>
</span>
                      </button>
                      <div class="dropdown-menu">
                        <div class="dropdown-item pointer" data-value="public">
                          <i class="fa fa-globe mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                        </div>
                        <div class="dropdown-item pointer" data-value="friends">
                          <i class="fa fa-users mr5"></i><?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                        </div>
                        <?php if ($_smarty_tpl->getValue('_handle') == 'me') {?>
                          <div class="dropdown-item pointer" data-value="me">
                            <i class="fa fa-lock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>

                          </div>
                        <?php }?>
                      </div>
                    </div>
                  <?php } elseif ($_smarty_tpl->getValue('system')['default_privacy'] == "friends") {?>
                    <div class="btn-group js_publisher-privacy" data-value="friends">
                      <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                        <i class="btn-group-icon fa fa-users mr10"></i><span class="btn-group-text"><?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?></span>
                      </button>
                      <div class="dropdown-menu">
                        <div class="dropdown-item pointer" data-value="public">
                          <i class="fa fa-globe mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                        </div>
                        <div class="dropdown-item pointer" data-value="friends">
                          <i class="fa fa-users mr5"></i><?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                        </div>
                        <?php if ($_smarty_tpl->getValue('_handle') == 'me') {?>
                          <div class="dropdown-item pointer" data-value="me">
                            <i class="fa fa-lock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>

                          </div>
                        <?php }?>
                      </div>
                    </div>
                  <?php } else { ?>
                    <div class="btn-group js_publisher-privacy" data-value="public">
                      <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-display="static">
                        <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>
</span>
                      </button>
                      <div class="dropdown-menu">
                        <div class="dropdown-item pointer" data-value="public">
                          <i class="fa fa-globe mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>

                        </div>
                        <div class="dropdown-item pointer" data-value="friends">
                          <i class="fa fa-users mr5"></i><?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                        </div>
                        <?php if ($_smarty_tpl->getValue('_handle') == 'me') {?>
                          <div class="dropdown-item pointer" data-value="me">
                            <i class="fa fa-lock mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>

                          </div>
                        <?php }?>
                      </div>
                    </div>
                  <?php }?>

                  <?php if ($_smarty_tpl->getValue('_handle') == "me" && $_smarty_tpl->getValue('system')['anonymous_mode']) {?>
                    <button disabled="disabled" type="button" class="btn btn-light x-hidden js_publisher-privacy-public">
                      <i class="btn-group-icon fa fa-globe mr10"></i><span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>
</span>
                    </button>
                  <?php }?>
                  <!-- privacy -->
                <?php }?>
              <?php }?>
              <div class="d-grid">
                <?php if ($_smarty_tpl->getValue('_post_as_page')) {?>
                  <input type="hidden" name="post_as_page" value="<?php echo $_smarty_tpl->getValue('_page_id');?>
">
                <?php }?>
                <button type="button" class="btn btn-primary ml5 js_publisher-btn js_publisher"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post");?>
</button>
              </div>
              <!-- publisher-buttons -->
            </div>
          </div>
          <!-- publisher-footer -->
        </div>
        <!-- publisher-slider -->
      </div>
    </div>
  <?php }
}
}
}
