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
        $__internal_f897c4b3ff602f93118e7f4bb6bdbbe9e6d530be4b31c0a513325ba9c5137fd9 = $this->env->getExtension("native_profiler");
        $__internal_f897c4b3ff602f93118e7f4bb6bdbbe9e6d530be4b31c0a513325ba9c5137fd9->enter($__internal_f897c4b3ff602f93118e7f4bb6bdbbe9e6d530be4b31c0a513325ba9c5137fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f897c4b3ff602f93118e7f4bb6bdbbe9e6d530be4b31c0a513325ba9c5137fd9->leave($__internal_f897c4b3ff602f93118e7f4bb6bdbbe9e6d530be4b31c0a513325ba9c5137fd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e25d21e757730a586c92044d6db888429ccad8cd50f3a51a75fb1623e379c351 = $this->env->getExtension("native_profiler");
        $__internal_e25d21e757730a586c92044d6db888429ccad8cd50f3a51a75fb1623e379c351->enter($__internal_e25d21e757730a586c92044d6db888429ccad8cd50f3a51a75fb1623e379c351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e25d21e757730a586c92044d6db888429ccad8cd50f3a51a75fb1623e379c351->leave($__internal_e25d21e757730a586c92044d6db888429ccad8cd50f3a51a75fb1623e379c351_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ea50a7bdd04a3baf4cca6634e3b2b364eec9f3da39842ac4ef01126f7060c5 = $this->env->getExtension("native_profiler");
        $__internal_c5ea50a7bdd04a3baf4cca6634e3b2b364eec9f3da39842ac4ef01126f7060c5->enter($__internal_c5ea50a7bdd04a3baf4cca6634e3b2b364eec9f3da39842ac4ef01126f7060c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5ea50a7bdd04a3baf4cca6634e3b2b364eec9f3da39842ac4ef01126f7060c5->leave($__internal_c5ea50a7bdd04a3baf4cca6634e3b2b364eec9f3da39842ac4ef01126f7060c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff04f2c9cab80f0d070727c91f5d38b9bcf4268ef685d3a8d5ae9f9ca45e79ca = $this->env->getExtension("native_profiler");
        $__internal_ff04f2c9cab80f0d070727c91f5d38b9bcf4268ef685d3a8d5ae9f9ca45e79ca->enter($__internal_ff04f2c9cab80f0d070727c91f5d38b9bcf4268ef685d3a8d5ae9f9ca45e79ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff04f2c9cab80f0d070727c91f5d38b9bcf4268ef685d3a8d5ae9f9ca45e79ca->leave($__internal_ff04f2c9cab80f0d070727c91f5d38b9bcf4268ef685d3a8d5ae9f9ca45e79ca_prof);

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
