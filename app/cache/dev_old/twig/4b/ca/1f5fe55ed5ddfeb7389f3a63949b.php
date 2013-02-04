<?php

/* BCloudSpoKuWaBundle:System:summary.html.twig */
class __TwigTemplate_4bca1f5fe55ed5ddfeb7389f3a63949b extends Twig_Template
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
        echo "<h1>Übersicht</h1>
<table>
    <tr>
        <td>
            Benutzer gesamt:
        </td>
        <td>
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "totalUsers"), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td>
            Kurse gesamt:
        </td>
        <td>
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "totalCourses"), "html", null, true);
        echo "
        </td>
    </tr>
    <tr>
        <td>
            Schüler ohne Kurse:
        </td>
        <td>
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "studentsWithoutCourses"), "html", null, true);
        echo "
        </td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:System:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  49 => 19,  38 => 11,  29 => 4,  26 => 3,);
    }
}
