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
        $__internal_d5dcef220fa2a1df4b006e5cb7fa0d529f18b3211757bc464cf8bfb3dd12b8d6 = $this->env->getExtension("native_profiler");
        $__internal_d5dcef220fa2a1df4b006e5cb7fa0d529f18b3211757bc464cf8bfb3dd12b8d6->enter($__internal_d5dcef220fa2a1df4b006e5cb7fa0d529f18b3211757bc464cf8bfb3dd12b8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5dcef220fa2a1df4b006e5cb7fa0d529f18b3211757bc464cf8bfb3dd12b8d6->leave($__internal_d5dcef220fa2a1df4b006e5cb7fa0d529f18b3211757bc464cf8bfb3dd12b8d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d642f60a11986d52d5e44eedd1ebede48b24060f229a3b9ef336f809e3af9ee = $this->env->getExtension("native_profiler");
        $__internal_7d642f60a11986d52d5e44eedd1ebede48b24060f229a3b9ef336f809e3af9ee->enter($__internal_7d642f60a11986d52d5e44eedd1ebede48b24060f229a3b9ef336f809e3af9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d642f60a11986d52d5e44eedd1ebede48b24060f229a3b9ef336f809e3af9ee->leave($__internal_7d642f60a11986d52d5e44eedd1ebede48b24060f229a3b9ef336f809e3af9ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78df5387e6bbbc925593c6642aef1de869c2ffaf9e72520be9b0e355c99cd1e6 = $this->env->getExtension("native_profiler");
        $__internal_78df5387e6bbbc925593c6642aef1de869c2ffaf9e72520be9b0e355c99cd1e6->enter($__internal_78df5387e6bbbc925593c6642aef1de869c2ffaf9e72520be9b0e355c99cd1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78df5387e6bbbc925593c6642aef1de869c2ffaf9e72520be9b0e355c99cd1e6->leave($__internal_78df5387e6bbbc925593c6642aef1de869c2ffaf9e72520be9b0e355c99cd1e6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f539b938e231b18ae167857dfa3783f53dc5eeed5f4fea82bf69113d7bdeaa9 = $this->env->getExtension("native_profiler");
        $__internal_9f539b938e231b18ae167857dfa3783f53dc5eeed5f4fea82bf69113d7bdeaa9->enter($__internal_9f539b938e231b18ae167857dfa3783f53dc5eeed5f4fea82bf69113d7bdeaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9f539b938e231b18ae167857dfa3783f53dc5eeed5f4fea82bf69113d7bdeaa9->leave($__internal_9f539b938e231b18ae167857dfa3783f53dc5eeed5f4fea82bf69113d7bdeaa9_prof);

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
