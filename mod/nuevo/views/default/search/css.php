<?php
/**
 * Elgg Search css
 * 
 */
?>

/**********************************
Search plugin
***********************************/
.elgg-page-header .elgg-search {
	bottom: 5px;
	height: 23px;
	position: absolute;
	right: 0;
    top:39px;
}
.elgg-page-header .elgg-search input[type=text] {
	width: 150px;
}
.elgg-page-header .elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	border: 1px solid #4A4745;
	color: #8B8884;
	font-size: 12px;
	padding: 4px;
	background: #363433;
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	background-color: #F9F9F9;
	background: #ABA9A7;
	border: 1px solid #42403E;
    color:#000;

    -moz-box-shadow: 0 0 4px 2px #7E7976;
    -webkit-box-shadow: 0 0 4px 2px #7E7976;
    box-shadow: 0 0 4px 2px #7E7976;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
    text-shadow:1px 1px 0 #FFF;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
