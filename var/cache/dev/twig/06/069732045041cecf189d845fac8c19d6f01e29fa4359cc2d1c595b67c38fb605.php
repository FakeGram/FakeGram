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
        $__internal_c49d5d6f7e1192c339cf35dfc935e71008e3387e957bb4c29ee330237fd02797 = $this->env->getExtension("native_profiler");
        $__internal_c49d5d6f7e1192c339cf35dfc935e71008e3387e957bb4c29ee330237fd02797->enter($__internal_c49d5d6f7e1192c339cf35dfc935e71008e3387e957bb4c29ee330237fd02797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c49d5d6f7e1192c339cf35dfc935e71008e3387e957bb4c29ee330237fd02797->leave($__internal_c49d5d6f7e1192c339cf35dfc935e71008e3387e957bb4c29ee330237fd02797_prof);

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
