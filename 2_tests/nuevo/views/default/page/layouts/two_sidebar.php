<?php
/**
 * Elgg 2 sidebar layout
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content']     The content string for the main column
 * @uses $vars['sidebar']     Optional content that is displayed in the sidebar
 * @uses $vars['sidebar_alt'] Optional content that is displayed in the alternate sidebar
 * @uses $vars['class']       Additional class to apply to layout
 */

$class = 'elgg-layout elgg-layout-two-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}
?>
<div class="<?php echo $class; ?>">
    <div class="two_column_left_sidebar_panel">
        <div class="elgg-sidebar">
            <?php
                echo elgg_view('page/elements/sidebar', $vars);
            ?>
        </div>
    </div>
    <div class="two_column_right_sidebar_panel">
        <div class="elgg-sidebar-alt">
            <?php
                echo elgg_view('page/elements/sidebar_alt', $vars);
            ?>
        </div>
    </div>
	<div class="elgg-main elgg-body">
		<?php
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
