/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #CCC;
	
	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info > .elgg-head {
	padding: 5px;
	margin-bottom: 10px;
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
	padding: 5px;
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #333333;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	display:none;
	
	width: 210px;
	padding: 11px;
	margin-right: 0px;
	z-index:100;
	
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
	
}
.elgg-module-featured > .elgg-head {
	padding: 5px;
}
.elgg-module-featured > .elgg-head * {
	color: #333333;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
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
	margin: 0px 5px 15px 5px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #ddd;
	border: 2px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 0px 10px 3px 0px;
	width: 180px;
	padding: 5px 15px;
	background-color: #ccc;
	border: 2px solid #bbb;
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
	background-color: #bbb;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	background-color: #ddd;
	padding: 2px;
	margin: 0px 5px 15px 5px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #eee;
	height: 26px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 5px 45px 5px 20px;
	color: #666;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: #bbb;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #888;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: #fff;
	width: 100%;
	overflow: hidden;
	border-top: 2px solid #ddd;
}
.elgg-widget-edit {
	display: none;
	width: 92%;
	padding: 4%;
	border-bottom: 2px solid #ddd;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 2px dashed #ddd;
	margin-bottom: 15px;
}