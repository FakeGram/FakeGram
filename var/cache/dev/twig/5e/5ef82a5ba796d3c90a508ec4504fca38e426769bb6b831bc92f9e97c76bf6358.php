<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e0be33ffaa4307c854cfbcdc86384c79505b8c37911d6381a1ef5a235b526fc6 extends Twig_Template
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
        $__internal_bfa1c20ea17bd897ba7499c735c2483351d293d18f90959a2801ee66f970fcc7 = $this->env->getExtension("native_profiler");
        $__internal_bfa1c20ea17bd897ba7499c735c2483351d293d18f90959a2801ee66f970fcc7->enter($__internal_bfa1c20ea17bd897ba7499c735c2483351d293d18f90959a2801ee66f970fcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bfa1c20ea17bd897ba7499c735c2483351d293d18f90959a2801ee66f970fcc7->leave($__internal_bfa1c20ea17bd897ba7499c735c2483351d293d18f90959a2801ee66f970fcc7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
