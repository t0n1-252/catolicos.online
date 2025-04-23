<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:34:23
  from 'file:_footer_mini.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c8ff23510_54491589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e45b9402cff2170c0af9f68d3b9147bb4aa513' => 
    array (
      0 => '_footer_mini.tpl',
      1 => 1744139757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68004c8ff23510_54491589 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="mini-footer plr10">
  <div class="copyrights dropdown">
    <span class="mr5">&copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')('Y');?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
</span>
    <!-- language -->
    <a href="#" class="language-dropdown" data-bs-toggle="dropdown">
      <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->getValue('system')['language']['flag'];?>
">
      <span><?php echo $_smarty_tpl->getValue('system')['language']['title'];?>
</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
      <div class="js_scroller">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('system')['languages'], 'language');
$foreach23DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach23DoElse = false;
?>
          <a class="dropdown-item" href="?lang=<?php echo $_smarty_tpl->getValue('language')['code'];?>
">
            <img width="16" height="16" class="mr10" src="<?php echo $_smarty_tpl->getValue('language')['flag'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>

          </a>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      </div>
    </div>
    <!-- language -->
  </div>
  <ul class="links">
    <?php if ($_smarty_tpl->getValue('static_pages')) {?>
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('static_pages'), 'static_page');
$foreach24DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('static_page')->value) {
$foreach24DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('static_page')['page_in_footer']) {?>
          <li>
            <a href="<?php echo $_smarty_tpl->getValue('static_page')['url'];?>
">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('static_page')['page_title']);?>

            </a>
          </li>
        <?php }?>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('system')['contact_enabled']) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/contacts">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Contact Us");?>

        </a>
      </li>
    <?php }?>
    <?php if ($_smarty_tpl->getValue('system')['directory_enabled']) {?>
      <li>
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/directory">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>

        </a>
      </li>
    <?php }?>
  </ul>
</div><?php }
}
