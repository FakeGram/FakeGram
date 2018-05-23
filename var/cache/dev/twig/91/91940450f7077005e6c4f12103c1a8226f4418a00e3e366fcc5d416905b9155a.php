<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c62faf47503bd69e5016f85f4a9de9a98a2e16d3ee4f11f2fa17401eeef3609b extends Twig_Template
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
        $__internal_63669850cd10cf38db0d0f93d695de31316cd035e82f5de1e69d285d15e0c4f9 = $this->env->getExtension("native_profiler");
        $__internal_63669850cd10cf38db0d0f93d695de31316cd035e82f5de1e69d285d15e0c4f9->enter($__internal_63669850cd10cf38db0d0f93d695de31316cd035e82f5de1e69d285d15e0c4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63669850cd10cf38db0d0f93d695de31316cd035e82f5de1e69d285d15e0c4f9->leave($__internal_63669850cd10cf38db0d0f93d695de31316cd035e82f5de1e69d285d15e0c4f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f14dba5b84afe00d7a3eb4e21f44382c972867cf5d617baa3cdf69a6ce061339 = $this->env->getExtension("native_profiler");
        $__internal_f14dba5b84afe00d7a3eb4e21f44382c972867cf5d617baa3cdf69a6ce061339->enter($__internal_f14dba5b84afe00d7a3eb4e21f44382c972867cf5d617baa3cdf69a6ce061339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f14dba5b84afe00d7a3eb4e21f44382c972867cf5d617baa3cdf69a6ce061339->leave($__internal_f14dba5b84afe00d7a3eb4e21f44382c972867cf5d617baa3cdf69a6ce061339_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb2260bbfb14ad20c18cb280b90d64304db04767e43e9d61615b1bbcaae3b8f9 = $this->env->getExtension("native_profiler");
        $__internal_eb2260bbfb14ad20c18cb280b90d64304db04767e43e9d61615b1bbcaae3b8f9->enter($__internal_eb2260bbfb14ad20c18cb280b90d64304db04767e43e9d61615b1bbcaae3b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb2260bbfb14ad20c18cb280b90d64304db04767e43e9d61615b1bbcaae3b8f9->leave($__internal_eb2260bbfb14ad20c18cb280b90d64304db04767e43e9d61615b1bbcaae3b8f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a0f743d91a2f21c5bb3d04c27f6639ff4e88090eac201cec2341818b9f9c2a = $this->env->getExtension("native_profiler");
        $__internal_c5a0f743d91a2f21c5bb3d04c27f6639ff4e88090eac201cec2341818b9f9c2a->enter($__internal_c5a0f743d91a2f21c5bb3d04c27f6639ff4e88090eac201cec2341818b9f9c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c5a0f743d91a2f21c5bb3d04c27f6639ff4e88090eac201cec2341818b9f9c2a->leave($__internal_c5a0f743d91a2f21c5bb3d04c27f6639ff4e88090eac201cec2341818b9f9c2a_prof);

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
