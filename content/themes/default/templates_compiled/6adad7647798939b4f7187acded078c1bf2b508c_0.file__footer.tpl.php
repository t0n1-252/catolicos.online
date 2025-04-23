<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:32:26
  from 'file:_footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c1ace57a1_87907351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6adad7647798939b4f7187acded078c1bf2b508c' => 
    array (
      0 => '_footer.tpl',
      1 => 1744139731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_ads.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:_js_templates.tpl' => 1,
    'file:_footer.bottom_bar.tpl' => 1,
  ),
))) {
function content_68004c1ace57a1_87907351 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- ads -->
<?php $_smarty_tpl->renderSubTemplate('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->getValue('ads_master')['footer'],'_master'=>true), (int) 0, $_smarty_current_dir);
?>
<!-- ads -->

<?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array('index','profile','page','group','event'))) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>

</div>
<!-- main wrapper -->

<!-- Dependencies CSS [Twemoji-Awesome] -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zamblektech/twemoji-amazing@latest/twemoji-amazing.css">
<!-- Dependencies CSS [Twemoji-Awesome] -->

<!-- JS Files -->
<?php $_smarty_tpl->renderSubTemplate('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<!-- JS Files -->

<!-- JS Templates -->
<?php $_smarty_tpl->renderSubTemplate('file:_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<!-- JS Templates -->

<!-- Footer Custom JavaScript -->
<?php if ($_smarty_tpl->getValue('system')['custome_js_footer']) {?>
  <?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['custome_js_footer'],ENT_QUOTES);?>

  <?php echo '</script'; ?>
>
<?php }?>
<!-- Footer Custom JavaScript -->

<!-- Analytics Code -->
<?php if ($_smarty_tpl->getValue('system')['analytics_code']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['analytics_code'],ENT_QUOTES);
}?>
<!-- Analytics Code -->

<!-- Sounds -->
<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
  <!-- Notification -->
  <audio id="notification-sound" preload="auto">
    <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/notification.mp3" type="audio/mpeg">
  </audio>
  <!-- Notification -->
  <?php if ($_smarty_tpl->getValue('system')['chat_enabled']) {?>
    <!-- Chat -->
    <audio id="chat-sound" preload="auto">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/chat.mp3" type="audio/mpeg">
    </audio>
    <!-- Chat -->
    <!-- Call -->
    <audio id="chat-calling-sound" preload="auto" loop="true">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/calling.mp3" type="audio/mpeg">
    </audio>
    <!-- Call -->
    <!-- Video -->
    <audio id="chat-ringing-sound" preload="auto" loop="true">
      <source src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/sounds/ringing.mp3" type="audio/mpeg">
    </audio>
    <!-- Video -->
  <?php }
}?>
<!-- Sounds -->

<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>
  <?php $_smarty_tpl->renderSubTemplate('file:_footer.bottom_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>

</body>

</html><?php }
}
