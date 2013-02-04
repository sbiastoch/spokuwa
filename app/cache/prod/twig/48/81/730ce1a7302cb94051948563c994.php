<?php

/* BCloudSpoKuWaBundle:Homepage:pros.html.twig */
class __TwigTemplate_4881730ce1a7302cb94051948563c994 extends Twig_Template
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
        echo "<h1>Alle Vorteile auf einen Blick</h1>

<p>SpoKuWa erleichtert den Ablauf der Sportkurswahlen erheblich:</p>
<ul>
\t<li>Nie wieder Zettelwahlen!</li>
\t<li>Automatische Zuordnung der Schüler auf die Kurse unter Berücksichtigung aller relevanter Faktoren.</li>
\t<li>Hohe Sicherheit: Wir führen regelmäßig für Sie BackUps durch.</li>
\t<li>Drucken von Wahlergebnissen und Kurslisten.</li>
\t<li>Einfaches Bearbeiten von Kurslisten.</li>
\t<li>Keine neue Hardware oder Software-Installation erforderlich.</li>
\t<li>Umfangreiche Sortier- und Filtermöglichkeiten von Schülern und Kursen.</li>
\t<li>Anpassbar an die individuellen Anforderungen Ihrer Schule (siehe unten).</li>
\t<li>Individuelle Konfiguration</li>
</ul>

<p>Jede Schule handhabt die Sportkurswahlen etwas anders. Damit das Online-Wahlsystem möglichst genau dem Zettelsystem 
gleicht, stehen verschiedene Optionen zur Verfügung, mit denen sich das System individuell anpassen lässt. So ist eine 
Umstellung vom analogen auf digitale System ohne große Umgewöhnung möglich. Im Detail stehen folgende Optionen zur 
Verfügung:
<ul>
\t<li>Name der Schule</li>
\t<li>Sportkurse werden für 1/2/3 Jahre gewählt</li>
\t<li>Schüleraccounts werden z.B. vom Klassenlehrer ausgeteilt / von den Schülern selber erstellt und bspw. vom 
\tKlassenlehrer bestätigt.</li>
\t<li>G8 / G9</li>
</ul>
</p>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Homepage:pros.html.twig";
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
