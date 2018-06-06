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
        $__internal_37507d465d16a712ab91c63139d45c47f79c1b0a70fb7006b6d70e0e656dbafe = $this->env->getExtension("native_profiler");
        $__internal_37507d465d16a712ab91c63139d45c47f79c1b0a70fb7006b6d70e0e656dbafe->enter($__internal_37507d465d16a712ab91c63139d45c47f79c1b0a70fb7006b6d70e0e656dbafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37507d465d16a712ab91c63139d45c47f79c1b0a70fb7006b6d70e0e656dbafe->leave($__internal_37507d465d16a712ab91c63139d45c47f79c1b0a70fb7006b6d70e0e656dbafe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8dd4ca4c13ff159d09254eab90f138b91a076cb4a8fb5b51cb608c8d3c5b5657 = $this->env->getExtension("native_profiler");
        $__internal_8dd4ca4c13ff159d09254eab90f138b91a076cb4a8fb5b51cb608c8d3c5b5657->enter($__internal_8dd4ca4c13ff159d09254eab90f138b91a076cb4a8fb5b51cb608c8d3c5b5657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8dd4ca4c13ff159d09254eab90f138b91a076cb4a8fb5b51cb608c8d3c5b5657->leave($__internal_8dd4ca4c13ff159d09254eab90f138b91a076cb4a8fb5b51cb608c8d3c5b5657_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f463f4c4f4e552d4b83dee92030867c5ea23d7349058730b3124665e01cd6fc5 = $this->env->getExtension("native_profiler");
        $__internal_f463f4c4f4e552d4b83dee92030867c5ea23d7349058730b3124665e01cd6fc5->enter($__internal_f463f4c4f4e552d4b83dee92030867c5ea23d7349058730b3124665e01cd6fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f463f4c4f4e552d4b83dee92030867c5ea23d7349058730b3124665e01cd6fc5->leave($__internal_f463f4c4f4e552d4b83dee92030867c5ea23d7349058730b3124665e01cd6fc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dc5ff89384e61dda1d5555883902ca8965f881fdf84841ce135bc774ec68d41 = $this->env->getExtension("native_profiler");
        $__internal_3dc5ff89384e61dda1d5555883902ca8965f881fdf84841ce135bc774ec68d41->enter($__internal_3dc5ff89384e61dda1d5555883902ca8965f881fdf84841ce135bc774ec68d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3dc5ff89384e61dda1d5555883902ca8965f881fdf84841ce135bc774ec68d41->leave($__internal_3dc5ff89384e61dda1d5555883902ca8965f881fdf84841ce135bc774ec68d41_prof);

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
