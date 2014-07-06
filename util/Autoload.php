<?php

autoload($_SERVER['DOCUMENT_ROOT']);
function autoload($dirname)
{
    $dir = scandir($dirname);

    foreach ($dir as $cell) {
        //Ignor list for autoload
        if ($cell == '.' ||
            $cell == '..' ||
            $cell == '.htaccess' ||
            $cell == 'index.php' ||
            $cell == 'autoload.php' ||
            $cell == 'public') {
            continue;
        }
        if (is_dir($dirname."/".$cell)) {
            autoload($dirname."/".$cell);
        } else {
            require_once($dirname."/".$cell);
        }
    }
}
