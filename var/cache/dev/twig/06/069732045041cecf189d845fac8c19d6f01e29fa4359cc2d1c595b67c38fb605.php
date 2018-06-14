<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_353edd72b87250d91e0eaeeb7ca78d7e12b3a7e7d6ec644d42284a982fd10bed extends Twig_Template
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
        $__internal_763add42e725fc77a725bd580b23fb24b7b29d4900db70013e92f2bea1280dbb = $this->env->getExtension("native_profiler");
        $__internal_763add42e725fc77a725bd580b23fb24b7b29d4900db70013e92f2bea1280dbb->enter($__internal_763add42e725fc77a725bd580b23fb24b7b29d4900db70013e92f2bea1280dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_763add42e725fc77a725bd580b23fb24b7b29d4900db70013e92f2bea1280dbb->leave($__internal_763add42e725fc77a725bd580b23fb24b7b29d4900db70013e92f2bea1280dbb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
