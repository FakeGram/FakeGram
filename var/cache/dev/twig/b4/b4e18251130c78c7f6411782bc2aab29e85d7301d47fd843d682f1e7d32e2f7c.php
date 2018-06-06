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
        $__internal_98de8c62e13c6393becf4d3a4d5d7610454487bdfe43fe06c0ea778510ce1439 = $this->env->getExtension("native_profiler");
        $__internal_98de8c62e13c6393becf4d3a4d5d7610454487bdfe43fe06c0ea778510ce1439->enter($__internal_98de8c62e13c6393becf4d3a4d5d7610454487bdfe43fe06c0ea778510ce1439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98de8c62e13c6393becf4d3a4d5d7610454487bdfe43fe06c0ea778510ce1439->leave($__internal_98de8c62e13c6393becf4d3a4d5d7610454487bdfe43fe06c0ea778510ce1439_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf3ef68d2f2020e0516d95f73df7bb6849d327a287408d6176eceda379063448 = $this->env->getExtension("native_profiler");
        $__internal_bf3ef68d2f2020e0516d95f73df7bb6849d327a287408d6176eceda379063448->enter($__internal_bf3ef68d2f2020e0516d95f73df7bb6849d327a287408d6176eceda379063448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf3ef68d2f2020e0516d95f73df7bb6849d327a287408d6176eceda379063448->leave($__internal_bf3ef68d2f2020e0516d95f73df7bb6849d327a287408d6176eceda379063448_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_040ab1e808f7a6923a97e5422e1c49289b11a6aa4f501e002954d32106a2f731 = $this->env->getExtension("native_profiler");
        $__internal_040ab1e808f7a6923a97e5422e1c49289b11a6aa4f501e002954d32106a2f731->enter($__internal_040ab1e808f7a6923a97e5422e1c49289b11a6aa4f501e002954d32106a2f731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_040ab1e808f7a6923a97e5422e1c49289b11a6aa4f501e002954d32106a2f731->leave($__internal_040ab1e808f7a6923a97e5422e1c49289b11a6aa4f501e002954d32106a2f731_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_447de0d2ad39941503820cd91a9abb2df9c88d6c38957543099a04153bc318c5 = $this->env->getExtension("native_profiler");
        $__internal_447de0d2ad39941503820cd91a9abb2df9c88d6c38957543099a04153bc318c5->enter($__internal_447de0d2ad39941503820cd91a9abb2df9c88d6c38957543099a04153bc318c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_447de0d2ad39941503820cd91a9abb2df9c88d6c38957543099a04153bc318c5->leave($__internal_447de0d2ad39941503820cd91a9abb2df9c88d6c38957543099a04153bc318c5_prof);

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
