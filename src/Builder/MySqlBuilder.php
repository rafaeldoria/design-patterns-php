<?php

namespace Curso\Db\Builder;

use Curso\Db\QueryBuilder\MySql;

class MySqlBuilder implements BuilderInterface
{   
    protected $query;

    public function __construct()
    {
        $this->query = new MySql;
    }
    public function setTable(string $table = null)
    {
        $this->query->table($table);
    }
    public function getSqlAll(string $table = null)
    {
        return $this->query->select()
            ->getQuery();
    }
}
