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
        $__internal_9ff26498674e5f0d3a2442e05c97e0a0cd1a87db7bcd2f3ca0dac1b4f5838ca3 = $this->env->getExtension("native_profiler");
        $__internal_9ff26498674e5f0d3a2442e05c97e0a0cd1a87db7bcd2f3ca0dac1b4f5838ca3->enter($__internal_9ff26498674e5f0d3a2442e05c97e0a0cd1a87db7bcd2f3ca0dac1b4f5838ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff26498674e5f0d3a2442e05c97e0a0cd1a87db7bcd2f3ca0dac1b4f5838ca3->leave($__internal_9ff26498674e5f0d3a2442e05c97e0a0cd1a87db7bcd2f3ca0dac1b4f5838ca3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7964e3aff905b177c4c51a0ccb07df1a2692e334ec5020c5c0f3aadb9389e894 = $this->env->getExtension("native_profiler");
        $__internal_7964e3aff905b177c4c51a0ccb07df1a2692e334ec5020c5c0f3aadb9389e894->enter($__internal_7964e3aff905b177c4c51a0ccb07df1a2692e334ec5020c5c0f3aadb9389e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7964e3aff905b177c4c51a0ccb07df1a2692e334ec5020c5c0f3aadb9389e894->leave($__internal_7964e3aff905b177c4c51a0ccb07df1a2692e334ec5020c5c0f3aadb9389e894_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e89de49f3471b658e1487a2c48d6fdb1e38f4131fde739cd44e871afc1a7e0f9 = $this->env->getExtension("native_profiler");
        $__internal_e89de49f3471b658e1487a2c48d6fdb1e38f4131fde739cd44e871afc1a7e0f9->enter($__internal_e89de49f3471b658e1487a2c48d6fdb1e38f4131fde739cd44e871afc1a7e0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e89de49f3471b658e1487a2c48d6fdb1e38f4131fde739cd44e871afc1a7e0f9->leave($__internal_e89de49f3471b658e1487a2c48d6fdb1e38f4131fde739cd44e871afc1a7e0f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8485d5ccd24f61a6fe778e8c06eb67338abad79bc98e7b10c3bae04a6b78ee4f = $this->env->getExtension("native_profiler");
        $__internal_8485d5ccd24f61a6fe778e8c06eb67338abad79bc98e7b10c3bae04a6b78ee4f->enter($__internal_8485d5ccd24f61a6fe778e8c06eb67338abad79bc98e7b10c3bae04a6b78ee4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8485d5ccd24f61a6fe778e8c06eb67338abad79bc98e7b10c3bae04a6b78ee4f->leave($__internal_8485d5ccd24f61a6fe778e8c06eb67338abad79bc98e7b10c3bae04a6b78ee4f_prof);

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
