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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_login_login
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'AppBundle\\Controller\\Login::Login',  '_route' => 'app_login_login',);
        }

        // app_login_execute_login
        if ($pathinfo === '/execute_login') {
            return array (  '_controller' => 'AppBundle\\Controller\\Login::execute_login',  '_route' => 'app_login_execute_login',);
        }

        if (0 === strpos($pathinfo, '/Regist')) {
            // app_login_registration
            if ($pathinfo === '/Registration') {
                return array (  '_controller' => 'AppBundle\\Controller\\Login::Registration',  '_route' => 'app_login_registration',);
            }

            // app_login_register
            if ($pathinfo === '/Register') {
                return array (  '_controller' => 'AppBundle\\Controller\\Login::Register',  '_route' => 'app_login_register',);
            }

        }

        if (0 === strpos($pathinfo, '/Profile')) {
            // app_profile_profile
            if ($pathinfo === '/Profile') {
                return array (  '_controller' => 'AppBundle\\Controller\\Profile::Profile',  '_route' => 'app_profile_profile',);
            }

            // app_profile_otherprofile
            if (preg_match('#^/Profile/(?P<Login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profile_otherprofile')), array (  '_controller' => 'AppBundle\\Controller\\Profile::OtherProfile',));
            }

            if (0 === strpos($pathinfo, '/Profile/Photo')) {
                // app_profile_photo
                if (preg_match('#^/Profile/Photo/(?P<PhotoId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profile_photo')), array (  '_controller' => 'AppBundle\\Controller\\Profile::Photo',));
                }

                // app_profile_addcomment
                if (0 === strpos($pathinfo, '/Profile/Photo/NewComment') && preg_match('#^/Profile/Photo/NewComment/(?P<PhotoId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profile_addcomment')), array (  '_controller' => 'AppBundle\\Controller\\Profile::AddComment',));
                }

                // app_profile_like
                if (0 === strpos($pathinfo, '/Profile/Photo/AddLike') && preg_match('#^/Profile/Photo/AddLike/(?P<PhotoId>[^/]++)/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profile_like')), array (  '_controller' => 'AppBundle\\Controller\\Profile::Like',));
                }

            }

        }

        // app_profile_explore
        if ($pathinfo === '/Explore') {
            return array (  '_controller' => 'AppBundle\\Controller\\Profile::Explore',  '_route' => 'app_profile_explore',);
        }

        // app_profile_search
        if ($pathinfo === '/Search') {
            return array (  '_controller' => 'AppBundle\\Controller\\Profile::Search',  '_route' => 'app_profile_search',);
        }

        // app_profile_follow
        if (0 === strpos($pathinfo, '/Profile') && preg_match('#^/Profile/(?P<login>[^/]++)/Follow$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profile_follow')), array (  '_controller' => 'AppBundle\\Controller\\Profile::Follow',));
        }

        // app_profile_following
        if ($pathinfo === '/Following') {
            return array (  '_controller' => 'AppBundle\\Controller\\Profile::Following',  '_route' => 'app_profile_following',);
        }

        // app_userpanel_panel
        if ($pathinfo === '/Panel') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::Panel',  '_route' => 'app_userpanel_panel',);
        }

        if (0 === strpos($pathinfo, '/User')) {
            // app_userpanel_userloginupdated
            if ($pathinfo === '/UserLoginUpdated') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::UserLoginUpdated',  '_route' => 'app_userpanel_userloginupdated',);
            }

            // app_userpanel_useremailupdated
            if ($pathinfo === '/UserEmailUpdated') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::UserEmailUpdated',  '_route' => 'app_userpanel_useremailupdated',);
            }

            // app_userpanel_userpassupdated
            if ($pathinfo === '/UserPassUpdated') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::UserPassUpdated',  '_route' => 'app_userpanel_userpassupdated',);
            }

            // app_userpanel_useravatarupdated
            if ($pathinfo === '/UserAvatarUpdated') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::UserAvatarUpdated',  '_route' => 'app_userpanel_useravatarupdated',);
            }

        }

        // app_userpanel_logout
        if ($pathinfo === '/Logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::Logout',  '_route' => 'app_userpanel_logout',);
        }

        // app_userpanel_useraboutupdated
        if ($pathinfo === '/UserAboutUpdated') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserPanel::UserAboutUpdated',  '_route' => 'app_userpanel_useraboutupdated',);
        }

        // app_pic_uploader_pic_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'AppBundle\\Controller\\pic_uploader::pic_upload',  '_route' => 'app_pic_uploader_pic_upload',);
        }

        // app_pic_uploader_execute_pic_upload
        if ($pathinfo === '/pic_upload') {
            return array (  '_controller' => 'AppBundle\\Controller\\pic_uploader::execute_pic_upload',  '_route' => 'app_pic_uploader_execute_pic_upload',);
        }

        // app_pic_uploader_save_edited
        if ($pathinfo === '/save_edited') {
            return array (  '_controller' => 'AppBundle\\Controller\\pic_uploader::save_edited',  '_route' => 'app_pic_uploader_save_edited',);
        }

        // app_pic_uploader_reedit
        if (0 === strpos($pathinfo, '/reedit') && preg_match('#^/reedit/(?P<route>[^/]++)/(?P<picname>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_pic_uploader_reedit')), array (  '_controller' => 'AppBundle\\Controller\\pic_uploader::reedit',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
