<?php

/* ::spokuwa.html.twig */
class __TwigTemplate_34df11b1ed926089c20afdfee68f7c70 extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_CLIENT")) {
            // line 19
            echo "            ";
            $this->env->loadTemplate("::spokuwa_client.html.twig")->display($context);
            // line 20
            echo "        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_STUDENT")) {
            // line 21
            echo "            ";
            $this->env->loadTemplate("::spokuwa_student.html.twig")->display($context);
            // line 22
            echo "        ";
        }
        // line 23
        echo "      </div>
      <!-- end .grid_3 -->
      <div class=\"grid_9\" id=\"content\">
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "      </div>
      <div class=\"grid_12\" id=\"footer\">
        ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 34
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

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "            <p>
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("impressum"), "html", null, true);
        echo "\">Copyright &copy; Stephan Biastoch 2010 - 2013</a>
            </p>
        ";
    }

    public function getTemplateName()
    {
        return "::spokuwa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  114 => 30,  111 => 29,  106 => 26,  100 => 15,  93 => 34,  91 => 29,  87 => 27,  85 => 26,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  66 => 18,  60 => 15,  56 => 13,  53 => 12,  47 => 9,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
