<?php
/* Smarty version 5.4.1, created on 2025-04-18 14:33:45
  from 'file:_album.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680262c97ef776_60398336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e95e55bc048db87fac16e4fb868e2e4ef836add' => 
    array (
      0 => '_album.tpl',
      1 => 1744139723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_photo.tpl' => 1,
  ),
))) {
function content_680262c97ef776_60398336 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- album buttons -->
<?php if ($_smarty_tpl->getValue('album')['manage_album'] && $_smarty_tpl->getValue('album')['can_delete']) {?>
  <div class="text-center">
    <button type="button" class="btn btn-sm btn-outline-primary rounded-pill ml5 mb5" data-toggle="modal" data-url="albums/modal.php?do=edit_title&id=<?php echo $_smarty_tpl->getValue('album')['album_id'];?>
">
      <i class="fa fa-pencil-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit Album");?>

    </button>
    <?php if ($_smarty_tpl->getValue('system')['photos_enabled']) {?>
      <button type="button" class="btn btn-sm btn-outline-primary rounded-pill ml5 mb5" data-toggle="modal" data-url="albums/modal.php?do=add_photos&id=<?php echo $_smarty_tpl->getValue('album')['album_id'];?>
">
        <i class="fa fa-plus-circle mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add Photos");?>

      </button>
    <?php }?>
    <button type="button" class="btn btn-sm btn-outline-danger rounded-pill ml5 mb5 js_delete-album" data-id="<?php echo $_smarty_tpl->getValue('album')['album_id'];?>
">
      <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Album");?>

    </button>
  </div>
<?php }?>
<!-- album buttons -->

<!-- album title & meta -->
<div class="album-title">
  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('album')['title']);?>

</div>
<div class="album-meta">
  <?php if ($_smarty_tpl->getValue('album')['privacy'] == "me") {?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <i class="fa fa-lock" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Me");?>
'></i>
  <?php } elseif ($_smarty_tpl->getValue('album')['privacy'] == "friends") {?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <i class="fa fa-users" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
: <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>'></i>
  <?php } elseif ($_smarty_tpl->getValue('album')['privacy'] == "public") {?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <i class="fa fa-globe" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Public");?>
'></i>
  <?php } elseif ($_smarty_tpl->getValue('album')['privacy'] == "custom") {?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <i class="fa fa-cog" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Shared with");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom People");?>
'></i>
  <?php }?>
</div>
<!-- album title & meta -->

<!-- photos -->
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('album')['photos']) > 0) {?>
  <ul class="row">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('album')['photos'], 'photo');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach0DoElse = false;
?>
      <?php $_smarty_tpl->renderSubTemplate('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"album",'_manage'=>$_smarty_tpl->getValue('album')['manage_album']), (int) 0, $_smarty_current_dir);
?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </ul>
  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('album')['photos']) >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
    <!-- see-more -->
    <div class="alert alert-post see-more mt20 js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->getValue('album')['album_id'];?>
" data-type='album'>
      <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php }
} else { ?>
  <p class="text-center text-muted mt10">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This album is empty");?>

  </p>
<?php }?>
<!-- photos --><?php }
}
