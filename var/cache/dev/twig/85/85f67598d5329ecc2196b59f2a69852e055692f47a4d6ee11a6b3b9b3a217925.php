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
        $__internal_e000362c57ee33dcedaf61c189beb1c254e6f55368c7cd03e2dd653116031fb0 = $this->env->getExtension("native_profiler");
        $__internal_e000362c57ee33dcedaf61c189beb1c254e6f55368c7cd03e2dd653116031fb0->enter($__internal_e000362c57ee33dcedaf61c189beb1c254e6f55368c7cd03e2dd653116031fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e000362c57ee33dcedaf61c189beb1c254e6f55368c7cd03e2dd653116031fb0->leave($__internal_e000362c57ee33dcedaf61c189beb1c254e6f55368c7cd03e2dd653116031fb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_964a23b3e8813c283b16879fd682ae15f7972b630ad496807e6c07930674dfec = $this->env->getExtension("native_profiler");
        $__internal_964a23b3e8813c283b16879fd682ae15f7972b630ad496807e6c07930674dfec->enter($__internal_964a23b3e8813c283b16879fd682ae15f7972b630ad496807e6c07930674dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_964a23b3e8813c283b16879fd682ae15f7972b630ad496807e6c07930674dfec->leave($__internal_964a23b3e8813c283b16879fd682ae15f7972b630ad496807e6c07930674dfec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b8e064de3b3b62406f14974b9cf7a466bb4b86175fd72be117d92585bc29e61 = $this->env->getExtension("native_profiler");
        $__internal_4b8e064de3b3b62406f14974b9cf7a466bb4b86175fd72be117d92585bc29e61->enter($__internal_4b8e064de3b3b62406f14974b9cf7a466bb4b86175fd72be117d92585bc29e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b8e064de3b3b62406f14974b9cf7a466bb4b86175fd72be117d92585bc29e61->leave($__internal_4b8e064de3b3b62406f14974b9cf7a466bb4b86175fd72be117d92585bc29e61_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7279e8a07e39d1b315d27dc35178601d235b20713213fa00ddc1884ff584feb = $this->env->getExtension("native_profiler");
        $__internal_d7279e8a07e39d1b315d27dc35178601d235b20713213fa00ddc1884ff584feb->enter($__internal_d7279e8a07e39d1b315d27dc35178601d235b20713213fa00ddc1884ff584feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7279e8a07e39d1b315d27dc35178601d235b20713213fa00ddc1884ff584feb->leave($__internal_d7279e8a07e39d1b315d27dc35178601d235b20713213fa00ddc1884ff584feb_prof);

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
