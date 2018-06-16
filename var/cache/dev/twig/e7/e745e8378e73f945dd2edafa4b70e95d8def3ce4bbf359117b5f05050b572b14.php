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
        $__internal_614ef97f282cbe0bb17a3185a0f9ebbca426c37d8372e6dd0785d462bf577c60 = $this->env->getExtension("native_profiler");
        $__internal_614ef97f282cbe0bb17a3185a0f9ebbca426c37d8372e6dd0785d462bf577c60->enter($__internal_614ef97f282cbe0bb17a3185a0f9ebbca426c37d8372e6dd0785d462bf577c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614ef97f282cbe0bb17a3185a0f9ebbca426c37d8372e6dd0785d462bf577c60->leave($__internal_614ef97f282cbe0bb17a3185a0f9ebbca426c37d8372e6dd0785d462bf577c60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3caad44b37307b8ce5e3dfae781bfd74fe0829dc7d470e01393a83eb8edf134d = $this->env->getExtension("native_profiler");
        $__internal_3caad44b37307b8ce5e3dfae781bfd74fe0829dc7d470e01393a83eb8edf134d->enter($__internal_3caad44b37307b8ce5e3dfae781bfd74fe0829dc7d470e01393a83eb8edf134d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3caad44b37307b8ce5e3dfae781bfd74fe0829dc7d470e01393a83eb8edf134d->leave($__internal_3caad44b37307b8ce5e3dfae781bfd74fe0829dc7d470e01393a83eb8edf134d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1af9c2828ea61447e0e42a85aa65b85c4a1123947a44cdf5b38127c2d84f53d = $this->env->getExtension("native_profiler");
        $__internal_d1af9c2828ea61447e0e42a85aa65b85c4a1123947a44cdf5b38127c2d84f53d->enter($__internal_d1af9c2828ea61447e0e42a85aa65b85c4a1123947a44cdf5b38127c2d84f53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d1af9c2828ea61447e0e42a85aa65b85c4a1123947a44cdf5b38127c2d84f53d->leave($__internal_d1af9c2828ea61447e0e42a85aa65b85c4a1123947a44cdf5b38127c2d84f53d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef0892aacbf34bc82a651d44849807859ac6ea5b572ab72beadb880525d14e9 = $this->env->getExtension("native_profiler");
        $__internal_2ef0892aacbf34bc82a651d44849807859ac6ea5b572ab72beadb880525d14e9->enter($__internal_2ef0892aacbf34bc82a651d44849807859ac6ea5b572ab72beadb880525d14e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2ef0892aacbf34bc82a651d44849807859ac6ea5b572ab72beadb880525d14e9->leave($__internal_2ef0892aacbf34bc82a651d44849807859ac6ea5b572ab72beadb880525d14e9_prof);

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
