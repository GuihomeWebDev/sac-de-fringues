<?php

namespace ContainerJsY0BVp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegisterType' shared autowired service.
     *
     * @return \App\Form\RegisterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RegisterType.php';

        return $container->privates['App\\Form\\RegisterType'] = new \App\Form\RegisterType();
    }
}
