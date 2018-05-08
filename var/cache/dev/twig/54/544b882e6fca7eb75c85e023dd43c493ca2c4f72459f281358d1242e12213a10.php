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
        $__internal_05ec1c5147788e5772f50f8164aa430ceff4d2935cf265a372372717b0245405 = $this->env->getExtension("native_profiler");
        $__internal_05ec1c5147788e5772f50f8164aa430ceff4d2935cf265a372372717b0245405->enter($__internal_05ec1c5147788e5772f50f8164aa430ceff4d2935cf265a372372717b0245405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ec1c5147788e5772f50f8164aa430ceff4d2935cf265a372372717b0245405->leave($__internal_05ec1c5147788e5772f50f8164aa430ceff4d2935cf265a372372717b0245405_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9093befde0d23d3d8f6d832b47e0b40be61a1517ad4b10d52e6db4a8eec1d066 = $this->env->getExtension("native_profiler");
        $__internal_9093befde0d23d3d8f6d832b47e0b40be61a1517ad4b10d52e6db4a8eec1d066->enter($__internal_9093befde0d23d3d8f6d832b47e0b40be61a1517ad4b10d52e6db4a8eec1d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9093befde0d23d3d8f6d832b47e0b40be61a1517ad4b10d52e6db4a8eec1d066->leave($__internal_9093befde0d23d3d8f6d832b47e0b40be61a1517ad4b10d52e6db4a8eec1d066_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f83af92099b4091657a9c8532687094a0dd9270b71c8f12137ba8d81143f4c70 = $this->env->getExtension("native_profiler");
        $__internal_f83af92099b4091657a9c8532687094a0dd9270b71c8f12137ba8d81143f4c70->enter($__internal_f83af92099b4091657a9c8532687094a0dd9270b71c8f12137ba8d81143f4c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f83af92099b4091657a9c8532687094a0dd9270b71c8f12137ba8d81143f4c70->leave($__internal_f83af92099b4091657a9c8532687094a0dd9270b71c8f12137ba8d81143f4c70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea8a7717a16b0f1a7d549b6c77453cfbf68e1bc019ff6ef71007f1cb2c6b7c78 = $this->env->getExtension("native_profiler");
        $__internal_ea8a7717a16b0f1a7d549b6c77453cfbf68e1bc019ff6ef71007f1cb2c6b7c78->enter($__internal_ea8a7717a16b0f1a7d549b6c77453cfbf68e1bc019ff6ef71007f1cb2c6b7c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea8a7717a16b0f1a7d549b6c77453cfbf68e1bc019ff6ef71007f1cb2c6b7c78->leave($__internal_ea8a7717a16b0f1a7d549b6c77453cfbf68e1bc019ff6ef71007f1cb2c6b7c78_prof);

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
