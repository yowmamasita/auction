<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            Auction\Action\PingAction::class => Auction\Action\PingAction::class,
        ],
        'factories' => [
            Auction\Action\HomePageAction::class => Auction\Action\HomePageFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => Auction\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => Auction\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
