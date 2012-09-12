<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	padding: 2px 6px;
    color: #A5A5A5;
	border: 1px solid #A5A5A5;
	font-size: 12px;
}
.elgg-pagination a:hover {
	color: #4e4e4e;
	border-color: #4e4e4e;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #4e4e4e;
	border-color: #4e4e4e;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 10px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 1px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;
}
.elgg-tabs a {
	display: block;
	padding:3px 10px 0 10px;
	text-align: center;
	height:21px;

}
.elgg-tabs a:hover {
	background: #dedede;
}
.elgg-tabs .elgg-state-selected {
	border-color: #ccc;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	top: 1px;
	background: #F9F9F9;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #bababa;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after{
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
}
.elgg-breadcrumbs > li > a:hover {
	text-decoration:none;
}
.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -6px;
	left: 0;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}
.elgg-menu-topbar > li {
	float: left;
}
.elgg-menu-topbar > li > a {
	padding-top: 2px;
	color: #eee;
	margin: 1px 15px 0;
}
.elgg-menu-topbar > li > a:hover {
	color: #4690D6;
	text-decoration: none;
}
.elgg-menu-topbar-alt {
	float: right;
}
.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}
.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}
.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	z-index: 1;
}
.elgg-menu-site > li > a {
	font-family:"Myriad Pro","Trebuchet MS","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size:15px;
	padding: 3px 0 8px 26px;
	height: 20px;
}
.elgg-menu-site > li > a:hover {
	text-decoration: none;
}
.elgg-menu-site-default {
  	text-align: right;
	position: relative;
    float: right;
    margin: -26px 0 20px 0;
}
.elgg-menu-site-default > li {
    display: inline-block;
	margin-right: 1px;
}
.elgg-menu-site-default > li > a {
    display: inline-block;
    color:#FFF;
}
.elgg-menu-site > li > ul {
    display: none;
    background-color: white;
}
.elgg-menu-site > li:hover > ul {
    display: block;
}
.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	color: #379ED0;
}
.elgg-menu-site-more {
	position: absolute;
	width: auto; 
	display: none;   
	text-align: left;
    background: #F9F9F9;
	border: 1px solid white;
    right: 0;

	min-width: 180px;
	padding: 4px 4px 4px 3px;

	-webkit-box-shadow: 1px 2px 5px 1px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 1px 2px 5px 1px rgba(0, 0, 0, 0.45);
	box-shadow: 1px 2px 5px 1px rgba(0, 0, 0, 0.45);
}
.elgg-menu-site-more > li > a {
	font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
	text-shadow: 1px 1px 0 white;
	padding: 6px 10px 6px 10px;
	border: 1px solid white;

	-webkit-box-shadow: 1px 1px 0 0 #e5e5e5;
	-moz-box-shadow: 1px 1px 0 0 #e5e5e5;
	box-shadow: 1px 1px 0 0 #e5e5e5;
}
.elgg-menu-site-more > li > a:hover {
	background: #F0F0F0;
}
.elgg-more a{
	cursor:pointer;
}
.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
    cursor: pointer;
}
/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 5px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	border: 1px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;	
}
.elgg-menu-filter > li:hover {
	background: #dedede;
}
.elgg-menu-filter > li > a {
	display: block;
	padding: 3px 10px 0 10px;
	text-align: center;
	height: 21px;
}
.elgg-menu-filter > li > a:hover {
	background: #dedede;
}
.elgg-menu-filter > .elgg-state-selected {
	border-color: #ccc;
}
.elgg-menu-filter > .elgg-state-selected > a {
	position: relative;
	top: 1px;
	background: #F9F9F9;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin: 5px;
	background: #f9f9f9;
	padding: 10px;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;
    
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.elgg-menu-page a {
	display: block;
	margin: 0 0 3px;
	padding: 2px 0 2px 0;
}
.elgg-menu-page a:hover {
	text-decoration: none;
}
.elgg-menu-page li.elgg-state-selected > a {
	color: #828E9C;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;
    
	overflow: hidden;

	min-width: 165px;
	max-width: 250px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFF;
	
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #ddd;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 4px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #ccc;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}

/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 4px;
}

/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #aaa;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}

/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 0 2px 0;
}
.elgg-menu-owner-block li a:hover {
	text-decoration: none;
}
.elgg-menu-owner-block li.elgg-state-selected > a {
	color: #828E9C;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 10px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	float: left;
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #aaa;
	height: 16px;
}
.elgg-river-summary {
	width:80%;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin: 5px;
	background: #f9f9f9;
	padding: 10px;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;
}

/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}
.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 10px;
    padding-top: 0;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 10px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 30px;
}
