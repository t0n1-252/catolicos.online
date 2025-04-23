<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:56:18
  from 'file:ajax.autocomplete.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e982a9fec9_36705974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3667dea5c09909fa66b4f72db2bc6995f2bae818' => 
    array (
      0 => 'ajax.autocomplete.tpl',
      1 => 1744139754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6801e982a9fec9_36705974 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><ul>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), '_user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach0DoElse = false;
?>
    <li>
      <div class="data-container clickable small <?php if ($_smarty_tpl->getValue('type') == 'tags') {?>js_tag-add<?php } else { ?>js_autocomplete-add<?php }?>" data-uid="<?php echo $_smarty_tpl->getValue('_user')['user_id'];?>
" data-name="<?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?>" <?php if ($_smarty_tpl->getValue('_user')['chat_price']) {?>data-chat-price="<?php echo $_smarty_tpl->getValue('_user')['chat_price'];?>
" <?php }?> <?php if ($_smarty_tpl->getValue('_user')['call_price']) {?>data-call-price="<?php echo $_smarty_tpl->getValue('_user')['call_price'];?>
" <?php }?>>
        <div class="data-avatar">
          <img class="data-avatar" src="<?php echo $_smarty_tpl->getValue('_user')['user_picture'];?>
" alt="">
        </div>
        <div class="data-content">
          <div><strong><?php if ($_smarty_tpl->getValue('system')['show_usernames_enabled']) {
echo $_smarty_tpl->getValue('_user')['user_name'];
} else {
echo $_smarty_tpl->getValue('_user')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('_user')['user_lastname'];
}?></strong></div>
        </div>
      </div>
    </li>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</ul><?php }
}
