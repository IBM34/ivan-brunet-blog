<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.cache_warmer.template_paths' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/CacheWarmer.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/TemplatePathsCacheWarmer.php';

return $this->services['templating.cache_warmer.template_paths'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(${($_ = isset($this->services['templating.finder']) ? $this->services['templating.finder'] : $this->load(__DIR__.'/getTemplating_FinderService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
