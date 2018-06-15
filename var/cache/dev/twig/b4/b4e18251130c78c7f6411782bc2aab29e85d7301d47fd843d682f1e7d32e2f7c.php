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
        $__internal_8ab7ebd9c4011e6552ba8079e691f8ec4a1a1ba5dd10ebd35c8c7eca1611fecb = $this->env->getExtension("native_profiler");
        $__internal_8ab7ebd9c4011e6552ba8079e691f8ec4a1a1ba5dd10ebd35c8c7eca1611fecb->enter($__internal_8ab7ebd9c4011e6552ba8079e691f8ec4a1a1ba5dd10ebd35c8c7eca1611fecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab7ebd9c4011e6552ba8079e691f8ec4a1a1ba5dd10ebd35c8c7eca1611fecb->leave($__internal_8ab7ebd9c4011e6552ba8079e691f8ec4a1a1ba5dd10ebd35c8c7eca1611fecb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a9f05dd2f559ef6b0f1c29c1d12c813a2f69f5006428bf7a4c553d73f896f455 = $this->env->getExtension("native_profiler");
        $__internal_a9f05dd2f559ef6b0f1c29c1d12c813a2f69f5006428bf7a4c553d73f896f455->enter($__internal_a9f05dd2f559ef6b0f1c29c1d12c813a2f69f5006428bf7a4c553d73f896f455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a9f05dd2f559ef6b0f1c29c1d12c813a2f69f5006428bf7a4c553d73f896f455->leave($__internal_a9f05dd2f559ef6b0f1c29c1d12c813a2f69f5006428bf7a4c553d73f896f455_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be1cdd5aa75420674434d1734762c5a5fb860a81362e81722eec940e2d8cd528 = $this->env->getExtension("native_profiler");
        $__internal_be1cdd5aa75420674434d1734762c5a5fb860a81362e81722eec940e2d8cd528->enter($__internal_be1cdd5aa75420674434d1734762c5a5fb860a81362e81722eec940e2d8cd528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be1cdd5aa75420674434d1734762c5a5fb860a81362e81722eec940e2d8cd528->leave($__internal_be1cdd5aa75420674434d1734762c5a5fb860a81362e81722eec940e2d8cd528_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f68416bb9b5df24f2eb836a6239c36d3706540dd562d35b135d1ed01f873b1d9 = $this->env->getExtension("native_profiler");
        $__internal_f68416bb9b5df24f2eb836a6239c36d3706540dd562d35b135d1ed01f873b1d9->enter($__internal_f68416bb9b5df24f2eb836a6239c36d3706540dd562d35b135d1ed01f873b1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f68416bb9b5df24f2eb836a6239c36d3706540dd562d35b135d1ed01f873b1d9->leave($__internal_f68416bb9b5df24f2eb836a6239c36d3706540dd562d35b135d1ed01f873b1d9_prof);

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
