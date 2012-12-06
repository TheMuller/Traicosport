<?php

/**
 * profile icon
 */


$user = elgg_get_page_owner_entity();
$icon = elgg_view_entity_icon($user, 'large', array('use_hover' => false));

echo <<<HTML

<div class="elgg-module elgg-module-aside elgg-module-avatar">
	$icon
</div>

HTML;


