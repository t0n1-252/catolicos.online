<?php
/* Smarty version 5.4.1, created on 2025-04-19 23:11:03
  from 'file:admin.announcements.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68042d87eb37d3_53666728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ced9db68720c35f06c0cbe1af73f8c54f2142ae' => 
    array (
      0 => 'admin.announcements.tpl',
      1 => 1744139799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68042d87eb37d3_53666728 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/announcements/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Announcement");?>

        </a>
      </div>
    <?php } else { ?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/announcements" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-bullhorn mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Announcements");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['name'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Announcement");
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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['announcement_id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['name'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['type'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['start_date'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('row')['end_date'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/announcements/edit/<?php echo $_smarty_tpl->getValue('row')['announcement_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="announcement" data-id="<?php echo $_smarty_tpl->getValue('row')['announcement_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/announcements.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['announcement_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->getValue('data')['name'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Announcement name will appear only in the admin panel (mandatory)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['title'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Announcement title will appear on the announcement block");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="type">
              <option <?php if ($_smarty_tpl->getValue('data')['type'] == "success") {?>selected<?php }?> value="success" class="alert-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Success");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['type'] == "warning") {?>selected<?php }?> value="warning" class="alert-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Warning");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['type'] == "danger") {?>selected<?php }?> value="danger" class="alert-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Danger");?>
</option>
              <option <?php if ($_smarty_tpl->getValue('data')['type'] == "info") {?>selected<?php }?> value="info" class="alert-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Info");?>
</option>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control js_wysiwyg-advanced" name="code"><?php echo $_smarty_tpl->getValue('data')['code'];?>
</textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>

          </label>
          <div class="col-md-9">
            <input type="datetime-local" class="form-control" name="start_date" value="<?php echo $_smarty_tpl->getValue('data')['start_date'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current server datetime is");?>
: <?php echo $_smarty_tpl->getValue('date');?>
 (UTC)
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>

          </label>
          <div class="col-md-9">
            <input type="datetime-local" class="form-control" name="end_date" value="<?php echo $_smarty_tpl->getValue('data')['end_date'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current server datetime is");?>
: <?php echo $_smarty_tpl->getValue('date');?>
 (UTC)
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

    <form class="js_ajax-forms" data-url="admin/announcements.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="name">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Announcement name will appear only in the admin panel");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Announcement title will appear on the announcement block");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Type");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="type">
              <option value="success" class="alert-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Success");?>
</option>
              <option value="warning" class="alert-warning"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Warning");?>
</option>
              <option value="danger" class="alert-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Danger");?>
</option>
              <option value="info" class="alert-info"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Info");?>
</option>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("HTML");?>

          </label>
          <div class="col-md-9">
            <textarea class="form-control js_wysiwyg-advanced" name="code"></textarea>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Start Date");?>

          </label>
          <div class="col-md-9">
            <input type="datetime-local" class="form-control" name="start_date">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current server datetime is");?>
: <?php echo $_smarty_tpl->getValue('date');?>
 (UTC)
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Date");?>

          </label>
          <div class="col-md-9">
            <input type="datetime-local" class="form-control" name="end_date">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Your current server datetime is");?>
: <?php echo $_smarty_tpl->getValue('date');?>
 (UTC)
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
