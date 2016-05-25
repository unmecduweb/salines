<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // le_list_entity
        if (0 === strpos($pathinfo, '/list') && preg_match('#^/list/(?P<entityAlias>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'le_list_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::listAction',));
        }

        // ll_edit_entity
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'll_edit_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::editAction',));
        }

        // ll_delete_entity
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'll_delete_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::deleteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
