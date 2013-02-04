<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/',    ),  ),),
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/about',    ),  ),),
        'pros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::prosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/pros',    ),  ),),
        'example' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::exampleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/example',    ),  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/register',    ),  ),),
        'client_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/client/create',    ),  ),),
        'impressum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::impressumAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/impressum',    ),  ),),
        'system_summary' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SystemController::summaryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa',    ),  ),),
        'course_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/course/list',    ),  ),),
        'course_view' => array (  0 =>   array (    0 => 'id',    1 => 'idsemester',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewAction',    'idsemester' => '0',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idsemester',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/spokuwa/course/view',    ),  ),),
        'course_view_change' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewChangeAction',    'id' => '0',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/spokuwa/course/view',    ),  ),),
        'course_save' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::saveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/course/save',    ),  ),),
        'course_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/course/create',    ),  ),),
        'course_edit' => array (  0 =>   array (    0 => 'idcourse',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idcourse',    ),    1 =>     array (      0 => 'text',      1 => '/spokuwa/course/edit',    ),  ),),
        'student_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/student/list',    ),  ),),
        'student_view' => array (  0 =>   array (    0 => 'idstudent',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idstudent',    ),    1 =>     array (      0 => 'text',      1 => '/spokuwa/student/view',    ),  ),),
        'student_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/student/create',    ),  ),),
        'system_config' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SystemController::configAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/config',    ),  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'admin_client_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/client/list',    ),  ),),
        'b_cloud_spo_ku_wa_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\LoginController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/login_check',    ),  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/logout',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
