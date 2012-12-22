<?php

if (!elgg_is_logged_in()){

	$teaserstring = elgg_get_plugin_setting('teaserstring', 'nuevo');
	$teaseroutput = elgg_get_plugin_setting('teaseroutput', 'nuevo');

	if ($teaserstring == 'yes') {
    	$contentheader = '<h1>' . elgg_echo("nuevo:teaserheader") . '</h1>';
    	$content = '<div>' . elgg_echo("nuevo:teaser") . '</div>';
	} else {
		$content = '<h1>' . elgg_echo($teaseroutput) . '</h1>';
	}

?>

<div class="index_teaser">
    <div class="signin-header">
    	<?php echo $contentheader; ?>
    </div>
    <div class="signin-text">
    	<?php echo $content; ?>
    </div>
</div>

<?php } else if (elgg_is_logged_in()){ 

	if ((elgg_get_plugin_setting('landing_page', 'nuevo') == 'yes') && elgg_is_active_plugin('dashboard')) {	
		forward('dashboard');		
	} else {	
		forward('activity');
	}
}

?>



