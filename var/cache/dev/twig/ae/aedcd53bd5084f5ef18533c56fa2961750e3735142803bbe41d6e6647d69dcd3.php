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
        $__internal_19d586f86591ec237595ebccd1b212fb394f9b284fba966741e5aac769dfc604 = $this->env->getExtension("native_profiler");
        $__internal_19d586f86591ec237595ebccd1b212fb394f9b284fba966741e5aac769dfc604->enter($__internal_19d586f86591ec237595ebccd1b212fb394f9b284fba966741e5aac769dfc604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d586f86591ec237595ebccd1b212fb394f9b284fba966741e5aac769dfc604->leave($__internal_19d586f86591ec237595ebccd1b212fb394f9b284fba966741e5aac769dfc604_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7d81a2c32f13613c7eaa1f1a717ea7ecdbdfbb43921533ee0c636d40cab8af8 = $this->env->getExtension("native_profiler");
        $__internal_a7d81a2c32f13613c7eaa1f1a717ea7ecdbdfbb43921533ee0c636d40cab8af8->enter($__internal_a7d81a2c32f13613c7eaa1f1a717ea7ecdbdfbb43921533ee0c636d40cab8af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7d81a2c32f13613c7eaa1f1a717ea7ecdbdfbb43921533ee0c636d40cab8af8->leave($__internal_a7d81a2c32f13613c7eaa1f1a717ea7ecdbdfbb43921533ee0c636d40cab8af8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b4e9fb2cd44c9a8e391c85e9130fbbc6ebd34ca1dc9606f02ea0c800688eb1f = $this->env->getExtension("native_profiler");
        $__internal_6b4e9fb2cd44c9a8e391c85e9130fbbc6ebd34ca1dc9606f02ea0c800688eb1f->enter($__internal_6b4e9fb2cd44c9a8e391c85e9130fbbc6ebd34ca1dc9606f02ea0c800688eb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b4e9fb2cd44c9a8e391c85e9130fbbc6ebd34ca1dc9606f02ea0c800688eb1f->leave($__internal_6b4e9fb2cd44c9a8e391c85e9130fbbc6ebd34ca1dc9606f02ea0c800688eb1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6c189934e6113916301f10103f1cf0f3328af484947b40c9ad7a51da1d8a36e = $this->env->getExtension("native_profiler");
        $__internal_d6c189934e6113916301f10103f1cf0f3328af484947b40c9ad7a51da1d8a36e->enter($__internal_d6c189934e6113916301f10103f1cf0f3328af484947b40c9ad7a51da1d8a36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6c189934e6113916301f10103f1cf0f3328af484947b40c9ad7a51da1d8a36e->leave($__internal_d6c189934e6113916301f10103f1cf0f3328af484947b40c9ad7a51da1d8a36e_prof);

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
