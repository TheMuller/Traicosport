<?php
/**
 *
 * Theme Nuevo
 * @author perjensen-online.dk
 *
*/

elgg_register_event_handler('init','system','nuevo_init');
 
function nuevo_init() {

	$action_path = dirname(__FILE__) . '/actions';

	if (elgg_get_plugin_setting('show_thewire', 'nuevo') == 'yes'){
		elgg_register_action("nuevo/add", "$action_path/add.php");		
		elgg_extend_view('js/elgg', 'js/update');
	}

	elgg_register_event_handler('pagesetup', 'system', 'nuevo_theme_pagesetup_handler', 1000);

	elgg_register_js('jquery.flexslider-min', 'mod/nuevo/vendors/js/jquery.flexslider-min.js', 'footer');
	elgg_register_js('jCarouselLite', 'mod/nuevo/vendors/js/jCarouselLite.js', 'footer');
    /*elgg_extend_view('page/elements/body', 'page/elements/new_users');*/

	elgg_extend_view('css/elgg', 'nuevo/css');
	elgg_extend_view('css/admin', 'nuevo/admin');

	// responsive
	if (elgg_get_plugin_setting('add_responsive', 'nuevo') == 'yes'){
		elgg_extend_view('css/elgg', 'nuevo/responsive');
		elgg_extend_view('page/elements/head','nuevo/meta', 1);
		elgg_register_js('respond', 'mod/nuevo/vendors/js/respond.js');
		elgg_load_js('respond');
		elgg_register_js('nuevo', 'mod/nuevo/vendors/js/nuevo.js', 'footer');
		elgg_load_js('nuevo');
	}
			
	// added to show sidebar_alt content
	elgg_extend_view('page/elements/sidebar_alt', 'page/elements/demo_element');

	if ((elgg_get_context() == 'activity') && (elgg_get_plugin_setting('show_icon', 'nuevo') == 'yes')){	
		elgg_extend_view('page/elements/sidebar', 'page/elements/rivericon', '1');
	}	
	if ((elgg_get_context() == 'activity') && (elgg_get_plugin_setting('show_friends', 'nuevo') == 'yes')){
		elgg_extend_view('page/elements/sidebar', 'page/elements/friends', '500');
	}
	
	expages_setup_sidebar_menu();
    // replace the default index page
    elgg_register_plugin_hook_handler('index','system','custom_index', 1);
}

function custom_expages_page_handler($page, $handler) {
	if ($handler == 'expages') {
		expages_url_forwarder($page[1]);
	}
	$type = strtolower($handler);

	$title = elgg_echo("expages:$type");
	$content = elgg_view_title($title);

	$object = elgg_get_entities(array(
		'type' => 'object',
		'subtype' => $type,
		'limit' => 1,
	));
	if ($object) {
		$content .= elgg_view('output/longtext', array('value' => $object[0]->description));
	} else {
		$content .= elgg_echo("expages:notset");
	}
	$body = elgg_view_layout('one_sidebar', array('content' => $content));
	echo elgg_view_page($title, $body);

	return true;
}

function nuevo_theme_pagesetup_handler() {

	elgg_unregister_menu_item('topbar', 'elgg_logo');
	
	elgg_unextend_view('page/elements/header', 'search/header');	
	if (elgg_is_logged_in()) {
		elgg_extend_view('page/elements/header', 'search/header');
	}
	
	$owner = elgg_get_page_owner_entity();

	if (elgg_is_logged_in() && elgg_get_context() != 'admin') {
		$user = elgg_get_logged_in_user_entity();
		
		if (elgg_is_active_plugin('messages')) {	
			elgg_unregister_menu_item('topbar', 'messages');
			//$class = "elgg-icon elgg-icon-mail";
			//$text = "<span class='$class'></span>";
			
			// get unread messages
			$num_messages = (int)messages_count_unread();
			if ($num_messages != 0) {
				$text .= "<span class=\"messages-new\">$num_messages</span>";
			}							
			elgg_register_menu_item('page', array(
				'name' => 'messages',
				'href' => 'messages/inbox/' . elgg_get_logged_in_user_entity()->username,
				'text' => $text . elgg_echo('messages'),
				'priority' => 1,
				'section' => 'more',
			));
		}
			
		elgg_register_menu_item('page', array(
			'name' => 'account',
			'text' => elgg_echo('account'),
			'href' => "#",
			'priority' => 2,
			'section' => 'more',
		));
		
		elgg_unregister_menu_item('topbar', 'administration');
		if (elgg_is_admin_logged_in()) {		
			elgg_register_menu_item('page', array(
				'name' => 'administration',
				'parent_name' => 'account',
				'href' => 'admin',
				'text' => elgg_echo('admin'),
				'priority' => 101,
				'section' => 'more',
			));
			elgg_register_menu_item('page', array(
				'name' => 'themeadministration',
				'parent_name' => 'account',
				'href' => 'admin/plugin_settings/nuevo',
				'text' => elgg_echo('nuevo:admin'),
				'priority' => 102,
				'section' => 'more',
			));
		}

		if (elgg_is_active_plugin('profile')) {
			elgg_unregister_menu_item('topbar', 'profile');
			elgg_register_menu_item('page', array(
				'name' => 'profile',
				'parent_name' => 'account',
				'text' => elgg_echo('profile'),
				'href' => "/profile/$user->username",
				'priority' => 103,
				'section' => 'more',
			));
		}
						
		elgg_unregister_menu_item('topbar', 'usersettings');
		elgg_register_menu_item('page', array(
			'name' => 'usersettings',
			'parent_name' => 'account',
			'href' => "/settings/user/$user->username",
			'text' => elgg_echo('settings'),
			'priority' => 104,
			'section' => 'more',
		));
		
		elgg_unregister_menu_item('topbar', 'logout');
		elgg_register_menu_item('page', array(
			'name' => 'logout',
			'parent_name' => 'account',
			'href' => '/action/logout',
			'is_action' => TRUE,
			'text' => elgg_echo('logout'),
			'priority' => 105,
			'section' => 'more',
		));
		
		elgg_unregister_menu_item('topbar', 'friends');
		elgg_register_menu_item('site', array(
			'name' => 'friends',
			'text' => elgg_echo('friends'),
			'href' => "/friends/$user->username",
			'priority' => 500,
		));
		
		if (elgg_is_active_plugin('dashboard')) {
			elgg_unregister_menu_item('topbar', 'dashboard');		
			elgg_register_menu_item('site', array(
				'name' => 'dashboard',
				'href' => '/dashboard',
				'text' => elgg_echo('dashboard'),
				'priority' => 499,
			));
		}
	
		if (elgg_is_active_plugin('reportedcontent')) {
			elgg_unregister_menu_item('footer', 'report_this');
		
			$href = "javascript:elgg.forward('reportedcontent/add'";
			$href .= "+'?address='+encodeURIComponent(location.href)";
			$href .= "+'&title='+encodeURIComponent(document.title));";
				
			elgg_register_menu_item('extras', array(
				'name' => 'report_this',
				'href' => $href,
				'text' => elgg_view_icon('report-this') . elgg_echo(''),
				'title' => elgg_echo('reportedcontent:this:tooltip'),
				'priority' => 2000,
			));
		}
	}	
}

function expages_setup_sidebar_menu() {
	$pages = array('privacy', 'terms', 'about');
	foreach ($pages as $page) {		
		elgg_register_menu_item('page', array(
			'name' => $page,
			'href' => $page,
			'text' => elgg_echo("expages:$page"),
			'contexts' => $pages,
		));
	}
}

function custom_index($hook, $type, $return, $params) {
	if ($return == true) {
		// another hook has already replaced the front page
		return $return;
	}

	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	// return true to signify that we have handled the front page
	return true;
}

?>