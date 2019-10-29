<?php

namespace Curso\Db\Builder;

class UsersDirector implements DirectorInterface
{
    protected $builder;
    
    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
    }
    public function getSqlAll()
    {
        $this->builder->setTable('users');
        return $this->builder->getSqlAll();
    }
}
