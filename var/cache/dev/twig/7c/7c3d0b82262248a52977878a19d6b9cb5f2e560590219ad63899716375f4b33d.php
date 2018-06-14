<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d68e941756f76fd29b652057673cf5857d21ff5f084380123fcaf47432809bab extends Twig_Template
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
        $__internal_71472130cec271548e299ec8f42fd9f8edf850786e819a5af5b22688720cc16d = $this->env->getExtension("native_profiler");
        $__internal_71472130cec271548e299ec8f42fd9f8edf850786e819a5af5b22688720cc16d->enter($__internal_71472130cec271548e299ec8f42fd9f8edf850786e819a5af5b22688720cc16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_71472130cec271548e299ec8f42fd9f8edf850786e819a5af5b22688720cc16d->leave($__internal_71472130cec271548e299ec8f42fd9f8edf850786e819a5af5b22688720cc16d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
