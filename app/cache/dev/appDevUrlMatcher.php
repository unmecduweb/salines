<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/c86df20')) {
            // _assetic_c86df20
            if ($pathinfo === '/css/c86df20.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c86df20',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c86df20',);
            }

            if (0 === strpos($pathinfo, '/css/c86df20_part_1_')) {
                // _assetic_c86df20_0
                if ($pathinfo === '/css/c86df20_part_1_forms_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c86df20',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c86df20_0',);
                }

                if (0 === strpos($pathinfo, '/css/c86df20_part_1_jquery.dataTables')) {
                    // _assetic_c86df20_1
                    if ($pathinfo === '/css/c86df20_part_1_jquery.dataTables.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c86df20',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c86df20_1',);
                    }

                    // _assetic_c86df20_2
                    if ($pathinfo === '/css/c86df20_part_1_jquery.dataTables_themeroller_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c86df20',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c86df20_2',);
                    }

                }

                // _assetic_c86df20_3
                if ($pathinfo === '/css/c86df20_part_1_main_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c86df20',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c86df20_3',);
                }

                // _assetic_c86df20_4
                if ($pathinfo === '/css/c86df20_part_1_plugin-noty-animate_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c86df20',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c86df20_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/7e01d33')) {
                // _assetic_7e01d33
                if ($pathinfo === '/js/7e01d33.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e01d33',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7e01d33',);
                }

                if (0 === strpos($pathinfo, '/js/7e01d33_part_1_')) {
                    if (0 === strpos($pathinfo, '/js/7e01d33_part_1_jquery.')) {
                        // _assetic_7e01d33_0
                        if ($pathinfo === '/js/7e01d33_part_1_jquery.dataTables.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e01d33',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7e01d33_0',);
                        }

                        // _assetic_7e01d33_1
                        if ($pathinfo === '/js/7e01d33_part_1_jquery.mjs.nestedSortable_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e01d33',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7e01d33_1',);
                        }

                    }

                    // _assetic_7e01d33_2
                    if ($pathinfo === '/js/7e01d33_part_1_plugin-noty.packaged.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e01d33',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7e01d33_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/45accbc')) {
                // _assetic_45accbc
                if ($pathinfo === '/js/45accbc.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '45accbc',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_45accbc',);
                }

                if (0 === strpos($pathinfo, '/js/45accbc_part_1_')) {
                    // _assetic_45accbc_0
                    if ($pathinfo === '/js/45accbc_part_1_list_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '45accbc',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_45accbc_0',);
                    }

                    // _assetic_45accbc_1
                    if ($pathinfo === '/js/45accbc_part_1_script_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '45accbc',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_45accbc_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/7b33b8f')) {
            // _assetic_7b33b8f
            if ($pathinfo === '/css/7b33b8f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7b33b8f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7b33b8f',);
            }

            if (0 === strpos($pathinfo, '/css/7b33b8f_part_1_')) {
                if (0 === strpos($pathinfo, '/css/7b33b8f_part_1_bootstrap')) {
                    // _assetic_7b33b8f_0
                    if ($pathinfo === '/css/7b33b8f_part_1_bootstrap-datepicker_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7b33b8f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7b33b8f_0',);
                    }

                    // _assetic_7b33b8f_1
                    if ($pathinfo === '/css/7b33b8f_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7b33b8f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7b33b8f_1',);
                    }

                }

                // _assetic_7b33b8f_2
                if ($pathinfo === '/css/7b33b8f_part_1_chosen_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7b33b8f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_7b33b8f_2',);
                }

                // _assetic_7b33b8f_3
                if ($pathinfo === '/css/7b33b8f_part_1_fabulous-library_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7b33b8f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_7b33b8f_3',);
                }

                // _assetic_7b33b8f_4
                if ($pathinfo === '/css/7b33b8f_part_1_jquery-ui.min_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7b33b8f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_7b33b8f_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/437ab5c')) {
            // _assetic_437ab5c
            if ($pathinfo === '/js/437ab5c.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_437ab5c',);
            }

            if (0 === strpos($pathinfo, '/js/437ab5c_part_1_')) {
                // _assetic_437ab5c_0
                if ($pathinfo === '/js/437ab5c_part_1_aa_jquery-2.1.4.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_437ab5c_0',);
                }

                // _assetic_437ab5c_1
                if ($pathinfo === '/js/437ab5c_part_1_jquery-ui.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_437ab5c_1',);
                }

                if (0 === strpos($pathinfo, '/js/437ab5c_part_1_plugin-')) {
                    // _assetic_437ab5c_2
                    if ($pathinfo === '/js/437ab5c_part_1_plugin-ab_jquery.ui.widget_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_437ab5c_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/437ab5c_part_1_plugin-bootstrap')) {
                        // _assetic_437ab5c_3
                        if ($pathinfo === '/js/437ab5c_part_1_plugin-bootstrap-datepicker.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_437ab5c_3',);
                        }

                        // _assetic_437ab5c_4
                        if ($pathinfo === '/js/437ab5c_part_1_plugin-bootstrap.min_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_437ab5c_4',);
                        }

                    }

                    // _assetic_437ab5c_5
                    if ($pathinfo === '/js/437ab5c_part_1_plugin-chosen.jquery_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_437ab5c_5',);
                    }

                }

                // _assetic_437ab5c_6
                if ($pathinfo === '/js/437ab5c_part_1_script-common-function_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_437ab5c_6',);
                }

                if (0 === strpos($pathinfo, '/js/437ab5c_part_1_zen-library')) {
                    // _assetic_437ab5c_7
                    if ($pathinfo === '/js/437ab5c_part_1_zen-library-maps_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_437ab5c_7',);
                    }

                    // _assetic_437ab5c_8
                    if ($pathinfo === '/js/437ab5c_part_1_zen-library_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '437ab5c',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_437ab5c_8',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ll_admin
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'll_admin');
            }

            return array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::indexAction',  '_route' => 'll_admin',);
        }

        // ll_list_entity
        if (0 === strpos($pathinfo, '/list') && preg_match('#^/list/(?P<entityAlias>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'll_list_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::listAction',));
        }

        // ll_edit_entity
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'll_edit_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::editAction',));
        }

        // ll_view_entity
        if (0 === strpos($pathinfo, '/view') && preg_match('#^/view/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'll_view_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::viewAction',));
        }

        // ll_delete_entity
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'll_delete_entity')), array (  '_controller' => 'LL\\CoreBundle\\Controller\\ManageController::deleteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
