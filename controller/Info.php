<?php

namespace homePage\controller;

class Info extends \homePage\abs\Controller
{
    protected function getContent ()
    {
        $page = new \homePage\model\Page('2');
        return $page->getObjectDataAsArray();
    }

    protected function initView ($pageContent)
    {
        $view = new \homePage\view\Page();
        $view->render($pageContent);
    }
}
