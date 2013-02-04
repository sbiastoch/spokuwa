<?php

/* BCloudSpoKuWaBundle:Homepage:about.html.twig */
class __TwigTemplate_d340bcac87641be9c30a6ed9c43c3b50 extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Was ist Spokuwa eigentlich?</h1>
<p>Spokuwa ist ein webbasiertes System zur Durchführung der Sportkurswahlen in der gymnasialen Oberstufe in Deutschland.<br />
Es ermöglicht die Digitalisierung und Automatisierung des gesamten Wahlablaufes vom Erstellen über die Zuordnung der Schüler 
auf die Kurse per Knopfdruck bishin zum Drucken der fertigen Kurslisten.</p>

<h1>Weshalb braucht meine Schule Spokuwa überhaupt?</h1>
<p>Mindestens einmal jährlich steht eine Schule vor dem Problem, dass häufig hunderte Schüler auf einige wenige dutzend Sportkurse 
aufgeteilt werden müssen. Da die Kurse nur eine gewisse Zahl von Schülern aufnehmen können und es sein kann, dass alle 250 Schüler 
in 11.2 in den Fußball-Kurs wollen, müssen auch Alternativwahlen angegeben werden, falls der gewünschte Kurs bereits überbelegt ist. 
Bei alledem müssen jedoch noch bestimmte Belegungsverpflichtungen (sog. Anforderungsbereiche A und B) berücksichtigt werden.</p>

<p>Dieser komplexe Prozess die Schüler unter Berücksichtigung ihrer individuellen Wünsche und den Vorgaben des Kultusministeriums auf die 
Kurse zu verteilen, so dass kein Kurs überfüllt und kein Schüler leer ausgeht, ist keine Leichtigkeit. Jeder Schüler gibt auf einem 
losen Blatt Papier seine Kurswünsche ab und ein einzelner Lehrer darf aus dieser Blätterwirtschaft unter oben umrissenen Vorgaben nun
 die Listen erstellen.</p>
 
<p>Dieser Prozess ist äußerst langwierig, unübersichtlich und ineffizient. Spokuwa verlagert die gesamte Verwaltung der Sportkurse ins 
Internet. Und nicht nur das: Sogar das Zuordnen der Schüler auf die Sportkurse geschieht auf Knopfdruck in Sekundenschnelle! Mit dem
 eigens entwickelten Zuordnungsalgorithmus wird nicht nur irgendeine Lösung gefunden, man kommt der einzigen, optimalen Lösung sehr 
 nahe! (Sehr nahe \"nur\", da dieses Zuordnungsproblem einer Problemklasse der Informatik angehört, die nicht effizient lösbar ist und 
 nur Algorithmen existieren, die die optimale Lösung beliebig genau approximieren.)</p>

<h1>Wie funktioniert Spokuwa?</h1>
<p>Spokuwa ist eine browserbasierte Webanwendung, wie z.B. Ihr E-Mail-Postfach, YouTube oder Spiegel Online. Irgendwo in Deutschland 
steht ein Server, auf dem, immer wenn sie eine Seite auf spokuwa.de aufrufen, ein Programm ausgeführt wird, was ihre Eingaben 
verarbeitet und dann Ihnen die nächste Seite auf den Bildschirm sendet. Sie als Nutzer bekommen jedoch vom gesamten technischen 
Innenleben nichts mit. Sie benötigen weder zusätzliche Hardware oder neuen Programme, die installert werden müssten. Sie rufen 
lediglich eine Internetseite auf. Alle Daten werden bei uns auf dem Server gespeichert und gesichert.</p>
";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Homepage:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  26 => 4,);
    }
}
