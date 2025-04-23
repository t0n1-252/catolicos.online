<?php
/* Smarty version 5.4.1, created on 2025-04-18 01:22:03
  from 'file:admin.languages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801a93b987355_35919323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7dcebd2fe86b63e84e5d6d5a9dd30533187fff' => 
    array (
      0 => 'admin.languages.tpl',
      1 => 1744139729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6801a93b987355_35919323 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/languages/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Language");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add" || $_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/languages" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-language mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Languages");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Language");
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
                <td><?php echo $_smarty_tpl->getValue('row')['language_id'];?>
</td>
                <td>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/languages/edit/<?php echo $_smarty_tpl->getValue('row')['language_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['flag'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['title'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['code'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['language_order'];?>
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
/languages/edit/<?php echo $_smarty_tpl->getValue('row')['language_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="language" data-id="<?php echo $_smarty_tpl->getValue('row')['language_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/languages.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['language_id'];?>
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
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the default language of the site");?>

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
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it enbaled so the user can translate the site to it");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="code" value="<?php echo $_smarty_tpl->getValue('data')['code'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Language country_code, For Example: en_us, ar_sa or fr_fr");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Native Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['title'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The native name of this language");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Flag");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getValue('data')['flag'] == '') {?>
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="flag" value="">
              </div>
            <?php } else { ?>
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('data')['flag'];?>
')">
                <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="flag" value="<?php echo $_smarty_tpl->getValue('data')['flag'];?>
">
              </div>
            <?php }?>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Direction");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="dir">
              <option <?php if ($_smarty_tpl->getValue('data')['dir'] == "LTR") {?>selected<?php }?> value="LTR">LTR</option>
              <option <?php if ($_smarty_tpl->getValue('data')['dir'] == "RTL") {?>selected<?php }?> value="RTL">RTL</option>
            </select>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The direction of this language 'Left To Right' or 'Right To Left'");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="language_order" value="<?php echo $_smarty_tpl->getValue('data')['language_order'];?>
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

    <form class="js_ajax-forms" data-url="admin/languages.php?do=add">
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
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the default language of the site");?>

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
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it enbaled so the user can translate the site to it");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Code");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="code">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Language country_code, For Example: en_us, ar_sa or fr_fr");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Native Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The native name of this language");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Flag");?>

          </label>
          <div class="col-md-9">
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="flag" value="">
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Direction");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="dir">
              <option value="LTR">LTR</option>
              <option value="RTL">RTL</option>
            </select>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The direction of this language 'Left To Right' or 'Right To Left'");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="language_order">
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
