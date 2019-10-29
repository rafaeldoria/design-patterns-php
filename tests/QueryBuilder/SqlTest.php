<?php

namespace Curso\Db\QueryBuilder;

use PHPUnit\Framework\TestCase;

class SqlTest extends TestCase
{
    public function testSelectQuery()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM users;', $query);
    }

    public function testSelectQuerycomColunasEmTexto()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals('SELECT username, password FROM users;', $query);
    }

    public function testSelectQuerycomColunasEmArray()
    {
        $sql = new Sql;
        $query = $sql->table('users')
            ->select(['username, password'])
            ->getQuery();

        $this->assertEquals('SELECT username, password FROM users;', $query);
    }
}