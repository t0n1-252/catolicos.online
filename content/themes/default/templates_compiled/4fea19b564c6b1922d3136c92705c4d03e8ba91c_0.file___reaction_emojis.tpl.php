<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:37:02
  from 'file:__reaction_emojis.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004d2ee40e14_01354575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fea19b564c6b1922d3136c92705c4d03e8ba91c' => 
    array (
      0 => '__reaction_emojis.tpl',
      1 => 1744139724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68004d2ee40e14_01354575 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('reactions')[$_smarty_tpl->getValue('_reaction')]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
