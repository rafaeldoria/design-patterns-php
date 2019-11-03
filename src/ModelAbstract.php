<?php

namespace Curso\Db;

use Curso\Db\Builder\DirectorAbstract;
use Curso\Db\Builder\BuilderInterface;

abstract class ModelAbstract extends DirectorAbstract
{
    protected $db;
    public function __construct(BuilderInterface $builder = null)
    {
        $this->db = \Curso\Db\DbSingleton::getInstance();
        $driver = $this->db->getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME);
        if($driver == 'mysql') {
            $builder = new Builder\MySqlBuilder;
        }else{
            $builder = new Builder\SqlBuilder;
        }
        parent::_contruct($builder);

        $this->db->setDirector($this);
    }

    public function getAll()
    {
        return $this->db->getAll()->execute();
    }
}