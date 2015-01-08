<?php

/* cineBundle:Default:getCines.html.twig */
class __TwigTemplate_430b7b1256ed6b527bb475e2131b595535d52a77bfbec6ed23f45c59e5f019e9 extends Twig_Template
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
        echo "        <h1>Cines</h1>
        <br>
        <table border=\"3\">
            <tr>
                <th>Cine ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Carteleras</th>
                
            </tr>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cines"]) ? $context["cines"] : $this->getContext($context, "cines")));
        foreach ($context['_seq'] as $context["_key"] => $context["cine"]) {
            // line 16
            echo "                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "address", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cine"], "carteleras", array()), "html", null, true);
            echo "</td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </table>

    ";
    }

    public function getTemplateName()
    {
        return "cineBundle:Default:getCines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  55 => 16,  51 => 15,  39 => 5,  32 => 4,  29 => 3,);
    }
}
