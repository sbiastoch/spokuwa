<?php

/* ::spokuwa_base.html.twig */
class __TwigTemplate_bfa28be4fba0977037cb21c6198cdfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navi' => array($this, 'block_navi'),
            'navi_config' => array($this, 'block_navi_config'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Willkommen beim Online-Wahlsystem für Sportkurse!
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SpoKuWa/css/960gs.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SpoKuWa/css/homepage.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container_12\">
        <div class=\"grid_12\" id=\"header\">
            <h1>";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>        
        </div>
      <div class=\"grid_3\" id=\"navi\">            
      ";
        // line 18
        $this->displayBlock('navi', $context, $blocks);
        // line 40
        echo "      </div>
      <!-- end .grid_3 -->
      <div class=\"grid_9\" id=\"content\">
        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "      </div>
      <div class=\"grid_12\" id=\"footer\">
        ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "      </div>
      <!-- end .grid_12 -->
    </div>
";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        echo "SpoKuWa";
    }

    // line 18
    public function block_navi($context, array $blocks = array())
    {
        // line 19
        echo "            <ul>
                <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("system_summary"), "html", null, true);
        echo "\">Übersicht</a></li>
                <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kurse</a></li>
                <li>
                    <ul>
                        <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "\">Kurseliste</a></li>
                        <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_create"), "html", null, true);
        echo "\">Kurs erstellen</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_list"), "html", null, true);
        echo "\">Schüler</a></li>
                <li>
                    <ul>
                        <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_list"), "html", null, true);
        echo "\">Schülerliste</a></li>
                        <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_create"), "html", null, true);
        echo "\">Schüler erstellen</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("system_config"), "html", null, true);
        echo "\">Einstellungen</a></li>
                ";
        // line 36
        $this->displayBlock('navi_config', $context, $blocks);
        // line 37
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Abmelden</a></li>
            </ul>
        ";
    }

    // line 36
    public function block_navi_config($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "            
        ";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "            <p>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impressum"), "html", null, true);
        echo "\">Copyright &copy; Stephan Biastoch 2010 - 2013</a>
            </p>
        ";
    }

    public function getTemplateName()
    {
        return "::spokuwa_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  168 => 49,  165 => 48,  160 => 44,  157 => 43,  152 => 36,  144 => 37,  142 => 36,  138 => 35,  132 => 32,  128 => 31,  122 => 28,  116 => 25,  112 => 24,  106 => 21,  102 => 20,  99 => 19,  96 => 18,  90 => 15,  83 => 53,  81 => 48,  77 => 46,  75 => 43,  70 => 40,  68 => 18,  62 => 15,  58 => 13,  55 => 12,  49 => 9,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  29 => 4,  26 => 3,);
    }
}
