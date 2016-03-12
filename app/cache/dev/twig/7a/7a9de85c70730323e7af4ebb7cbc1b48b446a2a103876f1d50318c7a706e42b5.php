<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23e41a798fdf1861e9d167fd3093ef7e3c38dbc6d7d83d2851b4530e496a75da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b18f36ff23a25cd0c769d49428fbe915967469de6b828400eb5ccfd816a84f12 = $this->env->getExtension("native_profiler");
        $__internal_b18f36ff23a25cd0c769d49428fbe915967469de6b828400eb5ccfd816a84f12->enter($__internal_b18f36ff23a25cd0c769d49428fbe915967469de6b828400eb5ccfd816a84f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18f36ff23a25cd0c769d49428fbe915967469de6b828400eb5ccfd816a84f12->leave($__internal_b18f36ff23a25cd0c769d49428fbe915967469de6b828400eb5ccfd816a84f12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbfe45e976311941248e962d1674aa73100f5773cc9e9227a76aae19f80cb832 = $this->env->getExtension("native_profiler");
        $__internal_fbfe45e976311941248e962d1674aa73100f5773cc9e9227a76aae19f80cb832->enter($__internal_fbfe45e976311941248e962d1674aa73100f5773cc9e9227a76aae19f80cb832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbfe45e976311941248e962d1674aa73100f5773cc9e9227a76aae19f80cb832->leave($__internal_fbfe45e976311941248e962d1674aa73100f5773cc9e9227a76aae19f80cb832_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37c5c549e5beab699435309087e742bee92dccedb04e23c44936f3d49a2d6d79 = $this->env->getExtension("native_profiler");
        $__internal_37c5c549e5beab699435309087e742bee92dccedb04e23c44936f3d49a2d6d79->enter($__internal_37c5c549e5beab699435309087e742bee92dccedb04e23c44936f3d49a2d6d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37c5c549e5beab699435309087e742bee92dccedb04e23c44936f3d49a2d6d79->leave($__internal_37c5c549e5beab699435309087e742bee92dccedb04e23c44936f3d49a2d6d79_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ffc75c0304a16e9abdde411a01629d7c25447b99fc00cc3a76cd94dcc61d53 = $this->env->getExtension("native_profiler");
        $__internal_b3ffc75c0304a16e9abdde411a01629d7c25447b99fc00cc3a76cd94dcc61d53->enter($__internal_b3ffc75c0304a16e9abdde411a01629d7c25447b99fc00cc3a76cd94dcc61d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3ffc75c0304a16e9abdde411a01629d7c25447b99fc00cc3a76cd94dcc61d53->leave($__internal_b3ffc75c0304a16e9abdde411a01629d7c25447b99fc00cc3a76cd94dcc61d53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
