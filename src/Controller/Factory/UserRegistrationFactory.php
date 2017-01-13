<?php
namespace HtUserRegistration\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use HtUserRegistration\Controller\UserRegistrationController;

class UserRegistrationFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllers)
    {
        $serviceLocator = $controllers->getServiceLocator();
        $userRegistrationService = $serviceLocator->get('HtUserRegistration\UserRegistrationService');

        return new UserRegistrationController($serviceLocator, $userRegistrationService);
    }
}
