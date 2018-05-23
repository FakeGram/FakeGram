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
        $__internal_20ebdf4aad78a18ced16fc72a617aa629f333e465367dcb2c84365b2330f78f2 = $this->env->getExtension("native_profiler");
        $__internal_20ebdf4aad78a18ced16fc72a617aa629f333e465367dcb2c84365b2330f78f2->enter($__internal_20ebdf4aad78a18ced16fc72a617aa629f333e465367dcb2c84365b2330f78f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20ebdf4aad78a18ced16fc72a617aa629f333e465367dcb2c84365b2330f78f2->leave($__internal_20ebdf4aad78a18ced16fc72a617aa629f333e465367dcb2c84365b2330f78f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2431f76eb3997c606bda6d3e7d82569e36c79f545b9f89a6f62a99bf346b082e = $this->env->getExtension("native_profiler");
        $__internal_2431f76eb3997c606bda6d3e7d82569e36c79f545b9f89a6f62a99bf346b082e->enter($__internal_2431f76eb3997c606bda6d3e7d82569e36c79f545b9f89a6f62a99bf346b082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2431f76eb3997c606bda6d3e7d82569e36c79f545b9f89a6f62a99bf346b082e->leave($__internal_2431f76eb3997c606bda6d3e7d82569e36c79f545b9f89a6f62a99bf346b082e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fc56a5886b5c355f29c38631de3eebea5fddceb9c638ec3b0d9c8ffd4d5bcff = $this->env->getExtension("native_profiler");
        $__internal_0fc56a5886b5c355f29c38631de3eebea5fddceb9c638ec3b0d9c8ffd4d5bcff->enter($__internal_0fc56a5886b5c355f29c38631de3eebea5fddceb9c638ec3b0d9c8ffd4d5bcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0fc56a5886b5c355f29c38631de3eebea5fddceb9c638ec3b0d9c8ffd4d5bcff->leave($__internal_0fc56a5886b5c355f29c38631de3eebea5fddceb9c638ec3b0d9c8ffd4d5bcff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a49dd2cdaa464a53d65bff1f4c15b9999e8d2890a048d7ee7884d9faf2762947 = $this->env->getExtension("native_profiler");
        $__internal_a49dd2cdaa464a53d65bff1f4c15b9999e8d2890a048d7ee7884d9faf2762947->enter($__internal_a49dd2cdaa464a53d65bff1f4c15b9999e8d2890a048d7ee7884d9faf2762947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a49dd2cdaa464a53d65bff1f4c15b9999e8d2890a048d7ee7884d9faf2762947->leave($__internal_a49dd2cdaa464a53d65bff1f4c15b9999e8d2890a048d7ee7884d9faf2762947_prof);

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
