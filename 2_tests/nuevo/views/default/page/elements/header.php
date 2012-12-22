<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */


// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);
// drop-down login
echo elgg_view('core/account/login_dropdown');

// insert site-wide navigation
if (elgg_is_logged_in()) {
	echo elgg_view_menu('site');

?>

<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$('.elgg-search input').focus(function() {
		 $('.elgg-search input').animate({width: '230px'});
	});
	$('.elgg-search input').blur(function() {
		 $('.elgg-search input').animate({width: '150px'});
	});
});
</script>

<?php }