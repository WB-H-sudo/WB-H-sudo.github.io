<?php

// 取得瀏覽時間
$time = date("Y-m-d H:i:s");

// 取得訪客 IP
$ip = $_SERVER['REMOTE_ADDR'];

// 取得瀏覽頁面
$page = $_SERVER['REQUEST_URI'];


// 記錄內容
$log = "Time: ".$time.
       " | IP: ".$ip.
       " | Page: ".$page.
       PHP_EOL;


// 寫入 browser.txt
$file = "browser.txt";

file_put_contents(
    $file,
    $log,
    FILE_APPEND | LOCK_EX
);


echo "OK";

?>
