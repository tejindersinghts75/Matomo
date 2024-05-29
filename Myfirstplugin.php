<?php

namespace Piwik\Plugins\Myfirstplugin;

use Piwik\Plugin;

class Myfirstplugin extends Plugin
{
    public function registerEvents()
    {
        return [
            'Tracker.recordAction' => 'recordAction'
        ];
    }

    public function recordAction(&$request)
    {
        // Custom logic for the event
    }

    public function install()
    {
        // Code to execute when the plugin is installed
        // For example, you might want to create necessary tables or do other setup tasks
    }

    public function uninstall()
    {
        // Code to execute when the plugin is uninstalled
        // For example, you might want to drop tables or clean up resources
    }
}
