<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f2e242b353403da6538e8ee2522410d4b8b53a540a3675785fe9462dfc5d6e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2067a2c75b713f4ddad15885907cef958c28ceb564670eda7cb7b7cdb02faff0 = $this->env->getExtension("native_profiler");
        $__internal_2067a2c75b713f4ddad15885907cef958c28ceb564670eda7cb7b7cdb02faff0->enter($__internal_2067a2c75b713f4ddad15885907cef958c28ceb564670eda7cb7b7cdb02faff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2067a2c75b713f4ddad15885907cef958c28ceb564670eda7cb7b7cdb02faff0->leave($__internal_2067a2c75b713f4ddad15885907cef958c28ceb564670eda7cb7b7cdb02faff0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_719c22876dee9705e78bdef4d82bf24915e856e21e5330c63f4b7c6bdd4c75b3 = $this->env->getExtension("native_profiler");
        $__internal_719c22876dee9705e78bdef4d82bf24915e856e21e5330c63f4b7c6bdd4c75b3->enter($__internal_719c22876dee9705e78bdef4d82bf24915e856e21e5330c63f4b7c6bdd4c75b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_719c22876dee9705e78bdef4d82bf24915e856e21e5330c63f4b7c6bdd4c75b3->leave($__internal_719c22876dee9705e78bdef4d82bf24915e856e21e5330c63f4b7c6bdd4c75b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44ba4518bbecc807658a4507047359c8365e732d5c889bc39c666970a81a57b5 = $this->env->getExtension("native_profiler");
        $__internal_44ba4518bbecc807658a4507047359c8365e732d5c889bc39c666970a81a57b5->enter($__internal_44ba4518bbecc807658a4507047359c8365e732d5c889bc39c666970a81a57b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44ba4518bbecc807658a4507047359c8365e732d5c889bc39c666970a81a57b5->leave($__internal_44ba4518bbecc807658a4507047359c8365e732d5c889bc39c666970a81a57b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47e250c32bbfb02fd1e2b829ed7deeb10753ec1c978ea1e0729ba961368fe6d5 = $this->env->getExtension("native_profiler");
        $__internal_47e250c32bbfb02fd1e2b829ed7deeb10753ec1c978ea1e0729ba961368fe6d5->enter($__internal_47e250c32bbfb02fd1e2b829ed7deeb10753ec1c978ea1e0729ba961368fe6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47e250c32bbfb02fd1e2b829ed7deeb10753ec1c978ea1e0729ba961368fe6d5->leave($__internal_47e250c32bbfb02fd1e2b829ed7deeb10753ec1c978ea1e0729ba961368fe6d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
