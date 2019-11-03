<?php

require __DIR__ . '/vendor/autoload.php';

$builder = new Curso\Db\Builder\SqlBuilder;
$director = new Curso\Db\Builder\UsersDirector($builder);

$config = [
    'dsn' => 'mysql:host=localhost;dbname=laravelteste',
    'user' => 'root',
    'password' => '123'
];

Curso\Db\DbSingleton::configuration($config);
