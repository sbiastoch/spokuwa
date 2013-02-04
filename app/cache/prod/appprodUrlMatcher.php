<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        if (0 === strpos($pathinfo, '/spokuwa/course/view') && preg_match('#^/spokuwa/course/view/(?<id>[^/]+)(?:/(?<idsemester>[^/]+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_course_view;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewAction',  'idsemester' => '0',)), array('_route' => 'course_view'));
        }
        not_course_view:

        // course_view_change
        if (0 === strpos($pathinfo, '/spokuwa/course/view') && preg_match('#^/spokuwa/course/view(?:/(?<id>[^/]+))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_course_view_change;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewChangeAction',  'id' => '0',)), array('_route' => 'course_view_change'));
        }
        not_course_view_change:

        // course_save
        if ($pathinfo === '/spokuwa/course/save') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::saveAction',  '_route' => 'course_save',);
        }

        // course_create
        if ($pathinfo === '/spokuwa/course/create') {
            return array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::createAction',  '_route' => 'course_create',);
        }

        // course_edit
        if (0 === strpos($pathinfo, '/spokuwa/course/edit') && preg_match('#^/spokuwa/course/edit/(?<idcourse>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::editAction',)), array('_route' => 'course_edit'));
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
