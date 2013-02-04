<?php

/* ::spokuwa_base.html.twig */
class __TwigTemplate_bfa28be4fba0977037cb21c6198cdfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navi' => array($this, 'block_navi'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Willkommen beim Online-Wahlsystem für Sportkurse!
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SpoKuWa/css/960gs.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SpoKuWa/css/homepage.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container_12\">
        <div class=\"grid_12\" id=\"header\">
            <h1>";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>        
        </div>
      <div class=\"grid_3\" id=\"navi\">            
      ";
        // line 18
        $this->displayBlock('navi', $context, $blocks);
        // line 19
        echo "      </div>
      <!-- end .grid_3 -->
      <div class=\"grid_9\" id=\"content\">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "      </div>
      <div class=\"grid_12\" id=\"footer\">
        ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "      </div>
      <!-- end .grid_12 -->
    </div>
";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        echo "SpoKuWa";
    }

    // line 18
    public function block_navi($context, array $blocks = array())
    {
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "            
        ";
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "            <p>
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impressum"), "html", null, true);
        echo "\">Copyright &copy; Stephan Biastoch 2010 - 2013</a>
            </p>
        ";
    }

    public function getTemplateName()
    {
        return "::spokuwa_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  111 => 28,  108 => 27,  103 => 23,  100 => 22,  95 => 18,  89 => 15,  82 => 32,  80 => 27,  76 => 25,  74 => 22,  69 => 19,  67 => 18,  61 => 15,  57 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 7,  35 => 4,  32 => 3,);
    }
}
