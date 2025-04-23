<?php
/* Smarty version 5.4.1, created on 2025-04-18 05:47:06
  from 'file:admin.users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801e75a3ac248_72493895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0858ea3fc9fcb4e82e6facab58f171d9f30eb803' => 
    array (
      0 => 'admin.users.tpl',
      1 => 1744139799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 5,
    'file:__svg_icons.tpl' => 10,
  ),
))) {
function content_6801e75a3ac248_72493895 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "users" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == '' && ($_smarty_tpl->getValue('cug') || $_smarty_tpl->getValue('ncug'))) {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "admins") {?>
      <div class="float-end">
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "admins" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "moderators") {?>
      <div class="float-end">
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "moderators" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "banned") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/blacklist" class="btn btn-md btn-danger">
          <i class="fa fa-minus-circle"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Manage Banned IPs");?>
</span>
        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "stats") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/stats" class="btn btn-md btn-danger">
          <i class="fa-solid fa-arrow-rotate-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reset");?>
</span>
        </a>
        <!-- Export CSV -->
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-url="#export-csv" data-options='{ "handle": "users_stats", "from": "<?php echo $_smarty_tpl->getValue('from');?>
", "to": "<?php echo $_smarty_tpl->getValue('to');?>
" }'>
          <i class="fa-solid fa-file-csv"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Export CSV");?>
</span>
        </button>
        <!-- Export CSV -->
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "find") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>
</span>
        </a>
        <?php if ($_smarty_tpl->getValue('user')->_is_admin && $_smarty_tpl->getValue('data')['user_id'] != $_smarty_tpl->getValue('user')->_data['user_id']) {?>
          <button class="btn btn-md btn-warning js_login-as" data-id="<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
" data-handle="connect">
            <i class="fa-solid fa-arrow-right-to-bracket"></i><span class="ml5 d-none d-lg-inline-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Login As");?>
</span>
          </button>
        <?php }?>
      </div>
    <?php }?>
    <i class="fa fa-user mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == '' && $_smarty_tpl->getValue('cug')) {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('cug')['user_group_title']));
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == '' && $_smarty_tpl->getValue('ncug')) {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') != '' && !$_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('sub_view'),array('edit','not_activated','pending'))) {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('sub_view')));
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "not_activated") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Not Activated");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "pending") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending");
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('data')['user_name'];?>
"><?php echo $_smarty_tpl->getValue('data')['user_fullname'];?>
</a><?php }?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '' || $_smarty_tpl->getValue('sub_view') == "admins" || $_smarty_tpl->getValue('sub_view') == "moderators" || $_smarty_tpl->getValue('sub_view') == "online" || $_smarty_tpl->getValue('sub_view') == "banned" || $_smarty_tpl->getValue('sub_view') == "not_activated" || $_smarty_tpl->getValue('sub_view') == "pending" || $_smarty_tpl->getValue('sub_view') == "find") {?>

    <div class="card-body">

      <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-primary">
              <div class="stat-cell narrow">
                <i class="fa fa-users bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['users'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>
</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-warning">
              <div class="stat-cell narrow">
                <i class="fa fa-clock bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['pending'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pending Users");?>
</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-danger">
              <div class="stat-cell narrow">
                <i class="fa fa-envelope bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['not_activated'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Not Activated");?>
</span><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="stat-panel bg-gradient-red">
              <div class="stat-cell narrow">
                <i class="fa fa-minus-circle bg-icon"></i>
                <span class="text-xxlg"><?php echo $_smarty_tpl->getValue('insights')['banned'];?>
</span><br>
                <span class="text-lg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Banned");?>
</span><br>
              </div>
            </div>
          </div>
        </div>
      <?php }?>

      <!-- search form -->
      <div class="mb20">
        <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/find" method="get">
          <div class="form-group mb0">
            <div class="input-group">
              <input type="text" class="form-control" name="query">
              <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
            </div>
          </div>
        </form>
        <div class="form-text small">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Username, First Name, Last Name, Email or Phone");?>

        </div>
      </div>
      <!-- search form -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Joined");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Activated");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approved");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($_smarty_tpl->getValue('rows')) {?>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                <tr>
                  <td><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('row')['user_id'];?>
</a></td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];?>

                    </a>
                  </td>
                  <td>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
" target="_blank">
                      <?php echo $_smarty_tpl->getValue('row')['user_name'];?>

                    </a>
                  </td>
                  <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('row')['user_registered'],"%e %B %Y");?>
</td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('row')['user_activated']) {?>
                      <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                    <?php } else { ?>
                      <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                    <?php }?>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('row')['user_approved']) {?>
                      <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                    <?php } else { ?>
                      <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                    <?php }?>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('sub_view') == "pending") {?>
                      <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Approve");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_user-approve" data-id="<?php echo $_smarty_tpl->getValue('row')['user_id'];?>
">
                        <i class="fa fa-check"></i>
                      </button>
                    <?php }?>
                    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/edit/<?php echo $_smarty_tpl->getValue('row')['user_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="user" data-id="<?php echo $_smarty_tpl->getValue('row')['user_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="7" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <?php echo $_smarty_tpl->getValue('pager');?>

    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "stats") {?>

    <div class="card-body">

      <!-- search & data range forms -->
      <div class="row">
        <!-- search form -->
        <div class="col-xl-6 mb20">
          <form class="d-flex flex-row align-items-center flex-wrap js_search-forms" method="get">
            <div class="form-group mb0">
              <div class="input-group">
                <input type="text" class="form-control" name="query" value="<?php echo $_smarty_tpl->getValue('query');?>
">
                <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-search mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search");?>
</button>
              </div>
            </div>
          </form>
          <div class="form-text small">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Search by Username, First Name, Last Name, Email or Phone");?>

          </div>
        </div>
        <!-- search form -->

        <!-- data range form -->
        <div class="col-xl-6 mb20">
          <form class="d-flex flex-row align-items-center flex-wrap" action="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/stats" method="get">
            <div class="form-group mb0">
              <div class="input-group">
                <input type="date" class="form-control" name="from" value="<?php echo $_smarty_tpl->getValue('from');?>
" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From");?>
" required>
                <input type="date" class="form-control" name="to" value="<?php echo $_smarty_tpl->getValue('to');?>
" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("To");?>
" required>
                <button type="submit" class="btn btn-sm btn-light"><i class="fas fa-filter mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Filter");?>
</button>
              </div>
            </div>
          </form>
          <div class="form-text small">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select date range to filter the results by posts count");?>

          </div>
        </div>
        <!-- data range form -->
      </div>
      <!-- search & data range forms -->

      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Name");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date Range");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Count");?>
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
                <tr>
                  <td><a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('row')['user_id'];?>
</a></td>
                  <td>
                    <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
">
                      <img class="tbl-image" src="<?php echo $_smarty_tpl->getValue('row')['user_picture'];?>
">
                      <?php echo $_smarty_tpl->getValue('row')['user_firstname'];?>
 <?php echo $_smarty_tpl->getValue('row')['user_lastname'];?>

                    </a>
                  </td>
                  <td>
                    <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('row')['user_name'];?>
" target="_blank">
                      <?php echo $_smarty_tpl->getValue('row')['user_name'];?>

                    </a>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->getValue('from') && $_smarty_tpl->getValue('to')) {?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('from'),"%e %b %Y");?>
 - <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('to'),"%e %b %Y");?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("All Time");?>

                    <?php }?>
                  </td>
                  <td>
                    <?php echo $_smarty_tpl->getValue('row')['posts_count'];?>

                  </td>
                  <td>
                    <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users/edit/<?php echo $_smarty_tpl->getValue('row')['user_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                    <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="user" data-id="<?php echo $_smarty_tpl->getValue('row')['user_id'];?>
">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
              <tr>
                <td colspan="6" class="text-center">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No data to show");?>

                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
      <?php echo $_smarty_tpl->getValue('pager');?>

    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "edit") {?>

    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-2 text-center mb20">
          <img class="img-fluid img-thumbnail rounded-circle" src="<?php echo $_smarty_tpl->getValue('data')['user_picture'];?>
">
        </div>
        <div class="col-12 col-md-5 mb20">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['user_id'];?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User ID");?>

            </li>
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('data')['user_registered'],"%e %B %Y");?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Joined");?>

            </li>
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('data')['user_last_seen'],"%e %B %Y");?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Last Login");?>

            </li>
          </ul>
        </div>
        <div class="col-12 col-md-5 mb20">
          <ul class="list-group">
            <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['friends'];?>
</span>
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

              </li>
            <?php }?>
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['followings'];?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followings");?>

            </li>
            <li class="list-group-item">
              <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->getValue('data')['followers'];?>
</span>
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");?>

            </li>
          </ul>
        </div>
      </div>

      <!-- tabs nav -->
      <ul class="nav nav-tabs mb20">
        <li class="nav-item">
          <a class="nav-link active" href="#account" data-bs-toggle="tab">
            <i class="fa fa-cog fa-fw mr5"></i><strong class="mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account");?>
</strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#profile" data-bs-toggle="tab">
            <i class="fa fa-user fa-fw mr5"></i><strong class="mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Profile");?>
</strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#privacy" data-bs-toggle="tab">
            <i class="fa fa-lock fa-fw mr5"></i><strong class="mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Privacy");?>
</strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#security" data-bs-toggle="tab">
            <i class="fa fa-shield-alt fa-fw mr5"></i><strong class="mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Security");?>
</strong>
          </a>
        </li>
        <?php if ($_smarty_tpl->getValue('system')['packages_enabled']) {?>
          <li class="nav-item">
            <a class="nav-link" href="#membership" data-bs-toggle="tab">
              <i class="fa fa-id-card fa-fw mr5"></i><strong class="mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Membership");?>
</strong>
            </a>
          </li>
        <?php }?>
        <?php if ($_smarty_tpl->getValue('system')['wallet_enabled'] || $_smarty_tpl->getValue('system')['points_enabled']) {?>
          <li class="nav-item">
            <a class="nav-link" href="#extra" data-bs-toggle="tab">
              <i class="fa fa-cubes fa-fw mr5"></i><strong class="mr5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Extra");?>
</strong>
            </a>
          </li>
        <?php }?>
      </ul>
      <!-- tabs nav -->

      <!-- tabs content -->
      <div class="tab-content">
        <!-- account tab -->
        <div class="tab-pane active" id="account">
          <form class="js_ajax-forms" data-url="admin/users.php?id=<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
&do=edit_account">
            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified User");?>

              </label>
              <div class="col-md-9">
                <label class="switch" for="user_verified">
                  <input type="checkbox" name="user_verified" id="user_verified" <?php if ($_smarty_tpl->getValue('data')['user_verified']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Banned");?>

              </label>
              <div class="col-md-9">
                <label class="switch" for="user_banned">
                  <input type="checkbox" name="user_banned" id="user_banned" <?php if ($_smarty_tpl->getValue('data')['user_banned']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ban Message");?>

              </label>
              <div class="col-md-9">
                <textarea class="form-control" name="user_banned_message"><?php echo $_smarty_tpl->getValue('data')['user_banned_message'];?>
</textarea>
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The message that is presented on this profile, if empty 404 error will be used instead");?>

                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account Activated");?>

              </label>
              <div class="col-md-9">
                <label class="switch" for="user_activated">
                  <input type="checkbox" name="user_activated" id="user_activated" <?php if ($_smarty_tpl->getValue('data')['user_activated']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
                <div class="form-text">
                  <?php if (!$_smarty_tpl->getValue('system')['activation_enabled']) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account activation disabled from your system");?>
 <a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/settings/registration"><?php ob_start();
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Registration Settings");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</a>
                  <?php } else { ?>
                    <?php if ($_smarty_tpl->getValue('system')['activation_type'] == "email") {?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account activation enabled from your system settings by");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email");?>

                    <?php } else { ?>
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Account activation enabled from your system settings by");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("SMS");?>

                    <?php }?>
                  <?php }?>
                </div>
              </div>
            </div>

            <?php if ($_smarty_tpl->getValue('system')['two_factor_enabled'] && $_smarty_tpl->getValue('data')['user_two_factor_enabled']) {?>
              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Two-Factor Authentication");?>

                </label>
                <div class="col-md-9">
                  <label class="switch" for="user_two_factor_enabled">
                    <input type="checkbox" name="user_two_factor_enabled" id="user_two_factor_enabled" <?php if ($_smarty_tpl->getValue('data')['user_two_factor_enabled']) {?>checked<?php }?>>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
            <?php }?>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Demo Account");?>

              </label>
              <div class="col-md-9">
                <label class="switch" for="user_demo">
                  <input type="checkbox" name="user_demo" id="user_demo" <?php if ($_smarty_tpl->getValue('data')['user_demo']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If demo mode enabled this user will not be able to do anything");?>

                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("User Group");?>

              </label>
              <div class="col-md-9">
                <select class="form-select" name="user_group">
                  <option value="1" <?php if ($_smarty_tpl->getValue('data')['user_group'] == '1') {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Administrators");?>

                  </option>
                  <option value="2" <?php if ($_smarty_tpl->getValue('data')['user_group'] == '2') {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Moderators");?>

                  </option>
                  <option value="3" <?php if ($_smarty_tpl->getValue('data')['user_group'] == '3' && !$_smarty_tpl->getValue('data')['user_group_custom']) {?>selected<?php }?>>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users");?>

                  </option>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['user_groups'], 'user_group');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user_group')->value) {
$foreach2DoElse = false;
?>
                    <option value="cusg_<?php echo $_smarty_tpl->getValue('user_group')['user_group_id'];?>
" <?php if ($_smarty_tpl->getValue('data')['user_group_custom'] == $_smarty_tpl->getValue('user_group')['user_group_id']) {?>selected<?php }?>>
                      <?php echo $_smarty_tpl->getValue('user_group')['user_group_title'];?>

                    </option>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
                <div class="form-text">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If user subscribed to a package so this package permissions will be used instead");?>

                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Username");?>

              </label>
              <div class="col-md-9">
                <div class="input-group">
                  <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/</span>
                  <input type="text" class="form-control" name="user_name" value="<?php echo $_smarty_tpl->getValue('data')['user_name'];?>
">
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Address");?>

              </label>
              <div class="col-md-9">
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  <input type="text" class="form-control" name="user_email" value="<?php echo $_smarty_tpl->getValue('data')['user_email'];?>
">
                </div>
              </div>
            </div>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email Verified");?>

              </label>
              <div class="col-md-9">
                <label class="switch" for="user_email_verified">
                  <input type="checkbox" name="user_email_verified" id="user_email_verified" <?php if ($_smarty_tpl->getValue('data')['user_email_verified']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <?php if (($_smarty_tpl->getValue('system')['activation_enabled'] && $_smarty_tpl->getValue('system')['activation_type'] == "sms") || ($_smarty_tpl->getValue('system')['two_factor_enabled'] && $_smarty_tpl->getValue('system')['two_factor_type'] == "sms")) {?>
              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Number");?>

                </label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="user_phone" value="<?php echo $_smarty_tpl->getValue('data')['user_phone'];?>
">
                  <div class="form-text">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone number (eg. +905...)");?>

                  </div>
                </div>
              </div>

              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Phone Verified");?>

                </label>
                <div class="col-md-9">
                  <label class="switch" for="user_phone_verified">
                    <input type="checkbox" name="user_phone_verified" id="user_phone_verified" <?php if ($_smarty_tpl->getValue('data')['user_phone_verified']) {?>checked<?php }?>>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
            <?php }?>

            <div class="row form-group">
              <label class="col-md-3 form-label">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Password");?>

              </label>
              <div class="col-md-9">
                <input type="password" class="form-control" name="user_password">
              </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 mt20 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 mt20 x-hidden"></div>
            <!-- error -->

            <div class="card-footer-fake text-end">
              <button type="button" class="btn btn-danger js_admin-deleter" data-handle="user_posts" data-id="<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
" data-delete-message="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Are you sure you want to delete all posts?");?>
">
                <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete Posts");?>

              </button>
              <button type="button" class="btn btn-danger js_admin-deleter" data-handle="user" data-id="<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
" data-redirect="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/users">
                <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete User");?>

              </button>
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </form>
        </div>
        <!-- account tab -->

        <!-- profile tab -->
        <div class="tab-pane" id="profile">
          <form class="js_ajax-forms" data-url="admin/users.php?id=<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
&do=edit_profile">
            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Basic");?>

            </div>
            <div class="pl-md-4">
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("First Name");?>
</label>
                  <input class="form-control" name="user_firstname" value="<?php echo $_smarty_tpl->getValue('data')['user_firstname'];?>
">
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Last Name");?>
</label>
                  <input class="form-control" name="user_lastname" value="<?php echo $_smarty_tpl->getValue('data')['user_lastname'];?>
">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("I am");?>
</label>
                  <select class="form-select" name="user_gender">
                    <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Sex");?>
:</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('genders'), 'gender');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gender')->value) {
$foreach3DoElse = false;
?>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_gender'] == $_smarty_tpl->getValue('gender')['gender_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('gender')['gender_id'];?>
"><?php echo $_smarty_tpl->getValue('gender')['gender_name'];?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Relationship Status");?>
</label>
                  <select class="form-select" name="user_relationship">
                    <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Relationship");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Single");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In a relationship");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Married");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("It's complicated");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Separated");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Divorced");?>
</option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Widowed");?>
</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Country");?>
</label>
                  <select class="form-select" name="user_country">
                    <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Country");?>
</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('countries'), 'country');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->value) {
$foreach4DoElse = false;
?>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_country'] == $_smarty_tpl->getValue('country')['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('country')['country_id'];?>
"><?php echo $_smarty_tpl->getValue('country')['country_name'];?>
</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Website");?>
</label>
                  <input type="text" class="form-control" name="user_website" value="<?php echo $_smarty_tpl->getValue('data')['user_website'];?>
">
                </div>
              </div>

              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Birthdate");?>
</label>
                <div class="row">
                  <div class="col">
                    <select class="form-select" name="birth_month">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Month");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jan");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Feb");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Mar");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apr");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("May");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jun");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jul");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Aug");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sep");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Oct");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Nov");?>
</option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Dec");?>
</option>
                    </select>
                  </div>
                  <div class="col">
                    <select class="form-select" name="birth_day">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Day");?>
</option>
                      <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['day'] == $_smarty_tpl->getValue('i')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</option>
                      <?php }
}
?>
                    </select>
                  </div>
                  <div class="col">
                    <select class="form-select" name="birth_year">
                      <option value="none"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Year");?>
</option>
                      <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2015+1 - (1905) : 1905-(2015)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <option <?php if ($_smarty_tpl->getValue('data')['user_birthdate_parsed']['year'] == $_smarty_tpl->getValue('i')) {?>selected<?php }?> value="<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</option>
                      <?php }
}
?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("About Me");?>
</label>
                <textarea class="form-control" name="user_biography"><?php echo $_smarty_tpl->getValue('data')['user_biography'];?>
</textarea>
              </div>

              <!-- custom fields -->
              <?php if ($_smarty_tpl->getValue('custom_fields')['basic']) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['basic'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
              <?php }?>
              <!-- custom fields -->
            </div>

            <div class="divider"></div>

            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work");?>

            </div>
            <div class="pl-md-4">
              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Title");?>
</label>
                <input type="text" class="form-control" name="user_work_title" value="<?php echo $_smarty_tpl->getValue('data')['user_work_title'];?>
">
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Place");?>
</label>
                  <input type="text" class="form-control" name="user_work_place" value="<?php echo $_smarty_tpl->getValue('data')['user_work_place'];?>
">
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Work Website");?>
</label>
                  <input type="text" class="form-control" name="user_work_url" value="<?php echo $_smarty_tpl->getValue('data')['user_work_url'];?>
">
                </div>
              </div>

              <!-- custom fields -->
              <?php if ($_smarty_tpl->getValue('custom_fields')['work']) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['work'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
              <?php }?>
              <!-- custom fields -->
            </div>

            <div class="divider"></div>

            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Location");?>

            </div>
            <div class="pl-md-4">
              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Current City");?>
</label>
                <input type="text" class="form-control" name="user_current_city" value="<?php echo $_smarty_tpl->getValue('data')['user_current_city'];?>
">
              </div>

              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Hometown");?>
</label>
                <input type="text" class="form-control" name="user_hometown" value="<?php echo $_smarty_tpl->getValue('data')['user_hometown'];?>
">
              </div>

              <!-- custom fields -->
              <?php if ($_smarty_tpl->getValue('custom_fields')['location']) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['location'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
              <?php }?>
              <!-- custom fields -->
            </div>

            <div class="divider"></div>

            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Education");?>

            </div>
            <div class="pl-md-4">
              <div class="form-group">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("School");?>
</label>
                <input type="text" class="form-control" name="user_edu_school" value="<?php echo $_smarty_tpl->getValue('data')['user_edu_school'];?>
">
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Major");?>
</label>
                  <input type="text" class="form-control" name="user_edu_major" value="<?php echo $_smarty_tpl->getValue('data')['user_edu_major'];?>
">
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Class");?>
</label>
                  <input type="text" class="form-control" name="user_edu_class" value="<?php echo $_smarty_tpl->getValue('data')['user_edu_class'];?>
">
                </div>
              </div>

              <!-- custom fields -->
              <?php if ($_smarty_tpl->getValue('custom_fields')['education']) {?>
                <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['education'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
              <?php }?>
              <!-- custom fields -->
            </div>

            <div class="divider"></div>

            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Social Links");?>

            </div>
            <div class="pl-md-4">
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Facebook Profile URL");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text bg-transparent">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"facebook",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->getValue('data')['user_social_facebook'];?>
">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("X Profile URL");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text bg-transparent">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"twitter",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->getValue('data')['user_social_twitter'];?>
">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("YouTube Profile URL");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text bg-transparent">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"youtube",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->getValue('data')['user_social_youtube'];?>
">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Instagram Profile URL");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text bg-transparent">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"instagram",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->getValue('data')['user_social_instagram'];?>
">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("LinkedIn Profile URL");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text bg-transparent">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"linkedin",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->getValue('data')['user_social_linkedin'];?>
">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Vkontakte Profile URL");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text bg-transparent">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"vk",'width'=>"24px",'height'=>"24px"), (int) 0, $_smarty_current_dir);
?>
                    </span>
                    <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->getValue('data')['user_social_vkontakte'];?>
">
                  </div>
                </div>
              </div>
            </div>

            <?php if ($_smarty_tpl->getValue('custom_fields')['other']) {?>
              <div class="divider"></div>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Other");?>

              </div>
              <div class="pl-md-4">
                <!-- custom fields -->
                <?php if ($_smarty_tpl->getValue('custom_fields')['other']) {?>
                  <?php $_smarty_tpl->renderSubTemplate('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->getValue('custom_fields')['other'],'_registration'=>false), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <!-- custom fields -->
              </div>
            <?php }?>

            <!-- success -->
            <div class="alert alert-success x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->

            <div class="card-footer-fake text-end">
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </form>
        </div>
        <!-- profile tab -->

        <!-- privacy tab -->
        <div class="tab-pane" id="privacy">
          <form class="js_ajax-forms" data-url="admin/users.php?id=<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
&do=edit_privacy">
            <?php if ($_smarty_tpl->getValue('system')['chat_enabled']) {?>
              <div class="form-table-row">
                <div class="avatar">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"chat",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div>
                  <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Enabled");?>
</div>
                  <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("If chat disabled you will appear offline and will no see who is online too");?>
</div>
                </div>
                <div class="text-end">
                  <label class="switch" for="user_chat_enabled">
                    <input type="checkbox" name="user_chat_enabled" id="user_chat_enabled" <?php if ($_smarty_tpl->getValue('data')['user_chat_enabled']) {?>checked<?php }?>>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
            <?php }?>

            <div class="form-table-row">
              <div class="avatar">
                <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"account_activation",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
              </div>
              <div>
                <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Email you with our newsletter");?>
</div>
                <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("From time to time we send newsletter email to all of our members");?>
</div>
              </div>
              <div class="text-end">
                <label class="switch" for="user_newsletter_enabled">
                  <input type="checkbox" name="user_newsletter_enabled" id="user_newsletter_enabled" <?php if ($_smarty_tpl->getValue('data')['user_newsletter_enabled']) {?>checked<?php }?>>
                  <span class="slider round"></span>
                </label>
              </div>
            </div>

            <?php if ($_smarty_tpl->getValue('system')['tips_enabled']) {?>
              <div class="form-table-row">
                <div class="avatar">
                  <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tip",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div>
                  <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tips Enabled");?>
</div>
                  <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow the send tips button on your profile");?>
</div>
                </div>
                <div class="text-end">
                  <label class="switch" for="user_tips_enabled">
                    <input type="checkbox" name="user_tips_enabled" id="user_tips_enabled" <?php if ($_smarty_tpl->getValue('data')['user_tips_enabled']) {?>checked<?php }?>>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
            <?php }?>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can message you");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-message"></i></span>
                  <select class="form-select" name="user_privacy_chat">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_chat'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_chat'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_chat'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No One");?>

                    </option>
                  </select>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['pokes_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can poke you");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
                    <select class="form-select" name="user_privacy_poke">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_poke'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_poke'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_poke'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No One");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['gifts_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can send you gifts");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-gift"></i></span>
                    <select class="form-select" name="user_privacy_gifts">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_gifts'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_gifts'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_gifts'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No One");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['wall_posts_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can post on your wall");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-newspaper"></i></span>
                    <select class="form-select" name="user_privacy_wall">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_wall'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_wall'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_wall'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("gender");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                  <select class="form-select" name="user_privacy_gender">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_gender'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_gender'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_gender'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                    </option>
                  </select>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['relationship_info_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("relationship");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-heart"></i></span>
                    <select class="form-select" name="user_privacy_relationship">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_relationship'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_relationship'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_relationship'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("birthdate");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                  <select class="form-select" name="user_privacy_birthdate">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_birthdate'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                    </option>
                  </select>
                </div>
              </div>

              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("basic info");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <select class="form-select" name="user_privacy_basic">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_basic'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_basic'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_basic'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                    </option>
                  </select>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['work_info_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("work info");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                    <select class="form-select" name="user_privacy_work">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_work'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['location_info_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("location info");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <select class="form-select" name="user_privacy_location">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_location'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['education_info_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("education info");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-university"></i></span>
                    <select class="form-select" name="user_privacy_education">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_education'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("other info");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-folder-plus"></i></span>
                  <select class="form-select" name="user_privacy_other">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_other'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_other'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_other'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                    </option>
                  </select>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("friends");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                    <select class="form-select" name="user_privacy_friends">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("followers/followings");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                  <select class="form-select" name="user_privacy_followers">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_followers'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_followers'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_followers'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                    </option>
                  </select>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("subscriptions");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                    <select class="form-select" name="user_privacy_subscriptions">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_subscriptions'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_subscriptions'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_subscriptions'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <div class="form-group col-md-6">
                <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("photos");?>
</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-images"></i></span>
                  <select class="form-select" name="user_privacy_photos">
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_photos'] == "public") {?>selected<?php }?> value="public">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_photos'] == "friends") {?>selected<?php }?> value="friends">
                      <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                    </option>
                    <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_photos'] == "me") {?>selected<?php }?> value="me">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                    </option>
                  </select>
                </div>
              </div>

              <?php if ($_smarty_tpl->getValue('system')['pages_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("liked pages");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-flag"></i></span>
                    <select class="form-select" name="user_privacy_pages">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['groups_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("joined groups");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                    <select class="form-select" name="user_privacy_groups">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->getValue('system')['events_enabled']) {?>
                <div class="form-group col-md-6">
                  <label class="form-label"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Who can see your");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("joined events");?>
</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    <select class="form-select" name="user_privacy_events">
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_events'] == "public") {?>selected<?php }?> value="public">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Everyone");?>

                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_events'] == "friends") {?>selected<?php }?> value="friends">
                        <?php if ($_smarty_tpl->getValue('system')['friends_enabled']) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Friends");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Followers");
}?>
                      </option>
                      <option <?php if ($_smarty_tpl->getValue('data')['user_privacy_events'] == "me") {?>selected<?php }?> value="me">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Just Me");?>

                      </option>
                    </select>
                  </div>
                </div>
              <?php }?>
            </div>

            <!-- success -->
            <div class="alert alert-success x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->

            <div class="card-footer-fake text-end">
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </form>
        </div>
        <!-- privacy tab -->

        <!-- security tab -->
        <div class="tab-pane" id="security">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable" style="width: 100%!important;">
              <thead>
                <tr>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Browser");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("OS");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Date");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("IP");?>
</th>
                  <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
                </tr>
              </thead>
              <tbody>
                <?php if (!$_smarty_tpl->getValue('user')->_data['user_demo'] && $_smarty_tpl->getValue('data')['sessions']) {?>
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['sessions'], 'session');
$_smarty_tpl->getVariable('session')->iteration = 0;
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('session')->value) {
$foreach5DoElse = false;
$_smarty_tpl->getVariable('session')->iteration++;
$foreach5Backup = clone $_smarty_tpl->getVariable('session');
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->getVariable('session')->iteration;?>
</td>
                      <td><?php echo $_smarty_tpl->getValue('session')['user_browser'];?>
</td>
                      <td><?php echo $_smarty_tpl->getValue('session')['user_os'];?>
</td>
                      <td>
                        <span class="js_moment" data-time="<?php echo $_smarty_tpl->getValue('session')['session_date'];?>
"><?php echo $_smarty_tpl->getValue('session')['session_date'];?>
</span>
                      </td>
                      <td><?php echo $_smarty_tpl->getValue('session')['user_ip'];?>
</td>
                      <td>
                        <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("End Session");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="session" data-id="<?php echo $_smarty_tpl->getValue('session')['session_id'];?>
">
                          <i class="fa fa-trash-alt"></i>
                        </button>
                      </td>
                    </tr>
                  <?php
$_smarty_tpl->setVariable('session', $foreach5Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- security tab -->

        <!-- membership tab -->
        <div class="tab-pane" id="membership">
          <form class="js_ajax-forms" data-url="admin/users.php?id=<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
&do=edit_membership">
            <?php if ($_smarty_tpl->getValue('data')['user_subscribed']) {?>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package Details");?>

              </div>
              <div class="pl-md-4">
                <div class="row form-group">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Package");?>

                  </label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext">
                      <?php echo $_smarty_tpl->getValue('data')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('data')['price']);?>

                      <?php if ($_smarty_tpl->getValue('data')['period'] == "life") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("per");?>
 <?php if ($_smarty_tpl->getValue('data')['period_num'] != '1') {
echo $_smarty_tpl->getValue('data')['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('data')['period']));
}?>)
                    </p>
                  </div>
                </div>

                <div class="row form-group">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Subscription Date");?>

                  </label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('data')['user_subscription_date'],"%e %B %Y");?>

                    </p>
                  </div>
                </div>

                <div class="row form-group">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expiration Date");?>

                  </label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext">
                      <?php if ($_smarty_tpl->getValue('data')['period'] == "life") {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");?>

                      <?php } else { ?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('data')['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->getValue('data')['subscription_timeleft'] > 0) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remaining");?>
 <?php echo $_smarty_tpl->getValue('data')['subscription_timeleft'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Days");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Expired");
}?>)
                      <?php }?>
                    </p>
                  </div>
                </div>

                <div class="row form-group">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Posts");?>

                  </label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext">
                      <?php echo $_smarty_tpl->getValue('data')['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->getValue('data')['boost_posts'];?>

                    </p>

                    <div class="progress mb5">
                      <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php if ($_smarty_tpl->getValue('data')['boost_posts'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('data')['user_boosted_posts']/$_smarty_tpl->getValue('data')['boost_posts'])*100;
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if ($_smarty_tpl->getValue('data')['boost_posts'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('data')['user_boosted_posts']/$_smarty_tpl->getValue('data')['boost_posts'])*100;
}?>%"></div>
                    </div>
                  </div>
                </div>

                <div class="row form-group">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Boosted Pages");?>

                  </label>
                  <div class="col-md-9">
                    <p class="form-control-plaintext">
                      <?php echo $_smarty_tpl->getValue('data')['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->getValue('data')['boost_pages'];?>

                    </p>

                    <div class="progress mb5">
                      <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php if ($_smarty_tpl->getValue('data')['boost_pages'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('data')['user_boosted_pages']/$_smarty_tpl->getValue('data')['boost_pages'])*100;
}?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php if ($_smarty_tpl->getValue('data')['boost_pages'] == 0) {?>0<?php } else {
echo ($_smarty_tpl->getValue('data')['user_boosted_pages']/$_smarty_tpl->getValue('data')['boost_pages'])*100;
}?>%"></div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-9 offset-md-3">
                    <button type="button" class="btn btn-danger js_admin-deleter" data-handle="user_package" data-id="<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
">
                      <i class="fa fa-trash-alt mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Unsubscribe");?>

                    </button>
                  </div>
                </div>
              </div>

              <div class="divider"></div>
            <?php }?>

            <div class="heading-small mb20">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Upgrade Package");?>

            </div>
            <div class="pl-md-4">
              <div class="row form-group">
                <label class="col-md-3 form-label">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Select Package");?>

                </label>
                <div class="col-md-9">
                  <select class="form-select" name="package">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('packages'), 'package');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('package')->value) {
$foreach6DoElse = false;
?>
                      <option value="<?php echo $_smarty_tpl->getValue('package')['package_id'];?>
" <?php if ($_smarty_tpl->getValue('data')['user_package'] == $_smarty_tpl->getValue('package')['package_id']) {?>selected<?php }?>>
                        <?php echo $_smarty_tpl->getValue('package')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('package')['price']);?>

                        <?php if ($_smarty_tpl->getValue('package')['period'] == "life") {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Life Time");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("per");?>
 <?php if ($_smarty_tpl->getValue('package')['period_num'] != '1') {
echo $_smarty_tpl->getValue('package')['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('package')['period']));
}?>)
                      </option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>
            </div>

            <!-- success -->
            <div class="alert alert-success mb0 mt20 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 mt20 x-hidden"></div>
            <!-- error -->

            <div class="card-footer-fake text-end">
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </form>
        </div>
        <!-- membership tab -->

        <!-- extra tab -->
        <div class="tab-pane" id="extra">
          <form class="js_ajax-forms" data-url="admin/users.php?id=<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
&do=edit_extra">
            <!-- Points -->
            <?php if ($_smarty_tpl->getValue('system')['points_enabled']) {?>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points");?>

              </div>
              <div class="pl-md-4">
                <div class="row">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points Balance");?>

                  </label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa fa-piggy-bank"></i></span>
                      <input class="form-control" name="user_points" value="<?php echo $_smarty_tpl->getValue('data')['user_points'];?>
">
                    </div>
                  </div>
                </div>
              </div>

              <div class="divider"></div>
            <?php }?>
            <!-- Points -->

            <!-- Wallet -->
            <?php if ($_smarty_tpl->getValue('system')['wallet_enabled']) {?>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet");?>

              </div>
              <div class="pl-md-4">
                <div class="row">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Wallet Balance");?>

                  </label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "left") {?>
                        <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
                      <?php }?>
                      <input type="text" class="form-control" placeholder="0.00" min="1.00" max="1000" name="user_wallet_balance" value="<?php echo $_smarty_tpl->getValue('data')['user_wallet_balance'];?>
">
                      <?php if ($_smarty_tpl->getValue('system')['system_currency_dir'] == "right") {?>
                        <span class="input-group-text"><?php echo $_smarty_tpl->getValue('system')['system_currency_symbol'];?>
</span>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="divider"></div>
            <?php }?>
            <!-- Wallet -->

            <!-- Marketplace -->
            <?php if ($_smarty_tpl->getValue('system')['market_enabled']) {?>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace");?>

              </div>
              <div class="pl-md-4">
                <div class="row">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Marketplace Balance");?>

                  </label>
                  <div class="col-md-9">
                    <h6>
                      <span class="badge badge-lg bg-light text-primary">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['user_market_balance'],2));?>

                      </span>
                    </h6>
                  </div>
                </div>
              </div>

              <div class="divider"></div>
            <?php }?>
            <!-- Marketplace -->

            <!-- Funding -->
            <?php if ($_smarty_tpl->getValue('system')['funding_enabled']) {?>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>

              </div>
              <div class="pl-md-4">
                <div class="row">
                  <label class="col-md-3 form-label">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding Balance");?>

                  </label>
                  <div class="col-md-9">
                    <h6>
                      <span class="badge badge-lg bg-light text-primary">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['user_funding_balance'],2));?>

                      </span>
                    </h6>
                  </div>
                </div>
              </div>

              <div class="divider"></div>
            <?php }?>
            <!-- Funding -->

            <!-- Monetization -->
            <?php if ($_smarty_tpl->getValue('system')['monetization_enabled']) {?>
              <div class="heading-small mb20">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>

              </div>
              <?php if ($_smarty_tpl->getValue('data')['can_monetize_content']) {?>
                <div class="pl-md-4">
                  <div class="form-table-row">
                    <div class="avatar">
                      <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
                    </div>
                    <div>
                      <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</div>
                      <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable or disable monetization for your content");?>
</div>
                    </div>
                    <div class="text-end">
                      <label class="switch" for="user_monetization_enabled">
                        <input type="checkbox" name="user_monetization_enabled" id="user_monetization_enabled" <?php if ($_smarty_tpl->getValue('data')['user_monetization_enabled']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </div>

                  <div class="row mb30">
                    <label class="col-md-3 form-label">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Payment Plans");?>

                    </label>
                    <div class="col-md-9">
                      <div class="payment-plans">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('monetization_plans'), 'plan');
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('plan')->value) {
$foreach7DoElse = false;
?>
                          <div class="payment-plan">
                            <div class="text-xxlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('plan')['title']);?>
</div>
                            <div class="text-xlg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getValue('plan')['price']);?>
 / <?php if ($_smarty_tpl->getValue('plan')['period_num'] != '1') {
echo $_smarty_tpl->getValue('plan')['period_num'];
}?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getSmarty()->getModifierCallback('ucfirst')($_smarty_tpl->getValue('plan')['period']));?>
</div>
                            <?php ob_start();
echo $_smarty_tpl->getValue('plan')['custom_description'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
                              <div><?php echo $_smarty_tpl->getValue('plan')['custom_description'];?>
</div>
                            <?php }?>
                            <div class="mt10">
                              <span class="text-link mr10 js_monetization-deleter" data-id="<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
">
                                <i class="fa fa-trash-alt mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>

                              </span>
                              |
                              <span data-toggle="modal" data-url="monetization/controller.php?do=edit&id=<?php echo $_smarty_tpl->getValue('plan')['plan_id'];?>
" class="text-link ml10">
                                <i class="fa fa-pen mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>

                              </span>
                            </div>
                          </div>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <div data-toggle="modal" data-url="monetization/controller.php?do=add&node_id=<?php echo $_smarty_tpl->getValue('data')['user_id'];?>
&node_type=profile" class="payment-plan new"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add new plan");?>
 </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-md-3 form-label">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization Balance");?>

                    </label>
                    <div class="col-md-9">
                      <h6>
                        <span class="badge badge-lg bg-light text-primary">
                          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')($_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('data')['user_monetization_balance'],2));?>

                        </span>
                      </h6>
                    </div>
                  </div>
                </div>
              <?php } else { ?>
                <div class="pl-md-4">
                  <div class="alert alert-danger">
                    <div class="icon">
                      <i class="fa fa-minus-circle fa-2x"></i>
                    </div>
                    <div class="text pt5">
                      <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("This user is not eligible for monetization");?>

                    </div>
                  </div>
                </div>
              <?php }?>
            <?php }?>
            <!-- Monetization -->

            <!-- success -->
            <div class="alert alert-success mb0 mt20 x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger mb0 mt20 x-hidden"></div>
            <!-- error -->

            <div class="card-footer-fake text-end">
              <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
            </div>
          </form>
        </div>
        <!-- extra tab -->
      </div>
      <!-- tabs content -->
    </div>

  <?php }?>
</div><?php }
}
