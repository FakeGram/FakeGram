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
        $__internal_d8fb21a8f26747c81d1a3208aa7d50cb60ebe9c20489a50e9aab6f1835244add = $this->env->getExtension("native_profiler");
        $__internal_d8fb21a8f26747c81d1a3208aa7d50cb60ebe9c20489a50e9aab6f1835244add->enter($__internal_d8fb21a8f26747c81d1a3208aa7d50cb60ebe9c20489a50e9aab6f1835244add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8fb21a8f26747c81d1a3208aa7d50cb60ebe9c20489a50e9aab6f1835244add->leave($__internal_d8fb21a8f26747c81d1a3208aa7d50cb60ebe9c20489a50e9aab6f1835244add_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d37d6f22abe2c0e0ff8418e4d44b188032052d5aa8af5bc57bc3df1a0293fef = $this->env->getExtension("native_profiler");
        $__internal_1d37d6f22abe2c0e0ff8418e4d44b188032052d5aa8af5bc57bc3df1a0293fef->enter($__internal_1d37d6f22abe2c0e0ff8418e4d44b188032052d5aa8af5bc57bc3df1a0293fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d37d6f22abe2c0e0ff8418e4d44b188032052d5aa8af5bc57bc3df1a0293fef->leave($__internal_1d37d6f22abe2c0e0ff8418e4d44b188032052d5aa8af5bc57bc3df1a0293fef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4788ea27fbdf1f7ceca111a2a5304cbb5f56d5592d51fb382500e63824459d52 = $this->env->getExtension("native_profiler");
        $__internal_4788ea27fbdf1f7ceca111a2a5304cbb5f56d5592d51fb382500e63824459d52->enter($__internal_4788ea27fbdf1f7ceca111a2a5304cbb5f56d5592d51fb382500e63824459d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4788ea27fbdf1f7ceca111a2a5304cbb5f56d5592d51fb382500e63824459d52->leave($__internal_4788ea27fbdf1f7ceca111a2a5304cbb5f56d5592d51fb382500e63824459d52_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7eb8dedab834b0559f5857c251979da87446831f9f699fd4b3350b42d140935 = $this->env->getExtension("native_profiler");
        $__internal_b7eb8dedab834b0559f5857c251979da87446831f9f699fd4b3350b42d140935->enter($__internal_b7eb8dedab834b0559f5857c251979da87446831f9f699fd4b3350b42d140935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b7eb8dedab834b0559f5857c251979da87446831f9f699fd4b3350b42d140935->leave($__internal_b7eb8dedab834b0559f5857c251979da87446831f9f699fd4b3350b42d140935_prof);

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
