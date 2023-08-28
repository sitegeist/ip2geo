<?php

$EM_CONF['ip2geo'] = [
    'title' => 'Ip2geo Extension',
    'description' => 'Returns geo data based on IP - uses Maxmind databases (free/commercial)',
    'category' => 'plugin',
    'author' => 'SourceBroker Team',
    'author_email' => 'office@sourcebroker.dev',
    'author_company' => 'SourceBroker',
    'state' => 'stable',
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.9.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
