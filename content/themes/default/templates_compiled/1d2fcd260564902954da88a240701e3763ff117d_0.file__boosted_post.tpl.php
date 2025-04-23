<?php
/* Smarty version 5.4.1, created on 2025-04-19 23:09:09
  from 'file:_boosted_post.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68042d1500fc84_29863286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2fcd260564902954da88a240701e3763ff117d' => 
    array (
      0 => '_boosted_post.tpl',
      1 => 1744139736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
))) {
function content_68042d1500fc84_29863286 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted Posts");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->renderSubTemplate('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'boosted'=>true), (int) 0, $_smarty_current_dir);
}
}
