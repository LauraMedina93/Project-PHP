<?php

/* cineBundle:Default:addMovie.html.twig */
class __TwigTemplate_d1da9d97a1b940db53d1b36228449484d23351029cecc192e147d1aba34d6b3a extends Twig_Template
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
        echo "Película agregada con éxito";
        echo "

Película: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
Género: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["gender"]) ? $context["gender"] : $this->getContext($context, "gender")), "html", null, true);
        echo "!
Director: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["director"]) ? $context["director"] : $this->getContext($context, "director")), "html", null, true);
        echo "!
Año: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "!
Descripción: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "!

";
    }

    public function getTemplateName()
    {
        return "cineBundle:Default:addMovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
