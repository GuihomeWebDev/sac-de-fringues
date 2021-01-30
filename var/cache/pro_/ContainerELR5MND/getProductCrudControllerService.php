<?php

namespace ContainerELR5MND;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\ProductCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ProductCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\ProductCrudController'] = $instance = new \App\Controller\Admin\ProductCrudController();

        $instance->setContainer(($container->privates['.service_locator.wRe7Baa'] ?? $container->load('get_ServiceLocator_WRe7BaaService'))->withContext('App\\Controller\\Admin\\ProductCrudController', $container));

        return $instance;
    }
}