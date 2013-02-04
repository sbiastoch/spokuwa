<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/',    ),  ),),
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/about',    ),  ),),
        'pros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::prosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/pros',    ),  ),),
        'example' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::exampleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/example',    ),  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/register',    ),  ),),
        'client_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\ClientController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/client/create',    ),  ),),
        'impressum' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\HomepageController::impressumAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/impressum',    ),  ),),
        'system_summary' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\SystemController::summaryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa',    ),  ),),
        'course_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/course/list',    ),  ),),
        'course_view' => array (  0 =>   array (    0 => 'idcourse',    1 => 'year',    2 => 'term',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewAction',    'year' => '0',    'term' => '0',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'term',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'year',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idcourse',    ),    3 =>     array (      0 => 'text',      1 => '/spokuwa/course/view',    ),  ),),
        'course_view_change' => array (  0 =>   array (    0 => 'idcourse',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::viewChangeAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idcourse',    ),    1 =>     array (      0 => 'text',      1 => '/spokuwa/course/view',    ),  ),),
        'course_update' => array (  0 =>   array (    0 => 'idcoursedata',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idcoursedata',    ),    1 =>     array (      0 => 'text',      1 => '/spokuwa/course/update',    ),  ),),
        'course_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/course/create',    ),  ),),
        'course_add_semester' => array (  0 =>   array (    0 => 'idcourse',    1 => 'year',    2 => 'term',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::addSemesterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'term',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'year',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idcourse',    ),    3 =>     array (      0 => 'text',      1 => '/spokuwa/course/addSemester',    ),  ),),
        'course_edit' => array (  0 =>   array (    0 => 'idcourse',    1 => 'year',    2 => 'term',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'term',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'year',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idcourse',    ),    3 =>     array (      0 => 'text',      1 => '/spokuwa/course/edit',    ),  ),),
        'course_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\CourseController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/course/search',    ),  ),),
        'student_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/student/list',    ),  ),),
        'student_view' => array (  0 =>   array (    0 => 'idstudent',  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'idstudent',    ),    1 =>     array (      0 => 'text',      1 => '/spokuwa/student/view',    ),  ),),
        'student_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/student/create',    ),  ),),
        'student_choices' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::choicesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spokuwa/student/choices',    ),  ),),
        'byebye' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BCloud\\SpoKuWaBundle\\Controller\\StudentController::byebyeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage/byebye',    ),  ),),
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
