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
        $__internal_a5efd10a1e8604f2e567077c4865c7bc7c2f3a7face75aa43c99a37bf8c82924 = $this->env->getExtension("native_profiler");
        $__internal_a5efd10a1e8604f2e567077c4865c7bc7c2f3a7face75aa43c99a37bf8c82924->enter($__internal_a5efd10a1e8604f2e567077c4865c7bc7c2f3a7face75aa43c99a37bf8c82924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5efd10a1e8604f2e567077c4865c7bc7c2f3a7face75aa43c99a37bf8c82924->leave($__internal_a5efd10a1e8604f2e567077c4865c7bc7c2f3a7face75aa43c99a37bf8c82924_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5132be7e2fab2dbdd17f70678da008a9660855b939346e3e7a5ad9622d76e87e = $this->env->getExtension("native_profiler");
        $__internal_5132be7e2fab2dbdd17f70678da008a9660855b939346e3e7a5ad9622d76e87e->enter($__internal_5132be7e2fab2dbdd17f70678da008a9660855b939346e3e7a5ad9622d76e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5132be7e2fab2dbdd17f70678da008a9660855b939346e3e7a5ad9622d76e87e->leave($__internal_5132be7e2fab2dbdd17f70678da008a9660855b939346e3e7a5ad9622d76e87e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dac3706186f49da46c65fd40d9fee43a8bd8c32abaec32c63bdb3ae5b97f3a7 = $this->env->getExtension("native_profiler");
        $__internal_7dac3706186f49da46c65fd40d9fee43a8bd8c32abaec32c63bdb3ae5b97f3a7->enter($__internal_7dac3706186f49da46c65fd40d9fee43a8bd8c32abaec32c63bdb3ae5b97f3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7dac3706186f49da46c65fd40d9fee43a8bd8c32abaec32c63bdb3ae5b97f3a7->leave($__internal_7dac3706186f49da46c65fd40d9fee43a8bd8c32abaec32c63bdb3ae5b97f3a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c4574d6a8d0d1d81243ba084907f98bd78b85a785e019fb4176ce9db0359d65 = $this->env->getExtension("native_profiler");
        $__internal_5c4574d6a8d0d1d81243ba084907f98bd78b85a785e019fb4176ce9db0359d65->enter($__internal_5c4574d6a8d0d1d81243ba084907f98bd78b85a785e019fb4176ce9db0359d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5c4574d6a8d0d1d81243ba084907f98bd78b85a785e019fb4176ce9db0359d65->leave($__internal_5c4574d6a8d0d1d81243ba084907f98bd78b85a785e019fb4176ce9db0359d65_prof);

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
