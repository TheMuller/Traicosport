<?php
elgg_register_event_handler('init', 'system', 'traico2_init');

function traico2_init() {
	$showads=elgg_get_plugin_setting('showads','traico2_theme');
	if (!$showads) $showads = 'Yes';
	elgg_extend_view ('page/elements/head','traico2_theme/meta');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	if ($showads == 'yes') elgg_extend_view ('page/elements/sidebar','traico2_theme/ad');

    elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup'); 

    elgg_unregister_menu_item('site', 'blog');
    elgg_unregister_menu_item('site', 'bookmarks');
    elgg_unregister_menu_item('site', 'photos');
    elgg_unregister_menu_item('site', 'file');
    elgg_unregister_menu_item('site', 'thewire');

    elgg_register_menu_item('page', array(
    'name' => 'friends_request',
    'text' => '<img scr="http://traicosport.com/portal/mod/traico2/graphics/facebook_icon.jpg"> Invite Facebook friends',
    'href' => 'http://www.facebook.com/dialog/apprequests?
  app_id=252770421408236&
  message=Share%20your%20sport%20with%20the%20world!&
  redirect_uri=http://www.traicosport.com/',
));
    /*
	$item = new ElggMenuItem('sportsklubber', elgg_echo('sportsklubber'), 'http://traicosport.com/sportsklubber');
	elgg_register_menu_item('site', $item);

	$item = new ElggMenuItem('sportsfaciliteter', elgg_echo('sportsfaciliteter'), 'http://traicosport.com/sportsfaciliteter');
	elgg_register_menu_item('site', $item);

    elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
    */
}

?>