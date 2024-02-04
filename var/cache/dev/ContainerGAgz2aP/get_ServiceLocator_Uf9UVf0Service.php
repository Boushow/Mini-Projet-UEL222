<?php

namespace ContainerGAgz2aP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uf9UVf0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Uf9UVf0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Uf9UVf0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.XnVrACR', 'get_ServiceLocator_XnVrACRService', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.XnVrACR', 'get_ServiceLocator_XnVrACRService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.i9Y0h6B', 'get_ServiceLocator_I9Y0h6BService', true],
            'App\\Controller\\ArticleController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.NyLbAvG', 'get_ServiceLocator_NyLbAvGService', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.4Uu00Y_', 'get_ServiceLocator_4Uu00YService', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.4Uu00Y_', 'get_ServiceLocator_4Uu00YService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.7P87fGM', 'get_ServiceLocator_7P87fGMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.XnVrACR', 'get_ServiceLocator_XnVrACRService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.XnVrACR', 'get_ServiceLocator_XnVrACRService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.i9Y0h6B', 'get_ServiceLocator_I9Y0h6BService', true],
            'App\\Controller\\ArticleController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.NyLbAvG', 'get_ServiceLocator_NyLbAvGService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.4Uu00Y_', 'get_ServiceLocator_4Uu00YService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.4Uu00Y_', 'get_ServiceLocator_4Uu00YService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.RdVbGrJ', 'get_ServiceLocator_RdVbGrJService', true],
            'App\\Controller\\CategoryController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.7P87fGM', 'get_ServiceLocator_7P87fGMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::new' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::new' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:new' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:new' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
