<?php
/**
 * Elgg custom index page
 * 
 */

elgg_push_context('front');

$title = elgg_echo('nuevo:pagetitle');
$body = elgg_view_layout('custom_index');

echo elgg_view_page($title, $body);
	
