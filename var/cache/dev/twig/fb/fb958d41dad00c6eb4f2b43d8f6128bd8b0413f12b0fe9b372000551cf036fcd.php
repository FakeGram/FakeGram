<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fed6da1c6277e72c62719a6fa52e1703ab66449b3b178b94bf8c67f2f9a063ee extends Twig_Template
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
        $__internal_0a1096da4abdcd659077e74bdb9a1e9699aad1ebf801abc01573afedf12f398f = $this->env->getExtension("native_profiler");
        $__internal_0a1096da4abdcd659077e74bdb9a1e9699aad1ebf801abc01573afedf12f398f->enter($__internal_0a1096da4abdcd659077e74bdb9a1e9699aad1ebf801abc01573afedf12f398f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0a1096da4abdcd659077e74bdb9a1e9699aad1ebf801abc01573afedf12f398f->leave($__internal_0a1096da4abdcd659077e74bdb9a1e9699aad1ebf801abc01573afedf12f398f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
