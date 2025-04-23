<?php
/* Smarty version 5.4.1, created on 2025-04-19 23:20:09
  from 'file:admin.widgets.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68042fa9d60d91_54006832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc851101609974264a72ef58f23edd32be64fc0' => 
    array (
      0 => 'admin.widgets.tpl',
      1 => 1744139733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68042fa9d60d91_54006832 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/widgets/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New widget");?>

        </a>
      </div>
    <?php } else { ?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/widgets" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-puzzle-piece mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widgets");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New widget");
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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Place");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Langauge");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audience");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['widget_id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['title'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "home") {?><i class='fa fa-home fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "search") {?><i class='fa fa-search fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "people") {?><i class='fa fa-users fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover People Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "notifications") {?><i class='fa fa-bell fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "post") {?><i class='fa fa-file-powerpoint fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "photo") {?><i class='fa fa-file-image fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "blog") {?><i class='fa fa-file-alt fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog Page");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['place'] == "directory") {?><i class='fa fa-th-list fa-fw mr5'></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory Page");
}?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['language_id'] == 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Languages");
} else {
echo $_smarty_tpl->getValue('row')['language_title'];
}?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['target_audience'] == "all") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['target_audience'] == "members") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Members");
}?>
                  <?php if ($_smarty_tpl->getValue('row')['target_audience'] == "visitors") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Visitors");
}?>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['place_order'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/widgets/edit/<?php echo $_smarty_tpl->getValue('row')['widget_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="widget" data-id="<?php echo $_smarty_tpl->getValue('row')['widget_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/widgets.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['widget_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['title'];?>
">
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The title of the widget");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Place");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="place">
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "home") {?>selected<?php }?> value="home"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "search") {?>selected<?php }?> value="search"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "people") {?>selected<?php }?> value="people"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover People");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "notifications") {?>selected<?php }?> value="notifications"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "post") {?>selected<?php }?> value="post"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "photo") {?>selected<?php }?> value="photo"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "blog") {?>selected<?php }?> value="blog"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog Page");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['place'] == "directory") {?>selected<?php }?> value="directory"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>
</option>
            </select>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Where to show this widget");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Language");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="language_id">
              <option <?php if ($_smarty_tpl->getValue('data')['language_id'] == "0") {?>selected<?php }?>value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Languages");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('system')['languages'], 'language');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach1DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getValue('data')['language_id'] == $_smarty_tpl->getValue('language')['language_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('language')['language_id'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For whcih language this widget will be shown");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Audience");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="target_audience">
              <option <?php if ($_smarty_tpl->getValue('data')['target_audience'] == "all") {?>selected<?php }?>value="all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Both Members and Visitors");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['target_audience'] == "members") {?>selected<?php }?> value="members"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Members");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['target_audience'] == "visitors") {?>selected<?php }?> value="visitors"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Visitors");?>
</option>
            </select>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For whcih target audience this widget will be shown");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="place_order" value="<?php echo $_smarty_tpl->getValue('data')['place_order'];?>
">
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The order of this widget in the selected place");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->getValue('data')['code'];?>
</textarea>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The HTML code of the widget");?>
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

    <form class="js_ajax-forms" data-url="admin/widgets.php?do=add">
      <div class="card-body">

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The title of the widget");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Place");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="place">
              <option value="home"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Home");?>
</option>
              <option value="search"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</option>
              <option value="people"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Discover People");?>
</option>
              <option value="notifications"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Notifications");?>
</option>
              <option value="post"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Post");?>
</option>
              <option value="photo"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Photo");?>
</option>
              <option value="blog"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blog Page");?>
</option>
              <option value="directory"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Directory");?>
</option>
            </select>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Where to show this widget");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Language");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="language_id">
              <option value="0"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Languages");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('system')['languages'], 'language');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('language')->value) {
$foreach2DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('language')['language_id'];?>
"><?php echo $_smarty_tpl->getValue('language')['title'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For whcih language this widget will be shown");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Target Audience");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="target_audience">
              <option value="all"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Both Members and Visitors");?>
</option>
              <option value="members"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Members");?>
</option>
              <option value="visitors"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Only Visitors");?>
</option>
            </select>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("For whcih target audience this widget will be shown");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="place_order">
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The order of this widget in the selected place");?>
</div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control" name="message" rows="8"></textarea>
            <div class="form-text text-muted"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The HTML code of the widget");?>
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
