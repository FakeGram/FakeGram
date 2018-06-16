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
        $__internal_24b42176b96ccbf7b0360ad78f1727a70bbc1ac6d789af0335d048ee2687c12a = $this->env->getExtension("native_profiler");
        $__internal_24b42176b96ccbf7b0360ad78f1727a70bbc1ac6d789af0335d048ee2687c12a->enter($__internal_24b42176b96ccbf7b0360ad78f1727a70bbc1ac6d789af0335d048ee2687c12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b42176b96ccbf7b0360ad78f1727a70bbc1ac6d789af0335d048ee2687c12a->leave($__internal_24b42176b96ccbf7b0360ad78f1727a70bbc1ac6d789af0335d048ee2687c12a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95702c9e2db2c839b0026d1737811fa2b66167c2fcd9fb46ab55d2a06f74eae1 = $this->env->getExtension("native_profiler");
        $__internal_95702c9e2db2c839b0026d1737811fa2b66167c2fcd9fb46ab55d2a06f74eae1->enter($__internal_95702c9e2db2c839b0026d1737811fa2b66167c2fcd9fb46ab55d2a06f74eae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_95702c9e2db2c839b0026d1737811fa2b66167c2fcd9fb46ab55d2a06f74eae1->leave($__internal_95702c9e2db2c839b0026d1737811fa2b66167c2fcd9fb46ab55d2a06f74eae1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b05e7fd922eb029611fd07aa9e0d89c8b8e29537dcb508a346806e0650d6cca6 = $this->env->getExtension("native_profiler");
        $__internal_b05e7fd922eb029611fd07aa9e0d89c8b8e29537dcb508a346806e0650d6cca6->enter($__internal_b05e7fd922eb029611fd07aa9e0d89c8b8e29537dcb508a346806e0650d6cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b05e7fd922eb029611fd07aa9e0d89c8b8e29537dcb508a346806e0650d6cca6->leave($__internal_b05e7fd922eb029611fd07aa9e0d89c8b8e29537dcb508a346806e0650d6cca6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e813253b0ea4ae7cade3b75e9d4640ceb3605b3883ec51023b89329d7a8ad5b = $this->env->getExtension("native_profiler");
        $__internal_5e813253b0ea4ae7cade3b75e9d4640ceb3605b3883ec51023b89329d7a8ad5b->enter($__internal_5e813253b0ea4ae7cade3b75e9d4640ceb3605b3883ec51023b89329d7a8ad5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e813253b0ea4ae7cade3b75e9d4640ceb3605b3883ec51023b89329d7a8ad5b->leave($__internal_5e813253b0ea4ae7cade3b75e9d4640ceb3605b3883ec51023b89329d7a8ad5b_prof);

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
