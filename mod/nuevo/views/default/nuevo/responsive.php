<?php

?>

/* ***************************************
	RESPONSIVE
*****************************************/

html {
    -webkit-text-size-adjust: none;
}

@media screen and (max-width: 1130px)  {
    #slide_container {
        max-width: 100%;
        height: auto;
    }
}/*/mediaquery*/

@media screen and (max-width: 1008px)  {
    #slide_container {
        width: 100%;
        height: auto;
    }
    .index_teaser .signin-text{
        width: auto;
        display: block;
        padding: 0 10px 10px;
    }
    .index_teaser .signin-button{
        display: block;
        text-align:center;
        float: none;
        clear: both;
        padding-right: 0;
    }
    .elgg-heading-site, .elgg-heading-site:hover {
        display: block;
        text-align:center;
    }
    .elgg-page-header .elgg-inner h2 {
        display:block;
        text-align:center;    
    }
    .elgg-page-header .elgg-search {
        top:25px;
        right: 10px;
    }
    #login-dropdown {
        right: 10px;
    }
    .elgg-page-header h1 {
        padding-top: 10px;
    }
    .elgg-page-default {
        width: 100%;
        min-width: 0;
    }
    .elgg-page-default .elgg-page-header > .elgg-inner {
        width: auto;
    }
    .elgg-page-default .elgg-page-body > .elgg-inner {
        width: auto;
    }
    .elgg-page-default .elgg-page-footer > .elgg-inner {
        width: auto;
        padding: 5px 10px;
    }
    .elgg-page-footer {
        width: auto;
    }
    .elgg-layout-one-sidebar .elgg-main {
        width: auto;
    }
    .elgg-sidebar {
        width: 88%;
        margin-left: 6%;
    }
    .two_column_left_sidebar_panel{
        width: 25.25%;
    }
    .elgg-layout-two-sidebar .elgg-main {
        width: auto;
    }
    .elgg-sidebar-alt {
        display: none;
    }
    .two_column_right_sidebar_panel{
        display: none;
    }
    .elgg-menu-site-default {
    	width: 100%;
    	margin: 0 auto;
        padding-bottom: 10px;
		text-align: center;
    }
    .elgg-main .elgg-output img {
    	max-width: 100%;
    } 
    .file-photo .elgg-photo {
		max-width: 98%;
    }
    .elgg-sidebar .elgg-module-avatar {
    	max-width: 94%;
        height: auto;
    }
    .elgg-sidebar .elgg-module-avatar .elgg-avatar-large > a > img {
    	max-width: 100%;
        height: auto;
    }
    .tidypics-photo {
    	max-width: 100%;
    }
    fieldset .elgg-module {
        width: auto;
    } 
}/*/mediaquery*/

@media only screen and (max-width: 768px) {
    .embed-wrapper {
        width: auto;
        margin: 0;
    }
    .elgg-main {
        margin: 0 0 10px 0;
    }
    .elgg-layout-one-sidebar .elgg-main {
        float: left;
    	display: block;
        width: 100%;
    }
    .elgg-layout-two-sidebar .elgg-main {
        float: left;
    	display: block;
        width: 100%;
    }
    .elgg-sidebar {
        display: block;
        float: none;
        margin: 0 15px 15px 15px;
        width: auto;
    }
    .two_column_left_sidebar_panel{
        width: 100%;
        margin: 0;
        padding-top: 15px;
    }
    .elgg-sidebar .elgg-module {
        width: auto;
    }
    .elgg-module-avatar {
		display: none;
    }
    .elgg-page-header .elgg-search {
        display: none;
    }
    .profile .elgg-inner {
        margin: 0;
    }
    /***** WIDGETS ******/
    .elgg-col-2of3,
    #elgg-widget-col-1,
    #elgg-widget-col-2,
    #elgg-widget-col-3 {
        width: 100%;
        min-height: 0 !important;
    }
    .elgg-module-widget .elgg-icon-delete-alt {
        display: none;
    }
    .elgg-widget-add-control {
    	display: none;
    }
    .elgg-widgets-add-panel {
    	display: none;
    }
    .elgg-module-widget {
        margin: 0 0 15px;
    }
    .elgg-menu-widget > .elgg-menu-item-settings {
        right: 20px;
    }
    .elgg-menu-entity {
    	margin-left: 0;
        vertical-align: right;  
        height: auto;
    }
    .elgg-menu-entity li {
        vertical-align: right; 
    }
    .elgg-page-default .elgg-page-footer > .elgg-inner {
        border-top: none;
    }
    .elgg-menu-footer-alt,
    .elgg-menu-footer-default,
    .elgg-page-footer .mts {
    	display: block;
        float: none;
        text-align: center;
    }
    #dashboard-info {
        margin-right: 0;
        margin-left: 0;
    }
}/*/mediaquery*/

@media screen and (max-width: 600px)  {
    #login-dropdown {
        position: static;
        text-align:center;
        top: 0;
        z-index: 100;
    }
    .elgg-button-dropdown {
		width: 100%;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;        
    }
    .elgg-button-dropdown.elgg-state-active {
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }
    .elgg-module-register {
        margin-left: 0;
        margin-right: 0;
        float: left;
    }
    .elgg-form-account{
        float: none;
        margin-right: 0;
    }
    .elgg-form-account input[type="text"],
    .elgg-form-account input[type="password"] {
        width: 100%;
    }
    #profile-owner-block {
    	border-right: none;
        width: auto;
    }
    #profile-details {
        display: block;
        float: left;
    }
    #dashboard-info {
        display: none;
    }
    .groups-profile-fields {
        float: left;
        padding-left: 0;
    }
    .groups-profile-fields .odd,
    .groups-profile-fields .even {
        padding: 0;
    }
    #groups-tools > li {
        width: auto;
        float: none;
        margin-bottom: 20px;
    }
    #groups-tools > li:nth-child(odd) {
        margin-right: 0;
    }
    #groups-tools > li:last-child {
        margin-bottom: 0;
    }
}/*/mediaquery*/

@media screen and (max-width: 480px)  {
    body {
        font-size: 90%;
    }
    .signin-text h1{
        font-size: 1.2em;
    }
    .elgg-likes {
        width: auto;
    }
    #notificationstable td.namefield {
        width: 20%;
    } 
    .tinymce-toggle-editor {
        display: none !important;
    }
    td.mceToolbar {
        display: none;
    }
    .file-photo .elgg-photo {
		max-width: 97%;
    }
}/*/mediaquery*/

@media screen and (max-width: 320px)  {
    .friends-picker-navigation-l {
        top: 70px;
    }
    .friends-picker-navigation-r {
        top: 70px;
    }
}/*/mediaquery*/
