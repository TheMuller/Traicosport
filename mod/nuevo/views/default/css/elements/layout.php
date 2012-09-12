<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI

Yellow = FFF554
Red = #B22C4A
Fadebackground = FFFCFD
Links = 44AFCC
Fade blue = 74A5B2

 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;    
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 90px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
    text-shadow:1px 1px 0 #fff;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
    text-shadow: 1px 1px 0 #fff;
	border-top: 1px solid #DEDEDE;
}
/***** TOPBAR ******/
.elgg-page-topbar {
	display:none;
}

/***** PAGE MESSAGES ******/

.elgg-state-arrow {
 	width:8px;
    padding:0;
    margin:0;
    height:8px;
}
.elgg-system-messages {
	position:fixed;
    width: 100%;
    float:left;
	top: 0;
	z-index: 2000;
}
.elgg-system-messages li {
    padding-left:25%;
    padding-right:25%;
	z-index: 2000;
}
.elgg-system-messages li p {
	margin: 0;
    padding:15px 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	min-height: 120px;
    border-bottom: 1px solid #2E2E2E;    
	position: relative;
	background: #2E2E2E url(<?php echo $vars['url']; ?>mod/nuevo/graphics/header-bg.jpg) repeat-x bottom left;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar .elgg-main {
    width: auto;
}
.elgg-layout-two-sidebar .elgg-main {

}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	width: 220px;
	margin: 0 0 10px 15px;
    padding: 5px;
	background: #eeeeee;
	border: 1px solid #e7e8e9;
	float: left;
    
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-sidebar .elgg-latest-comments .elgg-image-block {
	border-top:1px solid #eaeaea;
    padding-top: 5px;
}
.elgg-sidebar .elgg-latest-comments .elgg-item:first-child .elgg-image-block {
	border-top:none;
    padding-top:0;
}
.elgg-sidebar-alt {
	width: 160px;
	margin: 0 15px 10px 0;
    padding: 5px;
	background: #eeeeee;
	border: 1px solid #e7e8e9;
	float: right;
}
.elgg-main {
	margin: 20px 0 20px 0;
	background: #f9f9f9;
    padding: 30px;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;
	position: relative;
	min-height: 360px;
    
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #eaeaea;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}
