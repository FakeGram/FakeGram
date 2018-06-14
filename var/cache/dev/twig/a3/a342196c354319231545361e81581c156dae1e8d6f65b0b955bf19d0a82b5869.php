<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9d3d1e16524c18320d7c324b76b1a3ad8819efdbd65811dd3f93870d34d08bc8 extends Twig_Template
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
        $__internal_df7410e8edfc098145abe469e8b4f5fb0b5479688e04d85192f1825d61de6db5 = $this->env->getExtension("native_profiler");
        $__internal_df7410e8edfc098145abe469e8b4f5fb0b5479688e04d85192f1825d61de6db5->enter($__internal_df7410e8edfc098145abe469e8b4f5fb0b5479688e04d85192f1825d61de6db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_df7410e8edfc098145abe469e8b4f5fb0b5479688e04d85192f1825d61de6db5->leave($__internal_df7410e8edfc098145abe469e8b4f5fb0b5479688e04d85192f1825d61de6db5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
