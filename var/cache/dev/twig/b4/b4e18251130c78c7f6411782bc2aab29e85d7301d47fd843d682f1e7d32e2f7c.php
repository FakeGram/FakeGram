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
        $__internal_327cf99fc56b0e72f75c1d63a6b86106b49151a487ba6e877d45e3954c5c9f28 = $this->env->getExtension("native_profiler");
        $__internal_327cf99fc56b0e72f75c1d63a6b86106b49151a487ba6e877d45e3954c5c9f28->enter($__internal_327cf99fc56b0e72f75c1d63a6b86106b49151a487ba6e877d45e3954c5c9f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327cf99fc56b0e72f75c1d63a6b86106b49151a487ba6e877d45e3954c5c9f28->leave($__internal_327cf99fc56b0e72f75c1d63a6b86106b49151a487ba6e877d45e3954c5c9f28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6d5f5789deb562d5600355d6d35264b344dab90d62fa515a3b33c7d7228586b = $this->env->getExtension("native_profiler");
        $__internal_c6d5f5789deb562d5600355d6d35264b344dab90d62fa515a3b33c7d7228586b->enter($__internal_c6d5f5789deb562d5600355d6d35264b344dab90d62fa515a3b33c7d7228586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6d5f5789deb562d5600355d6d35264b344dab90d62fa515a3b33c7d7228586b->leave($__internal_c6d5f5789deb562d5600355d6d35264b344dab90d62fa515a3b33c7d7228586b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_350311a367d0944a795b9afb5c63988ce21b532ec1b952b4ac1c480585d61dd4 = $this->env->getExtension("native_profiler");
        $__internal_350311a367d0944a795b9afb5c63988ce21b532ec1b952b4ac1c480585d61dd4->enter($__internal_350311a367d0944a795b9afb5c63988ce21b532ec1b952b4ac1c480585d61dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_350311a367d0944a795b9afb5c63988ce21b532ec1b952b4ac1c480585d61dd4->leave($__internal_350311a367d0944a795b9afb5c63988ce21b532ec1b952b4ac1c480585d61dd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a78822176d1ca586c7fb2a35eb1f31001ec42fe629e16f493dc2d94a9737810 = $this->env->getExtension("native_profiler");
        $__internal_6a78822176d1ca586c7fb2a35eb1f31001ec42fe629e16f493dc2d94a9737810->enter($__internal_6a78822176d1ca586c7fb2a35eb1f31001ec42fe629e16f493dc2d94a9737810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a78822176d1ca586c7fb2a35eb1f31001ec42fe629e16f493dc2d94a9737810->leave($__internal_6a78822176d1ca586c7fb2a35eb1f31001ec42fe629e16f493dc2d94a9737810_prof);

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
