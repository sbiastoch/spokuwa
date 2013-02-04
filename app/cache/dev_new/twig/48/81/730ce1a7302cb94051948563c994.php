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
        return array (  18 => 2,  171 => 71,  165 => 68,  159 => 65,  154 => 62,  124 => 52,  38 => 11,  105 => 21,  95 => 18,  75 => 24,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 5,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 22,  101 => 20,  80 => 39,  63 => 18,  36 => 5,  156 => 58,  148 => 41,  142 => 39,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 44,  85 => 28,  65 => 19,  59 => 16,  45 => 13,  103 => 40,  91 => 20,  74 => 34,  70 => 25,  66 => 19,  25 => 4,  89 => 32,  82 => 28,  92 => 16,  86 => 27,  77 => 24,  57 => 16,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 60,  130 => 48,  125 => 49,  119 => 26,  116 => 44,  112 => 43,  102 => 36,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 17,  32 => 3,  24 => 3,  22 => 3,  23 => 4,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 33,  78 => 24,  72 => 16,  64 => 18,  53 => 15,  50 => 15,  48 => 9,  41 => 7,  39 => 10,  35 => 8,  33 => 6,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 59,  136 => 47,  134 => 35,  131 => 56,  128 => 33,  120 => 28,  117 => 48,  114 => 35,  109 => 38,  106 => 37,  100 => 21,  96 => 36,  93 => 33,  90 => 15,  87 => 19,  83 => 38,  79 => 25,  71 => 23,  62 => 13,  58 => 13,  55 => 15,  52 => 16,  49 => 14,  46 => 13,  43 => 11,  40 => 7,  37 => 7,  34 => 5,  31 => 6,  28 => 7,);
    }
}