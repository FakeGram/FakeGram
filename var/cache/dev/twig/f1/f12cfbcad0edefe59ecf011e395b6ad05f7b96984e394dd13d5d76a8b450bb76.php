<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ff0391373699dd55157cd3ded1e65ee5b7b4586e061ee0811c1166a3c3a29d9d extends Twig_Template
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
        $__internal_d7c683bc38fdaf01ec8875f58e1a6e511210a3672057d849e0917156a88fb562 = $this->env->getExtension("native_profiler");
        $__internal_d7c683bc38fdaf01ec8875f58e1a6e511210a3672057d849e0917156a88fb562->enter($__internal_d7c683bc38fdaf01ec8875f58e1a6e511210a3672057d849e0917156a88fb562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d7c683bc38fdaf01ec8875f58e1a6e511210a3672057d849e0917156a88fb562->leave($__internal_d7c683bc38fdaf01ec8875f58e1a6e511210a3672057d849e0917156a88fb562_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
