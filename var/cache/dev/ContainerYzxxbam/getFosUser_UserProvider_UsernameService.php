<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.user_provider.username' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Security/UserProvider.php';

return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load(__DIR__.'/getFosUser_UserManagerService.php')) && false ?: '_'});
