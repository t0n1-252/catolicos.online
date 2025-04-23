<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:37:02
  from 'file:__feeds_post.comments.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d2ee551d2_50833270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f69b07f0634d1d41c41d63d7a52296f6909ba22' => 
    array (
      0 => '__feeds_post.comments.tpl',
      1 => 1744139804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.form.tpl' => 2,
    'file:__feeds_comment.tpl' => 2,
  ),
))) {
function content_68004d2ee551d2_50833270 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="post-comments">
  <?php if ($_smarty_tpl->getValue('_is_photo')) {?>

    <!-- sort comments -->
    <?php if ($_smarty_tpl->getValue('photo')['comments'] > 0) {?>
      <div class="comments-filter">
        <div class="btn-group btn-group-sm js_comments-filter" data-value="photo_comments">
          <button type="button" class="btn dropdown-toggle ptb0 plr0" data-bs-toggle="dropdown" data-display="static">
            <span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</span>
          </button>
          <div class="dropdown-menu dropdown-menu-left">
            <div class="dropdown-item pointer" data-value="photo_comments" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</div>
            <div class="dropdown-item pointer" data-value="photo_comments_top" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Top Comments");?>
</div>
            <div class="dropdown-item pointer" data-value="photo_comments_all" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Comments");?>
</div>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- sort comments -->

    <!-- post comment -->
    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'photo','_id'=>$_smarty_tpl->getValue('photo')['photo_id']), (int) 0, $_smarty_current_dir);
?>
    <!-- post comment -->

    <!-- comments loader -->
    <div class="text-center x-hidden js_comments-filter-loader">
      <div class="loader loader_large"></div>
    </div>
    <!-- comments loader -->

    <!-- comments -->
    <ul class="js_comments <?php if ($_smarty_tpl->getValue('photo')['comments'] > 0) {?>pt10<?php }?>">
      <?php if ($_smarty_tpl->getValue('photo')['comments'] > 0) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('photo')['photo_comments'], 'comment');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comment')->value) {
$foreach10DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->getValue('comment')), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php }?>
    </ul>
    <!-- comments -->

    <!-- previous comments -->
    <?php if ($_smarty_tpl->getValue('photo')['comments'] >= $_smarty_tpl->getValue('system')['min_results']) {?>
      <div class="pb10 text-center js_see-more" data-get="photo_comments" data-id="<?php echo $_smarty_tpl->getValue('photo')['photo_id'];?>
" data-remove="true" data-target-stream=".js_comments">
        <span class="text-link">
          <i class="fa fa-comment"></i>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View previous comments");?>

        </span>
        <div class="loader loader_small x-hidden"></div>
      </div>
    <?php }?>
    <!-- previous comments -->

  <?php } else { ?>

    <!-- sort comments -->
    <?php if ($_smarty_tpl->getValue('post')['comments'] > 0) {?>
      <div class="comments-filter">
        <div class="btn-group btn-group-sm js_comments-filter" data-value="post_comments">
          <button type="button" class="btn dropdown-toggle ptb0 plr0" data-bs-toggle="dropdown" data-display="static">
            <span class="btn-group-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</span>
          </button>
          <div class="dropdown-menu dropdown-menu-left">
            <div class="dropdown-item pointer" data-value="post_comments" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Most Recent");?>
</div>
            <div class="dropdown-item pointer" data-value="post_comments_top" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Top Comments");?>
</div>
            <div class="dropdown-item pointer" data-value="post_comments_all" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Comments");?>
</div>
          </div>
        </div>
      </div>
    <?php }?>
    <!-- sort comments -->

    <!-- post comment -->
    <?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->getValue('post')['post_id']), (int) 0, $_smarty_current_dir);
?>
    <!-- post comment -->

    <!-- comments loader -->
    <div class="text-center x-hidden js_comments-filter-loader">
      <div class="loader loader_large"></div>
    </div>
    <!-- comments loader -->

    <!-- comments -->
    <ul class="js_comments <?php if ($_smarty_tpl->getValue('post')['comments'] > 0) {?>pt10<?php }?> <?php if ($_smarty_tpl->getValue('_live_comments')) {?>js_live-comments<?php }?>">
      <?php if ($_smarty_tpl->getValue('post')['comments'] > 0) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('post')['post_comments'], 'comment');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('comment')->value) {
$foreach11DoElse = false;
?>
          <?php $_smarty_tpl->renderSubTemplate('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->getValue('comment')), (int) 0, $_smarty_current_dir);
?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php }?>
    </ul>
    <!-- comments -->

    <!-- previous comments -->
    <?php if ($_smarty_tpl->getValue('post')['comments'] >= $_smarty_tpl->getValue('system')['min_results']) {?>
      <div class="ptb10 text-center js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" data-remove="true" data-target-stream=".js_comments">
        <span class="text-link">
          <i class="fa fa-comment"></i>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("View previous comments");?>

        </span>
        <div class="loader loader_small x-hidden"></div>
      </div>
    <?php }?>
    <!-- previous comments -->

  <?php }?>
</div><?php }
}
