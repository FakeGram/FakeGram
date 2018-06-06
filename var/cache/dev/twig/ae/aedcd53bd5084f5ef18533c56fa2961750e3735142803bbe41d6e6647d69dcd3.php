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
        $__internal_8ed10e65801329e609241db7ce15bb70f392988fd8592fa5d3e7d0fc7807ee2d = $this->env->getExtension("native_profiler");
        $__internal_8ed10e65801329e609241db7ce15bb70f392988fd8592fa5d3e7d0fc7807ee2d->enter($__internal_8ed10e65801329e609241db7ce15bb70f392988fd8592fa5d3e7d0fc7807ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ed10e65801329e609241db7ce15bb70f392988fd8592fa5d3e7d0fc7807ee2d->leave($__internal_8ed10e65801329e609241db7ce15bb70f392988fd8592fa5d3e7d0fc7807ee2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e04fd8c6be3f41a213e2389a8412e40da13722d4e1e8f87d9910e25ec18efa8 = $this->env->getExtension("native_profiler");
        $__internal_0e04fd8c6be3f41a213e2389a8412e40da13722d4e1e8f87d9910e25ec18efa8->enter($__internal_0e04fd8c6be3f41a213e2389a8412e40da13722d4e1e8f87d9910e25ec18efa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e04fd8c6be3f41a213e2389a8412e40da13722d4e1e8f87d9910e25ec18efa8->leave($__internal_0e04fd8c6be3f41a213e2389a8412e40da13722d4e1e8f87d9910e25ec18efa8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a39a2579eaff3a299b6f5e8bfb7962a5754c2c532de3260e344422fd0776691a = $this->env->getExtension("native_profiler");
        $__internal_a39a2579eaff3a299b6f5e8bfb7962a5754c2c532de3260e344422fd0776691a->enter($__internal_a39a2579eaff3a299b6f5e8bfb7962a5754c2c532de3260e344422fd0776691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a39a2579eaff3a299b6f5e8bfb7962a5754c2c532de3260e344422fd0776691a->leave($__internal_a39a2579eaff3a299b6f5e8bfb7962a5754c2c532de3260e344422fd0776691a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b582919b784206081a75f8f45cf6d8d27a1a9ef0abd9bb18562fa5c8a77bc64 = $this->env->getExtension("native_profiler");
        $__internal_6b582919b784206081a75f8f45cf6d8d27a1a9ef0abd9bb18562fa5c8a77bc64->enter($__internal_6b582919b784206081a75f8f45cf6d8d27a1a9ef0abd9bb18562fa5c8a77bc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b582919b784206081a75f8f45cf6d8d27a1a9ef0abd9bb18562fa5c8a77bc64->leave($__internal_6b582919b784206081a75f8f45cf6d8d27a1a9ef0abd9bb18562fa5c8a77bc64_prof);

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
