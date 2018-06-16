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
        $__internal_7bb2753d930d471120d3ab11cfffa6fdb9e72816ea8d67bf8fb5580c6a1ac651 = $this->env->getExtension("native_profiler");
        $__internal_7bb2753d930d471120d3ab11cfffa6fdb9e72816ea8d67bf8fb5580c6a1ac651->enter($__internal_7bb2753d930d471120d3ab11cfffa6fdb9e72816ea8d67bf8fb5580c6a1ac651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bb2753d930d471120d3ab11cfffa6fdb9e72816ea8d67bf8fb5580c6a1ac651->leave($__internal_7bb2753d930d471120d3ab11cfffa6fdb9e72816ea8d67bf8fb5580c6a1ac651_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_158f219e9b374d85e6ab92799b7bf4478a68ae3f68a3d187f1d23c0cb18f0b97 = $this->env->getExtension("native_profiler");
        $__internal_158f219e9b374d85e6ab92799b7bf4478a68ae3f68a3d187f1d23c0cb18f0b97->enter($__internal_158f219e9b374d85e6ab92799b7bf4478a68ae3f68a3d187f1d23c0cb18f0b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_158f219e9b374d85e6ab92799b7bf4478a68ae3f68a3d187f1d23c0cb18f0b97->leave($__internal_158f219e9b374d85e6ab92799b7bf4478a68ae3f68a3d187f1d23c0cb18f0b97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43581db3ae2942bdff3b8f73ee3179b3b5f0ee71ef45a2205ad6e6c0809a6ac7 = $this->env->getExtension("native_profiler");
        $__internal_43581db3ae2942bdff3b8f73ee3179b3b5f0ee71ef45a2205ad6e6c0809a6ac7->enter($__internal_43581db3ae2942bdff3b8f73ee3179b3b5f0ee71ef45a2205ad6e6c0809a6ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43581db3ae2942bdff3b8f73ee3179b3b5f0ee71ef45a2205ad6e6c0809a6ac7->leave($__internal_43581db3ae2942bdff3b8f73ee3179b3b5f0ee71ef45a2205ad6e6c0809a6ac7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a78746a5e220e445f44846c995cee74bf0c081185e8849c568ef1cb8f332e4a = $this->env->getExtension("native_profiler");
        $__internal_8a78746a5e220e445f44846c995cee74bf0c081185e8849c568ef1cb8f332e4a->enter($__internal_8a78746a5e220e445f44846c995cee74bf0c081185e8849c568ef1cb8f332e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a78746a5e220e445f44846c995cee74bf0c081185e8849c568ef1cb8f332e4a->leave($__internal_8a78746a5e220e445f44846c995cee74bf0c081185e8849c568ef1cb8f332e4a_prof);

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
