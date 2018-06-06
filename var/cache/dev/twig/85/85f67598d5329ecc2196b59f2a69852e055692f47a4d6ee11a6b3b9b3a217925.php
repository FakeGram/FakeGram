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
        $__internal_80b0590cdca271dc9a4de6a9890b1cb2573d7b1a655f07e5ccc2a31a7eb8df5e = $this->env->getExtension("native_profiler");
        $__internal_80b0590cdca271dc9a4de6a9890b1cb2573d7b1a655f07e5ccc2a31a7eb8df5e->enter($__internal_80b0590cdca271dc9a4de6a9890b1cb2573d7b1a655f07e5ccc2a31a7eb8df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b0590cdca271dc9a4de6a9890b1cb2573d7b1a655f07e5ccc2a31a7eb8df5e->leave($__internal_80b0590cdca271dc9a4de6a9890b1cb2573d7b1a655f07e5ccc2a31a7eb8df5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d76a1d7b29e1018b4cd8672c97f1393bb4c4599b611798193bba5b41fe64126 = $this->env->getExtension("native_profiler");
        $__internal_1d76a1d7b29e1018b4cd8672c97f1393bb4c4599b611798193bba5b41fe64126->enter($__internal_1d76a1d7b29e1018b4cd8672c97f1393bb4c4599b611798193bba5b41fe64126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d76a1d7b29e1018b4cd8672c97f1393bb4c4599b611798193bba5b41fe64126->leave($__internal_1d76a1d7b29e1018b4cd8672c97f1393bb4c4599b611798193bba5b41fe64126_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af6ff136cc71bff65bc05d10062e8d03133e2730cd503d6e571e8bb555f813fd = $this->env->getExtension("native_profiler");
        $__internal_af6ff136cc71bff65bc05d10062e8d03133e2730cd503d6e571e8bb555f813fd->enter($__internal_af6ff136cc71bff65bc05d10062e8d03133e2730cd503d6e571e8bb555f813fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af6ff136cc71bff65bc05d10062e8d03133e2730cd503d6e571e8bb555f813fd->leave($__internal_af6ff136cc71bff65bc05d10062e8d03133e2730cd503d6e571e8bb555f813fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a57d628864fa08642b5c86eaf0ea3261742bd9757d2fa19dec1f821a9d7e26f8 = $this->env->getExtension("native_profiler");
        $__internal_a57d628864fa08642b5c86eaf0ea3261742bd9757d2fa19dec1f821a9d7e26f8->enter($__internal_a57d628864fa08642b5c86eaf0ea3261742bd9757d2fa19dec1f821a9d7e26f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a57d628864fa08642b5c86eaf0ea3261742bd9757d2fa19dec1f821a9d7e26f8->leave($__internal_a57d628864fa08642b5c86eaf0ea3261742bd9757d2fa19dec1f821a9d7e26f8_prof);

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
