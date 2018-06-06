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
        $__internal_c22b994c97078fb645c1a49f624e02aee9e52e11cc9834ee40e92636683cc031 = $this->env->getExtension("native_profiler");
        $__internal_c22b994c97078fb645c1a49f624e02aee9e52e11cc9834ee40e92636683cc031->enter($__internal_c22b994c97078fb645c1a49f624e02aee9e52e11cc9834ee40e92636683cc031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c22b994c97078fb645c1a49f624e02aee9e52e11cc9834ee40e92636683cc031->leave($__internal_c22b994c97078fb645c1a49f624e02aee9e52e11cc9834ee40e92636683cc031_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34d7e82d6476b237c155c8e30559ec76e0ced5eb8f1445655cc4130cc6c6ae06 = $this->env->getExtension("native_profiler");
        $__internal_34d7e82d6476b237c155c8e30559ec76e0ced5eb8f1445655cc4130cc6c6ae06->enter($__internal_34d7e82d6476b237c155c8e30559ec76e0ced5eb8f1445655cc4130cc6c6ae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34d7e82d6476b237c155c8e30559ec76e0ced5eb8f1445655cc4130cc6c6ae06->leave($__internal_34d7e82d6476b237c155c8e30559ec76e0ced5eb8f1445655cc4130cc6c6ae06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b76c84d10941be84e501efe214d4b2b3243b9bde5bc13a56e84ebc82ac939b5 = $this->env->getExtension("native_profiler");
        $__internal_8b76c84d10941be84e501efe214d4b2b3243b9bde5bc13a56e84ebc82ac939b5->enter($__internal_8b76c84d10941be84e501efe214d4b2b3243b9bde5bc13a56e84ebc82ac939b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b76c84d10941be84e501efe214d4b2b3243b9bde5bc13a56e84ebc82ac939b5->leave($__internal_8b76c84d10941be84e501efe214d4b2b3243b9bde5bc13a56e84ebc82ac939b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3e020daf192fd72db0f96dd7a09956452f12eb4a87618003669ad195e7813d2 = $this->env->getExtension("native_profiler");
        $__internal_b3e020daf192fd72db0f96dd7a09956452f12eb4a87618003669ad195e7813d2->enter($__internal_b3e020daf192fd72db0f96dd7a09956452f12eb4a87618003669ad195e7813d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3e020daf192fd72db0f96dd7a09956452f12eb4a87618003669ad195e7813d2->leave($__internal_b3e020daf192fd72db0f96dd7a09956452f12eb4a87618003669ad195e7813d2_prof);

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
