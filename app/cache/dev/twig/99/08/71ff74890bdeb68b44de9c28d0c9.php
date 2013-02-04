<?php

/* ::spokuwa_client.html.twig */
class __TwigTemplate_990871ff74890bdeb68b44de9c28d0c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navi' => array($this, 'block_navi'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('navi', $context, $blocks);
    }

    public function block_navi($context, array $blocks = array())
    {
        // line 2
        echo "      <ul>
          <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("system_summary"), "html", null, true);
        echo "\">Übersicht</a></li>
          <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kurse</a></li>
          <li>
              <ul>
                  <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kurseliste</a></li>
                  <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_create"), "html", null, true);
        echo "\">Kurs erstellen</a></li>
              </ul>
          </li>
          <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_list"), "html", null, true);
        echo "\">Schüler</a></li>
          <li>
              <ul>
                  <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_list"), "html", null, true);
        echo "\">Schülerliste</a></li>
                  <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_create"), "html", null, true);
        echo "\">Schüler erstellen</a></li>
              </ul>
          </li>
          <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("system_config"), "html", null, true);
        echo "\">Einstellungen</a></li>
          <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Abmelden</a></li>
      </ul>
";
    }

    public function getTemplateName()
    {
        return "::spokuwa_client.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  63 => 18,  57 => 15,  53 => 14,  47 => 11,  41 => 8,  37 => 7,  31 => 4,  27 => 3,  24 => 2,  18 => 1,);
    }
}
