<?php

/* image_edit.html */
class __TwigTemplate_7d28f694af4b82ff040395b47f69e8a4052ea64a9973d3a24f2972f3324db8dc extends Twig_Template
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
        $__internal_632d6541a5656e013d74bd527912383cac67ba59c79e45dd7ed03028e6042355 = $this->env->getExtension("native_profiler");
        $__internal_632d6541a5656e013d74bd527912383cac67ba59c79e45dd7ed03028e6042355->enter($__internal_632d6541a5656e013d74bd527912383cac67ba59c79e45dd7ed03028e6042355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image_edit.html"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), array(), "array"), "html", null, true);
        echo "\" />";
        
        $__internal_632d6541a5656e013d74bd527912383cac67ba59c79e45dd7ed03028e6042355->leave($__internal_632d6541a5656e013d74bd527912383cac67ba59c79e45dd7ed03028e6042355_prof);

    }

    public function getTemplateName()
    {
        return "image_edit.html";
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
/* <img src="{{pic[img]}}" />*/
