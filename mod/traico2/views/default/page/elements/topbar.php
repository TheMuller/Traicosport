<?php
/**
 * Elgg topbar
 * The standard elgg top toolbar
 */

// Elgg logo
?>
<div style="width:990px;margin:0px auto;">
<?php
echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));
?>
</div>
<?php

// elgg tools menu
// need to echo this empty view for backward compatibility.
$content = elgg_view("navigation/topbar_tools");
if ($content) {
	elgg_deprecated_notice('navigation/topbar_tools was deprecated. Extend the topbar menus or the page/elements/topbar view directly', 1.8);
	echo $content;
} ?>