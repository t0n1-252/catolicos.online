<?php
/* Smarty version 5.4.1, created on 2025-04-20 20:37:47
  from 'file:ajax.story.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68055b1be3cc57_79139938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf08012b915f00759805a57202579891a179743' => 
    array (
      0 => 'ajax.story.publisher.tpl',
      1 => 1744139734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
  ),
))) {
function content_68055b1be3cc57_79139938 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"24_hours",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Story");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini">
  <div class="modal-body">

    <?php if ($_smarty_tpl->getValue('user')->_is_admin) {?>
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads Story");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share this story as ads so all users see it");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="is_ads">
            <input type="checkbox" name="is_ads" id="is_ads">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
    <?php }?>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Message");?>
</label>
          <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    <?php if ($_smarty_tpl->getValue('user')->_data['can_upload_videos']) {?>
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</label>
        <div class="attachments clearfix" data-type="videos">
          <ul>
            <li class="add">
              <i class="fa fa-video js_x-uploader" data-type="video" data-handle="publisher-mini" data-multiple="true"></i>
            </li>
          </ul>
        </div>
      </div>
    <?php }?>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-story"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
  </div>
</form><?php }
}
