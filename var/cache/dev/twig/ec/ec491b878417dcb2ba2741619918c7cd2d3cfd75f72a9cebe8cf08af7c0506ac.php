<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16c1d3265667cbe21ae2a981719bc17b4ee68fcaf9de14b42456db6665711870 extends Twig_Template
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
        $__internal_2f0e32b815935ebbfabf3d99e5fb00d031b71ab206acc3fb78b09672158aa7a1 = $this->env->getExtension("native_profiler");
        $__internal_2f0e32b815935ebbfabf3d99e5fb00d031b71ab206acc3fb78b09672158aa7a1->enter($__internal_2f0e32b815935ebbfabf3d99e5fb00d031b71ab206acc3fb78b09672158aa7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0e32b815935ebbfabf3d99e5fb00d031b71ab206acc3fb78b09672158aa7a1->leave($__internal_2f0e32b815935ebbfabf3d99e5fb00d031b71ab206acc3fb78b09672158aa7a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a23be81bc628fb42e45b0b1d6ea3fd7d33be96d17ae5a75e8858d8c48b92339 = $this->env->getExtension("native_profiler");
        $__internal_6a23be81bc628fb42e45b0b1d6ea3fd7d33be96d17ae5a75e8858d8c48b92339->enter($__internal_6a23be81bc628fb42e45b0b1d6ea3fd7d33be96d17ae5a75e8858d8c48b92339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a23be81bc628fb42e45b0b1d6ea3fd7d33be96d17ae5a75e8858d8c48b92339->leave($__internal_6a23be81bc628fb42e45b0b1d6ea3fd7d33be96d17ae5a75e8858d8c48b92339_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61fa835a671d9913aa5689b252434d3a4d1a3d494977ca42c4f466606af2493e = $this->env->getExtension("native_profiler");
        $__internal_61fa835a671d9913aa5689b252434d3a4d1a3d494977ca42c4f466606af2493e->enter($__internal_61fa835a671d9913aa5689b252434d3a4d1a3d494977ca42c4f466606af2493e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61fa835a671d9913aa5689b252434d3a4d1a3d494977ca42c4f466606af2493e->leave($__internal_61fa835a671d9913aa5689b252434d3a4d1a3d494977ca42c4f466606af2493e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df3b3ff558ffccd9098836d0bf849a9eed236decc53010b7a2907976b534f4c7 = $this->env->getExtension("native_profiler");
        $__internal_df3b3ff558ffccd9098836d0bf849a9eed236decc53010b7a2907976b534f4c7->enter($__internal_df3b3ff558ffccd9098836d0bf849a9eed236decc53010b7a2907976b534f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_df3b3ff558ffccd9098836d0bf849a9eed236decc53010b7a2907976b534f4c7->leave($__internal_df3b3ff558ffccd9098836d0bf849a9eed236decc53010b7a2907976b534f4c7_prof);

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
