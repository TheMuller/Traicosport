<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Typography
*************************************** */
body {
	font-size: 80%;
    line-height:1.5;
	color: #4e4e4e;
	font-family: Arial, Helvetica, sans-serif;
}
a {
	color: #25769C;
	text-decoration: none;
}

a:hover,
a.selected { <?php //@todo remove .selected ?>
	color: #379ED0;
	text-decoration: none;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	
	background:#EBF5FF;
	color:#000000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */
	
}

pre {
	font-family:Monaco,"Courier New",Courier,monospace;
	font-size:12px;
	background:#EBF5FF;
	padding:3px 15px;
	margin:0px 0 15px 0;
	line-height:1.3em;
}

code {
	font-family:Monaco,"Courier New",Courier,monospace;
	font-size:12px;
	background:#EBF5FF;
	padding:2px 3px;
}

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding:3px 15px;
	margin:0px 0 15px 0;
	background:#EBF5FF;
	border:none;
}

h1, h2, h3, h4, h5, h6 {
	font-family:"Trebuchet MS","Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: bold;
	line-height: normal;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.4em; line-height: 1.1em; padding-bottom:5px}
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-heading-site, .elgg-heading-site:hover {
    text-shadow:1px 1px 0 #25769C;
	font-size:38px;
    letter-spacing:3px;
    color: #25769C;
	text-decoration: none;
}
.elgg-page-header h1 {
	padding-top: 24px;
}
.elgg-page-header h2{
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size: 14px;
    font-weight: normal;
    color: #8B8884;
    text-shadow: 1px 1px 0 #000000;
}

.elgg-heading-main {
    text-shadow:1px 1px 0 #FFF;
	float: left;
	max-width: 530px;
	margin-right: 10px;
}
.elgg-heading-basic {
	color: #454D57;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-subtext {
	color: #666666;
	font-size: 85%;
	line-height: 1.2em;
	font-style: italic;
}
.elgg-text-help {
	display: block;
	font-size: 85%;
	font-style: italic;
}

.elgg-quiet {
	color: #666;
}

.elgg-loud {
	color: #454D57;
}

/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.elgg-output {
	margin-top: 10px;
}

.elgg-output dt { font-weight: bold }
.elgg-output dd { margin: 0 0 1em 1em }

.elgg-output ul, .elgg-output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.elgg-output ul {
	list-style-type: disc;
}
.elgg-output ol {
	list-style-type: decimal;
}
.elgg-output table {
	border: 1px solid #ccc;
}
.elgg-output table td {
	border: 1px solid #ccc;
	padding: 3px 5px;
}
.elgg-output img {
	max-width: 100%;
    height: auto;
}