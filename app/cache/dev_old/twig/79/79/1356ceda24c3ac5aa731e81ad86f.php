<?php

/* BCloudSpoKuWaBundle:Course:list.html.twig */
class __TwigTemplate_79791356ceda24c3ac5aa731e81ad86f extends Twig_Template
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
        echo "<h1>Kursüberischt</h1>
<table>
\t<tr>
\t\t<th>ID</th>
\t\t<th>Name</th>
\t\t<th>Bereich</th>
\t</tr>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "courses"));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 12
            echo "\t<tr>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "course"), "id"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_view", array("idcourse" => $this->getAttribute($this->getContext($context, "course"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "course"), "name"), "html", null, true);
            echo "</a></td>
\t\t<td>";
            // line 15
            echo (($this->getAttribute($this->getContext($context, "course"), "scope")) ? ("B") : ("A"));
            echo "</td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Course:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  55 => 15,  49 => 14,  45 => 13,  42 => 12,  38 => 11,  29 => 4,  26 => 3,);
    }
}
