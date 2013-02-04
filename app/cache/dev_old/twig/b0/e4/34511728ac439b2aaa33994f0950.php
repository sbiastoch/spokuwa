<?php

/* ::spokuwa_student.html.twig */
class __TwigTemplate_b0e434511728ac439b2aaa33994f0950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::spokuwa_base.html.twig");

        $this->blocks = array(
            'navi' => array($this, 'block_navi'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::spokuwa_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navi($context, array $blocks = array())
    {
        // line 4
        echo "      <ul>
          <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kursbersicht</a></li>
          <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_search"), "html", null, true);
        echo "\">Kurs suchen</a></li>
          <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_choices"), "html", null, true);
        echo "\">Meine Wahlen</a></li>
          <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Beenden</a></li>
      </ul>
";
    }

    public function getTemplateName()
    {
        return "::spokuwa_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 7,  36 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
