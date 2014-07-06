<?php

namespace homePage\util;

class Request
{
    private $conection;
    private $model;

    public function __construct($model)
    {
        $this->conection = new Sql();
        $this->model = $model;
    }

    public function getAllColumns()
    {
        $request = "SELECT * FROM ".$this->model->getTable()." WHERE id=".$this->model->getId();
        $response = $this->conection->query($request);
        return $response;
    }
}
