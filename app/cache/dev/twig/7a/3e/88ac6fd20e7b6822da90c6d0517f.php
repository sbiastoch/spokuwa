<?php

/* BCloudSpoKuWaBundle:Homepage:home.html.twig */
class __TwigTemplate_7a3e88ac6fd20e7b6822da90c6d0517f extends Twig_Template
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
        echo "<h1>Willkommen bei SpoKuWa</h1>
<p>Spokuwa ist ein webbasiertes System zur Durchführung der Sportkurswahlen in der gymnasialen Oberstufe in Deutschland. 
Es ermöglicht die Digitalisierung und Automatisierung des gesamten Wahlablaufes vom Erstellen über die Zuordnung der 
Schüler auf die Kurse per Knopfdruck bishin zum Drucken der fertigen Kurslisten.</p>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Homepage:home.html.twig";
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