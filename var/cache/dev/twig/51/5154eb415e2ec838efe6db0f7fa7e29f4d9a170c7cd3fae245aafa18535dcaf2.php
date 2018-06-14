<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_57a64061ef8a20b0c4d2ede584ed06c1c2b8a94a20a7655e8c96d9ecdc0249cf extends Twig_Template
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
        $__internal_216501c9778284a066f3b4e5a780a802b6ac5fcf0b27fb8c093180759b2a8c94 = $this->env->getExtension("native_profiler");
        $__internal_216501c9778284a066f3b4e5a780a802b6ac5fcf0b27fb8c093180759b2a8c94->enter($__internal_216501c9778284a066f3b4e5a780a802b6ac5fcf0b27fb8c093180759b2a8c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_216501c9778284a066f3b4e5a780a802b6ac5fcf0b27fb8c093180759b2a8c94->leave($__internal_216501c9778284a066f3b4e5a780a802b6ac5fcf0b27fb8c093180759b2a8c94_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
