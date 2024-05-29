<?php

namespace Piwik\Plugins\Myfirstplugin;

use Piwik\Menu\MenuMain;

class Menu extends \Piwik\Plugin\Menu
{
    public function configureMenu(MenuMain $menu)
    {
        $menu->add('Myfirstplugin', null, ['module' => 'Myfirstplugin', 'action' => 'index'], true, 30);
    }
}
