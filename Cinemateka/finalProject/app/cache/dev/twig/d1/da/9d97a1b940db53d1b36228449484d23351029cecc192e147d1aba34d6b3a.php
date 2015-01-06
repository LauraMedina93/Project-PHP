<?php

/* cineBundle:Default:addMovie.html.twig */
class __TwigTemplate_d1da9d97a1b940db53d1b36228449484d23351029cecc192e147d1aba34d6b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("cineBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_add_movie");
        echo "\" method=\"POST\" id=\"contact_form\">
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Gender", array()), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Year", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Director", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Description", array()), 'row');
        echo "

            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            <input type=\"submit\" value=\"Load\" class=\"symfony-button-grey\" />
            
        </form>
           
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
        return array (  75 => 16,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  49 => 8,  44 => 7,  41 => 6,  37 => 22,  35 => 6,  32 => 5,  29 => 4,);
    }
}
