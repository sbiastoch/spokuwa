<?php

/* BCloudSpoKuWaBundle:Course:view.html.twig */
class __TwigTemplate_87fbbc6d675e91aee6590d9b7bafd7f9 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Detailansicht Kurs</h1>

<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_view_change", array("idcourse" => $this->getAttribute($this->getContext($context, "course"), "id"))), "html", null, true);
        echo "\" method=\"POST\">
\tSemester:
\t<select name=\"semester\" id=\"semester\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "semesters"));
        foreach ($context['_seq'] as $context["_key"] => $context["semester"]) {
            // line 11
            echo "\t\t<option";
            if ((twig_join_filter(array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "year"), "method"), 1 => "-", 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "term"), "method"))) == twig_join_filter(array(0 => $this->getAttribute($this->getContext($context, "semester"), "year"), 1 => "-", 2 => $this->getAttribute($this->getContext($context, "semester"), "term"))))) {
                echo " selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "semester"), "year"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "semester"), "term"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "semester"), "term"), "html", null, true);
            echo ". Semester ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "semester"), "year"), "html", null, true);
            echo "</option>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semester'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "\t</select>
\t<input type=\"submit\" value=\"Wechseln\">
</form>
<table>
\t<tr>
\t\t<th>Semester</th>
\t\t<tr>
\t\t</tr>
\t</tr>
\t<tr>
\t\t<th>ID</th>
\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "course"), "id"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Name</th>
\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "course"), "name"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Lehrer</th>
\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "teacher"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Bereich</th>
\t\t<td>";
        // line 36
        echo (($this->getAttribute($this->getContext($context, "course"), "scope")) ? ("B") : ("A"));
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Beschreibung</th>
\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "description"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Von</th>
\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "lessonStart"), "html", null, true);
        echo ". Stunde</td>
\t</tr>
\t<tr>
\t\t<th>Bis</th>
\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "lessonEnd"), "html", null, true);
        echo ". Stunde</td>
\t</tr>
\t<tr>
\t\t<th>Wählbar</th>
\t\t<td>";
        // line 52
        echo (($this->getAttribute($this->getContext($context, "data"), "selectable")) ? ("Ja") : ("Nein"));
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Teilnehmer<br />Min/Mom/Max</th>
\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "memberMin"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "members")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "memberMax"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "members"));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 60
            echo "\t\t<td colspan=\"2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "member"), "fName"), "html", null, true);
            echo "</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "\t</tr>
\t<tr>
\t\t<td>
\t\t\t<button onClick=\"location.href='";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list"), "html", null, true);
        echo "';\">Zurück</button>
\t\t</td>
\t\t<td>
\t\t\t<button onClick=\"location.href='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_edit", array("idcourse" => $this->getAttribute($this->getContext($context, "course"), "id"), "year" => $this->getAttribute($this->getContext($context, "data"), "year"), "term" => $this->getAttribute($this->getContext($context, "data"), "term"))), "html", null, true);
        echo "';\">Bearbeiten</button>
\t\t</td>
\t\t<td>
\t\t\t<button onClick=\"location.href='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_add_semester", array("idcourse" => $this->getAttribute($this->getContext($context, "course"), "id"), "year" => $this->getAttribute($this->getContext($context, "data"), "year"), "term" => $this->getAttribute($this->getContext($context, "data"), "term"))), "html", null, true);
        echo "';\">In weiteren Semestern anbieten</button>
\t\t</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Course:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  154 => 62,  124 => 52,  171 => 71,  168 => 49,  165 => 68,  144 => 37,  138 => 35,  132 => 32,  122 => 28,  38 => 11,  105 => 21,  95 => 18,  75 => 24,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 22,  101 => 20,  80 => 39,  63 => 18,  36 => 4,  156 => 58,  148 => 41,  142 => 36,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 44,  85 => 28,  65 => 19,  59 => 16,  45 => 13,  103 => 40,  91 => 20,  74 => 34,  70 => 40,  66 => 19,  25 => 4,  89 => 32,  82 => 28,  92 => 16,  86 => 27,  77 => 24,  57 => 16,  19 => 2,  42 => 12,  29 => 5,  26 => 4,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 43,  152 => 36,  145 => 60,  130 => 48,  125 => 49,  119 => 26,  116 => 25,  112 => 24,  102 => 20,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 17,  32 => 3,  24 => 6,  22 => 3,  23 => 3,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 19,  94 => 21,  81 => 48,  78 => 24,  72 => 16,  64 => 18,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 10,  35 => 8,  33 => 7,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 44,  155 => 56,  151 => 54,  149 => 52,  141 => 59,  136 => 47,  134 => 35,  131 => 56,  128 => 31,  120 => 28,  117 => 48,  114 => 35,  109 => 38,  106 => 21,  100 => 21,  96 => 36,  93 => 33,  90 => 15,  87 => 19,  83 => 53,  79 => 25,  71 => 23,  62 => 13,  58 => 13,  55 => 15,  52 => 16,  49 => 14,  46 => 13,  43 => 11,  40 => 7,  37 => 9,  34 => 5,  31 => 6,  28 => 7,);
    }
}
