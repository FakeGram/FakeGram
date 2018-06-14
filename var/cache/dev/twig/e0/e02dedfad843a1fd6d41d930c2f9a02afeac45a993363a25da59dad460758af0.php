<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f9d6d0b3427c48d84116bef2754fa0fbc50a0dafaba62cfcddad1f9d78648a73 extends Twig_Template
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
        $__internal_60606a5e241a9bd747fcbac807daa2e3defd3cd10a62f16dcc4cc893a91081ea = $this->env->getExtension("native_profiler");
        $__internal_60606a5e241a9bd747fcbac807daa2e3defd3cd10a62f16dcc4cc893a91081ea->enter($__internal_60606a5e241a9bd747fcbac807daa2e3defd3cd10a62f16dcc4cc893a91081ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_60606a5e241a9bd747fcbac807daa2e3defd3cd10a62f16dcc4cc893a91081ea->leave($__internal_60606a5e241a9bd747fcbac807daa2e3defd3cd10a62f16dcc4cc893a91081ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
