<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 08/01/2017
 * Time: 2:45 AM
 */

return [
    'dependencies' => [
        'factories' => [
            \Doctrine\ORM\EntityManager::class => \Auction\Factory\EntityManagerFactory::class,
        ],
    ],
    'doctrine' => [
        'params' => [
            'url'      => getenv('AUCTION_DSN'),
            'charset'  => 'utf8mb4',
            'driver'   => 'pdo_mysql',
        ],
        'dev_mode' => getenv('AUCTION_DEBUG'),
        'mapping_directories' => [
            __DIR__ . '/../../mapping/ORM/',
        ],
    ],
];

