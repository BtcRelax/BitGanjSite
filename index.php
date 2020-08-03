<?php
    declare(strict_types=1);
    require __DIR__ . '/vendor/btcrelax/bitganj-core/src/core.php';
    $core = \BtcRelax\Core::getIstance();
    $core->run();
