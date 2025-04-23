<?php
/* Smarty version 5.4.1, created on 2025-04-18 02:38:55
  from 'file:admin.permissions_groups.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6801bb3f6ea821_14453349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb58b4eed55cdc4a83ba84fafec366759d2d9fec' => 
    array (
      0 => 'admin.permissions_groups.tpl',
      1 => 1744139777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 70,
  ),
))) {
function content_6801bb3f6ea821_14453349 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/add" class="btn btn-md btn-primary">
          <i class="fa fa-key mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Group");?>

        </a>
      </div>
    <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add" || $_smarty_tpl->getValue('sub_view') == "edit") {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-key mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Permissions Groups");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['permissions_group_title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Group");
}?>
  </div>

  <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>

    <div class="card-body">
      <!-- System Permissions Groups (Users/Verified) -->
      <h6 class="card-title mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("System Permissions Groups");?>
</h6>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Actions");?>
</th>
            </tr>
          </thead>
          <tbody>
            <!-- Users -->
            <tr>
              <td>1</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Permissions");?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/users" class="btn btn-sm btn-icon btn-rounded btn-primary">
                  <i class="fa fa-pencil-alt"></i>
                </a>
              </td>
            </tr>
            <!-- Users -->
            <!-- Verified -->
            <tr>
              <td>2</td>
              <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Verified Permissions");?>
</td>
              <td>
                <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/verified" class="btn btn-sm btn-icon btn-rounded btn-primary">
                  <i class="fa fa-pencil-alt"></i>
                </a>
              </td>
            </tr>
            <!-- Verified -->
          </tbody>
        </table>
      </div>
      <!-- System Permissions Groups (Users/Verified) -->

      <div class="divider"></div>

      <!-- Custom Permissions Groups -->
      <h6 class="card-title mb20"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Permissions Groups");?>
</h6>
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover js_dataTable">
          <thead>
            <tr>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("ID");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Title");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['permissions_group_id'];?>
</td>
                <td>
                  <?php echo $_smarty_tpl->getValue('row')['permissions_group_title'];?>

                </td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/permissions_groups/edit/<?php echo $_smarty_tpl->getValue('row')['permissions_group_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="permissions_group" data-id="<?php echo $_smarty_tpl->getValue('row')['permissions_group_id'];?>
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
      <!-- Custom Permissions Groups -->
    </div>

  <?php } elseif ($_smarty_tpl->getValue('sub_view') == "add") {?>

    <form class="js_ajax-forms" data-url="admin/permissions_groups.php?do=add">
      <div class="card-body">
        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Grouo Info");?>

        </div>
        <div class="pl-md-4">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Title");?>

            </label>
            <div class="col-md-9">
              <input class="form-control" name="title">
            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Modules Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Pages Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Pages");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="pages_permission">
                <input type="checkbox" name="pages_permission" id="pages_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Pages Permission -->

          <!-- Groups Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Groups");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="groups_permission">
                <input type="checkbox" name="groups_permission" id="groups_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Groups Permission -->

          <!-- Events Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Events");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="events_permission">
                <input type="checkbox" name="events_permission" id="events_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Events Permission -->

          <!-- Reels Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Reels");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="reels_permission">
                <input type="checkbox" name="reels_permission" id="reels_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Reels Permission -->

          <!-- Watch Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Watch Videos");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="watch_permission">
                <input type="checkbox" name="watch_permission" id="watch_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Watch Permission -->

          <!-- Blogs Permission (Write) -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
 <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write");?>
</span></div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Write Blogs");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="blogs_permission">
                <input type="checkbox" name="blogs_permission" id="blogs_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Blogs Permission (Write) -->

          <!-- Blogs Permission (Read) -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
 <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Read");?>
</span></div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Read Blogs");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="blogs_permission_read">
                <input type="checkbox" name="blogs_permission_read" id="blogs_permission_read">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Blogs Permission (Read) -->

          <!-- Market Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Sell Products");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="market_permission">
                <input type="checkbox" name="market_permission" id="market_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Market Permission -->

          <!-- Offers Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Offers");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="offers_permission">
                <input type="checkbox" name="offers_permission" id="offers_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Offers Permission -->

          <!-- Jobs Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Jobs");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="jobs_permission">
                <input type="checkbox" name="jobs_permission" id="jobs_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Jobs Permission -->

          <!-- Courses Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create courses");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="courses_permission">
                <input type="checkbox" name="courses_permission" id="courses_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Courses Permission -->

          <!-- Forums Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Threads/Replies");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="forums_permission">
                <input type="checkbox" name="forums_permission" id="forums_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Forums Permission -->

          <!-- Movies Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Watch Movies");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="movies_permission">
                <input type="checkbox" name="movies_permission" id="movies_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Movies Permission -->

          <!-- Games Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Play Games");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="games_permission">
                <input type="checkbox" name="games_permission" id="games_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Games Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Features Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Gifts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gifts",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Gifts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Send Gifts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="gifts_permission">
                <input type="checkbox" name="gifts_permission" id="gifts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Gifts Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stories Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Stories Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"24_hours",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stories");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Stories");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="stories_permission">
                <input type="checkbox" name="stories_permission" id="stories_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Stories Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Publish Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="posts_permission">
                <input type="checkbox" name="posts_permission" id="posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Posts Permission -->

          <!-- Colored Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_colored",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Colored Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Colored Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="colored_posts_permission">
                <input type="checkbox" name="colored_posts_permission" id="colored_posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Colored Posts Permission -->

          <!-- Feelings/Activity Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"smile",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Feelings/Activity Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Feelings/Activity Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="activity_posts_permission">
                <input type="checkbox" name="activity_posts_permission" id="activity_posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Feelings/Activity Posts Permission -->

          <!-- Polls Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"polls",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Polls Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Polls Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="polls_posts_permission">
                <input type="checkbox" name="polls_posts_permission" id="polls_posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Polls Posts Permission -->

          <!-- Geolocation Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Geolocation Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Geolocation Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="geolocation_posts_permission">
                <input type="checkbox" name="geolocation_posts_permission" id="geolocation_posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Geolocation Posts Permission -->

          <!-- GIF Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("GIF Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add GIF Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="gif_posts_permission">
                <input type="checkbox" name="gif_posts_permission" id="gif_posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- GIF Posts Permission -->

          <!-- Anonymous Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Anonymous Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Anonymous Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="anonymous_posts_permission">
                <input type="checkbox" name="anonymous_posts_permission" id="anonymous_posts_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Anonymous Posts Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Registration Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Invitation Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invitation");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Generate Invitation Codes");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="invitation_permission">
                <input type="checkbox" name="invitation_permission" id="invitation_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Invitation Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Audio Call Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"call_audio",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio Call");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Make Audio Calls");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="audio_call_permission">
                <input type="checkbox" name="audio_call_permission" id="audio_call_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Audio Call Permission -->

          <!-- Video Call Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"call_video",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Video Call");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Make Video Calls");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="video_call_permission">
                <input type="checkbox" name="video_call_permission" id="video_call_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Video Call Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Live Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Go Live");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="live_permission">
                <input type="checkbox" name="live_permission" id="live_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Live Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploads Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Videos Upload Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Upload");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Upload Videos");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="videos_upload_permission">
                <input type="checkbox" name="videos_upload_permission" id="videos_upload_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Videos Upload Permission -->

          <!-- Audios Upload Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"audios",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio Upload");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Upload Audio");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="audios_upload_permission">
                <input type="checkbox" name="audios_upload_permission" id="audios_upload_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Audios Upload Permission -->

          <!-- Files Upload Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"files",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Files Upload");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Upload Files");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="files_upload_permission">
                <input type="checkbox" name="files_upload_permission" id="files_upload_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Files Upload Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Money Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Ads Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Ads");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="ads_permission">
                <input type="checkbox" name="ads_permission" id="ads_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Ads Permission -->

          <!-- Funding Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Raise Funding");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="funding_permission">
                <input type="checkbox" name="funding_permission" id="funding_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Funding Permission -->

          <!-- Monetization Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Monetize Content");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="monetization_permission">
                <input type="checkbox" name="monetization_permission" id="monetization_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Monetization Permission -->

          <!-- Tips Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tips",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tips");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Receive Tips");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="tips_permission">
                <input type="checkbox" name="tips_permission" id="tips_permission">
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Tips Permission -->

          <div class="divider"></div>

          <!-- Points Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"points",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Points System");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable it to override the default points system");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="custom_points_system">
                <input type="checkbox" name="custom_points_system" id="custom_points_system">
                <span class="slider round"></span>
              </label>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points");?>
/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')("1.00");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="points_per_currency" value="<?php echo $_smarty_tpl->getValue('system')['points_per_currency'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How much points eqaul to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')("1");?>

              </div>
            </div>
          </div>
          <!-- Points Permission -->
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

    <form class="js_ajax-forms" data-url="admin/permissions_groups.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['permissions_group_id'];?>
">
      <div class="card-body">
        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Grouo Info");?>

        </div>
        <div class="pl-md-4">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Group Title");?>

            </label>
            <div class="col-md-9">
              <input class="form-control" name="title" value="<?php echo $_smarty_tpl->getValue('data')['permissions_group_title'];?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('data')['permissions_group_id'],array('1','2'))) {?>readonly<?php }?>>
            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Modules Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Pages Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"pages",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Pages");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Pages");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="pages_permission">
                <input type="checkbox" name="pages_permission" id="pages_permission" <?php if ($_smarty_tpl->getValue('data')['pages_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Pages Permission -->

          <!-- Groups Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Groups");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Groups");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="groups_permission">
                <input type="checkbox" name="groups_permission" id="groups_permission" <?php if ($_smarty_tpl->getValue('data')['groups_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Groups Permission -->

          <!-- Events Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Events");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Events");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="events_permission">
                <input type="checkbox" name="events_permission" id="events_permission" <?php if ($_smarty_tpl->getValue('data')['events_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Events Permission -->

          <!-- Reels Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"reels",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Reels");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Reels");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="reels_permission">
                <input type="checkbox" name="reels_permission" id="reels_permission" <?php if ($_smarty_tpl->getValue('data')['reels_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Reels Permission -->

          <!-- Watch Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"watch",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Watch");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Watch Videos");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="watch_permission">
                <input type="checkbox" name="watch_permission" id="watch_permission" <?php if ($_smarty_tpl->getValue('data')['watch_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Watch Permission -->

          <!-- Blogs Permission (Write) -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
 <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Write");?>
</span></div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Write Blogs");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="blogs_permission">
                <input type="checkbox" name="blogs_permission" id="blogs_permission" <?php if ($_smarty_tpl->getValue('data')['blogs_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Blogs Permission (Write) -->

          <!-- Blogs Permission (Read) -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"blogs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Blogs");?>
 <span class="badge bg-light text-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Read");?>
</span></div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Read Blogs");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="blogs_permission_read">
                <input type="checkbox" name="blogs_permission_read" id="blogs_permission_read" <?php if ($_smarty_tpl->getValue('data')['blogs_permission_read']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Blogs Permission (Read) -->

          <!-- Market Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Market");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Sell Products");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="market_permission">
                <input type="checkbox" name="market_permission" id="market_permission" <?php if ($_smarty_tpl->getValue('data')['market_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Market Permission -->

          <!-- Offers Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"offers",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Offers");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Offers");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="offers_permission">
                <input type="checkbox" name="offers_permission" id="offers_permission" <?php if ($_smarty_tpl->getValue('data')['offers_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Offers Permission -->

          <!-- Jobs Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Jobs");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Jobs");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="jobs_permission">
                <input type="checkbox" name="jobs_permission" id="jobs_permission" <?php if ($_smarty_tpl->getValue('data')['jobs_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Jobs Permission -->

          <!-- Courses Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"courses",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Courses");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create courses");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="courses_permission">
                <input type="checkbox" name="courses_permission" id="courses_permission" <?php if ($_smarty_tpl->getValue('data')['courses_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Courses Permission -->

          <!-- Forums Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Forums");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Threads/Replies");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="forums_permission">
                <input type="checkbox" name="forums_permission" id="forums_permission" <?php if ($_smarty_tpl->getValue('data')['forums_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Forums Permission -->

          <!-- Movies Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Movies");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Watch Movies");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="movies_permission">
                <input type="checkbox" name="movies_permission" id="movies_permission" <?php if ($_smarty_tpl->getValue('data')['movies_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Movies Permission -->

          <!-- Games Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Games");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Play Games");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="games_permission">
                <input type="checkbox" name="games_permission" id="games_permission" <?php if ($_smarty_tpl->getValue('data')['games_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Games Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Features Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Gifts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gifts",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Gifts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Send Gifts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="gifts_permission">
                <input type="checkbox" name="gifts_permission" id="gifts_permission" <?php if ($_smarty_tpl->getValue('data')['gifts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Gifts Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stories Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Stories Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"24_hours",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Stories");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Stories");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="stories_permission">
                <input type="checkbox" name="stories_permission" id="stories_permission" <?php if ($_smarty_tpl->getValue('data')['stories_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Stories Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"newsfeed",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Publish Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="posts_permission">
                <input type="checkbox" name="posts_permission" id="posts_permission" <?php if ($_smarty_tpl->getValue('data')['posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Posts Permission -->

          <!-- Colored Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"posts_colored",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Colored Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Colored Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="colored_posts_permission">
                <input type="checkbox" name="colored_posts_permission" id="colored_posts_permission" <?php if ($_smarty_tpl->getValue('data')['colored_posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Colored Posts Permission -->

          <!-- Feelings/Activity Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"smile",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Feelings/Activity Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Feelings/Activity Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="activity_posts_permission">
                <input type="checkbox" name="activity_posts_permission" id="activity_posts_permission" <?php if ($_smarty_tpl->getValue('data')['activity_posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Feelings/Activity Posts Permission -->

          <!-- Polls Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"polls",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Polls Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Polls Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="polls_posts_permission">
                <input type="checkbox" name="polls_posts_permission" id="polls_posts_permission" <?php if ($_smarty_tpl->getValue('data')['polls_posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Polls Posts Permission -->

          <!-- Geolocation Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Geolocation Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Geolocation Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="geolocation_posts_permission">
                <input type="checkbox" name="geolocation_posts_permission" id="geolocation_posts_permission" <?php if ($_smarty_tpl->getValue('data')['geolocation_posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Geolocation Posts Permission -->

          <!-- GIF Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"gif",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("GIF Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add GIF Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="gif_posts_permission">
                <input type="checkbox" name="gif_posts_permission" id="gif_posts_permission" <?php if ($_smarty_tpl->getValue('data')['gif_posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- GIF Posts Permission -->

          <!-- Anonymous Posts Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"spy",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Anonymous Posts");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Add Anonymous Posts");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="anonymous_posts_permission">
                <input type="checkbox" name="anonymous_posts_permission" id="anonymous_posts_permission" <?php if ($_smarty_tpl->getValue('data')['anonymous_posts_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Anonymous Posts Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Registration Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Invitation Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invitation",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Invitation");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Generate Invitation Codes");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="invitation_permission">
                <input type="checkbox" name="invitation_permission" id="invitation_permission" <?php if ($_smarty_tpl->getValue('data')['invitation_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Invitation Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Chat Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Audio Call Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"call_audio",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio Call");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Make Audio Calls");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="audio_call_permission">
                <input type="checkbox" name="audio_call_permission" id="audio_call_permission" <?php if ($_smarty_tpl->getValue('data')['audio_call_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Audio Call Permission -->

          <!-- Video Call Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"call_video",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Video Call");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Make Video Calls");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="video_call_permission">
                <input type="checkbox" name="video_call_permission" id="video_call_permission" <?php if ($_smarty_tpl->getValue('data')['video_call_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Video Call Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Live Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"live",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Live");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Go Live");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="live_permission">
                <input type="checkbox" name="live_permission" id="live_permission" <?php if ($_smarty_tpl->getValue('data')['live_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Live Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Uploads Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Videos Upload Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"videos",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Videos Upload");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Upload Videos");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="videos_upload_permission">
                <input type="checkbox" name="videos_upload_permission" id="videos_upload_permission" <?php if ($_smarty_tpl->getValue('data')['videos_upload_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Videos Upload Permission -->

          <!-- Audios Upload Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"audios",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Audio Upload");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Upload Audio");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="audios_upload_permission">
                <input type="checkbox" name="audios_upload_permission" id="audios_upload_permission" <?php if ($_smarty_tpl->getValue('data')['audios_upload_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Audios Upload Permission -->

          <!-- Files Upload Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"files",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Files Upload");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Upload Files");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="files_upload_permission">
                <input type="checkbox" name="files_upload_permission" id="files_upload_permission" <?php if ($_smarty_tpl->getValue('data')['files_upload_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Files Upload Permission -->
        </div>

        <div class="divider"></div>

        <div class="heading-small mb20">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Money Permissions");?>

        </div>
        <div class="pl-md-4">
          <!-- Ads Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"ads",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Ads");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Create Ads");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="ads_permission">
                <input type="checkbox" name="ads_permission" id="ads_permission" <?php if ($_smarty_tpl->getValue('data')['ads_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Ads Permission -->

          <!-- Funding Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Funding");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Raise funding");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="funding_permission">
                <input type="checkbox" name="funding_permission" id="funding_permission" <?php if ($_smarty_tpl->getValue('data')['funding_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Funding Permission -->

          <!-- Monetization Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Monetization");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Monetize Content");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="monetization_permission">
                <input type="checkbox" name="monetization_permission" id="monetization_permission" <?php if ($_smarty_tpl->getValue('data')['monetization_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Monetization Permission -->

          <!-- Tips Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"tips",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Tips");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Can Receive Tips");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="tips_permission">
                <input type="checkbox" name="tips_permission" id="tips_permission" <?php if ($_smarty_tpl->getValue('data')['tips_permission']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <!-- Tips Permission -->

          <div class="divider"></div>

          <!-- Points Permission -->
          <div class="form-table-row">
            <div class="avatar">
              <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"points",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
            </div>
            <div>
              <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Points System");?>
</div>
              <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable it to override the default points system");?>
</div>
            </div>
            <div class="text-end">
              <label class="switch" for="custom_points_system">
                <input type="checkbox" name="custom_points_system" id="custom_points_system" <?php if ($_smarty_tpl->getValue('data')['custom_points_system']) {?>checked<?php }?>>
                <span class="slider round"></span>
              </label>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Points");?>
/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')("1.00");?>

            </label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="points_per_currency" value="<?php echo $_smarty_tpl->getValue('data')['points_per_currency'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("How much points eqaul to");?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('print_money')("1");?>

              </div>
            </div>
          </div>
          <!-- Points Permission -->
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
