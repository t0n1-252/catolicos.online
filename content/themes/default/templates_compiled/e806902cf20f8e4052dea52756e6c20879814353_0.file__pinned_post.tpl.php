<?php
/* Smarty version 5.4.1, created on 2025-04-19 23:16:59
  from 'file:_pinned_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68042eeb2c33d4_00038878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e806902cf20f8e4052dea52756e6c20879814353' => 
    array (
      0 => '_pinned_post.tpl',
      1 => 1744139800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_68042eeb2c33d4_00038878 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), (int) 0, $_smarty_current_dir);
}
}
