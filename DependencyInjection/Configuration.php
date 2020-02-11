<?php
/*
* (c) Api Postcode <info@api-postcode.nl>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace ApiPostcode\PostcodeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * (c) Api Postcode <info@api-postcode.nl>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('api_postcode');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode->children()
                ->scalarNode('token')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}
