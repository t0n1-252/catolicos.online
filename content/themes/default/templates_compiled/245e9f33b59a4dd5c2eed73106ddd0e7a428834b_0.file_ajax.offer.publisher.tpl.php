<?php
/* Smarty version 5.4.1, created on 2025-04-22 21:06:55
  from 'file:ajax.offer.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680804ef174794_34556885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '245e9f33b59a4dd5c2eed73106ddd0e7a428834b' => 
    array (
      0 => 'ajax.offer.publisher.tpl',
      1 => 1744139711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
))) {
function content_680804ef174794_34556885 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Offer");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms publisher-mini" data-url="posts/offer.php?do=publish">
  <div class="modal-body">
    <div class="row">
      <!-- discount type -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</label>
        <select class="form-select" id="js_discount-type" name="discount_type">
          <option value="discount_percent"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Percent");?>
</option>
          <option value="discount_amount"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Amount");?>
</option>
          <option value="buy_get_discount"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy X Get Y Discount");?>
</option>
          <option value="spend_get_off"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Spend X Get Y Off");?>
</option>
          <option value="free_shipping"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Free Shipping");?>
</option>
        </select>
      </div>
      <!-- discount type -->
      <!-- discount percent -->
      <div id="js_discount-percent" class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Percent");?>
</label>
        <select class="form-select" name="discount_percent">
          <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 99+1 - (1) : 1-(99)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
%</option>
          <?php }
}
?>
        </select>
      </div>
      <!-- discount percent -->
      <!-- discount amount -->
      <div id="js_discount-amount" class="form-group col-md-6 x-hidden">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discount Amount");?>
</label>
        <div class="input-group">
          <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
          <?php }?>
          <input name="discount_amount" type="text" class="form-control" placeholder="0.00">
          <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
          <?php }?>
        </div>
      </div>
      <!-- discount amount -->
    </div>
    <!-- buy get discount -->
    <div id="js_buy-get-discount" class="x-hidden">
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Buy");?>
</label>
          <input name="buy_x" type="text" class="form-control">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter numric value (Example: 5)");?>

          </div>
        </div>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Get");?>
</label>
          <input name="get_y" type="text" class="form-control">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enter numric value (Example: 2)");?>

          </div>
        </div>
      </div>
    </div>
    <!-- buy get discount -->
    <!-- spend get off -->
    <div id="js_spend-get-off" class="x-hidden">
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Spend");?>
</label>
          <div class="input-group">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
            <input name="spend_x" type="text" class="form-control" placeholder="0.00">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Amount Off");?>
</label>
          <div class="input-group">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
            <input name="amount_y" type="text" class="form-control" placeholder="0.00">
            <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
              <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- spend get off -->
    <div class="row">
      <!-- end date -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
 <small class="badge bg-light text-dark"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Optional");?>
</small></label>
        <input type="datetime-local" class="form-control" name="end_date">
      </div>
      <!-- end date -->
      <!-- category -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
        <select class="form-select" name="category">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('offers_categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
            <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <!-- category -->
    </div>
    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discounted Items and/or Services");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- title -->
    <!-- original price -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Original Price");?>
 <small class="badge bg-light text-dark"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Optional");?>
</small></label>
      <input name="price" type="text" class="form-control">
    </div>
    <!-- original price -->
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- photos -->
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
    <!-- photos -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <?php if ($_smarty_tpl->getValue('share_to') == "page") {?>
      <input type="hidden" name="handle" value="page">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php } elseif ($_smarty_tpl->getValue('share_to') == "group") {?>
      <input type="hidden" name="handle" value="group">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php } elseif ($_smarty_tpl->getValue('share_to') == "event") {?>
      <input type="hidden" name="handle" value="event">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('share_to_id');?>
">
    <?php }?>
    <input type="hidden" class="js_hidden-input-photos" name="photos" value="">
    <button type="submit" class="btn btn-primary js_publisher-btn"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  $(function() {
    /* handle offer input dependencies */
    $('#js_discount-type').on('change', function() {
      switch ($(this).val()) {
        case "discount_percent":
          $("#js_discount-percent").show();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;

        case "discount_amount":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").show();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;

        case "buy_get_discount":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").show();
          $("#js_spend-get-off").hide();
          break;

        case "spend_get_off":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").show();
          break;

        case "free_shipping":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;
      }
    });
  });
<?php echo '</script'; ?>
><?php }
}
