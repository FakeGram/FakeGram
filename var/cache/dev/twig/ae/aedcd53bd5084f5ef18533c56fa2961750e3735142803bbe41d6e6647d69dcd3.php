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
        $__internal_cebfdf1d5227f1b8c75f4cae334702bbb8f635d4efee4522c91dee1d139547fa = $this->env->getExtension("native_profiler");
        $__internal_cebfdf1d5227f1b8c75f4cae334702bbb8f635d4efee4522c91dee1d139547fa->enter($__internal_cebfdf1d5227f1b8c75f4cae334702bbb8f635d4efee4522c91dee1d139547fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebfdf1d5227f1b8c75f4cae334702bbb8f635d4efee4522c91dee1d139547fa->leave($__internal_cebfdf1d5227f1b8c75f4cae334702bbb8f635d4efee4522c91dee1d139547fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_250a0e73429f3ff19f5e36e28557ff9f731efbb8f6eb0cd762d1b2990730a6bf = $this->env->getExtension("native_profiler");
        $__internal_250a0e73429f3ff19f5e36e28557ff9f731efbb8f6eb0cd762d1b2990730a6bf->enter($__internal_250a0e73429f3ff19f5e36e28557ff9f731efbb8f6eb0cd762d1b2990730a6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_250a0e73429f3ff19f5e36e28557ff9f731efbb8f6eb0cd762d1b2990730a6bf->leave($__internal_250a0e73429f3ff19f5e36e28557ff9f731efbb8f6eb0cd762d1b2990730a6bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5261634671bf06ca8a25086c60cbe4f992671d6de7145e6ebf5c66f423988798 = $this->env->getExtension("native_profiler");
        $__internal_5261634671bf06ca8a25086c60cbe4f992671d6de7145e6ebf5c66f423988798->enter($__internal_5261634671bf06ca8a25086c60cbe4f992671d6de7145e6ebf5c66f423988798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5261634671bf06ca8a25086c60cbe4f992671d6de7145e6ebf5c66f423988798->leave($__internal_5261634671bf06ca8a25086c60cbe4f992671d6de7145e6ebf5c66f423988798_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aca5e30c073cf62aca5b0b448c7871091b04c2675666249a4832e62d13fbb5a0 = $this->env->getExtension("native_profiler");
        $__internal_aca5e30c073cf62aca5b0b448c7871091b04c2675666249a4832e62d13fbb5a0->enter($__internal_aca5e30c073cf62aca5b0b448c7871091b04c2675666249a4832e62d13fbb5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aca5e30c073cf62aca5b0b448c7871091b04c2675666249a4832e62d13fbb5a0->leave($__internal_aca5e30c073cf62aca5b0b448c7871091b04c2675666249a4832e62d13fbb5a0_prof);

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
