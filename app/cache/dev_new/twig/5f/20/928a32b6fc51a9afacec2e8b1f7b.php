<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_5f20928a32b6fc51a9afacec2e8b1f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  84 => 39,  47 => 10,  60 => 27,  18 => 2,  171 => 71,  165 => 68,  159 => 65,  154 => 62,  124 => 52,  38 => 6,  105 => 21,  95 => 45,  75 => 27,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 11,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 5,  101 => 20,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 41,  142 => 39,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 44,  85 => 28,  65 => 19,  59 => 22,  45 => 13,  103 => 40,  91 => 20,  74 => 34,  70 => 25,  66 => 24,  25 => 4,  89 => 32,  82 => 28,  92 => 44,  86 => 41,  77 => 24,  57 => 13,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 60,  130 => 48,  125 => 49,  119 => 30,  116 => 29,  112 => 43,  102 => 36,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 20,  32 => 5,  24 => 11,  22 => 3,  23 => 4,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 35,  99 => 33,  94 => 21,  81 => 33,  78 => 28,  72 => 16,  64 => 18,  53 => 15,  50 => 10,  48 => 11,  41 => 7,  39 => 12,  35 => 5,  33 => 5,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 35,  131 => 31,  128 => 30,  120 => 28,  117 => 48,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 36,  93 => 33,  90 => 43,  87 => 19,  83 => 38,  79 => 25,  71 => 20,  62 => 17,  58 => 13,  55 => 12,  52 => 16,  49 => 19,  46 => 9,  43 => 8,  40 => 7,  37 => 7,  34 => 5,  31 => 6,  28 => 3,);
    }
}
