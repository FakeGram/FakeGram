<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_39ccc462c91eb9e5d09a227fb8010c5d41601959c434958780a6458c9303a21b extends Twig_Template
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
        $__internal_659643a0351b6f6d62846c3796959861b3b5f99fd964b1b0d40838a65d5c189e = $this->env->getExtension("native_profiler");
        $__internal_659643a0351b6f6d62846c3796959861b3b5f99fd964b1b0d40838a65d5c189e->enter($__internal_659643a0351b6f6d62846c3796959861b3b5f99fd964b1b0d40838a65d5c189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659643a0351b6f6d62846c3796959861b3b5f99fd964b1b0d40838a65d5c189e->leave($__internal_659643a0351b6f6d62846c3796959861b3b5f99fd964b1b0d40838a65d5c189e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_049bb147f628fc7e42901deec58ae69774baf5e6ee745dbd628ddd7715acd61a = $this->env->getExtension("native_profiler");
        $__internal_049bb147f628fc7e42901deec58ae69774baf5e6ee745dbd628ddd7715acd61a->enter($__internal_049bb147f628fc7e42901deec58ae69774baf5e6ee745dbd628ddd7715acd61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_049bb147f628fc7e42901deec58ae69774baf5e6ee745dbd628ddd7715acd61a->leave($__internal_049bb147f628fc7e42901deec58ae69774baf5e6ee745dbd628ddd7715acd61a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5be430abb1faafa3c442cdd0f4655199abcfb6ea172f3bc18d860497910a5bfa = $this->env->getExtension("native_profiler");
        $__internal_5be430abb1faafa3c442cdd0f4655199abcfb6ea172f3bc18d860497910a5bfa->enter($__internal_5be430abb1faafa3c442cdd0f4655199abcfb6ea172f3bc18d860497910a5bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5be430abb1faafa3c442cdd0f4655199abcfb6ea172f3bc18d860497910a5bfa->leave($__internal_5be430abb1faafa3c442cdd0f4655199abcfb6ea172f3bc18d860497910a5bfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8df64d4a4d413d9032ed4fe2081cbe3d682839d384106f6d3d409adfcdefc6 = $this->env->getExtension("native_profiler");
        $__internal_9d8df64d4a4d413d9032ed4fe2081cbe3d682839d384106f6d3d409adfcdefc6->enter($__internal_9d8df64d4a4d413d9032ed4fe2081cbe3d682839d384106f6d3d409adfcdefc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d8df64d4a4d413d9032ed4fe2081cbe3d682839d384106f6d3d409adfcdefc6->leave($__internal_9d8df64d4a4d413d9032ed4fe2081cbe3d682839d384106f6d3d409adfcdefc6_prof);

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
