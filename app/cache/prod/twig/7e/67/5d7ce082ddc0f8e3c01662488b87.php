<?php

/* ::base.html.twig */
class __TwigTemplate_7e675d7ce082ddc0f8e3c01662488b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  51 => 5,  45 => 12,  42 => 11,  33 => 7,  31 => 6,  27 => 5,  21 => 1,  148 => 41,  145 => 40,  142 => 39,  137 => 35,  134 => 34,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  100 => 21,  97 => 20,  92 => 16,  89 => 15,  82 => 44,  80 => 39,  76 => 37,  74 => 34,  69 => 31,  67 => 11,  63 => 18,  61 => 15,  57 => 6,  54 => 12,  48 => 9,  43 => 8,  40 => 10,  35 => 4,  32 => 3,  29 => 4,  26 => 3,);
    }
}
