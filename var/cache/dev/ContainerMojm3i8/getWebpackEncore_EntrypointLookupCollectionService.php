<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'webpack_encore.entrypoint_lookup_collection' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollectionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollection.php';

return $this->services['webpack_encore.entrypoint_lookup_collection'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection(new \Symfony\Component\DependencyInjection\ServiceLocator(['_default' => function () {
    return ${($_ = isset($this->services['webpack_encore.entrypoint_lookup[_default]']) ? $this->services['webpack_encore.entrypoint_lookup[_default]'] : $this->load('getWebpackEncore_EntrypointLookupDefaultService.php')) && false ?: '_'};
}]));
