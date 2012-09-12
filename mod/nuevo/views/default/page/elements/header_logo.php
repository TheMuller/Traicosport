<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src="<?php echo $site_url; ?>mod/nuevo/graphics/traico/logo.png" alt="Traicosport.com - Social Sports Community"/>
	</a>        
</h1>
<h2 style="margin-top:-20px;"><?php echo elgg_echo('nuevo:subhead'); ?></h2>     