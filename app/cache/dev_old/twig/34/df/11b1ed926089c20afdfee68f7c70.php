<?php

/* ::spokuwa.html.twig */
class __TwigTemplate_34df11b1ed926089c20afdfee68f7c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('security')->isGranted("ROLE_CLIENT")) {
            // line 2
            echo "    ";
            $this->env->loadTemplate("::spokuwa_client.html.twig")->display($context);
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_STUDENT")) {
            // line 4
            echo "    ";
            $this->env->loadTemplate("::spokuwa_student.html.twig")->display($context);
        }
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
        return array (  23 => 4,  19 => 2,  17 => 1,);
    }
}
