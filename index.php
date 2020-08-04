<?php
    $core_path = __DIR__ . '/vendor/btcrelax/bitganj-core/src/core.php';
    if (\file_exists($core_path)) {
    $core = \BtcRelax\Core::getIstance();
    $core->run();
    } else {
        echo "You need to run: composer install ";
    } 
    
