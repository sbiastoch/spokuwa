<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_d1640374c740d20a30e1eed301376b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  47 => 13,  18 => 2,  159 => 65,  154 => 62,  124 => 52,  171 => 71,  168 => 49,  165 => 68,  144 => 37,  138 => 39,  132 => 32,  122 => 28,  38 => 6,  105 => 21,  95 => 45,  75 => 27,  111 => 24,  97 => 20,  54 => 12,  67 => 20,  51 => 11,  21 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 5,  101 => 20,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 41,  142 => 36,  140 => 50,  127 => 28,  123 => 29,  115 => 21,  110 => 44,  85 => 28,  65 => 19,  59 => 22,  45 => 13,  103 => 40,  91 => 20,  74 => 34,  70 => 40,  66 => 24,  25 => 4,  89 => 32,  82 => 28,  92 => 44,  86 => 41,  77 => 24,  57 => 13,  19 => 2,  42 => 12,  29 => 3,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 43,  152 => 36,  145 => 60,  130 => 48,  125 => 49,  119 => 30,  116 => 29,  112 => 24,  102 => 20,  98 => 19,  76 => 37,  73 => 23,  69 => 31,  56 => 17,  32 => 5,  24 => 9,  22 => 3,  23 => 29,  17 => 1,  68 => 18,  61 => 15,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 35,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 35,  99 => 19,  94 => 21,  81 => 48,  78 => 28,  72 => 16,  64 => 18,  53 => 15,  50 => 14,  48 => 11,  41 => 11,  39 => 10,  35 => 5,  33 => 5,  30 => 4,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 44,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 35,  131 => 31,  128 => 30,  120 => 28,  117 => 48,  114 => 35,  109 => 38,  106 => 21,  100 => 47,  96 => 36,  93 => 33,  90 => 43,  87 => 19,  83 => 53,  79 => 25,  71 => 20,  62 => 17,  58 => 13,  55 => 12,  52 => 16,  49 => 16,  46 => 9,  43 => 8,  40 => 7,  37 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
