<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

?>

<a href="<?php echo $site_url; ?>"><h2 style="padding-top:20px;"><?php echo elgg_echo('nuevo:subhead'); ?></h2></a>