<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e954f5018cce46763a99538a97239841cac1ed48f5975c67972659922535894 extends Twig_Template
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
        $__internal_a58effeea20b7a34647227e7dc67661d9b22ea00109b99788fb487d379eee9e2 = $this->env->getExtension("native_profiler");
        $__internal_a58effeea20b7a34647227e7dc67661d9b22ea00109b99788fb487d379eee9e2->enter($__internal_a58effeea20b7a34647227e7dc67661d9b22ea00109b99788fb487d379eee9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a58effeea20b7a34647227e7dc67661d9b22ea00109b99788fb487d379eee9e2->leave($__internal_a58effeea20b7a34647227e7dc67661d9b22ea00109b99788fb487d379eee9e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6deb98fc1a9bc28f4d3e10aa233cf90c1052cd7cd45df4d039025c68f47b8b82 = $this->env->getExtension("native_profiler");
        $__internal_6deb98fc1a9bc28f4d3e10aa233cf90c1052cd7cd45df4d039025c68f47b8b82->enter($__internal_6deb98fc1a9bc28f4d3e10aa233cf90c1052cd7cd45df4d039025c68f47b8b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6deb98fc1a9bc28f4d3e10aa233cf90c1052cd7cd45df4d039025c68f47b8b82->leave($__internal_6deb98fc1a9bc28f4d3e10aa233cf90c1052cd7cd45df4d039025c68f47b8b82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1700b243821542cd7585a03049d0599403312a35bc3258a51f869f8eea3f461 = $this->env->getExtension("native_profiler");
        $__internal_e1700b243821542cd7585a03049d0599403312a35bc3258a51f869f8eea3f461->enter($__internal_e1700b243821542cd7585a03049d0599403312a35bc3258a51f869f8eea3f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1700b243821542cd7585a03049d0599403312a35bc3258a51f869f8eea3f461->leave($__internal_e1700b243821542cd7585a03049d0599403312a35bc3258a51f869f8eea3f461_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea815fcbc33b77476d4b608cce16d60a46e00f2daaf29f8d65dc9e5875e93f8d = $this->env->getExtension("native_profiler");
        $__internal_ea815fcbc33b77476d4b608cce16d60a46e00f2daaf29f8d65dc9e5875e93f8d->enter($__internal_ea815fcbc33b77476d4b608cce16d60a46e00f2daaf29f8d65dc9e5875e93f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea815fcbc33b77476d4b608cce16d60a46e00f2daaf29f8d65dc9e5875e93f8d->leave($__internal_ea815fcbc33b77476d4b608cce16d60a46e00f2daaf29f8d65dc9e5875e93f8d_prof);

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
