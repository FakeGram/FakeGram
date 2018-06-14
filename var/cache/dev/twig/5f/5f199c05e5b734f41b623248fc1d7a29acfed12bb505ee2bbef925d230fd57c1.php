<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f2e242b353403da6538e8ee2522410d4b8b53a540a3675785fe9462dfc5d6e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d8f67dfecd970e91ce15b83e3a0f2db7ad769b0abfbff50ce7c5a77e9fa2323 = $this->env->getExtension("native_profiler");
        $__internal_4d8f67dfecd970e91ce15b83e3a0f2db7ad769b0abfbff50ce7c5a77e9fa2323->enter($__internal_4d8f67dfecd970e91ce15b83e3a0f2db7ad769b0abfbff50ce7c5a77e9fa2323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8f67dfecd970e91ce15b83e3a0f2db7ad769b0abfbff50ce7c5a77e9fa2323->leave($__internal_4d8f67dfecd970e91ce15b83e3a0f2db7ad769b0abfbff50ce7c5a77e9fa2323_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_342dcaf18bc57e11b02e8a35869d6bbf36e079edda185ccdda9f6d4aa3543a21 = $this->env->getExtension("native_profiler");
        $__internal_342dcaf18bc57e11b02e8a35869d6bbf36e079edda185ccdda9f6d4aa3543a21->enter($__internal_342dcaf18bc57e11b02e8a35869d6bbf36e079edda185ccdda9f6d4aa3543a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_342dcaf18bc57e11b02e8a35869d6bbf36e079edda185ccdda9f6d4aa3543a21->leave($__internal_342dcaf18bc57e11b02e8a35869d6bbf36e079edda185ccdda9f6d4aa3543a21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1230fcc269bccb4c1a5fcd7e8aadbb34a572cd6f36ae74f3faf6caf6f151ae82 = $this->env->getExtension("native_profiler");
        $__internal_1230fcc269bccb4c1a5fcd7e8aadbb34a572cd6f36ae74f3faf6caf6f151ae82->enter($__internal_1230fcc269bccb4c1a5fcd7e8aadbb34a572cd6f36ae74f3faf6caf6f151ae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1230fcc269bccb4c1a5fcd7e8aadbb34a572cd6f36ae74f3faf6caf6f151ae82->leave($__internal_1230fcc269bccb4c1a5fcd7e8aadbb34a572cd6f36ae74f3faf6caf6f151ae82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f0b0fc1b7d68eaa98b189213ef6e2313cc5702ec0d1a229c0fa904e1e63346c = $this->env->getExtension("native_profiler");
        $__internal_3f0b0fc1b7d68eaa98b189213ef6e2313cc5702ec0d1a229c0fa904e1e63346c->enter($__internal_3f0b0fc1b7d68eaa98b189213ef6e2313cc5702ec0d1a229c0fa904e1e63346c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f0b0fc1b7d68eaa98b189213ef6e2313cc5702ec0d1a229c0fa904e1e63346c->leave($__internal_3f0b0fc1b7d68eaa98b189213ef6e2313cc5702ec0d1a229c0fa904e1e63346c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
