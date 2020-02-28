<?php
ini_set('display_errors', true);

require_once('header.php');

$url = $_SERVER['REQUEST_URI'];

switch (true) {
    case $url === '/home':
        // home表示
        require_once('home.php');
        break;
    
    default:
        // 404 Not Found
        echo '404 Not Found.';
        echo '<br>';
        echo $url;
        // ToDo: Headerにも404
        //       404.phpみたいなの
        break;
}