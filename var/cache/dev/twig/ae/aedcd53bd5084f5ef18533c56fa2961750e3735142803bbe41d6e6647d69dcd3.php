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
        $__internal_5ac0a314bd23991d7780b5caa13ca5705d70a1f90af289185c564490dcc59923 = $this->env->getExtension("native_profiler");
        $__internal_5ac0a314bd23991d7780b5caa13ca5705d70a1f90af289185c564490dcc59923->enter($__internal_5ac0a314bd23991d7780b5caa13ca5705d70a1f90af289185c564490dcc59923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac0a314bd23991d7780b5caa13ca5705d70a1f90af289185c564490dcc59923->leave($__internal_5ac0a314bd23991d7780b5caa13ca5705d70a1f90af289185c564490dcc59923_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4f0206e29e7e019b25661d33b38dfc80c326c3ea9d7f7a9753da706931fdbb5 = $this->env->getExtension("native_profiler");
        $__internal_a4f0206e29e7e019b25661d33b38dfc80c326c3ea9d7f7a9753da706931fdbb5->enter($__internal_a4f0206e29e7e019b25661d33b38dfc80c326c3ea9d7f7a9753da706931fdbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4f0206e29e7e019b25661d33b38dfc80c326c3ea9d7f7a9753da706931fdbb5->leave($__internal_a4f0206e29e7e019b25661d33b38dfc80c326c3ea9d7f7a9753da706931fdbb5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b349486936dadf353ae1aeab77b3c91a114576b0db0b418b5813fb268d87620 = $this->env->getExtension("native_profiler");
        $__internal_5b349486936dadf353ae1aeab77b3c91a114576b0db0b418b5813fb268d87620->enter($__internal_5b349486936dadf353ae1aeab77b3c91a114576b0db0b418b5813fb268d87620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b349486936dadf353ae1aeab77b3c91a114576b0db0b418b5813fb268d87620->leave($__internal_5b349486936dadf353ae1aeab77b3c91a114576b0db0b418b5813fb268d87620_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac657c5e8c3477ed4b178b3131bce75fb10cc9d8c8cb133219399b18b73181f4 = $this->env->getExtension("native_profiler");
        $__internal_ac657c5e8c3477ed4b178b3131bce75fb10cc9d8c8cb133219399b18b73181f4->enter($__internal_ac657c5e8c3477ed4b178b3131bce75fb10cc9d8c8cb133219399b18b73181f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac657c5e8c3477ed4b178b3131bce75fb10cc9d8c8cb133219399b18b73181f4->leave($__internal_ac657c5e8c3477ed4b178b3131bce75fb10cc9d8c8cb133219399b18b73181f4_prof);

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
