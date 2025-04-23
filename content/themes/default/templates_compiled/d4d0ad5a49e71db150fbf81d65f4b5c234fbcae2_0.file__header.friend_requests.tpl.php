<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:34:23
  from 'file:_header.friend_requests.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c8fd6e6e8_02620378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d0ad5a49e71db150fbf81d65f4b5c234fbcae2' => 
    array (
      0 => '_header.friend_requests.tpl',
      1 => 1744139704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
  ),
))) {
function content_68004c8fd6e6e8_02620378 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><li class="dropdown js_live-requests">
  <a href="#" data-bs-toggle="dropdown" data-display="static">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-friends",'class'=>"header-icon",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <span class="counter red shadow-sm rounded-pill <?php if ($_smarty_tpl->getValue('user')->_data['user_live_requests_counter'] == 0) {?>x-hidden<?php }?>">
      <?php echo $_smarty_tpl->getValue('user')->_data['user_live_requests_counter'];?>

    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-end dropdown-widget js_dropdown-keepopen">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friend Requests");?>
</span>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <!-- Friend Requests -->
        <?php if ($_smarty_tpl->getValue('user')->_data['friend_requests']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user')->_data['friend_requests'], '_user');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('_user')->value) {
$foreach9DoElse = false;
?>
              <?php $_smarty_tpl->renderSubTemplate('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_connection'=>"request"), (int) 0, $_smarty_current_dir);
?>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No new requests");?>

          </p>
        <?php }?>
        <!-- Friend Requests -->
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/people/friend_requests"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("See All");?>
</a>
  </div>
</li><?php }
}
