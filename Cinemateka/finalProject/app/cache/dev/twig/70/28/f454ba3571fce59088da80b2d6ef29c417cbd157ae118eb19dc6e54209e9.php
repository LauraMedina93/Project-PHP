<?php

/* cineBundle:Default:addProvince.html.twig */
class __TwigTemplate_7028f454ba3571fce59088da80b2d6ef29c417cbd157ae118eb19dc6e54209e9 extends Twig_Template
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
        echo "


Las ciudades es ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "html", null, true);
        echo "! y la ciudad es ";
        echo twig_escape_filter($this->env, (isset($context["other"]) ? $context["other"] : $this->getContext($context, "other")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "cineBundle:Default:addProvince.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
