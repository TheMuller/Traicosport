<?php
/**
 * CSS form/input elements
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Form Elements
*************************************** */

fieldset > div {
	margin-bottom: 15px;
}
fieldset .elgg-module {
	width: 630px;
	margin: 5px 0;
}
.elgg-form .friends-picker {
	width: 650px;
}
fieldset > div:last-child {
	margin-bottom: 0;
}
.elgg-form-alt > fieldset > .elgg-foot {
	padding: 10px 0;
}
.elgg-form-login label{
	font-weight:normal;
}
.elgg-form-login fieldset label.right{
	margin-top:2px;
}
label {
	font-weight: bold;
	color: #333;
	font-size: 110%;
}
input, textarea {
	border: 1px solid #cccccc;
	color:#666666;
	font: 120% Arial, Helvetica, sans-serif;
	padding: 5px;
	width: 100%;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

input[type=text]:focus, textarea:focus {
	border: solid 1px #84A2B6;
	background-color: #ECF1F4;
	color:#333;
}
textarea {
	height: 200px;
}
.elgg-longtext-control {
	float: right;
	margin-left: 14px;
	font-size: 80%;
	cursor: pointer;
}
.elgg-input-access {
	margin:5px 0 0 0;
}

input[type="checkbox"],
input[type="radio"] {
	margin:0 3px 0 0;
	padding:0;
	border:none;
	width:auto;
}
.elgg-input-checkboxes.elgg-horizontal li,
.elgg-input-radio.elgg-horizontal li {
	display: inline;
	padding-right: 10px;
}

.elgg-form-account input[type="text"],
.elgg-form-account input[type="password"] {
	width: 300px;
}
.elgg-form-account{
	float:left;
	margin-right: 40px;
}
.elgg-form-login, .elgg-form-account {
	max-width: 450px;
}

/* ***************************************
	FRIENDS PICKER
*************************************** */
.friends-picker-main-wrapper {
	margin-bottom: 0;
    overflow: hidden;
}
.friends-picker-container h3 {
	font-size:4em !important;
	text-align: left;
	margin:10px 0 20px !important;
	color:#999 !important;
	background: none !important;
	padding:0 !important;
}
.friends-picker .friends-picker-container .panel ul {
	text-align: left;
	margin: 0;
	padding:0;
}
.friends-picker-wrapper {
	margin: 0;
	padding: 0;
	position: relative;
}
.friends-picker {
	position: relative;
	overflow: hidden;
	background: #eeeeee;
	border: 1px solid #e7e8e9;
	margin: 0;
    padding: 0;
	width: auto;
	height: auto;
    float: left;
}
.friendspicker-savebuttons {
	margin:0 10px 10px 0;
}
.friends-picker .friends-picker-container { /* long container used to house end-to-end panels. Width is calculated in JS  */
	position: relative;
	left: 0;
	top: 0;
	width: 100%;
	list-style-type: none;
}
.friends-picker .friends-picker-container .panel {
	float:left;
	height: 100%;
	position: relative;
	width: 730px;
	margin: 0;
	padding: 0;
}
.friends-picker .friends-picker-container .panel .wrapper {
	margin: 0;
	padding: 4px 10px 10px 10px;
	min-height: 230px;
}
.friends-picker-navigation {
	width: auto;
	margin-top: 10px;
	height: 30px;
}
.friends-picker-navigation ul {
	list-style: none;
	padding-left: 0;
}
.friends-picker-navigation ul li {
	float: left;
	margin: 0;
}
.friends-picker-navigation a {
	font-weight: bold;
	text-align: center;
	text-decoration: none;
	display: block;
	padding: 0;
	width: 20px;
}
.tabHasContent {
    color:#F3A72C !important;
}
.friends-picker-navigation li a:hover {
    text-shadow:none;
	background: #333;
	color:white !important;
}
.friends-picker-navigation li a.current {
    text-shadow:none;
	background: #333;
	color:white !important;
}
.friends-picker-navigation-l, .friends-picker-navigation-r {
	position: absolute;
	text-indent: -9000em;
}
.friends-picker-navigation-l a, .friends-picker-navigation-r a {
	display: block;
	height: 40px;
	width: 42px;
}
.friends-picker-navigation-l {
	top: 50px;
	right: 48px;
	z-index:1;
}
.friends-picker-navigation-r {
	top: 50px;
	right: 0;
	z-index:1;
}
.friends-picker-navigation-l {
	background: url("<?php echo elgg_get_site_url(); ?>mod/nuevo/graphics/friendspicker.png") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("<?php echo elgg_get_site_url(); ?>mod/nuevo/graphics/friendspicker.png") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("<?php echo elgg_get_site_url(); ?>mod/nuevo/graphics/friendspicker.png") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("<?php echo elgg_get_site_url(); ?>mod/nuevo/graphics/friendspicker.png") no-repeat -60px -44px;
}
.friendspicker-savebuttons .elgg-button-submit,
.friendspicker-savebuttons .elgg-button-cancel {
	margin:5px 20px 5px 5px;
}
#friendspicker-members-table {
	margin:20px 0 0 0;
	background: #f9f9f9;
    padding: 30px 30px 30px 30px;
	border: 1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;
    border-collapse: collapse;	
}
#friendspicker-members-table td{
    padding: 10px;
}

/* ***************************************
	USER PICKER
*************************************** */

.user-picker .user-picker-entry {
	clear:both;
	height:25px;
	padding:5px;
	margin-top:5px;
	border-bottom:1px solid #cccccc;
}
.user-picker-entry .elgg-button-delete {
	margin-right:10px;
}
/* ***************************************
      DATE PICKER
**************************************** */
.ui-datepicker {
	margin-top: 3px;
	background-color: white;
	border: 1px solid #0054A7;

	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	overflow: hidden;
}

.ui-datepicker-header {
	background: #4690D6;
	color: white;
	padding: 2px 0;
	border-bottom: 1px solid #0054A7;
}
.ui-datepicker-header a {
	color: white;
}
.ui-datepicker-prev, .ui-datepicker-next {
    position: absolute;
    top: 5px;
	cursor: pointer;
}
.ui-datepicker-prev {
    left: 6px;
}
.ui-datepicker-next {
    right: 6px;
}
.ui-datepicker-title {
    line-height: 1.8em;
    margin: 0 30px;
    text-align: center;
	font-weight: bold;
}
.ui-datepicker-calendar {
	margin: 4px;
}
.ui-datepicker th {
	color: #454D57;
	border: none;
    font-weight: bold;
    padding: 5px 6px;
    text-align: center;
}
.ui-datepicker td {
	padding: 1px;
}
.ui-datepicker td span, .ui-datepicker td a {
    display: block;
    padding: 2px;
	line-height: 1.2em;
    text-align: right;
    text-decoration: none;
}
.ui-datepicker-calendar .ui-state-default {
	border: 1px solid #ccc;
    color: #454D57;
	background: #fafafa;
}
.ui-datepicker-calendar .ui-state-hover {
	border: 1px solid #aaa;
    color: #454D57;
	background: #eee;
}
.ui-datepicker-calendar .ui-state-active,
.ui-datepicker-calendar .ui-state-active.ui-state-hover {
	font-weight: bold;
    border: 1px solid #454D57;
    color: #454D57;
	background: #EAEAEA;
}
