<?php

require __DIR__.'/vendor/autoload.php';

// $builder = new Curso\Db\Builder\SqlBuilder;
// $director = new Curso\Db\Builder\UsersDirector($builder);

// $sql = $director->getSqlAll();


// $builder = new Curso\Db\Builder\MySqlBuilder;
// $banks = new App\Model\Banks($builder);

// $sql = $banks->getSqlAll();

// var_dump($sql);

$builder = new Curso\Db\Builder\SqlBuilder;
$director = new Curso\Db\Builder\UsersDirector($builder);

// $pdo = new \PDO('mysql:host=localhost;dbname=laravelteste','root','123');
// $db = new Curso\Db\Db($pdo);
// $db->setDirector($director);

// $data = $db->getAll()->execute();
// var_dump($data->fetchAll());

$config = [
    'dsn' => 'mysql:host=localhost;dbname=laravelteste',
    'user' => 'root',
    'password' => '123'
];

Curso\Db\DbSingleton::configuration($config);
$db = Curso\Db\DbSingleton::getInstance();
$db->setDirector($director);

$data = $db->getAll()->execute();
var_dump($data->fetchAll());



