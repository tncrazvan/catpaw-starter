<?php
require_once __DIR__.'/vendor/autoload.php';
use com\github\tncrazvan\CatPaw\Tools\Session;
use com\github\tncrazvan\CatPaw\Tools\G;
if(count($argv) === 2) $argv[2] = __DIR__."/http.json";
G::init($argv[2],false);
switch($argv[1]){
    case "mount":
        Session::mount();
    break;
    case "umount":
        Session::umount();
    break;
}