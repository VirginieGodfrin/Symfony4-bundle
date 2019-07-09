<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
// use Symfony\Component\DependencyInjection\Extension;

// the DependencyInjection système
// The super-power of a bundle is that it can automatically add services to the container, 
// without the user needing to configure anything.
class KnpULoremIpsumExtension extends Extension
{

	// This is really important. Whenever Symfony builds the container, it loops over all the bundles and, 
	// inside of each, looks for a DependencyInjection directory and then inside of that, 
	// a class with the same name of the bundle, but ending in Extension. 
	// Woh. If that class exists, it instantiates it and calls load(). 
	// This is our big chance to add any services we want! We can go crazy!
	// The $container variable is a container builder: something we can add services to.
    public function load(array $configs, ContainerBuilder $container)
    {
    	// Load the config file looks
    	// When the container builds, the load() method is called and our bundle adds its service.
    	var_dump($configs);die;
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}