<?php

namespace T4web\Paginator;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ViewModelAbstractFactory implements AbstractFactoryInterface
{
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $namespaceParts = explode('\\', $requestedName);

        return count($namespaceParts) == 4
            && $namespaceParts[3] == 'Paginator'
            && $namespaceParts[2] == 'ViewModel';
    }

    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $namespaceParts = explode('\\', $requestedName);

        $module = $namespaceParts[0];
        $entity = $namespaceParts[1];

        $moduleEntityNamespace = ucfirst($module) . "\\" . ucfirst($entity);
        $repository = $serviceLocator->get($moduleEntityNamespace . "\\Infrastructure\\Repository");

        return new ViewModel($repository);
    }
}
