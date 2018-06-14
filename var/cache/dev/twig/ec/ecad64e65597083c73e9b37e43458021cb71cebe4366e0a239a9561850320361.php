<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b23640d98765668cedc4eee822fa40c36ab60e3cec3c8340b99593307aa7755f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_aee29bb7f1c34ca789cda04a56d3f8d9b4802c03b9d9fd43e486faa159e6416e = $this->env->getExtension("native_profiler");
        $__internal_aee29bb7f1c34ca789cda04a56d3f8d9b4802c03b9d9fd43e486faa159e6416e->enter($__internal_aee29bb7f1c34ca789cda04a56d3f8d9b4802c03b9d9fd43e486faa159e6416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aee29bb7f1c34ca789cda04a56d3f8d9b4802c03b9d9fd43e486faa159e6416e->leave($__internal_aee29bb7f1c34ca789cda04a56d3f8d9b4802c03b9d9fd43e486faa159e6416e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a983325c41d4aaaf016838f81c8c7cfd85c30633ef4cf8bba7292996b7543e19 = $this->env->getExtension("native_profiler");
        $__internal_a983325c41d4aaaf016838f81c8c7cfd85c30633ef4cf8bba7292996b7543e19->enter($__internal_a983325c41d4aaaf016838f81c8c7cfd85c30633ef4cf8bba7292996b7543e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a983325c41d4aaaf016838f81c8c7cfd85c30633ef4cf8bba7292996b7543e19->leave($__internal_a983325c41d4aaaf016838f81c8c7cfd85c30633ef4cf8bba7292996b7543e19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90fb8899cd100ab88a9206f5d11079c3d9565103c1a66409f8c8ffbf48d4837 = $this->env->getExtension("native_profiler");
        $__internal_f90fb8899cd100ab88a9206f5d11079c3d9565103c1a66409f8c8ffbf48d4837->enter($__internal_f90fb8899cd100ab88a9206f5d11079c3d9565103c1a66409f8c8ffbf48d4837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f90fb8899cd100ab88a9206f5d11079c3d9565103c1a66409f8c8ffbf48d4837->leave($__internal_f90fb8899cd100ab88a9206f5d11079c3d9565103c1a66409f8c8ffbf48d4837_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
