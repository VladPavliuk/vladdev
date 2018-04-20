<?php

/**
 * Class Model
 * Every model should extends this class
 *
 */
class Model
{
    protected $dataBase = false;

    public function __construct()
    {
        $this->dataBase = DataBase::connect();
    }
}