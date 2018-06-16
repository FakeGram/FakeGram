<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d813b479e6ed0014e2c8ff26e594c63941341dd560f129c4aa8b7b004a61401d extends Twig_Template
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
        $__internal_9ae79b1cdf157771d7de69d36f968a040ad5b953fbb35c620dcf704c0851b437 = $this->env->getExtension("native_profiler");
        $__internal_9ae79b1cdf157771d7de69d36f968a040ad5b953fbb35c620dcf704c0851b437->enter($__internal_9ae79b1cdf157771d7de69d36f968a040ad5b953fbb35c620dcf704c0851b437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae79b1cdf157771d7de69d36f968a040ad5b953fbb35c620dcf704c0851b437->leave($__internal_9ae79b1cdf157771d7de69d36f968a040ad5b953fbb35c620dcf704c0851b437_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f78ad7dff1df6f95dab0cd0b2b031817a4ae06b9947be2d3e7fd8230293f9d07 = $this->env->getExtension("native_profiler");
        $__internal_f78ad7dff1df6f95dab0cd0b2b031817a4ae06b9947be2d3e7fd8230293f9d07->enter($__internal_f78ad7dff1df6f95dab0cd0b2b031817a4ae06b9947be2d3e7fd8230293f9d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f78ad7dff1df6f95dab0cd0b2b031817a4ae06b9947be2d3e7fd8230293f9d07->leave($__internal_f78ad7dff1df6f95dab0cd0b2b031817a4ae06b9947be2d3e7fd8230293f9d07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97ea734cad12b5227875619269ce126ddc022f597fdbb2b8c6d3916d0fddad92 = $this->env->getExtension("native_profiler");
        $__internal_97ea734cad12b5227875619269ce126ddc022f597fdbb2b8c6d3916d0fddad92->enter($__internal_97ea734cad12b5227875619269ce126ddc022f597fdbb2b8c6d3916d0fddad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97ea734cad12b5227875619269ce126ddc022f597fdbb2b8c6d3916d0fddad92->leave($__internal_97ea734cad12b5227875619269ce126ddc022f597fdbb2b8c6d3916d0fddad92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35a756c96392ad55e7dbf8701ca4d8ebcee5b4876eafeb9adf4cf86069d25120 = $this->env->getExtension("native_profiler");
        $__internal_35a756c96392ad55e7dbf8701ca4d8ebcee5b4876eafeb9adf4cf86069d25120->enter($__internal_35a756c96392ad55e7dbf8701ca4d8ebcee5b4876eafeb9adf4cf86069d25120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35a756c96392ad55e7dbf8701ca4d8ebcee5b4876eafeb9adf4cf86069d25120->leave($__internal_35a756c96392ad55e7dbf8701ca4d8ebcee5b4876eafeb9adf4cf86069d25120_prof);

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
