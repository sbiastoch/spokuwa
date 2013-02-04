<?php

/* BCloudSpoKuWaBundle:Homepage:example.html.twig */
class __TwigTemplate_156fb0614b7b93d41b59b6ef2acee7c4 extends Twig_Template
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
        echo "<h1>Wahlablauf</h1>

<p>Der normale Ablauf der Sportkurswahlen mit SpoKuWa sieht in der Regel wie folgt aus:</p>
<ol>
\t<li>Sportkurskoordinator legt Kurse an;</li>
\t<li>Schüler registrieren sich im System / Werden vom Sportkurskoordinator eingetragen;</li>
\t<li>Lehrer bestätigen Schüleraccounts / Schüler erhalten Zugangsdaten vom Klassenlehrer oder per Email;</li>
\t<li>Schüler melden sich im System an und wählen Sportkurse;</li>
\t<li>Sportkurskoordinator führt Zuordnungsalgorithmus aus;</li>
\t<li>...führt ggfs. Änderungen an den Kurslisten durch;</li>
\t<li>...druckt Wahlergebnisse oder Kurslisten;</li>
</ol>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Homepage:example.html.twig";
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
