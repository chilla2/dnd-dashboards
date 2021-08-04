<?php

namespace Container9ZStSEB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_HttpBasic_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.http_basic.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\HttpBasicAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/HttpBasicAuthenticator.php';

        return $container->privates['security.authenticator.http_basic.main'] = new \Symfony\Component\Security\Http\Authenticator\HttpBasicAuthenticator('Secured Area', ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
    }
}
