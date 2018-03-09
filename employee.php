<?php
//connect to the mysql
$db = @mysql_connect('localhost', 'root', 'usbw') or die("Could not connect database");
@mysql_select_db('test_db', $db) or die("Could not select database");

//database query
$sql = @mysql_query("select firstname,lastname from employee");

$rows = array();
while($r = mysql_fetch_assoc($sql)) {
  $rows[] = $r;
}

//echo result as json
echo json_encode($rows);
?>