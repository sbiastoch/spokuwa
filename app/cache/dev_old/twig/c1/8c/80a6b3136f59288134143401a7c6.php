<?php

/* BCloudSpoKuWaBundle:Student:byebye.html.twig */
class __TwigTemplate_c18c80a6b3136f59288134143401a7c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::website_base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::website_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Bye Bye!</h1>
<p>Deine Wahlen sind nun abgeschlossen!</p>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Student:byebye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
