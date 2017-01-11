<?php
$conn = mysql_connect('localhost', 'root', '') or die('Connection error '.mysql_error());
$db = mysql_select_db('jamb') or die('Database not select'.mysql_error());
//$db = mysql_query($db) or die('Database not select'.mysql_error());

 