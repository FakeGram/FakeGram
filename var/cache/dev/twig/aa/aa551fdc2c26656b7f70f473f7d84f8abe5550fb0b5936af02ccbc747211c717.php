<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_db71adab35cd37b2e6eb0ea9797a5c1287448b745118268cb7f78c33068fc662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7becb52581652786cdf23ae268d1f55f218dbad36b5eac2f8aebc6bf49a9ea1 = $this->env->getExtension("native_profiler");
        $__internal_e7becb52581652786cdf23ae268d1f55f218dbad36b5eac2f8aebc6bf49a9ea1->enter($__internal_e7becb52581652786cdf23ae268d1f55f218dbad36b5eac2f8aebc6bf49a9ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7becb52581652786cdf23ae268d1f55f218dbad36b5eac2f8aebc6bf49a9ea1->leave($__internal_e7becb52581652786cdf23ae268d1f55f218dbad36b5eac2f8aebc6bf49a9ea1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4d7d929e77c13132bb0928c42fee52b6b7eb9e3cfbc938fc574d9cd0d53c12c = $this->env->getExtension("native_profiler");
        $__internal_b4d7d929e77c13132bb0928c42fee52b6b7eb9e3cfbc938fc574d9cd0d53c12c->enter($__internal_b4d7d929e77c13132bb0928c42fee52b6b7eb9e3cfbc938fc574d9cd0d53c12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b4d7d929e77c13132bb0928c42fee52b6b7eb9e3cfbc938fc574d9cd0d53c12c->leave($__internal_b4d7d929e77c13132bb0928c42fee52b6b7eb9e3cfbc938fc574d9cd0d53c12c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9fbf4f94dda407f6a401334f95da60389d555925d6ec921c8b16703fe3522ab = $this->env->getExtension("native_profiler");
        $__internal_d9fbf4f94dda407f6a401334f95da60389d555925d6ec921c8b16703fe3522ab->enter($__internal_d9fbf4f94dda407f6a401334f95da60389d555925d6ec921c8b16703fe3522ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d9fbf4f94dda407f6a401334f95da60389d555925d6ec921c8b16703fe3522ab->leave($__internal_d9fbf4f94dda407f6a401334f95da60389d555925d6ec921c8b16703fe3522ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
