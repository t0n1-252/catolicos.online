<?php
/* Smarty version 5.4.1, created on 2025-04-20 03:41:12
  from 'file:ajax.review.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68046cd8ef15b0_94811832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36b4e6e372ef1c9479322caf74473cf906d6caf' => 
    array (
      0 => 'ajax.review.publisher.tpl',
      1 => 1744139779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
))) {
function content_68046cd8ef15b0_94811832 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Review");?>
 <?php echo $_smarty_tpl->getValue('node_title');?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini" data-id="<?php echo $_smarty_tpl->getValue('node_id');?>
" data-type="<?php echo $_smarty_tpl->getValue('node_type');?>
">
  <div class="modal-body">

    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Rating");?>
</label>
      <div class="star-rating js_star-rating">
        <input type="radio" id="star5" name="rating" value="5" />
        <label for="star5"><i class="fa fa-star"></i></label>
        <input type="radio" id="star4" name="rating" value="4" />
        <label for="star4"><i class="fa fa-star"></i></label>
        <input type="radio" id="star3" name="rating" value="3" />
        <label for="star3"><i class="fa fa-star"></i></label>
        <input type="radio" id="star2" name="rating" value="2" />
        <label for="star2"><i class="fa fa-star"></i></label>
        <input type="radio" id="star1" name="rating" value="1" />
        <label for="star1"><i class="fa fa-star"></i></label>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write Your Review");?>
</label>
      <textarea name="review" rows="5" dir="auto" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photos");?>
</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-review"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Submit");?>
</button>
  </div>
</form><?php }
}
