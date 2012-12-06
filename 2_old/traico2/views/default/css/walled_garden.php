<?php
/**
 * Walled garden CSS
 */

$url = elgg_get_site_url();

?>

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
.elgg-module-walledgarden > .elgg-head {
	height: 17px;
    background-color: #FFFFFF;
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

}
.elgg-walledgarden-double > .elgg-foot {

}
.elgg-walledgarden-single > .elgg-head {

}
.elgg-walledgarden-single > .elgg-body {

}
.elgg-walledgarden-single > .elgg-foot {

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
	color: #379ED0;
	margin-top: 60px;
	line-height: 1.1em;
}
/* holly hack for IE to get position:bottom right
   see: http://www.positioniseverything.net/abs_relbugs.html
\*/

#view_header {
	clear:both;
	float:left;
	width:100%;
    height:35px;
}

/* column container */
.colmask {
	position:relative;	/* This fixes the IE7 overflow hidden bug */
	clear:both;
	float:left;
	width:100%;			/* width of whole page */
	overflow:hidden;		/* This chops off any overhanging divs */
}
/* common column settings */
.colright,
.colmid,
.colleft {
	float:left;
	width:100%;			/* width of page */
	position:relative;
}
.col1,
.col2,
.col3,
.col1p,
.col2p {
	float:left;
	position:relative;
	padding:0 0 1em 0;	/* no left and right padding on columns, we just make them narrower instead
					only padding top and bottom is included here, make it whatever value you need */
	overflow:hidden;
}
/* 2 Column (right menu) settings */
/*.rightmenu {
	background:#eee;		 right column background colour
}*/
.rightmenu .colleft {
	right:40%;			/* right column width */
	background:#fff;		/* left column background colour */
}
.rightmenu .col1 {
	width:56%;			/* left column content width (left column width minus left and right padding) */
	left:42%;			/* (right column width) plus (left column left padding) */
}
.rightmenu .col2 {
	width:36%;			/* right column content width (right column width minus left and right padding) */
	left:46%;			/* (right column width) plus (left column left and right padding) plus (right column left padding) */
}
/* 2 Column (right menu clubs and facilities) settings */
.rightmenu .col1p {
	width:80%;			/* left column content width (left column width minus left and right padding) (75%-2*2% = 71%) */
}
.rightmenu .col2p {
	width:18%;			/* right column content width (right column width minus left and right padding) (25%-2*2% = 21%) */
    padding-left: 2%;
}
/* 3 Column settings */
.threecol {
	/*background:#eee;		 right column background colour */
}
.threecol .colmid {
	right:35%;			/* width of the right column 25% */
	/*background:#fff;		 center column background colour */
}
.threecol .colleft {
	right:40%;			/* width of the middle column 50% */
	/*background:#f4f4f4;	 left column background colour */
}
.threecol .col1 {
	width:36%;			/* width of center column content (column width minus padding on either side) 50-2-2=46% */
	left:102%;			/* 100% plus left padding of center column */
}
.threecol .col2 {
	width:21%;			/* Width of left column content (column width minus padding on either side) 25-2-2=21% */
	left:41%;			/* width of (right column) plus (center column left and right padding) plus (left column left padding) 25+2+2+2=31% */
}
.threecol .col3 {
	width:31%;			/* Width of right column content (column width minus padding on either side) 25-2-2=21% */
	left:85%;			/* Please make note of the brackets here:
					(100% minus left column width) plus (center column left and right padding) plus (left column left and right padding) plus (right column left padding)
                    100-25+2+2+2+2+2 */
}
/* Footer styles */
#view_footer {
	clear:both;
	float:left;
	width:100%;
	margin-bottom:10px;
    text-align:center;
}
#view_footer ul {
    margin: 20px 0;
}
#view_footer li {
    display: inline;
    list-style-type: none;
    padding-right: 20px;
    color: #333333;
}
#view_footer li a {
    font-size: 12px;
    text-decoration: none;
    color: #666666;
}
#view_footer li a:hover {
    font-size: 12px;
    text-decoration: none;
    color: #AAAAAA;
}
* {
	margin:0;
	padding:0;
	list-style:none;
}

#basic-accordian{
	padding:5px;
	width:360px;
}

.tab_container .accordion_headings{
	padding:5px;
	background:#222222;
	color:#FFFFFF;
	border:1px solid #FFF;
	cursor:pointer;
	font-weight:bold;
}

.tab_container .accordion_headings a{
    font-size:12px;
	padding:5px;
	color:#FFFFFF;
	cursor:pointer;
	font-weight:bold;
    text-decoration: none;
}

.tab_container .accordion_headings a.active{
    font-size:12px;
	color:#CCCCCC;
}

.tab_container .accordion_headings:hover{
	background:#000000;
}
.panel-container{
	padding-top:35px;
}
.accordion_child{
	padding:15px;
	background:#EEE;
    width:305px;
}

.header_highlight{
	background:#000000;
}

.tab_container *{
	float:left;
	width:100px;
}
#bottomslide {
    background-color:#222222;
    margin-bottom: 0;
    width:100%;
}
#slider .heading a{
    background-image:url('http://www.traicosport.com/images/front_functions_text_da.png');
    text-align:center;
    padding-top:30px;
    height:100px;
    background-color:#222222;
}
#landingFocusTop {
    background-color:#FFFFFF;
    height:100px;
    width:100%;
}
div#landingFocusTopBox {
    margin: 5px auto 50px;
    width: 940px;
}
div#landingFocusTopBox div.featureBox {
    text-align:center;
    width: 220px;
    margin-top: 20px;
    float: left;
}
div#landingFocusTopBox div.featureBox p {
    width: 150px;
    float: left;
}
.register a {
    color:#379ED0;
    font-size:20px;
    text-decoration:none;
    font-weight:bold;
}
.register .link {
    font-weight:normal;
    text-decoration:underline;
}
div#landingFocusTopBox div.featureBox .button {
    background-color: #000000;
    color: white;
    font-size: 14px;
    font-weight: bold;
    padding: 3px;
    text-decoration: none;
    margin-left:20px;
}
#landingFocus {
    background-color:#222222;
    height:200px;
    width:100%;
}
div#landingFocusContent {
    margin: 10px auto 50px;
    width: 940px;
}
div#landingFocusContent div.featureBox {
    text-align: justify;
    width: 250;
    margin-top: 20px;
}
div#landingFocusContent div.featureBox h1 {
    color: #FFFFFF;
    font: bold 16px Arial;
    margin-bottom: 7px;
    padding-left: 52px;
}
div#landingFocusContent div.featureBox p {
    color: #9A9A9A;
    font: 13px Arial;
    text-shadow: 1px 1px 1px #1A1A1A;
}
div#landingFocusContent div.featureBox ul li {
    color: #9A9A9A;
    font-family: Arial;
    font-size: 12px;
    margin-bottom: 7px;
    text-shadow: 1px 1px 1px #1A1A1A;
    text-align:left;
}
div#landingFocusContent div.featureBox li {
    color: #595959;
    font: 13px Arial;
    height: 7px;
    padding-top: 0px;
}
div#landingFocusContent div#feature1 {
    background: url("http://www.traicosport.com/images/front-1.png") no-repeat scroll left top transparent;
    float: left;
}
div#landingFocusContent div#feature2 {
    background: url("http://www.traicosport.com/images/front-2.png") no-repeat scroll left top transparent;
    float: left;
    margin-left: 60px;
}
div#landingFocusContent div#feature3 {
    background: url("http://www.traicosport.com/images/front-3.png") no-repeat scroll left top transparent;
    float: left;
    margin-left: 60px;
}
div#landingFocusContent div#feature4 {
    background: url("../img/landing/feature_4.png") no-repeat scroll left top transparent;
    float: right;
}