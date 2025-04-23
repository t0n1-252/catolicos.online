<?php
/* Smarty version 5.4.1, created on 2025-04-17 00:32:26
  from 'file:_js_files.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_68004c1ad4f1c0_09568781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ecce040ed49e7e55e2b1c6959fb495ffd9ab53' => 
    array (
      0 => '_js_files.tpl',
      1 => 1744139803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68004c1ad4f1c0_09568781 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/Catolicos/web/catolicos.online/public_html/content/themes/default/templates';
?><!-- Initialize --><?php echo '<script'; ?>
>/* initialize vars */var site_title = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')($_smarty_tpl->getValue('system')['system_title']);?>
";var site_path = "<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
";var ajax_path = site_path + "/includes/ajax/";var uploads_path = "<?php echo $_smarty_tpl->getValue('system')['system_uploads'];?>
";var current_page = "<?php echo $_smarty_tpl->getValue('page');?>
";var system_debugging_mode = <?php if ($_smarty_tpl->getValue('system')['DEBUGGING']) {?>true<?php } else { ?>false<?php }?>;/* language */var system_langauge_dir = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('system')['language']['dir']);?>
";var system_langauge_code = "<?php echo substr((string) $_smarty_tpl->getValue('system')['language']['code'], (int) 0, (int) -3);?>
";/* datetime */var system_datetime_format = <?php if ($_smarty_tpl->getValue('system')['system_datetime_format'] == "m/d/Y H:i") {?>'MM/DD/YYYY HH:mm'<?php } else { ?>'DD/MM/YYYY HH:mm'<?php }?>;/* theme */var theme_mode_night = <?php if ($_smarty_tpl->getValue('system')['theme_mode_night']) {?>true<?php } else { ?>false<?php }?>;var theme_dir_rtl = <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == "LTR") {?>false<?php } else { ?>true<?php }?>;/* payments */var currency = "<?php echo $_smarty_tpl->getValue('system')['system_currency'];?>
";var stripe_key = <?php if ($_smarty_tpl->getValue('system')['stripe_mode'] == "live") {?>"<?php echo $_smarty_tpl->getValue('system')['stripe_live_publishable'];?>
"<?php } else { ?>"<?php echo $_smarty_tpl->getValue('system')['stripe_test_publishable'];?>
"<?php }?>;var stripe_payment_element_enabled = <?php if ($_smarty_tpl->getValue('system')['stripe_payment_element_enabled']) {?>true<?php } else { ?>false<?php }?>;var twocheckout_merchant_code = "<?php echo $_smarty_tpl->getValue('system')['2checkout_merchant_code'];?>
";var twocheckout_publishable_key = "<?php echo $_smarty_tpl->getValue('system')['2checkout_publishable_key'];?>
";var razorpay_key = "<?php echo $_smarty_tpl->getValue('system')['razorpay_key_id'];?>
";var securionpay_key = "<?php echo $_smarty_tpl->getValue('system')['securionpay_api_key'];?>
";var cashfree_mode = <?php if ($_smarty_tpl->getValue('system')['cashfree_mode'] == "sandbox") {?>"sandbox"<?php } else { ?>"production"<?php }?>;var epayco_key = "<?php echo $_smarty_tpl->getValue('system')['epayco_public_key'];?>
";var epayco_test = <?php if ($_smarty_tpl->getValue('system')['epayco_mode'] == "test") {?>true<?php } else { ?>false<?php }?>;/* features */var adblock_detector = <?php if (!$_smarty_tpl->getValue('user')->_is_admin && $_smarty_tpl->getValue('system')['adblock_detector_enabled']) {?>true<?php } else { ?>false<?php }?>;var location_finder = <?php if (!$_smarty_tpl->getValue('user')->_is_admin && $_smarty_tpl->getValue('system')['location_finder_enabled']) {?>true<?php } else { ?>false<?php }?>;var desktop_infinite_scroll = <?php if ($_smarty_tpl->getValue('system')['desktop_infinite_scroll']) {?>true<?php } else { ?>false<?php }?>;var mobile_infinite_scroll = <?php if ($_smarty_tpl->getValue('system')['mobile_infinite_scroll']) {?>true<?php } else { ?>false<?php }?>;var fluid_videos_enabled = <?php if ($_smarty_tpl->getValue('system')['fluid_videos_enabled']) {?>true<?php } else { ?>false<?php }?>;var auto_play_videos = <?php if ($_smarty_tpl->getValue('system')['auto_play_videos']) {?>true<?php } else { ?>false<?php }?>;<?php if ($_smarty_tpl->getValue('user')->_logged_in) {?>/* user */var user_id = "<?php echo $_smarty_tpl->getValue('user')->_data['user_id'];?>
";/* ajax */var min_data_heartbeat = "<?php echo $_smarty_tpl->getValue('system')['data_heartbeat']*1000;?>
";var min_chat_heartbeat = "<?php echo $_smarty_tpl->getValue('system')['chat_heartbeat']*1000;?>
";/* uploads */var secret = "<?php echo $_smarty_tpl->getValue('secret');?>
";var accpeted_video_extensions = "<?php echo $_smarty_tpl->getValue('system')['accpeted_video_extensions'];?>
";var accpeted_audio_extensions = "<?php echo $_smarty_tpl->getValue('system')['accpeted_audio_extensions'];?>
";var accpeted_file_extensions = "<?php echo $_smarty_tpl->getValue('system')['accpeted_file_extensions'];?>
";var tinymce_photos_enabled = <?php if ($_smarty_tpl->getValue('system')['tinymce_photos_enabled']) {?>true<?php } else { ?>false<?php }?>;/* chat */var chat_enabled = <?php if ($_smarty_tpl->getValue('system')['chat_enabled'] && $_smarty_tpl->getValue('user')->_data['user_privacy_chat'] != "me") {?>true<?php } else { ?>false<?php }?>;var chat_typing_enabled = <?php if ($_smarty_tpl->getValue('system')['chat_typing_enabled']) {?>true<?php } else { ?>false<?php }?>;var chat_seen_enabled = <?php if ($_smarty_tpl->getValue('system')['chat_seen_enabled']) {?>true<?php } else { ?>false<?php }?>;var chat_sound = <?php if ($_smarty_tpl->getValue('user')->_data['chat_sound']) {?>true<?php } else { ?>false<?php }?>;/* live */var live_enabled = <?php if ($_smarty_tpl->getValue('system')['live_enabled']) {?>true<?php } else { ?>false<?php }?>;<?php if ($_smarty_tpl->getValue('system')['live_enabled']) {?>var agora_app_id = "<?php echo $_smarty_tpl->getValue('system')['agora_app_id'];?>
";<?php if ($_smarty_tpl->getValue('page') == "live") {?>var agora_uid = <?php echo $_smarty_tpl->getValue('agora')['uid'];?>
;var agora_token = "<?php echo $_smarty_tpl->getValue('agora')['token'];?>
";var agora_channel_name = "<?php echo $_smarty_tpl->getValue('agora')['channel_name'];?>
";<?php }
}?>/* notifications */var notifications_sound = <?php if ($_smarty_tpl->getValue('user')->_data['notifications_sound']) {?>true<?php } else { ?>false<?php }?>;var noty_notifications_enabled = <?php if ($_smarty_tpl->getValue('system')['noty_notifications_enabled']) {?>true<?php } else { ?>false<?php }?>;var browser_notifications_enabled = <?php if ($_smarty_tpl->getValue('system')['browser_notifications_enabled']) {?>true<?php } else { ?>false<?php }?>;/* stories */<?php if ($_smarty_tpl->getValue('system')['stories_enabled']) {?>var stories_duration = "<?php echo $_smarty_tpl->getValue('system')['stories_duration'];?>
";<?php }?>/* posts */var daytime_msg_enabled = <?php if ($_smarty_tpl->getValue('daytime_msg_enabled')) {?>true<?php } else { ?>false<?php }?>;var giphy_key = "<?php echo $_smarty_tpl->getValue('system')['giphy_key'];?>
";var geolocation_enabled = <?php if ($_smarty_tpl->getValue('system')['geolocation_enabled']) {?>true<?php } else { ?>false<?php }?>;var yandex_key = "<?php echo $_smarty_tpl->getValue('system')['yandex_key'];?>
";var post_translation_enabled = <?php if ($_smarty_tpl->getValue('system')['post_translation_enabled']) {?>true<?php } else { ?>false<?php }?>;var voice_notes_durtaion = "<?php echo $_smarty_tpl->getValue('system')['voice_notes_durtaion'];?>
";var voice_notes_encoding = "<?php echo $_smarty_tpl->getValue('system')['voice_notes_encoding'];?>
";<?php }
echo '</script'; ?>
><?php echo '<script'; ?>
>/* i18n for JS */var __ = [];__['Ask something'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Ask something');?>
";__['Add Friend'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Add Friend');?>
";__['Friends'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Friends');?>
";__['Sent'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sent');?>
";__['Following'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Following');?>
";__['Follow'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Follow');?>
";__['Pending'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pending');?>
";__['Remove'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Remove');?>
";__['Error'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Error');?>
";__['Success'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Success');?>
";__['Loading'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Loading');?>
";__['Like'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Like');?>
";__['Unlike'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unlike');?>
";__['React'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('React');?>
";__['Joined'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Joined');?>
";__['Join'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Join');?>
";__['Remove Admin'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Remove Admin');?>
";__['Make Admin'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Make Admin');?>
";__['Going'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Going');?>
";__['Interested'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Interested');?>
";__['Delete'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete');?>
";__['Delete Cover'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete Cover');?>
";__['Delete Picture'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete Picture');?>
";__['Delete Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete Post');?>
";__['Delete Comment'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete Comment');?>
";__['Delete Conversation'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Delete Conversation');?>
";__['Report'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Report');?>
";__['Block User'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Block User');?>
";__['Unblock User'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unblock User');?>
";__['Mark as Available'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Mark as Available');?>
";__['Mark as Unavailable'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Mark as Unavailable');?>
";__['Mark as Sold'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Mark as Sold');?>
";__['Save Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save Post');?>
";__['Unsave Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unsave Post');?>
";__['Save'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Save');?>
";__['Unsave'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unsave');?>
";__['Boost Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Boost Post');?>
";__['Unboost Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unboost Post');?>
";__['Pin Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pin Post');?>
";__['Unpin Post'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unpin Post');?>
";__['For Everyone'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('For Everyone');?>
";__['For Subscribers Only'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('For Subscribers Only');?>
";__['Verify'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Verify');?>
";__['Decline'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Decline');?>
";__['Boost'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Boost');?>
";__['Unboost'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unboost');?>
";__['Mark as Paid'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Mark as Paid');?>
";__['Read more'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Read more');?>
";__['Read less'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Read less');?>
";__['Turn On Chat'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Turn On Chat');?>
";__['Turn Off Chat'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Turn Off Chat');?>
";__['Monthly Average'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Monthly Average');?>
";__['PayIn Methods'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('PayIn Methods');?>
";__['PayIn Types'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('PayIn Types');?>
";__['Commissions Types'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Commissions Types');?>
";__['Packages'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Packages');?>
";__['Jan'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Jan');?>
";__['Feb'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Feb');?>
";__['Mar'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Mar');?>
";__['Apr'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Apr');?>
";__['May'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('May');?>
";__['Jun'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Jun');?>
";__['Jul'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Jul');?>
";__['Aug'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Aug');?>
";__['Sep'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sep');?>
";__['Oct'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Oct');?>
";__['Nov'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Nov');?>
";__['Dec'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Dec');?>
";__['Users'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Users');?>
";__['Pages'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pages');?>
";__['Groups'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Groups');?>
";__['Events'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Events');?>
";__['Posts'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Posts');?>
";__['Translated'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Translated');?>
";__['Are you sure you want to delete this?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to delete this?');?>
";__['Are you sure you want to remove your cover photo?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to remove your cover photo?');?>
";__['Are you sure you want to remove your profile picture?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to remove your profile picture?');?>
";__['Are you sure you want to delete this post?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to delete this post?');?>
";__['Are you sure you want to delete this comment?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to delete this comment?');?>
";__['Are you sure you want to delete this conversation?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to delete this conversation?');?>
";__['Are you sure you want to report this?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to report this?');?>
";__['Are you sure you want to block this user?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to block this user?');?>
";__['Are you sure you want to unblock this user?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to unblock this user?');?>
";__['Are you sure you want to delete your account?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to delete your account?');?>
";__['Are you sure you want to verify this request?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to verify this request?');?>
";__['Are you sure you want to decline this request?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to decline this request?');?>
";__['Are you sure you want to approve this request?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to approve this request?');?>
";__['Are you sure you want to do this?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to do this?');?>
";__['Factory Reset'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Factory Reset');?>
";__['Are you sure you want to reset your website?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to reset your website?');?>
";__['There is something that went wrong!'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('There is something that went wrong!');?>
";__['There is no more data to show'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('There is no more data to show');?>
";__['This website uses cookies to ensure you get the best experience on our website'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('This website uses cookies to ensure you get the best experience on our website');?>
";__['Got It!'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Got It!');?>
";__['Learn More'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Learn More');?>
";__['No result found'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No result found');?>
";__['Turn on Commenting'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Turn on Commenting');?>
";__['Turn off Commenting'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Turn off Commenting');?>
";__['Day Mode'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Day Mode');?>
";__['Night Mode'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Night Mode');?>
";__['Message'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Message');?>
";__['You haved poked'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You haved poked');?>
";__['Touch to unmute'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Touch to unmute');?>
";__['Press space to see next'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Press space to see next');?>
";__['Visit link'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Visit link');?>
";__['ago'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('ago');?>
";__['hour'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('hour');?>
";__['hours'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('hours');?>
";__['minute'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('minute');?>
";__['minutes'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('minutes');?>
";__['from now'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('from now');?>
";__['seconds'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('seconds');?>
";__['yesterday'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('yesterday');?>
";__['tomorrow'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('tomorrow');?>
";__['days'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('days');?>
";__['Nothing selected'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Nothing selected');?>
";__['Seen by'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Seen by');?>
";__['Ringing'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Ringing');?>
";__['is Offline'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('is Offline');?>
";__['is Busy'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('is Busy');?>
";__['No Answer'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No Answer');?>
";__['You can not connect to this user'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You can not connect to this user');?>
";__['You have an active call already'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You have an active call already');?>
";__['The recipient declined the call'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('The recipient declined the call');?>
";__['Connection has been lost'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Connection has been lost');?>
";__['You must fill in all of the fields'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You must fill in all of the fields');?>
";__['Hide from Timeline'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Hide from Timeline');?>
";__['Allow on Timeline'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Allow on Timeline');?>
";__['Are you sure you want to hide this post from your profile timeline? It may still appear in other places like newsfeed and search results'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to hide this post from your profile timeline? It may still appear in other places like newsfeed and search results');?>
";__['Select All'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Select All');?>
";__['Deselect All'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Deselect All');?>
";__['Total'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Total');?>
";__['Stop Campaign'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Stop Campaign');?>
";__['Resume Campaign'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Resume Campaign');?>
";__['Sorry, WebRTC is not available in your browser'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sorry, WebRTC is not available in your browser');?>
";__['Not able to connect, Try again later!'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Not able to connect, Try again later!');?>
";__['You are ready to Go Live now'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You are ready to Go Live now');?>
";__['Getting permissions failed'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Getting permissions failed');?>
";__['Going Live'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Going Live');?>
";__['You are live now'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You are live now');?>
";__['You are offline now'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You are offline now');?>
";__['Going live failed'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Going live failed');?>
";__['Online'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Online');?>
";__['Offline'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Offline');?>
";__['Switching stream sources'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Switching stream sources');?>
";__['Successfully switched to new device'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Successfully switched to new device');?>
";__['Unable to determine device type'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unable to determine device type');?>
";__['Failed to switch to new device'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Failed to switch to new device');?>
";__['Ending live error'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Ending live error');?>
";__['Joining live stream failed'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Joining live stream failed');?>
";__['Video Muted'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Video Muted');?>
";__['Audio Muted'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Audio Muted');?>
";__['Live Ended'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Live Ended');?>
";__['Try Package'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Try Package');?>
";__['Are you sure you want to subscribe to this free package?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to subscribe to this free package?');?>
";__['Sneak Peak'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Sneak Peak');?>
";__['Are you sure you want to subscribe to this free plan?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to subscribe to this free plan?');?>
";__['Processing'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Processing');?>
";__['Your video is being processed, We will let you know when it is ready!'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Your video is being processed, We will let you know when it is ready!');?>
";__['Under Review'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Under Review');?>
";__['Your post is under review now, We will let you know when it is ready!'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Your post is under review now, We will let you know when it is ready!');?>
";__['Payment Confirmation'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Payment Confirmation');?>
";__['This message will cost you'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('This message will cost you');?>
";__['This call will cost you'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('This call will cost you');?>
";__['Login As'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Login As');?>
";__['Are you sure you want to login as this user?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to login as this user?');?>
";__['Are you sure you want to switch back to your account?'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Are you sure you want to switch back to your account?');?>
";/* i18n for DataTables */__['Processing...'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Processing...');?>
";__['Search:'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Search:');?>
";__['Show _MENU_ entries'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Show _MENU_ entries');?>
";__['Showing _START_ to _END_ of _TOTAL_ entries'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Showing _START_ to _END_ of _TOTAL_ entries');?>
";__['Showing 0 to 0 of 0 entries'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Showing 0 to 0 of 0 entries');?>
";__['(filtered from _MAX_ total entries)'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('(filtered from _MAX_ total entries)');?>
";__['Loading...'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Loading...');?>
";__['No matching records found'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No matching records found');?>
";__['No data available in table'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('No data available in table');?>
";__['First'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('First');?>
";__['Previous'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Previous');?>
";__['Next'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Next');?>
";__['Last'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Last');?>
";__[': activate to sort column ascending'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')(': activate to sort column ascending');?>
";__[': activate to sort column descending'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')(': activate to sort column descending');?>
";/* i18n for OneSignal */__['Subscribe to notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Subscribe to notifications');?>
";__['You are subscribed to notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You are subscribed to notifications');?>
";__['You have blocked notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You have blocked notifications');?>
";__['Click to subscribe to notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Click to subscribe to notifications');?>
";__['Thanks for subscribing!'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Thanks for subscribing!');?>
";__['You are subscribed to notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You are subscribed to notifications');?>
";__['You will not receive notifications again'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('You will not receive notifications again');?>
";__['Manage Site Notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Manage Site Notifications');?>
";__['SUBSCRIBE'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('SUBSCRIBE');?>
";__['UNSUBSCRIBE'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('UNSUBSCRIBE');?>
";__['Unblock Notifications'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unblock Notifications');?>
";__['Follow these instructions to allow notifications:'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Follow these instructions to allow notifications:');?>
";/* i18n for Video Player */__['Play'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Play');?>
";__['Pause'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Pause');?>
";__['Mute'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Mute');?>
";__['Unmute'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Unmute');?>
";__['Current Time'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Current Time');?>
";__['Duration'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Duration');?>
";__['Remaining Time'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Remaining Time');?>
";__['Fullscreen'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Fullscreen');?>
";__['Picture-in-Picture'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Picture-in-Picture');?>
";/* i18n for Highcharts.js */__['View Fullscreen'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('View Fullscreen');?>
";__['Print Chart'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Print Chart');?>
";__['Download PNG'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Download PNG');?>
";__['Download JPEG'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Download JPEG');?>
";__['Download PDF'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Download PDF');?>
";__['Download SVG vector image'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Download SVG vector image');?>
";__['Chart context menu'] = "<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')('Chart context menu');?>
";<?php echo '</script'; ?>
><!-- Initialize --><!-- Dependencies Libs [jQuery|Bootstrap] --><?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><!-- Dependencies Libs [jQuery|Bootstrap] --><!-- Dependencies Plugins --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/mustache/mustache.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/jquery-form/dist/jquery.form.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/jquery-inview/jquery.inview.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/autosize/dist/autosize.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/readmore-js/readmore.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/moment/min/moment-with-locales.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdn.plyr.io/3.7.8/plyr.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?> /><?php if ($_smarty_tpl->getValue('system')['auto_play_videos']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/jquery-fracs/dist/jquery.fracs.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('user')->_logged_in) {?><!-- jQuery-UI --><?php echo '<script'; ?>
>
      var _tooltip = jQuery.fn.tooltip;
    <?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>
      jQuery.fn.tooltip = _tooltip;
    <?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/triggeredautocomplete/jquery-ui.triggeredAutocomplete.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->getValue('page') == "reels") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/@benmajor/jquery-touch-events/src/jquery.mobile-events.min.js"><?php echo '</script'; ?>
><?php }?><!-- jQuery-UI --><!-- Sticky Sidebar --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/theia-sticky-sidebar/dist/theia-sticky-sidebar.min.js"><?php echo '</script'; ?>
><!-- Sticky Sidebar --><!-- Slick Slider --><?php if ($_smarty_tpl->getValue('page') == "index") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/slick-carousel/slick/slick.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/slick-carousel/slick/slick.css"><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/slick-carousel/slick/slick-theme.css"><?php }?><!-- Slick Slider --><!-- Google Geocomplete --><?php if ($_smarty_tpl->getValue('system')['geolocation_enabled']) {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js" integrity="sha512-4bp4fE4hv0i/1jLM7d+gXDaCAhnXXfGBKdHrBcpGBgnz7OlFMjUgVH4kwB85YdumZrZyryaTLnqGKlbmBatCpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo $_smarty_tpl->getValue('system')['geolocation_key'];?>
&loading=async"><?php echo '</script'; ?>
><?php }?><!-- Google Geocomplete --><!-- Crop Profile Picture & Reposition Cover Photo --><?php if ($_smarty_tpl->getValue('page') == "started" || $_smarty_tpl->getValue('page') == "profile" || $_smarty_tpl->getValue('page') == "page" || $_smarty_tpl->getValue('page') == "group" || $_smarty_tpl->getValue('page') == "event") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/JQ-Image-Drag/script/jquery.imagedrag.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/rcrop/dist/rcrop.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/rcrop/dist/rcrop.min.css"><?php }?><!-- Crop Profile Picture & Reposition Cover Photo --><!-- Stories --><?php if ($_smarty_tpl->getValue('page') == "index" && $_smarty_tpl->getValue('view') == '') {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/zuck.js/dist/zuck.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/zuck.js/dist/zuck.min.css"><?php }?><!-- Stories --><!-- Voice Notes --><?php if ($_smarty_tpl->getValue('system')['voice_notes_posts_enabled'] || $_smarty_tpl->getValue('system')['voice_notes_comments_enabled'] || $_smarty_tpl->getValue('system')['voice_notes_chat_enabled']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/web-audio-recorder-js/lib-minified/WebAudioRecorder.min.js"><?php echo '</script'; ?>
><?php }?><!-- Voice Notes --><!-- TinyMCE --><?php if ($_smarty_tpl->getValue('page') == "admin" || $_smarty_tpl->getValue('page') == "blogs" || $_smarty_tpl->getValue('page') == "forums") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/tinymce/tinymce.min.js" defer><?php echo '</script'; ?>
><?php }?><!-- TinyMCE --><!-- Stripe & 2Checkout & Razorpay & SecurionPay & Cashfree & Epayco --><?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getValue('page'),array("index","packages","ads","wallet","market","profile","page","group","post","directory","search","movies"))) {
if ($_smarty_tpl->getValue('system')['creditcard_enabled'] || $_smarty_tpl->getValue('system')['alipay_enabled']) {
echo '<script'; ?>
 src="https://js.stripe.com/v3" defer><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('system')['2checkout_enabled']) {
echo '<script'; ?>
 src="https://www.2checkout.com/checkout/api/2co.min.js" defer><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('system')['razorpay_enabled']) {
echo '<script'; ?>
 src="https://checkout.razorpay.com/v1/checkout.js" defer><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('system')['securionpay_enabled']) {
echo '<script'; ?>
 src="https://securionpay.com/checkout.js" defer><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('system')['cashfree_enabled']) {
echo '<script'; ?>
 src="https://sdk.cashfree.com/js/v3/cashfree.js" defer><?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('system')['epayco_enabled']) {
echo '<script'; ?>
 src="https://checkout.epayco.co/checkout.js" defer><?php echo '</script'; ?>
><?php }
}?><!-- Stripe & 2Checkout & Razorpay & SecurionPay & Cashfree & Epayco --><!-- Twilio --><?php if ($_smarty_tpl->getValue('system')['audio_call_enabled'] || $_smarty_tpl->getValue('system')['video_call_enabled']) {
echo '<script'; ?>
 src="https://sdk.twilio.com/js/video/releases/2.28.1/twilio-video.min.js" defer><?php echo '</script'; ?>
><?php }?><!-- Twilio --><!-- Agora --><?php if ($_smarty_tpl->getValue('system')['live_enabled']) {
echo '<script'; ?>
 src="https://download.agora.io/sdk/release/AgoraRTC_N-4.22.0.js"><?php echo '</script'; ?>
><?php }?><!-- Agora --><!-- Easytimer --><?php if ($_smarty_tpl->getValue('system')['audio_call_enabled'] || $_smarty_tpl->getValue('system')['video_call_enabled'] || $_smarty_tpl->getValue('system')['voice_notes_posts_enabled'] || $_smarty_tpl->getValue('system')['voice_notes_comments_enabled'] || $_smarty_tpl->getValue('system')['voice_notes_chat_enabled']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/easytimer.js/dist/easytimer.min.js" defer><?php echo '</script'; ?>
><?php }?><!-- Easytimer --><!-- Datatables --><?php if ($_smarty_tpl->getValue('page') == "admin" || $_smarty_tpl->getValue('page') == "ads" || $_smarty_tpl->getValue('page') == "wallet" || $_smarty_tpl->getValue('page') == "developers" || $_smarty_tpl->getValue('page') == "settings") {?><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.min.css" defer /><?php echo '<script'; ?>
 src="https://cdn.datatables.net/2.1.7/js/dataTables.js" defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.min.js" defer><?php echo '</script'; ?>
><?php }?><!-- Datatables --><!-- Tagify --><?php if ($_smarty_tpl->getValue('page') == "admin" || $_smarty_tpl->getValue('page') == "packages" || $_smarty_tpl->getValue('page') == "settings" || $_smarty_tpl->getValue('page') == "blogs") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/@yaireo/tagify/dist/tagify.js" defer><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
//node_modules/@yaireo/tagify/dist/tagify.css" defer><?php }?><!-- Tagify --><!-- HTML2PDF --><?php if ($_smarty_tpl->getValue('page') == "market") {
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js" defer><?php echo '</script'; ?>
><?php }?><!-- HTML2PDF --><!-- Clipboard --><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js" integrity="sha512-7O5pXpc0oCRrxk8RUfDYFgn0nO1t+jLuIOQdOMRp4APB7uZ4vSjspzp5y6YDtDs4VzUSTbWzBFZ/LKJhnyFOKw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer><?php echo '</script'; ?>
><!-- Clipboard --><!-- XRegExp --><?php echo '<script'; ?>
 src="https://unpkg.com/xregexp/xregexp-all.js" defer><?php echo '</script'; ?>
><!-- XRegExp --><?php }?><!-- Dependencies Plugins --><!-- System [JS] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/core.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><?php if ($_smarty_tpl->getValue('user')->_logged_in) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/user.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/post.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->getValue('system')['chat_enabled']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/chat.js"><?php echo '</script'; ?>
><?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/ad_code.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->getValue('system')['live_enabled'] && $_smarty_tpl->getValue('page') == "live") {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/live.js"><?php echo '</script'; ?>
><?php }
} else {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/login.js" defer><?php echo '</script'; ?>
><?php }?><!-- System [JS] --><?php if ($_smarty_tpl->getValue('page') == "admin") {?><!-- Dependencies Plugins --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/jquery-treegrid/js/jquery.treegrid.min.js"><?php echo '</script'; ?>
><link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/node_modules/jquery-treegrid/css/jquery.treegrid.css"><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js" integrity="sha512-8RnEqURPUc5aqFEN04aQEiPlSAdE0jlFS/9iGgUyNtwFnSKCXhmB6ZTNl7LnDtDWKabJIASzXrzD0K+LYexU9g==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/css/css.min.js" integrity="sha512-rQImvJlBa8MV1Tl1SXR5zD2bWfmgCEIzTieFegGg89AAt7j/NBEe50M5CqYQJnRwtkjKMmuYgHBqtD1Ubbk5ww==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/javascript/javascript.min.js" integrity="sha512-I6CdJdruzGtvDyvdO4YsiAq+pkWf2efgd1ZUSK2FnM/u2VuRASPC7GowWQrWyjxCZn6CT89s3ddGI+be0Ak9Fg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Dependencies Plugins [JS] --><!-- System [JS] --><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('system')['system_url'];?>
/includes/assets/js/core/admin.js"><?php echo '</script'; ?>
><!-- System [JS] --><!-- Admin Charts --><?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://code.highcharts.com/modules/exporting.js"><?php echo '</script'; ?>
><?php if ($_smarty_tpl->getValue('view') == "dashboard") {
echo '<script'; ?>
>$(function() {$('#admin-chart-dashboard').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['Monthly Average']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total']}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [{name: __['Users'],data: [<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('chart')['users'],",");?>
]},{name: __['Pages'],data: [<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('chart')['pages'],",");?>
]},{name: __['Groups'],data: [<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('chart')['groups'],",");?>
]},{name: __['Events'],data: [<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('chart')['events'],",");?>
]},{name: __['Posts'],data: [<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('chart')['posts'],",");?>
]}]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == '') {
echo '<script'; ?>
>$(function() {$('#payment-methods-chart').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['PayIn Methods']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'method');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('method')->value) {
$foreach8DoElse = false;
?>{name: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('method'));?>
',data: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods_chart'), 'payments', false, 'month');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('month')->value => $_smarty_tpl->getVariable('payments')->value) {
$foreach9DoElse = false;
echo $_smarty_tpl->getValue('payments')[$_smarty_tpl->getValue('method')];?>
,<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]},<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]});$('#payment-handles-chart').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['PayIn Types']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_handles'), 'handle');
$foreach10DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('handle')->value) {
$foreach10DoElse = false;
?>{name: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('handle'));?>
',data: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_handles_chart'), 'payments', false, 'month');
$foreach11DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('month')->value => $_smarty_tpl->getVariable('payments')->value) {
$foreach11DoElse = false;
echo $_smarty_tpl->getValue('payments')[$_smarty_tpl->getValue('handle')];?>
,<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]},<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == "commissions") {
echo '<script'; ?>
>$(function() {$('#commissions-chart').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['Commissions Types']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('commissions_handles'), 'handle');
$foreach12DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('handle')->value) {
$foreach12DoElse = false;
?>{name: '<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('handle'));?>
',data: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('commissions_handles_chart'), 'commissions', false, 'month');
$foreach13DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('month')->value => $_smarty_tpl->getVariable('commissions')->value) {
$foreach13DoElse = false;
echo $_smarty_tpl->getValue('commissions')[$_smarty_tpl->getValue('handle')];?>
,<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]},<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]});});<?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('view') == "earnings" && $_smarty_tpl->getValue('sub_view') == "packages") {
echo '<script'; ?>
>$(function() {$('#admin-chart-earnings').highcharts({lang: {viewFullscreen: __['View Fullscreen'],printChart: __['Print Chart'],downloadPNG: __['Download PNG'],downloadJPEG: __['Download JPEG'],downloadPDF: __['Download PDF'],downloadSVG: __['Download SVG vector image'],contextButtonTitle: __['Chart context menu'],},chart: {type: 'column',backgroundColor: 'transparent',},title: {text: __['Packages']},xAxis: {categories: [__['Jan'],__['Feb'],__['Mar'],__['Apr'],__['May'],__['Jun'],__['Jul'],__['Aug'],__['Sep'],__['Oct'],__['Nov'],__['Dec']],crosshair: true},yAxis: {min: 0,title: {text: __['Total'] + ' ' + '(' + currency + ')'}},tooltip: {headerFormat: '<span style="font-size:10px">{point.key}</span><table>',pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +'<td style="padding:0"><b>{point.y}</b></td></tr>',footerFormat: '</table>',shared: true,useHTML: true},plotOptions: {column: {pointPadding: 0.2,borderWidth: 0}},series: [<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rows'), 'value', false, 'key');
$foreach14DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach14DoElse = false;
?>{name: "<?php echo $_smarty_tpl->getValue('key');?>
",data: [<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('join')($_smarty_tpl->getValue('value')['months_sales'],",");?>
]},<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>]});});<?php echo '</script'; ?>
><?php }?><!-- Admin Charts --><!-- Admin Code Editor --><?php if ($_smarty_tpl->getValue('view') == "design") {
echo '<script'; ?>
>
        $(function() {
          CodeMirror.fromTextArea(document.getElementById('custome_js_header'), {
            mode: "javascript",
            lineNumbers: true,
            readOnly: false
          });

          CodeMirror.fromTextArea(document.getElementById('custome_js_footer'), {
            mode: "javascript",
            lineNumbers: true,
            readOnly: false
          });

          CodeMirror.fromTextArea(document.getElementById('custom-css'), {
            mode: "css",
            lineNumbers: true,
            readOnly: false
          });
        });
      <?php echo '</script'; ?>
><?php }
if ($_smarty_tpl->getValue('view') == "settings" && $_smarty_tpl->getValue('sub_view') == "uploads") {
echo '<script'; ?>
>
        $(function() {
          $('.nav-tabs a').on('shown.bs.tab', function() {
            cm.refresh();
          });
          cm = CodeMirror.fromTextArea(document.getElementById('google_cloud_file'), {
            mode: "javascript",
            lineNumbers: true,
            readOnly: false
          });
        });
      <?php echo '</script'; ?>
><?php }?><!-- Admin Code Editor --><?php }?><!-- Cookies Policy --><?php if ($_smarty_tpl->getValue('system')['cookie_consent_enabled']) {
echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js" <?php if (!$_smarty_tpl->getValue('user')->_logged_in) {?>defer<?php }?>><?php echo '</script'; ?>
><link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" /><?php echo '<script'; ?>
>window.addEventListener("load", function() {window.cookieconsent.initialise({"palette": {"popup": {"background": "#1e2321","text": "#fff"},"button": {"background": "#5e72e4"}},"theme": "edgeless","position": <?php if ($_smarty_tpl->getValue('system')['language']['dir'] == 'LTR') {?>"bottom-left"<?php } else { ?>"bottom-right"<?php }?>,"content": {"message": __['This website uses cookies to ensure you get the best experience on our website'],"dismiss": __['Got It!'],"link": __['Learn More'],"href": site_path + "/static/privacy"}})});<?php echo '</script'; ?>
><?php }?><!-- Cookies Policy --><!-- OneSignal Notifications --><?php if ($_smarty_tpl->getValue('user')->_logged_in && $_smarty_tpl->getValue('page') != "reels" && $_smarty_tpl->getValue('system')['onesignal_notification_enabled']) {
echo '<script'; ?>
 src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""><?php echo '</script'; ?>
><?php echo '<script'; ?>
>var onesignal_app_id = "<?php echo $_smarty_tpl->getValue('system')['onesignal_app_id'];?>
";var onesignal_user_id = "<?php echo $_smarty_tpl->getValue('user')->_data['onesignal_user_id'];?>
";var onesignal_push_id = "";var OneSignal = window.OneSignal || [];function saveAndroidOneSignalUserId(android_onesignal_user_id) {$.post(api['users/notifications'], { handle: 'update_android', id: android_onesignal_user_id });}function saveIOSOneSignalUserId(io_onesignal_user_id) {$.post(api['users/notifications'], { handle: 'update_ios', id: io_onesignal_user_id });}OneSignal.push(function() {OneSignal.init({appId: onesignal_app_id,autoResubscribe: false,notifyButton: {enable: true,/* Required to use the Subscription Bell */size: 'medium',/* One of 'small', 'medium', or 'large' */theme: 'default',/* One of 'default' (red-white) or 'inverse" (white-red) */position: (theme_dir_rtl) ? 'bottom-right' : 'bottom-left',/* Either 'bottom-left' or 'bottom-right' */offset: {bottom: '100px',left: '20px',/* Only applied if bottom-left */right: '20px' /* Only applied if bottom-right */},prenotify: true,/* Show an icon with 1 unread message for first-time site visitors */showCredit: false,/* Hide the OneSignal logo */text: {'tip.state.unsubscribed': __['Subscribe to notifications'],'tip.state.subscribed': __['You are subscribed to notifications'],'tip.state.blocked': __['You have blocked notifications'],'message.prenotify': __['Click to subscribe to notifications'],'message.action.subscribed': __['Thanks for subscribing!'],'message.action.resubscribed': __['You are subscribed to notifications'],'message.action.unsubscribed': __['You will not receive notifications again'],'dialog.main.title': __['Manage Site Notifications'],'dialog.main.button.subscribe': __['SUBSCRIBE'],'dialog.main.button.unsubscribe': __['UNSUBSCRIBE'],'dialog.blocked.title': __['Unblock Notifications'],'dialog.blocked.message': __['Follow these instructions to allow notifications:']},colors: {'circle.background': 'rgb(84,110,123)','circle.foreground': 'white','badge.background': 'rgb(84,110,123)','badge.foreground': 'white','badge.bordercolor': 'white','pulse.color': 'white','dialog.button.background.hovering': 'rgb(77, 101, 113)','dialog.button.background.active': 'rgb(70, 92, 103)','dialog.button.background': 'rgb(84,110,123)','dialog.button.foreground': 'white'},},allowLocalhostAsSecureOrigin: true,});OneSignal.getUserId(function(userId) {onesignal_push_id = userId;if (userId != onesignal_user_id) {$.post(api['users/notifications'], { handle: 'update', id: onesignal_push_id });}});OneSignal.on('subscriptionChange', function(isSubscribed) {if (isSubscribed == false) {$.post(api['users/notifications'], { handle: 'delete' });} else {$.post(api['users/notifications'], { handle: 'update', id: onesignal_push_id });}});});<?php echo '</script'; ?>
><?php }?><!-- OneSignal Notifications --><!-- Mouse Right Click Disabled --><?php if ($_smarty_tpl->getValue('system')['right_click_disabled']) {
echo '<script'; ?>
>
      document.addEventListener('contextmenu', event => event.preventDefault());
    <?php echo '</script'; ?>
><?php }?><!-- Mouse Right Click Disabled --><?php }
}
