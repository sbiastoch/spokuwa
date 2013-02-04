<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '/homepage') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::homeAction',  '_route' => 'home',);
        }

        // about
        if ($pathinfo === '/homepage/about') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::aboutAction',  '_route' => 'about',);
        }

        // pros
        if ($pathinfo === '/homepage/pros') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::prosAction',  '_route' => 'pros',);
        }

        // example
        if ($pathinfo === '/homepage/example') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::exampleAction',  '_route' => 'example',);
        }

        // register
        if ($pathinfo === '/homepage/register') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::registerAction',  '_route' => 'register',);
        }

        // client_create
        if ($pathinfo === '/homepage/client/create') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
        }

        // impressum
        if ($pathinfo === '/homepage/impressum') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::impressumAction',  '_route' => 'impressum',);
        }

        // system_summary
        if ($pathinfo === '/spokuwa') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SystemController::summaryAction',  '_route' => 'system_summary',);
        }

        // course_list
        if ($pathinfo === '/spokuwa/course/list') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::listAction',  '_route' => 'course_list',);
        }

        // course_view
        if (0 === strpos($pathinfo, '/spokuwa/course/view') && preg_match('#^/spokuwa/course/view/(?<idcourse>[^/]+)(?:/(?<year>[^/]+)(?:/(?<term>[^/]+))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_course_view;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewAction',  'year' => '0',  'term' => '0',)), array('_route' => 'course_view'));
        }
        not_course_view:

        // course_view_change
        if (0 === strpos($pathinfo, '/spokuwa/course/view') && preg_match('#^/spokuwa/course/view/(?<idcourse>[^/]+)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_course_view_change;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewChangeAction',)), array('_route' => 'course_view_change'));
        }
        not_course_view_change:

        // course_update
        if (0 === strpos($pathinfo, '/spokuwa/course/update') && preg_match('#^/spokuwa/course/update/(?<idcoursedata>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::updateAction',)), array('_route' => 'course_update'));
        }

        // course_create
        if ($pathinfo === '/spokuwa/course/create') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::createAction',  '_route' => 'course_create',);
        }

        // course_add_semester
        if (0 === strpos($pathinfo, '/spokuwa/course/addSemester') && preg_match('#^/spokuwa/course/addSemester/(?<idcourse>[^/]+)/(?<year>[^/]+)/(?<term>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::addSemesterAction',)), array('_route' => 'course_add_semester'));
        }

        // course_edit
        if (0 === strpos($pathinfo, '/spokuwa/course/edit') && preg_match('#^/spokuwa/course/edit/(?<idcourse>[^/]+)/(?<year>[^/]+)/(?<term>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::editAction',)), array('_route' => 'course_edit'));
        }

        // course_search
        if ($pathinfo === '/spokuwa/course/search') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::searchAction',  '_route' => 'course_search',);
        }

        // student_list
        if ($pathinfo === '/spokuwa/student/list') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::listAction',  '_route' => 'student_list',);
        }

        // student_view
        if (0 === strpos($pathinfo, '/spokuwa/student/view') && preg_match('#^/spokuwa/student/view/(?<idstudent>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::viewAction',)), array('_route' => 'student_view'));
        }

        // student_create
        if ($pathinfo === '/spokuwa/student/create') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::createAction',  '_route' => 'student_create',);
        }

        // student_choices
        if ($pathinfo === '/spokuwa/student/choices') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::choicesAction',  '_route' => 'student_choices',);
        }

        // byebye
        if ($pathinfo === '/homepage/byebye') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::byebyeAction',  '_route' => 'byebye',);
        }

        // system_config
        if ($pathinfo === '/spokuwa/config') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SystemController::configAction',  '_route' => 'system_config',);
        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
        }

        // admin_client_list
        if ($pathinfo === '/admin/client/list') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::listAction',  '_route' => 'admin_client_list',);
        }

        // b_cloud_spo_ku_wa_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'b_cloud_spo_ku_wa_homepage');
            }

            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::homeAction',  '_route' => 'b_cloud_spo_ku_wa_homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SecuredController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/spokuwa/login_check') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\LoginController::securityCheckAction',  '_route' => 'login_check',);
        }

        // logout
        if ($pathinfo === '/spokuwa/logout') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
