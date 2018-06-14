<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_87af0f78269b1e2c29d4315de6c9a0a41c80d37ccc7022ac37555c18993e5c2f extends Twig_Template
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
        $__internal_3272db1060ac10ad51a4e9afd633071b5cd011d953d7728643c8902b4c0e4b2e = $this->env->getExtension("native_profiler");
        $__internal_3272db1060ac10ad51a4e9afd633071b5cd011d953d7728643c8902b4c0e4b2e->enter($__internal_3272db1060ac10ad51a4e9afd633071b5cd011d953d7728643c8902b4c0e4b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3272db1060ac10ad51a4e9afd633071b5cd011d953d7728643c8902b4c0e4b2e->leave($__internal_3272db1060ac10ad51a4e9afd633071b5cd011d953d7728643c8902b4c0e4b2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
