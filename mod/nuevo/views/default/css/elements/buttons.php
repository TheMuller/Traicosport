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
	font: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
    letter-spacing:0.1em;
	text-align: center;

	color: #FFFF;
	width: auto;
	padding: 3px 10px;
	cursor: pointer;
	outline: none;
}

/* **************************
	SUBMIT - CANCEL
************************** */

.elgg-button-submit:focus,
.elgg-button-cancel:focus,
.elgg-button-cancel,
.elgg-button-submit {
	background-color: #000000;
	color: white;
	padding: 3px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
    text-shadow: none;
}

.elgg-button-cancel:hover,
.elgg-button-submit:hover {
	color: white;
	background-color: #333333;
}

.elgg-button-submit.elgg-state-disabled {
	background-color: #333333;
}

/* **************************
	ACTION
************************** */
.elgg-button-action:focus,
.elgg-button-action {
	background-color: #000000;
	color: white;
	padding: 3px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
    text-shadow: none;
}
.elgg-button-action:hover{
	color: white;
	background-color: #333333;
	background-position: 0 -25px;
}


/* **************************
	DELETE
************************** */
.elgg-button-delete:focus,
.elgg-button-delete {
	background-color: #000000;
	color: white;
	padding: 3px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
    text-shadow: none;
}
.elgg-button-delete:hover {
	color: white;
	background-color: #F0735C;
	background-position: 0 -25px;
	text-decoration: none;
}


.elgg-button-special {
	background-color: #000000;
	color: white;
	padding: 3px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	cursor: pointer;
    text-shadow: none;
}

.elgg-button-dropdown {
	padding:5px 8px 5px 8px;
	text-decoration:none;
    background:#444444;
	font-weight:bold;
    text-shadow: none;
	position: relative;
	color:#C8C7C8;
    font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	color: #C8C7C8;
	background-color: #555555;
	text-decoration: none;
}

.elgg-button-dropdown.elgg-state-active {
	background: #ccc;
	outline: none;
	color: #333;
    text-shadow: none;
}