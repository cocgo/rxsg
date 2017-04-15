<?php

	if (!defined("MANAGE_INTERFACE")) exit;
	
	if (!isset($serial_list)){exit("param_not_exist");}
	if (!isset($opration_content)){exit("param_not_exist");}
	if (!isset($name)){exit("param_not_exist");}
	if (!isset($ticket_content)){exit("param_not_exist");}
	if (!isset($ticket_name)){exit("param_not_exist");}
	
	$tid = sql_fetch_one_cell("select `id` from sys_ticket_content where content='$ticket_content'");
	if(empty($tid))
	{
        $tid = sql_query("insert into sys_ticket_content (`content`,`name`) values ('$ticket_content','$ticket_name')");
    }
    $ret = '';
	foreach($serial_list as $serial)
	{
		$ret[] = sql_query("insert into sys_ticket (`code`,`contentid`) values ('$serial','$tid')");
		
	}
	sql_query("insert into adm_log (`adm_name`,`opration`,`opration_content`,`oprate_time`) values ('$name','verify_ticket','$opration_content',unix_timestamp())");
?>