<?php

/* BCloudSpoKuWaBundle:Secured:login.html.twig */
class __TwigTemplate_2bff8acb19276c5379ff7b8e230feaf8 extends Twig_Template
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
        echo "
";
        // line 5
        if ($this->getContext($context, "error")) {
            // line 6
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t<label for=\"username\">Username:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
\t<label for=\"password\">Password:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />    
\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Keep me logged in</label>
\t<input type=\"hidden\" name=\"_target_path\" value=\"/spokuwa\" />
\t<button type=\"submit\">login</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "BCloudSpoKuWaBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  43 => 9,  40 => 8,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
