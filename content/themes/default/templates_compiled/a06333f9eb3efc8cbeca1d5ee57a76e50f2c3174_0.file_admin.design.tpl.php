<?php
/* Smarty version 5.4.1, created on 2025-04-17 03:01:51
  from 'file:admin.design.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68006f1fc83b17_55196377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a06333f9eb3efc8cbeca1d5ee57a76e50f2c3174' => 
    array (
      0 => 'admin.design.tpl',
      1 => 1744139721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 9,
  ),
))) {
function content_68006f1fc83b17_55196377 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-paint-brush mr10"></i><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Design");?>

  </div>
  <form class="js_ajax-forms" data-url="admin/design.php">
    <div class="card-body">
      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"fluid",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Fluid Design");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the full width containers On and Off");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="fluid_design">
            <input type="checkbox" name="fluid_design" id="fluid_design" <?php if ($_smarty_tpl->getValue('system')['fluid_design']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dark_light",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Night Mode is Default");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Make the night mode is the default mode of your website");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="system_theme_night_on">
            <input type="checkbox" name="system_theme_night_on" id="system_theme_night_on" <?php if ($_smarty_tpl->getValue('system')['system_theme_night_on']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"settings",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Users Can Change Mode");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Allow users to select between day and night mode");?>

          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="system_theme_mode_select">
            <input type="checkbox" name="system_theme_mode_select" id="system_theme_mode_select" <?php if ($_smarty_tpl->getValue('system')['system_theme_mode_select']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="divider"></div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Landing Page");?>

        </label>
        <div class="col-md-9">
          <div class="form-check form-check-inline">
            <input type="radio" name="landing_page_template" id="default_landing" value="default" class="form-check-input" <?php if ($_smarty_tpl->getValue('system')['landing_page_template'] == "default") {?>checked<?php }?>>
            <label class="form-check-label" for="default_landing"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default");?>
</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="landing_page_template" id="elengine_landing" value="elengine" class="form-check-input" <?php if ($_smarty_tpl->getValue('system')['landing_page_template'] == "elengine") {?>checked<?php }?>>
            <label class="form-check-label" for="elengine_landing"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Elengine");?>
</label>
            <small>(<a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/elengine_landing.png"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("preview");?>
</a>)</small>
          </div>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Note: You can get the whole Elengine theme from");?>
 <a target="_blank" href="https://bit.ly/SngineElengineTheme"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Here");?>
</a>
          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Logo");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Light Mode");?>
)
        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->getValue('system')['system_logo'] == '') {?>
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_logo" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
')">
              <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_logo" value="<?php echo $_smarty_tpl->getValue('system')['system_logo'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Logo");?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Dark Mode");?>
)
        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->getValue('system')['system_logo_dark'] == '') {?>
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_logo_dark" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_logo_dark'];?>
')">
              <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_logo_dark" value="<?php echo $_smarty_tpl->getValue('system')['system_logo_dark'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"star",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default Favicon");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/favicon.png"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("preview");?>
</a>) (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disable it to use your custom uploaded image");?>
)
          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="system_favicon_default">
            <input type="checkbox" name="system_favicon_default" id="system_favicon_default" <?php if ($_smarty_tpl->getValue('system')['system_favicon_default']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom Favicon");?>

        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->getValue('system')['system_favicon'] == '') {?>
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_favicon" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_favicon'];?>
')">
              <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_favicon" value="<?php echo $_smarty_tpl->getValue('system')['system_favicon'];?>
">
            </div>
          <?php }?>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"social_share",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Default OG-Image");?>
</div>
          <div class="form-text d-none d-sm-block">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Use the default");?>
 (<a target="_blank" href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->getValue('system')['theme'];?>
/images/og-image.jpg"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("preview");?>
</a>) (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Disable it to use your custom uploaded image");?>
)
          </div>
        </div>
        <div class="text-end">
          <label class="switch" for="system_ogimage_default">
            <input type="checkbox" name="system_ogimage_default" id="system_ogimage_default" <?php if ($_smarty_tpl->getValue('system')['system_ogimage_default']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom OG-Image");?>

        </label>
        <div class="col-md-9">
          <?php if ($_smarty_tpl->getValue('system')['system_ogimage'] == '') {?>
            <div class="x-image">
              <button type="button" class="btn-close x-hidden js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_ogimage" value="">
            </div>
          <?php } else { ?>
            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
/<?php echo $_smarty_tpl->getValue('system')['system_ogimage'];?>
')">
              <button type="button" class="btn-close js_x-image-remover" title='<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Remove");?>
'></button>
              <div class="x-image-loader">
                <div class="progress x-progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
              <input type="hidden" class="js_x-image-input" name="system_ogimage" value="<?php echo $_smarty_tpl->getValue('system')['system_ogimage'];?>
">
            </div>
          <?php }?>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The perfect size for your og-image should be (wdith: 590px & height: 300px)");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"playstore",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Google Play Store Badge");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show Google Play Store badge on the landing page");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="play_store_badge_enabled">
            <input type="checkbox" name="play_store_badge_enabled" id="play_store_badge_enabled" <?php if ($_smarty_tpl->getValue('system')['play_store_badge_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Google Play Store Link");?>

        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="play_store_link" value="<?php echo $_smarty_tpl->getValue('system')['play_store_link'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The app link on Google Play Store");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appgallery",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Huawei AppGallery Badge");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show Huawei AppGallery badge on the landing page");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="appgallery_badge_enabled">
            <input type="checkbox" name="appgallery_badge_enabled" id="appgallery_badge_enabled" <?php if ($_smarty_tpl->getValue('system')['appgallery_badge_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Huawei AppGallery Link");?>

        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="appgallery_store_link" value="<?php echo $_smarty_tpl->getValue('system')['appgallery_store_link'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The app link on Huawei AppGallery");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"appstore",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apple App Store Badge");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Show Apple App Store badge on the landing page");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="app_store_badge_enabled">
            <input type="checkbox" name="app_store_badge_enabled" id="app_store_badge_enabled" <?php if ($_smarty_tpl->getValue('system')['app_store_badge_enabled']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Apple App Store Link");?>

        </label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="app_store_link" value="<?php echo $_smarty_tpl->getValue('system')['app_store_link'];?>
">
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The app link on Apple App Store");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="form-table-row">
        <div class="avatar">
          <?php $_smarty_tpl->renderSubTemplate('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"themes_switcher",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), (int) 0, $_smarty_current_dir);
?>
        </div>
        <div>
          <div class="form-label h6"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Enable Customization");?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Turn the customization On and Off");?>
</div>
        </div>
        <div class="text-end">
          <label class="switch" for="css_customized">
            <input type="checkbox" name="css_customized" id="css_customized" <?php if ($_smarty_tpl->getValue('system')['css_customized']) {?>checked<?php }?>>
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Background Color");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_background" value="<?php echo $_smarty_tpl->getValue('system')['css_background'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_background'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Link Color");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_link_color" value="<?php echo $_smarty_tpl->getValue('system')['css_link_color'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_link_color'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Color");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_header" value="<?php echo $_smarty_tpl->getValue('system')['css_header'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_header'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Search Background");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_header_search" value="<?php echo $_smarty_tpl->getValue('system')['css_header_search'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_header_search'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Search Font");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_header_search_color" value="<?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_header_search_color'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Button Primary");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_btn_primary" value="<?php echo $_smarty_tpl->getValue('system')['css_btn_primary'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_btn_primary'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Icons");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_header_icons" value="<?php echo $_smarty_tpl->getValue('system')['css_header_icons'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_header_icons'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Icons (Night Mode)");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_header_icons_night" value="<?php echo $_smarty_tpl->getValue('system')['css_header_icons_night'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_header_icons_night'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Main Icons");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_main_icons" value="<?php echo $_smarty_tpl->getValue('system')['css_main_icons'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_main_icons'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Main Icons (Night Mode)");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_main_icons_night" value="<?php echo $_smarty_tpl->getValue('system')['css_main_icons_night'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_main_icons_night'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Action Icons");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_action_icons" value="<?php echo $_smarty_tpl->getValue('system')['css_action_icons'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_action_icons'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Action Icons (Night Mode)");?>

        </label>
        <div class="col-md-9">
          <div class="input-group js_colorpicker">
            <input type="text" class="form-control form-control-color" name="css_action_icons_night" value="<?php echo $_smarty_tpl->getValue('system')['css_action_icons_night'];?>
" />
            <input type="color" class="form-control form-control-color" value="<?php echo $_smarty_tpl->getValue('system')['css_action_icons_night'];?>
" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Custom CSS");?>

        </label>
        <div class="col-md-9">
          <textarea class="form-control" rows="10" name="css_custome_css" id="custom-css"><?php echo $_smarty_tpl->getValue('system')['css_custome_css'];?>
</textarea>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Custom CSS");?>

          </div>
        </div>
      </div>

      <div class="divider"></div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Header Custom JavaScript");?>

        </label>
        <div class="col-md-9">
          <textarea name="custome_js_header" id="custome_js_header"><?php echo $_smarty_tpl->getValue('system')['custome_js_header'];?>
</textarea>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The code will be added in head tag");?>

          </div>
        </div>
      </div>

      <div class="row form-group">
        <label class="col-md-3 form-label">
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Footer Custom JavaScript");?>

        </label>
        <div class="col-md-9">
          <textarea name="custome_js_footer" id="custome_js_footer"><?php echo $_smarty_tpl->getValue('system')['custome_js_footer'];?>
</textarea>
          <div class="form-text">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("The code will be added at the end of body tag");?>

          </div>
        </div>
      </div>

      <!-- error -->
      <div class="alert alert-danger mt15 mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-end">
      <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("Save Changes");?>
</button>
    </div>
  </form>

</div><?php }
}
