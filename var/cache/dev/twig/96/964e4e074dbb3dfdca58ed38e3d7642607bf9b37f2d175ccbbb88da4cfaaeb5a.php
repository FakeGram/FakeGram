<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_51d77a7671a966e4f0739a65f9c904045f6faa1bc08d47e1a15c81c63c24742c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fa7485832c49957ed7bd3f3866bd593db4bfbfb5ae74d360c94808f55eab560 = $this->env->getExtension("native_profiler");
        $__internal_6fa7485832c49957ed7bd3f3866bd593db4bfbfb5ae74d360c94808f55eab560->enter($__internal_6fa7485832c49957ed7bd3f3866bd593db4bfbfb5ae74d360c94808f55eab560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6fa7485832c49957ed7bd3f3866bd593db4bfbfb5ae74d360c94808f55eab560->leave($__internal_6fa7485832c49957ed7bd3f3866bd593db4bfbfb5ae74d360c94808f55eab560_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
