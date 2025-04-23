<?php
/* Smarty version 5.4.1, created on 2025-04-21 17:52:18
  from 'file:__feeds_product.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680685d272a6a2_88097590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ffe89f76f0598ea7648b9f05e84a5aa3c0aa87b' => 
    array (
      0 => '__feeds_product.tpl',
      1 => 1744139735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_need_subscription.tpl' => 1,
    'file:__svg_icons.tpl' => 3,
  ),
))) {
function content_680685d272a6a2_88097590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="col-md-6 col-lg-4">
  <div class="card product <?php if ($_smarty_tpl->getValue('_boosted')) {?>boosted<?php }?>">
    <?php if ($_smarty_tpl->getValue('_boosted')) {?>
      <div class="boosted-icon" data-bs-toggle="tooltip" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Promoted");?>
">
        <i class="fa fa-bullhorn"></i>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('post')['needs_subscription']) {?>
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->renderSubTemplate('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
      </a>
    <?php } else { ?>
      <div class="product-image">
        <div class="product-price">
          <?php if ($_smarty_tpl->getValue('post')['product']['price'] > 0) {?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('post')['product']['price']);?>

          <?php } else { ?>
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free");?>

          <?php }?>
        </div>
        <?php if ($_smarty_tpl->getValue('post')['photos_num'] > 0) {?>
          <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('post')['photos'][0]['source'];?>
">
        <?php } else { ?>
          <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/blank_product.png">
        <?php }?>
        <div class="product-overlay">
          <a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("More");?>

          </a>
        </div>
      </div>
      <div class="product-info">
        <div class="product-meta">
          <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/posts/<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" class="title"><?php echo $_smarty_tpl->getValue('post')['product']['name'];?>
</a>
          <?php if ($_smarty_tpl->getValue('post')['product']['is_digital']) {?>
            <span class="badge bg-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Digital");?>
</span>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('post')['product']['status'] == "new") {?>
            <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New");?>
</span>
          <?php } else { ?>
            <span class="badge bg-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Used");?>
</span>
          <?php }?>
        </div>
        <div class="product-meta">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <?php if ($_smarty_tpl->getValue('post')['product']['available']) {?>
            <?php if ($_smarty_tpl->getValue('post')['product']['quantity'] > 0) {?>
              <span class="badge badge-lg bg-light text-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In stock");?>
</span>
            <?php } else { ?>
              <span class="badge badge-lg bg-light text-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Out of stock");?>
</span>
            <?php }?>
          <?php } else { ?>
            <span class="badge badge-lg bg-light text-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SOLD");?>
</span>
          <?php }?>
        </div>
        <div class="product-meta">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
          <?php if ($_smarty_tpl->getValue('post')['product']['location']) {
echo $_smarty_tpl->getValue('post')['product']['location'];
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("N/A");
}?>
        </div>
        <?php if ($_smarty_tpl->getValue('system')['posts_reviews_enabled']) {?>
          <div class="product-meta">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
            <span><?php echo $_smarty_tpl->getValue('post')['reviews_count'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reviews");?>
</span>
            <?php if ($_smarty_tpl->getValue('post')['post_rate']) {?>
              <span class="review-stars small ml5">
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 1) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 2) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 3) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 4) {?>checked<?php }?>"></i>
                <i class="fa fa-star <?php if ($_smarty_tpl->getValue('post')['post_rate'] >= 5) {?>checked<?php }?>"></i>
              </span>
              <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('post')['post_rate'],1);?>
</span>
            <?php }?>
          </div>
        <?php }?>
      </div>
    <?php }?>
  </div>
</div><?php }
}
