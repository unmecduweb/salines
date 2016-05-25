<?php

namespace LL\CoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ll_core');

        $rootNode->children()
                ->arrayNode('menus')
                    ->useAttributeAsKey('alias')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('beautyName')->end()
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('entities')
                        ->useAttributeAsKey('alias')
                        ->prototype('array')
                            ->children()
                                ->scalarNode('beautyName')->end()
                                ->scalarNode('menu')->end()
                                ->scalarNode('class')->end()
                                ->scalarNode('form')->end()
                                ->scalarNode('views')->defaultValue('default')->end()
                                ->scalarNode('menuIntegrable')->end()
                                ->scalarNode('unique')
                                    ->defaultValue(false)
                                ->end()
                                ->arrayNode('listProperties')
                                    ->useAttributeAsKey('alias')
                                    ->prototype('array')
                                        ->children()
                                            ->scalarNode('dataName')->end()
                                            ->scalarNode('beautyName')->end()
                                            ->scalarNode('type')->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end();
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
