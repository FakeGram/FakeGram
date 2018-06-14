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
        $__internal_3b9db0158ee69d87d071f7a05aa8c6782b7d732bb5a3c11cfc9f7296dfc058fd = $this->env->getExtension("native_profiler");
        $__internal_3b9db0158ee69d87d071f7a05aa8c6782b7d732bb5a3c11cfc9f7296dfc058fd->enter($__internal_3b9db0158ee69d87d071f7a05aa8c6782b7d732bb5a3c11cfc9f7296dfc058fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b9db0158ee69d87d071f7a05aa8c6782b7d732bb5a3c11cfc9f7296dfc058fd->leave($__internal_3b9db0158ee69d87d071f7a05aa8c6782b7d732bb5a3c11cfc9f7296dfc058fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a2654a69f08cd5fdd3bc7c9c87fde7a2f87f566c07a83e79c5af0ab06c94ddf = $this->env->getExtension("native_profiler");
        $__internal_1a2654a69f08cd5fdd3bc7c9c87fde7a2f87f566c07a83e79c5af0ab06c94ddf->enter($__internal_1a2654a69f08cd5fdd3bc7c9c87fde7a2f87f566c07a83e79c5af0ab06c94ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a2654a69f08cd5fdd3bc7c9c87fde7a2f87f566c07a83e79c5af0ab06c94ddf->leave($__internal_1a2654a69f08cd5fdd3bc7c9c87fde7a2f87f566c07a83e79c5af0ab06c94ddf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30788c4609927d219a87e7feb8e725b1b2066491d3a640e1715df82044693c86 = $this->env->getExtension("native_profiler");
        $__internal_30788c4609927d219a87e7feb8e725b1b2066491d3a640e1715df82044693c86->enter($__internal_30788c4609927d219a87e7feb8e725b1b2066491d3a640e1715df82044693c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30788c4609927d219a87e7feb8e725b1b2066491d3a640e1715df82044693c86->leave($__internal_30788c4609927d219a87e7feb8e725b1b2066491d3a640e1715df82044693c86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3faffeb434b41cf90d203edc73173fb190cac6a089fdc4b08237f07414a5dd3d = $this->env->getExtension("native_profiler");
        $__internal_3faffeb434b41cf90d203edc73173fb190cac6a089fdc4b08237f07414a5dd3d->enter($__internal_3faffeb434b41cf90d203edc73173fb190cac6a089fdc4b08237f07414a5dd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3faffeb434b41cf90d203edc73173fb190cac6a089fdc4b08237f07414a5dd3d->leave($__internal_3faffeb434b41cf90d203edc73173fb190cac6a089fdc4b08237f07414a5dd3d_prof);

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
