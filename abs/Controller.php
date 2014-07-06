<?php

namespace homePage\abs;

abstract class Controller
{
    public function init()
    {
        $pageContent = $this->getContent();
        $this->initView($pageContent);
    }
}
