<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Bluehost\\AccessToken' => $baseDir . '/inc/AccessToken.php',
    'Bluehost\\ResponseUtilities' => $baseDir . '/inc/ResponseUtilities.php',
    'Bluehost\\RestApi\\CachingController' => $baseDir . '/inc/RestApi/CachingController.php',
    'Bluehost\\RestApi\\MojoItemController' => $baseDir . '/inc/RestApi/MojoItemController.php',
    'Bluehost\\RestApi\\MojoItemsController' => $baseDir . '/inc/RestApi/MojoItemsController.php',
    'Bluehost\\RestApi\\MojoPluginsController' => $baseDir . '/inc/RestApi/MojoPluginsController.php',
    'Bluehost\\RestApi\\MojoServicesController' => $baseDir . '/inc/RestApi/MojoServicesController.php',
    'Bluehost\\RestApi\\MojoThemesController' => $baseDir . '/inc/RestApi/MojoThemesController.php',
    'Bluehost\\RestApi\\SettingsController' => $baseDir . '/inc/RestApi/SettingsController.php',
    'Bluehost\\RestApi\\StagingController' => $baseDir . '/inc/RestApi/StagingController.php',
    'Bluehost\\SiteMeta' => $baseDir . '/inc/SiteMeta.php',
    'Bluehost\\Staging' => $baseDir . '/inc/staging.php',
    'Bluehost\\UpgradeHandler' => $baseDir . '/inc/UpgradeHandler.php',
    'Bluehost\\WP\\Admin_App\\Errors' => $baseDir . '/inc/RestApi/class-bluehost-admin-errors.php',
    'Bluehost\\WP\\Admin_App\\Init' => $baseDir . '/inc/admin.php',
    'EIG_Module_Gutenframe' => $vendorDir . '/bluehost/endurance-wp-module-gutenframe/src/class-eig-module-gutenframe.php',
    'Endurance\\WP\\Module\\Data\\API\\Verify' => $vendorDir . '/endurance/wp-module-data/src/API/Verify.php',
    'Endurance\\WP\\Module\\Data\\Data' => $vendorDir . '/endurance/wp-module-data/src/Data.php',
    'Endurance\\WP\\Module\\Data\\Encryption' => $vendorDir . '/endurance/wp-module-data/src/Encryption.php',
    'Endurance\\WP\\Module\\Data\\Event' => $vendorDir . '/endurance/wp-module-data/src/Event.php',
    'Endurance\\WP\\Module\\Data\\EventManager' => $vendorDir . '/endurance/wp-module-data/src/EventManager.php',
    'Endurance\\WP\\Module\\Data\\HubConnection' => $vendorDir . '/endurance/wp-module-data/src/HubConnection.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\Admin' => $vendorDir . '/endurance/wp-module-data/src/Listeners/Admin.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\BHPlugin' => $vendorDir . '/endurance/wp-module-data/src/Listeners/BHPlugin.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\Content' => $vendorDir . '/endurance/wp-module-data/src/Listeners/Content.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\Jetpack' => $vendorDir . '/endurance/wp-module-data/src/Listeners/Jetpack.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\Listener' => $vendorDir . '/endurance/wp-module-data/src/Listeners/Listener.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\Plugin' => $vendorDir . '/endurance/wp-module-data/src/Listeners/Plugin.php',
    'Endurance\\WP\\Module\\Data\\Listeners\\Theme' => $vendorDir . '/endurance/wp-module-data/src/Listeners/Theme.php',
    'Endurance\\WP\\Module\\Data\\Logger' => $vendorDir . '/endurance/wp-module-data/src/Logger.php',
    'Endurance\\WP\\Module\\Data\\SubscriberInterface' => $vendorDir . '/endurance/wp-module-data/src/SubscriberInterface.php',
    'Endurance\\WP\\Module\\Data\\Transient' => $vendorDir . '/endurance/wp-module-data/src/Transient.php',
    'Endurance_Collection' => $vendorDir . '/bluehost/endurance-wp-module-loader/includes/Collection.php',
    'Endurance_ModuleManager' => $vendorDir . '/bluehost/endurance-wp-module-loader/includes/ModuleManager.php',
    'Endurance_ModuleRegistry' => $vendorDir . '/bluehost/endurance-wp-module-loader/includes/ModuleRegistry.php',
    'Endurance_Options' => $vendorDir . '/bluehost/endurance-wp-module-loader/includes/Options.php',
    'Endurance_WP_Plugin_Updater\\Plugin' => $vendorDir . '/bluehost/endurance-wp-plugin-updater/Plugin.php',
    'Endurance_WP_Plugin_Updater\\Updater' => $vendorDir . '/bluehost/endurance-wp-plugin-updater/Updater.php',
    'Pimple\\Container' => $vendorDir . '/pimple/pimple/src/Pimple/Container.php',
    'Pimple\\Exception\\ExpectedInvokableException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
    'Pimple\\Exception\\FrozenServiceException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
    'Pimple\\Exception\\InvalidServiceIdentifierException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
    'Pimple\\Exception\\UnknownIdentifierException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
    'Pimple\\Psr11\\Container' => $vendorDir . '/pimple/pimple/src/Pimple/Psr11/Container.php',
    'Pimple\\Psr11\\ServiceLocator' => $vendorDir . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
    'Pimple\\ServiceIterator' => $vendorDir . '/pimple/pimple/src/Pimple/ServiceIterator.php',
    'Pimple\\ServiceProviderInterface' => $vendorDir . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
    'Pimple\\Tests\\Fixtures\\Invokable' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
    'Pimple\\Tests\\Fixtures\\NonInvokable' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
    'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
    'Pimple\\Tests\\Fixtures\\Service' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
    'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
    'Pimple\\Tests\\PimpleTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
    'Pimple\\Tests\\Psr11\\ContainerTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Psr11/ContainerTest.php',
    'Pimple\\Tests\\Psr11\\ServiceLocatorTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Psr11/ServiceLocatorTest.php',
    'Pimple\\Tests\\ServiceIteratorTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/ServiceIteratorTest.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'wpscholar\\Composer\\GithubArchiveInstaller' => $vendorDir . '/wpscholar/github-archive-installer/src/GithubArchiveInstaller.php',
);