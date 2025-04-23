<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:32:26
  from 'file:_ads.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c1ac7e1a7_81407966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f628a8e9e2dfd8802b5a2002d371c718e42ed808' => 
    array (
      0 => '_ads.tpl',
      1 => 1744139742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68004c1ac7e1a7_81407966 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
if ($_smarty_tpl->getValue('_master')) {?>

  <?php if ($_smarty_tpl->getValue('_ads') && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("static","settings","admin"))) {?>
    <div class="<?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mtb20">
      <!-- ads -->
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_ads'), 'ads_unit');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach0DoElse = false;
?>
        <div class="card">
          <div class="card-header bg-transparent">
            <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

          </div>
          <div class="card-body"><?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>
</div>
        </div>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <!-- ads -->
    </div>
  <?php }?>

<?php } else { ?>

  <?php if ($_smarty_tpl->getValue('ads')) {?>
    <!-- ads -->
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('ads'), 'ads_unit');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('ads_unit')->value) {
$foreach1DoElse = false;
?>
      <div class="card">
        <div class="card-header bg-transparent">
          <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sponsored");?>

        </div>
        <div class="card-body"><?php echo $_smarty_tpl->getValue('ads_unit')['code'];?>
</div>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <!-- ads -->
  <?php }?>

<?php }
}
}
