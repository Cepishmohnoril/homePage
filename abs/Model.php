<?php

namespace homePage\abs;

abstract class Model
{
    private $id;

    public function __construct ($pageId)
    {
        $request = new \homePage\util\Request($this);
        $this->setId($pageId);
        $response = $request->getAllColumns();
        $this->setObject($response);
        return $this;
    }

    public function getTable ()
    {
        return $this->table;
    }

    public function getId ()
    {
        return $this->id;
    }

    public function setId ($id)
    {
        $this->id = $id;
    }
    
    public function deleteId ()
    {
        unset($this->id);
    }
}
