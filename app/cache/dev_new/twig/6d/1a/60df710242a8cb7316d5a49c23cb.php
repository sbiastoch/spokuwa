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
        return array (  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 23,  101 => 34,  80 => 39,  63 => 18,  36 => 5,  156 => 58,  148 => 41,  142 => 39,  140 => 50,  127 => 28,  123 => 27,  115 => 25,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 12,  103 => 22,  91 => 20,  74 => 34,  70 => 14,  66 => 12,  25 => 4,  89 => 15,  82 => 44,  92 => 16,  86 => 27,  77 => 23,  57 => 13,  19 => 2,  42 => 11,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 40,  130 => 48,  125 => 49,  119 => 26,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 37,  73 => 23,  69 => 31,  56 => 12,  32 => 3,  24 => 6,  22 => 3,  23 => 3,  17 => 1,  68 => 20,  61 => 15,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 7,  35 => 4,  33 => 7,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 34,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 21,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 10,  58 => 23,  55 => 14,  52 => 10,  49 => 14,  46 => 13,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}
