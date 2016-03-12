<?php

/* base.html.twig */
class __TwigTemplate_cb445fedf54d06991663d5b104ce4c0e79dbb356454c3c7073a9be6fdf27d418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba9cffc5d8b3d6fc78d973e3d8056e9762dbe9ead6163bcff3a2c0a5428d2dc0 = $this->env->getExtension("native_profiler");
        $__internal_ba9cffc5d8b3d6fc78d973e3d8056e9762dbe9ead6163bcff3a2c0a5428d2dc0->enter($__internal_ba9cffc5d8b3d6fc78d973e3d8056e9762dbe9ead6163bcff3a2c0a5428d2dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ba9cffc5d8b3d6fc78d973e3d8056e9762dbe9ead6163bcff3a2c0a5428d2dc0->leave($__internal_ba9cffc5d8b3d6fc78d973e3d8056e9762dbe9ead6163bcff3a2c0a5428d2dc0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dddaa6697938bc2a373a4fccd5c2b44532f3d05949ff515ab11d9899936ddbd7 = $this->env->getExtension("native_profiler");
        $__internal_dddaa6697938bc2a373a4fccd5c2b44532f3d05949ff515ab11d9899936ddbd7->enter($__internal_dddaa6697938bc2a373a4fccd5c2b44532f3d05949ff515ab11d9899936ddbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Coding Exercise!";
        
        $__internal_dddaa6697938bc2a373a4fccd5c2b44532f3d05949ff515ab11d9899936ddbd7->leave($__internal_dddaa6697938bc2a373a4fccd5c2b44532f3d05949ff515ab11d9899936ddbd7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5dcd655ac1eca96c8538ecabf5c85e76755dbc9250aba06ac1a1b394afb110ea = $this->env->getExtension("native_profiler");
        $__internal_5dcd655ac1eca96c8538ecabf5c85e76755dbc9250aba06ac1a1b394afb110ea->enter($__internal_5dcd655ac1eca96c8538ecabf5c85e76755dbc9250aba06ac1a1b394afb110ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5dcd655ac1eca96c8538ecabf5c85e76755dbc9250aba06ac1a1b394afb110ea->leave($__internal_5dcd655ac1eca96c8538ecabf5c85e76755dbc9250aba06ac1a1b394afb110ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5e4d561be14f51273db754045dc41eb24d3834e05477d85dcbc39ba4d269e30 = $this->env->getExtension("native_profiler");
        $__internal_e5e4d561be14f51273db754045dc41eb24d3834e05477d85dcbc39ba4d269e30->enter($__internal_e5e4d561be14f51273db754045dc41eb24d3834e05477d85dcbc39ba4d269e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5e4d561be14f51273db754045dc41eb24d3834e05477d85dcbc39ba4d269e30->leave($__internal_e5e4d561be14f51273db754045dc41eb24d3834e05477d85dcbc39ba4d269e30_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20df5c56164b4d4c25bcf49e9ded8973afad573bfdccf887ed490d5810d00609 = $this->env->getExtension("native_profiler");
        $__internal_20df5c56164b4d4c25bcf49e9ded8973afad573bfdccf887ed490d5810d00609->enter($__internal_20df5c56164b4d4c25bcf49e9ded8973afad573bfdccf887ed490d5810d00609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20df5c56164b4d4c25bcf49e9ded8973afad573bfdccf887ed490d5810d00609->leave($__internal_20df5c56164b4d4c25bcf49e9ded8973afad573bfdccf887ed490d5810d00609_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Coding Exercise!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
