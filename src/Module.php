<?php

namespace T4web\Paginator;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig($env = null)
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
