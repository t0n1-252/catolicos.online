<?php
/* Smarty version 5.4.1, created on 2025-04-18 02:44:18
  from 'file:admin.users_groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801bc822e5f30_00691877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bfb8ccfd5b8e79c897440c9b93fe2fa5b9bc16d' => 
    array (
      0 => 'admin.users_groups.tpl',
      1 => 1744139715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6801bc822e5f30_00691877 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users_groups/add" class="btn btn-md btn-primary">
          <i class="fa fa-users mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Group");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add" || $_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users_groups" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-users mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Groups");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['user_group_title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Group");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="card-body">
      <!-- System Groups (Admins/Mods/Users) -->
      <h6 class="card-title mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("System Groups");?>
</h6>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Count");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <!-- Admins -->
            <tr>
              <td>1</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admins");?>
</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Admins Permissions");?>
</td>
              <td><?php echo $_smarty_tpl->getValue('counters')['admins_count'];?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Accounts");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/admins" class="btn btn-sm btn-icon btn-rounded btn-info">
                  <i class="fa fa-users"></i>
                </a>
              </td>
            </tr>
            <!-- Admins -->
            <!-- Moderators -->
            <tr>
              <td>2</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Moderators");?>
</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Moderators Permissions");?>
</td>
              <td><?php echo $_smarty_tpl->getValue('counters')['moderators_count'];?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Accounts");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/moderators" class="btn btn-sm btn-icon btn-rounded btn-info">
                  <i class="fa fa-users"></i>
                </a>
              </td>
            </tr>
            <!-- Moderators -->
            <!-- Users -->
            <tr>
              <td>3</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>
</td>
              <td>
                <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/users">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>

                </a>
              </td>
              <td><?php echo $_smarty_tpl->getValue('counters')['users_count'];?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Accounts");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users?ncug=true" class="btn btn-sm btn-icon btn-rounded btn-info">
                  <i class="fa fa-users"></i>
                </a>
              </td>
            </tr>
            <!-- Users -->
          </tbody>
        </table>
      </div>
      <!-- System Groups (Admins/Mods/Users) -->

      <div class="divider"></div>

      <!-- Custom Groups -->
      <h6 class="card-title mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Groups");?>
</h6>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Count");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['user_group_id'];?>
</td>
                <td>
                  <?php echo $_smarty_tpl->getValue('row')['user_group_title'];?>

                </td>
                <td>
                  <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/<?php echo $_smarty_tpl->getValue('row')['permissions_group_id'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['permissions_group_title'];?>

                  </a>
                </td>
                <td><?php echo $_smarty_tpl->getValue('row')['users_count'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("List Accounts");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users?cug=<?php echo $_smarty_tpl->getValue('row')['user_group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-info">
                    <i class="fa fa-users"></i>
                  </a>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users_groups/edit/<?php echo $_smarty_tpl->getValue('row')['user_group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="user_group" data-id="<?php echo $_smarty_tpl->getValue('row')['user_group_id'];?>
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
      <!-- Custom Groups -->
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add") {?>

    <form class="js_ajax-forms" data-url="admin/users_groups.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select permissions group");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('permissions_groups'), 'group');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach1DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('group')['permissions_group_id'];?>
"><?php echo $_smarty_tpl->getValue('group')['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions Groups");?>
</a>
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

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>

    <form class="js_ajax-forms" data-url="admin/users_groups.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['user_group_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['user_group_title'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Permissions");?>

          </label>
          <div class="col-md-9">
            <select class="form-select" name="permissions_group">
              <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select permissions group");?>
</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['permissions_groups'], 'group');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->value) {
$foreach2DoElse = false;
?>
                <option <?php if ($_smarty_tpl->getValue('data')['permissions_group_id'] == $_smarty_tpl->getValue('group')['permissions_group_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('group')['permissions_group_id'];?>
"><?php echo $_smarty_tpl->getValue('group')['permissions_group_title'];?>
</option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("You can manage permissions from");?>
 <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions Groups");?>
</a>
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
