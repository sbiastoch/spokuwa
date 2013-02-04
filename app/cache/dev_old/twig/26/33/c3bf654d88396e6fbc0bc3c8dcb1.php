<?php

/* ::admin_base.html.twig */
class __TwigTemplate_2633c3bf654d88396e6fbc0bc3c8dcb1 extends Twig_Template
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
            'navi_client' => array($this, 'block_navi_client'),
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
\t\t\t<h1>";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>\t\t
\t\t</div>
\t  <div class=\"grid_3\" id=\"navi\">\t\t\t
\t  ";
        // line 18
        $this->displayBlock('navi', $context, $blocks);
        // line 25
        echo "\t  </div>
\t  <!-- end .grid_3 -->
\t  <div class=\"grid_9\" id=\"content\">
\t\t";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t  </div>
\t  <div class=\"grid_12\" id=\"footer\">
\t\t";
        // line 33
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "\t  </div>
\t  <!-- end .grid_12 -->
\t</div>
";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
    }

    // line 18
    public function block_navi($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_client_list"), "html", null, true);
        echo "\">Kunden</a></li>
\t\t\t\t";
        // line 21
        $this->displayBlock('navi_client', $context, $blocks);
        // line 22
        echo "\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Abmelden</a></li>
\t\t\t</ul>
\t\t";
    }

    // line 21
    public function block_navi_client($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t
\t\t";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_impressum"), "html", null, true);
        echo "\">Copyright &copy; Stephan Biastoch 2010 - 2013</a>
\t\t\t</p>
\t\t";
    }

    public function getTemplateName()
    {
        return "::admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  95 => 18,  75 => 28,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 22,  101 => 20,  80 => 39,  63 => 18,  36 => 4,  156 => 58,  148 => 41,  142 => 39,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 12,  103 => 22,  91 => 20,  74 => 34,  70 => 25,  66 => 12,  25 => 4,  89 => 15,  82 => 44,  92 => 16,  86 => 27,  77 => 31,  57 => 13,  19 => 2,  42 => 11,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 40,  130 => 48,  125 => 49,  119 => 26,  116 => 44,  112 => 43,  102 => 36,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 12,  32 => 3,  24 => 6,  22 => 3,  23 => 3,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 33,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 7,  35 => 4,  33 => 3,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 35,  131 => 34,  128 => 33,  120 => 28,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 21,  96 => 34,  93 => 33,  90 => 15,  87 => 19,  83 => 38,  79 => 25,  71 => 19,  62 => 15,  58 => 13,  55 => 12,  52 => 10,  49 => 9,  46 => 13,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}
