<?php

	// get index setting
	$slider_setting = elgg_get_plugin_setting('slider_setting', 'nuevo');
	
if ($slider_setting == 'slide' && !elgg_is_logged_in()){
	elgg_load_js('jquery.flexslider-min');
		 
?>
			
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "fade",
		controlsContainer: ".flex-container",
		start: function(slider) {
			$('.total-slides').text(slider.count);
		},
		after: function(slider) {
			$('.current-slide').text(slider.currentSlide);
		}
	});
});
</script>
<?php } ?> 

<div class="layout_index">
	<div id="slide_container">
        <div class="flexslider">
            <ul class="slides">
            <?php if ($slider_setting == "slide"){ ?>
                <li>        	
                    <img src="<?php echo $vars['url']; ?>mod/nuevo/graphics/images/slide_1.jpg" alt="" />
                </li>
                <li >
                    <img src="<?php echo $vars['url']; ?>mod/nuevo/graphics/images/slide_2.jpg" alt="" />
                </li>
                <li >
                    <img src="<?php echo $vars['url']; ?>mod/nuevo/graphics/images/slide_3.jpg" alt="" />
                </li>
            <?php } else { ?>
                <li>        	
                    <img src="<?php echo $vars['url']; ?>mod/nuevo/graphics/images/slide_1.jpg" alt="" />
                </li>
            </ul>
            <div style="margin-bottom:38px;"></div>
            <?php } ?>
        </div>
    </div>
</div>

