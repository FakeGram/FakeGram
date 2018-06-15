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
        $__internal_c36de790198f71e43e2d095c81b73a3f9d15b3dd666f67502d7a14b7aa11fcb0 = $this->env->getExtension("native_profiler");
        $__internal_c36de790198f71e43e2d095c81b73a3f9d15b3dd666f67502d7a14b7aa11fcb0->enter($__internal_c36de790198f71e43e2d095c81b73a3f9d15b3dd666f67502d7a14b7aa11fcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c36de790198f71e43e2d095c81b73a3f9d15b3dd666f67502d7a14b7aa11fcb0->leave($__internal_c36de790198f71e43e2d095c81b73a3f9d15b3dd666f67502d7a14b7aa11fcb0_prof);

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
