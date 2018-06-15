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
        $__internal_edbed3687a62ccac436665fec31d42f025881e00541ecabee184d79328687552 = $this->env->getExtension("native_profiler");
        $__internal_edbed3687a62ccac436665fec31d42f025881e00541ecabee184d79328687552->enter($__internal_edbed3687a62ccac436665fec31d42f025881e00541ecabee184d79328687552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edbed3687a62ccac436665fec31d42f025881e00541ecabee184d79328687552->leave($__internal_edbed3687a62ccac436665fec31d42f025881e00541ecabee184d79328687552_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16560e20db4aa5ccf2393b8d69924a9368d3b2363bf95e560394ceaaaf664ceb = $this->env->getExtension("native_profiler");
        $__internal_16560e20db4aa5ccf2393b8d69924a9368d3b2363bf95e560394ceaaaf664ceb->enter($__internal_16560e20db4aa5ccf2393b8d69924a9368d3b2363bf95e560394ceaaaf664ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_16560e20db4aa5ccf2393b8d69924a9368d3b2363bf95e560394ceaaaf664ceb->leave($__internal_16560e20db4aa5ccf2393b8d69924a9368d3b2363bf95e560394ceaaaf664ceb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d0727682338ea0b20a0c51d3d901d48b1f6ece296518f7b480e8d6afdb7ffb = $this->env->getExtension("native_profiler");
        $__internal_97d0727682338ea0b20a0c51d3d901d48b1f6ece296518f7b480e8d6afdb7ffb->enter($__internal_97d0727682338ea0b20a0c51d3d901d48b1f6ece296518f7b480e8d6afdb7ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97d0727682338ea0b20a0c51d3d901d48b1f6ece296518f7b480e8d6afdb7ffb->leave($__internal_97d0727682338ea0b20a0c51d3d901d48b1f6ece296518f7b480e8d6afdb7ffb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a34f92acb63d2980850b4f11c761587a4e8fdafeb15916193cae2229a6b3c73 = $this->env->getExtension("native_profiler");
        $__internal_4a34f92acb63d2980850b4f11c761587a4e8fdafeb15916193cae2229a6b3c73->enter($__internal_4a34f92acb63d2980850b4f11c761587a4e8fdafeb15916193cae2229a6b3c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4a34f92acb63d2980850b4f11c761587a4e8fdafeb15916193cae2229a6b3c73->leave($__internal_4a34f92acb63d2980850b4f11c761587a4e8fdafeb15916193cae2229a6b3c73_prof);

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
