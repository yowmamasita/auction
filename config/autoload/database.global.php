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
];

