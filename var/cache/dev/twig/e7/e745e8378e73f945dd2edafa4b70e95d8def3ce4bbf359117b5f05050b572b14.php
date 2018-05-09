<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8d2e79bf3b834e1173f463c44b98fbb831ddc43d45413c436964a13f0fa78a9e extends Twig_Template
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
        $__internal_053190a746e0b83c03a4d2944c8aa4af3030094c0a88bee9f3f0c8a644ef0688 = $this->env->getExtension("native_profiler");
        $__internal_053190a746e0b83c03a4d2944c8aa4af3030094c0a88bee9f3f0c8a644ef0688->enter($__internal_053190a746e0b83c03a4d2944c8aa4af3030094c0a88bee9f3f0c8a644ef0688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_053190a746e0b83c03a4d2944c8aa4af3030094c0a88bee9f3f0c8a644ef0688->leave($__internal_053190a746e0b83c03a4d2944c8aa4af3030094c0a88bee9f3f0c8a644ef0688_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b8e60d82d8ed4822afa981039718c7b67109b3dc303923cb9738f4ef0ef7df3 = $this->env->getExtension("native_profiler");
        $__internal_8b8e60d82d8ed4822afa981039718c7b67109b3dc303923cb9738f4ef0ef7df3->enter($__internal_8b8e60d82d8ed4822afa981039718c7b67109b3dc303923cb9738f4ef0ef7df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8b8e60d82d8ed4822afa981039718c7b67109b3dc303923cb9738f4ef0ef7df3->leave($__internal_8b8e60d82d8ed4822afa981039718c7b67109b3dc303923cb9738f4ef0ef7df3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de87dd74b77f750394032cc2c52e34b422a10099f063b7a1e998ce20c35d599f = $this->env->getExtension("native_profiler");
        $__internal_de87dd74b77f750394032cc2c52e34b422a10099f063b7a1e998ce20c35d599f->enter($__internal_de87dd74b77f750394032cc2c52e34b422a10099f063b7a1e998ce20c35d599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de87dd74b77f750394032cc2c52e34b422a10099f063b7a1e998ce20c35d599f->leave($__internal_de87dd74b77f750394032cc2c52e34b422a10099f063b7a1e998ce20c35d599f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d48f1c4818d32586338fb41ce5ff0d0da09da4fcdc6596f35092cf6a6e92dc0e = $this->env->getExtension("native_profiler");
        $__internal_d48f1c4818d32586338fb41ce5ff0d0da09da4fcdc6596f35092cf6a6e92dc0e->enter($__internal_d48f1c4818d32586338fb41ce5ff0d0da09da4fcdc6596f35092cf6a6e92dc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d48f1c4818d32586338fb41ce5ff0d0da09da4fcdc6596f35092cf6a6e92dc0e->leave($__internal_d48f1c4818d32586338fb41ce5ff0d0da09da4fcdc6596f35092cf6a6e92dc0e_prof);

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
