<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3680af5ad81fd3a82ffe492a900957127a3ab9a5dd1852662321ceea25349c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_daffd6e727f9f85eaaeebe36a4fdc0cb16d15a1c7ff521c20f2ac65fe83d53af = $this->env->getExtension("native_profiler");
        $__internal_daffd6e727f9f85eaaeebe36a4fdc0cb16d15a1c7ff521c20f2ac65fe83d53af->enter($__internal_daffd6e727f9f85eaaeebe36a4fdc0cb16d15a1c7ff521c20f2ac65fe83d53af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daffd6e727f9f85eaaeebe36a4fdc0cb16d15a1c7ff521c20f2ac65fe83d53af->leave($__internal_daffd6e727f9f85eaaeebe36a4fdc0cb16d15a1c7ff521c20f2ac65fe83d53af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa60e3cbe47b314c679188bc7a4286626c4eb7cc9a46ee0ad22063fa9651e99b = $this->env->getExtension("native_profiler");
        $__internal_aa60e3cbe47b314c679188bc7a4286626c4eb7cc9a46ee0ad22063fa9651e99b->enter($__internal_aa60e3cbe47b314c679188bc7a4286626c4eb7cc9a46ee0ad22063fa9651e99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa60e3cbe47b314c679188bc7a4286626c4eb7cc9a46ee0ad22063fa9651e99b->leave($__internal_aa60e3cbe47b314c679188bc7a4286626c4eb7cc9a46ee0ad22063fa9651e99b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b119685a70302a68fb6cf683ea46b3d8532fcba61f0aaa8df0fba26128c6bdea = $this->env->getExtension("native_profiler");
        $__internal_b119685a70302a68fb6cf683ea46b3d8532fcba61f0aaa8df0fba26128c6bdea->enter($__internal_b119685a70302a68fb6cf683ea46b3d8532fcba61f0aaa8df0fba26128c6bdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b119685a70302a68fb6cf683ea46b3d8532fcba61f0aaa8df0fba26128c6bdea->leave($__internal_b119685a70302a68fb6cf683ea46b3d8532fcba61f0aaa8df0fba26128c6bdea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d39976cc6637e56a7e99d1ec85f567ce02058d83273dc56697c379d159a584e0 = $this->env->getExtension("native_profiler");
        $__internal_d39976cc6637e56a7e99d1ec85f567ce02058d83273dc56697c379d159a584e0->enter($__internal_d39976cc6637e56a7e99d1ec85f567ce02058d83273dc56697c379d159a584e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d39976cc6637e56a7e99d1ec85f567ce02058d83273dc56697c379d159a584e0->leave($__internal_d39976cc6637e56a7e99d1ec85f567ce02058d83273dc56697c379d159a584e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
