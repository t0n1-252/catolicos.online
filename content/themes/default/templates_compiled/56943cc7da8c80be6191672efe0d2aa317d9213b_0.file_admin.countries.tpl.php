<?php
/* Smarty version 5.4.1, created on 2025-04-21 23:28:17
  from 'file:admin.countries.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6806d491e6ef90_98712927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56943cc7da8c80be6191672efe0d2aa317d9213b' => 
    array (
      0 => 'admin.countries.tpl',
      1 => 1744139718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6806d491e6ef90_98712927 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/countries/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Country");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add" || $_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/countries" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-globe mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Countries");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['country_name'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Country");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Code");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("VAT");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enabled");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('row')['country_id'];?>
</td>
                <td>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/countries/edit/<?php echo $_smarty_tpl->getValue('row')['country_id'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['country_name'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['country_code'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['phone_code'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['country_vat'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['country_order'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['default']) {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['enabled']) {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/countries/edit/<?php echo $_smarty_tpl->getValue('row')['country_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="country" data-id="<?php echo $_smarty_tpl->getValue('row')['country_id'];?>
">
                    <i class="fa fa-trash-alt"></i>
                  </button>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/countries.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['country_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="default">
              <input type="checkbox" name="default" id="default" <?php if ($_smarty_tpl->getValue('data')['default']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the default country of the site");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled" <?php if ($_smarty_tpl->getValue('data')['enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it enbaled so the user can select it");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_name" value="<?php echo $_smarty_tpl->getValue('data')['country_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_code" value="<?php echo $_smarty_tpl->getValue('data')['country_code'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country Code, For Example: us, sa or fr");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="phone_code" value="<?php echo $_smarty_tpl->getValue('data')['phone_code'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Code, For Example: +1, +44 or +971");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("VAT Percentage");?>
 (%)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_vat" value="<?php echo $_smarty_tpl->getValue('data')['country_vat'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country VAT Percentage");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_order" value="<?php echo $_smarty_tpl->getValue('data')['country_order'];?>
">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add") {?>

    <form class="js_ajax-forms" data-url="admin/countries.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="default">
              <input type="checkbox" name="default" id="default">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the default country of the site");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enabled");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it enbaled so the user can select it");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_code">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country Code, For Example: us, sa or fr");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="phone_code">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Code, For Example: +1, +44 or +971");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("VAT Percentage");?>
 (%)
          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_vat">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country VAT Percentage");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="country_order">
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
      </div>
    </form>

  <?php }?>
</div><?php }
}
