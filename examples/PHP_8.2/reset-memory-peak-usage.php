<?php
$string = str_repeat('a', 1024 * 1024 * 4);
memory_get_peak_usage(); // 4590752

unset($string);
memory_reset_peak_usage();

$string = str_repeat('a', 1024 * 1024 * 3);
memory_get_peak_usage(); // 3542648
