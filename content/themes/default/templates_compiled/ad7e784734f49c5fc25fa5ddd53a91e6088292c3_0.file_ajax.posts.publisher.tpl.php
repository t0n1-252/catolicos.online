<?php
/* Smarty version 5.4.1, created on 2025-04-19 22:42:09
  from 'file:ajax.posts.publisher.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_680426c1f12e65_37907986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7e784734f49c5fc25fa5ddd53a91e6088292c3' => 
    array (
      0 => 'ajax.posts.publisher.tpl',
      1 => 1744139803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_publisher.tpl' => 1,
  ),
))) {
function content_680426c1f12e65_37907986 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><div class="modal-body ptb0 plr0">
  <?php $_smarty_tpl->renderSubTemplate('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_quick_mode'=>true,'_modal_mode'=>true,'_handle'=>"me",'_node_can_monetize_content'=>$_smarty_tpl->getValue('user')->_data['can_monetize_content'],'_node_monetization_enabled'=>$_smarty_tpl->getValue('user')->_data['user_monetization_enabled'],'_node_monetization_plans'=>$_smarty_tpl->getValue('user')->_data['user_monetization_plans'],'_privacy'=>true), (int) 0, $_smarty_current_dir);
?>
</div>

<?php echo '<script'; ?>
>
  $(document).ready(function() {
    // remove the publisher if exists
    if ($('#publisher-wapper').length > 0) {
      var publisherContent = $('#publisher-wapper').html();
      $('#publisher-wapper').empty();
    }

    // trigger the publisher textarea
    $('.publisher textarea').trigger('click');

    // close the publisher modal
    $('.js_close-publisher-modal').on('click', function(event) {
      event.preventDefault();
      var modal = $(this).closest('.modal');
      modal.modal('hide');
      modal.on('hidden.bs.modal', function() {
        if (publisherContent) {
          $('#publisher-wapper').html(publisherContent);
          $('body').removeClass('publisher-focus');
        }
      });
    });
  });
<?php echo '</script'; ?>
><?php }
}
