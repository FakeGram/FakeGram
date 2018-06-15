<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_636b9f2637b7e70eac420d87bd3270155ce12e808d8f9bfdd7845e19bb1b3f41 extends Twig_Template
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
        $__internal_ceb4b3e7f4e5f751aa7c37280d3647baf4a88e9afbc4a647ad64267e13f58c61 = $this->env->getExtension("native_profiler");
        $__internal_ceb4b3e7f4e5f751aa7c37280d3647baf4a88e9afbc4a647ad64267e13f58c61->enter($__internal_ceb4b3e7f4e5f751aa7c37280d3647baf4a88e9afbc4a647ad64267e13f58c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ceb4b3e7f4e5f751aa7c37280d3647baf4a88e9afbc4a647ad64267e13f58c61->leave($__internal_ceb4b3e7f4e5f751aa7c37280d3647baf4a88e9afbc4a647ad64267e13f58c61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
