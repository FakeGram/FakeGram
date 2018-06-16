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
        $__internal_367c747906822e3fc76339296024a1ad86dc6f21b86de7543391326454693182 = $this->env->getExtension("native_profiler");
        $__internal_367c747906822e3fc76339296024a1ad86dc6f21b86de7543391326454693182->enter($__internal_367c747906822e3fc76339296024a1ad86dc6f21b86de7543391326454693182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367c747906822e3fc76339296024a1ad86dc6f21b86de7543391326454693182->leave($__internal_367c747906822e3fc76339296024a1ad86dc6f21b86de7543391326454693182_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49a51cdf9f612359925b14b8b7b6909d76a337f16f6757dd2572464c9d43b3d3 = $this->env->getExtension("native_profiler");
        $__internal_49a51cdf9f612359925b14b8b7b6909d76a337f16f6757dd2572464c9d43b3d3->enter($__internal_49a51cdf9f612359925b14b8b7b6909d76a337f16f6757dd2572464c9d43b3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49a51cdf9f612359925b14b8b7b6909d76a337f16f6757dd2572464c9d43b3d3->leave($__internal_49a51cdf9f612359925b14b8b7b6909d76a337f16f6757dd2572464c9d43b3d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5125c366a0ec5e671bcede9ea536303a0c43ce158694089229bde587c2303d88 = $this->env->getExtension("native_profiler");
        $__internal_5125c366a0ec5e671bcede9ea536303a0c43ce158694089229bde587c2303d88->enter($__internal_5125c366a0ec5e671bcede9ea536303a0c43ce158694089229bde587c2303d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5125c366a0ec5e671bcede9ea536303a0c43ce158694089229bde587c2303d88->leave($__internal_5125c366a0ec5e671bcede9ea536303a0c43ce158694089229bde587c2303d88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b886ccaf55f372c1b08c9b46c6bebf0c6d54f64e2da0ede0ea1ca0d8cca8112 = $this->env->getExtension("native_profiler");
        $__internal_7b886ccaf55f372c1b08c9b46c6bebf0c6d54f64e2da0ede0ea1ca0d8cca8112->enter($__internal_7b886ccaf55f372c1b08c9b46c6bebf0c6d54f64e2da0ede0ea1ca0d8cca8112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b886ccaf55f372c1b08c9b46c6bebf0c6d54f64e2da0ede0ea1ca0d8cca8112->leave($__internal_7b886ccaf55f372c1b08c9b46c6bebf0c6d54f64e2da0ede0ea1ca0d8cca8112_prof);

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
