<?php

elgg_load_library('elgg:event_calendar');

$event_guid = get_input('event_guid');

if($event_guid){
$users = event_calendar_get_users_for_event($event_guid,999999,0,false);


 function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "attendings.xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  $i = 0;
  foreach($users as $row) {
	 $i++;
    if(!$flag) {
      // display field/column names as first row
      echo "ID\t Name \t Username \t Location \r\n";
      $flag = true;
    }
    //array_walk($row, 'cleanData');
   // echo $i . ' \n ' . $row->name . '\t '. $row->username . '\t ' . $row->location . '\t\n';
   echo "$i \t $row->name \t $row->username \t $row->location \r\n";
  }
  exit;
  
}