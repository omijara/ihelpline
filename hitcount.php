<?php

$open = fopen("hits.txt", "r+");
$value = fgets($open);
$close = fclose($open);

$value++;

    session_start();
    if(empty($_SESSION['visited']){
        $counter = file_get_contents('./hits.txt') + 1;
        file_put_contents('./hits.txt', $counter);
    }
    $_SESSION['visited'] = TRUE;
?>