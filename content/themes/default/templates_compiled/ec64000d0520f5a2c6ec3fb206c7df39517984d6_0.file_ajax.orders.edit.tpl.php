<?php
/* Smarty version 5.4.1, created on 2025-04-21 16:58:57
  from 'file:ajax.orders.edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6806795129ce80_51605904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec64000d0520f5a2c6ec3fb206c7df39517984d6' => 
    array (
      0 => 'ajax.orders.edit.tpl',
      1 => 1744139709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6806795129ce80_51605904 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Update Order");?>
 #<?php echo $_smarty_tpl->getValue('order')['order_hash'];?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="users/orders.php?do=update">
  <div class="modal-body">
    <!-- status -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</label>
      <select class="form-select" name="status">
        <?php if ($_smarty_tpl->getValue('order')['seller_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
          <option value="placed" <?php if ($_smarty_tpl->getValue('order')['status'] == "placed") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')("placed"));?>
</option>
          <option value="canceled" <?php if ($_smarty_tpl->getValue('order')['status'] == "canceled") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')("canceled"));?>
</option>
          <option value="accepted" <?php if ($_smarty_tpl->getValue('order')['status'] == "accepted") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')("accepted"));?>
</option>
          <option value="packed" <?php if ($_smarty_tpl->getValue('order')['status'] == "packed") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')("packed"));?>
</option>
          <option value="shipped" <?php if ($_smarty_tpl->getValue('order')['status'] == "shipped") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')("shipped"));?>
</option>
        <?php } else { ?>
          <option value="delivered" <?php if ($_smarty_tpl->getValue('order')['status'] == "delivered") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getSmarty()->getModifierCallback('__')("delivered"));?>
</option>
        <?php }?>
      </select>
    </div>
    <!-- status -->
    <?php if ($_smarty_tpl->getValue('order')['seller_id'] == $_smarty_tpl->getValue('user')->_data['user_id']) {?>
      <!-- tracking link -->
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tracking Link");?>
</label>
        <input name="tracking_link" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('order')['tracking_link'];?>
">
      </div>
      <!-- tracking link -->
      <!-- tracking number -->
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tracking Number");?>
</label>
        <input name="tracking_number" type="text" class="form-control" value="<?php echo $_smarty_tpl->getValue('order')['tracking_number'];?>
">
      </div>
      <!-- tracking number -->
    <?php }?>
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->getValue('order')['order_id'];?>
">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Update");?>
</button>
  </div>
</form><?php }
}
