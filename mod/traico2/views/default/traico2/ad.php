<?php
	$ad_client=elgg_get_plugin_setting('ad_client','traico2_theme');
		if (!$ad_client) $ad_client = 'ca-pub-7771282555001001';
	$ad_slot=elgg_get_plugin_setting('ad_slot','traico2_theme');
		if (!$ad_slot) $ad_slot = '7900783343';
	$showads = elgg_get_plugin_setting('showads','traico2_theme');
		if (!$showads) $showads = 'yes';
?>
<?php if ($showads == 'yes') { ?>
<div class="ad">

<script type="text/javascript"><!--
google_ad_client = "<?php echo $ad_client; ?>";
/*  */
google_ad_slot = "<?php echo $ad_slot; ?>";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<?php } ?>