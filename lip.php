<?php
$ipAddress = $_GET['ip'] ?? '';
$file = fopen('lip.txt', 'a');
fwrite($file, $ipAddress . "\n");
fclose($file);
?>
