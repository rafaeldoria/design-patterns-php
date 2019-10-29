<?php

namespace Curso\Db;

use PHPUnit\Framework\TestCase;

class DbTest extends TestCase
{
    public function testTestarSeAClasseEstaInstanciando()
    {
        $db = new Db;

        $this->assertInstanceOf('Curso\Db\Db', $db);
    }
}