<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:32:26
  from 'file:_head.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c1abd37d8_18501017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '410e961cb33f3e5144116c1acf32af4c493e2710' => 
    array (
      0 => '_head.tpl',
      1 => 1744139794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.css.tpl' => 1,
  ),
))) {
function content_68004c1abd37d8_18501017 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!doctype html>

<html data-lang="<?php echo $_smarty_tpl->getValue('system')['language']['code'];?>
" <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Sngine">
    <meta name="version" content="<?php echo $_smarty_tpl->getValue('system')['system_version'];?>
">

    <!-- Title -->
    <title><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_title'),70);?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_description'),300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->getValue('system')['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_title'),70);?>
" />
    <meta property="og:description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_description'),300);?>
" />
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->getValue('page_image');?>
" />
    <!-- OG-Meta -->

    <!-- Twitter-Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_title'),70);?>
" />
    <meta name="twitter:description" content="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('page_description'),300);?>
" />
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->getValue('page_image');?>
" />
    <!-- Twitter-Meta -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->getValue('system')['system_favicon_default']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/favicon.png" />
    <?php } elseif ($_smarty_tpl->getValue('system')['system_favicon']) {?>
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_favicon'];?>
" />
    <?php }?>
    <!-- Favicon -->

    <!-- Fonts [Poppins|Font-Awesome] -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts [Poppins|Font-Awesome] -->

    <!-- CSS -->
    <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "LTR") {?>
      <link href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('minimize_css')("../css/style.css");?>

      </style>
    <?php } else { ?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
      <style>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('minimize_css')("../css/style.rtl.css");?>

      </style>
    <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <?php $_smarty_tpl->renderSubTemplate('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <!-- CSS Customized -->

    <!-- Header Custom JavaScript -->
    <?php if ($_smarty_tpl->getValue('system')['custome_js_header']) {?>
      <?php echo '<script'; ?>
>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('html_entity_decode')($_smarty_tpl->getValue('system')['custome_js_header'],ENT_QUOTES);?>

      <?php echo '</script'; ?>
>
    <?php }?>
    <!-- Header Custom JavaScript -->

</head><?php }
}
