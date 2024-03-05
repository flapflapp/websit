<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
$date_time = date('Y-m-d H:i:s');
$log_entry = "$date_time - $ip_address" . PHP_EOL;
$log_file = 'lip.txt';
file_put_contents($log_file, $log_entry, FILE_APPEND);
header('Location: thank-you.html');
exit;
?>
