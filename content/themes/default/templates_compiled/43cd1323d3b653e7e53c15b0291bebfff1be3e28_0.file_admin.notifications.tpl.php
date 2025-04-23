<?php
/* Smarty version 5.4.1, created on 2025-04-19 23:10:08
  from 'file:admin.notifications.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68042d50e35bf7_82732801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43cd1323d3b653e7e53c15b0291bebfff1be3e28' => 
    array (
      0 => 'admin.notifications.tpl',
      1 => 1744139734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68042d50e35bf7_82732801 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-bell mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mass Notifications");?>

  </div>

  <!-- Mass Notifications -->
  <form class="js_ajax-forms" data-url="admin/notifications.php">
    <div class="card-body">
      <div class="alert alert-info">
        <div class="text">
          <strong><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mass Notifications");?>
</strong><br>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable you to send notifications to all site users");?>
.<br>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("URL");?>

        </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="url">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notification link used when user clicks on the notification");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Message");?>

        </label>
        <div class="col-sm-9">
          <textarea class="form-control" rows="3" name="message"></textarea>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mt15 mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-paper-plane mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Send");?>

      </button>
    </div>
  </form>
  <!-- Mass Notifications -->

</div><?php }
}
