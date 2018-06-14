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
        $__internal_87c3f19d4a348229cfa33e04f53da5025da614df6dedcfb2af00f42c7c21a355 = $this->env->getExtension("native_profiler");
        $__internal_87c3f19d4a348229cfa33e04f53da5025da614df6dedcfb2af00f42c7c21a355->enter($__internal_87c3f19d4a348229cfa33e04f53da5025da614df6dedcfb2af00f42c7c21a355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c3f19d4a348229cfa33e04f53da5025da614df6dedcfb2af00f42c7c21a355->leave($__internal_87c3f19d4a348229cfa33e04f53da5025da614df6dedcfb2af00f42c7c21a355_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e052d948f063c44c6b67956c89f995b6bd40b19ebea3d171908b092b9cd562b7 = $this->env->getExtension("native_profiler");
        $__internal_e052d948f063c44c6b67956c89f995b6bd40b19ebea3d171908b092b9cd562b7->enter($__internal_e052d948f063c44c6b67956c89f995b6bd40b19ebea3d171908b092b9cd562b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e052d948f063c44c6b67956c89f995b6bd40b19ebea3d171908b092b9cd562b7->leave($__internal_e052d948f063c44c6b67956c89f995b6bd40b19ebea3d171908b092b9cd562b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4be1d426ec612057e052cd46b04150ef18b7b1f7367d1aa3e67d27f95d32388d = $this->env->getExtension("native_profiler");
        $__internal_4be1d426ec612057e052cd46b04150ef18b7b1f7367d1aa3e67d27f95d32388d->enter($__internal_4be1d426ec612057e052cd46b04150ef18b7b1f7367d1aa3e67d27f95d32388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4be1d426ec612057e052cd46b04150ef18b7b1f7367d1aa3e67d27f95d32388d->leave($__internal_4be1d426ec612057e052cd46b04150ef18b7b1f7367d1aa3e67d27f95d32388d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1e48146c27ae51f150c8af68640cfe8f6d420465cf29bfc5caac09578486587 = $this->env->getExtension("native_profiler");
        $__internal_c1e48146c27ae51f150c8af68640cfe8f6d420465cf29bfc5caac09578486587->enter($__internal_c1e48146c27ae51f150c8af68640cfe8f6d420465cf29bfc5caac09578486587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c1e48146c27ae51f150c8af68640cfe8f6d420465cf29bfc5caac09578486587->leave($__internal_c1e48146c27ae51f150c8af68640cfe8f6d420465cf29bfc5caac09578486587_prof);

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
