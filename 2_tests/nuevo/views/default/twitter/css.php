<?php 
/**
 * Elgg Twitter CSS
 * 
 * @package ElggTwitter
 */    
?>

#twitter_widget {
	margin:0;
}
#twitter_widget ul {
	margin:0;
	padding:0;
}
#twitter_widget li {
	margin:0 0 5px 0;
	background: #f9f9f9;
    padding:10px;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;
}
#twitter_widget li span {

}
p.visit_twitter a {
	background:url(<?php echo elgg_get_site_url(); ?>mod/twitter/graphics/twitter16px.png) left no-repeat;
	padding:0 0 0 20px;
	margin:0;
}
p.twitter_username .input-text {
	width:200px;
}
.visit_twitter {
	padding:2px;
	margin:0 0 5px 0;
}
#twitter_widget li > a {
	font-size: 85%;
	font-style: italic;
	line-height: 1.2em;
	display:block;
	margin:0;
}
#twitter_widget li span a {
	display:inline !important;
}