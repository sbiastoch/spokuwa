<?php

/* BCloudSpoKuWaBundle:Student:list.html.twig */
class __TwigTemplate_cb4912ea0b5e9a52d8b01cd8c79e0e22 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Schülerüberischt</h1>
<table>
\t<tr>
\t\t<th>ID</th>
\t\t<th>Vorname</th>
\t\t<th>Nachname</th>
\t\t<th>Tutor</th>
\t</tr>
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "students"));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 13
            echo "\t<tr>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "id"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_view", array("idstudent" => $this->getAttribute($this->getContext($context, "student"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "fName"), "html", null, true);
            echo "</a></td>
\t\t<td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_view", array("idstudent" => $this->getAttribute($this->getContext($context, "student"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "lName"), "html", null, true);
            echo "</a></td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "tutor"), "html", null, true);
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Student:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  62 => 17,  56 => 16,  50 => 15,  46 => 14,  43 => 13,  39 => 12,  29 => 4,  26 => 3,);
    }
}
