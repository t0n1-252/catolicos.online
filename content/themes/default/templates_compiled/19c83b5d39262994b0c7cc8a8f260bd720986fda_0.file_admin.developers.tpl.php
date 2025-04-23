<?php
/* Smarty version 5.4.1, created on 2025-04-19 22:57:58
  from 'file:admin.developers.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68042a767b2743_79154840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c83b5d39262994b0c7cc8a8f260bd720986fda' => 
    array (
      0 => 'admin.developers.tpl',
      1 => 1744139703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
    'file:__categories.recursive_rows.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 2,
  ),
))) {
function content_68042a767b2743_79154840 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == "categories") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/developers/add_category" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category" || $_smarty_tpl->getValue('sub_view') == "edit_category") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/developers/categories" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-cubes mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Settings");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "apps") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apps");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "categories") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Category");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit_category") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Categories");?>
 &rsaquo; <?php echo $_smarty_tpl->getValue('data')['category_name'];
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <form class="js_ajax-forms" data-url="admin/developers.php?do=settings">
      <div class="card-body">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"developers",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers Apps");?>
</div>
            <div class="form-text d-none d-sm-block">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the developers apps On and Off");?>
<br>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Developers apps will allow other developers to use your system APIs like login with and get user info");?>
<br>
            </div>
          </div>
          <div class="text-end">
            <label class="switch" for="developers_apps_enabled">
              <input type="checkbox" name="developers_apps_enabled" id="developers_apps_enabled" <?php if ($_smarty_tpl->getValue('system')['developers_apps_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share_plugin",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Share Plugin");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the share plugin On and Off");?>
</div>
          </div>
          <div class="text-end">
            <label class="switch" for="developers_share_enabled">
              <input type="checkbox" name="developers_share_enabled" id="developers_share_enabled" <?php if ($_smarty_tpl->getValue('system')['developers_share_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "apps") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("App Name");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("App ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("App Secret");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Created");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['app_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/developers/edit/<?php echo $_smarty_tpl->getValue('row')['app_auth_id'];?>
">
                    <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('row')['app_icon'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['app_name'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['app_auth_id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['app_auth_secret'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('row')['app_date'],"%e %B %Y");?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/developers/edit/<?php echo $_smarty_tpl->getValue('row')['app_auth_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_developers-delete-app" data-id="<?php echo $_smarty_tpl->getValue('row')['app_auth_id'];?>
">
                    <i class="fas fa-trash"></i>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "categories") {?>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_treegrid">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach1DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_url'=>"developers",'_handle'=>"apps_category"), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="5" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add_category") {?>

    <form class="js_ajax-forms" data-url="admin/developers.php?do=add_category">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach2DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order">
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit_category") {?>

    <form class="js_ajax-forms" data-url="admin/developers.php?do=edit_category&id=<?php echo $_smarty_tpl->getValue('data')['category_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->getValue('data')['category_name'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Description");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="category_description" rows="3"><?php echo $_smarty_tpl->getValue('data')['category_description'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Parent Category");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="category_parent_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Set as a Parent Category");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')["categories"], 'category');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach3DoElse = false;
?>
                <?php $_smarty_tpl->renderSubTemplate('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->getValue('data')['category_parent_id']), (int) 0, $_smarty_current_dir);
?>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="category_order" value="<?php echo $_smarty_tpl->getValue('data')['category_order'];?>
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

  <?php }?>
</div><?php }
}
