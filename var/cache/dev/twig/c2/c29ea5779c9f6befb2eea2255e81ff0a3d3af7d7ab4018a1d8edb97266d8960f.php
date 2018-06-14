<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_289743a355ab6ed4c9e506939f15bd0bd32e8f26fcfd82b90819fc6bdeaddff5 extends Twig_Template
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
        $__internal_d9cbc73ded18265803f788925ef52446910e5dbcdfd598fb5b328ce16abb1d14 = $this->env->getExtension("native_profiler");
        $__internal_d9cbc73ded18265803f788925ef52446910e5dbcdfd598fb5b328ce16abb1d14->enter($__internal_d9cbc73ded18265803f788925ef52446910e5dbcdfd598fb5b328ce16abb1d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d9cbc73ded18265803f788925ef52446910e5dbcdfd598fb5b328ce16abb1d14->leave($__internal_d9cbc73ded18265803f788925ef52446910e5dbcdfd598fb5b328ce16abb1d14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
