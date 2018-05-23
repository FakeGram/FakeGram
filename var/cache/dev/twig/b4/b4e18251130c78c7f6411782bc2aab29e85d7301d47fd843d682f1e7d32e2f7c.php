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
        $__internal_9fdb56cd5c89a712e5da773184146e1e2c18c0f1146058c3f0fcdcbf0f7e71b9 = $this->env->getExtension("native_profiler");
        $__internal_9fdb56cd5c89a712e5da773184146e1e2c18c0f1146058c3f0fcdcbf0f7e71b9->enter($__internal_9fdb56cd5c89a712e5da773184146e1e2c18c0f1146058c3f0fcdcbf0f7e71b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fdb56cd5c89a712e5da773184146e1e2c18c0f1146058c3f0fcdcbf0f7e71b9->leave($__internal_9fdb56cd5c89a712e5da773184146e1e2c18c0f1146058c3f0fcdcbf0f7e71b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b53a4ac63050cd0f7bcc124a68b218c99b75d904ed82ac268d0736ca8d14688f = $this->env->getExtension("native_profiler");
        $__internal_b53a4ac63050cd0f7bcc124a68b218c99b75d904ed82ac268d0736ca8d14688f->enter($__internal_b53a4ac63050cd0f7bcc124a68b218c99b75d904ed82ac268d0736ca8d14688f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b53a4ac63050cd0f7bcc124a68b218c99b75d904ed82ac268d0736ca8d14688f->leave($__internal_b53a4ac63050cd0f7bcc124a68b218c99b75d904ed82ac268d0736ca8d14688f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f430e489cca756d1f9162b4280edab71468dd65e84bbd36705c5b23057488ec6 = $this->env->getExtension("native_profiler");
        $__internal_f430e489cca756d1f9162b4280edab71468dd65e84bbd36705c5b23057488ec6->enter($__internal_f430e489cca756d1f9162b4280edab71468dd65e84bbd36705c5b23057488ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f430e489cca756d1f9162b4280edab71468dd65e84bbd36705c5b23057488ec6->leave($__internal_f430e489cca756d1f9162b4280edab71468dd65e84bbd36705c5b23057488ec6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96b617669cc144bf31536d4d1711c3e45425ff4021a40b71c33766be7754e9a5 = $this->env->getExtension("native_profiler");
        $__internal_96b617669cc144bf31536d4d1711c3e45425ff4021a40b71c33766be7754e9a5->enter($__internal_96b617669cc144bf31536d4d1711c3e45425ff4021a40b71c33766be7754e9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96b617669cc144bf31536d4d1711c3e45425ff4021a40b71c33766be7754e9a5->leave($__internal_96b617669cc144bf31536d4d1711c3e45425ff4021a40b71c33766be7754e9a5_prof);

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
