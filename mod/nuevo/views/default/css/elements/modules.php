/* ***************************************
	Modules
*************************************** */
.elgg-module {
	margin: 5px;
	background: #f9f9f9;
	padding:10px;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;    
	overflow: hidden;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #eaeaea;
	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info {
	width: auto;
}
.elgg-module-info > .elgg-head {
	background: #eee;
	padding: 5px;
	margin-bottom: 10px;
	border:1px solid #e7e8e9;
}
.elgg-module-info > .elgg-head * {
	color: #333;
}
/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 10px;
	
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {

}

/* Dropdown */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {

}
.elgg-module-featured > .elgg-head {

}
.elgg-module-featured > .elgg-head * {

}
.elgg-module-featured > .elgg-body {
	padding: 10px 0 0 0;
}

.elgg-module-featured .elgg-gallery li {
	padding: 0 4px 4px 0;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 1px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 200px;
	padding: 4px;
	background-color: #ccc;
	border: 1px solid #b0b0b0;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bcbcbc;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}
.elgg-module-widget {
	background:#f4f4f4;
	padding: 0;
	margin: 0 5px 15px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #F4F4F4;
	height: 30px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 4px 45px 0 25px;
	color: #4E4E4E;
    text-shadow:1px 1px 0 #fff;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: #c5c5c5;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #9d9d9d;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: #EEEEEE;
	width: 100%;
	overflow: hidden;
	border-top: 1px solid #dedede;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
	border-bottom: 1px solid #dedede;
	background-color: #f9f9f9;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 1px dashed #dedede;
	margin-bottom: 15px;
}
.elgg-widget-content .elgg-gallery,
.elgg-widget-content .elgg-tagcloud {
	margin:0;
	background: #f9f9f9;
	padding:10px;
	border:1px solid #fff;
	-webkit-box-shadow: 0 0 0 1px #dddddd;
	-moz-box-shadow: 0 0 0 1px #dddddd;
	box-shadow: 0 0 0 1px #dddddd;
}

.elgg-widget-content .elgg-gallery .elgg-avatar {
	margin:0 5px;
}