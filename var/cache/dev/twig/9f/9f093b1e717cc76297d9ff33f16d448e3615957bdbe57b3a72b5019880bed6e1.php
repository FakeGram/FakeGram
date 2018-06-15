<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2bcb66948f5c797bc85e6ee44d60d0ea60a65acca500939af39780c222d1cb69 extends Twig_Template
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
        $__internal_6aa689bc738ab6beb23bf8d1e5591dad0c8db71fa51a9e777163f04f58c9214c = $this->env->getExtension("native_profiler");
        $__internal_6aa689bc738ab6beb23bf8d1e5591dad0c8db71fa51a9e777163f04f58c9214c->enter($__internal_6aa689bc738ab6beb23bf8d1e5591dad0c8db71fa51a9e777163f04f58c9214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6aa689bc738ab6beb23bf8d1e5591dad0c8db71fa51a9e777163f04f58c9214c->leave($__internal_6aa689bc738ab6beb23bf8d1e5591dad0c8db71fa51a9e777163f04f58c9214c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
