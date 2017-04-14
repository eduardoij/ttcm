<?php
 	require_once("../config.php");
 	
 	$sql="SELECT COUNT(id) AS cont FROM  {$CFG->prefix}user ";
 	
 	$usr=$DB->get_record_sql($sql);
 	
 	echo $usr->cont;
?>
