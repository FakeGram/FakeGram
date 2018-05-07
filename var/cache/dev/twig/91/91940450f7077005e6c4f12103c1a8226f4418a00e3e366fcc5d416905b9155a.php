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
        $__internal_a03a335ca80ba50a67986ac1b12ced6ee534247df84021fa3d153302472bf7d7 = $this->env->getExtension("native_profiler");
        $__internal_a03a335ca80ba50a67986ac1b12ced6ee534247df84021fa3d153302472bf7d7->enter($__internal_a03a335ca80ba50a67986ac1b12ced6ee534247df84021fa3d153302472bf7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03a335ca80ba50a67986ac1b12ced6ee534247df84021fa3d153302472bf7d7->leave($__internal_a03a335ca80ba50a67986ac1b12ced6ee534247df84021fa3d153302472bf7d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c63e4373d6af287f80b5b5d86cc179ad5e4328a3316289ba1d1478bedf79bbfd = $this->env->getExtension("native_profiler");
        $__internal_c63e4373d6af287f80b5b5d86cc179ad5e4328a3316289ba1d1478bedf79bbfd->enter($__internal_c63e4373d6af287f80b5b5d86cc179ad5e4328a3316289ba1d1478bedf79bbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c63e4373d6af287f80b5b5d86cc179ad5e4328a3316289ba1d1478bedf79bbfd->leave($__internal_c63e4373d6af287f80b5b5d86cc179ad5e4328a3316289ba1d1478bedf79bbfd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d656e568ec9609db91bb1b8d3645bea0aa91bb42b6640eee26de0a17e21696e = $this->env->getExtension("native_profiler");
        $__internal_5d656e568ec9609db91bb1b8d3645bea0aa91bb42b6640eee26de0a17e21696e->enter($__internal_5d656e568ec9609db91bb1b8d3645bea0aa91bb42b6640eee26de0a17e21696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d656e568ec9609db91bb1b8d3645bea0aa91bb42b6640eee26de0a17e21696e->leave($__internal_5d656e568ec9609db91bb1b8d3645bea0aa91bb42b6640eee26de0a17e21696e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_256ce0712c9bb075f671a8a2d18d8f1d7e5ca46e6a9c2dafb6d397b40d29c947 = $this->env->getExtension("native_profiler");
        $__internal_256ce0712c9bb075f671a8a2d18d8f1d7e5ca46e6a9c2dafb6d397b40d29c947->enter($__internal_256ce0712c9bb075f671a8a2d18d8f1d7e5ca46e6a9c2dafb6d397b40d29c947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_256ce0712c9bb075f671a8a2d18d8f1d7e5ca46e6a9c2dafb6d397b40d29c947->leave($__internal_256ce0712c9bb075f671a8a2d18d8f1d7e5ca46e6a9c2dafb6d397b40d29c947_prof);

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
