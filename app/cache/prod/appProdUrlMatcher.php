<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/blog')) {
            // sdzblog_accueil
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'sdzblog_accueil',);
            }

            // sdzblog_voir
            if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',));
            }

            // sdzblog_voir_slug
            if (preg_match('#^/blog/(?P<annee>[^/]++)/(?P<slug>[^/\\.]++)\\.(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir_slug')), array (  '_controller' => 'SdzBlogbundle:Blog:voirSlug',));
            }

            // sdzblog_ajouter
            if ($pathinfo === '/blog/ajouter') {
                return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'sdzblog_ajouter',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
