<?php

/**
 * Description: Main entry point
 * php version 7.4
 *
 * @category   Application
 * @package    BtcRelax
 * @subpackage Site
 * @author     god Jah <god@fastfen.club>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

$core_path = __DIR__ . '/vendor/autoload.php';
if (\file_exists($core_path)) {
    include_once $core_path;
    $core = \BtcRelax\Core::getIstance();
    $core->run();
} else {
    echo "You need to run: composer install ";
}
