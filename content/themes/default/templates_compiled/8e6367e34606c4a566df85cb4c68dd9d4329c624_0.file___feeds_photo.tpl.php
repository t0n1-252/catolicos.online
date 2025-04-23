<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:37:07
  from 'file:__feeds_photo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d33acdec5_68510890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6367e34606c4a566df85cb4c68dd9d4329c624' => 
    array (
      0 => '__feeds_photo.tpl',
      1 => 1744139717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68004d33acdec5_68510890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="<?php if ($_smarty_tpl->getValue('_small')) {?>col-4<?php } else { ?>col-6 col-md-4 col-lg-2<?php }?> <?php if ($_smarty_tpl->getValue('photo')['blur']) {?>x-blured<?php }?>">
  <a class="pg_photo <?php if (!$_smarty_tpl->getValue('_small')) {?>large<?php }?> js_lightbox" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/photos/<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
" data-context="<?php echo $_smarty_tpl->getValue('_context');?>
" style="background-image:url(<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('photo')['source'];?>
);">
    <?php if (!$_smarty_tpl->getValue('_small') && ($_smarty_tpl->getValue('_manage') || $_smarty_tpl->getValue('photo')['manage'])) {?>
      <!-- delete -->
      <div class="pg_photo-delete-btn">
        <button type="button" class="btn-close js_delete-photo" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
'></button>
      </div>
      <!-- delete -->
      <?php if ($_smarty_tpl->getValue('_can_pin')) {?>
        <!-- pin -->
        <div class="pg_photo-pin-btn <?php if ($_smarty_tpl->getValue('photo')['pinned']) {?>js_unpin-photo pinned<?php } else { ?>js_pin-photo<?php }?>" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pin");?>
'>
          <i class="fa-solid fa-paperclip"></i>
        </div>
        <!-- pin -->
      <?php }?>
    <?php }?>
  </a>
</div><?php }
}
