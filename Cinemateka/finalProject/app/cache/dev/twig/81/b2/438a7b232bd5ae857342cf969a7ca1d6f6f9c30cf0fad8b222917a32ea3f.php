<?php

/* cineBundle:Default:index.html.twig */
class __TwigTemplate_81b2438a7b232bd5ae857342cf969a7ca1d6f6f9c30cf0fad8b222917a32ea3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("cineBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cinemateka";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    

    <h1 class=\"title\">Welcome to Cinemateka!</h1>

    
    
    <div class = \"logo\" >
           
        </div>
        <div id = \"intro\" class = \"intro\" >
            <div class = \"slogan\" >
                <select>
                    <option value = \"\" > Selecciona tu ciudad: </option>
                    <option value = \"corrientes\" > Corrientes </option>
                    <option value = \"resistencia\" > Resistencia </option>
                </select>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "cineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
