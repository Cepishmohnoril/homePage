<?php

namespace homePage\controller;

class About extends \homePage\abs\Controller
{
    protected function getContent ()
    {
        $page = new \homePage\model\Page('3');
        return $page->getObjectDataAsArray();
    }

    protected function initView ($pageContent)
    {
        $view = new \homePage\view\Page();
        $view->render($pageContent);
    }
}
