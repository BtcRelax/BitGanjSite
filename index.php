<?php
    $core_path = __DIR__ . '/vendor/autoload.php';
    if (\file_exists($core_path)) {
        include_once $core_path;
        $core = \BtcRelax\Core::getIstance();
        $core->run();
    } else {
        echo "You need to run: composer install ";
    }
