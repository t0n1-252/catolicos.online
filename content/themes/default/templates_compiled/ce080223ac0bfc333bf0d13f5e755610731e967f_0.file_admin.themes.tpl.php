<?php
/* Smarty version 5.4.1, created on 2025-04-17 03:01:46
  from 'file:admin.themes.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68006f1a569d86_07352144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce080223ac0bfc333bf0d13f5e755610731e967f' => 
    array (
      0 => 'admin.themes.tpl',
      1 => 1744139717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68006f1a569d86_07352144 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/themes/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Theme");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add" || $_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/themes" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-desktop mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Themes");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['name'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Theme");
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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Thumbnail");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Selectable");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['theme_id'];?>
</td>
                <td>
                  <img width="210" src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('row')['name'];?>
/thumbnail.png">
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['name'];?>
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
/themes/edit/<?php echo $_smarty_tpl->getValue('row')['theme_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="theme" data-id="<?php echo $_smarty_tpl->getValue('row')['theme_id'];?>
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

      <div class="divider"></div>

      <div class="mt-4">
        <label class="d-block form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Third-party Theme");?>

        </label>
        <div class="d-flex py-3 px-2 align-items-start justify-content-between flex-wrap">
          <div class="d-inline-flex align-items-start">
            <a href="https://bit.ly/SngineElengineTheme" target="_blank">
              <img src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/elengine.png">
            </a>
            <div class="ml15">
              <h5><a href="https://bit.ly/SngineElengineTheme" target="_blank">Elengine - The Ultimate Sngine Theme</a></h5>
              <ul>
                <li><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Elegant and Modern Design");?>
</li>
                <li><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Regular and Free Updates");?>
</li>
                <li><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Lifetime support");?>
</li>
              </ul>
            </div>
          </div>
          <a href="https://bit.ly/SngineElengineTheme" class="btn btn-md btn-primary" target="_blank">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Get Theme");?>

          </a>
        </div>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/themes.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['theme_id'];?>
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
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the default theme of the site");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Selectable");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled" <?php if ($_smarty_tpl->getValue('data')['enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the selectable so users can change the theme");?>
.<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("(You must have 2+ selectable themes)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->getValue('data')['name'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Theme name should not contain spaces or special characters");?>
.<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("(Valid name examples: mytheme, material, custom_theme)");?>

            </div>
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

    <form class="js_ajax-forms" data-url="admin/themes.php?do=add">
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
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the default theme of the site");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Selectable");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="enabled">
              <input type="checkbox" name="enabled" id="enabled">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make it the selectable so users can change the theme");?>
.<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("(You must have 2+ selectable themes)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Theme name should not contain spaces or special characters");?>
.<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("(Valid name examples: mytheme, material, custom_theme)");?>

            </div>
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
