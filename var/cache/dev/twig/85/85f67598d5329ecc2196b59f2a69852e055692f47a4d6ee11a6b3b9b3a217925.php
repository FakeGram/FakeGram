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
        $__internal_87c0ebb8368524ff92813c5248ca792e49f77d3907b84fbf7458a452fec136c0 = $this->env->getExtension("native_profiler");
        $__internal_87c0ebb8368524ff92813c5248ca792e49f77d3907b84fbf7458a452fec136c0->enter($__internal_87c0ebb8368524ff92813c5248ca792e49f77d3907b84fbf7458a452fec136c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c0ebb8368524ff92813c5248ca792e49f77d3907b84fbf7458a452fec136c0->leave($__internal_87c0ebb8368524ff92813c5248ca792e49f77d3907b84fbf7458a452fec136c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6fc7bf0961efe99ee4d5d8b75f224956df778f4cbfdaab9ec85e1929751d571 = $this->env->getExtension("native_profiler");
        $__internal_b6fc7bf0961efe99ee4d5d8b75f224956df778f4cbfdaab9ec85e1929751d571->enter($__internal_b6fc7bf0961efe99ee4d5d8b75f224956df778f4cbfdaab9ec85e1929751d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6fc7bf0961efe99ee4d5d8b75f224956df778f4cbfdaab9ec85e1929751d571->leave($__internal_b6fc7bf0961efe99ee4d5d8b75f224956df778f4cbfdaab9ec85e1929751d571_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b2443a8f98f7052a23ed00000f7f2c5467b38e3d453eea5bfac029f4992201b = $this->env->getExtension("native_profiler");
        $__internal_6b2443a8f98f7052a23ed00000f7f2c5467b38e3d453eea5bfac029f4992201b->enter($__internal_6b2443a8f98f7052a23ed00000f7f2c5467b38e3d453eea5bfac029f4992201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b2443a8f98f7052a23ed00000f7f2c5467b38e3d453eea5bfac029f4992201b->leave($__internal_6b2443a8f98f7052a23ed00000f7f2c5467b38e3d453eea5bfac029f4992201b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32de30a86d7d0d0cd75614047de01a0e1a968e1f8297e910a2ff355066eb91ab = $this->env->getExtension("native_profiler");
        $__internal_32de30a86d7d0d0cd75614047de01a0e1a968e1f8297e910a2ff355066eb91ab->enter($__internal_32de30a86d7d0d0cd75614047de01a0e1a968e1f8297e910a2ff355066eb91ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_32de30a86d7d0d0cd75614047de01a0e1a968e1f8297e910a2ff355066eb91ab->leave($__internal_32de30a86d7d0d0cd75614047de01a0e1a968e1f8297e910a2ff355066eb91ab_prof);

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
