<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c6f1e5d3c7c761ba2c2db0cc9078f48450fa1fa837da55984e15bfa9466d6ac5 extends Twig_Template
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
        $__internal_bfe431c498532f6216ac721c54145356214fb51694dc4928a75893b92fcb0bed = $this->env->getExtension("native_profiler");
        $__internal_bfe431c498532f6216ac721c54145356214fb51694dc4928a75893b92fcb0bed->enter($__internal_bfe431c498532f6216ac721c54145356214fb51694dc4928a75893b92fcb0bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe431c498532f6216ac721c54145356214fb51694dc4928a75893b92fcb0bed->leave($__internal_bfe431c498532f6216ac721c54145356214fb51694dc4928a75893b92fcb0bed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b170a2255188378886b3a801f92951406ed46556665d4a448371a984cae3f15 = $this->env->getExtension("native_profiler");
        $__internal_9b170a2255188378886b3a801f92951406ed46556665d4a448371a984cae3f15->enter($__internal_9b170a2255188378886b3a801f92951406ed46556665d4a448371a984cae3f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b170a2255188378886b3a801f92951406ed46556665d4a448371a984cae3f15->leave($__internal_9b170a2255188378886b3a801f92951406ed46556665d4a448371a984cae3f15_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0ae4488da03d298ecc8a91dd7b2babfc44082df29be08b8ad0f570f1cf9bd37 = $this->env->getExtension("native_profiler");
        $__internal_c0ae4488da03d298ecc8a91dd7b2babfc44082df29be08b8ad0f570f1cf9bd37->enter($__internal_c0ae4488da03d298ecc8a91dd7b2babfc44082df29be08b8ad0f570f1cf9bd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c0ae4488da03d298ecc8a91dd7b2babfc44082df29be08b8ad0f570f1cf9bd37->leave($__internal_c0ae4488da03d298ecc8a91dd7b2babfc44082df29be08b8ad0f570f1cf9bd37_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c7860a198a70a64221351d859e2c57b0740d5b92b128b6e0724d4eeae27d11 = $this->env->getExtension("native_profiler");
        $__internal_87c7860a198a70a64221351d859e2c57b0740d5b92b128b6e0724d4eeae27d11->enter($__internal_87c7860a198a70a64221351d859e2c57b0740d5b92b128b6e0724d4eeae27d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_87c7860a198a70a64221351d859e2c57b0740d5b92b128b6e0724d4eeae27d11->leave($__internal_87c7860a198a70a64221351d859e2c57b0740d5b92b128b6e0724d4eeae27d11_prof);

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
