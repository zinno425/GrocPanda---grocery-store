




<?php
$host_name = 'www.google.com';
$port_no = '80';

$st = (bool)@fsockopen($host_name, $port_no, $err_no, $err_str, 10);
if ($st) {
    echo '';
} else {
    echo "<script type='text/javascript'>  window.open('connection.php','_self');</script>";
}
?>

