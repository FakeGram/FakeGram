<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c34d9659ac54215a5a2398e9a81453c1cbd748b1947f5c32016cd94d5196cfb1 extends Twig_Template
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
        $__internal_dfa7de2f8f8316baaff3664ba26e65b0d8d4d1e29ecf935a9345e4d13b5db599 = $this->env->getExtension("native_profiler");
        $__internal_dfa7de2f8f8316baaff3664ba26e65b0d8d4d1e29ecf935a9345e4d13b5db599->enter($__internal_dfa7de2f8f8316baaff3664ba26e65b0d8d4d1e29ecf935a9345e4d13b5db599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dfa7de2f8f8316baaff3664ba26e65b0d8d4d1e29ecf935a9345e4d13b5db599->leave($__internal_dfa7de2f8f8316baaff3664ba26e65b0d8d4d1e29ecf935a9345e4d13b5db599_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
