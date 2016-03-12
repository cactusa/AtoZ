<?php

/* atoz/index.html.twig */
class __TwigTemplate_1efd3a63e978c8e2f6c5aa0a0853d1e2f6192f2b208c32d8d26563fcc620bd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atoz/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        Testing this thing.
        <b>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["testing"]) ? $context["testing"] : null), "html", null, true);
        echo "</b>
    </div>
";
    }

    public function getTemplateName()
    {
        return "atoz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         Testing this thing.*/
/*         <b>{{ testing }}</b>*/
/*     </div>*/
/* {% endblock %}*/
/* */
