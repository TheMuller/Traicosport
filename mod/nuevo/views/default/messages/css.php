<?php
/**
 * Elgg Messages CSS
 * 
 * @package ElggMessages
 */
?>
/* ***************************************
	List
*************************************** */
.messages-container .elgg-list > li {

}

.messages-container {
	min-height: 200px;
}
.message.unread a {
	color: #d40005;
}
.messages-buttonbank {
	text-align: right;
}
.messages-buttonbank input {
	margin-left: 10px;
}

/*** message metadata ***/
.messages-owner {
	float: left;
	width: 20%;
	margin-right: 2%;
}
.messages-subject {
	font-weight:bold;
	float: left;
	width: 50%;
	margin-right: 2%;
}
.message.unread .messages-timestamp {
	color: #d40005;
}
.messages-timestamp {
	float: left;
	width: 19%;
	margin-right: 2%;
}
.messages-delete {
	float: left;
	width: 5%;
}
/*** topbar icon ***/
.messages-new {
	color: white;
	background-color: red;
    text-shadow: none;
	
	-webkit-border-radius: 10px; 
	-moz-border-radius: 10px;
	border-radius: 10px;
	
	-webkit-box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	
	position: absolute;
	text-align: center;
	top: 4px;
	left: 64px;
	min-width: 16px;
	height: 16px;
	font-size: 10px;
	font-weight: bold;
}
