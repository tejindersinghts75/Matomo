<?php

namespace Piwik\Plugins\Myfirstplugin;

use Piwik\Common;
use Piwik\View;

class Controller extends \Piwik\Plugin\Controller
{
    public function index()
    {
        $view = new View('@Myfirstplugin/index.twig');
        $view->myVariable = 'Hello, world!';
        return $view->render();
    }
}
