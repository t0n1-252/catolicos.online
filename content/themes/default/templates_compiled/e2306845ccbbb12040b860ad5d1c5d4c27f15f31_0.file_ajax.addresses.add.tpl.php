<?php
/* Smarty version 5.4.1, created on 2025-04-21 16:16:00
  from 'file:ajax.addresses.add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68066f402e11a6_60879567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2306845ccbbb12040b860ad5d1c5d4c27f15f31' => 
    array (
      0 => 'ajax.addresses.add.tpl',
      1 => 1744139789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_68066f402e11a6_60879567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Address");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="users/addresses.php?do=insert">
  <div class="modal-body">
    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- title -->
    <div class="row">
      <!-- country -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
        <input name="country" type="text" class="form-control">
      </div>
      <!-- country -->
      <!-- city -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("City");?>
</label>
        <input name="city" type="text" class="form-control">
      </div>
      <!-- city -->
    </div>
    <div class="row">
      <!-- zip code -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Zip Code");?>
</label>
        <input name="zip_code" type="text" class="form-control">
      </div>
      <!-- zip code -->
      <!-- phone -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone");?>
</label>
        <input name="phone" type="text" class="form-control">
      </div>
      <!-- phone -->
    </div>
    <!-- address -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Address");?>
</label>
      <textarea name="address" rows="2" dir="auto" class="form-control"></textarea>
    </div>
    <!-- address -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add");?>
</button>
  </div>
</form><?php }
}
