<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_177e1f81e7df5d504b36b29e3831de143669c7abd454537a87436c61a8851d6c extends Twig_Template
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
        $__internal_2c6ea287fff47cdc91472fb02a95e656530208b1b9db3e30beb7610580af0771 = $this->env->getExtension("native_profiler");
        $__internal_2c6ea287fff47cdc91472fb02a95e656530208b1b9db3e30beb7610580af0771->enter($__internal_2c6ea287fff47cdc91472fb02a95e656530208b1b9db3e30beb7610580af0771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2c6ea287fff47cdc91472fb02a95e656530208b1b9db3e30beb7610580af0771->leave($__internal_2c6ea287fff47cdc91472fb02a95e656530208b1b9db3e30beb7610580af0771_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
