<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

?>

<h1>
	<a href="<?php echo $site_url; ?>"><div class="elgg-heading-site"></div>
	</a>
</h1>
<h2 style="margin-top:-20px;"><?php echo elgg_echo('nuevo:subhead'); ?></h2>