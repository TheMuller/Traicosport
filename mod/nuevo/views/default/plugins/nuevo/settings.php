<?php

	// set default values
	if (!isset($vars['entity']->teaserstring)) {
		$vars['entity']->teaserstring = 'yes';
	}
	if (!isset($vars['entity']->teaseroutput)) {
		$vars['entity']->teaseroutput = $teaseroutput;
	}
	if (!isset($vars['entity']->landing_page)) {
		$vars['entity']->landing_page = 'no';
	}
	if (!isset($vars['entity']->add_responsive)) {
		$vars['entity']->add_responsive = 'enabled';
	}
	if (!isset($vars['entity']->columns)) {
		$vars['entity']->columns = 'no';
	}
	if (!isset($vars['entity']->footer_link)) {
		$vars['entity']->footer_link = 'yes';
	}
	if (!isset($vars['entity']->reg_text)) {
		$vars['entity']->reg_text = 'yes';
	}	
	if (!isset($vars['entity']->slider_setting)) {
		$vars['entity']->slider_setting = 'slide';
	}
	if (!isset($vars['entity']->show_icon)) {
		$vars['entity']->show_icon = 'no';
	}	
	if (!isset($vars['entity']->show_friends)) {
		$vars['entity']->show_friends = 'no';
	}
	if (!isset($vars['entity']->num_friends)) {
		$vars['entity']->num_friends = 12;
	}
	// River wire
	if (!isset($vars['entity']->show_thewire)) {
		$vars['entity']->show_thewire = 'no';
	}

echo "<div class=\"label\">" . elgg_echo('nuevo:header:general') . "</div>";

echo '<div>';
echo elgg_echo('nuevo:label:responsive');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[add_responsive]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')

	),
	'value' => $vars['entity']->add_responsive,
));
echo '</div>';

echo elgg_view('input/dropdown', array(
	'name' => 'params[teaserstring]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
		),
	'value' => $vars['entity']->teaserstring,
));

echo '<div>';
	echo elgg_echo('nuevo:info:teaser');
echo '</div>';
echo '<div>';
	echo elgg_echo('nuevo:label:teaser');
	echo elgg_view('input/text',array('name' => 'params[teaseroutput]','value' => $vars['entity']->teaseroutput));
echo '</div>';

echo '<div>';
echo elgg_echo('nuevo:param:label:reg');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[reg_text]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')

	),
	'value' => $vars['entity']->reg_text,
));
echo '</div>';
	
echo '<div>';
echo elgg_echo('nuevo:label:landingpage');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[landing_page]',
	'options_values' => array(
		'no' => elgg_echo('nuevo:option:activity'),
		'yes' => elgg_echo('nuevo:option:dashboard')
	),
	'value' => $vars['entity']->landing_page,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('nuevo:header:slider') . "</div>";

echo '<div>';
echo elgg_echo('nuevo:info:slider');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[slider_setting]',
	'options_values' => array(
		'slide' => elgg_echo('nuevo:label:slider'),
		'static' => elgg_echo('nuevo:label:static')
	),
	'value' => $vars['entity']->slider_setting,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('nuevo:header:appearance') . "</div>";

echo '<div>';
echo elgg_echo('nuevo:label:columns');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[columns]',
	'options_values' => array(
		'no' => elgg_echo('nuevo:option:two'),
		'yes' => elgg_echo('nuevo:option:three')
	),
	'value' => $vars['entity']->columns,
));
echo '</div>';

echo '<div>';
echo elgg_echo('nuevo:label:thewire');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_thewire]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no')
	),
	'value' => $vars['entity']->show_thewire,
));
echo '</div>';

echo '<div>';
echo elgg_echo('nuevo:param:label:elgg');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[footer_link]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')

	),
	'value' => $vars['entity']->footer_link,
));
echo '</div>';

echo "<div class=\"label\">" . elgg_echo('nuevo:header:sidebar') . "</div>";
	
echo '<div>';
echo elgg_echo('nuevo:allow:icon');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_icon]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->show_icon,
));
echo '</div>';

echo '<div>';
echo elgg_echo('nuevo:allow:friends');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_friends]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->show_friends,
));
echo '</div>';

echo '<div>';
echo elgg_echo('nuevo:num:friends');
$params = array(
	'name' => 'params[num_friends]',
	'value' => $vars['entity']->num_friends,
	'options' => array(6, 12, 18, 24, 30, 36, 42, 48, 54, 60),
);
echo elgg_view('input/dropdown', $params);
echo '</div>';
