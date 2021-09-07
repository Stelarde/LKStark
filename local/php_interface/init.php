<?php

Bitrix\Main\Loader::includeSharewareModule("eeeeee.tips"); 
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/autoload.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/autoload.php");
    
require_once(__DIR__.'/const.php');
require_once(__DIR__.'/events.php');
require_once(__DIR__.'/functions.php');


require_once(__DIR__.'/classes/highloadblock/HighloadblockObject.php');
require_once(__DIR__.'/classes/highloadblock/HighloadblockMethod.php');


