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
        $__internal_cbf9efe6da5b710f17b01dff3a88ad78bba2274e98a5b0e3f397efbde58ea012 = $this->env->getExtension("native_profiler");
        $__internal_cbf9efe6da5b710f17b01dff3a88ad78bba2274e98a5b0e3f397efbde58ea012->enter($__internal_cbf9efe6da5b710f17b01dff3a88ad78bba2274e98a5b0e3f397efbde58ea012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf9efe6da5b710f17b01dff3a88ad78bba2274e98a5b0e3f397efbde58ea012->leave($__internal_cbf9efe6da5b710f17b01dff3a88ad78bba2274e98a5b0e3f397efbde58ea012_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23f3458486ef615fb7fb1b9ffca589a90ac38a1a5097a87ab4a014763aa8c11f = $this->env->getExtension("native_profiler");
        $__internal_23f3458486ef615fb7fb1b9ffca589a90ac38a1a5097a87ab4a014763aa8c11f->enter($__internal_23f3458486ef615fb7fb1b9ffca589a90ac38a1a5097a87ab4a014763aa8c11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_23f3458486ef615fb7fb1b9ffca589a90ac38a1a5097a87ab4a014763aa8c11f->leave($__internal_23f3458486ef615fb7fb1b9ffca589a90ac38a1a5097a87ab4a014763aa8c11f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_379cde79c8f60737e89dbf5476d81260a9119308844e297339b4ea886d9e2a3e = $this->env->getExtension("native_profiler");
        $__internal_379cde79c8f60737e89dbf5476d81260a9119308844e297339b4ea886d9e2a3e->enter($__internal_379cde79c8f60737e89dbf5476d81260a9119308844e297339b4ea886d9e2a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_379cde79c8f60737e89dbf5476d81260a9119308844e297339b4ea886d9e2a3e->leave($__internal_379cde79c8f60737e89dbf5476d81260a9119308844e297339b4ea886d9e2a3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b60c7d2493f05c89024acfbf2cd2e621ab993d4cc8a95084884c6240e2f4ae3 = $this->env->getExtension("native_profiler");
        $__internal_4b60c7d2493f05c89024acfbf2cd2e621ab993d4cc8a95084884c6240e2f4ae3->enter($__internal_4b60c7d2493f05c89024acfbf2cd2e621ab993d4cc8a95084884c6240e2f4ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b60c7d2493f05c89024acfbf2cd2e621ab993d4cc8a95084884c6240e2f4ae3->leave($__internal_4b60c7d2493f05c89024acfbf2cd2e621ab993d4cc8a95084884c6240e2f4ae3_prof);

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
