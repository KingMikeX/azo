<?php

namespace ContainerJSvK478;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegisterController' shared autowired service.
     *
     * @return \App\Controller\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RegisterController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/Helper/UserHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordAuthenticatedUserInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/User.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        $container->services['App\\Controller\\RegisterController'] = $instance = new \App\Controller\RegisterController($a, new \App\Service\Helper\UserHelper(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), $a, new \App\Entity\User()));

        $instance->setContainer(($container->privates['.service_locator.iRkeTRL'] ?? $container->load('get_ServiceLocator_IRkeTRLService'))->withContext('App\\Controller\\RegisterController', $container));

        return $instance;
    }
}