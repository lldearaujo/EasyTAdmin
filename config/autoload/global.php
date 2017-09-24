<?php
return [
    'db' => [
        'driver' => 'Pdo',
        'dsn' => sprintf('sqlite:%s/data/configuracoes.db', realpath(getcwd()))
    ]
];
