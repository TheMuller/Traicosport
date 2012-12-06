<?php
	$ad_client=$vars['entity']->ad_client;
		if (!$ad_client) $ad_client = 'ca-pub-7771282555001001';
	$ad_slot=$vars['entity']->ad_slot;
		if (!$ad_slot) $ad_slot = '7900783343';
	$frontleft = $vars['entity']->frontleft;
		if (!$frontleft) $frontleft='<h2>You can edit this information in the admin section of this theme.</h2>';
	$frontright = $vars['entity']->frontright;
		if (!$frontright) $frontright='<h2>You can edit this information in the admin section of this theme.</h2>';
	$code = $vars['entity']->code;
		if (!$code) $code = 'e2c1m8bo95s1';
	$width = $vars['entity']->width;
		if (!$width) $width = '420';
	$height = $vars['entity']->height;
		if (!$height) $height = '210';
	$showads = $vars['entity']->showads;
		if (!$showads) $showads = 'yes';
?>
<div id="traico2_theme_admin">
	<div style="width:760px;float:right;">
	<h2>Visit adsense.google.com and create an ad.</h2>
		<img src="<?php echo $vars['url']; ?>mod/traico2_theme/graphics/adcode.jpg"></img>
	<h2>Click <a href="http://whos.amung.us/maps/customize/" target="_blank">here</a> to get your map code.</h2>
		<img src="<?php echo $vars['url']; ?>mod/traico2_theme/graphics/mapcode.jpg"></img>
	</div>

	<div style="width:510px;float:left;">
		<label>Publisher ID</label><br/>
		<input type="text" name="params[ad_client]" value="<?php echo $ad_client; ?>" style="width:300px;"/><br/>
		<label>Ad Slot</label><br/>
		<input type="text" name="params[ad_slot]" value="<?php echo $ad_slot; ?>" style="width:300px;"/><br/>
		<label>Show ads?</label>
		<?php
			echo elgg_view('input/dropdown', array(
				'name' => 'params[showads]',
				'options_values' => array(
					'yes' => 'Yes',
					'no' => 'No',
				),
				'value' => $showads
			));
		?>
		<br/>
		<label>Front left text area:</label>
		<?php
			echo elgg_view('input/longtext', array('name'=>'params[frontleft]','value'=>$frontleft));
		?>
		<br/>
		<label>Front right text area:</label>
		<?php
			echo elgg_view('input/longtext', array('name'=>'params[frontright]','value'=>$frontright));
		?>
		<label>Map code:</label>
		<?php
			echo elgg_view('input/text', array('name'=>'params[code]','value'=>$code));
		?>
		<label>Map height:</label>
		<?php
			echo elgg_view('input/text', array('name' => 'params[height]','value'=>$height));
		?>
		<label>Map width:</label>
		<?php
			echo elgg_view('input/text', array('name' => 'params[width]','value'=>$width));
		?>
	</div>
	<div style="clear:both;"></div>
</div>