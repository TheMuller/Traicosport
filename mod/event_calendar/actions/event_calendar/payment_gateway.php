<?php
//EPAY GATEWAY

elgg_load_library('elgg:event_calendar');

$event_guid = get_input('guid',0);
$user_guid = elgg_get_logged_in_user_guid();
$event = get_entity($event_guid);
if (elgg_instanceof($event,'object','event_calendar')) {
	
		
	
		//$merchantnumber = elgg_get_plugin_setting('merchantnumber', 'event_calendar');
		$merchantnumber = elgg_get_plugin_setting('merchantnumber', 'event_calendar');
		$amount = $event->fees*100;
		$currency = elgg_get_plugin_setting('currency', 'event_calendar');
		$windowstate = 3;
		
		$orderid = $event_guid . $user_guid;
		$secret = elgg_get_plugin_setting('md5secret', 'event_calendar');

		$url = 'https://ssl.ditonlinebetalingssystem.dk/integration/ewindow/Default.aspx';
		
		$params = array
		(
			'merchantnumber' => $merchantnumber,
			'amount' => $amount,
			'currency' => $currency,
			'orderid' => $orderid,
			'accepturl' => elgg_get_site_url() . 'event_calendar/payment/accept',
			'callbackurl' => elgg_get_site_url() . 'event_calendar/payment/callback',
			'cancelurl' => elgg_get_site_url() . 'event_calendar/payment/decline',
			'description' => 'Order'
		);
		
		$params['hash'] = md5(implode("", array_values($params)) . $secret);
	
		
		$query = http_build_query($params) . "\n";
		
		add_entity_relationship($user_guid, $orderid, $event_guid); 	
		
		forward($url . '?' . $query);
	
		/*if (event_calendar_send_event_request($event,$user_guid)) {
			system_message(elgg_echo('event_calendar:payment:success'));
		} else {
			register_error(elgg_echo('event_calendar:payment:error'));
		}
		*/
}

//forward(REFERER);
