<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */
 

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

if (elgg_get_plugin_setting('footer_link', 'nuevo') == 'yes'){

echo '<div class="mts clearfloat float-alt">';
echo elgg_view('output/url', array(
	'href' => 'http://traicosport.com',
	'text' => "Powered by Traicosport",
	'class' => '',
));
echo '</div>';

}
