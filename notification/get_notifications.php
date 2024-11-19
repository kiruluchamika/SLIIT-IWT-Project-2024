<?php 

require_once('./inc/config.php');

$sql = "SELECT * FROM notification";
$result = $conn->query($sql);

$notifications = [];

?>