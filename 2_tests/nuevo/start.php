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

    elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');

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
		elgg_extend_view('page/elements/sidebar', 'page/elements/groupmembership', '600');

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
  	//elgg_unregister_menu_item('site', 'pages');
/*
elgg_register_plugin_hook_handler('register', 'menu:site', 'activity', 1000);
elgg_register_plugin_hook_handler('register', 'menu:site', 'groups', 2000);

  		elgg_register_menu_item('site', array(
  			'name' => 'activity',
  			'href' => "/activity",
  			'text' => elgg_echo('activity'),
  			'priority' => 1,
  		));

  		elgg_register_menu_item('site', array(
  			'name' => 'groups',
  			'href' => "/groups/all",
  			'text' => elgg_echo('groups'),
  			'priority' => 2,
  		));

  		elgg_register_menu_item('site', array(
  			'name' => 'members',
  			'href' => "/members",
  			'text' => elgg_echo('members'),
  			'priority' => 3,
  		));

  		elgg_register_menu_item('site', array(
  			'name' => 'thewire',
  			'href' => "/thewire/all",
  			'text' => elgg_echo('thewire'),
  			'priority' => 4,
  		));

  		elgg_register_menu_item('site', array(
  			'name' => 'event_calendar',
  			'href' => "/event_calendar/list/",
  			'text' => elgg_echo('item:object:event_calendar'),
  			'priority' => 5,
  		));
*/
	elgg_unextend_view('page/elements/header', 'search/header');
	if (elgg_is_logged_in()) {
		elgg_extend_view('page/elements/header', 'search/header');
	}

	$owner = elgg_get_page_owner_entity();

	if (elgg_is_logged_in() && elgg_get_context() != 'admin') {
		$user = elgg_get_logged_in_user_entity();
        /*
  		elgg_unregister_menu_item('topbar', 'dashboard');
  		elgg_register_menu_item('page', array(
  			'name' => 'dashboard',
  			'href' => "/dashboard",
  			'text' => elgg_echo('dashboard'),
  			'priority' => 100,
  			'section' => 'more',
  		));

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
				'priority' => 200,
				'section' => 'more',
			));
		}

		elgg_register_menu_item('page', array(
			'name' => 'menu',
			'text' => elgg_echo('menu'),
			'href' => "#",
			'priority' => 300,
			'section' => 'more',
		));
        */
    		elgg_unregister_menu_item('site', 'photos');
    		elgg_register_menu_item('page', array(
    			'name' => 'photos',
				//'parent_name' => 'menu',
    			'href' => "/photos/owner/$user->username",
    			'text' => elgg_echo('photos'),
    			'priority' => 301,
    			'section' => 'more',
    		));

    		elgg_unregister_menu_item('site', 'videos');
    		elgg_register_menu_item('page', array(
    			'name' => 'videos',
				//'parent_name' => 'menu',
    			'href' => "/videos/owner/$user->username",
    			'text' => elgg_echo('videos'),
    			'priority' => 302,
    			'section' => 'more',
    		));

    		elgg_unregister_menu_item('site', 'blog');
    		elgg_register_menu_item('page', array(
    			'name' => 'blog',
				//'parent_name' => 'menu',
    			'href' => "/blog/owner/$user->username",
    			'text' => elgg_echo('blog'),
    			'priority' => 303,
    			'section' => 'more',
    		));

    		elgg_unregister_menu_item('site', 'polls');
    		elgg_register_menu_item('page', array(
    			'name' => 'polls',
				//'parent_name' => 'menu',
    			'href' => "/polls/owner/$user->username",
    			'text' => elgg_echo('poll'),
    			'priority' => 304,
    			'section' => 'more',
    		));

    		elgg_unregister_menu_item('site', 'bookmarks');
    		elgg_register_menu_item('page', array(
    			'name' => 'bookmarks',
				//'parent_name' => 'menu',
    			'href' => "/bookmarks/owner/$user->username",
    			'text' => elgg_echo('bookmarks'),
    			'priority' => 305,
    			'section' => 'more',
    		));

    		elgg_unregister_menu_item('site', 'file');
    		elgg_register_menu_item('page', array(
    			'name' => 'file',
				//'parent_name' => 'menu',
    			'href' => "/file/owner/$user->username",
    			'text' => elgg_echo('file'),
    			'priority' => 306,
    			'section' => 'more',
    		));

    		elgg_register_menu_item('page', array(
    			'name' => 'fb_friends',
				//'parent_name' => 'menu',
    			'href' => "http://www.facebook.com/dialog/apprequests?app_id=252770421408236&message=Share%20your%20sport%20with%20the%20world!&redirect_uri=http://www.traicosport.com/",
    			'text' => elgg_echo('nuevo:fb_friends'),
    			'priority' => 401,
    			'section' => 'more',
    		));

            /*
		elgg_register_menu_item('page', array(
			'name' => 'account',
			'text' => elgg_echo('account'),
			'href' => "#",
			'priority' => 400,
			'section' => 'more',
		));

    		elgg_unregister_menu_item('topbar', 'friends');
    		elgg_register_menu_item('page', array(
    			'name' => 'friends',
    			'parent_name' => 'account',
    			'href' => "/friends/$user->username",
    			'text' => elgg_echo('friends'),
    			'priority' => 400,
    			'section' => 'more',
    		));

    		if (elgg_is_active_plugin('profile')) {
    			elgg_unregister_menu_item('topbar', 'profile');
    			elgg_register_menu_item('page', array(
    				'name' => 'profile',
    				'parent_name' => 'account',
    				'text' => elgg_echo('profile'),
    				'href' => "/profile/$user->username",
    				'priority' => 402,
    				'section' => 'more',
    			));
    		}

    		elgg_unregister_menu_item('topbar', 'usersettings');
    		elgg_register_menu_item('page', array(
    			'name' => 'usersettings',
    			'parent_name' => 'account',
    			'href' => "/settings/user/$user->username",
    			'text' => elgg_echo('settings'),
    			'priority' => 403,
    			'section' => 'more',
    		));

    		elgg_unregister_menu_item('topbar', 'administration');
    		if (elgg_is_admin_logged_in()) {
    			elgg_register_menu_item('page', array(
    				'name' => 'administration',
    				'parent_name' => 'account',
    				'href' => 'admin',
    				'text' => elgg_echo('admin'),
    				'priority' => 404,
    				'section' => 'more',
    			));
    			elgg_register_menu_item('page', array(
    				'name' => 'themeadministration',
    				'parent_name' => 'account',
    				'href' => 'admin/plugin_settings/nuevo',
    				'text' => elgg_echo('nuevo:admin'),
    				'priority' => 405,
    				'section' => 'more',
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
    				'priority' => 1000,
    			));
    		}
    		elgg_unregister_menu_item('topbar', 'logout');
    		elgg_register_menu_item('page', array(
    			'name' => 'logout',
    			'parent_name' => 'account',
    			'href' => '/action/logout',
    			'is_action' => TRUE,
    			'text' => elgg_echo('logout'),
    			'priority' => 2000,
    			'section' => 'more',
    		));
            */
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