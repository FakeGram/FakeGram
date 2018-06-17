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
        $__internal_c279ee19ae397c387c86ed4b289942ede02979e4337d3d6653dc572284b1e567 = $this->env->getExtension("native_profiler");
        $__internal_c279ee19ae397c387c86ed4b289942ede02979e4337d3d6653dc572284b1e567->enter($__internal_c279ee19ae397c387c86ed4b289942ede02979e4337d3d6653dc572284b1e567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c279ee19ae397c387c86ed4b289942ede02979e4337d3d6653dc572284b1e567->leave($__internal_c279ee19ae397c387c86ed4b289942ede02979e4337d3d6653dc572284b1e567_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_851410137fb2faec3f48b3d8c7b497cb41b122c43609cac2fc4c5bc665417e69 = $this->env->getExtension("native_profiler");
        $__internal_851410137fb2faec3f48b3d8c7b497cb41b122c43609cac2fc4c5bc665417e69->enter($__internal_851410137fb2faec3f48b3d8c7b497cb41b122c43609cac2fc4c5bc665417e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_851410137fb2faec3f48b3d8c7b497cb41b122c43609cac2fc4c5bc665417e69->leave($__internal_851410137fb2faec3f48b3d8c7b497cb41b122c43609cac2fc4c5bc665417e69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e7bcb1833f13d4e6effa2674f7882b34598520bd3cbc0942de8026886c54400 = $this->env->getExtension("native_profiler");
        $__internal_8e7bcb1833f13d4e6effa2674f7882b34598520bd3cbc0942de8026886c54400->enter($__internal_8e7bcb1833f13d4e6effa2674f7882b34598520bd3cbc0942de8026886c54400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e7bcb1833f13d4e6effa2674f7882b34598520bd3cbc0942de8026886c54400->leave($__internal_8e7bcb1833f13d4e6effa2674f7882b34598520bd3cbc0942de8026886c54400_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3505558f058cc9b529206179bbebe005a543f57824ca2650a4d1f52f732d7d6c = $this->env->getExtension("native_profiler");
        $__internal_3505558f058cc9b529206179bbebe005a543f57824ca2650a4d1f52f732d7d6c->enter($__internal_3505558f058cc9b529206179bbebe005a543f57824ca2650a4d1f52f732d7d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3505558f058cc9b529206179bbebe005a543f57824ca2650a4d1f52f732d7d6c->leave($__internal_3505558f058cc9b529206179bbebe005a543f57824ca2650a4d1f52f732d7d6c_prof);

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
