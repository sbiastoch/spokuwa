<?php

/* ::website_base.html.twig */
class __TwigTemplate_6d1a60df710242a8cb7316d5a49c23cb extends Twig_Template
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
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SpoKuWa/css/960gs.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SpoKuWa/css/homepage.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"container_12\">
\t\t<div class=\"grid_12\" id=\"header\">
\t\t\t";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "\t\t</div>
\t  <div class=\"grid_3\" id=\"navi\">\t\t\t
\t  ";
        // line 20
        $this->displayBlock('navi', $context, $blocks);
        // line 31
        echo "\t  </div>
\t  <!-- end .grid_3 -->
\t  <div class=\"grid_9\" id=\"content\">
\t\t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "\t  </div>
\t  <div class=\"grid_12\" id=\"footer\">
\t\t";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "\t  </div>
\t  <!-- end .grid_12 -->
\t</div>
";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t\t<h1>SpoKuWa &mdash; Sportkurswahlen einfach online!</h1>
\t\t\t";
    }

    // line 20
    public function block_navi($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\">Willkommen</a></li>
\t\t\t\t<li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\">Ãœber SpoKuWa</a></li>
\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pros"), "html", null, true);
        echo "\">Vorteile</a></li>
\t\t\t\t<li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("example"), "html", null, true);
        echo "\">Wahlablauf</a></li>
\t\t\t\t<li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\">Einloggen</a></li>
\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register"), "html", null, true);
        echo "\">Registrieren</a></li>
\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impressum"), "html", null, true);
        echo "\">Impressum</a></li>
\t\t\t</ul>
\t\t";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "\t\t\t
\t\t";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impressum"), "html", null, true);
        echo "\">Copyright &copy; Stephan Biastoch 2010 - 2013</a>
\t\t\t</p>
\t\t";
    }

    public function getTemplateName()
    {
        return "::website_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  145 => 40,  142 => 39,  137 => 35,  134 => 34,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  100 => 21,  97 => 20,  92 => 16,  89 => 15,  82 => 44,  80 => 39,  76 => 37,  74 => 34,  69 => 31,  67 => 20,  63 => 18,  61 => 15,  57 => 13,  54 => 12,  35 => 4,  48 => 9,  43 => 8,  40 => 7,  34 => 6,  32 => 3,  29 => 4,  26 => 3,);
    }
}
