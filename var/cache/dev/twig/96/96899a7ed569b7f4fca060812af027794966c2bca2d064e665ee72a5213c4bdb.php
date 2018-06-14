<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cabaf7cec8018b318aeeaeaa5b3d589dd64fa6c9dcda0df5114a2c7384186263 extends Twig_Template
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
        $__internal_c5d82f7bcb5c44c1710f2897b81817147031e86c4d66f45bf895d34258790688 = $this->env->getExtension("native_profiler");
        $__internal_c5d82f7bcb5c44c1710f2897b81817147031e86c4d66f45bf895d34258790688->enter($__internal_c5d82f7bcb5c44c1710f2897b81817147031e86c4d66f45bf895d34258790688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c5d82f7bcb5c44c1710f2897b81817147031e86c4d66f45bf895d34258790688->leave($__internal_c5d82f7bcb5c44c1710f2897b81817147031e86c4d66f45bf895d34258790688_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
