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
        $__internal_6586d3d499833f1f3a7a0213d19d87b2063c202bc16bcdbfdd860286031f16b4 = $this->env->getExtension("native_profiler");
        $__internal_6586d3d499833f1f3a7a0213d19d87b2063c202bc16bcdbfdd860286031f16b4->enter($__internal_6586d3d499833f1f3a7a0213d19d87b2063c202bc16bcdbfdd860286031f16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6586d3d499833f1f3a7a0213d19d87b2063c202bc16bcdbfdd860286031f16b4->leave($__internal_6586d3d499833f1f3a7a0213d19d87b2063c202bc16bcdbfdd860286031f16b4_prof);

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
