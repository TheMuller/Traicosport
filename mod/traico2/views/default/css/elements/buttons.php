<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */

/* Base */
.elgg-button {
	font-size: 12px;
	width: auto;
	padding: 1px 2px;
	cursor: pointer;
	outline: none;
	
}
a.elgg-button {
	padding: 3px 6px;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: white;
	text-decoration: none;
    font-weight: bold;
    font-size: 14px;
	background-color: #000000;
    padding: 3px;
}

.elgg-button-submit:hover {
	background-color: #333333;
	text-decoration: none;
	color: white;
}

.elgg-button-submit.elgg-state-disabled {
	background: #999;
	cursor: default;
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: white;
	text-decoration: none;
    font-weight: bold;
    font-size: 14px;
	background-color: #000000;
    padding: 3px;
}
.elgg-button-cancel:hover {
	background-color: #333333;
	text-decoration: none;
	color: white;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	background-color: #000000;
	color: white;
	padding: 1px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background-color: #000000;
	color: white;
	text-decoration: none;
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	background-color: #000000;
	color: white;
	text-decoration: none;
}
.elgg-button-delete:hover {
	background-color: #000000;
	color: white;
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:0px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: #ffffff;
	border:1px solid #AAAAAA;
	background:#AAAAAA;
	font-size:14px;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	background-color:#555555;
	text-decoration:none;
	border:1px solid #AAAAAA;
}

.elgg-button-dropdown.elgg-state-active {
	background: #AAAAAA;
	outline: none;
	color: #333;
	border:1px solid #AAAAAA;
}
