<?php
require '../../database/conn.php';

$id = $_GET['id'];

mysql_query("DELETE FROM slider WHERE sn=$id") or die(mysql_error());
header('Location:../slider');
?>