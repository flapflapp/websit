<?php
$ipAddress = $_GET['ip'] ?? '';
$file = fopen('ip_log.txt', 'a');
fwrite($file, $ipAddress . "\n");
fclose($file);
?>
