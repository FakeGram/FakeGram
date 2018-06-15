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
        $__internal_46f99b83f8a6e3ea9169231e1de00c4a627cd65bfbdaa71897a97a39a6d4f8ac = $this->env->getExtension("native_profiler");
        $__internal_46f99b83f8a6e3ea9169231e1de00c4a627cd65bfbdaa71897a97a39a6d4f8ac->enter($__internal_46f99b83f8a6e3ea9169231e1de00c4a627cd65bfbdaa71897a97a39a6d4f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_46f99b83f8a6e3ea9169231e1de00c4a627cd65bfbdaa71897a97a39a6d4f8ac->leave($__internal_46f99b83f8a6e3ea9169231e1de00c4a627cd65bfbdaa71897a97a39a6d4f8ac_prof);

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
