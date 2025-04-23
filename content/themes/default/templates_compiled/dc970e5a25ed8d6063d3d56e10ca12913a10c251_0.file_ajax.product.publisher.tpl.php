<?php
/* Smarty version 5.4.1, created on 2025-04-21 16:00:33
  from 'file:ajax.product.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68066ba1b67d32_85023727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc970e5a25ed8d6063d3d56e10ca12913a10c251' => 
    array (
      0 => 'ajax.product.publisher.tpl',
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
function content_68066ba1b67d32_85023727 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"products",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Create New Product");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="publisher-mini">
  <div class="modal-body">
    <div class="form-table-row">
      <div>
        <div class="form-label h6 mb5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Digital Product");?>
</div>
        <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable this option if you are selling a digital product");?>
</div>
      </div>
      <div class="text-end">
        <label class="switch" for="is_digital">
          <input type="checkbox" name="is_digital" id="is_digital" class="js_publisher-digital">
          <span class="slider round"></span>
        </label>
      </div>
    </div>
    <div id="digital_product" class="x-hidden">
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Download URL");?>
</label>
        <input name="product_url" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("OR Upload your File");?>
</label>
        <div class="x-image">
          <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
          <div class="x-image-loader">
            <div class="progress x-progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <i class="fa fa-paperclip fa-lg js_x-uploader" data-handle="x-file" data-type="file"></i>
          <input type="hidden" class="js_x-image-input" name="product_file" value="">
        </div>
        <div class="form-text">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allowed file types");?>
: <?php echo $_smarty_tpl->getValue('system')['file_extensions'];?>

        </div>
      </div>
    </div>
    <div class="divider dashed"></div>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Product Name");?>
</label>
      <input name="name" type="text" class="form-control">
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Total Item Units");?>
</label>
        <input name="quantity" type="number" min="1" max="500" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Price");?>
 (<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
)</label>
        <input name="price" type="text" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Category");?>
</label>
        <select class="form-select" name="category">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('market_categories'), 'category');
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
      <div class="form-group col-md-4">
        <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Status");?>
</label>
        <select class="form-select" name="status">
          <option value="new"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("New");?>
</option>
          <option value="old"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Used");?>
</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>
</label>
      <input name="location" type="text" class="form-control js_geocomplete">
    </div>
    <div class="form-group">
      <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->getValue('custom_fields')) {?>
      <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields'),'_registration'=>true), (int) 0, $_smarty_current_dir);
?>
    <?php }?>
    <!-- custom fields -->
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
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-product"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Publish");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  /* digital product */
  $('#is_digital').on('change', function() {
    if ($(this).prop('checked')) {
      $('#digital_product').fadeIn();
    } else {
      $('#digital_product').hide();
    }
  });
<?php echo '</script'; ?>
><?php }
}
