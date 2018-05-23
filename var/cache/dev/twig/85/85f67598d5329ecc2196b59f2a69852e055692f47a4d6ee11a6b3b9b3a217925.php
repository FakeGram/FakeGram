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
        $__internal_7ed4f7465ef3c94ef7b1c2959f5810fdb87c2b3ad54275a17d251ff6f291132b = $this->env->getExtension("native_profiler");
        $__internal_7ed4f7465ef3c94ef7b1c2959f5810fdb87c2b3ad54275a17d251ff6f291132b->enter($__internal_7ed4f7465ef3c94ef7b1c2959f5810fdb87c2b3ad54275a17d251ff6f291132b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed4f7465ef3c94ef7b1c2959f5810fdb87c2b3ad54275a17d251ff6f291132b->leave($__internal_7ed4f7465ef3c94ef7b1c2959f5810fdb87c2b3ad54275a17d251ff6f291132b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f31a160dc5043f0c952697e6d78431eb0cbd12479f2ea10333054491d8ac927d = $this->env->getExtension("native_profiler");
        $__internal_f31a160dc5043f0c952697e6d78431eb0cbd12479f2ea10333054491d8ac927d->enter($__internal_f31a160dc5043f0c952697e6d78431eb0cbd12479f2ea10333054491d8ac927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f31a160dc5043f0c952697e6d78431eb0cbd12479f2ea10333054491d8ac927d->leave($__internal_f31a160dc5043f0c952697e6d78431eb0cbd12479f2ea10333054491d8ac927d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92aed756aa13b76a9f371e0a7c2d773253f2249fe5e39407d784eb96ab8a8fc2 = $this->env->getExtension("native_profiler");
        $__internal_92aed756aa13b76a9f371e0a7c2d773253f2249fe5e39407d784eb96ab8a8fc2->enter($__internal_92aed756aa13b76a9f371e0a7c2d773253f2249fe5e39407d784eb96ab8a8fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92aed756aa13b76a9f371e0a7c2d773253f2249fe5e39407d784eb96ab8a8fc2->leave($__internal_92aed756aa13b76a9f371e0a7c2d773253f2249fe5e39407d784eb96ab8a8fc2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b77f31b73a0dc93448080d21f40f14710cf659736dbeaa3e2b3049fcc1a023ba = $this->env->getExtension("native_profiler");
        $__internal_b77f31b73a0dc93448080d21f40f14710cf659736dbeaa3e2b3049fcc1a023ba->enter($__internal_b77f31b73a0dc93448080d21f40f14710cf659736dbeaa3e2b3049fcc1a023ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b77f31b73a0dc93448080d21f40f14710cf659736dbeaa3e2b3049fcc1a023ba->leave($__internal_b77f31b73a0dc93448080d21f40f14710cf659736dbeaa3e2b3049fcc1a023ba_prof);

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
