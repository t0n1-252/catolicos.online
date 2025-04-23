<?php
/* Smarty version 5.4.1, created on 2025-04-20 03:57:57
  from 'file:ajax.review.reply.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680470c591dbc0_80301995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50fe87b5c7de94a35fa1bb7bd53a462f22a7185' => 
    array (
      0 => 'ajax.review.reply.publisher.tpl',
      1 => 1744139712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_680470c591dbc0_80301995 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reply To Review");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="modules/review.php?do=publish-reply&id=<?php echo $_smarty_tpl->getValue('review')['review_id'];?>
" method="POST">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write Your Reply");?>
</label>
      <textarea name="reply" rows="5" dir="auto" class="form-control"></textarea>
    </div>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Submit");?>
</button>
  </div>
</form><?php }
}
