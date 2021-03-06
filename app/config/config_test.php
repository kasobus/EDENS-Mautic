<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$loader->import("config.php");

$container->loadFromExtension("framework", array(
    "test"     => true,
    "session"  => array(
        "storage_id" => "session.storage.filesystem"
    ),
    "profiler" => array(
        "collect" => false
    ),
    'translator' => array(
        'enabled'  => false,
    ),
));

$container->loadFromExtension("web_profiler", array(
    "toolbar"             => false,
    "intercept_redirects" => false
));

$container->loadFromExtension("swiftmailer", array(
    "disable_delivery" => true
));

$container->loadFromExtension('doctrine', array(
    'dbal' => array(
        'default_connection' => 'default',
        'connections'        => array(
            'default' => array(
                'driver' => 'pdo_sqlite',
                'path'   =>  '%kernel.root_dir%/cache/test.db'
            )
        )
    )
));

$container->loadFromExtension('liip_functional_test', array(
    'cache_sqlite_db' => true
));

$loader->import("security_test.php");