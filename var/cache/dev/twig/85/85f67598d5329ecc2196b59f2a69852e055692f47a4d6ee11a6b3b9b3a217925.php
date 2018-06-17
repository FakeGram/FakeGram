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
        $__internal_a4bb2322292f49e515b290741dcb06c816dd9e0178f96da078fc87bdc1649f0a = $this->env->getExtension("native_profiler");
        $__internal_a4bb2322292f49e515b290741dcb06c816dd9e0178f96da078fc87bdc1649f0a->enter($__internal_a4bb2322292f49e515b290741dcb06c816dd9e0178f96da078fc87bdc1649f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bb2322292f49e515b290741dcb06c816dd9e0178f96da078fc87bdc1649f0a->leave($__internal_a4bb2322292f49e515b290741dcb06c816dd9e0178f96da078fc87bdc1649f0a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b9b8e8bc6c1096b348e4fd70b7cbbb03c6156ec599cd3c9c3018ce75a4b618d = $this->env->getExtension("native_profiler");
        $__internal_0b9b8e8bc6c1096b348e4fd70b7cbbb03c6156ec599cd3c9c3018ce75a4b618d->enter($__internal_0b9b8e8bc6c1096b348e4fd70b7cbbb03c6156ec599cd3c9c3018ce75a4b618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b9b8e8bc6c1096b348e4fd70b7cbbb03c6156ec599cd3c9c3018ce75a4b618d->leave($__internal_0b9b8e8bc6c1096b348e4fd70b7cbbb03c6156ec599cd3c9c3018ce75a4b618d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4439ad3073c93e3c7d25824cf8ce1f8249d35f000c6c276a9f2ba5fcfd06ffe = $this->env->getExtension("native_profiler");
        $__internal_a4439ad3073c93e3c7d25824cf8ce1f8249d35f000c6c276a9f2ba5fcfd06ffe->enter($__internal_a4439ad3073c93e3c7d25824cf8ce1f8249d35f000c6c276a9f2ba5fcfd06ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4439ad3073c93e3c7d25824cf8ce1f8249d35f000c6c276a9f2ba5fcfd06ffe->leave($__internal_a4439ad3073c93e3c7d25824cf8ce1f8249d35f000c6c276a9f2ba5fcfd06ffe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b5f3060a0ca3ed61ebfedb85e1ab60be3b1df8555e5e5605edf79a98dde0e83 = $this->env->getExtension("native_profiler");
        $__internal_7b5f3060a0ca3ed61ebfedb85e1ab60be3b1df8555e5e5605edf79a98dde0e83->enter($__internal_7b5f3060a0ca3ed61ebfedb85e1ab60be3b1df8555e5e5605edf79a98dde0e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7b5f3060a0ca3ed61ebfedb85e1ab60be3b1df8555e5e5605edf79a98dde0e83->leave($__internal_7b5f3060a0ca3ed61ebfedb85e1ab60be3b1df8555e5e5605edf79a98dde0e83_prof);

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
