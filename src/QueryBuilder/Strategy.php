<?php

namespace Curso\Db\QueryBuilder;

Interface Strategy
{
    public function table(string $table) : Strategy;
    public function select($collumns = '*') : Strategy;
    public function getQuery() : string;
}