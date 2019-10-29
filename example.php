<?php

require __DIR__.'/vendor/autoload.php';

$builder = new Curso\Db\Builder\SqlBuilder;
$director = new Curso\Db\Builder\UsersDirector($builder);

$sql = $director->getSqlAll();

var_dump($sql);



