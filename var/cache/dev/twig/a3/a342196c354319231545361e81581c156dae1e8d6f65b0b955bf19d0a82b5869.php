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
        $__internal_044910dc90878568523b6a856e794e64464ee6e7738f89b7072f8fca843a0d61 = $this->env->getExtension("native_profiler");
        $__internal_044910dc90878568523b6a856e794e64464ee6e7738f89b7072f8fca843a0d61->enter($__internal_044910dc90878568523b6a856e794e64464ee6e7738f89b7072f8fca843a0d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_044910dc90878568523b6a856e794e64464ee6e7738f89b7072f8fca843a0d61->leave($__internal_044910dc90878568523b6a856e794e64464ee6e7738f89b7072f8fca843a0d61_prof);

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
