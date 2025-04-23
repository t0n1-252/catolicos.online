<?php
/* Smarty version 5.4.1, created on 2025-04-23 16:00:44
  from 'file:admin.static.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68090eac465e06_36050809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a39f43d85405fcd76d227431a09901071e2468' => 
    array (
      0 => 'admin.static.tpl',
      1 => 1744139722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68090eac465e06_36050809 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <?php if ($_smarty_tpl->getValue('sub_view') == '') {?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/static/add" class="btn btn-md btn-primary">
          <i class="fa fa-plus mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Page");?>

        </a>
      </div>
    <?php } else { ?>
      <div class="float-end">
        <a href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/static" class="btn btn-md btn-light">
          <i class="fa fa-arrow-circle-left mr5"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Go Back");?>

        </a>
      </div>
    <?php }?>
    <i class="fa fa-file mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Static Pages");?>

    <?php if ($_smarty_tpl->getValue('sub_view') == "edit") {?> &rsaquo; <?php echo $_smarty_tpl->getValue('data')['page_title'];
}?>
    <?php if ($_smarty_tpl->getValue('sub_view') == "add") {?> &rsaquo; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add New Page");
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
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Title");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Is Redirect");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In Footer");?>
</th>
              <th><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("In Sidebar");?>
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
                <td><?php echo $_smarty_tpl->getValue('row')['page_id'];?>
</td>
                <td>
                  <a target="_blank" href="<?php echo $_smarty_tpl->getValue('row')['url'];?>
">
                    <?php echo $_smarty_tpl->getValue('row')['page_title'];?>

                  </a>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['page_is_redirect']) {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                  <?php }?>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['page_in_footer']) {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->getValue('row')['page_in_sidebar']) {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Yes");?>
</span>
                  <?php } else { ?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("No");?>
</span>
                  <?php }?>
                <td><?php echo $_smarty_tpl->getValue('row')['page_order'];?>
</td>
                <td>
                  <a data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Edit");?>
' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/<?php echo $_smarty_tpl->getValue('control_panel')['url'];?>
/static/edit/<?php echo $_smarty_tpl->getValue('row')['page_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <button data-bs-toggle="tooltip" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="static_page" data-id="<?php echo $_smarty_tpl->getValue('row')['page_id'];?>
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

    <form class="js_ajax-forms" data-url="admin/static.php?do=edit&id=<?php echo $_smarty_tpl->getValue('data')['page_id'];?>
">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="page_title" value="<?php echo $_smarty_tpl->getValue('data')['page_title'];?>
">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Redirect Link");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="js_page-is-redirect">
              <input type="checkbox" name="page_is_redirect" id="js_page-is-redirect" <?php if ($_smarty_tpl->getValue('data')['page_is_redirect']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable this option if you want to create a page that redirects to an external link");?>

            </div>
          </div>
        </div>

        <div id="js_page-redirect" <?php if (!$_smarty_tpl->getValue('data')['page_is_redirect']) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Redirect URL");?>

            </label>
            <div class="col-md-9">
              <input class="form-control" name="page_redirect_url" value="<?php echo $_smarty_tpl->getValue('data')['page_redirect_url'];?>
">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The URL to redirect to");?>

              </div>
            </div>
          </div>
        </div>

        <div id="js_page-not-redirect" <?php if ($_smarty_tpl->getValue('data')['page_is_redirect']) {?>class="x-hidden" <?php }?>>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Web Address");?>

            </label>
            <div class="col-md-9">
              <div class="input-group">
                <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/static/</span>
                <input type="text" class="form-control" name="page_url" value="<?php echo $_smarty_tpl->getValue('data')['page_url'];?>
">
              </div>
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Valid web address must be a-z0-9_.");?>

              </div>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Content");?>

            </label>
            <div class="col-md-9">
              <textarea class="form-control js_wysiwyg-advanced" name="page_text"><?php echo $_smarty_tpl->getValue('data')['page_text'];?>
</textarea>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add to Footer Menu");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="page_in_footer">
              <input type="checkbox" name="page_in_footer" id="page_in_footer" <?php if ($_smarty_tpl->getValue('data')['page_in_footer']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show the page in the footer menu");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add to Sidebar Menu");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="page_in_sidebar">
              <input type="checkbox" name="page_in_sidebar" id="page_in_sidebar" <?php if ($_smarty_tpl->getValue('data')['page_in_sidebar']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show the page in the sidebar menu");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sidebar Icon");?>

          </label>
          <div class="col-md-9">
            <?php if ($_smarty_tpl->getValue('data')['page_icon'] == '') {?>
              <div class="x-image">
                <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="page_icon" value="">
              </div>
            <?php } else { ?>
              <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('data')['page_icon'];?>
')">
                <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
                <div class="x-image-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                <input type="hidden" class="js_x-image-input" name="page_icon" value="<?php echo $_smarty_tpl->getValue('data')['page_icon'];?>
">
              </div>
            <?php }?>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The perfect size for your gift image should be (wdith: 48px & height: 48px)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="page_order" value="<?php echo $_smarty_tpl->getValue('data')['page_order'];?>
">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The order of the page in the footer/sidebar menu");?>

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

    <form class="js_ajax-forms" data-url="admin/static.php?do=add">
      <div class="card-body">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Title");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="page_title">
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Redirect Link");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="js_page-is-redirect">
              <input type="checkbox" name="page_is_redirect" id="js_page-is-redirect">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable this option if you want to create a page that redirects to an external link");?>

            </div>
          </div>
        </div>

        <div id="js_page-redirect" class="x-hidden">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Redirect URL");?>

            </label>
            <div class="col-md-9">
              <input class="form-control" name="page_redirect_url">
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The URL to redirect to");?>

              </div>
            </div>
          </div>
        </div>

        <div id="js_page-not-redirect">
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Web Address");?>

            </label>
            <div class="col-md-9">
              <div class="input-group">
                <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/static/</span>
                <input type="text" class="form-control" name="page_url">
              </div>
              <div class="form-text">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Valid web address must be a-z0-9_.");?>

              </div>
            </div>
          </div>
          <div class="row form-group">
            <label class="col-md-3 form-label">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Page Content");?>

            </label>
            <div class="col-md-9">
              <textarea class="form-control js_wysiwyg-advanced" name="page_text"></textarea>
            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add to Footer Menu");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="page_in_footer">
              <input type="checkbox" name="page_in_footer" id="page_in_footer">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show the page in the footer menu");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Add to Sidebar Menu");?>

          </label>
          <div class="col-md-9">
            <label class="switch" for="page_in_sidebar">
              <input type="checkbox" name="page_in_sidebar" id="page_in_sidebar">
              <span class="slider round"></span>
            </label>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show the page in the sidebar menu");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Sidebar Icon");?>

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
              <input type="hidden" class="js_x-image-input" name="page_icon" value="">
            </div>
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The perfect size for your icon (wdith: 48px & height: 48px)");?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Order");?>

          </label>
          <div class="col-md-9">
            <input class="form-control" name="page_order">
            <div class="form-text">
              <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The order of the page in the footer/sidebar menu");?>

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
