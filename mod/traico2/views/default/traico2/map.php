<?php
$code=elgg_get_plugin_setting('code','traico2_theme');
if (!$code) $code = 'e2c1m8bo95s1';
$width=elgg_get_plugin_setting('width','traico2_theme');
if (!$width) $width = '420';
$height=elgg_get_plugin_setting('height','traico2_theme');
if (!$height) $height = '210';
?>
<div class="map">
<script id="_waulpo">var _wau = _wau || []; _wau.push(["map", "<?php echo $code; ?>", "lpo", "<?php echo $width; ?>", "<?php echo $height; ?>", "natural" , "star-blue"]);(function() { var s=document.createElement("script");s.src="http://widgets.amung.us/map.js"; s.async=true; document.getElementsByTagName("head")[0].appendChild(s); })();</script>
</div>
