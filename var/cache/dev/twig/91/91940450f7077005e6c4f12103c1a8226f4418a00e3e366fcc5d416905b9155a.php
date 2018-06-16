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
        $__internal_c99f6103c0d5b838553dc8175154e4bee5092ffb498df7d07d5e8407d8d3670e = $this->env->getExtension("native_profiler");
        $__internal_c99f6103c0d5b838553dc8175154e4bee5092ffb498df7d07d5e8407d8d3670e->enter($__internal_c99f6103c0d5b838553dc8175154e4bee5092ffb498df7d07d5e8407d8d3670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99f6103c0d5b838553dc8175154e4bee5092ffb498df7d07d5e8407d8d3670e->leave($__internal_c99f6103c0d5b838553dc8175154e4bee5092ffb498df7d07d5e8407d8d3670e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ad83e5272eefdb68cdeccf5b686959d1f98dc5320a102bd2eab631080fcb26c = $this->env->getExtension("native_profiler");
        $__internal_9ad83e5272eefdb68cdeccf5b686959d1f98dc5320a102bd2eab631080fcb26c->enter($__internal_9ad83e5272eefdb68cdeccf5b686959d1f98dc5320a102bd2eab631080fcb26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ad83e5272eefdb68cdeccf5b686959d1f98dc5320a102bd2eab631080fcb26c->leave($__internal_9ad83e5272eefdb68cdeccf5b686959d1f98dc5320a102bd2eab631080fcb26c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b534da31a830f1fbfc7f944499e28235b1818b27a92205b3cdfb7bd7979c748e = $this->env->getExtension("native_profiler");
        $__internal_b534da31a830f1fbfc7f944499e28235b1818b27a92205b3cdfb7bd7979c748e->enter($__internal_b534da31a830f1fbfc7f944499e28235b1818b27a92205b3cdfb7bd7979c748e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b534da31a830f1fbfc7f944499e28235b1818b27a92205b3cdfb7bd7979c748e->leave($__internal_b534da31a830f1fbfc7f944499e28235b1818b27a92205b3cdfb7bd7979c748e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0c81cd929c15de5ea6e6a0bb0de4c05ff61004d583589c372ef54aa6abc25d9 = $this->env->getExtension("native_profiler");
        $__internal_c0c81cd929c15de5ea6e6a0bb0de4c05ff61004d583589c372ef54aa6abc25d9->enter($__internal_c0c81cd929c15de5ea6e6a0bb0de4c05ff61004d583589c372ef54aa6abc25d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c0c81cd929c15de5ea6e6a0bb0de4c05ff61004d583589c372ef54aa6abc25d9->leave($__internal_c0c81cd929c15de5ea6e6a0bb0de4c05ff61004d583589c372ef54aa6abc25d9_prof);

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
