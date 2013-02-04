<?php

/* BCloudSpoKuWaBundle:Course:edit.html.twig */
class __TwigTemplate_0802058e6c937fc4c8c62328de1c5294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::spokuwa_base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Detailansicht Kurs</h1>

<table>
\t<tr>
\t\t<th>ID ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "course"), "id"), "html", null, true);
        echo ":</th>
\t\t<th>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "course"), "name"), "html", null, true);
        echo "</th>
\t</tr>
\t<tr>
\t\t<th>Anforderungsbereich</th>
\t\t<td>";
        // line 13
        echo (($this->getAttribute($this->getContext($context, "course"), "scope")) ? ("B") : ("A"));
        echo "</td>
\t</tr>
\t<tr>
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "members"));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 17
            echo "\t\t\t<td colspan=\"2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "member"), "fName"), "html", null, true);
            echo "</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "\t</tr>
</table>


<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(("course_" . $this->getContext($context, "action")), array("idcourse" => $this->getAttribute($this->getContext($context, "course"), "id"), "year" => $this->getAttribute($this->getContext($context, "data"), "year"), "term" => $this->getAttribute($this->getContext($context, "data"), "term"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Course:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  168 => 49,  165 => 48,  144 => 37,  138 => 35,  132 => 32,  122 => 28,  38 => 11,  105 => 21,  95 => 18,  75 => 43,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 22,  101 => 20,  80 => 39,  63 => 18,  36 => 4,  156 => 58,  148 => 41,  142 => 36,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 13,  103 => 22,  91 => 20,  74 => 34,  70 => 40,  66 => 19,  25 => 4,  89 => 15,  82 => 44,  92 => 16,  86 => 27,  77 => 24,  57 => 16,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 43,  152 => 36,  145 => 40,  130 => 48,  125 => 49,  119 => 26,  116 => 25,  112 => 24,  102 => 20,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 17,  32 => 3,  24 => 6,  22 => 3,  23 => 3,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 19,  94 => 21,  81 => 48,  78 => 24,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 9,  35 => 8,  33 => 3,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 44,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 35,  131 => 34,  128 => 31,  120 => 28,  117 => 36,  114 => 35,  109 => 38,  106 => 21,  100 => 21,  96 => 18,  93 => 33,  90 => 15,  87 => 19,  83 => 53,  79 => 25,  71 => 23,  62 => 15,  58 => 13,  55 => 12,  52 => 16,  49 => 9,  46 => 13,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}
