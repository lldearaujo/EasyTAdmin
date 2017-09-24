<?php
return [
    'db' => [
        'driver' => 'Pdo',
        'dsn' => sprintf('sqlite:%s/data/easyt.db', realpath(getcwd()))
    ]
];
