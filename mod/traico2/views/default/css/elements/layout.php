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
	margin: 0px auto 0px auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	position: relative;
	z-index: 9000;
    heigth: 24px;
    background-color: #000000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
position: fixed;
bottom: 0px;
left: 0px;
width: 100%;
z-index: 2000;
}
.elgg-system-messages li {
margin-top: 10px;
}
.elgg-system-messages li p {
margin: 0;
font-size: 14px;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
    background-color: #000000;
}
.elgg-page-header > .elgg-inner {
	position: relative;
	color:#ffffff;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/sidebar_background.gif) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
	background:#ffffff;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
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

/*****WALLED GARDEN ******/
.elgg-body-walledgarden {
     margin: 100px auto 0 auto;
     position: relative;
     width: 730px;
 }
 .elgg-module-walledgarden {
     position: absolute;
     top: 0;
     left: 0;
 }
 .elgg-col-1of1 {
    float: left;
    width: 500px;
 }
 .elgg-module-walledgarden > .elgg-head {
     height: 17px;
 }
 .elgg-module-walledgarden > .elgg-body {
     padding: 0 10px;
 }
 .elgg-module-walledgarden > .elgg-foot {
     height: 17px;
 }
 .elgg-walledgarden-double > .elgg-head {

 }
 .elgg-walledgarden-double > .elgg-body {
     background: url(<?php echo $url; ?>_graphics/walled_garden/two_column_middle.png) repeat-y left top;
 }
 .elgg-walledgarden-double > .elgg-foot {
     background: url(<?php echo $url; ?>_graphics/walled_garden/two_column_bottom.png) no-repeat left top;
 }
 .elgg-walledgarden-single > .elgg-head {
     background: url(<?php echo $url; ?>_graphics/walled_garden/one_column_top.png) no-repeat left top;
 }
 .elgg-walledgarden-single > .elgg-body {
     background: url(<?php echo $url; ?>_graphics/walled_garden/one_column_middle.png) repeat-y left top;
 }
 .elgg-walledgarden-single > .elgg-foot {
     background: url(<?php echo $url; ?>_graphics/walled_garden/one_column_bottom.png) no-repeat left top;
 }

 .elgg-col > .elgg-inner {
     margin: 0 0 0 5px;
 }
 .elgg-col:first-child > .elgg-inner {
     margin: 0 5px 0 0;
 }
 .elgg-col > .elgg-inner {
     padding: 0 8px;
 }

 .elgg-walledgarden-single > .elgg-body > .elgg-inner {
     padding: 0 8px;
 }

 .elgg-module-walledgarden-login {
     margin: 0;
 }
 .elgg-body-walledgarden h3 {
     font-size: 1.5em;
     line-height: 1.1em;
     padding-bottom: 5px;
 }

 .elgg-heading-walledgarden {
     color: #3399FF
     margin-top: 60px;
     line-height: 1.1em;
 }