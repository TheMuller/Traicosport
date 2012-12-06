<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$site_description = $site->description;
?>

<div id="logo">
<a href="<?php echo $site_url; ?>">
<img border="0" alt="<?php echo $site_name; ?>" src="http://traicosport.com/images/logo.png">
</a>
</div>