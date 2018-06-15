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
        $__internal_a8e75443c0d15d4f3e887a11a66981b5d33721a236c29b6dc9b8be54f3aa161c = $this->env->getExtension("native_profiler");
        $__internal_a8e75443c0d15d4f3e887a11a66981b5d33721a236c29b6dc9b8be54f3aa161c->enter($__internal_a8e75443c0d15d4f3e887a11a66981b5d33721a236c29b6dc9b8be54f3aa161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8e75443c0d15d4f3e887a11a66981b5d33721a236c29b6dc9b8be54f3aa161c->leave($__internal_a8e75443c0d15d4f3e887a11a66981b5d33721a236c29b6dc9b8be54f3aa161c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ee563250f08c27e7c2a8941a7c6dba6fb1d34f989c666f737798cd935b4bdc7 = $this->env->getExtension("native_profiler");
        $__internal_5ee563250f08c27e7c2a8941a7c6dba6fb1d34f989c666f737798cd935b4bdc7->enter($__internal_5ee563250f08c27e7c2a8941a7c6dba6fb1d34f989c666f737798cd935b4bdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ee563250f08c27e7c2a8941a7c6dba6fb1d34f989c666f737798cd935b4bdc7->leave($__internal_5ee563250f08c27e7c2a8941a7c6dba6fb1d34f989c666f737798cd935b4bdc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0352b6198b73e73f6f509e6c6e34a6b80a6592caad0a12812fcc37cdc80d5f4 = $this->env->getExtension("native_profiler");
        $__internal_a0352b6198b73e73f6f509e6c6e34a6b80a6592caad0a12812fcc37cdc80d5f4->enter($__internal_a0352b6198b73e73f6f509e6c6e34a6b80a6592caad0a12812fcc37cdc80d5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0352b6198b73e73f6f509e6c6e34a6b80a6592caad0a12812fcc37cdc80d5f4->leave($__internal_a0352b6198b73e73f6f509e6c6e34a6b80a6592caad0a12812fcc37cdc80d5f4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ffeae96aa29207becf38e878556fd5e444da9d86b83ce9a4421277dfa04e38d = $this->env->getExtension("native_profiler");
        $__internal_7ffeae96aa29207becf38e878556fd5e444da9d86b83ce9a4421277dfa04e38d->enter($__internal_7ffeae96aa29207becf38e878556fd5e444da9d86b83ce9a4421277dfa04e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7ffeae96aa29207becf38e878556fd5e444da9d86b83ce9a4421277dfa04e38d->leave($__internal_7ffeae96aa29207becf38e878556fd5e444da9d86b83ce9a4421277dfa04e38d_prof);

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
