<?php

namespace Curso\Db\Builder;

interface BuilderInterface
{
    public function setTable(string $table = null);
    public function getSqlAll(string $table = null);
}
