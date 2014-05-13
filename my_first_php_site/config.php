<?php
$link = mysql_connect("localhost", "root", "");
$db=mysql_select_db("demo", $link);
//check connection establish or not remove comment
//echo mysql_errno($link);
?>