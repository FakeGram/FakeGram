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
        $__internal_b747ff58dc99fadcb5d903fd0f429094ed0a36d0ec0167668896b0398f840df4 = $this->env->getExtension("native_profiler");
        $__internal_b747ff58dc99fadcb5d903fd0f429094ed0a36d0ec0167668896b0398f840df4->enter($__internal_b747ff58dc99fadcb5d903fd0f429094ed0a36d0ec0167668896b0398f840df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b747ff58dc99fadcb5d903fd0f429094ed0a36d0ec0167668896b0398f840df4->leave($__internal_b747ff58dc99fadcb5d903fd0f429094ed0a36d0ec0167668896b0398f840df4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_990c2a6f129a30088fa8834a371a734cb1532712cffc90d3e37cdfcfc7590600 = $this->env->getExtension("native_profiler");
        $__internal_990c2a6f129a30088fa8834a371a734cb1532712cffc90d3e37cdfcfc7590600->enter($__internal_990c2a6f129a30088fa8834a371a734cb1532712cffc90d3e37cdfcfc7590600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_990c2a6f129a30088fa8834a371a734cb1532712cffc90d3e37cdfcfc7590600->leave($__internal_990c2a6f129a30088fa8834a371a734cb1532712cffc90d3e37cdfcfc7590600_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92fe9fa85cea01f8cca30d2e27e7f33d210aefb7af2b9b0c575aa1adc308dc67 = $this->env->getExtension("native_profiler");
        $__internal_92fe9fa85cea01f8cca30d2e27e7f33d210aefb7af2b9b0c575aa1adc308dc67->enter($__internal_92fe9fa85cea01f8cca30d2e27e7f33d210aefb7af2b9b0c575aa1adc308dc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92fe9fa85cea01f8cca30d2e27e7f33d210aefb7af2b9b0c575aa1adc308dc67->leave($__internal_92fe9fa85cea01f8cca30d2e27e7f33d210aefb7af2b9b0c575aa1adc308dc67_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8dceee6fc2dcf96fffa69aeaf6779298849298eef73f2228e8074ec276f70e4 = $this->env->getExtension("native_profiler");
        $__internal_e8dceee6fc2dcf96fffa69aeaf6779298849298eef73f2228e8074ec276f70e4->enter($__internal_e8dceee6fc2dcf96fffa69aeaf6779298849298eef73f2228e8074ec276f70e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8dceee6fc2dcf96fffa69aeaf6779298849298eef73f2228e8074ec276f70e4->leave($__internal_e8dceee6fc2dcf96fffa69aeaf6779298849298eef73f2228e8074ec276f70e4_prof);

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
