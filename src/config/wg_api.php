<?php

return [
    'application_id' => env('WG_APP_ID', 'demo'),
    'redirect_uri' => env('WG_REDIRECT', 'https://api.worldoftanks.ru/wot//blank/'),
    'url' => [
        'protocol' => 'https://',
        'sub' => [
            'pc' => 'api',
            'console' => [
                'xbox' => 'api-xbox-console',
                'ps4' => 'api-ps4-console',
            ]
        ],
        'domains' => [
            'pc' => [
                'wot' => [
                    'domain' => 'worldoftanks',
                    'regions' => ['ru', 'eu', 'na', 'asia'],
                    'region' => 'ru',
                ],
                'wotb' => [
                    'domain' => 'wotblitz',
                    'regions' => ['ru', 'eu', 'na', 'asia'],
                    'region' => 'ru',
                ],
                'wows' => [
                    'domain' => 'worldofwarships',
                    'regions' => ['ru', 'eu', 'na', 'asia'],
                    'region' => 'ru',
                ],
                'wowp' => [
                    'domain' => 'worldofwarplanes',
                    'regions' => ['ru', 'eu', 'na'],
                    'region' => 'ru',
                ],
                'wgn' => [
                    'domain' => 'worldoftanks',
                    'regions' => ['ru', 'eu', 'na', 'asia'],
                    'region' => 'ru',
                ],
            ],
            'console' => [
                'xbox' => [
                    'wotx' => [
                        'domain' => 'worldoftanks',
                        'regions' => ['com'],
                        'region' => 'com',
                    ],
                ],
                'ps4' => [
                    'wotx' => [
                        'domain' => 'worldoftanks',
                        'regions' => ['com'],
                        'region' => 'com',
                    ],
                ],
            ],
        ],
    ],
];
