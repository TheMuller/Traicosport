<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

// navigation defaults to breadcrumbs
$nav = elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

?>

<div class="<?php echo $class; ?>">
    <div class="two_column_left_sidebar_panel">
        <div class="elgg-sidebar">
            <?php
                echo elgg_view('page/elements/sidebar', $vars);
            ?>
        </div>
    </div>
	<div class="elgg-main elgg-body">
		<?php
			echo $nav;
			
			if (isset($vars['title'])) {
				echo elgg_view_title($vars['title']);
			}
			// @todo deprecated so remove in Elgg 2.0
			if (isset($vars['area1'])) {
				echo $vars['area1'];
			}
			
			if (elgg_is_logged_in() && (elgg_get_context() == 'activity') && (elgg_get_plugin_setting('show_thewire', 'nuevo') == 'yes')){	
				echo elgg_view('page/elements/riverwire');
			}
			
			if (isset($vars['content'])) {
				echo $vars['content'];
			}
		?>
	</div>
</div>
