<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_795b046941446b01176c9df3b1658ab9470e1e275593e918f5c3e341e772a4b3 extends Twig_Template
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
        $__internal_7d66981734f5cf28b7fec29bdc835806c711d1742ee0c768a4a37a30d87ef854 = $this->env->getExtension("native_profiler");
        $__internal_7d66981734f5cf28b7fec29bdc835806c711d1742ee0c768a4a37a30d87ef854->enter($__internal_7d66981734f5cf28b7fec29bdc835806c711d1742ee0c768a4a37a30d87ef854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7d66981734f5cf28b7fec29bdc835806c711d1742ee0c768a4a37a30d87ef854->leave($__internal_7d66981734f5cf28b7fec29bdc835806c711d1742ee0c768a4a37a30d87ef854_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
