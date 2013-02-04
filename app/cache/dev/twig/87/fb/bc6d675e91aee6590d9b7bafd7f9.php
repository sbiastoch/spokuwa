<?php

/* BCloudSpoKuWaBundle:Course:view.html.twig */
class __TwigTemplate_87fbbc6d675e91aee6590d9b7bafd7f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::spokuwa.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::spokuwa.html.twig";
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
        return array (  171 => 71,  165 => 68,  159 => 65,  154 => 62,  145 => 60,  141 => 59,  131 => 56,  124 => 52,  117 => 48,  110 => 44,  103 => 40,  96 => 36,  89 => 32,  82 => 28,  75 => 24,  62 => 13,  43 => 11,  39 => 10,  33 => 7,  29 => 5,  26 => 4,);
    }
}
