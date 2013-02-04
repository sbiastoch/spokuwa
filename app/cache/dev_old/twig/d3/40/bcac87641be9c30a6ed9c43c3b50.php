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
        return array (  18 => 2,  159 => 65,  154 => 62,  124 => 52,  171 => 71,  168 => 49,  165 => 68,  144 => 37,  138 => 35,  132 => 32,  122 => 28,  38 => 11,  105 => 21,  95 => 18,  75 => 24,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 22,  101 => 20,  80 => 39,  63 => 18,  36 => 4,  156 => 58,  148 => 41,  142 => 36,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 44,  85 => 28,  65 => 19,  59 => 16,  45 => 13,  103 => 40,  91 => 20,  74 => 34,  70 => 40,  66 => 19,  25 => 4,  89 => 32,  82 => 28,  92 => 16,  86 => 27,  77 => 24,  57 => 16,  19 => 2,  42 => 12,  29 => 5,  26 => 4,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 43,  152 => 36,  145 => 60,  130 => 48,  125 => 49,  119 => 26,  116 => 25,  112 => 24,  102 => 20,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 17,  32 => 3,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 19,  94 => 21,  81 => 48,  78 => 24,  72 => 16,  64 => 18,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 10,  35 => 8,  33 => 6,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 44,  155 => 56,  151 => 54,  149 => 52,  141 => 59,  136 => 47,  134 => 35,  131 => 56,  128 => 31,  120 => 28,  117 => 48,  114 => 35,  109 => 38,  106 => 21,  100 => 21,  96 => 36,  93 => 33,  90 => 15,  87 => 19,  83 => 53,  79 => 25,  71 => 23,  62 => 13,  58 => 13,  55 => 15,  52 => 16,  49 => 14,  46 => 13,  43 => 11,  40 => 7,  37 => 7,  34 => 5,  31 => 6,  28 => 7,);
    }
}
