<?php
/* Smarty version 5.4.1, created on 2025-04-20 03:57:53
  from 'file:ajax.who_reviews.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680470c1990538_12447607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '703ea7944d9f41688ea40ac27418d9d06ff2a0fe' => 
    array (
      0 => 'ajax.who_reviews.tpl',
      1 => 1744139709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_review.tpl' => 1,
  ),
))) {
function content_680470c1990538_12447607 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post Reviews");?>
</h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <?php if ($_smarty_tpl->getValue('post')['reviews_count'] > 0) {?>
    <ul class="row">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['reviews'], '_review');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_review')->value) {
$foreach0DoElse = false;
?>
        <?php $_smarty_tpl->renderSubTemplate('file:__feeds_review.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_darker'=>true,'_wide'=>true), (int) 0, $_smarty_current_dir);
?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
    <?php if ($_smarty_tpl->getValue('post')['reviews_count'] >= $_smarty_tpl->getValue('system')['max_results_even']) {?>
      <!-- see-more -->
      <div class="alert alert-post see-more mt0 mb20 js_see-more" data-get="reviews" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" data-type="post">
        <span><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See More");?>
</span>
        <div class="loader loader_small x-hidden"></div>
      </div>
      <!-- see-more -->
    <?php }?>
  <?php } else { ?>
    <p class="text-center text-muted mt10">
      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("this post");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("doesn't have reviews");?>

    </p>
  <?php }?>
</div><?php }
}
