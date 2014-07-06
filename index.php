<?php
namespace homePage;

require_once($_SERVER['DOCUMENT_ROOT']."/util/Autoload.php");
$router = new util\Router($_SERVER['REQUEST_URI']);
