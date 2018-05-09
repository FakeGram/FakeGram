<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8d2e79bf3b834e1173f463c44b98fbb831ddc43d45413c436964a13f0fa78a9e extends Twig_Template
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
        $__internal_350a9825e48ed3e0e9b7de8b51dea709a8f68851c6ea124b653653a585879baf = $this->env->getExtension("native_profiler");
        $__internal_350a9825e48ed3e0e9b7de8b51dea709a8f68851c6ea124b653653a585879baf->enter($__internal_350a9825e48ed3e0e9b7de8b51dea709a8f68851c6ea124b653653a585879baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_350a9825e48ed3e0e9b7de8b51dea709a8f68851c6ea124b653653a585879baf->leave($__internal_350a9825e48ed3e0e9b7de8b51dea709a8f68851c6ea124b653653a585879baf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_219f7784db82b7c583cd6870e1311951e252b884dd3e93fdbb44d811985ab610 = $this->env->getExtension("native_profiler");
        $__internal_219f7784db82b7c583cd6870e1311951e252b884dd3e93fdbb44d811985ab610->enter($__internal_219f7784db82b7c583cd6870e1311951e252b884dd3e93fdbb44d811985ab610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_219f7784db82b7c583cd6870e1311951e252b884dd3e93fdbb44d811985ab610->leave($__internal_219f7784db82b7c583cd6870e1311951e252b884dd3e93fdbb44d811985ab610_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aa1456d12bbdef55e6601c1cc54e5d94b5cb76ad31601d4d13ef60bcaae4292 = $this->env->getExtension("native_profiler");
        $__internal_7aa1456d12bbdef55e6601c1cc54e5d94b5cb76ad31601d4d13ef60bcaae4292->enter($__internal_7aa1456d12bbdef55e6601c1cc54e5d94b5cb76ad31601d4d13ef60bcaae4292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7aa1456d12bbdef55e6601c1cc54e5d94b5cb76ad31601d4d13ef60bcaae4292->leave($__internal_7aa1456d12bbdef55e6601c1cc54e5d94b5cb76ad31601d4d13ef60bcaae4292_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8f48a1013a5d5de1579a46c6e5c0504c19b232664639471ff7f290bf493560c = $this->env->getExtension("native_profiler");
        $__internal_b8f48a1013a5d5de1579a46c6e5c0504c19b232664639471ff7f290bf493560c->enter($__internal_b8f48a1013a5d5de1579a46c6e5c0504c19b232664639471ff7f290bf493560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b8f48a1013a5d5de1579a46c6e5c0504c19b232664639471ff7f290bf493560c->leave($__internal_b8f48a1013a5d5de1579a46c6e5c0504c19b232664639471ff7f290bf493560c_prof);

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
