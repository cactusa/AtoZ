<?php

/* atoz/index.html.twig */
class __TwigTemplate_87edb860ce51be210daad1092863824ca116e37e196eaa06965f5b29d279ba91 extends Twig_Template
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
        $__internal_58c70e5ed203017cd89c09826be20b29b8682f4c4b85a19265cae6421140d19a = $this->env->getExtension("native_profiler");
        $__internal_58c70e5ed203017cd89c09826be20b29b8682f4c4b85a19265cae6421140d19a->enter($__internal_58c70e5ed203017cd89c09826be20b29b8682f4c4b85a19265cae6421140d19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atoz/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c70e5ed203017cd89c09826be20b29b8682f4c4b85a19265cae6421140d19a->leave($__internal_58c70e5ed203017cd89c09826be20b29b8682f4c4b85a19265cae6421140d19a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7d8fed419c522b9c3458b8037c41e1ebe1f318d3b0610b44e34db773ad70c4 = $this->env->getExtension("native_profiler");
        $__internal_ec7d8fed419c522b9c3458b8037c41e1ebe1f318d3b0610b44e34db773ad70c4->enter($__internal_ec7d8fed419c522b9c3458b8037c41e1ebe1f318d3b0610b44e34db773ad70c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        Testing this thing.<br/>
        <b>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["testing"]) ? $context["testing"] : $this->getContext($context, "testing")), "html", null, true);
        echo "</b><br/>
        <b>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["letter"]) ? $context["letter"] : $this->getContext($context, "letter")), "html", null, true);
        echo "</b>
    </div>
";
        
        $__internal_ec7d8fed419c522b9c3458b8037c41e1ebe1f318d3b0610b44e34db773ad70c4->leave($__internal_ec7d8fed419c522b9c3458b8037c41e1ebe1f318d3b0610b44e34db773ad70c4_prof);

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
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         Testing this thing.<br/>*/
/*         <b>{{ testing }}</b><br/>*/
/*         <b>{{ letter }}</b>*/
/*     </div>*/
/* {% endblock %}*/
/* */
