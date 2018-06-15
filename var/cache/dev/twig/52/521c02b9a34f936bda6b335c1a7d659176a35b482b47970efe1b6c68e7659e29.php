<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_37a6bafe908918040fb4227099a26f94cecc771c49dbda70903fbe51f9b5ace8 extends Twig_Template
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
        $__internal_2bec9470b1306ce22f82f6cb11726faa412d09554189e071687a4301ab065d74 = $this->env->getExtension("native_profiler");
        $__internal_2bec9470b1306ce22f82f6cb11726faa412d09554189e071687a4301ab065d74->enter($__internal_2bec9470b1306ce22f82f6cb11726faa412d09554189e071687a4301ab065d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2bec9470b1306ce22f82f6cb11726faa412d09554189e071687a4301ab065d74->leave($__internal_2bec9470b1306ce22f82f6cb11726faa412d09554189e071687a4301ab065d74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
