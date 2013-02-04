<?php

/* BCloudSpoKuWaBundle:Student:view.html.twig */
class __TwigTemplate_81f3d434743624d0f2855610f681fc7f extends Twig_Template
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
        echo "<h1>Detailansicht Schüler</h1>
<table>
\t<tr>
\t\t<th>ID</th>
\t\t<td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "id"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Vorname</th>
\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "fName"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Nachname</th>
\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "lName"), "html", null, true);
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>Tutor</th>
\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "student"), "tutor"), "html", null, true);
        echo "</td>
\t</tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Student:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  49 => 16,  42 => 12,  35 => 8,  29 => 4,  26 => 3,);
    }
}
