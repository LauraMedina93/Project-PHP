<?php

/* cineBundle:Default:getMovies.html.twig */
class __TwigTemplate_0645f6e4d79e3a20129f9c21835e0285a14768fa3b456d5b002adc907091ff30 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "        <h1>Movies</h1>
        <br>
        <table border=\"3\">
            <tr>
                <th>Movie ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Year</th>
                <th>Director</th>
                <th>Description</th>
            </tr>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 17
            echo "                <tr>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "gender", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "year", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "director", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "description", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </table>

    ";
    }

    public function getTemplateName()
    {
        return "cineBundle:Default:getMovies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  56 => 17,  52 => 16,  39 => 5,  32 => 4,  29 => 3,);
    }
}
