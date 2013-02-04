<?php

/* BCloudSpoKuWaBundle:Client:list.html.twig */
class __TwigTemplate_09b2e9daca4c35f8aaf9823feb8222a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::admin_base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<table>
\t<tr>
\t\t<th>ID</th>
\t\t<th>Schule</th>
\t\t<th>Tarif</th>
\t\t<th>Notizen</th>
\t</tr>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clients"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 12
            echo "\t<tr>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "idclient"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "schoolschool"), "name"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "fees"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "notes"), "html", null, true);
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Client:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  105 => 21,  95 => 18,  75 => 28,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 22,  101 => 20,  80 => 39,  63 => 18,  36 => 4,  156 => 58,  148 => 41,  142 => 39,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 13,  103 => 22,  91 => 20,  74 => 34,  70 => 25,  66 => 19,  25 => 4,  89 => 15,  82 => 44,  92 => 16,  86 => 27,  77 => 31,  57 => 16,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 40,  130 => 48,  125 => 49,  119 => 26,  116 => 44,  112 => 43,  102 => 36,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 12,  32 => 3,  24 => 6,  22 => 3,  23 => 3,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 33,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 7,  35 => 4,  33 => 3,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 35,  131 => 34,  128 => 33,  120 => 28,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 21,  96 => 34,  93 => 33,  90 => 15,  87 => 19,  83 => 38,  79 => 25,  71 => 19,  62 => 15,  58 => 13,  55 => 12,  52 => 10,  49 => 14,  46 => 13,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}