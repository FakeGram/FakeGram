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
        $__internal_a6799d680c6f3ae42357d785dcba39a3d154ca03b68f671a7a885d4c78fd3f40 = $this->env->getExtension("native_profiler");
        $__internal_a6799d680c6f3ae42357d785dcba39a3d154ca03b68f671a7a885d4c78fd3f40->enter($__internal_a6799d680c6f3ae42357d785dcba39a3d154ca03b68f671a7a885d4c78fd3f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6799d680c6f3ae42357d785dcba39a3d154ca03b68f671a7a885d4c78fd3f40->leave($__internal_a6799d680c6f3ae42357d785dcba39a3d154ca03b68f671a7a885d4c78fd3f40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fdbc7a1f46a9e0cc3e562a69fdf2afa2dbea511d190b4782b49bb8e06330ffc = $this->env->getExtension("native_profiler");
        $__internal_7fdbc7a1f46a9e0cc3e562a69fdf2afa2dbea511d190b4782b49bb8e06330ffc->enter($__internal_7fdbc7a1f46a9e0cc3e562a69fdf2afa2dbea511d190b4782b49bb8e06330ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7fdbc7a1f46a9e0cc3e562a69fdf2afa2dbea511d190b4782b49bb8e06330ffc->leave($__internal_7fdbc7a1f46a9e0cc3e562a69fdf2afa2dbea511d190b4782b49bb8e06330ffc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e4586e1e8825ebf6b66e8aa9c7b04d15342655f5a59d141240e8b7f55af6c3 = $this->env->getExtension("native_profiler");
        $__internal_90e4586e1e8825ebf6b66e8aa9c7b04d15342655f5a59d141240e8b7f55af6c3->enter($__internal_90e4586e1e8825ebf6b66e8aa9c7b04d15342655f5a59d141240e8b7f55af6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90e4586e1e8825ebf6b66e8aa9c7b04d15342655f5a59d141240e8b7f55af6c3->leave($__internal_90e4586e1e8825ebf6b66e8aa9c7b04d15342655f5a59d141240e8b7f55af6c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26975166c0070c851af5a54d78445883aeb7e4c695c06a7f148fa2f615c22b00 = $this->env->getExtension("native_profiler");
        $__internal_26975166c0070c851af5a54d78445883aeb7e4c695c06a7f148fa2f615c22b00->enter($__internal_26975166c0070c851af5a54d78445883aeb7e4c695c06a7f148fa2f615c22b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26975166c0070c851af5a54d78445883aeb7e4c695c06a7f148fa2f615c22b00->leave($__internal_26975166c0070c851af5a54d78445883aeb7e4c695c06a7f148fa2f615c22b00_prof);

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
