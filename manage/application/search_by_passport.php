<?php

	if (!defined("MANAGE_INTERFACE")) exit;
	
	if (!isset($passport)){exit("param_not_exist");}
	
	$user = sql_fetch_one("select * from sys_user u where passport='$passport' limit 1");
	$union_id = $user['union_id'];
	if($union_id==0)$unionname = '没有联盟';
	else $unionname=sql_fetch_one_cell("select name from sys_union where id=".$union_id);
	$user['unionname']=$unionname;
	$ret['paylog'] = sql_fetch_rows("select from_unixtime(time) as logtime,money from pay_log where passport='$passport' order by time desc");
	$ret['user']=$user;
?>