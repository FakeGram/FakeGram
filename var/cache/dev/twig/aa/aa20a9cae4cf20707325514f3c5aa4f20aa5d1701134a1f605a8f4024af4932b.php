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
        $__internal_7b74e2b16a7f4d230a06aa7a13a00d14e233750b5e3641f6b0a68317942aa33f = $this->env->getExtension("native_profiler");
        $__internal_7b74e2b16a7f4d230a06aa7a13a00d14e233750b5e3641f6b0a68317942aa33f->enter($__internal_7b74e2b16a7f4d230a06aa7a13a00d14e233750b5e3641f6b0a68317942aa33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7b74e2b16a7f4d230a06aa7a13a00d14e233750b5e3641f6b0a68317942aa33f->leave($__internal_7b74e2b16a7f4d230a06aa7a13a00d14e233750b5e3641f6b0a68317942aa33f_prof);

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
