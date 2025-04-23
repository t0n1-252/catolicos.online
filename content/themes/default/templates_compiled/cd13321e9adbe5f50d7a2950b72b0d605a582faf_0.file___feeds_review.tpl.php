<?php
/* Smarty version 5.4.1, created on 2025-04-20 03:57:53
  from 'file:__feeds_review.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680470c19ad1d9_48543566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd13321e9adbe5f50d7a2950b72b0d605a582faf' => 
    array (
      0 => '__feeds_review.tpl',
      1 => 1744139704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 3,
  ),
))) {
function content_680470c19ad1d9_48543566 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="<?php if ($_smarty_tpl->getValue('_wide')) {?>col-12<?php } else { ?>col-md-6<?php }?>">
  <div class="ui-box <?php if ($_smarty_tpl->getValue('_darker')) {?>darker<?php }?>">
    <div class="img">
      <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_review')['user_name'];?>
">
        <img src="<?php echo $_smarty_tpl->getValue('_review')['user_picture'];?>
" />
      </a>
    </div>
    <div class="mt10">
      <span class="js_user-popover" data-uid="<?php echo $_smarty_tpl->getValue('_review')['user_id'];?>
">
        <a class="h6" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('_review')['user_name'];?>
">
          <?php echo $_smarty_tpl->getValue('_review')['user_fullname'];?>

        </a>
      </span>
      <?php if ($_smarty_tpl->getValue('_review')['user_verified']) {?>
        <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>
'>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        </span>
      <?php }?>
      <?php if ($_smarty_tpl->getValue('_review')['user_subscribed']) {?>
        <span class="pro-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pro User");?>
'>
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pro_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
        </span>
      <?php }?>
    </div>
    <!-- time -->
    <div class="mt5">
      <i class="fa-regular fa-clock mr5"></i><small class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('_review')['time'];?>
"><?php echo $_smarty_tpl->getValue('_review')['time'];?>
</small>
    </div>
    <!-- time -->
    <!-- rating -->
    <div class="review-stars mt10">
      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_review')['rate'] >= 1) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_review')['rate'] >= 2) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_review')['rate'] >= 3) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_review')['rate'] >= 4) {?>checked<?php }?>"></i>
      <i class="fa fa-star <?php if ($_smarty_tpl->getValue('_review')['rate'] >= 5) {?>checked<?php }?>"></i>
    </div>
    <!-- rating -->
    <!-- review -->
    <?php if ($_smarty_tpl->getValue('_review')['review']) {?>
      <div class="review-review mt10">
        <?php echo $_smarty_tpl->getValue('_review')['review'];?>

      </div>
    <?php }?>
    <!-- review -->
    <!-- photos -->
    <?php if ($_smarty_tpl->getValue('_review')['photos']) {?>
      <div class="review-photos mt10">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_review')['photos'], '_photo');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_photo')->value) {
$foreach1DoElse = false;
?>
          <span class="pointer js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_photo')['source'];?>
">
            <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('_photo')['source'];?>
">
          </span>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>
    <?php }?>
    <!-- photos -->
    <!-- reply -->
    <?php if ($_smarty_tpl->getValue('_review')['reply']) {?>
      <div class="divider dashed mtb10"></div>
      <div class="review-reply">
        <div class="data-container">
          <?php if ($_smarty_tpl->getValue('_review')['node_type'] == "page") {?>
            <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/<?php echo $_smarty_tpl->getValue('_review')['page']['page_name'];?>
">
              <img src="<?php echo $_smarty_tpl->getValue('_review')['page']['page_picture'];?>
">
            </a>
            <div class="data-content text-start">
              <div>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/pages/<?php echo $_smarty_tpl->getValue('_review')['page']['page_name'];?>
">
                  <?php echo $_smarty_tpl->getValue('_review')['page']['page_title'];?>

                </a>
                <?php if ($_smarty_tpl->getValue('_review')['page']['page_verified']) {?>
                  <span class="verified-badge" data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Page");?>
'>
                    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"verified_badge",'width'=>"20px",'height'=>"20px"), (int) 0, $_smarty_current_dir);
?>
                  </span>
                <?php }?>
              </div>
              <div class="mt5">
                <?php echo $_smarty_tpl->getValue('_review')['reply'];?>

              </div>
            </div>
          <?php } elseif ($_smarty_tpl->getValue('_review')['node_type'] == "group") {?>
            <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_review')['group']['group_name'];?>
">
              <img src="<?php echo $_smarty_tpl->getValue('_review')['group']['group_picture'];?>
">
            </a>
            <div class="data-content text-start">
              <div>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/groups/<?php echo $_smarty_tpl->getValue('_review')['group']['group_name'];?>
">
                  <?php echo $_smarty_tpl->getValue('_review')['group']['group_title'];?>

                </a>
              </div>
              <div class="mt5">
                <?php echo $_smarty_tpl->getValue('_review')['reply'];?>

              </div>
            </div>

          <?php } elseif ($_smarty_tpl->getValue('_review')['node_type'] == "event") {?>
            <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_review')['event']['event_id'];?>
">
              <img src="<?php echo $_smarty_tpl->getValue('_review')['event']['event_picture'];?>
">
            </a>
            <div class="data-content text-start">
              <div>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/events/<?php echo $_smarty_tpl->getValue('_review')['event']['event_id'];?>
">
                  <?php echo $_smarty_tpl->getValue('_review')['event']['event_title'];?>

                </a>
              </div>
              <div class="mt5">
                <?php echo $_smarty_tpl->getValue('_review')['reply'];?>

              </div>
            </div>

          <?php } elseif ($_smarty_tpl->getValue('_review')['node_type'] == "post") {?>
            <a class="data-avatar" href="<?php echo $_smarty_tpl->getValue('_review')['post']['post_author_url'];?>
">
              <img src="<?php echo $_smarty_tpl->getValue('_review')['post']['post_author_picture'];?>
">
            </a>
            <div class="data-content text-start">
              <div>
                <a href="<?php echo $_smarty_tpl->getValue('_review')['post']['post_author_url'];?>
">
                  <?php echo $_smarty_tpl->getValue('_review')['event']['event_title'];?>

                </a>
              </div>
              <div class="mt5">
                <?php echo $_smarty_tpl->getValue('_review')['reply'];?>

              </div>
            </div>

          <?php }?>
        </div>
      </div>
    <?php }?>
    <!-- reply -->
    <!-- actions -->
    <?php if ($_smarty_tpl->getValue('_review')['manage_review'] && !$_smarty_tpl->getValue('_review')['reply']) {?>
      <div class="divider dashed mtb10"></div>
      <button type="button" class="btn btn-sm btn-primary rounded-pill" data-toggle="modal" data-url="modules/review.php?do=reply&id=<?php echo $_smarty_tpl->getValue('_review')['review_id'];?>
">
        <i class="fa fa-comment mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reply");?>

      </button>
    <?php }?>
    <!-- actions -->
  </div>
</div><?php }
}
