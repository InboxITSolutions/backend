<?php  
require '../database/conn.php';
$query = mysql_query("SELECT * FROM admin") or die(mysql_error());
$row= mysql_fetch_assoc($query);
$name = $row['aname'];
echo $name;
?>