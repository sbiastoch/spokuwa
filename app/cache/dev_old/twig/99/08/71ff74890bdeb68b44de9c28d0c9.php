<?php

/* ::spokuwa_client.html.twig */
class __TwigTemplate_990871ff74890bdeb68b44de9c28d0c9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("system_summary"), "html", null, true);
        echo "\">Übersicht</a></li>
          <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kurse</a></li>
          <li>
              <ul>
                  <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kurseliste</a></li>
                  <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_create"), "html", null, true);
        echo "\">Kurs erstellen</a></li>
              </ul>
          </li>
          <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_list"), "html", null, true);
        echo "\">Schüler</a></li>
          <li>
              <ul>
                  <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_list"), "html", null, true);
        echo "\">Schülerliste</a></li>
                  <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_create"), "html", null, true);
        echo "\">Schüler erstellen</a></li>
              </ul>
          </li>
          <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("system_config"), "html", null, true);
        echo "\">Einstellungen</a></li>
          <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Abmelden</a></li>
      </ul>
";
    }

    public function getTemplateName()
    {
        return "::spokuwa_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  68 => 20,  62 => 17,  58 => 16,  52 => 13,  46 => 10,  42 => 9,  36 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
