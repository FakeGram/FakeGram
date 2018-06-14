<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0115d31092b621280f839a73e5b2296d8cb23e2cf0e2ccc362ee83b1bbf86fb6 extends Twig_Template
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
        $__internal_802bb544d5208b0ccd5c8ae0acf2805df16cff3bc459f50c12c4566d04cf2e4e = $this->env->getExtension("native_profiler");
        $__internal_802bb544d5208b0ccd5c8ae0acf2805df16cff3bc459f50c12c4566d04cf2e4e->enter($__internal_802bb544d5208b0ccd5c8ae0acf2805df16cff3bc459f50c12c4566d04cf2e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_802bb544d5208b0ccd5c8ae0acf2805df16cff3bc459f50c12c4566d04cf2e4e->leave($__internal_802bb544d5208b0ccd5c8ae0acf2805df16cff3bc459f50c12c4566d04cf2e4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
