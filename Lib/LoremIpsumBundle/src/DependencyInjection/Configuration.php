<?php

namespace KnpU\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

// Creating the Configuration Class

class Configuration implements ConfigurationInterface
{
	// Here we're going to define the entire tree of valid config that can be passed to our bundle.
    public function getConfigTreeBuilder()
    {
    	// Building the Config Tree
    	$treeBuilder = new TreeBuilder();
    	$rootNode = $treeBuilder->root('knpu_lorem_ipsum');

    	//  just start building the config tree
    	$rootNode
            ->children()
                ->booleanNode('unicorns_are_real')->defaultTrue()->info('Whether or not you believe in unicorns')->end()
                ->integerNode('min_sunshine')->defaultValue(3)->info('How much do you like sunshine?')->end()
                ->scalarNode('word_provider')->defaultNull()->end()
                ->end()
            ;

        // At the end return the tree Builder
        return $treeBuilder;
    }
}