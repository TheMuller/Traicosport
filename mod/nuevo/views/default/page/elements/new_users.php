<?php

/**
 * index users
 */

// load js
elgg_load_js('jCarouselLite');

//get the newest members who have an avatar
$newest_members = elgg_get_entities_from_metadata(array(
	'types' => 'user',
	'limit' => 10,
));

?>

<script type="text/javascript">
$(function() {
	$(".usercarousel").jCarouselLite({
		auto: 8000,
		speed: 800,
		visible: 11
	});
});
</script>

<div class="elgg-module">
    <h4><?php echo elgg_echo('green:members'); ?></h4> 
    <div class="usercarousel">
    	<ul>
			<?php
			foreach($newest_members as $mem){
					echo "<li>";
					echo "<div class=\"recentMember\">" . elgg_view_entity_icon($mem, 'small', array('use_hover' => false)) . "</div>";
					echo "</li>";
				}				
            ?>
		</ul>
	</div>
</div>