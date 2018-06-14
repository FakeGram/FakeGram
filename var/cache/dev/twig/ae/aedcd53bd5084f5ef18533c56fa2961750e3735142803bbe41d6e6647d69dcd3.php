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
        $__internal_e771e87a2fe2a11a0031c6e7c9c7d09b112641d006d756d60d3f8dfcdca1e0dd = $this->env->getExtension("native_profiler");
        $__internal_e771e87a2fe2a11a0031c6e7c9c7d09b112641d006d756d60d3f8dfcdca1e0dd->enter($__internal_e771e87a2fe2a11a0031c6e7c9c7d09b112641d006d756d60d3f8dfcdca1e0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e771e87a2fe2a11a0031c6e7c9c7d09b112641d006d756d60d3f8dfcdca1e0dd->leave($__internal_e771e87a2fe2a11a0031c6e7c9c7d09b112641d006d756d60d3f8dfcdca1e0dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10b53d9390ce20b2483e667e2178b2342f6562d62e0cd0ab7afba9dc718c3138 = $this->env->getExtension("native_profiler");
        $__internal_10b53d9390ce20b2483e667e2178b2342f6562d62e0cd0ab7afba9dc718c3138->enter($__internal_10b53d9390ce20b2483e667e2178b2342f6562d62e0cd0ab7afba9dc718c3138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10b53d9390ce20b2483e667e2178b2342f6562d62e0cd0ab7afba9dc718c3138->leave($__internal_10b53d9390ce20b2483e667e2178b2342f6562d62e0cd0ab7afba9dc718c3138_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4543d7e2659f65174b56d640a8d2f5687408f218600ba0666ab182f3d96f8ae = $this->env->getExtension("native_profiler");
        $__internal_d4543d7e2659f65174b56d640a8d2f5687408f218600ba0666ab182f3d96f8ae->enter($__internal_d4543d7e2659f65174b56d640a8d2f5687408f218600ba0666ab182f3d96f8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4543d7e2659f65174b56d640a8d2f5687408f218600ba0666ab182f3d96f8ae->leave($__internal_d4543d7e2659f65174b56d640a8d2f5687408f218600ba0666ab182f3d96f8ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3c43dcc38b9dd9c66a1cf6a4d329b9fb82952fc530c5dd28ed668955f59fc80 = $this->env->getExtension("native_profiler");
        $__internal_c3c43dcc38b9dd9c66a1cf6a4d329b9fb82952fc530c5dd28ed668955f59fc80->enter($__internal_c3c43dcc38b9dd9c66a1cf6a4d329b9fb82952fc530c5dd28ed668955f59fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3c43dcc38b9dd9c66a1cf6a4d329b9fb82952fc530c5dd28ed668955f59fc80->leave($__internal_c3c43dcc38b9dd9c66a1cf6a4d329b9fb82952fc530c5dd28ed668955f59fc80_prof);

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
