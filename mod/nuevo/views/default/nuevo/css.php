<?php

?>

/* ***************************************
	NEW INDEX
*****************************************/

.index_teaser{
    padding: 40px 0 30px;
    min-height: 70px;
    width: 100%;
}
.signin-text h1{
	font-weight:normal;
    line-height: 1.4em;
    color:#333;
}
.index_teaser .signin-header{
	position:relative;
    float:left;
}
.index_teaser .signin-text{
	width:100%;
	position:relative;
    float:left;
}
.index_teaser .signin-button{
	position:relative;
    float: right;
    padding-right: 20px;
}
.ani-button {
    display:block;
    width:64px;
    height:64px;
    background: transparent url(<?php echo elgg_get_site_url();?>mod/nuevo/graphics/ani-button.png) no-repeat 0 -64px;
    margin:0 auto;
}
.ani-button a {
    display:block;
    width:100%;
    height:100%;
    background: transparent url(<?php echo elgg_get_site_url();?>mod/nuevo/graphics/ani-button.png) no-repeat 0 0;
}
.ani-button a:hover {
  background-position:0 64px;
}
#slide_container {
	position:relative;
	width: 1130px;
    height: 410px;
	margin: 0 auto;
    padding: 0;
}
.layout_index{
    border-bottom: 1px solid #FFF;
    background: #222;
    padding-top: 5px;
}

/* ***************************************
	INDEX SLIDER
*****************************************/

/* Browser Resets */
.flex-container a:active, .flexslider a:active, .flex-container a:focus, .flexslider a:focus {
	outline: none;
}
.slides, .flex-control-nav, .flex-direction-nav {
	margin: 0;
	padding: 0;
	list-style: none;
}
/* FlexSlider Necessary Styles
*********************************/
.flexslider {
	margin: 0;
	padding: 0;
}
/* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides > li {
	display: none;
	-webkit-backface-visibility: hidden;
} 

.flexslider .slides img {
	max-width: 100%;
	display: block;
}
.flex-pauseplay span {
	text-transform: capitalize;
}
/* Clearfix for the .slides element */
.slides:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
html[xmlns] .slides {
	display: block;
}
* html .slides {
	height: 1%;
}
/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
 * include js that eliminates this class on page load */
.no-js .slides > li:first-child {
	display: block;
}
/* FlexSlider Default Theme
*********************************/
.flexslider {
	background: #222;
	position: relative;
	zoom: 1;
}
.flexslider .slides {
	zoom: 1;
}
.flexslider .slides > li {
	position: relative;
}
/* Suggested container for "Slide" animation setups. Can replace this with your own, if you wish */
.flex-container {
	zoom: 1;
	position: relative;
}
/* Caption style */
/* IE rgba() hack */
.flex-caption {
	background:none;
-ms-filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
	zoom: 1;
}
.flex-caption {
	width: 96%;
	padding: 2%;
	margin: 0;
	position: absolute;
	left: 0;
	bottom: 0;
	background: rgba(0, 0, 0, .3);
	color: #fff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, .3);
	font-size: 14px;
	line-height: 18px;
}
/* Direction Nav */
.flex-direction-nav {
	height: 0;
}
.flex-direction-nav li a {
	width: 52px;
	height: 52px;
	margin: -13px 0 0;
	display: block;
 	background: none;
	position: absolute;
	top: 50%;
	cursor: pointer;
	text-indent: -999em;
}
.flex-direction-nav li .next {
	background-position: -52px 0;

}
.flex-direction-nav li .prev {
	left: -3px;
}
.flex-direction-nav li .disabled {
	opacity: .3;
	filter:alpha(opacity=30);
	cursor: default;
}
/* Control Nav */
.flex-control-nav {
	width: 100%;
	position: absolute;
	bottom: -30px;
	text-align: center;
}
.flex-control-nav li {
	margin: 0 0 0 5px;
	display: inline-block;
	zoom: 1;
	*display: inline;
}
.flex-control-nav li:first-child {
	margin: 0;
}
.flex-control-nav li a {
	width: 13px;
	height: 13px;
	display: block;
	background: url(<?php echo elgg_get_site_url(); ?>mod/nuevo/graphics/bg_control_nav.png) no-repeat;
	cursor: pointer;
	text-indent: -999em;
}
.flex-control-nav li a:hover {
	background-position: 0 -13px;
}
.flex-control-nav li a.active {
	background-position: 0 -26px;
	cursor: default;
}

/* ***************************************
	EXTRAS
*****************************************/
.two_column_left_sidebar_panel{
	position:relative;
	margin: -19px 25px 12px 0;
    padding: 19px 0 0 0;
	background: #f4f4f4;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #e3e3e3;
	-moz-box-shadow: 0 0 0 1px #e3e3e3;
	box-shadow: 0 0 0 1px #e3e3e3;	
	float: left;
    width: 250px;
    
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.two_column_right_sidebar_panel{
	position: relative;
	margin: -19px 0 12px 25px;
    padding: 19px 0 0 0;
	background: #f4f4f4;
	border: 1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #e3e3e3;
	-moz-box-shadow: 0 0 0 1px #e3e3e3;
	box-shadow: 0 0 0 1px #e3e3e3;	
	float: right;
    width: 200px;
}
fieldset .elgg-module {
    margin: 5px 0;
    width: 440px;
}
.elgg-module-register > .elgg-head {
	background: #eee;
	padding: 5px;
	margin-bottom: 10px;
	border:1px solid #e7e8e9;
}
.elgg-module-register > .elgg-head * {
	color: #333;
}
.elgg-module-group{
	margin-left:0;
    margin-right:0;
}
.elgg-module-group .elgg-image-block{
	margin-left:1px;
    margin-right:1px;
}
.elgg-module-thewire{
	margin: 0 0 10px 0;
}
.elgg-module-thewire h2{
	font-size: 1.2em;
}
/* comments button */
.elgg-river-responses .elgg-form{
	padding-bottom: 5px;
    height: auto;
}
.elgg-river-responses input[type=submit] {
	margin-left: 0;
    margin-top: 4px;
}
.elgg-river-responses input[type=text] {
	width: 100%;
}
.elgg-output-categories {
	margin: 2px 0 5px 0 !important;
}
.small a{
    vertical-align: top;
    padding-left: 4px;
}
/* ---------------------------------------------------- */
/* USER SLIDER
/* ---------------------------------------------------- */

.elgg-page-header .elgg-module{
	background: none;
    border: none;
    padding: 0;
    margin-top: 5px;
    margin-left: 30px;
}
.usercarousel{
    visibility: visible;
    overflow: hidden;
    position: relative;
    z-index: 2;
    float: left;
}
.usercarousel ul {
	margin: 0;
    padding: 0;
    position: relative;
    list-style-type: none;
    z-index: 1;
    width: 400px;
}
.usercarousel li {
	overflow: hidden;
    margin-left:5px;
    margin-right:6px;
    float: left;
    width: 40px;
    height: 40px;
}

/* ---- Traico changes --- */

.widgets_image_slider_image span {
    color: #FFFFFF;
    font-size: 24px;
    text-shadow: none !important;
}