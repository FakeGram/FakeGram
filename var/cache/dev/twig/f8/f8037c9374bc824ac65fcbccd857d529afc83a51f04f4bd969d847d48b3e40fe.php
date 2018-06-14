<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c6e2ce7e51195ed89a5298cc537ccc88905ed5f432a5e4049e117c334daba3d1 extends Twig_Template
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
        $__internal_889a288cbc76c34d59a2d7a1164a84b5e2263306c774015b328c12611812ae5b = $this->env->getExtension("native_profiler");
        $__internal_889a288cbc76c34d59a2d7a1164a84b5e2263306c774015b328c12611812ae5b->enter($__internal_889a288cbc76c34d59a2d7a1164a84b5e2263306c774015b328c12611812ae5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_889a288cbc76c34d59a2d7a1164a84b5e2263306c774015b328c12611812ae5b->leave($__internal_889a288cbc76c34d59a2d7a1164a84b5e2263306c774015b328c12611812ae5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
