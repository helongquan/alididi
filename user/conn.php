<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("Could not connect:" .mysql_error());
}
mysql_select_db('db_wp2',$con) or die;
mysql_query('set names utf8');
?>