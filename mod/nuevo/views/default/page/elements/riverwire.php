<?php
/**
 * Registration text
 *
 */

$title = elgg_view_title(elgg_echo('nuevo:thewire'));
$content .= elgg_view_form('thewire/add', array('name' => 'elgg-wire'));

echo elgg_view_module('thewire', $title, $content);

