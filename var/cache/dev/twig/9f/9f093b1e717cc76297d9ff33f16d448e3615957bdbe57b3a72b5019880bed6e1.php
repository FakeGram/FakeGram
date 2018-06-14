<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2bcb66948f5c797bc85e6ee44d60d0ea60a65acca500939af39780c222d1cb69 extends Twig_Template
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
        $__internal_70fdce1399a1b005dcbffe7024d9ec8db5e2a9162d1efe90f3509724f469e8e4 = $this->env->getExtension("native_profiler");
        $__internal_70fdce1399a1b005dcbffe7024d9ec8db5e2a9162d1efe90f3509724f469e8e4->enter($__internal_70fdce1399a1b005dcbffe7024d9ec8db5e2a9162d1efe90f3509724f469e8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_70fdce1399a1b005dcbffe7024d9ec8db5e2a9162d1efe90f3509724f469e8e4->leave($__internal_70fdce1399a1b005dcbffe7024d9ec8db5e2a9162d1efe90f3509724f469e8e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
