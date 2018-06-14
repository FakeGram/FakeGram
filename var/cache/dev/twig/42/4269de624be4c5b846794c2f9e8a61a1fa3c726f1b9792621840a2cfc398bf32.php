<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_70842bc7e1018c7a18ffe1caedbadf1f4068ca33e9585bcf34a4220405dad617 extends Twig_Template
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
        $__internal_a863aefdcab3ef517e76b1e00b90f8f41eaabf6abd983418e541d98d4683d2fc = $this->env->getExtension("native_profiler");
        $__internal_a863aefdcab3ef517e76b1e00b90f8f41eaabf6abd983418e541d98d4683d2fc->enter($__internal_a863aefdcab3ef517e76b1e00b90f8f41eaabf6abd983418e541d98d4683d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a863aefdcab3ef517e76b1e00b90f8f41eaabf6abd983418e541d98d4683d2fc->leave($__internal_a863aefdcab3ef517e76b1e00b90f8f41eaabf6abd983418e541d98d4683d2fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
